<?php require_once("viewsAdmin/layout/header.php");?> 
<style>
	.navbar-product>a{
		box-shadow: 4px 4px 10px 0 rgba(0,0,0,.2),4px 4px 15px -5px rgba(255,255,255,.6)!important;
	}
</style>
<div class="content">
	<div class="page-inner">			
		<div class="page-header">
			<h4 class="page-title">Sản phẩm</h4>
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
					<a href="#">Sản phẩm</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Danh sách sản phẩm
					</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<h4 class="card-title">Danh sách sản phẩm</h4>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Thêm sản phẩm
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
														<label>Tên sản phẩm</label>
														<input id="namePro" name="namePro" type="text" class="form-control" >
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
										<th>Tên Công ty</th>
										<th>Người đại diện</th>
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
										foreach($product as $value )
										{
									?>
									<tr>
										<td><?php echo($value['namePro']);?></td>
										<td><img src="<?php echo($value['imagePro']);?>" alt="123" width="50" height="50"/></td>
										<td><?php echo($value['categoryPro']);?></td>
										<td><?php echo($value['systemPro']);?></td>
										<td>
											<div class="form-button-action">
												<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Task">
													<a href="./?controller=&action=detail&id=<?php echo($value['idPro']);?>" class=""><i class="flaticon-file"></i></a>
											
												</button>
												<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
													<a href="./?controller=product&action=update&id=<?php echo($value['idPro']);?>" class=""><i class="fa fa-edit"></i></a>
											
												</button>
												<form id="form<?php echo($value['idPro']);?>" method="post" action="./?controller=product&action=delete&id=<?php echo($value['idPro']);?>" >
													
													<button type="button" name ="deleteRowEmp"data-toggle="tooltip" title="" onclick="handlerDelete(<?php echo($value['idPro']);?>)"  class="btn btn-link btn-danger" data-original-title="Remove">
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