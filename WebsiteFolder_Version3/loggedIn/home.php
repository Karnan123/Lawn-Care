<?php 
    session_start();
?>

<!DOCTYPE html>

<html> 
    <head>
        <title>Instant Lawn Care & Maintenance</title>
    </head>

<body>
    
    <div class="banner">
        <div class="nav">
            <button type="button" onClick="location.href='home.php'" class="b1">Home</button>
            <button type="button" onClick="location.href='services.php'" class="b1">Services</button>
            <button type="button" onClick="location.href='about.php'" class="b1">About</button>
            <button type="button" onClick="location.href='contact.php'" class="b1">Contact</button>
            <img src="ILC.jpg" alt = "Instant Lawn Care Logo" class="ILC" style="position: absolute; transform: translate(-360px, -10px);;">
            <?php
             
                if (isset($_SESSION["useruid"])) {
                    echo "<button type='button' name = 'hold' onClick=location.href='../includes/logout.inc.php' class='b1'>Logout</button>";
                    echo "<div class='transUserNm'>
                        <h2 >Welcome ". $_SESSION["useruid"] ."</h2>
                        </div>";
                }

                else {
                    echo "<button type='button' name = 'hold2' onClick=location.href='../login.php' class='b4'>Login or<br>Sign Up</button>";
                }
            ?>
            <!-- <li href='logout.php'>Log out</li> -->
            <!-- <button type="button" onClick="location.href='login.php'" class="b1">Logout</button> -->
            <!-- onClick="location.href='contact.html'" - returns the url of this html and brings you to the url -->
        </div>
        <h1>Instant Lawn Care & Maintenance</h1>
        <div class="grass">
            <img src="greenGrass2.png" alt = "green grass"> 
        </div>
    </div>
    <div>
        <img src="hardwood.jpg" alt = "wood" style="opacity:70%">
        <h4 class="serBan" style="text-align: center">Services we provide!</h4>
        <h2 class="subTitle" style="text-align: center; position: absolute; transform: translate(163px, -440px); height: 60px; width: 270px;">Lawn Mowing</h2>
        <h2 class="subTitle" style="text-align: center; position: absolute; transform: translate(613px, -440px); height: 60px; width: 270px;">Garden Care</h2>
        <h2 class="subTitle" style="text-align: center; position: absolute; transform: translate(1053px, -440px); height: 60px; width: 290px;">Snow Removal</h2>
        <div class="imgBan" style="position: absolute; transform: translate(112.5px, -762.5px) rotate(5deg);"></div>
        <img src="Lawn-Mowing.jpg" alt = "lawn mower" class="mower" style="position: absolute; transform: translate(140px, -745px); border: 12px solid white; border-radius: 20px;">
        <div class="imgBan" style="position: absolute; transform: translate(562.5px, -762.5px) rotate(5deg);"></div>
        <img src="garden.jpg" alt = "garden" class="mower" style="position: absolute; transform: translate(590px, -745px); border: 12px solid white; border-radius: 20px;">
        <div class="imgBan" style="position: absolute; transform: translate(1012.5px, -762.5px) rotate(5deg);"></div>
        <img src="snowman.jpg" alt = "snowman" class="mower" style="position: absolute; transform: translate(1040px, -745px); border: 12px solid white; border-radius: 20px;">
        <img src="hardwood.jpg" alt = "wood" style="height:600px; opacity:70%; object-fit: cover;">
        <h5 style="position: absolute; transform: translate(1025px, -900px);">We offer snow shoveling services to ensure that our customers'
        properties are cleared of snow in a timely and efficient manner. We take great care to not damage any of the customer's property and 
        use only the best equipment available on the market. Our team is dedicated to providing top-notch service to ensure that our customers
        can safely and easily access their properties during the winter months.</h5>
        <h5 style="position: absolute; transform: translate(575px, -900px);">We provide excellent garden maintenance through a team of 
        skilled and experienced gardeners who use high-quality tools and materials. We offer customizable services to meet the specific 
        needs and preferences of our clients and are committed to sustainable gardening practices. Our team is dedicated to providing 
        reliable and honest service, always striving to exceed our clients' expectations and maintain a beautiful and healthy outdoor 
        space.</h5>
        <h5 style="position: absolute; transform: translate(125px, -900px);">Instant Lawn Care maintain lawns using professional-grade 
        lawn mowers as our service. We prioritize the health of the grass hence we spend extra time on ensuring your lawns are mowed to 
        perfection! We do this several ways like removing clippings from your lawn to prevent thatch buildup and promote healthy grass 
        growth. We consider the type of grass and the weather when deciding on the best mowing height and frequency. Additionally with our 
        lawn mowing services we address any issues with the grass, such as pests or diseases, to ensure grass growth is in excellent shape 
        for a longer period.</h5>
        
    </div>

    <div class="bar" style="position: absolute; transform: translate(0px, -3030px);"></div>
