<?php include 'views/pages/home/header.php' ?>
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
	<div id="tour-listing" class="innerpage-section-padding">
        <div class="container">
            <div class="row">        	
                 <div id="p">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <?php 
                        if ($result->num_rows > 0) {
                     
                            while ($row = $result->fetch_assoc()) {
                            
                                $id = $row['MaTour'];
                                $image = 'public/uploads/tour/'.$row['AnhTour'];
                                $ngaykhoihanh =  $row['ngaykhoihanh'];
                                $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngaykhoihanh));
                                $price = $row['GiaNguoiLon'];
                                $price_new = number_format($price, 0, '', ',');
                                
                                $noidung = $row['NoiDungTour'];
                                  $len = strlen($noidung);
                                  if($len > 150){
                                    $noidung1 = substr($noidung,  0, 150);
                                    $noidung2 = $noidung1." ...";
                                  }else if($len < 150){
                                    $noidung2 = substr($noidung,  0, 150);     
                                  }
                                echo"
                                   <div class='list-block main-block t-list-block'>
                                        <div class='list-content'>
                                            <div class='main-img list-img t-list-img'>
                                                <a href='index.php?controller=tour&action=chitietTour&id=$id'>
                                                    <img src='$image' class='img-responsive' alt='tour-img' />
                                                </a>
                                                <div class='main-mask'>
                                                    <ul class='list-unstyled list-inline offer-price-1'>
                                                        <li class='price'>" . $price_new." VNĐ/Khách<span class='divider'></span><span class='pkg'><i class='fa fa-fw fa-clock-o'></i>" . $row['tgian']."</span></li>
                                                        <li class='rating'>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star lightgrey'></i></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end main-mask -->
                                            </div><!-- end t-list-img -->
                                            
                                            <div class='list-info t-list-info'>
                                                
                                                <h3 class='block-title'><a href='index.php?controller=tour&action=chitietTour&id=$id'>". $row['TenTour']."</a></h3>
                                                <p class='block-minor' style='color: red;'><i class='fa fa-fw fa-rocket'></i>" . $ngaykhoihanh_moi. "</p>
                                                <p>".$noidung2."</p>
                                                <a href='index.php?controller=tour&action=chitiettour&id=$id&date=$ngaykhoihanh' class='btn btn-orange btn-lg'>Xem chi tiết</a>
                                             </div><!-- end t-list-info -->
                                        </div><!-- end list-content -->
                                    </div><!-- end t-list-block -->
                                ";                                    
                            }
                        }
                    ?>              
                    
                    <div class="pages">
                        <ol class="pagination">
                            <li><input type="button" value="1" onclick="hello(1)"></li>
                            <li class="active"><input type="button" value="2" onclick="hello(2)"></li> 
                        </ol>
                    </div><!-- end pages -->
                </div><!-- end columns -->
             </div>
                                        
               <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-6 col-md-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Hỗ Trợ</h3>
                                        <p>Mọi thắc mắc và ý kiến vui gặp quản trị viên để được giải đáp.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->   
                
            </div><!-- end row -->
    	</div><!-- end container -->
    </div><!-- end tour-listing -->
</section><!-- end innerpage-wrapper -->

<?php include 'views/pages/home/footer.php' ?>