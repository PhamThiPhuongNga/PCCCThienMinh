<?php
	require_once('util/lib_db.php');
	class Product
	{


		public function index()
		{
			//return "ok";
			$querrySelect = "SELECT * from sanpham where deleteStatus = 0";
			$dataProduct = select_list($querrySelect);
			return $dataProduct;
		}

		public function insert()
		{
			
			$querryInsert= data_to_sql_insert("sanpham",$data);
			$respon = exec_update($querryInsert);
			return $respon;
		}

		public function update($id,$data)
		{
			$where = 'idPro='.$id;
			$querryUpdate = data_to_sql_update("sanpham",$data,$where);
			$respon = exec_update($querryUpdate);
			return $respon;
			
		}
		public function delete($id)
		{
			$querryDelete = "UPDATE sanpham set deleteStatus=1 where idPro = $id";
			$respon = exec_update($querryDelete);
			return $respon;

			
		}
		public function getProductById($id){

			$querrySelect = "SELECT * from sanpham where idPro = $id";
			$dataProduct = select_one($querrySelect);
			return $dataProduct;
		}

	}


?>