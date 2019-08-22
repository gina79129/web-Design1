<?
include "base.php";
	$do=(!empty($_GET['do']))?$_GET['do']:"";
switch($do){
  case "newData":
  if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"./img/".$data['file']);
  }
    $table=$_POST['table'];
    switch($table){
      case "title":
      case "ad":
      case "news":
      $data['text']=$_POST['text'];
      break;

      case "admin":
      $data['acc']=$_POST['acc'];
      $data['pw']=$_POST['pw'];
      break;

      case "menu":
      $data['text']=$_POST['text'];
      $data['href']=$_POST['href'];
      break;
    }
    save($table,$data);
    to("admin.php","do=$table");

  break;

  case "newTotal":
  $table=$_POST['table'];
  $total=$_POST['total'];
  $newtotal=q("update $table set $table ='$total'");
  save($table,$newtotal);
  to("admin.php","do=$table");
  break;

  case "newBottom":
  $table=$_POST['table'];
  $bottom=$_POST['bottom'];
  $newbottom=q("update $table set $table ='$bottom'");
  save($table,$newbottom);
  to("admin.php","do=$table");
  break;

  case "newImageData":
  $table=$_POST['table'];
  if(!empty($_FILES['file']['tmp_name'])){
    $image['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"./img/".$image['file']);
  }
  foreach($_POST['id'] as $key=>$id){
    $image['id']=$id;
  }
  save($table,$image);
  to("admin.php","do=$table");
  break;

  case "editData":

  if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key=>$id){
      if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
      }else{
        $table=$_POST['table'];
        $data=find($table,$id);
        switch($table){
          case "title":
          $data['text']=$_POST['text'][$key];
          $data['sh']=($_POST['sh']==$id)?1:0;
          break;
          case "ad":
          case "news":
          $data['text']=$_POST['text'][$key];
          $data['sh']=(in_array($id,$_POST['sh']))?1:0;
          break;
          case "mvim":
          case "image":
          case "menu":
          $data['sh']=(in_array($id,$_POST['sh']))?1:0;
          break;
    
        }
        save($table,$data);
      }
      
    }
  }
  to("admin.php","do=$table");
  break;

  case "editSub":
  $table=$_POST['table'];
  $parent=$_POST['parent'];
  if(!empty($_POST['text2'])){
    foreach($_POST['text2'] as $key=> $newText){
      if(empty($newText)) continue;
      // echo "<script>alert('$newText')</script>";
      $data['text']=$newText;
      $data['href']=$_POST['href2'][$key];
      $data['parent']=$parent;
      $data['sh']=1;

      save($table,$data);
    
    }
  }

  if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key=>$id){
      if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
      }else{
        if(!empty($id)){
        $data=find($table,$id);
        // echo "<script>alert('$id')</script>";
        $data['text']=$_POST['text'][$key];
        $data['href']=$_POST['href'][$key];
        // echo "<script>alert('".$data['text']."')</script>";
        save($table,$data);
      }
        } 
      }    
    }


  
  to("admin.php","do=menu");        
  break;


  }
  ?>