<?php
session_start();




$sendRegularBox = $_POST['send-regular-box'];
$sendUnit = $_POST['unit'];
$sendSize = $_POST['send-size'];
$sendPrice = $_POST['send-price'];
$sendStoragePeriod = $_POST['send-storage-period'];
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];


require_once "connectDB.php";



if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {

    $ordersCurrent = mysqli_query($connection ,"SELECT id_order FROM `order_warehouse` ORDER BY id_order DESC");
    $orderId = (int)mysqli_fetch_assoc($ordersCurrent)['id_order'];
    $orderId++;

    $_SESSION['order'] = [
        "lastOrderId" => $orderId
    ];

    $sql = "INSERT INTO `order_warehouse` (`id_order`, `cell_type`, `cell_volume`, `cell_size`, `price_per_month`, `storage_period`, `name`, `number`, `email`) VALUES ('$orderId', '$sendRegularBox', '$sendUnit', '$sendSize', '$sendPrice', '$sendStoragePeriod', '$name', '$number', '$email')";

    if ($connection->query($sql) === true) {
  
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }
    
    $userId = $_SESSION['user']['id_user'];
    $sql =  "INSERT INTO `order_users` (`fk_users`, `fk_order`) VALUES ('$userId', '$orderId')";
    
    if ($connection->query($sql) === true) {
  
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }
    

    $_SESSION['message'] = 'Заявка отправлена';
    header('Location: index.php');

}else{
    $_SESSION['message'] = 'Пользователь с таким логином не найден. Пожалуйста, проверьте написание или пройдите  <a class="msg-a" href="registration.php">  Регистрацию </a>' ;
    header('Location: index.php#popup');
}








?>
