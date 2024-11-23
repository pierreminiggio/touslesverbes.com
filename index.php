<?php

$apiUrl = $_SERVER['REQUEST_SCHEME'] . '://api.' . $_SERVER['HTTP_HOST'];

?>
API url : <a href="<?php echo $apiUrl; ?>"><?php echo $apiUrl; ?>
