<?php include 'views/pages/home/header.php' ?> 
<!--================ PAGE-COVER ===============-->
<section class="page-cover" id="cover-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<h1 class="page-title">LIÊN HỆ</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Trang Chủ</a></li>
                    <li class="active">Liên Hệ</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
	<div id="contact-us" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-5 no-pd-r">
                	<div class="custom-form contact-form">
                    	<h3>LIÊN HỆ</h3>
                        <p>Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị một cách nhanh chóng xin vui lòng liên hệ.</p>
                        <form name="AddPhanhoi" action="#" method="post">
                                
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Họ và tên" name="Name" required/>
                                 <span><i class="fa fa-user"></i></span>
                            </div>

                            <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Email" name="Email" required/>
                                 <span><i class="fa fa-envelope"></i></span>
                            </div>
                            
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Tiêu đề" name="Title" required/>
                                 <span><i class="fa fa-info-circle"></i></span>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Nội dung" name="Content"></textarea>
                                <span><i class="fa fa-pencil"></i></span>
                            </div>
							
                            <button class="btn btn-orange btn-block" name="add_Phanhoi">Gửi</button>
                        </form>
                    </div><!-- end contact-form -->
                </div><!-- end columns -->
                
                <div class="col-sm-12 col-md-7 no-pd-l">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                    </div><!-- end map -->
                </div><!-- end columns -->
                
            </div><!-- end row -->
        </div><!-- end container -->   
    </div><!-- end contact-us -->
</section><!-- end innerpage-wrapper -->
<?php include 'views/pages/home/footer.php' ?>