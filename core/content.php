 <?php
	class Content {
	 private $page;
	 
	 //получаем значение местонахождения - страницу
	 public function __construct() {

	   if ( $_SERVER['REQUEST_URI'] == '/') {$page='home';}
             else {
             $page = substr($_SERVER['REQUEST_URI'], 11);
             }
	   //echo $page;
	   $this->page = $page;//значение
	 }
	   
	 public function showPage() {
	 global $db;
	 
	 //var_dump($db);
         //echo $this->page;
	 
	 $respage = $db ->query("SELECT * FROM `content` WHERE `cont_cat` = '$this->page'");//запрос в БД без подготовки
	 
	            if(!$respage) 
                                 { echo "Запрос не работает."; }
         //в БД задан вывод по колонкам 'column' - смотрим его значение и выводим    
         while($res = $respage -> fetch_assoc()){             
             
	 if($res['column'] == 1)//в одну колонку
{ echo '<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">'.$res['cont'].'</div>';}

         if($res['column'] == 2)//в две колонки
{ echo '<div class="col-lg-6 col-md-6 col-sm-6 col-sx-6">'.$res['cont'].'</div>';}
	 
        }	 

        
	 }
	}
	 
// $obj_page = new Content();
// $obj_page -> showPage();
?> 