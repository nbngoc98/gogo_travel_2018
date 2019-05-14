
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
                                    <h3 class="modal-title">Bạn có đồng ý hủy hay không?</h3>
                                    <form method="POST" action="#">
                                        
                                        <div class="checkbox">
                                             <label><input type="checkbox" name="huy" value="Yêu Cầu Hủy"> Hủy tour</label>
                                        </div>
                                        
                                        <button class="btn btn-orange btn-block" type="submit" name="Submit" value="huy">Xác nhận hủy</button>
                                    </form>
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