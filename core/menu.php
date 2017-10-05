<?php

     class Menu{
        function createMenu(){
            global $db;       
            
            $result = $db -> query("SELECT `url_page`, `title` FROM `menu` ORDER BY `id`");
    if(!$result) 
{ echo "Запрос не работает."; }
            $res = $result -> fetch_assoc();
            echo '<ul>';
            do{
                echo '<li><a href="index.php?' . $res['url_page'] . '">' . $res['title'] . '</a><br /></li>';   
            }
            while($res = $result -> fetch_assoc());
            echo '</ul>';
            unset($res);
        }       
    }
//    $obj_menu = new Menu();
//    $obj_menu -> createMenu();  
?>