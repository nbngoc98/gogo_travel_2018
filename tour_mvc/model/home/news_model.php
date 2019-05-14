<?php 
	
	class news extends DB{
		
		public function anh_tin_tuc($id){
			$sql = "SELECT * FROM `tintuc` WHERE MaTinTuc = $id";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function list_tin_tuc($id) {
			$sql = "SELECT * FROM `tintuc` WHERE MaTinTuc in (1,2,3)";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function list_news() {
			$sql = "SELECT * FROM `tintuc`";
		    $result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
	}
?>