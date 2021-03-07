<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class DB{
    private $dsn="mysql:host=localhost;dbname=db23;charset=utf8";
    private $table;
    private $pdo;

    function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,"root","");
    }

    function all(...$arg){
        $sql="select * from $this->table";
        if(!empty($arg[0])&& is_array($arg[0])){
            foreach($arg[0]as $k=>$v){
                $tmp[]=sprintf("`%s`='%s'",$k,$v);
            }
            $sql=$sql." where ".implode(" && ",$tmp);
        }
        if(!empty($arg[1])){
            $sql=$sql.$arg[1];
        }
        return $this->pdo->query($sql)->fetchAll();
    }

    function count(...$arg){
        $sql="select count(*) from $this->table";
        if(!empty($arg[0])&& is_array($arg[0])){
            foreach($arg[0]as $k=>$v){
                $tmp[]=sprintf("`%s`='%s'",$k,$v);
            }
            $sql=$sql." where ".implode(" && ",$tmp);
        }
        if(!empty($arg[1])){
            $sql=$sql.$arg[1];
        }
        return $this->pdo->query($sql)->fetchColumn();
    }

    function q($sql){
        return $this->pdo->query($sql)->fetch();
    }

    function find($arg){
        $sql="select * from $this->table";
        if(is_array($arg)){
            foreach($arg as $k=>$v){
                $tmp[]=sprintf("`%s`='%s'",$k,$v);
            }
            $sql=$sql." where ".implode(" && ",$tmp);
        }else{
            $sql=$sql." where `id`='{$arg}'";
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function delete($arg){
        $sql="delete from $this->table";
        if(is_array($arg)){
            foreach($arg as $k=>$v){
                $tmp[]=sprintf("`%s`='%s'",$k,$v);
            }
            $sq=$sql." where ".implode(" && ",$tmp);
        }else{
            $sql=$sql." where `id`='{$arg}'";
        }
        return $this->pdo->exec($sql);
    }

    function save($arg){
        if(empty($arg['id'])){
            foreach($arg as $k=>$v){
                $ks[]=$k;
                $vs[]=$v;
            }
            $sql="insert into $this->table (`".implode("`,`",$ks)."`) values('".implode("','",$vs)."')";
        }else{
            foreach($arg as $k=>$v){
                $tmp[]=sprintf("`%s`='%s'",$k,$v);
            }
            $sql="update $this->table set ".implode(",",$tmp)." where `id`='{$arg['id']}'";
        }
        return $this->pdo->exec($sql);
    }
}

function to($url){
    header("location:".$url);
}


$Adm=new DB('admin');
$Mv=new DB('mvim');
$Mq=new DB('marquee');
$Title=new DB('title');
$Total=new DB('total');
$News=new DB('news');
$Img=new DB('img');
$Ft=new DB('ft');
$User=new DB('user');
$Menu=new DB('menu');
$Good=new DB('good');
$Que=new DB('que');
$Vote=new DB('vote');
$Blog=new DB('blog');
$Cls=new DB('cls');
$Pro=new DB('pro');
$Ord=new DB('ord');
$Visit=new DB('visit');

if(empty($_SESSION['today'])){
    $today=$Visit->find(['date'=>date('Y-m-d')]);
    if(empty($today)){
        $today['date']=date('Y-m-d');
        $today['num']=1;
        $Visit->save($today);
    }else{
        $today['num']++;
        $Visit->save($today);
    }
    $_SESSION['today']=$Visit->find(['date'=>date('Y-m-d')])['num'];
    $_SESSION['total']=$Visit->q("select sum(`num`) from visit")[0];
}
