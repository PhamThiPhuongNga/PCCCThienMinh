
<?php
	require_once('modelAdmin/EmployeeModel.php');
	class EmployeeController{

		public $erro;
		public function index()
		{
			$employeeModel = new Employee();
			$employee = $employeeModel->index();
			// print_r($employee);

			require_once('viewsAdmin/employee/index.php');
		}
		public function insert()
		{	
			if ($_REQUEST['nameEmp'] != "" && $_REQUEST['phoneEmp'] != "" && $_REQUEST['CMTEmp'] != "" && $_REQUEST['emailEmp']!="" && $_REQUEST['addressEmp']!="" && $_REQUEST['salaryEmp'] !="" )
			{
				
				$data['nameEmp'] = $_REQUEST['nameEmp'];
				$data['avatarEmp'] = upload_file_by_name('avatarEmp','imgEmployee');
				$data['phoneEmp']= $_REQUEST['phoneEmp'];
				$data['CMTEmp']= $_REQUEST['CMTEmp'];
				$data['emailEmp']= $_REQUEST['emailEmp'];
				$data['sexEmp'] = $_REQUEST['sexEmp'];
				$data['addressEmp'] = $_REQUEST['addressEmp'];
				$data['salaryEmp'] = $_REQUEST['salaryEmp'];
				
				$employeeModel = new Employee();
				$responInsert = $employeeModel->insert($data);

				if ($responInsert == 1)
				{
					header('location:./index.php?controller=employee');
				}
				else
				{
					echo("Lỗi chưa thêm được nhân viên");
					
				}
			}
			else
			{
				echo("Bạn chưa nhập đầy đủ dữ liệu");
				
			}
			
		}

		public function update()
		{	
			if(!is_numeric($_GET['id']))
			{
				require_once('viewsAdmin/employee/index.php');
			}

			$_SESSION['idEmployee'] = isset($_GET['id']) && $_GET['id'];
			$employeeModel = new Employee();
			$employee = $employeeModel->getEmployeeById($_SESSION['idEmployee']);
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
					$responUpdate = $employeeModel->update($_SESSION['idEmployee'],$data);
					if ($responUpdate == 1)
					{
						unset($_SESSION['idEmployee']);
						header('location:index.php?controller=employee');
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
			require_once('viewsAdmin/employee/UpdateEmployee.php');
		}

		public function delete()
		{
			$id = $_GET['id'];
			if(!is_numeric($id))
			{
				require_once('viewsAdmin/employee/index.php');
			}
			$employeeModel = new Employee();
			$responDelete = $employeeModel->delete($id);

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