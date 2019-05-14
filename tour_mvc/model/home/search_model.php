<?php 
	class searchModel extends DB{
		public function timkiem($search){
			$sql = "SELECT * FROM product WHERE name LIKE '%{$search}%' ";
			mysqli_query($this->connectDB(), $sql);
			
			// header("Location: ");
		}
	}
?>