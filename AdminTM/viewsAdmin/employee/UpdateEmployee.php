<?php require_once("viewsAdmin/layout/header.php");?>
<style>
	.navbar-employee>a{
		box-shadow: 4px 4px 10px 0 rgba(0,0,0,.2),4px 4px 15px -5px rgba(255,255,255,.6)!important;
	}
</style>
	<div class="content">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Sửa nhân viên</h4>
							</div>
						</div>
						<div class="card-body">
							<div class="d-block"  role="dialog" aria-hidden="fase" >
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<form method="post" enctype="multipart/form-data">
											<div class="modal-body ">
												<div class="row">
                                                    <div class="col-sm-12">
														<div class="form-group form-group-default">
															<label>ID</label>
															<input id="idEmp" readonly name="idEmp" type="text" class="form-control" value="<?php echo($employee['idEmp']);?>" >
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<label>Tên nhân viên</label>
															<input id="nameEmp" name="nameEmp" type="text" class="form-control" value="<?php echo($employee['nameEmp']);?>">
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<label for="exampleFormControlFile1">Ảnh nhân viên</label>
															<input  id="addImage" type="file" name="avatarEmp" onchange="handlerShowImage()" class="form-control-file" >
														</div>
														<div>
															<img src="<?php echo($employee['avatarEmp']);?>" alt="" id="anhEmployee"  width="100" height="100">
														</div>
													</div>
													<div class="col-md-6 pr-0">
														<div class="form-group form-group-default">
															<label>Số điện thoại</label>
															<input id="phoneEmp" name ="phoneEmp" type="text" class="form-control"  value="<?php echo($employee['phoneEmp']);?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Email</label>
															<input id="emailEmp" name ="emailEmp" type="email" class="form-control" value="<?php echo($employee['emailEmp']);?>">
														</div>
													</div>
													<div class="col-md-6 pr-0">
														<div class="form-group form-group-default">
															<label>Số CMT</label>
															<input id="CMTEmp" name="CMTEmp" type="text" class="form-control" value="<?php echo($employee['CMTEmp']);?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Giới tính 
																<select name="sexEmp" id="sexEmp" aria-controls="basic-datatables" class="form-control form-control-sm">
																<?php 
																	if($employee['sexEmp'] == 'Nữ')
																	{ 
																		?> 
																		<option value="Nữ">Nữ</option>
																		<option value="Nam">Nam</option>
																		<?php }
																	else
																	{
																	 	?>
																		<option value="Nam">Nam</option>
																		<option value="Nữ">Nữ</option>
																		<?php
																	}?>
																</select>
															</label>
														</div>
													</div>
													<div class="col-md-6 pr-0">
														<!-- <div class="form-group form-group-default">
															<label>Trạng thái</label>
															<input id="addstatus" name="statusEmp" type="number" class="form-control" >
														</div> -->
														<div class="form-check">
															<label>Trạng thái</label><br>
															
															<input class="form-radio-input" id="statusEmp" type="radio" name="statusEmp" value="1" checked="">
															<span class="form-radio-sign">Hoạt động</span> &nbsp;
															<input class="form-radio-input" id="statusEmp" type="radio" name="statusEmp" value="0">
															<span class="form-radio-sign">Dừng hoạt động</span>
															
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Lương</label>
															<input id="salaryEmp" name="salaryEmp" type="text" class="form-control" value="<?php echo($employee['salaryEmp']);?>">
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<label>Địa chỉ</label>
															<input id="addressEmp" name="addressEmp" type="text" class="form-control" value="<?php echo($employee['addressEmp']);?>">
														</div>
													</div>
												</div>										
											</div>
										<div class="modal-footer no-bd">
											<button type="submit" id="editRowButton" name = "editRowButton" class="btn btn-primary">Cập nhật</button>
											<button type="button" class="btn btn-danger"  data-dismiss="modal"><a href="./?controller=employee" class="btn-name text-white">Hủy</a></button>
										</div>
										</form>
									</div>
								</div>
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
	</script>
<?php require_once("viewsAdmin/layout/footer.php");?>