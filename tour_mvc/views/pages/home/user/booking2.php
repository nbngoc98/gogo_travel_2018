<?php include 'views/pages/home/header.php' ?> 
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
	<div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="dashboard-heading">
                        <h2>Travel <span>Profile</span></h2>
                        <p>Hi <?php echo $_SESSION['login'] ?>, Chào mừng bạn đã đến với GOGO TRAVELS!</p>
                        <p>Tất cả thông tin của bạn và các chuyến đi của bạn được đặt với chúng tôi sẽ xuất hiện ở đây và bạn sẽ có thể quản lý mọi thứ!</p>
                    </div><!-- end dashboard-heading -->
                    
                    <div class="dashboard-wrapper">
                    	<div class="row">
                        
                        	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                        		<ul class="nav nav-tabs nav-stacked text-center">
                                	<li><a href="index.php?controller=users&action=profile"><span><i class="fa fa-user"></i></span>Người Dùng</a></li>
                                    <li  class="active"><a href="#"><span><i class="fa fa-briefcase"></i></span>Tour Đặt</a></li>
                                    <li><a href="wishlist.html"><span><i class="fa fa-fw fa-star"></i></span>Đánh Giá</a></li>
                                </ul>
                            </div><!-- end columns -->
                            
                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                        		<h2 class="dash-content-title">Chuyến đi bạn đã đặt!</h2>
                                <a href="index.php?controller=users&action=booking"><button class="tablink" onclick="openPage('Home', this, '#faa61a')" >Tour Du Lịch</button></a>
                                <button class="tablink" onclick="openPage('News', this, '#faa61a')" id="defaultOpen">Tour Khuyến Mãi</button>

                                <div id="Home" class="tabcontent">
                                    
                                </div>

                                <div id="News" class="tabcontent">
                                  <div class="dashboard-listing booking-listing">
                                    
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                     <?php 
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $id = $row['MaDat'];
                                                                $ngaydat = $row['ngaydat'];
                                                                $ngaydat_new = date("d", strtotime($ngaydat));
                                                                $ngaydat_new1 = date("m/Y", strtotime($ngaydat));

                                                                $tongsonguoi = $row['songuoilon'] + $row['sotrenho'] + $row['sotreem'];
                                                                $ngaykhoihanh =  $row['ngaykhoihanh'];
                                                                $ngaykhoihanh_moi = date("d-m-Y ", strtotime($ngaykhoihanh));
                                                                // $id = $row['MaSale'];
                                                                $tongtien = $row['sotienThanhToan'];
                                                                $tongtien_new = number_format($tongtien, 0, '', ',');
                                                                echo"
                                                                   <tr>
                                                                        <td class='dash-list-icon booking-list-date'><div class='b-date'><h3>".$ngaydat_new."</h3><p> ".$ngaydat_new1."</p></div></td>
                                                                        <td class='dash-list-text booking-list-detail'>
                                                                            <h3>" . $row['title']."</h3>
                                                                            <ul class='list-unstyled booking-info'>
                                                                                <li><span>Ngày khởi hành:</span> ". $ngaykhoihanh_moi."</li>
                                                                                <li><span>Số người đi: </span> ".$tongsonguoi." người ( ".$row['songuoilon']." người lớn, ".$row['sotreem']." trẻ em, ".$row['sotrenho']." trẻ nhỏ) </li>
                                                                                <li><span>Tổng số tiền thanh toán:</span> ".$tongtien_new." VNĐ</li>
                                                                            </ul>
                                                                        </td>
                                                                        <td class='dash-list-btn'><a href='index.php?controller=users&action=huytour1&id=$id'><button class='btn btn-orange'>Hủy</button></a></td>
                                                                    </tr>
                                                                ";                                    
                                                            }
                                                        } else {
                                                          echo "Chưa đặt tour nào!";
                                                        }
                                                    ?>              
                                                </tbody>
                                            </table>
                                        </div><!-- end table-responsive -->
                                    </div><!-- end booking-listings -->
                                </div>

                                
                                
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                    </div><!-- end dashboard-wrapper -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->          
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->

<?php include 'views/pages/home/footer.php' ?>