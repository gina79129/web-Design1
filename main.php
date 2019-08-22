<?
																				$do=(!empty($_GET['do']))?$_GET['do']:"title";
																				switch($do){
                                          case "title":
                                          ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli">網站標題管理</p>
  <form method="post" action="api.php?do=editData" enctype="multipart/form-data">
    <table width="100%" class="cent">
      <tbody>
        <tr class="yel">
          <td width="45%">網站標題</td>
          <td width="23%">替代文字</td>
          <td width="7%">顯示</td>
          <td width="7%">刪除</td>
          <td></td>
        </tr>
        <?
        $result=all('title','');
        foreach($result as $r){
          $chk=(!empty($r['sh']))?"checked":"";
        
        ?>
        <tr>
          <td width="45%"><img src="./img/<?=$r['file']?>" alt="" name="file" style="width:300px;height:30px;"></td>
          <td width="23%"><input type="text" name="text[]" value="<?=$r['text']?>"></td>
          <td width="7%"><input type="radio" name="sh" value="<?=$r['id']?>" <?=$chk?>></td>
          <td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
          <td><input type="button"
              onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=up<?=$_GET['do']?>&id=<?=$r['id']?>&#39;)"
              value="更新圖片"></td>
          <input type="hidden" name="id[]" value="<?=$r['id']?>">
        </tr>
        <?
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <input type="hidden" name="table" value="<?=$_GET['do']?>">
          <td width="200px"><input type="button"
              onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增網站標題圖片">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>

<?
                                    break;

                                    case "ad":
                                    ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">動態文字廣告管理</p>
<form method="post" action="api.php?do=editData" enctype="multipart/form-data">
<table width="100%" class="cent">
<tbody>
  <tr class="yel">
    <td width="80%">動態文字廣告</td>
    <td width="10%">顯示</td>
    <td width="10%">刪除</td>
   
  </tr>
  <?
  $result=all('ad','');
  foreach($result as $r){
    $chk=(!empty($r['sh']))?"checked":"";
  
  ?>
  <tr>
    <td width="80%"><input type="text" name="text[]" value="<?=$r['text']?>" style="width:90%"></td>
    <td width="10%"><input type="checkbox" name="sh[]" value="<?=$r['id']?>" <?=$chk?>></td>
    <td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
    <input type="hidden" name="id[]" value="<?=$r['id']?>">
  </tr>
  <?
  }
  ?>
</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
  <tr>
    <input type="hidden" name="table" value="<?=$_GET['do']?>">
    <td width="200px"><input type="button"
        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增動態文字廣告">
    </td>
    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
  </tr>
</tbody>
</table>

</form>
</div>

<?
                              break;

                              case "mvim":
                              ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">動畫圖片管理</p>
<form method="post" action="api.php?do=editData" enctype="multipart/form-data">
<table width="100%" class="cent">
<tbody>
<tr class="yel">
<td width="70%">動畫圖片</td>
<td width="10%">顯示</td>
<td width="10%">刪除</td>
<td width="10%"></td>
</tr>
<?
$result=all('mvim','');
foreach($result as $r){
$chk=(!empty($r['sh']))?"checked":"";

?>
<tr>
<td width="70%"><embed src="./img/<?=$r['file']?>" alt="" name="file" style="width:80px;height:60px;"></td>
<td width="10%"><input type="checkbox" name="sh[]" value="<?=$r['id']?>" <?=$chk?>></td>
<td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
<td width="10%"><input type="button"
  onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=up<?=$_GET['do']?>&id=<?=$r['id']?>&#39;)"
  value="更換動畫"></td>
<input type="hidden" name="id[]" value="<?=$r['id']?>">
</tr>
<?
}
?>
</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px"><input type="button"
  onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增動畫圖片">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
                        break;

                        case "image":
                        ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="api.php?do=editData" enctype="multipart/form-data">
<table width="100%" class="cent">
<tbody>
<tr class="yel">
<td width="60%">網站標題</td>
<td width="10%">顯示</td>
<td width="10%">刪除</td>
<td width="10%"></td>
</tr>
<?
$image=nums('image',[]);
$div=3;
$now=(!empty($_GET['p']))?$_GET['p']:1;
$page=ceil($image/$div);
$start=($now-1)*$div;
$result=q("select * from image limit $start,$div");
foreach($result as $r){
$chk=(!empty($r['sh']))?"checked":"";

?>
<tr>
<td width="60%"><img src="./img/<?=$r['file']?>" alt="" name="file" style="width:100px;height:68px;"></td>
<td width="10%"><input type="checkbox" name="sh[]" value="<?=$r['id']?>" <?=$chk?>></td>
<td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
<td width="10%"><input type="button"
onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=up<?=$_GET['do']?>&id=<?=$r['id']?>&#39;)"
value="更換圖片"></td>
<input type="hidden" name="id[]" value="<?=$r['id']?>">
</tr>
<?
}
?>
<tr>
  <td colspan="4">
  <?
    if(($now-1)>0){
      ?>
      <a href="?do=image&p=<?=($now-1)?>">< </a>
      <?
    }
    for($i=1;$i<=$page;$i++){
      if($now==$i){
        ?>
        <a href="?do=image&p=<?=$i?>"><span style="font-size:24px"><?=$i?></span></a>
        <?
      }else{
        ?>
        <a href="?do=image&p=<?=$i?>"><?=$i?></a>
        <?
      }
    }
    if(($now+1)<=$page){
      ?>
        <a href="?do=image&p=<?=($now+1)?>"> ></a>
      <?
    }

  ?>
  </td>
</tr>
</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px"><input type="button"
onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增校園映像圖片">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
                  break;

                  case "total":
                  ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">進站總人數管理</p>
<form method="post" action="api.php?do=newTotal" enctype="multipart/form-data">
<table width="50%" style="margin:auto;">
<tbody>
<?
$total=find('total',1);
?>
<tr>
<td width="15%" style="background:#F3DA49;text-align:right;" >進站總人數：</td>
<td width="20%"><input type="text" name="total" value="<?=$total['total']?>"></td>
</tr>
<input type="hidden" name="id[]" value="<?=$total['id']?>">
</tr>

</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
            break;
            
            case "bottom":
                  ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">頁尾版權資料管理</p>
<form method="post" action="api.php?do=newBottom" enctype="multipart/form-data">
<table width="50%" style="margin:auto;">
<tbody>
<?
$bottom=find('bottom',1);
?>
<tr>
<td width="15%" style="background:#F3DA49;text-align:right;" >頁尾版權資料：</td>
<td width="20%"><input type="text" name="bottom" value="<?=$bottom['bottom']?>"></td>
</tr>
<input type="hidden" name="id[]" value="<?=$bottom['id']?>">
</tr>

</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
            break;

            case "news":
            ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">最新消息資料管理</p>
<form method="post" action="api.php?do=editData" enctype="multipart/form-data">
<table width="100%" class="cent">
<tbody>
<tr class="yel">
<td width="80%">最新消息資料內容</td>
<td width="10%">顯示</td>
<td width="10%">刪除</td>
</tr>
<?
$news=nums('news',[]);
$div=5;
$now=(!empty($_GET['p']))?$_GET['p']:1;
$page=ceil($news/$div);
$start=($now-1)*$div;
$result=q("select * from news limit $start,$div");
foreach($result as $r){
$chk=(!empty($r['sh']))?"checked":"";

?>
<tr>
<td width="80%"><textarea name="text[]" id="" cols="30" rows="3" style="width:90%"><?=$r['text']?></textarea></td>
<td width="10%"><input type="checkbox" name="sh[]" value="<?=$r['id']?>" <?=$chk?>></td>
<td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
<input type="hidden" name="id[]" value="<?=$r['id']?>">
</tr>
<?
}
?>
<tr>
  <td colspan="4">
  <?
    if(($now-1)>0){
      ?>
      <a href="?do=news&p=<?=($now-1)?>">< </a>
      <?
    }
    for($i=1;$i<=$page;$i++){
      if($now==$i){
        ?>
        <a href="?do=news&p=<?=$i?>"><span style="font-size:24px"><?=$i?></span></a>
        <?
      }else{
        ?>
        <a href="?do=news&p=<?=$i?>"><?=$i?></a>
        <?
      }
    }
    if(($now+1)<=$page){
      ?>
        <a href="?do=news&p=<?=($now+1)?>"> ></a>
      <?
    }

  ?>
</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px"><input type="button"
onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增最新消息資料">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
      break;

      case "admin":
      ?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">管理者帳號管理</p>
<form method="post" action="api.php?do=editData" enctype="multipart/form-data">
<table width="90%" class="cent" style="margin:auto;">
<tbody>
<tr class="yel">
<td width="40%">帳號</td>
<td width="40%">密碼</td>
<td width="10%">刪除</td>
</tr>
<?
$result=all('admin','');
foreach($result as $r){


?>
<tr>
<td width="40%"><input type="text" name="acc" value="<?=$r['acc']?>"></td>
<td width="40%"><input type="password" name="pw" value="<?=$r['pw']?>"></td>
<td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
<input type="hidden" name="id[]" value="<?=$r['id']?>">
</tr>
<?
}
?>
</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px"><input type="button"
onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增管理者帳號">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
break;

case "menu":
?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">選單管理</p>
<form method="post" action="api.php?do=editData" enctype="multipart/form-data">
<table width="100%" class="cent">
<tbody>
<tr class="yel">
<td width="30%">主選單名稱</td>
<td width="30%">選單連結網址</td>
<td width="10%">次選單數</td>
<td width="10%">顯示</td>
<td width="10%">刪除</td>
<td width="10%"></td>
<td></td>
</tr>
<?
$result=all('menu',['parent'=>0]);
foreach($result as $r){
$chk=(!empty($r['sh']))?"checked":"";

?>
<tr>
<td width="30%"><input type="text" name="text[]" value=<?=$r['text']?>></td>
<td width="30%"><input type="text" name="href[]" value="<?=$r['href']?>"></td>
<td width="10%"><?=nums('menu',['parent'=>$r['id']])?></td>
<td width="10%"><input type="checkbox" name="sh[]" value="<?=$r['id']?>" <?=$chk?>></td>
<td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
<td width="10%"><input type="button"
onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=up<?=$_GET['do']?>&id=<?=$r['id']?>&#39;)"
value="編輯次選單"></td>
<input type="hidden" name="id[]" value="<?=$r['id']?>">
</tr>
<?
}
?>
</tbody>
</table>
<table style="margin-top:40px; width:70%;">
<tbody>
<tr>
<input type="hidden" name="table" value="<?=$_GET['do']?>">
<td width="200px"><input type="button"
onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=<?=$_GET['do']?>&#39;)" value="新增主選單">
</td>
<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody>
</table>

</form>
</div>

<?
break;
                                        }
                                    ?>