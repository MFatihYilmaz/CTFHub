<?php
session_start();
$obj=unserialize(gzdecode(base64_decode($_COOKIE["session_id"])));
if($obj["user_role"]=="1"){
    echo "<h2>Welcome admin you deserve this flag</h2>siber_kariyer{value_can_be_compressed}";
}else{
    echo "<h2>Welcome test user</h2>\n <a href=logout.php>exit</a>";
    
}
session_destroy();



?>