<?php 
	class phanhoiModel extends DB{
		public function add_Phanhoi($name, $email, $title, $content, $created){
			$sql = "INSERT INTO phanhoi(`TenNguoiGui`, `EmailNguoiGui`, `TieuDe`, `NoiDung`, `NgayGui`) VALUES ('$name','$email','$title','$content','$created')";
			mysqli_query($this->connectDB(), $sql);
			?>
				<script language="javascript">
				window.alert("Gửi phản hồi thành công!");
				window.location="index.php?controller=contact&action=contact_home"
				</script>
			<?php
			// header("Location: ");
		}
	}
?>