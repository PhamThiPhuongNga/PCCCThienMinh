<?php require_once ("../../view/template/header.php")?>
<form id="FORM_1 auto-container">
	<h2 id="H2_2">
		Tiến hành đặt hàng
	</h2>
	<div id="DIV_3">
		<div id="DIV_4">
			<div id="DIV_5">
				<h3 id="H3_6">
					THÔNG TIN KHÁCH HÀNG
				</h3>
				<div id="DIV_7">
					<input type="text" placeholder="Họ và tên" id="INPUT_8" name="fullname" />
				</div>
				<div id="DIV_9">
					<input type="tel" placeholder="Số điện thoại" name="phone" id="INPUT_10" />
				</div>
				<div id="DIV_11">
					<input type="email" placeholder="Địa chỉ email" name="email" id="INPUT_12" />
				</div>
				<div id="DIV_13">
					<input type="text" placeholder="Địa chỉ nhận hàng" name="address" id="INPUT_14" />
				</div>
				<div id="DIV_15">
					<div id="DIV_16">
						Bạn cần hỗ trợ? Hotline <a href="tel:090.107.3832" id="A_17">0901.073.832</a>
					</div>
				</div>
			</div>
			<div id="DIV_18">
				<h3 id="H3_19">
					THỜI GIAN NHẬN HÀNG
				</h3>
				<div id="DIV_20">
					 
					<label id="LABEL_21">
						<input type="radio" name="tranport_method" value="0" id="INPUT_22" /><span id="SPAN_23"></span> <span id="SPAN_24">Trong giờ hành chính</span>
					</label>
				</div>
				<div id="DIV_25">
					 
					<label id="LABEL_26">
						<input type="radio" name="tranport_method" value="1" id="INPUT_27" /><span id="SPAN_28"></span> <span id="SPAN_29">Ngoài giờ hành chính</span>
					</label>
				</div>
				<h3 id="H3_30">
					HÌNH THỨC THÀNH TOÁN
				</h3>
				<div id="DIV_31">
					 
					<label id="LABEL_32">
						<input type="radio" name="payment_method" value="0" id="INPUT_33" /><span id="SPAN_34"></span> <span id="SPAN_35">Thanh toán khi nhận hàng (COD)</span>
					</label>
				</div>
				<div id="DIV_36">
					 
					<label id="LABEL_37">
						<input type="radio" name="payment_method" value="1" id="INPUT_38" /><span id="SPAN_39"></span> <span id="SPAN_40">Chuyển khoản qua ngân hàng</span>
					</label>
				</div>
				<div id="DIV_41">
					 
					<label id="LABEL_42">
						Lưu ý đơn hàng
					</label>
					<textarea rows="3" name="note" placeholder="Viết chú ý, yêu cầu hoá đơn GTGT,..." id="TEXTAREA_43">
					</textarea>
				</div>
			</div>
			<div id="DIV_44">
				<h3 id="H3_45">
					ĐƠN HÀNG (1 sản phẩm)
				</h3>
				<ul id="UL_46">
					<li id="LI_47">
						<div id="DIV_48">
							 <a href="javascript:;" id="A_49">×</a> <a href="https://fisavietnam.com/he-thong-chua-chay-khi-fm-200-kidde-pr2959" id="A_50"><img src="https://fisavietnam.com/uploads/FM-200-Kidde-707x707.png" alt="" id="IMG_51" /></a>
							<div id="DIV_52">
								<h3 id="H3_53">
									 <a href="https://fisavietnam.com/he-thong-chua-chay-khi-fm-200-kidde-pr2959" id="A_54">Hệ Thống Chữa Cháy Khí FM 200 Kidde</a>
								</h3>
								<div id="DIV_55">
									<div id="DIV_56">
										<div id="DIV_57">
										</div>
										<input type="text" name="quantity[2959]" value="2" size="1" id="INPUT_58" />
										<div id="DIV_59">
										</div>
									</div>
									<div id="DIV_60">
										 <span id="SPAN_61">Liên hệ</span> <span id="SPAN_62">VNĐ</span>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div id="DIV_63">
					 <span id="SPAN_64">Tổng tiền</span> <span id="SPAN_65">0 vnđ</span>
				</div>
				<input type="hidden" name="btnSubmit" value="UpdateCart" id="INPUT_66" /> 
				<button type="button" id="BUTTON_67">
					ĐẶT HÀNG
				</button>
			</div>
		</div>
	</div>
</form>
<?php require_once ("../../view/template/footer.php")?>