<?php
var_dump('Congratz man');

echo '<br><br>';

$host = 'db'; // service-name from docker-compose.yml
$user = 'phpmyadmin';
$password = 'Ghjuth67';
$db = 'yii2_learn';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo 'Connection failed: ' . $conn->connect_error;
}
echo 'Successfully connected to MYSQL.';


phpinfo();

