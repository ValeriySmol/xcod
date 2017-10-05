<?php

// Class Url(){
// 
//       public function getUrl(){
             if ( $_SERVER['REQUEST_URI'] == '/') {$page='home';}
             else {
             $page = substr($_SERVER['REQUEST_URI'], 11);
             //if('/^[A-z0-9]{3,15}$/', $page) exit('error url');
//              }
//           return $this->page;
//       }
// }
// $page = new Url();
// $page -> getUrl();
?>