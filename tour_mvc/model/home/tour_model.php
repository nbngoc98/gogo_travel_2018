<?php 
	class tourModel extends DB {
		public function listTour($id) 
		{
			$sql = "SELECT * FROM tour inner join khoihanh on tour.MaTour = khoihanh.MaTour INNER join loaitour on tour.MaLoai = loaitour.MaLoai where tour.MaLoai = $id LIMIT 3";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}

		public function chitiettour($id,$date)
        {
            $sql = "SELECT * from tour inner join khoihanh on tour.MaTour = khoihanh.MaTour inner join loaitour on tour.MaLoai = loaitour.MaLoai where tour.MaTour = ".$id." AND khoihanh.ngaykhoihanh = '".$date."'" ;
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function showComment($id)
		{
			$sql = "SELECT comment.NoiDungCom, comment.reply, thanhvien.hoten FROM comment inner JOIN thanhvien on comment.MaTV = thanhvien.MaTV  WHERE MaTour = $id";
		     $resultt = mysqli_query($this->connectDB(), $sql);
		     return $resultt;
		}
		public function addComment($thanhvien,$noidung, $id) 
		{
			$sql = "INSERT INTO comment (`MaTV`, `MaSale`, `NoiDungCom`) VALUES ($thanhvien,$id,'$noidung')";
		    mysqli_query($this->connectDB(), $sql);
			header("Location: index.php?controller=tour&action=chitiettour&id=$id&date=$ngaykhoihanh");
		}
		public function showdattour($id,$date)
		{
			$sql = "SELECT * FROM tour inner join khoihanh on tour.MaTour = khoihanh.MaTour INNER join loaitour on tour.MaLoai = loaitour.MaLoai where tour.MaTour = ".$id." AND khoihanh.ngaykhoihanh = '".$date."'";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function dattour($thanhvien, $id, $songuoilon, $sotreem, $sotrenho, $ngaykhoihanh, $ngaydat)
		{
			$sql = "INSERT INTO chitietdat(`MaTV`, `MaTour`, `songuoilon`, `sotreem`, `sotrenho`, `ngaykhoihanh`, `ngaydat`) VALUES ($thanhvien, $id, $songuoilon, $sotreem, $sotrenho, '$ngaykhoihanh','$ngaydat')";
		    mysqli_query($this->connectDB(), $sql);
		    header("Location:index.php?controller=thanhtoantour&action=showTTT");
		}
        
		
	}
?>