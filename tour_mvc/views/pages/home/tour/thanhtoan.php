<?php
$row = $result->fetch_assoc();
$madat = $row['MaDat'];
$MaSale = $row['MaSale'];
//lưu session để đưa qua trang hành khách
$_SESSION['madat']=$madat;
$gianguoilon = $row['GiaNguoiLon'];
$giatreem = $row['GiaTreEm'];
$price_new1 = number_format($gianguoilon, 0, '', ',');
$price_new2 = number_format($giatreem, 0, '', ',');

$songuoilon = $row['songuoilon'];
$sotreem = $row['sotreem'];
$sotrenho = $row['sotrenho'];
$n = $songuoilon + $sotreem + $sotrenho;
$_SESSION['n']=$n;

$tongnguoilon = ($gianguoilon * $songuoilon);
$tongnguoilon_new = number_format($tongnguoilon, 0, '', ',');
$tongtreem = ($giatreem * $sotreem);
$tongtreem_new = number_format($tongtreem, 0, '', ',');
$tonggia = ($gianguoilon * $songuoilon) + ($giatreem * $sotreem);
$tonggia_new = number_format($tonggia, 0, '', ',');
?>
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
					                <div style="padding: 12px 15px 12px 15px; background: #c50000; color: #FFFFFF; text-align: center;">THANH TOÁN</div>
					            </div>
					            <div style="border: 1px solid #ccc; padding: 15px">
				            		<table class="table table-bordered">
                                        <thead>
                                            <tr style="font-weight: bold; font-size: 16px;">
                                                <td>Loại khách</td>
                                                <td>Giá tour</td>
                                                <td>Số lượng</td>
                                                <td>Land tour</td>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 15px;">
                                            <tr>
                                                <td style="width:300px;" data-title="Loại khách">Người lớn (Từ 12 tuổi trở lên)</td>
                                                <td style="text-align:right" data-title="Giá tour"><?php echo $price_new1 ?><span> đ</span></td>
                                                <td style="text-align:right" data-title="slg"><?php echo $songuoilon ?><span> người</span></td>
                                                <td style="text-align:right;width:200px;" data-title="Land tour"><?php echo $tongnguoilon_new ?> đ</td>
                                            </tr>
                                            <tr>
                                                <td data-title="Loại khách">Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
                                                <td style="text-align:right" data-title="Giá tour"><?php echo $price_new2 ?><span> đ</span></td>
                                                <td style="text-align:right" data-title="slg"><?php echo $sotreem ?><span> người</span></td>
                                                <td style="text-align:right" data-title="Land tour"><?php echo $tongtreem_new ?> đ</td>
                                            </tr>
                                            <tr>
                                                <td data-title="Loại khách">Trẻ nhỏ (Từ 2 tuổi đến dưới 5 tuổi)</td>
                                                <td style="text-align:right" data-title="Giá tour">Miễn phí</td>
                                                <td style="text-align:right" data-title="slg"><?php echo $sotrenho ?><span> người</span></td>
                                                <td style="text-align:right" data-title="Land tour">0 đ</td>
                                            </tr>
                                        </tbody>
                                    </table>
					                <div class="form-horizontal">
										<div class="row" style="margin-top: 30px">
										    <div class="col-xs-12">
										        <div style="text-align: left; padding: 10px 15px 10px 15px; background: #ddd">
										            <div class="row">
										                <span style="color: #cd2c24; font-weight: bold; font-size: 20px;float:right;" id="spanTotalPrice"><b>Tổng giá:</b> <?php echo $tonggia_new?> Đ</span>
										            	<input class="form-control"  name="price" type="hidden" value="<?php echo $tonggia_new?>">
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
						<button style="margin-top: 10px;padding: 13px 32px;" type="submit" class="btn btn-orange" name="thanhtoan">Tiếp tục</button>
				</div> 
			</div>
		</form>
    </div>
</div>
<?php include "views/pages/home/footer.php" ?>