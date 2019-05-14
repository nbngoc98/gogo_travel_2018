<?php 
	class bookingModel extends DB {
		public function booking1($thanhvien) {
			$sql = "SELECT thanhvien.hoten,tour.TenTour, chitietdat.MaDat,chitietdat.ngaydat, chitietdat.songuoilon, chitietdat.sotreem, chitietdat.sotrenho, chitietdat.sotienThanhToan, chitietdat.ngaykhoihanh FROM chitietdat INNER join thanhvien on thanhvien.MaTV = chitietdat.MaTV INNER join tour on tour.MaTour = chitietdat.MaTour  WHERE thanhvien.MaTV = $thanhvien";
			// var_dump($thanhvien);
			// exit();
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function booking2($thanhvien) {
			$sql = "SELECT thanhvien.hoten,sales.title,sales.MaSale, chitietdat.MaDat,chitietdat.ngaydat, chitietdat.songuoilon, chitietdat.sotreem, chitietdat.sotrenho, chitietdat.sotienThanhToan, sales.ngaykhoihanh FROM chitietdat INNER join thanhvien on thanhvien.MaTV = chitietdat.MaTV INNER join sales on sales.MaSale = chitietdat.MaSale WHERE thanhvien.MaTV = $thanhvien";
			// var_dump($thanhvien1);
			// exit();
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function formHuy($id){
			$sql = "SELECT * FROM chitietdat WHERE MaDat = $id";
		    $result = mysqli_query($this->connectDB(), $sql);
		    return $result;
		}
		public function formHuy1($huy, $id){
			 $sql = "UPDATE chitietdat SET xacnhanhuy = '$huy' WHERE MaDat = $id";
		     mysqli_query($this->connectDB(), $sql);
			// header("Location: index.php?controller=users&action=booking");
		}
		public function formHuy2($id){
			$sql = "SELECT * FROM chitietdat WHERE MaDat = $id";
		    $result = mysqli_query($this->connectDB(), $sql);
		    return $result;
		}
		public function formHuy3($huy, $id){
			 $sql = "UPDATE chitietdat SET xacnhanhuy = '$huy' WHERE MaDat = $id";
		     mysqli_query($this->connectDB(), $sql);
			// header("Location: index.php?controller=users&action=booking");
		}
	}
?>