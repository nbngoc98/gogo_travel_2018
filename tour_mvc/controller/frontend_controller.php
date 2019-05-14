<?php 
	include 'user_controller.php';
	include 'model/home/home_model.php';
	include 'model/home/sales_model.php';
	include 'model/home/contact_model.php';
	include 'model/home/thanhtoan_model.php';
	include 'model/home/tour_model.php';
	include 'model/home/news_model.php';
	include 'model/home/date_model.php';
	class FrontEndController {
		public function xulyYeucau() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			if ($controller == 'home') {
				switch ($action) {
					case 'home':
						// lay thong tin trang chu
						// Model lay thong tin trang chu
						$homeModel = new homeModel();
						$result1 = $homeModel->getHomepage();
						$result2 = $homeModel->getHomepage1();
						//Do du lieu ra views
						include 'views/pages/home/home.php';
						break;
					case 'detail':
						$id = $_GET['id'];
						$homeModel = new homeModel();
						$result = $homeModel->detailProduct($id);
						//Do du lieu ra views
						include 'views/detail_product.php';
						break;
					default:
						# code...
						break;
					}
				if (!isset($_SESSION['login'])) {
					header("Location: index.php?controller=users&action=login");
				} 
			} elseif ($controller == 'users') {
				$users = new User();
				$users->xulyVandeLienquanUser($action);
			} elseif($controller == 'sales') {
				switch ($action) {
					case 'listSale':
						$salesModel = new salesModel();
						$result = $salesModel->listSales();
						include 'views/pages/home/sales/sales.php';
						break;
					case 'chitiet':
						$id = $_GET['id'];
						$salesModel = new salesModel();
						$result = $salesModel->chitietsale($id);
						$resultt = $salesModel->showComment($id);

						if (isset($_POST['add_Comment'])) {
							if (!$_SESSION) {
								?>
									<script language="javascript">
									window.alert("Mời đăng nhập để có thể comment!");
									window.location="index.php?controller=users&action=login"
									</script>
								<?php
							}elseif ($_SESSION['role'] = 'user'){
								$id = $_GET['id'];
								$noidung = $_POST['noidung'];
								$created = date("Y-m-d h:i:s");
							    $thanhvien = $_SESSION['MaTV'];
								$salesModel = new salesModel();
								$salesModel->addComment($thanhvien, $noidung, $created, $id);
							}
						}
						include 'views/pages/home/sales/chitiet_sale.php';
						break;
					// case 'dattour':
					// 	$id = $_GET['id'];
					// 	$thanhvien = $_SESSION['MaTV'];
					// 	//lấy ngày hiện tại
					// 	$ngaydat = date("Y-m-d h:i:s");
					// 	$salesModel = new salesModel();
					// 	$result = $salesModel->dattour($thanhvien, $ngaydat);
					// 	include 'views/pages/home/sales/dattoursale.php';
					// 	break;
					case 'dattour':
						$id = $_GET['id'];
						// $thanhvien = $_SESSION['MaTV'];
						$salesModel = new salesModel();
						$result = $salesModel->showdattour($id);
						if (isset($_POST['dattour'])) {
							if (!$_SESSION) {
								?>
									<script language="javascript">
									window.alert("Mời đăng nhập để có thể đặt tour!");
									window.location="index.php?controller=users&action=login"
									</script>
								<?php
							}elseif ($_SESSION['role'] = 'user'){
								$id = $_GET['id'];
								$songuoilon = $_POST['songuoilon'];
								$sotreem = $_POST['sotreem'];
								$sotrenho = $_POST['sotrenho'];
							    $thanhvien = $_SESSION['MaTV'];
							    $ngaydat = date("Y-m-d h:i:s");
							    //lưu sesion ngày
							    $_SESSION['ngay'] = $ngaydat;
							    
								$salesModel = new salesModel();
								$salesModel->dattour($thanhvien, $id, $songuoilon, $sotreem, $sotrenho, $ngaydat );
							}
						}
						include 'views/pages/home/sales/dattoursale.php';
						break;
					default:
						# code...
						break;
				}
			} elseif ($controller == 'thanhtoan') {
				switch ($action) {
					case 'showTT':
						$date = $_SESSION['ngay'];
						$thanhtoanModel = new thanhtoanModel();
						$result = $thanhtoanModel->showTT($date);

						if (isset($_POST['thanhtoan'])) {
								$date = $_SESSION['ngay'];
								$price = $_POST['price'];
								$price_new = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
								// $price_new = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
								$thanhtoanModel = new thanhtoanModel();
								$thanhtoanModel->thanhtoan($price_new, $date);
						}
						include 'views/pages/home/sales/thanhtoan.php';
						break;
					case 'hanhkhach':
					$maDat = $_SESSION['madat'];
					$n = $_SESSION['n'];
					$thanhtoanModel = new thanhtoanModel();
					if (isset($_POST['khachhang'])) {
								for($i=0;$i<$n;$i++){
									$a = $_POST["ten".$i.""];
									$b = $_POST["ngaysinh".$i.""];
									$e = date("Y-m-d", strtotime($b));
									// var_dump($e);
									// exit();
									$c = $_POST["sodienthoai".$i.""];
									$d = $_POST["cmnd".$i.""];
									$result = $thanhtoanModel->hanhkhach($maDat,$a,$e,$c,$d);
								}
								?>
									<script language="javascript">
									window.alert("Bạn đã đặt Tour thành công. Quản trị viên sẽ gọi điện xác nhận!");
									window.location="index.php?controller=users&action=booking1"
									</script>
								<?php
						}
						include 'views/pages/home/sales/hanhkhach.php';
						break;
					default:
						# code...
						break;
					}
			} elseif ($controller == 'about') {
				switch ($action) {
					case 'aboutus':
						include 'views/pages/home/about_contact/about_us.php';
						break;
					default:
						# code...
						break;
					}
			} elseif ($controller == 'contact') {
				switch ($action) {
					case 'contact_home':
						if (isset($_POST['add_Phanhoi'])) {
							$name = $_POST['Name'];
						    $email = $_POST['Email'];
						    $title = $_POST['Title'];
						    $content = $_POST['Content'];
						    $created = date("Y-m-d h:i:s");
							$phanhoiModel = new phanhoiModel();
							$phanhoiModel->add_Phanhoi($name, $email, $title, $content, $created);
						}
						include 'views/pages/home/about_contact/contact.php';
						break;
					default:
						# code...
						break;
					}
			} elseif ($controller == 'search') {
				switch ($action) {
					case 'timkiem':
						if (isset($_REQUEST['ok'])) {
				            // Gán hàm addslashes để chống sql injection
				            $search = addslashes($_GET['search']);
				              if (empty($search)) {
					                echo '<script type="text/javascript">alert("Nhập từ khóa muốn tìm vào ô trống!")</script>';
					            }else {
									$searchModel = new searchModel();
									$searchModel->timkiem($search);
									var_dump($search);
									exit();

								}
						}
						break;
					default:
						# code...
						break;
					}
			} elseif($controller == 'news') {
				switch ($action) {
					case 'chitietnew':
					    $id = $_GET['id'];
						$listModel = new news();
						$result = $listModel->anh_tin_tuc($id);
						$resultt = $listModel->list_tin_tuc($id);
						include 'views/pages/home/new/list_news.php';
						break;
					case 'list_News':
						$listModel = new news();
						$result = $listModel->list_news();
						include 'views/pages/home/new/news.php';
						break;
					default:
						# code...
						break;
				}
			}elseif ($controller == 'ngaykhac') {
				switch ($action) {
					case 'date':
						$id = $_GET['id'];
						$ngaykhacModel = new ngaykhacModel();
						$result = $ngaykhacModel->date($id);
						include 'views/pages/home/tour/ngaykhac.php';
						break;
					default:
						# code...
						break;
					}
			} 
			elseif($controller == 'tour') {
				switch ($action) {
					case 'listtour':
					    $tenloai = $_GET['tenloai'];
						$tourModel = new tourModel();
						$result = $tourModel->listTour($tenloai);
						include 'views/pages/home/tour/listtour.php';
						break;
					case 'chitiettour':
						$id = $_GET['id'];
						$ngaykhoihanh = $_GET['date'];
						$tourModel = new tourModel();
						$result = $tourModel->chitiettour($id,$ngaykhoihanh);
						$resultt = $tourModel->showComment($id);
						if (isset($_POST['add_Comment'])) {
							if (!$_SESSION) {
								?>
									<script language="javascript">
									window.alert("Mời đăng nhập để có thể comment!");
									window.location="index.php?controller=users&action=login"
									</script>
								<?php
							}elseif ($_SESSION['role'] = 'user'){
								$id = $_GET['id'];
								$noidung = $_POST['noidung'];
							    $thanhvien = $_SESSION['MaTV'];
								$tourModel = new tourModel();
								$tourModel->addComment($thanhvien, $noidung, $id,$ngaykhoihanh);
							}
						}
						include 'views/pages/home/tour/chitiet_tour.php';
						break;
					case 'dattour':
						$id = $_GET['id'];
						$ngaykhoihanh = $_GET["date"];
						// $thanhvien = $_SESSION['MaTV'];
						$tourModel = new tourModel();
						$result = $tourModel->showdattour($id,$ngaykhoihanh);
						if (isset($_POST['dattour'])) {
							if (!$_SESSION) {
								?>
									<script language="javascript">
									window.alert("Mời đăng nhập để có thể đặt tour!");
									window.location="index.php?controller=users&action=login"
									</script>
								<?php
							}elseif ($_SESSION['role'] = 'user'){
								$id = $_GET['id'];
								$songuoilon = $_POST['songuoilon'];
								$sotreem = $_POST['sotreem'];
								$sotrenho = $_POST['sotrenho'];
							    $thanhvien = $_SESSION['MaTV'];
								$ngaydat = date("Y-m-d h:i:s");
								$ngaykhoihanh = $_GET["date"];
							    //lưu sesion ngày
							    $_SESSION['ngay'] = $ngaydat;
								$tourModel = new tourModel();
								$tourModel->dattour($thanhvien, $id, $songuoilon, $sotreem, $sotrenho, $ngaykhoihanh, $ngaydat);
							}
						}
						include 'views/pages/home/tour/dattour.php';
						break;
					default:
						# code...
						break;
				}
			}elseif ($controller == 'thanhtoantour') {
				switch ($action) {
					case 'showTTT':
						$date = $_SESSION['ngay'];
						$thanhtoanModel = new thanhtoanModel();
						$result = $thanhtoanModel->showTTT($date);
						if (isset($_POST['thanhtoan'])) {
								$date = $_SESSION['ngay'];
								$price = $_POST['price'];
								$price_new = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
								$thanhtoanModel = new thanhtoanModel();
								$thanhtoanModel->thanhtoan($price_new, $date);
						}
						include 'views/pages/home/tour/thanhtoan.php';
						break;
					case 'hanhkhach':
						$maDat = $_SESSION['madat'];
						$n = $_SESSION['n'];
						$thanhtoanModel = new thanhtoanModel();
						if (isset($_POST['khachhang'])) {
									for($i=0;$i<$n;$i++){
										$a = $_POST["ten".$i.""];
										$b = $_POST["ngaysinh".$i.""];
										$e = date("Y-m-d", strtotime($b));
										// var_dump($e);
										// exit();
										$c = $_POST["sodienthoai".$i.""];
										$d = $_POST["cmnd".$i.""];
										$result = $thanhtoanModel->hanhkhach($maDat,$a,$e,$c,$d);
									}
								?>
									<script language="javascript">
									window.alert("Bạn đã đặt Tour thành công. Quản trị viên sẽ gọi điện xác nhận!");
									window.location="index.php?controller=users&action=booking"
									</script>
								<?php
							}
						include 'views/pages/home/tour/hanhkhach.php';
						break;
					default:
						# code...
						break;
					}
			}
		}
	}
?>