<?php 
	class chitietdatModel extends connectDB {
		public function listChitietdat() {
			$sql = " SELECT thanhvien.hoten,tour.TenTour, chitietdat.MaDat,chitietdat.ngaydat, chitietdat.songuoilon, chitietdat.sotreem, chitietdat.sotrenho, chitietdat.sotienThanhToan, chitietdat.ngaykhoihanh, chitietdat.xacnhandat, chitietdat.xacnhanhuy FROM chitietdat INNER join thanhvien on thanhvien.MaTV = chitietdat.MaTV INNER join tour on tour.MaTour = chitietdat.MaTour ";
		    $result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		public function listChitietdat1() {
			$sql = " SELECT thanhvien.hoten,sales.title,sales.MaSale, chitietdat.MaDat,chitietdat.ngaydat, chitietdat.songuoilon, chitietdat.sotreem, chitietdat.sotrenho, chitietdat.sotienThanhToan, sales.ngaykhoihanh , chitietdat.xacnhandat, chitietdat.xacnhanhuy FROM chitietdat INNER join thanhvien on thanhvien.MaTV = chitietdat.MaTV INNER join sales on sales.MaSale = chitietdat.MaSale";
		    $result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		public function delete($id){
			$sql = "DELETE a,b FROM chitietdat a JOIN hanhkhach b ON a.MaDat = b.MaDat WHERE b.MaDat = $id";
			// DELETE a,b FROM chitietdat a JOIN dattour b ON a.MaDat = b.MaDat WHERE b.MaDat = 1
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=chitietdat&action=tourdat");
		}
		public function xacnhandat($xacnhan,$id){
			$sql = "UPDATE chitietdat SET xacnhandat = '$xacnhan' WHERE MaDat = $id";
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=chitietdat&action=tourdat");
		}
		public function delete1($id){
			$sql = "DELETE a,b FROM chitietdat a JOIN hanhkhach b ON a.MaDat = b.MaDat WHERE b.MaDat = $id";
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=chitietdat&action=tourdat1");
		}
		public function xacnhandat1($xacnhan,$id){
			$sql = "UPDATE chitietdat SET xacnhandat = '$xacnhan' WHERE MaDat = $id";
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=chitietdat&action=tourdat1");
		}
	}
?>
