
                        <div style="text-align:center;">
												<?

$news=nums('news',[]);
$div=5;
$now=(!empty($_GET['p']))?$_GET['p']:1;
$page=ceil($news/$div);
$start=($now-1)*$div;
$result=q("select * from news limit $start,$div");
?>
<ol start="<?=$start+1?>" class="ssaa" style="list-style-type:decimal;">
<?
foreach($result as $r){
?>
<li style="text-align:left;"><?=mb_substr($r['text'],0,20,"utf8");?>
                                 <span class="all" style="display:none"><?=$r['text']?></span>
                                 
                                 
                                 </li>

</ul>

<?
}

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



				<div id="altt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
				<script>
						$(".ssaa li").hover(
							function ()
							{
								$("#altt").html("<pre>"+$(this).children(".all").html()+"</pre>")
								$("#altt").show()
							},function(){
                $("#altt").hide()
              }
						)

            $("#altt").hover(
              function ()
              {
                $("#altt").show()
              },function(){
                $("#altt").hide()
              }
            )

						// $(".ssaa li").mouseout(
						// 	function()
						// 	{
						// 		$("#altt").hide()
						// 	},function(){
            //     $("#altt").show()
            //   }

						// )
                        </script>
    </div>
	           