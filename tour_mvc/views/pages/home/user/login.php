
<?php
error_reporting(0);
?>  

<?php include 'views/pages/home/header.php' ?> 
<!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                    	<div class="col-sm-4">
                    	</div>
                        <div class="col-sm-4">
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Đăng nhập</h3>
                                    <p>Mời bạn điền đầy đủ thông tin để đăng nhập tài khoản</p>
                                    <form method="POST" action="index.php?controller=users&action=login">
                                            
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Username"  name="username" placeholder="Username" value="<?php echo $user_name;?>"/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        <span style="color: aqua"><?php echo $errUsername; ?></span>

                                        <div class="form-group">
                                             <input type="password" class="form-control" placeholder="Password"  name="password" placeholder="Password" value="<?php echo $pass;?>"/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        <span style="color: aqua"><?php echo $errPass; ?></span>
                                        
                                        <div class="checkbox">
                                             <label><input type="checkbox"> Lưu mật khẩu</label>
                                        </div>
                                        
                                        <button class="btn btn-orange btn-block" type="submit" name="login" value="Login">Đăng nhập</button>
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p class="link-line">Tài khoản mới ? <a href="index.php?controller=users&action=register">Đăng ký</a></p>
                                        <a class="simple-link" href="#">Quên mật khẩu ?</a>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                        <div class="col-sm-4">
                    	</div>
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end login -->
        </section><!-- end innerpage-wrapper -->
        <?php include 'views/pages/home/footer.php' ?>