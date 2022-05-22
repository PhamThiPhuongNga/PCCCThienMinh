<?php
	require_once('util/lib_db.php');
	class Project
	{


		public function index()
		{
			//return "ok";
			$querrySelect = "SELECT * from duan";
			$dataProject = select_list($querrySelect);
			return $dataProject;
		}

		public function insert()
		{
			
			$querryInsert= data_to_sql_insert("duan",$data);
			$respon = exec_update($querryInsert);
			return $respon;
		}

		public function update($id,$data)
		{
			$where = 'idProj='.$id;
			$querryUpdate = data_to_sql_update("duan",$data,$where);
			$respon = exec_update($querryUpdate);
			return $respon;
			
		}
		public function delete($id)
		{
			$querryDelete = "UPDATE duan set deleteStatus=1 where idProj = $id";
			$respon = exec_update($querryDelete);
			return $respon;

			
		}
		public function getProjectById($id){

			$querrySelect = "SELECT * from duan where idProj = $id";
			$dataProject = select_one($querrySelect);
			return $dataProject;
		}

	}


?>