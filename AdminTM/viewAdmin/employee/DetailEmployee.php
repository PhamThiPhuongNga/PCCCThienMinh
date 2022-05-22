<?php require_once("../templateAdmin/headerAdmin.php");?>
<style>
	.navbar-employee>a{
		background: #1572e8!important;
    	box-shadow: 4px 4px 10px 0 rgba(0,0,0,.1),4px 4px 15px -5px rgba(21,114,232,.4)!important;
	}
	.navbar-employee>a p,.navbar-employee>a i{
		color: #fff;
		font-weight: 700;
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
																	<input id="idEmp" readonly name="idEmp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Tên nhân viên</label>
																	<input id="nameEmp" name="nameEmp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label for="exampleFormControlFile1">Ảnh nhân viên</label>
																	<input  id="addImage" type="file" name="avatarEmp" class="form-control-file" >
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Số điện thoại</label>
																	<input id="phoneEmp" name ="phoneEmp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input id="emailEmp" name ="emailEmp" type="email" class="form-control" >
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Số CMT</label>
																	<input id="CMTEmp" name="CMTEmp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Giới tính 
																		<select name="sexEmp" id="sexEmp" aria-controls="basic-datatables" class="form-control form-control-sm">
																			<option value="Nữ">Nữ</option>
																			<option value="Nam">Nam</option>
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
																	<input id="salaryEmp" name="salaryEmp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Địa chỉ</label>
																	<input id="addressEmp" name="addressEmp" type="text" class="form-control" >
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													
													<button type="button" class="btn btn-danger" data-dismiss="modal"><a href="TableEmployee.php" class="btn-name text-white">Đóng</a></button>
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
<?php require_once("../templateAdmin/footerAdmin.php");?>