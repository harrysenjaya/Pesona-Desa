<?php
	require_once "Controller/view.php";
	require_once "Controller/services/mysqlDB.php";
	class stayController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "pesa8467_pesonadesa");
		}

		public function start(){
			$query = "SELECT Id,NamaDesa,NamaHouseStay,Foto,Harga FROM stay";
			$hasil = $this->db->executeSelectQuery($query);
            return View::createView2('stay.php',[
			"data"=> $hasil,
		]);
	}
}
?>