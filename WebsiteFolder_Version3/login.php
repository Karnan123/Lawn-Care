<html>

    <body class="bdcolor" style="background-image: url('logoBackground.jpg');">
       
        
        <form action="includes/login.inc.php" method="post">
        
        <div class="loginBox"></div>

        <img src="ILC2.jpg" alt = "Instant Lawn Care Logo"  class="ILC" style="position: absolute; transform: translate(650px, 70px);">
        
        <div  class="transUserNm">
            <input type="text" name="userNm" placeholder="Username/Email..." class="txtDesign">
        </div>

        <div  class="transPass">
            <input type="password" name="pass" placeholder="Password..." class="txtDesign">
        </div>

        <button type="submit" name = "submit" class="b2">Login</button>

        <h3 class="transQuest">Don't have an account?</h3> 

        <button type="submit" name = "submit2" class="b3">Sign Up</button>
    </body>
    
</html>

<style>

    .ILC {
        height:250px;
        width:250px;
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

    .transUserNm {
        position: absolute;
        transform: translate(650px, 350px);
    }

    .transPass {
        position: absolute;
        transform: translate(650px, 420px);
    }

    .b2 {
        position: absolute;
        transform: translate(650px, 490px);
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
        transform: translate(840px, 545px);
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
        height:625px;
        width: 500px;
        position: absolute;
        transform: translate(525px, 50px);
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
        transform: translate(655px, 530px);
    }

    .transError {
        position: absolute;
        transform: translate(655px, 570px);
    }

</style>

<?php
    if (isset($_GET["error"])) {

        if ($_GET["error"] == "emptyinput") {
            echo "<h3 class='transError'>Please fill all textboxes!</h3>";
        }

        else if ($_GET["error"] == "wronglogin") {
            echo "<h3 class='transError'>Your username or password was incorrect.</h3>";
        }
    }
?>