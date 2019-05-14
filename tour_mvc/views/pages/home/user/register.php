<?php include 'views/pages/home/header.php' ?> 
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
	<div id="registration" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                	<div class="flex-content">
                        <div class="custom-form custom-form-fields">
                            <h3>Đăng ký</h3>
                            <p>Mời bạn điền đầy đủ các thông tin dưới đây để đăng ký tài khoản.</p>
                            <form  method="post" action="#" name="">
                                    
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username;?>"/>
                                     <span><i class="fa fa-user"></i></span>
                                </div>

                                <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email;?>"/>
                                     <span><i class="fa fa-envelope"></i></span>
                                </div>
                                
                                <div class="form-group">
                                     <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $password;?>"/>
                                     <span><i class="fa fa-lock"></i></span>
                                </div>

                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Họ và tên" name="name" value="<?php echo $name;?>">
                                     <span><i class="fa fa-user"></i></span>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="sex" value="<?php echo $sex;?>">
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                        <option>Khác...</option>    
                                    </select>
                                </div>

                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Chứng minh nhân dân" name="cmt" value="<?php echo $cmt;?>"/>
                                     <span><i class="fa fa-fw fa-trello"></i></span>
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Địa chỉ" name="diachi" value="<?php echo $diachi;?>"/>
                                     <span><i class="fa fa-fw fa-trello"></i></span>
                                </div>
                                
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Số điện thoại" name="sdt" value="<?php echo $sdt;?>"/>
                                     <span><i class="fa fa-fw fa-mobile-phone"></i></span>
                                </div>
                                
                                <button class="btn btn-orange btn-block" type="submit" name="Submit" value="Register">Đăng ký</button>
                            </form>
                            
                            <div class="other-links">
                            	<p class="link-line"> Bạn đã có tài khoản? <a href="index.php?controller=users&action=login">Đăng nhập tại đây</a></p>
                            </div><!-- end other-links -->
                        </div><!-- end custom-form -->
                    </div><!-- end form-content -->
                </div><!-- end columns -->

                <div class="col-sm-4">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->         
    </div><!-- end registration -->
</section><!-- end innerpage-wrapper -->
<?php include 'views/pages/home/footer.php' ?>