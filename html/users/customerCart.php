<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: /Ebus_asm2/html/login.php/');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- link to external css -->
    <!-- 'index.css' is mainly used for index.html, whereas another CSS file, 'sub-section.css' is mainly for sub-sections and sub-pages -->
    <link rel="stylesheet" href="/ebus_asm2/css/index.css">
    <link rel="stylesheet" href="/ebus_asm2/css/logged_in.css">
    <link rel="stylesheet" href="/ebus_asm2/css/footer.css">

    <link rel="icon" href="/Ebus_asm2/image/icon.jpg/">

    <title>Welcome <?php echo $_SESSION['username']; ?></title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(odd) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
    <div class="top-nav">
        <nav class="navbar navbar-expand-sm navbar-light bg-light" id="top-nav">
            <!-- below are the 'a' tags to direct users to different pages of the food ordering system. -->
            <div class="container">
                <a class="navbar-brand" href="/Ebus_asm2/">Burger Hub</a>
                <!-- an unordered list would be suitable to store the links -->
                <div class="" id="top-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item me-auto">
                            <a href="/Ebus_asm2/html/users/customers.php/" type="button" class="btn btn-outline-primary">Order Now!</a>
                            <a href="/Ebus_asm2/html/users/customerCart.php/" type="button" class="btn btn-outline-warning mx-4">My Cart</a>
                        </li>
                        <li class="nav-item me-auto mt-2">
                            <!-- logout button -->
                            <a href="/Ebus_asm2/html/account/logout.php/" class="logout-btn me-auto">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="main-content">
        <div class="container">
            <!-- sign in to enter admin -->
            <h1>Welcome <?php echo $_SESSION['username']; ?> (Customer)</h1>
        </div>

        <div class="container">
            <p class="main-menu" style="text-align: center; ">My Cart</p>
            <!-- 'row' and 'col' are Bootstrap classes that help to clearly devide grids for the webpage layout -->

            <div class="container">
                <!-- get items in cart -->
                <?php
                $servername = 'localhost';
                $dbusername = 'root';
                $dbpassword = '';
                $dbname = 'ebusasm2';

                $conn = mysqli_connect($servername, $dbusername, $dbpassword);
                mysqli_select_db($conn, 'ebusasm2');

                $uid = $_SESSION['uid'];

                // sql query
                $getOrders = "select * from carttable WHERE uid = '" . $uid . "' order by orderedtime";
                $orderResults = mysqli_query($conn, $getOrders);

                //an array that stores all the newly added food
                $orders = mysqli_fetch_all($orderResults, MYSQLI_ASSOC);

                mysqli_free_result($orderResults);
                mysqli_close($conn);

                // print_r($orders);
                ?>

                <!-- represent the data in html table -->
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Time</th>
                        <th>Order Name</th>
                        <th>Price</th>
                    </tr>
                    <?php foreach ($orders as $order) { ?>
                        <tr>
                            <td><?php echo $order['oid'] ?></td>
                            <td><?php echo $order['orderedTime'] ?></td>
                            <td><?php echo $order['foodName'] ?></td>
                            <td class="prices"><?php echo $order['price'] ?></td>
                        </tr>
                    <?php } ?>

                </table>
                <hr>
                <p id="total" class="mx-4" align="right"></p>
                <a href="/Ebus_asm2/html/users/customers.php/" type="button" class="btn btn-primary " style="float:right">Checkout</a>
            </div>

        </div>
    </div>

    <div>
        <footer class="text-center text-lg-start footer-background">
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-6 col-12 mb-0">
                        <h5><b>Order now!</b> <small>from Burger Hub</small></h5>
                        <p>Burger Hub is a local burger restaurant located in Hung Hom. You may nowe order our freshly made burgers without needing to go to our physical store. We provide free shipping to your location. Do not hesitate and order!</p>
                    </div>

                    <!-- these 3 pages are not the focus of my website, they are just to make the website realistic
                    So I simply make them ordering systems for other food. -->
                    <div class="col-md-6 col-12 mb-0">
                        <h5>Other ordering systems...</h5>
                        <a href="/Ebus_asm2/html/toBeContinued.html" class="featured-guides"><i>Ice Cream Hub</i></a><br>
                        <a href="/Ebus_asm2/html/toBeContinued.html" class="featured-guides"><i>Curry Hub</i></a><br>
                        <a href="/Ebus_asm2/html/toBeContinued.html" class="featured-guides"><i>Ramen Hub</i></a><br>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        let sum = 0;
        var prices = document.getElementsByClassName("prices");

        for (let i = 0; i < prices.length; i++) {
            sum = sum + parseInt(prices[i].innerHTML);
        }

        document.getElementById("total").innerHTML = "Total: $" + sum;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>