<?php 
	class thanhtoanModel extends DB {
		public function showTT($date){
			$sql = "SELECT * FROM chitietdat inner JOIN sales on sales.MaSale = chitietdat.MaSale WHERE chitietdat.ngaydat = '$date'";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function thanhtoan($price_new, $date){
			$sql = "UPDATE chitietdat SET sotienThanhToan = $price_new WHERE chitietdat.ngaydat = '$date' ";
		    mysqli_query($this->connectDB(), $sql);
			header("Location: index.php?controller=thanhtoantour&action=hanhkhach");
		}
		public function hanhkhach($maDat,$tenhanhkhach,$ngaysinh,$sdt,$cmnd){
			$sql = "INSERT INTO hanhkhach(`MaDat`, `tenhanhkhach`, `ngaysinh`, `sdt`, `cmnd`) VALUES ('$maDat','$tenhanhkhach','$ngaysinh','$sdt','$cmnd')";
			$resultt = mysqli_query($this->connectDB(), $sql);
			return $resultt;
			header("Location: index.php?controller=users&action=booking");
		}
		public function showTTT($date){
			$sql = "SELECT * FROM chitietdat inner JOIN tour on tour.MaTour = chitietdat.MaTour WHERE chitietdat.ngaydat = '$date'";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
	}
?>