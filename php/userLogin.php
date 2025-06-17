<?php
 if(isset($_SESSION['user'])){
        header(header: "Location: ./pages/home.php");
    }
?>