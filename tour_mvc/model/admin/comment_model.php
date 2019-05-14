<?php 
	class commentModel extends connectDB{
		public function listComment() {
			
			$sql = "SELECT a.MaCom,b.hoten,sales.title, a.NoiDungCom, a.Vote, a.reply from comment as a  inner JOIN thanhvien as b on a.MaTV = b.MaTV inner JOIN sales ON a.MaSale = sales.MaSale";
		    $result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		public function deleteComment($id){
			$sql = "DELETE FROM comment WHERE MaCom = $id";
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=comment&action=listComment");
		}
		public function replyComment($reply,$id){
			$sql = "UPDATE comment SET reply = '$reply' WHERE MaCom = $id";
			mysqli_query($this->connect(), $sql);
			header("Location: admin.php?controller=comment&action=listComment");
		}
	}
?>