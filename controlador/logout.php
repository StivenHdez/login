<?php
require_once('../modelo/user_session.php');

$userSession = new UserSession();
$userSession->closeSessions();
header("location:ctruser.php");

?>