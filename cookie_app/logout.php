<?php

$cookieName = "session_id";

setcookie($cookieName, "", time() - 3600, "/");
header("Location: /");  
exit; 
?>