<?php require_once("viewsAdmin/layout/header.php");?>
			
					
<div class="content">
	<div class="page-inner">			
		<div class="page-header">
			<h4 class="page-title">Tìm kiếm</h4>
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
					<a href="#">Tìm kiếm</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Danh sách Tìm kiếm</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class=" align-items-center">
							<h4 class="card-title">Danh sách Tìm kiếm - tủ trung tâm</h4>
							<p>(có 3 kết quả tìm kiếm)</p>
						</div>
					</div>
					<div class="card-body">
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
<?php require_once("viewsAdmin/layout/footer.php");?>