
<?php
	require_once('modelAdmin/ProjectModel.php');
	class ProjectController{

		public $erro;

		public function index(){
			$supplierModel = new Project();
			$Supplier = $supplierModel->index();
			// print_r($Supplier);
			require_once('viewsAdmin/project/index.php');
		}
		public function insert()
		{	
			if ($_REQUEST['nameSupp'] != "" && $_REQUEST['logoSupp'] != "" && $_REQUEST['phoneSupp'] != "" && $_REQUEST['emailSupp']!="" && $_REQUEST['addressSupp']!="" && $_REQUEST['salaryEmp'] !="" && $data['statusSupp'] != ""){

				$data['nameSupp'] = $_REQUEST['nameSupp'];
				$data['logoSupp']= $_REQUEST['logoSupp'];
				$data['phoneSupp']= $_REQUEST['phoneSupp'];
				$data['emailSupp']= $_REQUEST['emailSupp'];
				$data['representativeSupp'] = $_REQUEST['representativeSupp'];
				$data['addressSupp'] = $_REQUEST['addressSupp'];
				$data['salaryEmp'] = $_REQUEST['salaryEmp'];
				$data['statusSupp'] = $_REQUEST['statusSupp'];
				$supplierModel = new Supplier();
				$responInsert = $supplierModel->insert($data);

				if ($responInsert == 1){
					index();
				}
				else{
					$erro = "Lỗi chưa thêm được nhân viên";
				}
			}
			else
			{
				$erro = "Bạn chưa nhập đầy đủ dữ liệu";
			}
			
		}

		public function update()
		{	
			if(!is_numeric($_GET['id'])){
				require_once('viewsAdmin/project/index.php');
			}

			$_SESSION['idSupplier'] = isset($_GET['id']) && $_GET['id'];
			$supplierModel = new Supplier();
			$Supplier = $supplierModel->getSupplierById($_SESSION['idSupplier']);
			if(isset($_POST['editRowButton'])){
				if ($_REQUEST['nameSupp'] != "" && $_REQUEST['logoSupp'] != "" && $_REQUEST['phoneSupp'] != "" && $_REQUEST['emailSupp']!="" && $_REQUEST['addressSupp']!="" && $_REQUEST['salaryEmp'] !="" && $data['statusSupp'] != ""){
					$data['nameSupp'] = $_REQUEST['nameSupp'];
					$data['logoSupp']= $_REQUEST['logoSupp'];
					$data['phoneSupp']= $_REQUEST['phoneSupp'];
					$data['emailSupp']= $_REQUEST['emailSupp'];
					$data['representativeSupp'] = $_REQUEST['representativeSupp'];
					$data['addressSupp'] = $_REQUEST['addressSupp'];
					$data['statusSupp'] = $_REQUEST['statusSupp'];
					$responUpdate = $supplierModel->update($_SESSION['idSupplier'],$data);
					if ($responUpdate == 1){
						unset($_SESSION['idSupplier']);
						header('location:index.php?controller=project');
					}
					else{
						$erro = "Lỗi chưa sửa được nhân viên";
					}
				}
				else
				{
					$erro = "Mời bạn nhập đầy đủ dữ liệu";
				}
			}
			require_once('viewsAdmin/project/UpdateProject.php');
		}

		public function delete(){
			$id = $_GET['id'];
			if(!is_numeric($id)){
				require_once('viewsAdmin/project/index.php');
			}
			$supplierModel = new Supplier();
			$responDelete = $supplierModel->delete($id);

			if($responDelete == 1){
				index();
			}
			else{
				$erro = "Lỗi chưa xóa được";
			}
		}

	}
?>