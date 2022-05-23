<?php require_once("viewsAdmin/layout/header.php");?>
<style>
	.navbar-customer>a{
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
																	<label>ID</label>
																	<input id="idCus" readonly name="idCus" type="text" class="form-control" >
																</div>
																<div class="form-group form-group-default">
																	<label>Tên khách hàng</label>
																	<input id="nameCus" name="nameCus" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label for="exampleFormControlFile1">Logo</label>
																	<input  id="addImage" type="file" name="avatarEmp" class="form-control-file" >
																</div>
																<div>
																	<img src="" alt="" width="100" height="100">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input id="emailCus" name ="emailCus" type="email" class="form-control" >
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Số điện thoại</label>
																	<input id="phoneCus" name ="phoneCus" type="text" class="form-control" >
																</div>
															</div>
															
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Người đại diện</label>
																	<input id="representativeCus" name="representativeCus" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Số tài khoản </label>
																	<input id="accountBankCus" name="accountBankCus" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Tên ngân hàng</label>
																	<input id="nameBankCus" name="nameBankCus" type="text" class="form-control" >
																</div>
						
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Địa chỉ</label>
																	<input id="addressCus" name="addressCus" type="text" class="form-control" >
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