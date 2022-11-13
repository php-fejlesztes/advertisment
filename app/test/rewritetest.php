<?php
    if (isset($_GET['id'])) {
        echo "User ID:".$_GET['id'];
    }
    else {
        echo "No user id";
    }
?>