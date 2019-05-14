
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
$id = $_POST['ma'];
$a = $_POST['a'];
$sql = 'SELECT * FROM tour inner join khoihanh on tour.MaTour = khoihanh.MaTour INNER join loaitour on tour.MaLoai = loaitour.MaLoai where tour.MaLoai ='.$id.' LIMIT '.$a.',2';
$result = $conn->query($sql);

?>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <?php 
                        if ($result->num_rows > 0) {
                     
                            while ($row = $result->fetch_assoc()) {
                            
                                $id = $row['MaTour'];
                                $image = 'public/uploads/tour/'.$row['AnhTour'];
                                $ngaykhoihanh =  $row['ngaykhoihanh'];
                                $ngaykhoihanh_moi = date("d-m-Y", strtotime($ngaykhoihanh));
                                $price = $row['GiaNguoiLon'];
                                $price_new = number_format($price, 0, '', ',');
                                
                                $noidung = $row['NoiDungTour'];
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
                                                <a href='index.php?controller=tour&action=chitietTour&id=$id'>
                                                    <img src='$image' class='img-responsive' alt='tour-img' />
                                                </a>
                                                <div class='main-mask'>
                                                    <ul class='list-unstyled list-inline offer-price-1'>
                                                        <li class='price'>" . $price_new." VNĐ/Khách<span class='divider'></span><span class='pkg'><i class='fa fa-fw fa-clock-o'></i>" . $row['tgian']." NGÀY</span></li>
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
                                                
                                                <h3 class='block-title'><a href='index.php?controller=tour&action=chitietTour&id=$id'>". $row['TenTour']."</a></h3>
                                                <p class='block-minor'><i class='fa fa-fw fa-rocket'></i>" . $ngaykhoihanh_moi. "</p>
                                                <p>".$noidung2."</p>
                                                <a href='index.php?controller=tour&action=chitiettour&id=$id&date=$ngaykhoihanh' class='btn btn-orange btn-lg'>Xem chi tiết</a>
                                             </div><!-- end t-list-info -->
                                        </div><!-- end list-content -->
                                    </div><!-- end t-list-block -->
                                ";                                    
                            }
                        }
                    ?>              
                    
                    <div class="pages">
                        <ol class="pagination">
                            
                        <li><input type="button" value="1" onclick="hello(1)"></li>
                        <li class="active"><input type="button" value="2" onclick="hello(2)"></li> 
                            
                        </ol>
                    </div><!-- end pages -->
</div><!-- end columns -->