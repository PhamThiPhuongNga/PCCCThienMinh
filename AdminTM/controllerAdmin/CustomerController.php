
<?php
	require_once('modelAdmin/customerModel.php');
	class CustomerController{

		public $erro;
		public function index()
		{
			$customerModel = new Customer();
			$employee = $customerModel->index();
			// print_r($employee);
			require_once('viewsAdmin/customer/index.php');
		}
		public function insert()
		{	
			if ($_REQUEST['nameEmp'] != "" && $_REQUEST['phoneEmp'] != "" && $_REQUEST['CMTEmp'] != "" && $_REQUEST['emailEmp']!="" && $_REQUEST['addressEmp']!="" && $_REQUEST['salaryEmp'] !="" && $data['statusEmp'] != "")
			{

				$data['nameEmp'] = $_REQUEST['nameEmp'];
				$data['phoneEmp']= $_REQUEST['phoneEmp'];
				$data['CMTEmp']= $_REQUEST['CMTEmp'];
				$data['emailEmp']= $_REQUEST['emailEmp'];
				$data['sexEmp'] = $_REQUEST['sexEmp'];
				$data['addressEmp'] = $_REQUEST['addressEmp'];
				$data['salaryEmp'] = $_REQUEST['salaryEmp'];
				$data['statusEmp'] = $_REQUEST['statusEmp'];
				$customerModel = new Customer();
				$responInsert = $customerModel->insert($data);

				if ($responInsert == 1)
				{
					index();
				}
				else
				{
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
			if(!is_numeric($_GET['id']))
			{
				require_once('viewsAdmin/customer/index.php');
			}

			$_SESSION['idEmployee'] = isset($_GET['id']) && $_GET['id'];
			$customerModel = new Customer();
			$employee = $customerModel->getCustomerById($_SESSION['idEmployee']);
			if(isset($_POST['editRowButton']))
			{
				if ($_REQUEST['nameEmp'] != "" && $_REQUEST['phoneEmp'] != "" && $_REQUEST['CMTEmp'] != "" && $_REQUEST['emailEmp']!="" && $_REQUEST['addressEmp']!="" && $_REQUEST['salaryEmp'] !="" && $data['statusEmp'] != "")
				{
					$data['nameEmp'] = $_REQUEST['nameEmp'];
					$data['phoneEmp']= $_REQUEST['phoneEmp'];
					$data['CMTEmp']= $_REQUEST['CMTEmp'];
					$data['emailEmp']= $_REQUEST['emailEmp'];
					$data['sexEmp'] = $_REQUEST['sexEmp'];
					$data['addressEmp'] = $_REQUEST['addressEmp'];
					$data['salaryEmp'] = $_REQUEST['salaryEmp'];
					$data['statusEmp'] = $_REQUEST['statusEmp'];
					$responUpdate = $customerModel->update($_SESSION['idEmployee'],$data);
					if ($responUpdate == 1)
					{
						unset($_SESSION['idEmployee']);
						header('location:index.php?controller=customer');
					}
					else
					{
						$erro = "Lỗi chưa sửa được nhân viên";
					}
				}
				else
				{
					$erro = "Mời bạn nhập đầy đủ dữ liệu";
				}
			}
			require_once('viewsAdmin/customer/UpdateCustomer.php');
		}

		public function delete()
		{
			$id = $_GET['id'];
			if(!is_numeric($id))
			{
				require_once('viewsAdmin/customer/index.php');
			}
			$customerModel = new Customer();
			$responDelete = $customerModel->delete($id);

			if($responDelete == 1)
			{
				index();
			}
			else
			{
				$erro = "Lỗi chưa xóa được";
			}
		}

	}
?>