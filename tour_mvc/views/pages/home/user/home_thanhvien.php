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
                                	<li class="active"><a href="#"><span><i class="fa fa-user"></i></span>Người Dùng</a></li>
                                    <li><a href="index.php?controller=users&action=booking"><span><i class="fa fa-briefcase"></i></span>Tour Đặt</a></li>
                                    <li><a href="wishlist.html"><span><i class="fa fa-fw fa-star"></i></span>Đánh Giá</a></li>
                                </ul>
                            </div><!-- end columns -->
                            
                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Thông tin của bạn:</h4></div>
                                    <div class="panel-body">
                                    	<div class="row">
                                        	<!-- <div class="col-sm-5 col-md-4 user-img">
                                                <img src="images/user-profile.jpg" class="img-responsive" alt="user-img" />
                                            </div><!-- end columns --> 
                                            
                                            <div class="col-sm-7 col-md-8  user-detail">
                                                <ul class="list-unstyled">
                                                    <li><span>Họ Tên:</span> <?php echo $_SESSION['login'] ?>.</li>
                                                    <li><span>Giới Tính:</span> <?php echo $_SESSION['gioitinh'] ?>.</li>
                                                    <li><span>Email:</span> <?php echo $_SESSION['emailTV'] ?>.</li>
                                                    <li><span>Số CMND:</span> <?php echo $_SESSION['soCMT'] ?>.</li>
                                                    <li><span>Số Điện Thoại:</span> <?php echo $_SESSION['soDT'] ?>.</li>
                                                    <li><span>Địa Chỉ:</span> <?php echo $_SESSION['diachi'] ?>.</li>
                                                </ul>
                                                <button class="btn" data-toggle="modal" data-target="#edit-profile">Chỉnh Sửa</button>
                                           	</div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                        
                                    </div><!-- end panel-body -->
                                </div><!-- end panel-detault -->
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                    </div><!-- end dashboard-wrapper -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->          
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->
<div id="edit-profile" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Chỉnh sửa thông tin:</h3>
                    </div><!-- end modal-header -->
                    
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input type="text" class="form-control" placeholder="Họ Tên"/>
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Giới tính</label>
                                <input type="text" class="form-control" placeholder="Nam/Nữ" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Số CMND</label>
                                <input type="text" class="form-control" placeholder="Số CMND" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input type="text" class="form-control" placeholder="Số Điện Thoại" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input type="text" class="form-control" placeholder="Địa Chỉ" />
                            </div><!-- end form-group -->
                            
                            <button class="btn btn-orange">Save Changes</button>
                        </form>
                    </div><!-- end modal-bpdy -->
                </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end edit-profile -->
<?php include 'views/pages/home/footer.php' ?>