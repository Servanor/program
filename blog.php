<!DOCTYPE html>
<html>
<head>
<meta name="description" content="" >
<meta name="keywords" content="" >
<meta name="author" content="" >
<link rel="stylesheet" href="main.css" type="text/css" />
<meta charset="UTF-8" />
<title>01_Mechanik</title> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/jquery.bxslider.js"></script>
</head>
<body>
	<?php require_once("header.php"); ?>
	
    <div class='content'>
    	<Div style='float:left;width:293px;'>
            <Aside class='index-box' style='margin:0; margin-bottom:20px;'>
                <h2 class='title'>Wyszukiwarka</h2>
                <form action='#' method='post'>
                <input type="text" name="fraza" onclick="if(this.value=='szukana fraza..'){this.value=''}" value="szukana fraza.." class="input" style='width:180px; height:20px' />
                <input type="submit" name="szukaj" value="szukaj" class="btn btn-primary" style='float:right; margin:0;'>
                </form>
            </Aside>
            <aside class="index-box" style='margin:0;'>
                <h2 class="title">Chmura tagów</h2>
                <Div class='tags'>
                    <a href="#" class="tag" style="font-size:15px;">Lorem ipsum</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:12px;">News</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:11px;">ipsum</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:14px;">myszka</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:11px;">ipsum</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:13px;">myszka</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:12px;">News</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:11px;">ipsum</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:14px;">myszka</a>
                    <span class='separator'>|</span>
                    <a href="#" class="tag" style="font-size:11px;">ipsum</a>
                    <span class='separator'>|</span>
                </Div>
            </aside>
           </Div>
        
        <section style='width:667px; padding:0px 10px 20px 10px; float:right;'>
        	<div class='area' style='padding-top:20px;'>
            	<div class='article2'>
            		<A href='#' class='title3'><h3>Przykładowy tytuł</h3></A>
                    <div class='clear'></div>
                    <span class='line'></span>
                   <p>
                    <img src="images/img5.png" alt="img" style="float:left; margin-right:10px;">
                    
                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                	</p>
                    <div class='clear'></div>
                </div>
                
                
                <div class='article2'>
            		<A href='#' class='title3'><h3>Przykładowy tytuł</h3></A>
                    <div class='clear'></div>
                    <span class='line'></span>
                    <p>
                    <img src="images/img5.png" alt="img" style="float:left; margin-right:10px;">
                    
                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
               	</p> 
                <div class='clear'></div>
               </div>
            </div>
        </section> 
    </div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
