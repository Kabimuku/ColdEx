<?php
$user = $_POST["userid"];
$pwd = $_POST["pass"];

if ($user == "arun" && $pwd == "123") {
    echo "Welcome, Arun! You are logged in.";
} elseif ($user == "saran" && $pwd == "1234") {
    echo "You are allowed.";
} else {
    echo "Sorry, access denied.";
}
?>
