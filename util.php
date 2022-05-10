<?php
    // for secure connection
    if (!isset($_SERVER['HTTPS'])) {
        $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: " . $url);
        exit();
    }
?>