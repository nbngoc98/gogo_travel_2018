<?php include "views/pages/home/header.php" ?>
<?php
$row=$result->fetch_assoc();
$id = $row["MaSale"];
$noidung = $row['noidung'];
$ten = $row["title"];
$tgian = $row["tgian"];
$tenloaiTour = $row["TenLoai"];
$gia = $row["gianguoilon"];
$gia1 = $row["giatreem"];
$image = 'public/uploads/sales/'.$row['image'];
$startSale =  $row['startSale'];
$startSale_new = date("d", strtotime($startSale));

$stopSale =  $row['stopSale'];
$stopSale_new = date("d/m/Y", strtotime($stopSale));
$price = $row['gianguoilon'];
$price_new = number_format($price, 0, '', ',');
?>
<!--================ PAGE-COVER ================-->
<section class="page-cover" id="cover-flight-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <h1 class="page-title"><?php  echo $ten?></h1>
               <ul class="breadcrumb">
                <li><a href="index.php">Du Lịch</a></li>
                <li><a href="#"><?php echo $tenloaiTour ?></a></li>
                <li class="active"><?php  echo $ten?></li>
            </ul>
        </div><!-- end columns -->
    </div><!-- end row -->
</div><!-- end container -->
</section>

<section class="innerpage-wrapper">
    <div id="tour-details" class="innerpage-section-padding">
        <div class="container">
            <div class="row">           
                
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    
                    <div class="detail-slider">
                        <div class="feature-slider">
                            <div><img src="<?php echo $image ?>" style="width: -webkit-fill-available;" class="img-responsive" alt="feature-img"/></div>
                        </div><!-- end feature-slider -->
                        
                        
                        <ul class="list-unstyled features tour-features">
                            <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Thời gian khuyến mãi: </p><p class="f-data" style="font-weight: bold;font-size: larger;color: red;text-shadow: black 0.1em 0.1em 0.2em;"><?php echo $startSale_new?>-<?php echo $stopSale_new?></p>
                            </div></li>

                            <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Giá khuyến mãi:</p><p class="f-data" style="font-weight: bold;font-size: larger;color: red;text-shadow: black 0.1em 0.1em 0.2em;"><?php echo $price_new?> VNĐ/KHÁCH</p></div></li>

                            <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Số ngày đi:</p><p class="f-data" style="font-weight: bold;font-size: larger;color: red;text-shadow: black 0.1em 0.1em 0.2em;"><?php echo $tgian?></p></div></li>
                            
                        </ul>
                    </div><!-- end detail-slider --> 
                    <div class="col-xs-12" style="background-color: #f2f2f2;margin-bottom: 25px;padding-bottom: 30px;">
                        <div class="row" style="margin-bottom: 22px;margin-top: 30px">
                            <div class="col-md-4 col-sm-4 col-xs-5">Mã tour sale:</div>
                            <div class="col-md-8 col-sm-8 col-xs-7"><?php echo $id?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-5 mg-10">Khởi hành:</div>
                            <div class="col-md-3 col-sm-3 col-xs-7"><?php $ngay = $row["ngaykhoihanh"];
                                            echo $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngay));?></div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-4 col-sm-4 col-xs-5 mg-bot15">Nơi khởi hành:</div>
                            <div class="col-md-3 col-sm-3 col-xs-7"> <?php echo $row["diemkhoihanh"]?></div>
                            <div class="col-md-5 col-sm-5 col-xs-12  mg-bot15">
                                <span>Thời gian: <?php echo $tgian?></span>
                            </div>
                        </div>
                    </div>
                    <?php echo "<center><a href='index.php?controller=sales&action=dattour&id=$id' class='btn btn-orange btn-lg'>Đặt Tour</a></center>"?>

                    <div class="detail-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#tour-information" data-toggle="tab">Thông tin tour</a></li>
                            <li><a href="#flight" data-toggle="tab">Đánh giá</a></li>

                        </ul>
                        
                        <div class="tab-content">

                            <div id="tour-information" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 tab-text">
                                        <h3>Thông tin tour</h3>
                                        <div class="col-xs-12 main-content">
                                            <p style="text-transform: uppercase; color: #333; font-weight: bold; font-size: 15px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-sticky-note-o" aria-hidden="true"></i>&nbsp;&nbsp;Chương trình Tour</p>
                                            <div><p style="color: #000000;width: 100%;"><?php echo $noidung?></p></div>

                                            <p style="text-transform: uppercase; color: #333; font-weight: bold; font-size: 15px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-plane" aria-hidden="true"></i>&nbsp;&nbsp;Thông tin chuyến đi</p>
                                            <table class="table table-bordered">
                                                <tbody style="font-size: 15px;">
                                                    <tr>
                                                        <td style="width:300px;">Ngày đi: <?php $ngay = $row["ngaykhoihanh"];
                                                echo $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngay));?></td>
                                                       
                                                        <td style="width:200px;">Điểm khởi hành: <?php echo $row["diemkhoihanh"]?></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <div id="divThongTinHDV"><p style="text-transform: uppercase; color: #333; font-weight: bold; font-size: 15px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Thông tin hướng dẫn viên</p>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="font-weight: bold; font-size: 16px;">
                                                            <td style="width:300px;">Họ tên</td>
                                                            <td>Địa chỉ</td>
                                                            <td style="width:200px;">Điện thoại</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 15px;">
                                                        <tr>
                                                            <td data-title="Họ tên:">CHỜ BÁO SAU</td>
                                                            <td data-title="Địa chỉ:">CHỜ BÁO SAU</td>
                                                            <td data-title="Điện thoại:">CHỜ BÁO SAU</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <p style="text-transform: uppercase; color: #333; font-weight: bold; font-size: 15px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;Thông tin tập trung</p>
                                            <table class="table table-bordered">
                                                <tbody style="font-size: 15px;">
                                                    <tr>
                                                        <td style="width:300px;">Ngày tập trung</td>
                                                        <td>
                                                            <?php $ngay = $row["ngaykhoihanh"];
                                                echo $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngay));?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Nơi tập trung
                                                        </td>
                                                        <td>
                                                            <span><?php echo $row["diemkhoihanh"]?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p style="text-transform: uppercase; color: #333; font-weight: bold; font-size: 15px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp;&nbsp;Giá tour </p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="font-weight: bold; font-size: 16px;">
                                                        <td>Loại khách</td>
                                                        <td>Giá tour</td>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 15px;">
                                                    <tr>
                                                        <td style="width:300px;" data-title="Loại khách">Người lớn (Từ 12 tuổi trở lên)</td>
                                                        <td style="text-align:right" data-title="Giá tour"><?php echo $gia2 = number_format($gia, 0, '', '.');?><span> đ</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Loại khách">Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
                                                        <td style="text-align:right" data-title="Giá tour"><?php echo $gia2 = number_format($gia1, 0, '', '.');?><span> đ</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Loại khách">Trẻ em (Từ 5 tuổi trở xuống)</td>
                                                        <td style="text-align:right" data-title="Giá tour">Miễn phí</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <p style="text-transform: uppercase; color: #333; font-weight: bold; font-size: 15px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-sticky-note-o" aria-hidden="true"></i>&nbsp;&nbsp;Ghi chú</p>
                                            <div><p style="color: red;width: 100%;">
                                                Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của GOGO TRAVELS. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lên.</p>
                                            </div>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end hotel-overview -->
                            
                            <div id="flight" class="tab-pane">
                                <div class="row">
                                    <div class="comment-block">
                                        <?php 
                                            if ($resultt->num_rows > 0) {
                                                while ($row = $resultt->fetch_assoc()) {
                                                    $noidung = $row['NoiDungCom'];
                                                    $ten = $row['hoten'];
                                                    $reply = $row['reply'];
                                                    $created = $row['created'];
                                                    $created_moi = date("h:i:s d/m/Y", strtotime($created));
                                                    echo"
                                                       <div class='user-text'>
                                                            <ul class='list-inline list-unstyled'>
                                                                <li class='user-name'>".$ten."</li>
                                                                <li class='date'><i class='fa fa-clock-o'></i>".$created_moi."</li>
                                                            </ul>
                                                            <p>".$noidung.".</p>
                                                        </div><!-- end user-text -->";
                                                    if ($reply =='') {
                                                        echo"";
                                                    }else{
                                                        echo "    
                                                        <div class='comment-block reply-block'>  
                                                            <div class='user-text'>
                                                                <ul class='list-inline list-unstyled'>
                                                                    <li class='user-name'>Admin</li>
                                                                </ul>
                                                                <p>".$reply.".</p>
                                                            </div><!-- end user-text -->
                                                        </div><!-- end reply-block -->
                                                    ";                                  
                                                    }
                                                      
                                                }
                                            }
                                        ?> 
                                        
                                        
                                        
                                    </div><!-- end comment-block -->
                                    <div class="col-sm-12 col-md-12 tab-text">
                                        
                                        <form name="AddComment" action="#" method="post"> 
                                            <div class="form-group">
                                                <textarea class="form-control input-lg" rows="5" placeholder="Bình luận hoặc nhận xét tour..." name="noidung"></textarea>
                                            </div>
                                            
                                            <button class="btn btn-orange" name="add_Comment">Submit</button>
                                        </form> 
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end restaurant -->
                            
                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->
                </div><!-- end columns -->
                                        
                <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-12">    
                            <div class="side-bar-block support-block">
                                <h3>GOGO Travels Help</h3>
                                <p>Mọi thắc mắc hoặc ý kiến đóng góp nhanh ,vui lòng gọi về đường dây nóng</p>
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
    </div><!-- end tour-details -->
</section><!-- end innerpage-wrapper -->

<?php include "views/pages/home/footer.php" ?>