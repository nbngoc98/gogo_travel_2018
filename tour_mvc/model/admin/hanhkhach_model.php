<?php 
	class hkhachtModel extends connectDB{
		public function listHK() {
			
			$sql = "SELECT * from hanhkhach ";
		    $result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		public function delete($id){
			$sql = "DELETE FROM hanhkhach WHERE mahanhkhach = $id";
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=hanhkhach&action=listHK");
		}
	}
?>