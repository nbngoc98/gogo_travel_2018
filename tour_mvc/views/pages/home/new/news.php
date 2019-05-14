<?php include "views/pages/home/header.php" ?>
<section class="page-cover" id="cover-hotel-grid-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Tin tức</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Tin tức</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
<section class="innerpage-wrapper">
        	<div id="hotel-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            <div class="row">
                            
                                <?php
                                while($row = $result->fetch_assoc()){
                                	
                                	$id = $row["MaTinTuc"];
                                	$noidung = $row['NoiDung'];
						            $len = strlen($noidung);
						            if($len > 100){
							        $noidung1 = substr($noidung,  0, 120);
							        $noidung2 = $noidung1." ...";
						            }
						            $img = 'public/uploads/tintuc/'.$row['AnhTT'];

                                		echo '<div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block h-grid-block">
                                        <div class="main-img h-grid-img">
                                            <a href=index.php?controller=news&action=chitietnew&id='.$id.'>
                                                <img src='.$img.' class="img-responsive" alt="hotel-img">
                                            </a>
                                        </div><!-- end h-grid-img -->
                                        
                                         <div class="block-info h-grid-info">
                                            
                                            <h3 class="block-title"><a href=index.php?controller=news&action=chitietnew&id='.$id.'>'.$row["TenTinTuc"].'</a></h3>
                                            <p>'.$noidung2.'</p>
                                            <div class="grid-btn">
                                                <a href=index.php?controller=news&action=chitietnew&id='.$id.' class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                         </div><!-- end h-grid-info -->
                                    </div><!-- end h-grid-block -->
                                </div><!-- end columns -->';
                                }
                                ?>
                                
                                
                                
                            </div><!-- end row -->
                            
                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->
                                                
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
            </div><!-- end hotel-grid -->
        </section>

<?php include "views/pages/home/footer.php" ?>