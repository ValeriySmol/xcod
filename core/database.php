<?php

class Database {
	//Параметры соединения(константы)
	const HOST = "localhost";//Хост
	const USER = "user";//Пользователь
	const PASSWORD = "pass";//Пароль
	const BASE = "database";//БазаДанных
	const CHARSET = 'UTF8';//Кодировка

	//Ссылка на объект данного класса
	static private $mysqli = NULL;        
	//Ссылка на объект соединения с базой данных
	private $db = NULL;
	
	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}
	public function __destruct() {}
     
       
	//Соединение с БД
	static public function Connect() {
	    if(self::$mysqli == NULL) {//проверяем пустая или нет, если не пустая - возвращаем
		self::$mysqli = new self();//создаем объект
		self::$mysqli->db = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BASE);//устанавливаем соединение
		self::$mysqli->db->set_charset(self::CHARSET);//устанавливаем кодировку
	    }
	  
	    return self::$mysqli;//возвращаем
	}
       
        	//Возвращает ссылку на соединение с БД
	public function DBlink() {
	    return $this->db;
	} 
    }

//     $db = Database::Connect()->DBlink();//Вызов  
//     $result = $db->query("SELECT * FROM `users` WHERE `login`='admin' ")->fetch_row();//Запрос
//     var_dump($result[3]);//Вывод данных
?>