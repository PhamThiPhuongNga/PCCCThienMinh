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
													<form>
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
																	<input  id="addImage" type="file" name="avatarEmp" class="form-control-file" >
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
															<div class="col-md-6 pr-0">
																<!-- <div class="form-group form-group-default">
																	<label>Trạng thái</label>
																	<input id="addstatus" name="statusEmp" type="number" class="form-control" >
																</div> -->
																<div class="form-check">
																	<label>Trạng thái</label><br>
																	
																	<input class="form-radio-input" id="addstatus" type="radio" name="statusEmp" value="1" checked="">
																	<span class="form-radio-sign">Hoạt động</span> &nbsp;
																	<input class="form-radio-input" id="addstatus" type="radio" name="statusEmp" value="0">
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
																	<input id="addsalary" name="salaryEmp" type="text" class="form-control" >
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Địa chỉ</label>
																	<input id="addaddress" name="addressEmp" type="text" class="form-control" >
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" name="addRowButton" class="btn btn-primary">Thêm</button>
													<button type="button" class="btn btn-danger" data-dismiss ="modal">Hủy</button>
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
												<tr>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
													<td>$320,800</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Task">
																<a href="DetailEmployee.php" class=""><i class="flaticon-file"></i></a>
														
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<a href="UpdateEmployee.php" class=""><i class="fa fa-edit"></i></a>
														
															</button>
															<button type="button" name ="deleteRowEmp"data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once("../templateAdmin/footerAdmin.php");?>