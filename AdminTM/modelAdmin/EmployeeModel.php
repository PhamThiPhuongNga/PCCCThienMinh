<?php
	require_once('util/lib_db.php');
	class Employee
	{


		public function index()
		{
			//return "ok";
			$querrySelect = "SELECT * from nhanvien";
			$dataEmployee = select_list($querrySelect);
			return $dataEmployee;
		}

		public function insert()
		{
			
			
		}

		public function update($id,$data)
		{
			$where = 'idEmp='.$id;
			$querryUpdate = data_to_sql_update("nhanvien",$data,$where);

			$respon = exec_update($querryUpdate);
			return $respon;


			
		}
		public function delete()
		{

			//return "ok";

			
		}
		public function getEmployeeById($id){

			$querrySelect = "SELECT * from nhanvien where idEmp = $id";
			$dataEmployee = select_one($querrySelect);
			return $dataEmployee;
		}

	}


?>