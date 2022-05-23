<?php require_once("viewsAdmin/layout/header.php");?>

<style>
	.navbar-employee>a{
		box-shadow: 4px 4px 10px 0 rgba(0,0,0,.2),4px 4px 15px -5px rgba(255,255,255,.6)!important;
	}
</style>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Chi tiết nhân viên</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="d-block"  role="dialog" aria-hidden="fase" >
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body ">
													<form>
														<div class="row">
                                                            <div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>ID</label>
																	<input id="idEmp" readonly name="idEmp" type="text" class="form-control" value="<?php echo($employee['idEmp']); ?>" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Tên nhân viên</label>
																	<input id="nameEmp" name="nameEmp" type="text" class="form-control" value="<?php echo($employee['nameEmp']); ?>">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label for="exampleFormControlFile1">Ảnh nhân viên</label>
																	<input  id="addImage" type="file" name="avatarEmp" class="form-control-file" >
																</div>
																<div>
																	<img src="<?php echo($employee['avatarEmp']); ?>" alt="" width="100" height="100">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Số điện thoại</label>
																	<input id="phoneEmp" name ="phoneEmp" type="text" class="form-control" value="<?php echo($employee['phoneEmp']); ?>">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input id="emailEmp" name ="emailEmp" type="email" class="form-control" value="<?php echo($employee['emailEmp']); ?>">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Số CMT</label>
																	<input id="CMTEmp" name="CMTEmp" type="text" class="form-control" value="<?php echo($employee['CMTEmp']); ?>">
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
															<!-- <div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Ngày bắt đầu làm</label>
																	<input id="adddatest" name="dateStartEmp" type="number" class="form-control" >
																</div>
															</div> -->
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Lương</label>
																	<input id="salaryEmp" name="salaryEmp" type="text" class="form-control" value="<?php echo($employee['salaryEmp']); ?>">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Địa chỉ</label>
																	<input id="addressEmp" name="addressEmp" type="text" class="form-control" value="<?php echo($employee['addressEmp']); ?>">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													
													<button type="button" class="btn btn-danger" data-dismiss="modal"><a href="./?controller=employee" class="btn-name text-white">Đóng</a></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once("viewsAdmin/layout/footer.php");?>
