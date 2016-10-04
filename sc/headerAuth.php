<?php

$valid_passwords = array ("scguest" => "ixc35R8z");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
    header('WWW-Authenticate: Basic realm="ICME Realm"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Restricted to authorized participants only. Please contact the IEEE ICME Steering Committee Chair for
logon information.");
}

?>