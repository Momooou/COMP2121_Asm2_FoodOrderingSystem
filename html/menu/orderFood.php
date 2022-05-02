<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food</title>

    <link rel="icon" href="/Ebus_asm2/image/icon.jpg/">

</head>

<body>
    <?php
    session_start();

    $servername = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'ebusasm2';

    $conn = mysqli_connect($servername, $dbusername, $dbpassword);
    mysqli_select_db($conn, 'ebusasm2');

    // write the ordered food to database
    // and write the price of ordered item
    $order = $_POST['order'];
    $price = $_POST['price'];
    $price = intval( $price );

    $uid = $_SESSION['uid'];

    $placeOrder = "insert into carttable(uid,foodName,price) values ('$uid','$order','$price')";
    mysqli_query($conn, $placeOrder);
    //change to uid of admin
    if ($uid == "1") {
        echo "<script>
        alert('Food ordered.');
        window.location.href='/Ebus_asm2/html/users/admin.php/';
        </script>";
    } else {
        echo "<script>
        alert('Food ordered.');
        window.location.href='/Ebus_asm2/html/users/customers.php/';
        </script>";
    }

    ?>
</body>

</html>