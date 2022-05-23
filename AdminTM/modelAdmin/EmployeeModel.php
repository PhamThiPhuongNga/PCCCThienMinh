<?php
	include('util/lib_db.php');
	

	class Employee
	{


		public function index()
		{
			//return "ok";
			$querrySelect = "SELECT * from nhanvien";
			$dataEmployee = select_list($querrySelect);
			return $dataEmployee;
		}

		public function insert($data)
		{
			
			$querryInsert= data_to_sql_insert("nhanvien",$data);
			$respon = exec_update($querryInsert);
			return $respon;
		}

		public function update($id,$data)
		{
			$where = 'idEmp='.$id;
			$querryUpdate = data_to_sql_update("nhanvien",$data,$where);
			$respon = exec_update($querryUpdate);
			return $respon;


			
		}
		public function delete($id)
		{
			$querryDelete = "UPDATE nhanvien set deleteStatus=1 where idEmp = $id";
			$respon = exec_update($querryDelete);
			return $respon;

			
		}
		public function getEmployeeById($id){

			$querrySelect = "SELECT * from nhanvien where idEmp = $id";
			$dataEmployee = select_one($querrySelect);
			return $dataEmployee;
		}

	}


?>