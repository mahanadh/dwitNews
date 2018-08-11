<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/10/2018
 * Time: 8:44 PM
PhpStorm 2018.1.6
 */

session_start(); ?>
<html>
<head><title>REGISTERATION SUCCESS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src=" js/bootstrap.js"></script>
    <style type="text/css">
        body {
            background-image: url(dwLogoWhite.png);
        }
        #form{
            background-color: #d9edf7;
            min-height: 500px;
          margin-top: 100px;
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

        table, th, td {
            border: 4px solid black;
            background: #c4d3f6;
        }


    </style>

</head>
<body>


<div class ="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="form">
            <center><b class="register"> Registeration Succesfull ! ! ! </b></center><br><br><br><br>
            <p><h2>All your informations are below:</h2></p><br><br>
            <p><h4><font style="font-family: 'Adobe Caslon Pro '">Basic Information:</font> </h4></p>

            <table border="">
                <tr>
                    <th>NAME</th>
                    <th>BATCH</th>
                    <th>EMAIL</th>
                    <th>FOOD PREFERENCE</th>
                    <th>ADDRESS</th>
                </tr>
                <tr>
                    <td><?php  echo $_SESSION["name"]?></td>
                    <td><?php  echo $_SESSION["batch"]?></td>
                    <td><?php  echo $_SESSION["email"]?></td>
                    <td><?php  echo $_SESSION["food"]?></td>
                    <td><?php  echo $_SESSION["address"]?></td>

                </tr>

            </table>

            <br>
            <br>
            <br>
            <p><h4><font style="font-family: 'Adobe Caslon Pro '">Your Food Menu:</font> </h4></p>
            <table >
                <tr>
                    <th>Breakfast </th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                </tr>
                <tr>
                    <td>  <?php  echo $_SESSION["tea"]. "\n"
                    . $_SESSION["coffee"]. "\n".$_SESSION["toast"]?>
                    <td>   <?php  echo $_SESSION["chicken"]. "\n".$_SESSION["veg"]. "\n".$_SESSION["cold"] ?>
                    </td>
                    <td> <?php  echo $_SESSION["vegbuffet"]. "\n".$_SESSION["buffet"] ?></td>
                </tr>

            </table>

            <br><div id="button"><a href="task1.php">Back to the form?</a></div>

        </div>
    </div>
</div>


</body>
</html>


