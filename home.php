<div style="width:100%; padding:2px; height:290px;">
                    	<div id="mwww" loop="true" style="width:100%; height:100%;">
                        	                                <div style="width:99%; height:100%; position:relative;" class="cent">沒有資料</div>
                                                        </div>
                    </div>


<script>
                    	var lin=new Array();
                      lin=<?
$mvim=all('mvim',['sh'=>1]);
$str=[];
foreach($mvim as $m){
$str[]="'./img/".$m['file']."'";

}
echo $mvshow="[".implode(",",$str)."]";
?>;
						var now=0;
						if(lin.length>1)
						{
							setInterval("ww()",3000);
							now=1;
						}
            ww();
						function ww()
						{
							$("#mwww").html("<embed loop=true src='"+lin[now]+"' style='width:99%; height:100%;'></embed>")
							//$("#mwww").attr("src",lin[now])
							now++;
							if(now>=lin.length)
							now=0;
						}
                    </script>
                
                	<div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
                    		<span class="t botli">最新消息區
                        <?
                        $new=nums('news',['sh'=>1]);
                        if($new>5){
                          ?>
                          <div  style="float:right"><a href="index.php?do=news">More...</a></div>
                          <?
                        }
                        ?>
                            								</span>
                            <ul class="ssaa" style="list-style-type:decimal;">
                            <?
                              $news=q("select * from news where sh='1' limit 0,5");
                              foreach($news as $n){
                                ?>
                                 <li><?=mb_substr($n['text'],0,20,"utf8");?>
                                 <span class="all" style="display:none"><?=$n['text']?></span>
                                 
                                 
                                 </li>
                                 <?
                              }
                            ?>

                            	                            </ul>
        			<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
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
                        </script>
                        
                    </div>