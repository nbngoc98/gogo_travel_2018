<?php 
	class DB {
		var $connect;
		public function connectDB() {
			$this->connect = mysqli_connect('localhost', 'root', '',
				'travel_tour');
			mysqli_set_charset($this->connect, 'utf8' );	
			return $this->connect;
		}
	}
?>