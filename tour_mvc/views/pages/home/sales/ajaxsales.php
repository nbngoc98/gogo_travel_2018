<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_tour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn, 'utf8' );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a = $_POST['ab'];
$sql = 'SELECT a.MaSale,b.TenLoai, a.title, a.tgian, a.noidung, a.image, a.gianguoilon, a.giatreem, a.ngaykhoihanh, a.diemkhoihanh, a.ngaythemSale, a.startSale, a.stopSale, a.giokhoihanh from sales as a  inner JOIN loaitour as b on a.MaLoai = b.MaLoai LIMIT '.$a.',2';
$result = $conn->query($sql);

?>
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
					<?php 
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['MaSale'];
                                $image = 'public/uploads/sales/'.$row['image'];
                                $ngaykhoihanh =  $row['ngaykhoihanh'];
                                $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngaykhoihanh));

                                $startSale =  $row['startSale'];
                                $startSale_new = date("d", strtotime($startSale));

                                $stopSale =  $row['stopSale'];
                                $stopSale_new = date("d/m/Y", strtotime($stopSale));

                                $price = $row['gianguoilon'];
                                $price_new = number_format($price, 0, '', ',');

                                $noidung = $row['noidung'];
                                  $len = strlen($noidung);
                                  if($len > 150){
                                    $noidung1 = substr($noidung,  0, 150);
                                    $noidung2 = $noidung1." ...";
                                  }else if($len < 150){
                                    $noidung2 = substr($noidung,  0, 150);     
                                  }
                                echo "
                                   <div class='list-block main-block t-list-block'>
                                        <div class='list-content'>
                                            <div class='main-img list-img t-list-img'>
                                                <a href='tour-detail-right-sidebar.html'>
                                                    <img src='$image' class='img-responsive' alt='tour-img' />
                                                </a>
                                                <div class='main-mask'>
                                                    <ul class='list-unstyled list-inline offer-price-1'>
                                                        <li class='price'>" . $price_new." VNĐ/Khách<span class='divider'></span><span class='pkg'><i class='fa fa-fw fa-clock-o'></i>" . $row['tgian']."</span></li>
                                                        <li class='rating'>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star lightgrey'></i></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end main-mask -->
                                            </div><!-- end t-list-img -->
                                            
                                            <div class='list-info t-list-info'>
                                                <p ><span style='background: orange; padding: 6px;font-size: 15px; font-weight: bold;color: white; '>THỜI GIAN KHUYẾN MÃI :".$startSale_new."-".$stopSale_new."</span></p>
                                                <h3 class='block-title'><a href='tour-detail-right-sidebar.html'>" . $row['title']."</a></h3>
                                                <p class='block-minor'><i class='fa fa-fw fa-rocket'></i>" . $ngaykhoihanh_moi. " <i class='fa fa-fw fa-clock-o'></i>".$row['giokhoihanh']."</p>
                                                <p>" . $noidung2."</p>
                                                <a href='index.php?controller=sales&action=chitiet&id=$id' class='btn btn-orange btn-lg'>Xem chi tiết</a>
                                             </div><!-- end t-list-info -->
                                        </div><!-- end list-content -->
                                    </div><!-- end t-list-block -->
                                ";                                    
                            }
                        }
                    ?>              
                    
                    <div class="pages">
                        <ol class="pagination">
                        <li><input type="button" value="1" onclick="hello1(1)"></li>
                        <li class="active"><input type="button" value="2" onclick="hello1(2)"></li> 
                        </ol>
                    </div><!-- end pages -->
                </div><!-- end columns -->