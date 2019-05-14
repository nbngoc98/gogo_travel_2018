<?php 
	class ngaykhacModel extends DB {
		public function date($id) 
		{
			$sql = "SELECT * FROM tour inner join khoihanh on tour.MaTour = khoihanh.MaTour INNER join loaitour on tour.MaLoai = loaitour.MaLoai where tour.MaTour = $id LIMIT 3";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		
	}
?>