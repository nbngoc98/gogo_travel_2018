<!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 footer-widget ftr-about ftr-our-company">
                            <h3 class="footer-heading">Hãy kết nối với chúng tôi</h3>
                            <p>GOGO TRAVELS rất hân hạnh được phục vụ quý khách.</p>
                            <ul class="social-links list-inline list-unstyled">
                            	<li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            	<li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 footer-widget ftr-instagram">
                            <h3 class="footer-heading">Instagram Post</h3>
                            <ul class="list-unstyled instagram-list list-inline">
                            	<li><a href="#"></a></li>
                            	<li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">Liên Hệ</h3>
                            <ul class="list-unstyled">
                            	<li><span><i class="fa fa-map-marker"></i></span>Hòa Quý, Đà Nẵng</li>
                            	<li><span><i class="fa fa-phone"></i></span>0366388171</li>
                                <li><span><i class="fa fa-envelope"></i></span>nbngoc.17it2@sict.udn.vn</li>
                            </ul>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2018 <a href="https://www.facebook.com/joonyngoc">Nguyễn Bảo Ngọc</a></p>
                        </div><!-- end columns -->
                        
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        
        <script src="public/home/js/jquery.min.js"></script>
        <script src="public/home/js/bootstrap.min.js"></script>
        <script src="public/home/js/jquery.flexslider.js"></script>
        <script src="public/home/js/bootstrap-datepicker.js"></script>
        <script src="public/home/js/owl.carousel.min.js"></script>
        <script src="public/home/js/custom-navigation.js"></script>
        <script src="public/home/js/custom-flex.js"></script>
        <script src="public/home/js/custom-owl.js"></script>
        <script src="public/home/js/custom-date-picker.js"></script>
        <script src="public/js/tab.js"></script>
        <script>
        function hello(a) {
            $(document).ready(function(){
                 var $p = $('#p');
                 $.ajax({
                url : 'views/pages/home/tour/ajaxtour.php',
                method : "POST",
                data : {"ma":<?php 
                $tenloai = $_GET['tenloai'];
                if(isset($tenloai)){
                    echo $tenloai;
                }    
                ?>,"a":a},
                dataType : "html",
                success : function (result) {
                  $p.html(result);
                },
                error: function(){
                  alert("loi");
                }
                });
            });
        }
        </script>
        <script>
        function hello1(a) {
            $(document).ready(function(){
         var $p = $('#id1');
         $.ajax({
        url : 'views/pages/home/sales/ajaxsales.php',
        method : "POST",
        data : {"ab":a},
        dataType : "html",
        success : function (result) {
          $p.html(result);
        },
        error: function(){
          alert("loi");
        }
      });
      });
        }
        </script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>