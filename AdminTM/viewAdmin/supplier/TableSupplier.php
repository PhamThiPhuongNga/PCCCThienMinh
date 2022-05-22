<?php require_once("../templateAdmin/headerAdmin.php");?>
<style>
	.navbar-supplier>a{
		background: #1572e8!important;
    	box-shadow: 4px 4px 10px 0 rgba(0,0,0,.1),4px 4px 15px -5px rgba(21,114,232,.4)!important;
	}
	.navbar-supplier>a p,.navbar-supplier>a i{
		color: white;
		font-weight: 700;
	}
</style>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Danh sách Nhà cung cấp</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Thêm Nhà cung cấp
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
													<th>Tên NCC</th>
													<th>Người đại diện</th>
													<th>SĐT</th>
													<th>Trạng thái</th>
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
																<a href="DetailSupplier.php" class=""><i class="flaticon-file"></i></a>
														
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<a href="UpdateSupplier.php" class=""><i class="fa fa-edit"></i></a>
														
															</button>
															<button type="button" name ="deleteRowCus"data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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