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
    	<aside class="index-box" style='margin:0;'>
        	<h2 class="title">Reklama</h2>
            <p>
            	Tel:+48 000 000 000<br />
                e-Mail: kontakt@google.com<br />
               <br /> 
                NIP: 46 474 44 431<br />
                REG: 000 0 0 00 0
            </p>
        </aside>
        
        <section style='width:667px; padding:0px 10px 20px 10px; float:right;'>
        	<div class='area'>
            	<h3 class='title2' style='width:687px'>Kontakt z nami</h3>
                
                <p>Formularz kontaktowy</p>
                
                <form action="#" method="post" style="margin-top:10px;">
                      <label>Imię i Nazwisko:</label>
                      <input type="text" name="name" value="" class="input">
                      <label>E-mail:</label>
                      <input type="text" name="mail" value="" class="input">   
                      <label>Treść wiadomości:</label>
                      <textarea name="text" class="input" style="height:50px;"></textarea>
                      
                      <div class="clear"></div>
                      <input type="submit" name="wyślij" value="wyslij" class="btn btn-primary">
                  </form>

            </div>
        </section> 
    </div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
