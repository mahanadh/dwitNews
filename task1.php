<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/10/2018
 * Time: 6:16 PM
 */

session_start();
?>

<html>
<head>

    <title>Registeration</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src=" js/bootstrap.js"></script>
    <style type="text/css">
        body {
            background-image: url(dwLogoWhite.png);
        }
        #form{
            background-color: #31b0d5;
            min-height: 700px;
            margin: 0 auto;
            width: 1250px;
            padding: 5px 40px 40px 40px;
        }
        .register{
            font-size: 55px;
            font-weight: 700;
            font-family: "Agency FB";
            font-weight: 700;
            border-bottom-style: ridge;
        }
        .text{
            height: 43px;
        }
        label{
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class ="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="form">
            <center><b class="register"> Registeration Form</b></center>

            <form method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control text" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Batch:</label>
                    <input type="number" class="form-control text" id="batch" name="batch" placeholder="Enter your respective batch">
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" class="form-control text" name="email" id="email" placeholder="Enter E-mail">
                </div>
                <div class="form-group">
                    <label>Food Preference:</label><br>
                    <input type="radio" name="food" value="nonveg" id="nonveg" /> Non-vegeterian<br>
                    <input type="radio"  name="food" id="veg" value="veg"> Vegeterian<br>
                </div>
                <div class="form-group">
                    <label>Address in detail</label>
                    <textarea class="form-control" rows="6" id="address" name="address" placeholder="Enter full Address"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="submit" id="submit">
                </div>




            </form>

        </div>
    </div>


</div>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    $food = $_POST['food'];
    $address = $_POST['address'];


    $_SESSION["name"] = "$name";
    $_SESSION["batch"] = "$batch";
    $_SESSION["email"] = "$email";
    $_SESSION["food"] = "$food";
    $_SESSION["address"] = "$address";
    header('Location: task3.php');

}
?>

</body>
</html>




