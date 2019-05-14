<?php include "views/pages/home/header.php" ?>
<?php
$row = $result->fetch_assoc();
$img = 'public/uploads/tintuc/'.$row["AnhTT"];
$noidung = $row["NoiDung"];
$TenTinTucc = $row["TenTinTuc"];
?>
<section class="innerpage-wrapper">
    <div id="flight-details" class="innerpage-section-padding" style ="padding-top: 44px">
        <div class="container">
            <div class="row">           

                <div class="col-xs-12 col-sm-12">

                   <img src=<?php echo $img?> style="width: 100%" class="img-fluid" alt="Responsive image">

                   <div class="detail-tabs" style ="
                   margin: 29px 0px;
                   ">


                   <div class="tab-content">

                    <div id="flight-info" class="tab-pane in active">
                        <div class="row">

                            <div class="col-sm-12 col-md-12 tab-text">
                                <h3><?php echo $TenTinTucc ?></h3>
                                <p style="font-size: 19px;"><?php echo $noidung ?></p>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end flight-info -->


                </div><!-- end tab-content -->
            </div><!-- end detail-tabs -->

            <div class="available-blocks" id="available-seats">
                <h2>Tin tức</h2>
                <?php 
                while ($row1 = $resultt->fetch_assoc()){
                    $id = $row1["MaTinTuc"];
                    $img1 = 'public/uploads/tintuc/'.$row1['AnhTT'];
                    $TenTinTuc = $row1["TenTinTuc"];
                    $noidung = $row1['NoiDung'];
                    $len = strlen($noidung);
                    if($len > 200){
                        $noidung1 = substr($noidung,  0, 189);
                        $noidung2 = $noidung1." ...";
                    }

                    echo '<div class="list-block main-block seat-block">
                    <div class="list-content">
                    <div class="main-img list-img seat-img">
                    <a href="index.php?controller=news&action=listNews&id='.$id.'">
                    <img src='.$img1.' class="img-responsive" alt="seat-img">
                    </a>
                    <div class="main-mask">
                    <ul class="list-unstyled list-inline offer-price-1">
                    <li class="price">'.$TenTinTuc.'<span class="divider">|</span><span class="pkg">Starting</span></li>
                    <li class="rating">
                    <span><i class="fa fa-star orange"></i></span>
                    <span><i class="fa fa-star orange"></i></span>
                    <span><i class="fa fa-star orange"></i></span>
                    <span><i class="fa fa-star orange"></i></span>
                    <span><i class="fa fa-star lightgrey"></i></span>
                    </li>
                    </ul>
                    </div><!-- end main-mask -->
                    </div><!-- end seat-img -->

                    <div class="list-info seat-info">
                    <h3 class="block-title"><a href="index.php?controller=news&action=listNews&id='.$id.'">'.$TenTinTuc.'</a></h3>
                    <p class="block-minor">Flexible</p>
                    <p>'.$noidung2.'</p>
                    <a href="index.php?controller=news&action=listNews&id='.$id.'" class="btn btn-orange btn-lg">View More</a>
                    </div><!-- end seat-info -->
                    </div><!-- end list-content -->
                    </div><!-- end seat-block -->';

                }
                ?>






            </div><!-- end available-seats -->


               <!--  <div class="pages">
                    <ol class="pagination">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                    </ol>
                </div> --><!-- end pages -->
            </div><!-- end columns -->






        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end flight-details -->
</section>

<?php include "views/pages/home/footer.php" ?>