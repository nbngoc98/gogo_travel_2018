
<?php include "views/pages/home/header.php" ?>

<div id="detail" class="chitiettour main-content">
    <div class="book-info" style="background: #f4f4f4">
    	<form name="booking" action="#" method="post">
			<div class="container">
				<div class="row">
		                <div class="col-xs-12 text-center" style="margin: 40px 0 40px 0">
		                    <span class="title" style="text-transform: uppercase;"></span>
		                </div>
				    <div class="book-danhsachkhachditour list">
				        <div class="row">
					        <div class="col-md-12 col-sm-12 col-xs-12 mg-bot10">
					            <div>
					                <div style="padding: 12px 15px 12px 15px; background: #c50000; color: #FFFFFF; text-align: center;">THÔNG TIN HÀNH KHÁCH</div>
					            </div>
					            <div style="border: 1px solid #ccc; padding: 15px">
				            		<table class="table table-bordered">
                                        <thead>
                                            <tr style="font-weight: bold; font-size: 16px;">
											    <td>Số Thứ Tự</td>
                                                <td>Tên Khách</td>
                                                <td>Ngày Sinh</td>
                                                <td>Số Điện Thoại</td>
                                                <td>Chứng Minh Nhân Dân</td>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 15px;">
											<?php 
											// $row=
											for($i=0;$i<$n;$i++){
												echo '
											<tr>
											    <td>'.($i+1).'</td>
											    <td><input style="width:100%" type="text" name="ten'.$i.'" id=""></td>
												<td><input style="width:100%" type="date" name="ngaysinh'.$i.'" id=""></td>
												<td><input style="width:100%" type="text" name="sodienthoai'.$i.'" id=""></td>
												<td><input style="width:100%" type="text" name="cmnd'.$i.'" id=""></td>
											</tr>';
											}
											
											?>
                                        </tbody>
                                    </table>
					                <div class="form-horizontal">
										<div class="row" style="margin-top: 30px">
										    <div class="col-xs-12">
										        <div style="text-align: left; padding: 10px 15px 10px 15px; background: #ddd">
										            <div class="row">
										                <span style="color: #cd2c24; font-weight: bold; font-size: 20px;float:right;" id="spanTotalPrice"></span>
										            </div>
										        </div>
										    </div>
										</div>
					                </div>
					            </div>
					        </div>
				        </div>
				    </div>
				</div>
				<div style="text-align: center;margin-bottom: 57px;"> 
						<button style="margin-top: 10px;padding: 13px 32px;" type="submit" class="btn btn-orange" name="khachhang">Tiếp tục</button>
				</div> 
			</div>
		</form>
    </div>
</div>
<?php include "views/pages/home/footer.php" ?>