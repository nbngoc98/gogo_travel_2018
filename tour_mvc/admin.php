<?php
session_start();
?>  

<?php include 'controller/backend_controller.php'; ?>
<?php 
	$handleRequest = new HomeController();
	$handleRequest->handleReqquest();
?>
