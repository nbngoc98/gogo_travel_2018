<?php 
	class registerModel extends DB {
		public function register($username, $pass, $name, $sex, $email, $diachi, $cmt, $sdt) {
			$sql = "INSERT INTO thanhvien (usename, passTV, hoten, gioitinh, emailTV, diachi, soCMT, soDT)
				VALUES ('$username', '$pass', '$name', '$sex', '$email', '$diachi', '$cmt', $sdt)";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
	}
?>