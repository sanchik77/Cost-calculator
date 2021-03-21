<?php
session_start();

require_once 'connectDB.php';

$idUser = $_SESSION['user']['id_user'];
$orderUsers = mysqli_query($connection, "SELECT * FROM `order_warehouse` JOIN `order_users` ON `order_users`.`fk_order` = `id_order`WHERE `fk_users` = $idUser ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Заказы пользователя | Warehouse 13</title>
    <?php require_once 'head.php'  ?>


</head>

<body>
<div class="wrapper__navbar">
    <div class="container">
        <div class="wrapp__content">
            <a href="index.php"><img class="logo__style" src="img/logo.png" alt="logo"></a>
            <div class="title__nav-bar">
                <h1>Склад №1</h1>
                <p>Харьков,«Паркинг» Харьковское Шоссе 17А</p>
            </div>
            <div class="number__company">
                <div class="tel__company"><a href="tel:+380972233445">+38 (097) 223-34-45</a></div>
                <div class="tel__company"><a href="tel:+380972233445">+38 (097) 223-34-45</a></div>
                <div class="tel__company"><a href="tel:+380972233445">+38 (097) 223-34-45</a></div>
            </div>
            <a href="#"><img class="h-85" src="img/24-71.png" alt="Работаем без выходных 24 на 7"></a>
            <div class="social">
                <a href="#"><i class="fab fa-telegram"></i></a>
                <a href="#"><i class="fab fa-viber"></i></a>
            </div>
            <div class="log-in__sign-up">
                    <nav>
                        <ul>
                            <li class="product__menu"><a class="style__fa-user hover__fa-user_title_kabinet" href="authorization.php"><i class="far fa-user"></i><div class="style__title_kabinet hover__fa-user_title_kabinet"><?php echo $_SESSION['user']['login'] ?></div></a>
                        
                            <div class="wrapper__sub-menu w-200">
                                <ul class="navbar__submenu">
                                    <!-- <li><a class="p-w-d-h color__p-w-d-h" href="#"><i class="far fa-user"></i>Личные данные</a></li> -->
                                    <li><a class="p-w-d-h color__p-w-d-h" href="order.php"><i class="fas fa-folder"></i>Заказы</a></li>
                                    <li><a class="p-w-d-h color__p-w-d-h" href="logout.php"><i class="fas fa-sign-out-alt"></i>Выход</a></li>
                                </ul>
                            </div>
                        </li>
                        </ul>
                    </nav>
                    
                    
                </div>

        </div>

    </div>
</div>
    <header class="header__sign-up header__order">
       
             <table>
                
            <tr>
                <th>Номер заказа</th>
                <th>Тип ячейки</th>
                <th>Объём ячейки</th>
                <th>Размер ячейки</th>
                <th>Цена за месяц</th>
                <th>Время хранения</th>
                <th>Имя</th>
                <th>Номер телефона</th>
                <th>Email</th>
            </tr>
             <?php  while ($resultOrder = mysqli_fetch_assoc($orderUsers)) {  ?>
            <tr>
                <td><?php echo $resultOrder['id_order']; ?></td>
                <td><?php echo $resultOrder['cell_type']; ?></td>
                <td><?php echo $resultOrder['cell_volume']; ?></td>
                <td><?php echo $resultOrder['cell_size']; ?></td>
                <td><?php echo $resultOrder['price_per_month']; ?> грн</td>
                <td><?php echo $resultOrder['storage_period']; ?> дней</td>
                <td><?php echo $resultOrder['name']; ?></td>
                <td><?php echo $resultOrder['number']; ?></td>
                <td><?php echo $resultOrder['email']; ?></td>
            </tr>
                 <?php  }?>
        </table> 
        
      
        <?php
        while ($resultOrder = mysqli_fetch_assoc($orderUsers)) {
            echo $resultOrder['storage_period'];
        }
        ?>
    </header>
<section class="footer__order">
    <?php require_once 'footer.php'; ?>
</section>

</body>

</html>