<?php include "header.php" ?>

<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-4">

    <div class="flexslider slider tour-slider" id="slider-4">
        <ul class="slides">
            <?php 
                if ($result2->num_rows > 0) {
                    while ($row = $result2->fetch_assoc()) {
                        $id = $row['MaSale'];
                        $slideshow = 'public/uploads/sales/shows/'.$row['slideshow'];
                        $price = $row['gianguoilon'];
                        $price_new = number_format($price, 0, '', ',');
                        $noidung = $row['noidung'];
                        $len = strlen($noidung);
                        if($len > 150){
                            $noidung1 = substr($noidung,  0, 150);
                            $noidung2 = $noidung1." ...";
                        }else if($len < 150){
                            $noidung2 = substr($noidung,  0, 150);     
                        }
                        echo"
                           <li class='item-1 back-size' style='background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(".$slideshow.") 50% 15%;background-size:cover;height:100%;'>
                                <div class='meta'>         
                                    <div class='container'>
                                        <span class='highlight-price highlight-2'>GIÁ CHỈ TỪ : " .$price_new." vnđ/Khách </span>
                                        <a href='index.php?controller=sales&action=chitiet&id=$id' style='color:white'><h1>" . $row['title']."</h1></a>
                                        <p>".$noidung2."</p>
                                    </div><!-- end container -->  
                                </div><!-- end meta -->
                            </li><!-- end item-1 --> 
                        ";                                    
                    }
                }
            ?>              
        </ul>
    </div><!-- end slider -->
    
    <?php include 'seach.php' ?>
    
</section><!-- end flexslider-container -->


<!--=============== TOUR OFFERS ===============-->
<section id="tour-offers" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
            	<div class="page-heading">
                	<h2>Tour nổi bật</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                
                 <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                    <?php 
                        if ($result1->num_rows > 0) {
                            while ($row = $result1->fetch_assoc()) {
                                $id = $row['MaTour'];
                                $image = 'public/uploads/tour/'.$row['AnhTour'];
                                $price = $row['GiaNguoiLon'];
                                $price_new = number_format($price, 0, '', ',');
                                $ngaykhoihanh =  $row['ngaykhoihanh'];
                                $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngaykhoihanh));
                                echo"
                                    <div class='item'>
                                        <div class='main-block tour-block'>
                                            <div class='main-img'>
                                                <a href='#'>
                                                    <img src='$image' style='height=100px' class='img-responsive' alt='tour-img' />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            <div class='offer-price-2'>
                                                <ul class='list-unstyled'>
                                                    <li class='price'>" . $price_new." VNĐ/Khách<a href='tour-detail-right-sidebar.html' ><span class='arrow'><i class='fa fa-angle-right'></i></span></a></li> 
                                                </ul>
                                            </div><!-- end offer-price-2 -->
                                                
                                            <div class='main-info tour-info'>
                                                <div class='main-title tour-title'>
                                                    <a href='#'>" . $row['TenTour']. " </a>
                                                    <p><i class='fa fa-fw fa-rocket'></i>" . $ngaykhoihanh_moi." / <i class='fa fa-fw fa-clock-o'></i>" . $row['tgian']."</p>
                                                    <div class='rating'>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star grey'></i></span>
                                                    </div>
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div>
                                    </div>  
                                ";                                    
                            }
                        }
                    ?>                  
                </div><!-- end owl-tour-offers -->
                <div class="view-all text-center">
                	<a href="tour-grid-right-sidebar.html" class="btn btn-black">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
	</div><!-- end container -->
</section><!-- end tour-offers -->
<?php include "footer.php" ?>

