<?php
require_once('./core/connect.php');

$db = Database::Connect()->getConnectLink();

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>X-COD</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- X-COD -->
    <link href="../css/main.css" rel="stylesheet"> 
      <!--<link rel="stylesheet" href="../css/auth.css">-->
      <link href="https://fonts.googleapis.com/css?family=Audiowide|Lobster&amp;subset=cyrillic" rel="stylesheet"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
  </head>

<body>
  
  
  
<div class="container-fluid">

<!--Левая подложка -->  
<div class='hidden-xs'>
   <div class="background-r"></div>
</div>


<div class="main">
    <!--Шапка сайта-->
    <div class="row">
        <div class="col-xs-12"><div class="logotype"></div></div>
    </div>
    
    <!--Основная часть-->
    <div class="row">
        <!--Навигация-->
        <div class="col-sm-4">
            <div class="leftmenu"> 
           
            <?php 
require_once('./inc/geturl.php');
?>
           
                <?php require_once('./inc/menu.php');  ?>
            </div>
        </div>
        
        
        
        <!--Контент-->
        <div class="col-sm-8 col-lg-5">
      <div class="contentbox">
      <?php
     
     $result = $db->query("SELECT * FROM `content` WHERE `cont_cat` = '$page'");
  
while($res=mysqli_fetch_assoc($result)){

if($res['column'] == 1)
{ echo '<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">'.$res['cont'].'</div>';}
if($res['column'] == 2)
{ echo '<div class="col-lg-6 col-md-6 col-sm-6 col-sx-6">'.$res['cont'].'</div>';}

}
      ?>
      </div>
      
      
      
      
        </div>
        <!--Правый блок-->
        <div class="col-lg-3 hidden-sm hidden-xs"></div>
    </div>
    
    
    <!--Футер-->
    
    <div class="row">
    <div class="footer">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-sx-7"></div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    <p>X-COD CMS 2017</p>
                    </div>
    </div>
    </div>
    
    
    
    </div>
<!--Правая подложка-->
<div class='hidden-xs'>   
   <div class="background-l"></div>
</div>


</div> 
  
  
  
  
  
</body>

</html>