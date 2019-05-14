<?php 
	class salesModel extends DB {
		public function listSales() {
			$sql = "SELECT a.MaSale,b.TenLoai, a.title, a.tgian, a.noidung, a.image, a.gianguoilon, a.giatreem, a.ngaykhoihanh, a.diemkhoihanh, a.ngaythemSale, a.startSale, a.stopSale, a.giokhoihanh from sales as a  inner JOIN loaitour as b on a.MaLoai = b.MaLoai LIMIT 1,2";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function chitietsale($id){
			$sql = "SELECT * FROM sales inner JOIN loaitour on sales.MaLoai = loaitour.MaLoai  WHERE sales.MaSale = $id";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function addComment($thanhvien,$noidung, $created, $id) {
			$sql = "INSERT INTO comment (`MaTV`, `MaSale`, `NoiDungCom`,`created`) VALUES ($thanhvien,$id,'$noidung','$created')";
			// var_dump($thanhvien);
			// exit();
		    mysqli_query($this->connectDB(), $sql);
			header("Location: index.php?controller=sales&action=chitiet&id=$id");
		}
		public function showComment($id){
			$sql = "SELECT comment.NoiDungCom, comment.reply, thanhvien.hoten, comment.created FROM comment inner JOIN thanhvien on comment.MaTV = thanhvien.MaTV  WHERE MaSale = $id";
		     $resultt = mysqli_query($this->connectDB(), $sql);
		     return $resultt;
		}
		public function showdattour($id){
			$sql = "SELECT * FROM sales inner JOIN loaitour on sales.MaLoai = loaitour.MaLoai  WHERE sales.MaSale = $id";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function dattour($thanhvien, $id, $songuoilon, $sotreem, $sotrenho, $ngaydat){
			$sql = "INSERT INTO chitietdat (`MaTV`, `MaSale`, `songuoilon`, `sotreem`, `sotrenho`, `ngaydat`) VALUES ($thanhvien, $id, $songuoilon, $sotreem, $sotrenho, '$ngaydat')";
		    mysqli_query($this->connectDB(), $sql);
		    header("Location: index.php?controller=thanhtoan&action=showTT");
		}
		
	}
?>