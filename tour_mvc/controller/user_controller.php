<?php 
	include 'model/home/user_model.php';
	include 'model/home/booking_model.php';
	include 'model/home/register_model.php';
	class User {
		public function xulyVandeLienquanUser($action) {
			if ($action == 'homeUser') {
				// var_dump($_SESSION['login']);
				// var_dump($_SESSION['role']);
				// var_dump($_SESSION['gioitinh']);
				// var_dump($_SESSION['MaTV']);
				// exit();
				// if (!isset($_SESSION['login'])) {
				// 	header("Location: index.php?controller=users&action=login");
				// }
				if (!$_SESSION) {
					?>
						<script language="javascript">
						window.alert("Không thể truy cập chức năng này!");
						window.location="index.php"
						</script>
					<?php
				}elseif ($_SESSION['role'] = 'user'){
					// $this->listUser();
					header("Location: index.php?controller=users&action=profile");
				}
				
			} elseif ($action == 'addUsers') {
				$this->addUser();
			} elseif ($action == 'login') {
				$this->login();
			} elseif ($action == 'logout') {
				$this->logout();
			} elseif ($action == 'profile') {
				include 'views/pages/home/user/home_thanhvien.php';
			} elseif ($action == 'booking') {
				$this->booking1();
				// $this->booking2();
			} elseif ($action == 'booking2') {
				$this->booking2();
			} elseif ($action == 'register') {
				$this->register();
			} elseif ($action == 'huytour') {
				$this->huytour();
			} elseif ($action == 'huytour1') {
				$this->huytour1();
			}
		}

		// public function listUser(){
		// 	$user = new UserModel();
		// 	$listUsers	= $user->getUser();
		// 	include 'views/users/list_users.php';
		// }
		public function login() {
			if (isset($_POST['login'])){
				
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				$user = new UserModel();
				$checkLogin	= $user->checkLogin($username, $password);
				if (!is_null($checkLogin)) {
					// var_dump($checkLogin);exit();
					$_SESSION['login'] = $checkLogin['hoten'];
					$_SESSION['MaTV'] = $checkLogin['MaTV'];
					$_SESSION['role'] = $checkLogin['role'];
					$_SESSION['gioitinh'] = $checkLogin['gioitinh'];
					$_SESSION['emailTV'] = $checkLogin['emailTV'];
					$_SESSION['diachi'] = $checkLogin['diachi'];
					$_SESSION['soCMT'] = $checkLogin['soCMT'];
					$_SESSION['soDT'] = $checkLogin['soDT'];
					?>
						<script language="javascript">
						window.alert("Chúc mừng bạn đã đăng nhập thành công!");
						window.location="index.php"
						</script>
					<?php
				} else {
					$message = "Sai username hoặc password";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
			include 'views/pages/home/user/login.php';
		}
		public function logout() { 
			unset($_SESSION['login']);
			session_unset();
			?>
				<script language="javascript">
				window.alert("Đăng xuất thành công!");
				window.location="index.php"
				</script>
			<?php
		}
		public function booking1(){
			$thanhvien = $_SESSION['MaTV'];
			$booking = new bookingModel();
			$result = $booking-> booking1($thanhvien);
			include 'views/pages/home/user/booking.php';
		}
		public function booking2(){
			$thanhvien = $_SESSION['MaTV'];
			$booking = new bookingModel();
			$result = $booking-> booking2($thanhvien);
			include 'views/pages/home/user/booking2.php';
		}
		public function huytour(){
			if (isset($_POST['Submit'])){
				$id = $_GET['id'];
				$huy = $_POST['huy'];
				$booking = new bookingModel();
				$booking-> formHuy1($huy,$id);
				?>
					<script language="javascript">
					window.alert("Yêu cầu hủy Tour của bạn đã chuyển đến quản trị viên!");
					window.location="index.php?controller=users&action=booking"
					</script>
				<?php
				
			}
			$id = $_GET['id'];
			$huy = new bookingModel();
			$result = $huy-> formHuy($id);
			include 'views/pages/home/user/form_huy.php';
		}
		public function huytour1(){
			if (isset($_POST['Submit'])){
				$id = $_GET['id'];
				$huy = $_POST['huy'];
				$booking = new bookingModel();
				$booking-> formHuy3($huy,$id);
				?>
					<script language="javascript">
					window.alert("Yêu cầu hủy Tour của bạn đã chuyển đến quản trị viên!");
					window.location="index.php?controller=users&action=booking"
					</script>
				<?php
			}
			$id = $_GET['id'];
			$huy = new bookingModel();
			$result = $huy-> formHuy2($id);
			include 'views/pages/home/user/form_huy.php';
		}
		public function register(){
			// Add User
			$username = "";
			$password ="";
			$name = "";
			$birthday = "";
			$email = "";
			$diachi = "";
			$errUsername ="";
			$errPass ="";
			$errName = "";
			$errDiachi = "";
			$errEmail = "";
			$errCmt = "";
			$errSdt = "";
			$cmt = "";
			$sdt = "";
			$check = true;
			if(isset($_POST['Submit'])){
				$username = $_POST['username'];
				if($username == ""){
					$check = false;
					$errUsername = "* Bạn chưa nhập Username!";
				} else {
					$errUsername ="";
				}
				$password = $_POST['password'];
				if($password == ""){
					$check = false;
					$errPass = "* Bạn chưa nhập Email!";
				} else {
					$errPass ="";
				}
				$name = $_POST['name'];
				if($name == ""){
					$check = false;
					$errName = "* Bạn chưa nhập họ tên đầy đủ!";
				} else {
					$errName ="";
				}
				$sex = $_POST['sex'];
				if($sex == ""){
					$check = false;
					$errSex = "* Bạn chưa nhập ngày sinh!";
				} else {
					$errSex ="";
				}
				$diachi = $_POST['diachi'];
				if($diachi == ""){
					$check = false;
					$errDiachi = "* Bạn chưa nhập Email!";
				} else {
					$errDiachi ="";
				}
				$cmt = $_POST['cmt'];
				if($cmt == ""){
					$check = false;
					$errCmt = "* Bạn chưa nhập Email!";
				} else {
					$errCmt ="";
				}
				$sdt = $_POST['sdt'];
				if($sdt == ""){
					$check = false;
					$errSdt = "* Bạn chưa nhập Email!";
				} else {
					$errSdt ="";
				}				
				$email = $_POST['email'];
				if($email == ""){
					$check = false;
					$errEmail = "* Bạn chưa nhập Email!";
				} else {
					$errEmail ="";
				}
				if ($check) {
					$pass = md5($password);
					$register = new registerModel();
					$result = $register -> register($username, $pass, $name, $sex, $email, $diachi, $cmt, $sdt);
					?>
						<script language="javascript">
						window.alert("Chúc mừng bạn đã đăng ký thành công!");
						window.location="index.php?controller=users&action=login"
						</script>
					<?php
				}
			}
			
			include 'views/pages/home/user/register.php';
		}
	}
?>