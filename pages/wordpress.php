<?php
  
	$content = basename($_SERVER['PHP_SELF'],'.php'); 

require_once('../inc/head.php');
require_once('../inc/header.php');
require_once('../inc/nav.php');
require_once('../content/'.$content.'_content.php');
require_once('../inc/sidebar.php');

require_once('../inc/footer.php');

?>