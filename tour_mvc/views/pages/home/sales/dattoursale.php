<?php include "views/pages/home/header.php" ?>
<?php
$row=$result->fetch_assoc();
$ma = $row["MaSale"];
$ten = $row["title"];
$tgian = $row["tgian"];
$tenloaiTour = $row["TenLoai"];
$price1 = $row['gianguoilon'];
$price_new1 = number_format($price1, 0, '', ',');
$price2 = $row['giatreem'];
$price_new2 = number_format($price2, 0, '', ',');
$image = 'public/uploads/sales/'.$row['image'];
?>
<div id="detail" class="chitiettour main-content">
    <div class="container">

        <br>
        <div style="color: red"></div>
        <div class="row tour-info" style="margin-bottom: 60px">
            <div class="col-xs-12">
                <div class="row">
                    <div class="t-info-left col-md-4 col-sm-12 left tour-info-mgr mg-bot10">
                        <div class="tour-info-left-frame">
                           <img src=<?php echo $image?> alt="" class="img-responsive " style="width:100%;">
                           <div style="margin-top: 10px">
                                <div style="padding-right: 10px;float:left;height: 50px;width: 50%;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;border-left: 1px solid #ccc;">
                                    <div style="border-right: none !important; text-align: center; margin: 0px !important; height: 50px; line-height: 50px">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Số ngày:
                                        <span><?php echo $tgian?></span>
                                    </div>
                                </div>
                                <div style="padding: 15px;float:right;background: #fc6600;width: 50%;height: 50px;line-height: 20px;color: #fff;font-size: 20px;text-align: center;"><?php echo $price_new1?><span> đ</span></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 right tour-info-right-frame">
                        <div class="row tour-info-right-frame1" >
                            <div class="col-xs-12">
                                <div style="font-weight: bold; font-size: 17.5px; margin-bottom: 10px; line-height: 22px;">
                                    <h1><?php echo $ten?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row tour-info-right-frame2">
                            <div class="col-xs-12">
                                <div class="row" style="margin-bottom: 16px; margin-top: 15px">
                                    <div class="col-md-3 col-sm-3 col-xs-6 mg-bot5">Mã tour:</div>
                                    <div class="col-md-9 col-sm-9 col-xs-6"><?php echo $ma?></div>
                                </div>
                                <div class="row" style="margin-bottom: 16px; margin-top: 15px">
                                    <div class="col-md-3 col-sm-3 col-xs-6 mg-bot5">Ngày khởi hành:</div>
                                    <div class="col-md-3 col-sm-4 col-xs-6"><?php echo $row["ngaykhoihanh"]?></div>
                                </div>
                                <div class="row" style="margin-bottom: 31px; margin-top: 15px">
                                    <div class="col-md-3 col-sm-3 col-xs-6 mg-bot5">Nơi khởi hành:</div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 mg-bot5"><?php echo $row["diemkhoihanh"]?></div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">Giờ khởi hành:</div>
                                    <div class="col-md-3 col-sm-2 col-xs-6"><?php echo $row["giokhoihanh"]?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="chuy">
                                    <span style="display: table-cell; vertical-align: middle; line-height: 18px; color: #cd2c24;">
                                    Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của Vietravel. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lên
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="book-info" style="background: #f4f4f4">
    	<form name="booking" action="#" method="post">
			<div class="container">
				<div class="row">
		                <div class="col-xs-12 text-center" style="margin: 40px 0 40px 0">
		                    <span class="title" style="text-transform: uppercase;">GIÁ TOUR CƠ BẢN</span>
		                </div>
		                <div class="col-xs-12">
		                    <table class="table table-bordered">
		                        <thead>
		                            <tr style="font-weight: bold; font-size: 16px;">
		                                <td>Người lớn (Từ 12 tuổi trở lên)</td>
		                                <td>Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
		                   
		                                <td>Trẻ nhỏ (Từ 5 trở xuống)</td>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                                <td data-title="người lớn"><?php echo $price_new1?><span> Đ </span></td>
		                                <td data-title="trẻ em"><?php echo $price_new2?><span> Đ</span></td>
		                                
		                                <td data-title="tre nho">Miễn phí</td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		                    
		                    <div class="col-xs-12 book-thongtinlienlac">
		                        <div class="row">
		                            
		                            <div class="col-md-12 col-sm-12 col-xs-12">
		                                <div class="form-group">
		                                    <label><span style="color: #cd2c24">Ghi Chú:</span> </label>
		                                    <div style="line-height: 22px">
		                                        <span class="bold">Người lớn sinh từ :</span> 18/12/1948 đến 18/12/2006
		                                        - 
		                                    <span class="bold">Trẻ em sinh từ :</span> 19/12/2006 đến 18/12/2013
		                                       
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
				    <div class="book-danhsachkhachditour list">
				        <div class="row">
					        <div class="col-md-12 col-sm-12 col-xs-12 mg-bot10">
					            <div>
					                <div style="padding: 12px 15px 12px 15px; background: #c50000; color: #FFF">Mời chọn số người chuyến đi</div>
					            </div>
					            <div style="border: 1px solid #ccc; padding: 15px">
					                <div class="form-horizontal">
                                        <div class="row mg-bot10">
					                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot10" >
					                            <label class="mg-bot5">Số người lớn</label>
					                            <div>
					                                <select class="form-control" name="songuoilon">
													    <option value="0">0</option>
													    <option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>
					                            </div>
					                        </div>
					                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot10">
					                            <label class="mg-bot5">Số trẻ em</label>
					                            <div>
													<select class="form-control" name="sotreem">
														<option value="0">0</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>                            
												</div>
					                        </div>
					                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot10">
					                            <label class="mg-bot5">Số trẻ nhỏ</label>
					                            <div>
													<select class="form-control" name="sotrenho">
														<option value="0">0</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>                            
												</div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
				        </div>
				    </div>
				</div>
				<div class="col-xs-12 text-center" style="margin: 40px 0 40px 0">
				<span class="title" style="text-transform: uppercase;">ĐIỀU KHOẢN BẮT BUỘC KHI ĐĂNG KÝ ONLINE</span>
				</div>
				<div class="col-xs-12 book-hinhthucthanhtoan" style="margin-bottom: 30px">
				    <div style="border: 1px solid #ccc; padding: 20px 30px 20px 30px; text-align: justify; word-wrap: break-word; height: 200px; overflow-y: scroll; line-height: 22px">
						<p><strong>I.&nbsp;&nbsp;&nbsp; GIÁ VÉ DU LỊCH</strong></p>
						<p>Giá vé du lịch được tính theo tiền Đồng (Việt Nam - VNĐ). Trường hợp khách thanh toán bằng USD sẽ được quy đổi ra VNĐ theo tỉ giá của ngân hàng Đầu Tư và Phát Triển Việt Nam – Chi nhánh Tp.Đà Nẵng tại thời điểm thanh toán.</p>
						<p>Giá vé chỉ bao gồm những khoản được liệt kê một cách rõ ràng trong phần “Bao gồm” trong các chương trình du lịch. GOGO TRAVELS không có nghĩa vụ thanh toán bất cứ chi phí nào không nằm trong phần “Bao gồm”.</p>
						<p><strong>II.&nbsp;&nbsp; THANH TOÁN</strong></p>
						<p>Khi đăng ký, Quý khách vui lòng cung cấp đầy đủ thông tin và đóng một khoản tiền cọc (đối với hình thức thanh toán tiền mặt, chuyển khoản) để giữ chỗ. Số tiền cọc khác nhau tùy theo chương trình mà Quý khách chọn, số tiền còn lại sẽ thanh toán trước ngày khởi hành 5 ngày làm việc.</p>
						<p>Thanh toán bằng tiền mặt hoặc chuyển khoản tới tài khoản ngân hàng của GOGO TRAVELS như sau:</p>
						<p>Tên tài khoản: GOGO TRAVELS</p>
						<p>Ngân hàng:&nbsp;&nbsp;&nbsp; Ngoại Thương Việt Nam - Chi nhánh Tp.Đà Nẵng</p>
						<p>Địa chỉ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Hòa Quý, Quận Ngũ Hành Sơn, Tp.Đà Nẵng</p>
						<p>Tài khoản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12345678909</p>
						<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;VND: 007.100.001.2584</p>
				    </div>
				</div>
				<div class="col-xs-12 book-toidongy" style="margin: 0 0 40px 0">
				    <label class="checkbox-inline">
				    <input type="checkbox" id="chkDieuKhoan" required="">Tôi đồng ý với các điều kiện trên</label>
				</div>
				<div style="text-align: center;margin-bottom: 57px;"> 
						<button style="padding: 13px 32px;" type="submit" class="btn btn-orange" name="dattour">Tiếp tục</button>
				</div> 
			</div>
		</form>
    </div>
</div>
<?php include "views/pages/home/footer.php" ?>