<!-- This is homepage for customers when they hv logged in. -->
<?php
session_start();

// It requires users to login before visiting this page.
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

    <!-- This line shows the name of customer -->
    <title>Welcome <?php echo $_SESSION['username']; ?></title>
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
            <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        </div>

        <div class="container">
            <p class="main-menu" style="text-align: center; ">Menu List</p>
            <!-- 'row' and 'col' are Bootstrap classes that help to clearly devide grids for the webpage layout -->
            <div class="row mb-5">
                <div class="col-md-4">
                    <!-- 'Card' components in Bootstrap 5 are used to build the menu list-->
                    <!-- it is a very clean design to display the menu list -->
                    <div class="card" style="min-height: 750px;">
                        <a href="">
                            <img src="/Ebus_asm2/image/1.jpg" class="card-img-top" alt="1" style="width:100%">
                        </a>
                        <div class="card-body">
                            <div style="clear: both">
                                <h5 class="card-title float: left" style="float: left; display: inline;">Burger 1</h5>
                                <h5 class="card-title" style="float: right; display: inline;">$10</h5>
                            </div><br>
                            <hr />
                            <button type="button" class="btn btn-warning">Category: Best Seller</button>
                            <p class="card-text">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quibusdam dolorum corporis alias odio itaque, ex eveniet minus rem recusandae maxime. Quam quisquam dolores delectus tenetur excepturi optio id in.</p>
                            <label>Ingredients include:</label>
                            <ol>
                                <li>Bread</li>
                                <li>Cheese</li>
                                <li>Beef</li>
                                <li>Pickles</li>
                            </ol>
                            <form action="/Ebus_asm2/html/menu/orderFood.php/" method="post">
                                <input type="hidden" name="order" value="Burger 1">
                                <input type="hidden" name="price" value="10">
                                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="min-height: 750px;">
                        <a href="">
                            <img src="/Ebus_asm2/image/2.jpg" class="card-img-top" alt="2" style="width:100%">
                            <div class="caption">
                            </div>
                        </a>
                        <div class="card-body">
                            <div style="clear: both">
                                <h5 class="card-title float: left" style="float: left; display: inline;">Burger 2</h5>
                                <h5 class="card-title" style="float: right; display: inline;">$20</h5>
                            </div><br>
                            <hr />
                            <button type="button" class="btn btn-success">Category: Vegan</button>
                            <p class="card-text">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quibusdam dolorum corporis alias odio itaque, ex eveniet minus rem recusandae maxime. Quam quisquam dolores delectus tenetur excepturi optio id in.</p>
                            <label>Ingredients include:</label>
                            <ol>
                                <li>Bread</li>
                                <li>Cheese</li>
                                <li>Tomato</li>
                                <li>Onion</li>
                                <li>Beef</li>
                                <li>Pickles</li>
                            </ol>
                            <form action="/Ebus_asm2/html/menu/orderFood.php/" method="post">
                                <input type="hidden" name="order" value="Burger 2">
                                <input type="hidden" name="price" value="20">
                                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="min-height: 750px;">
                        <a href="">
                            <img src="/Ebus_asm2/image/3.jpg" class="card-img-top" alt="3" style="width:100%;">
                            <div class="caption">
                            </div>
                        </a>
                        <div class="card-body">
                            <div style="clear: both">
                                <h5 class="card-title float: left" style="float: left; display: inline;">Burger 3</h5>
                                <h5 class="card-title" style="float: right; display: inline;">$30</h5>
                            </div><br>
                            <hr />
                            <button type="button" class="btn btn-danger">Category: Spicy</button>
                            <p class="card-text">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quibusdam dolorum corporis alias odio itaque, ex eveniet minus rem recusandae maxime. Quam quisquam dolores delectus tenetur excepturi optio id in.</p>
                            <label>Ingredients include:</label>
                            <ol>
                                <li>Bread</li>
                                <li>Tomato</li>
                                <li>Onion</li>
                                <li>Beef</li>
                                <li>Pickles</li>
                            </ol>
                            <form action="/Ebus_asm2/html/menu/orderFood.php/" method="post">
                                <input type="hidden" name="order" value="Burger 3">
                                <input type="hidden" name="price" value="30">
                                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <p class="main-menu" style="text-align: center; ">Newly Added Food</p>

                <!-- make connection to database to get all newly added food -->
                <?php
                $servername = 'localhost';
                $dbusername = 'root';
                $dbpassword = '';
                $dbname = 'ebusasm2';

                $conn = mysqli_connect($servername, $dbusername, $dbpassword);
                mysqli_select_db($conn, 'ebusasm2');

                // sql query
                $getNewFood = "select * from addfoodtable order by fid";
                $newFoodResult = mysqli_query($conn, $getNewFood);

                //an array that stores all the newly added food
                $newFoods = mysqli_fetch_all($newFoodResult, MYSQLI_ASSOC);

                mysqli_free_result($newFoodResult);
                mysqli_close($conn);

                // print_r($newFoods);
                ?>

                <!-- for each food, dynamically render their information in a card -->
                <div class="row mb-5">
                    <?php foreach ($newFoods as $newFood) { ?>
                        <div class="col-md-4 mb-5">
                            <div class="card" style="min-height: 400px;">
                                <div class="card-body">

                                    <div style="clear: both">
                                        <h5 class="card-title float: left" style="float: left; display: inline;"><?php echo htmlspecialchars($newFood['foodName']); ?></h5>
                                        <h5 class="card-title" style="float: right; display: inline;">$<?php echo htmlspecialchars($newFood['foodPrice']); ?></h5>
                                    </div><br>
                                    <hr />
                                    <button type="button" class="btn
                                    <?php
                                    if (htmlspecialchars($newFood['foodCata']) == "Best Seller") {
                                        echo "btn-warning";
                                    } elseif (htmlspecialchars($newFood['foodCata']) == "Normal") {
                                        echo "btn-dark";
                                    } elseif (htmlspecialchars($newFood['foodCata']) == "Vegan") {
                                        echo "btn-success";
                                    } elseif (htmlspecialchars($newFood['foodCata']) == "Spicy") {
                                        echo "btn-danger";
                                    }
                                    ?>
                                    
                                    ">Category: <?php echo htmlspecialchars($newFood['foodCata']); ?></button>
                                    <p class="card-text">Description: <?php echo htmlspecialchars($newFood['foodDesc']); ?></p>

                                    <!-- dynamic length of unordered list -->
                                    <label>Ingredients include:</label>
                                    <ol>
                                        <?php
                                        $newFoodIngreds = explode(",", htmlspecialchars($newFood['foodIngred']));
                                        foreach ($newFoodIngreds as $newFoodIngred) { ?>
                                            <li><?php echo $newFoodIngred ?> </li>
                                        <?php } ?>
                                    </ol>

                                    <!-- add to cart button for each food -->
                                    <form action="/Ebus_asm2/html/menu/orderFood.php/" method="post">
                                        <input type="hidden" name="order" value="<?php echo htmlspecialchars($newFood['foodName']); ?>">
                                        <input type="hidden" name="price" value="<?php echo htmlspecialchars($newFood['foodPrice']); ?>">
                                        <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- click ths button can bring the user back to top of the page -->
            <div class="my-2">
                <a class="text-dark p-1" href="#top-nav" style="text-decoration:none;">Back to top</a>
            </div>
            <hr>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>