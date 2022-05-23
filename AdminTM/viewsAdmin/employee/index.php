<?php require_once("viewsAdmin/layout/header.php");?>
<style>
	.navbar-employee>a{
    	box-shadow: 4px 4px 10px 0 rgba(0,0,0,.2),4px 4px 15px -5px rgba(255,255,255,.6)!important;
	}
</style>
	
<div class="content">
	<div class="page-inner">			
		<div class="page-header">
			<h4 class="page-title">Bảng dữ liệu</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="#">
						<i class="flaticon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Nhân viên</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Danh sách nhân viên</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<h4 class="card-title">Danh sách nhân viên</h4>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Thêm nhân viên
							</button>
						</div>
					</div>
					<div class="card-body">
						<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header no-bd">
										<h5 class="modal-title">
											<span class="fw-mediumbold">
											Thêm mới</span> 
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="post" action="./?controller=employee&action=insert" enctype="multipart/form-data">
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label>Tên nhân viên</label>
														<input id="addName" name="nameEmp" type="text" class="form-control" >
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label for="exampleFormControlFile1">Ảnh nhân viên</label>
														<input  id="addImage" type="file" name="avatarEmp" onchange="handlerShowImage()" class="form-control-file" >
													</div>
													<div>
														<img src="" alt="" id="anhEmployee" width="100" height="100">
													</div>
												</div>
												<div class="col-md-6 pr-0">
													<div class="form-group form-group-default">
														<label>Số điện thoại</label>
														<input id="addsdt" name ="phoneEmp" type="text" class="form-control" >
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Email</label>
														<input id="addemail" name ="emailEmp" type="email" class="form-control" >
													</div>
												</div>
												<div class="col-md-6 pr-0">
													<div class="form-group form-group-default">
														<label>Số CMT</label>
														<input id="addcmt" name="CMTEmp" type="text" class="form-control" >
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Giới tính 
															<select name="sexEmp" id="addsex" aria-controls="basic-datatables" class="form-control form-control-sm">
																<option value="Nữ">Nữ</option>
																<option value="Nam">Nam</option>
															</select>
														</label>
													</div>
												</div>
												
												<!-- <div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Ngày bắt đầu làm</label>
														<input id="adddatest" name="dateStartEmp" type="number" class="form-control" >
													</div>
												</div> -->
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Lương</label>
														<input id="addsalary" name="salaryEmp" type="text" class="form-control" >
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label>Địa chỉ</label>
														<input id="addaddress" name="addressEmp" type="text" class="form-control" >
													</div>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" id="" name="addRowButton" class="btn btn-primary">Thêm</button>
													<button type="button" class="btn btn-danger" data-dismiss ="modal">Hủy</button>
												</div>
											</div>
										</form>

									</div>
									
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table id="basic-datatables" class="display table table-striped table-hover" >
								<thead>
									<tr>
										<th>Họ và tên</th>
										<th>Avatar</th>
										<th>SĐT</th>
										<th>Email</th>
										<th>Active</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">
											<select class="form-control">
												<option value=""></option>
												<option value="Tiger Nixon">Tiger Nixon</option>
											</select>
										</th>
										<th rowspan="1" colspan="1">
											<select class="form-control">
												<option value=""></option>
												<option value="System Architect">System Architect</option>
											</select>
										</th>
										<th rowspan="1" colspan="1">
											<select class="form-control">
												<option value=""></option>
												<option value="Edinburgh">Edinburgh</option>
											</select>
										</th>
										<th rowspan="1" colspan="1">
											<select class="form-control">
												<option value=""></option>
												<option value="61">61</option>
											</select>
										</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
										foreach($employee as $value )
										{
									?>
									<tr>
										<td><?php echo($value['nameEmp']);?></td>
										<td><img src="<?php echo($value['avatarEmp']);?>" alt="123" width="50" height="50"/></td>
										<td><?php echo($value['phoneEmp']);?></td>
										<td><?php echo($value['emailEmp']);?></td>
										<td>
											<div class="form-button-action">
												<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Task">
													<a href="./?controller=employee&action=detail&id=<?php echo($value['idEmp']);?>" class=""><i class="flaticon-file"></i></a>
											
												</button>
												<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
													<a href="./?controller=employee&action=update&id=<?php echo($value['idEmp']);?>" class=""><i class="fa fa-edit"></i></a>
											
												</button>
												<form id="form<?php echo($value['idEmp']);?>" method="post" action="./?controller=employee&action=delete&id=<?php echo($value['idEmp']);?>" >
													
													<button type="button" name ="deleteRowEmp"data-toggle="tooltip" title="" onclick="handlerDelete(<?php echo($value['idEmp']);?>)"  class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
													</button>
												</form>
											</div>
										</td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function handlerShowImage()
	{
		const fileSeleted = document.getElementById("addImage").files;
		if(fileSeleted.length > 0){
			const fileToload = fileSeleted[0];
			const fileReader = new FileReader();
			fileReader.onload = function(fileLoaderEvent){
				const srcdata = fileLoaderEvent.target.result;
				const newImg = document.getElementById("anhEmployee");
				newImg.src = srcdata;
			}
			fileReader.readAsDataURL(fileToload);
		}
	}
	function handlerDelete(id)
	{
		if(confirm("bạn có muốn xóa") == true)
    	{	
    		$('#form'+id).submit();
    	}
	    	
	}
	
</script>
<?php require_once("viewsAdmin/layout/footer.php");?>