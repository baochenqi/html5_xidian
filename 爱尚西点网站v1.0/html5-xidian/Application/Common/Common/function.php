<?php
	function isLogin(){ 
		if(isset($_SESSION['username'])){ 
			return true;
		}
		else { 
			return false;
		}
	}
	function getTime(){ 
		return date("Y-m-d H:i:s");
	}

	function getPublishDate(){ 
		return date("Y-m-d");
	}


?>