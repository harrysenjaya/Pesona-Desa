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

		public function book(){
			$checkin = $_POST['checkin'];
			$checkout = $_POST['checkout'];
			if($checkin!="" && $checkout!=""){
				$query = "SELECT Id,NamaDesa,NamaHouseStay,Foto,Harga from(select FkStay from user_stay where CheckIn>='$checkin' AND CheckOut<='$checkout') as temp right join stay on Id=FkStay where FkStay IS NULL";
				$hasil = $this->db->executeSelectQuery($query);
				return View::createView2('stay.php',[
					"data"=> $hasil,
				]);
			}
			else{
				$query = "SELECT Id,NamaDesa,NamaHouseStay,Foto,Harga FROM stay";
				$hasil = $this->db->executeSelectQuery($query);
				return View::createView2('stay.php',[
				"data"=> $hasil,
				]);
			}
		}
}
?>