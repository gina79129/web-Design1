<?
// $pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=db15-1","root","");
$pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=s1080115","s1080115","s1080115");
localhost:http://220.128.133.15/s1080115/;
session_start();
if(empty($_SESSION['total'])){
  $total=find('total',1);
  $total['total']=$total['total']+1;
  save('total',$total);
  $_SESSION['total']=$total['total'];
}

function all($table,$data){
  global $pdo;
  if(is_array($data)){
    foreach($data as $key =>$val){
      $str[]=sprintf("%s='%s'",$key,$val);
    }
    return $pdo->query("select * from $table where ".implode(" && ",$str)."")->fetchAll();
  }else{
    return $pdo->query("select * from $table")->fetchAll();
  }
}

function find($table,$data){
  global $pdo;
  if(is_array($data)){
    foreach($data as $key =>$val){
      $str[]=sprintf("%s='%s'",$key,$val);
    }
    return $pdo->query("select * from $table where ".implode(" && ",$str)."")->fetch(PDO::FETCH_ASSOC);
  }else{
    return $pdo->query("select * from $table where id='$data'")->fetch(PDO::FETCH_ASSOC);
  }
}

function nums($table,$data){
  global $pdo;
  if(count($data)>0){
    foreach($data as $key =>$val){
      $str[]=sprintf("%s='%s'",$key,$val);
    }
    return $pdo->query("select count(*) from $table where ".implode(" && ",$str)."")->fetchColumn();
  }else{
    return $pdo->query("select count(*) from $table")->fetchColumn();
  }
}

function del($table,$data){
  global $pdo;
  if(is_array($data)){
    foreach($data as $key =>$val){
      $str[]=sprintf("`%s`='%s'",$key,$val);
    }
    // $sql="delete from $table where ".implode(" && ",$str)."";
    // echo $sql;
    return $pdo->exec("delete from $table where ".implode(" && ",$str)."");
  }else{
    // $sql="delete from $table where id='$data'";
    // echo $sql;
    return $pdo->exec("delete from $table where id='$data'");
  }
}

function save($table,$data){
  global $pdo;
  if(!empty($data['id'])){
    foreach($data as $key =>$val){
      if($key != 'id'){
        $str[]=sprintf("`%s`='%s'",$key,$val);
      }
    }
    return $pdo->exec("update $table set ".implode(" , ",$str)." where id='".$data['id']."'");
  }else{
    return $pdo->exec("insert into $table (`".implode("` , `",array_keys($data))."`) values ('".implode("','",$data)."')");
  }
}

function q($str){
  global $pdo;
    return $pdo->query($str)->fetchAll();
}

function to($page,$param){
  if(!empty($param)){
    header("location:$page?$param");
  }else{
    header("location:$page");
  }
  }

?>