<?php
    session_start();
    unset($_SESSION);
    session_destroy();
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";

   echo "<script>window.location.href = '../login.php?login=false' </script>";
    ?>