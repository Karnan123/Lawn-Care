<html>

    <body class="bdcolor" style="background-image: url('logoBackground.jpg');">
        
        <div>
        <form action="includes/signup.inc.php" method="post">
        
        <div class="loginBox"></div>

        <img src="ILC2.jpg" alt = "Instant Lawn Care Logo"  class="ILC" style="position: absolute; transform: translate(685px, 10px);">

        <div class="transNm">
            <input type="text" name="name" class="txtDesign" placeholder="Full name...">
        </div>

        <div class="transEmail">
            <input type="text" name="email" class="txtDesign" placeholder="Email...">
        </div>

        <div class="transUserNm">
            <input type="text" name="userNm" class="txtDesign" placeholder="Username...">
        </div>

        <div class="transPass">
            <input type="password" name="pass" class="txtDesign" placeholder="Password...">
        </div>

        <div class="transPassRp">
            <input type="password" name="passRp" class="txtDesign" placeholder="Repeat Password...">
        </div>

        <button type="submit" name = "submit" class="b2">Sign Up</button>

        <h3 class="transQuest">Already have an account?</h3> 

        <button type="submit" name = "submit2" class="b3">Login</button>

        </div>
    </body>
 
</html>

<style>

    .ILC {
        height:180px;
        width:180px;
    }

    .bdcolor {
        background-color: #206040;
    }

    .txtDesign {
        border-radius: 15px;  
        border: 4px solid #206040;
        height: 40px;
        width: 250px;
    }

    .transNm {
        position: absolute;
        transform: translate(650px, 200px);
    }

    .transEmail {
        position: absolute;
        transform: translate(650px, 270px);
    }

    .transUserNm {
        position: absolute;
        transform: translate(650px, 340px);
    }

    .transPass {
        position: absolute;
        transform: translate(650px, 410px);
    }

    .transPassRp {
        position: absolute;
        transform: translate(650px, 480px);
    }

    .b2 {
        position: absolute;
        transform: translate(650px, 550px);
        height:40px;
        width: 250px;
        display: inline-block;
        text-align:center;
        background-color: #206040;
        font-size: 25px;
        color: #ffffff;
        border: none;
        font-family: "Trebuchet MS", Helvetica;
        cursor: pointer;
        border-radius: 15px;
    }

    .b2:hover {
        background-color: #0d261a;
    }

    .b3 {
        position: absolute;
        transform: translate(855px, 605px);
        height:20px;
        width: 40px;
        display: inline-block;
        text-align:center;
        background-color: #206040;
        font-size: 7px;
        color: #ffffff;
        border: none;
        font-family: "Trebuchet MS", Helvetica;
        cursor: pointer;
        border-radius: 7px;
    }

    .b3:hover {
        background-color: #0d261a;
    }

    .transLogin {
        
    }

    .loginBox {
        background-color: #40bf80;
        height:725px;
        width: 500px;
        position: absolute;
        transform: translate(525px, 0px);
        border-radius: 15px;
        box-shadow: 10px 10px 20px #133a26;
    }

    h3 {
        font-size: 1em;
        color: #ffffff;
        font-family: "Trebuchet MS", Helvetica;
    }

    .transQuest {
        position: absolute;
        transform: translate(655px, 590px);
    }

    .transError {
        position: absolute;
        transform: translate(655px, 630px);
    }

</style>

<?php
    if (isset($_GET["error"])) {

        if ($_GET["error"] == "emptyinput") {
            echo "<h3 class='transError'>Please fill all textboxes!</h3>";
        }

        else if ($_GET["error"] == "invaliduid") {
            echo "<h3 class='transError'>Username is invalid.</h3>";
        }

        else if ($_GET["error"] == "invalidemail") {
            echo "<h3 class='transError'>Email is invalid.</h3>";
        }

        else if ($_GET["error"] == "usernametaken") {
            echo "<h3 class='transError'>Username is taken.</h3>";
        }

        else if ($_GET["error"] == "stmtfailed") {
            echo "<h3 class='transError'>Submission failed, try again.</h3>";
        }

        else if ($_GET["error"] == "none") {
            echo "<h3 class='transError'>Sign up was successful!</h3>";
        }
    }
?>

<style>

</style>