
<?php
	require_once('modelAdmin/EmployeeModel.php');
	class EmployeeController{


		public function index(){
			$employee = new Employee();
			$employee = $employee->index();
			// print_r($employee);
			require_once('viewsAdmin/employee/index.php');
		}


		public function update()
		{	
			if(!isset($_GET['id'])){
				require_once('viewsAdmin/employee/index.php');
			}
			$_SESSION['idEmployee'] = isset($_GET['id']) && $_GET['id'];
			$employeeModel = new Employee();
			$employee = $employeeModel->getEmployeeById($_SESSION['idEmployee']);

			if(isset($_POST['editRowButton'])){
				$data['nameEmp'] = $_REQUEST['nameEmp'];
				$data['phoneEmp']= $_REQUEST['phoneEmp'];
				$data['CMTEmp']= $_REQUEST['CMTEmp'];
				$data['emailEmp']= $_REQUEST['emailEmp'];
				$data['sexEmp'] = $_REQUEST['sexEmp'];
				$data['addressEmp'] = $_REQUEST['addressEmp'];
				$data['salaryEmp'] = $_REQUEST['salaryEmp'];
				$data['statusEmp'] = $_REQUEST['statusEmp'];

				$responUpdate = $employeeModel->update($_SESSION['idEmployee'],$data);


				
				if ($responUpdate == 1){
					unset($_SESSION['idEmployee']);
					header('location:index.php?controller=employee');
				}
				else{
					header('location:index.php?controller=employee&action=update&id='.$_SESSION["idEmployee"]);
				}


			}


			require_once('viewsAdmin/employee/UpdateEmployee.php');
		}


	}
?>