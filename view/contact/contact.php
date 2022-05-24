<?php require_once ("../../view/template/header.php")?>


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="overlay-bg"></div>
            <div class="pattern-layer"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>LIÊN HỆ</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="content_block_6">
                            <div class="info-inner">
                                <h3 class="text-color">THIEN MINH COMPANY</h3>
                                <p>Liên hệ với chúng tôi để được tư vấn trực tiếp</p>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="flaticon-telephone"></i>
                                        <p class="text-color">Hotline:<br /><a href="tel:0942874647">0942.874.647</a></p>
                                    </li>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <p class="text-color">Email:<br /><a href="congtypcccthienminh@gmail.com">congtypcccthienminh@gmail.com</a></p>
                                    </li>
                                    <li>
                                        <i class="flaticon-pin"></i>
                                        <p class="text-color">Địa chỉ:</p><p>số 20/C43 Khu đô thị mới hai bên đường Lê Trọng Tấn, P Dương Nội,
                                            Q.Hà Đông,TP.Hà Nội.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Tên của bạn *" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Số điện thoại của bạn">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email *" required="">
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div> -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Viết bình luận"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn-one" type="submit" name="submit-form">Gửi liên hệ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-two -->
        <section class="google-map-two">
            <div class="map-inner">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d29802.037976947133!2d105.73007710046387!3d20.98242311564052!3m2!1i1024!2i768!4f13.1!2m1!1zc-G7kSAyMCBjNDMga2h1IMSRw7QgdGjhu4sgbeG7m2kgaGFpIGLDqm4gxJHGsOG7nW5nIGzDqiB0cuG7jW5nIHThuqVuIHAgZMawxqFuZyBu4buZaSBxIGjDoCDEkcO0bmcgdHAgaMOgIG7hu5lp!5e0!3m2!1svi!2sus!4v1651157842748!5m2!1svi!2sus"width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe src="https://snazzymaps.com/embed/69445" width="100%" height="550px"></iframe> -->
                </div>
            </div>
        </section>
        <!-- google-map-two end -->


        <!-- cta-section -->
        <section class="cta-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(../assets/images/shape/pattern-1.png);"></div>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text pull-left">
                        <h2>HỖ TRỢ TƯ VẤN 24/7<br /><a href="tel:0942874647">0942.874.647</a></h2>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="contact.html" class="theme-btn-one">Liên hệ</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


<?php require_once ("../../view/template/footer.php")?>