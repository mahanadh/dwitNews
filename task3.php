
<?php
    session_start();
    ?>
<html>
<head><title>Food Menu</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src=" js/bootstrap.js"></script>
    <style type="text/css">
        body {
            background-image: url(food--1200x600.jpg);
        }
        #food{
            background-color: #bce8f1;
            min-height: 700px;
            margin-top: 100px;
            margin-left: 150px;
            margin-right: 250px;
            width: 900px;
            padding: 5px 40px 40px 40px;
        }

        .register{
            font-size: 55px;
            font-weight: 700;
            font-family: "Agency FB";
            font-weight: 700;
            border-bottom-style: ridge;
        }
        </style>
</head>
<body>
<div class ="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="food">
            <center><b class="register"> Food Menu</b></center>
            <br>
            <form method="post" action="">

                <p><h1>BREAKFAST: </h1>:</h1></p>
            <input type="checkbox" value="Tea" name="tea" id="tea">Tea<br>
                <input type="checkbox" value="Coffee" name="coffee" id="coffee">Coffee<br>
                <input type="checkbox" value="Toast" name="toast" id="toast">Toast and Jam<br>

                <p><h1>Lunch: </h1>:</h1></p>

                <input type="checkbox" value="Chicken Burger" name="chicken" id="chicken">Chicken Burger<br>
                <input type="checkbox" value="Veg Burger" name="veg" id="veg">Veg Burger<br>
                <input type="checkbox" value="Cold Drink" name="cold" id="cold">Cold Drinks<br>


                <p><h1>Lunch: </h1>:</h1></p>
                <input type="checkbox" value="Veg Buffet" name="vegbuffet" id="vegbuffet">Buffet veg<br>
                <input type="checkbox" value="Non-Veg Buffet" name="buffet" id="buffet">Buffet Non-Veg<br>

                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">



</form>

        </div>
    </div>
</div>

</body>



</head>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/10/2018
 * Time: 8:32 PM
 */


if (isset($_POST['submit'])) {
    $tea = $_POST['tea'];
    $coffee = $_POST['coffee'];
    $toast = $_POST['toast'];
    $chicken = $_POST['chicken'];
    $veg = $_POST['veg'];
    $cold = $_POST['cold'];
    $vegbuffet = $_POST['vegbuffet'];
    $buffet = $_POST['buffet'];



    $_SESSION["tea"] = "$tea";
    $_SESSION["coffee"] = "$coffee";
    $_SESSION["toast"] = "$toast";
    $_SESSION["chicken"] = "$chicken";
    $_SESSION["veg"] = "$veg";
    $_SESSION["cold"] = "$cold";
    $_SESSION["vegbuffet"] = "$vegbuffet";
    $_SESSION["buffet"] = "$buffet";
    header('Location: task24.php');

}
?>
