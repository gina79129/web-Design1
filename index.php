<?
include "base.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>卓越科技大學校園資訊系統</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
</head>

<body>
<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>
<iframe style="display:none;" name="back" id="back"></iframe>
	<div id="main">
			<?
			$title=find('title',['sh'=>1]);
			?>
			<a title="<?=$title['text']?>" href="index.php"><div class="ti" style="background:url(&#39;./img/<?=$title['file']?>&#39;); background-size:cover;"></div><!--標題--></a>
        	<div id="ms">
             	<div id="lf" style="float:left;">
            		<div id="menuput" class="dbor">
                    <!--主選單放此-->
                    	                            <span class="t botli">主選單區</span>
																									<?
																										$menu=all('menu',['parent'=>0,'sh'=>1]);
																										foreach($menu as $me){
																											?>
																											<div class="mainmu cent"><a href="<?=$me['href']?>"><?=$me['text']?></a>
																											<?
																												$chkmenu=nums('menu',['parent'=>$me['id']]);
																												if($chkmenu>0){
																													?>
																													<div class="mw">
																													<?
																													$allmenu=all('menu',['parent'=>$me['id']]);
																													foreach($allmenu as $a){
																														?>
																														<div class="mainmu2 cent"><a href="<?=$a['href']?>"><?=$a['text']?></a></div>
																														<?
																													}
																													?>	
																											</div>
																											<?
																												}
																												?>	
																												</div>
																												<?
																										}
																									?>
                                                </div>
						
                    <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    	<span class="t">進站總人數 :
											<?=$total=find('total',1)['total']?></span>
                    </div>
        		</div>
                <div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">

								
                	                     <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
																			 <?
									$mar=all('ad',['sh'=>1]);
									$str="";
									foreach($mar as $m){
										$str.=$m['text']."&nbsp;&nbsp;&nbsp;";
									}
									echo $str;
								?>
                    	                    </marquee>
                    <div style="height:32px; display:block;"></div>
                                        <!--正中央-->
                                       <?
																				$do=(!empty($_GET['do']))?$_GET['do']:"home";
																				switch($do){
																					case "home":
																					include "home.php";
																					break;

																					case "login":
																					include "login.php";
																					break;

																					case "news":
																					include "news.php";
																					break;

																					case "logout":
																					unset($_SESSION['login']);
																					to("index.php","?do=login");
																					break;

																					default:
																					echo "非法入侵";
																					break;

																				}
																			 ?>
                	                </div>
               
            
                                 <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                	<!--右邊-->
									<?
									if(!empty($_SESSION['login'])){
										?>
										<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo(&#39;admin.php&#39;)">返回管理頁</button>
										<?

									}else{
										?>
										<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo(&#39;?do=login&#39;)">管理登入</button>
										<?
									}
									?>   
                	<div style="width:89%; height:480px;" class="dbor">
                    	<span class="t botli">校園映象區</span>
											<div class="cent"><img src="./icon/up.jpg" onclick="pp(1)" style="margin:3px;"></div>
											<?
											$image=all('image',['sh'=>1]);
											foreach($image as $k =>$i){
												?>
											<div class="cent im" id="ssaa<?=$k?>"><img src="./img/<?=$i['file']?>" style="width:150px;height:103px" ></div>
												<?
											}
											?>
											<div class="cent"><img src="./icon/dn.jpg" onclick="pp(2)" style="margin:3px;"></div>
						                        <script>
                        	var nowpage=0,num=<?=nums('image',['sh'=>1])?>;
							function pp(x)
							{
								var s,t;
								if(x==1&&nowpage-1>=0)
								{nowpage--;}
								if(x==2&&(nowpage+1)<=num-3)
								{nowpage++;}
								$(".im").hide()
								for(s=0;s<=2;s++)
								{
									t=s*1+nowpage*1;
									$("#ssaa"+t).show()
								}
							}
							pp(1)
                        </script>
                    </div>
                </div>
                            </div>
             	<div style="clear:both;"></div>
            	<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
                	<span class="t" style="line-height:123px;"><?=$bottom=find('bottom',1)['bottom']?></span>
                </div>
    </div>

</body></html>