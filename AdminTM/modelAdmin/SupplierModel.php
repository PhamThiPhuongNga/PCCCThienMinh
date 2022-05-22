<?php
	require_once('util/lib_db.php');
	class Supplier
	{


		public function index()
		{
			//return "ok";
			$querrySelect = "SELECT * from nhacungcap";
			$dataSupplier = select_list($querrySelect);
			return $dataSupplier;
		}

		public function insert()
		{
			
			$querryInsert= data_to_sql_insert("nhacungcap",$data);
			$respon = exec_update($querryInsert);
			return $respon;
		}

		public function update($id,$data)
		{
			$where = 'idSupp='.$id;
			$querryUpdate = data_to_sql_update("nhacungcap",$data,$where);
			$respon = exec_update($querryUpdate);
			return $respon;


			
		}
		public function delete($id)
		{
			$querryDelete = "UPDATE nhacungcap set deleteStatus=1 where idSupp = $id";
			$respon = exec_update($querryDelete);
			return $respon;

			
		}
		public function getSupplierById($id){

			$querrySelect = "SELECT * from nhacungcap where idSupp = $id";
			$dataSupplier = select_one($querrySelect);
			return $dataSupplier;
		}

	}


?>