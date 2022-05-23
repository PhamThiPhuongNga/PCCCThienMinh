<?php require_once("viewsAdmin/layout/header.php");?>
<style>
	.navbar-project>a{
		box-shadow: 4px 4px 10px 0 rgba(0,0,0,.2),4px 4px 15px -5px rgba(255,255,255,.6)!important;
	}
</style>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Sửa dự án</h4>
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
																	<label>Tên dự án</label>
																	<input id="nameProj" name="nameProj" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label for="exampleFormControlFile1">Ảnh thi công</label>
																	<input  id="addImage" type="file" name="imageProj" class="form-control-file" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Chủ đầu tư</label>
																	<input id="investorProj" name ="investorProj" type="email" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nội dung công việc</label>
																	<input id="contentProj" name ="contentProj" type="text" class="form-control" >
																</div>
															</div>
															
															<div class="col-sm-12 ">
																<div class="form-group form-group-default">
																	<label>Hình thức</label>
																	<input id="formProj" name="formProj" type="text" class="form-control" >
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