</body>
</html>
<style>

.imgBan {
    background-color: #206040;
    border-radius: 70px;
    height: 275px;
    width: 375px;
}

.bar {
    height:16px;
    width: 1519px;
    background-color: white;
}

.ILC {
    height:90px;
    width:90px;
}

.subTitle {
    background-color: #206040;
    border-radius: 15px;
    border: 8px solid white;
}

.serBan {
    background-color: #206040;
    border-radius: 15px;
    border: 8px solid white;
    height: 80px;
    width: 650px;
    position: absolute;
    transform: translate(450px, -1000px);
}

.mower {
    height:200px;
    width:300px;
}

.banner {
    background-color: #40bf80;
    padding: 70px;
    margin-left: -10px;
    margin-right: 0px;
    margin-top: 0px;
    margin-bottom: -10px;
    background-size: 100% 100%;
    /* opacity: 70%; */
}

.nav {
    height: 90px;
    margin-left: -200px;
    margin-right: -70px;
    margin-top: -70px;
    background-color: #206040;
    box-shadow: 10px 10px 5px #133926;
}

.b1 {
    height:90px;
    padding: 20px;
    margin-right: 10px;
    display: inline-block;
    text-align:center;
    position: relative;
    right: -65vw;
    background-color: #206040;
    font-size: 25px;
    color: #ffffff;
    border: none;
    border-radius: 15px;
    font-family: "Trebuchet MS", Helvetica;
    cursor: pointer;
}

.b1:hover {

    background-color: #0d261a;
}

.b4 {
    height:90px;
    padding: 20px;
    margin-right: 10px;
    position: absolute;
    transform: translate(0px, -10px);
    display: inline-block;
    text-align:center;
    position: relative;
    right: -65vw;
    background-color: #206040;
    font-size: 25px;
    color: #ffffff;
    border: none;
    border-radius: 15px;
    font-family: "Trebuchet MS", Helvetica;
    cursor: pointer;
}

.b4:hover {

background-color: #0d261a;
}

body {
    height: 300vh;
    margin: 0;
    padding: 0;
}

h1 {
    font-size: 7em;
    color: #ffffff;
    font-family: "Trebuchet MS", Helvetica;
    text-align: center;
}

h2 {
    font-size: 2.5em;
    color: #ffffff;
    font-family: "Trebuchet MS", Helvetica;
}

h4 {
    font-size: 4em;
    color: #ffffff;
    font-family: "Trebuchet MS", Helvetica;
}

h5 {
    font-size: 1.5em;
    color: #ffffff;
    text-align: center;
    font-family: "Trebuchet MS", Helvetica;
    width:300px;
    background-color: #206040;
    padding: 25px;
    border-radius: 15px;
    border: 8px solid white;
}

img {
    margin-top: 10px;
    margin-bottom: -15px;
    height: 100%;
    width: 100%;
}

img:hover {
    opacity: 50%;
}

.grass {
    margin-left: -60px;
    margin-right: -70px;
    margin-bottom: -60px;
    opacity: 30%;
    height: 400px;
}

.transUserNm {
    position: absolute;
    transform: translate(300px, -100px);
}

</style>

<script>
    function signUp() {
        
        var userName = "from customer";
        var password = "from customer";
    }
</script>