<?php
	require_once('util/lib_db.php');
	class Customer
	{


		public function index()
		{
			//return "ok";
			$querrySelect = "SELECT * from khachhang";
			$dataCustomer = select_list($querrySelect);
			return $dataCustomer;
		}

		public function insert()
		{
			
			$querryInsert= data_to_sql_insert("khachhang",$data);
			$respon = exec_update($querryInsert);
			return $respon;
		}

		public function update($id,$data)
		{
			$where = 'idCus='.$id;
			$querryUpdate = data_to_sql_update("khachhang",$data,$where);
			$respon = exec_update($querryUpdate);
			return $respon;
			
		}
		public function delete($id)
		{
			$querryDelete = "UPDATE khachhang set deleteStatus=1 where idCus = $id";
			$respon = exec_update($querryDelete);
			return $respon;

			
		}
		public function getCustomerById($id){

			$querrySelect = "SELECT * from khachhang where idCus = $id";
			$dataCustomer = select_one($querrySelect);
			return $dataCustomer;
		}

	}


?>