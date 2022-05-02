<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>

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

    // get the information from input, then store them in db
    $foodName = $_POST['foodname'];
    $foodPrice = $_POST['foodprice'];
    $foodCata = $_POST['foodcata'];
    $foodDesc = $_POST['fooddesc'];
    $foodIngred = $_POST['foodingred'];

    // $s = " select * from usertable where phone = '$phone'";
    // $result = mysqli_query($conn, $s);
    // $num = mysqli_num_rows($result);

    $add = "insert into addfoodtable(foodName,foodPrice,foodCata,foodDesc,foodIngred) values ('$foodName','$foodPrice','$foodCata','$foodDesc','$foodIngred')";
    mysqli_query($conn, $add);

    // prompt the admin that food has been added, then redirect the admin to admin.php
    echo "<script>
        alert('Food added.');
        window.location.href='/Ebus_asm2/html/users/admin.php/';
        </script>"; ?>
</body>

</html>