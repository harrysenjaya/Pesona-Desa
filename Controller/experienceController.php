<?php
	require_once "Controller/view.php";
	require_once "Controller/services/mysqlDB.php";
	class experienceController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "pesa8467_pesonadesa");
		}

		public function start(){
			$query = "SELECT Id,NamaDesa,Brand,Foto,Harga FROM experience";
			$hasil = $this->db->executeSelectQuery($query);
            return View::createView2('experience.php',[
			"data"=> $hasil,
		]);
	}
}
?>