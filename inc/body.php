<!--Основная часть-->
    <div class="row">
        <!--Навигация-->
        <div class="col-sm-4">
            <div class="leftmenu"> 
           
<?php require_once('./core/content.php'); ?>
           
<?php     
$obj_menu = new Menu();
$obj_menu -> createMenu();  
?>
            </div>
        </div>

        <!--Контент-->
        <div class="col-sm-8 col-lg-5">
      <div class="contentbox">

<?php
$obj_page = new Content();
$obj_page -> showPage();
?>     
      

      </div>

        </div>
        <!--Правый блок-->
        <div class="col-lg-3 hidden-sm hidden-xs"></div>
    </div>