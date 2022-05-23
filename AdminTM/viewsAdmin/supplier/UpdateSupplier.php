<?php require_once("viewsAdmin/layout/header.php");?>
<style>
	.navbar-supplier>a{
		box-shadow: 4px 4px 10px 0 rgba(0,0,0,.2),4px 4px 15px -5px rgba(255,255,255,.6)!important;
	}
</style>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Sửa khách hàng</h4>
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
																	<label>Tên NCC</label>
																	<input id="nameSupp" name="nameSupp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label for="exampleFormControlFile1">Logo</label>
																	<input  id="addImage" type="file" name="logoSupp" class="form-control-file" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input id="emailSupp" name ="emailSupp" type="email" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Số điện thoại</label>
																	<input id="phoneSupp" name ="phoneSupp" type="text" class="form-control" >
																</div>
															</div>
															
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Người đại diện</label>
																	<input id="representativeSupp" name="representativeSupp" type="text" class="form-control" >
																</div>
															</div>
														
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Địa chỉ</label>
																	<input id="addressSupp" name="addressSupp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Hoạt động</label><br>
																	<input class="form-radio-input" id="addstatus" type="radio" name="statusEmp" value="1" checked="">
																	<span class="form-radio-sign">True</span> &nbsp;
																	<input class="form-radio-input" id="addstatus" type="radio" name="statusEmp" value="0">
																	<span class="form-radio-sign">False</span>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="editRowButton" name = "editRowButton" class="btn btn-primary">Cập nhật</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal"><a href="TableCustomer.php" class="btn-name text-white">Hủy</a></button>
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