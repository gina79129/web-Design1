<?
	$do=(!empty($_GET['do']))?$_GET['do']:"";
switch($do){
  case "title":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增標題區圖片</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">標題區圖片:</td>
    <td ><input type="file" name="file"></td>
  </tr>
  <tr>
    <td style="text-align:right">標題區替代文字:</td>
    <td><input type="text" name="text"></td>
    <input type="hidden" name="table" value="title">
  </tr>
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "uptitle":
  ?>
  <form action="api.php?do=newImageData" method="post" enctype="multipart/form-data">
  <h3 class="cent">更新標題區圖片</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">標題區圖片:</td>
    <td ><input type="file" name="file"></td>
  </tr>
  <input type="hidden" name="id[]" value="<?=$_GET['id']?>">
  <input type="hidden" name="table" value="title">
  <tr class="cent">
    <td colspan="2"><input type="submit" value="更新"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "ad":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增動態文字廣告</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">動態文字廣告:</td>
    <td><input type="text" name="text"></td>
    <input type="hidden" name="table" value="ad">
  </tr>
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "mvim":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增動畫圖片</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">動畫圖片:</td>
    <td ><input type="file" name="file"></td>
    <input type="hidden" name="table" value="mvim">
  </tr>
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "upmvim":
  ?>
  <form action="api.php?do=newImageData" method="post" enctype="multipart/form-data">
  <h3 class="cent">更新動畫圖片</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">動畫圖片:</td>
    <td ><input type="file" name="file"></td>
  </tr>
  <input type="hidden" name="id[]" value="<?=$_GET['id']?>">
  <input type="hidden" name="table" value="mvim">
  <tr class="cent">
    <td colspan="2"><input type="submit" value="更新"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "image":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增校園映像圖片</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">校園映像圖片:</td>
    <td ><input type="file" name="file"></td>
    <input type="hidden" name="table" value="image">
  </tr>
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "upimage":
  ?>
  <form action="api.php?do=newImageData" method="post" enctype="multipart/form-data">
  <h3 class="cent">更新校園映像圖片</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">校園映像圖片:</td>
    <td ><input type="file" name="file"></td>
  </tr>
  <input type="hidden" name="id[]" value="<?=$_GET['id']?>">
  <input type="hidden" name="table" value="image">
  <tr class="cent">
    <td colspan="2"><input type="submit" value="更新"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "news":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增最新消息資料</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">最新消息資料:</td>
    <td><textarea name="text" id="" cols="30" rows="10"></textarea></td>
    <input type="hidden" name="table" value="news">
  </tr>
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;
 
  case "admin":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增管理者帳號</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">帳號:</td>
    <td><input type="text" name="acc"></td>
  </tr>

  <tr>
    <td style="text-align:right">密碼:</td>
    <td><input type="password" name="pw"></td>
  </tr>

  <tr>
    <td style="text-align:right">確認密碼:</td>
    <td><input type="password" name="pw2"></td>
  </tr>
  <input type="hidden" name="table" value="admin">
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "menu":
  ?>
  <form action="api.php?do=newData" method="post" enctype="multipart/form-data">
  <h3 class="cent">新增主選單</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td style="text-align:right">主選單名稱:</td>
    <td><input type="text" name="text"></td>
  </tr>

  <tr>
    <td style="text-align:right">選單連結網址:</td>
    <td><input type="text" name="href"></td>
  </tr>
  <input type="hidden" name="table" value="menu">
  <tr class="cent">
    <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
  </form>
  <?
  break;

  case "upmenu":
  ?>
  <form action="api.php?do=editSub" method="post" enctype="multipart/form-data">
  <h3 class="cent">編輯次選單</h3>
  <hr>
<table style="margin:auto;">
  <tr>
    <td>次選單名稱</td>
    <td>次選單連結網址</td>
    <td>刪除</td>
  </tr>
  <?
  include "base.php";
  $menu=all('menu',['parent'=>$_GET['id']]);
  foreach($menu as $key =>$m){
  ?>
  <tr>
    <td><input type="text" name="text[]" value="<?=$m['text']?>"></td>
    <td><input type="text" name="href[]" value="<?=$m['href']?>"></td>
    <td><input type="checkbox" name="del[]" value="<?=$m['id']?>"></td>
    <input type="hidden" name="id[]" value="<?=$m['id']?>">
    </tr>
    <?
 }
  ?>
  <tr id="more">
    <input type="hidden" name="table" value="menu">
    <input type="hidden" name="parent" value="<?=$_GET['id']?>">
    <td colspan="2"  class="cent"><input type="submit" value="修改確定">
    <input type="reset" value="重置">
    <input type="button" onclick="newMenu()" value="更多次選單">
    </td>
  </tr>
</table>
  </form>
  <script>
  function newMenu(){
    let newTr=`<tr>
    <td><input type="text" name="text2[]"></td>
    <td><input type="text" name="href2[]"></td>
    <input type="hidden" name="id[]" value="">
    </tr>`;

    $("#more").before(newTr);
  }
  
  </script>
  <?
  break;
}
 ?>