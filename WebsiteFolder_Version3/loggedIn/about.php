<?php 
    session_start();
?>

<!DOCTYPE html>

<html> 
    <head>
        <title>About us</title>
    </head>

<body>
    
    <div class="banner">
        <div class="nav">
            <button type="button" onClick="location.href='home.php'" class="b1">Home</button>
            <button type="button" onClick="location.href='services.php'" class="b1">Services</button>
            <button type="button" onClick="location.href='about.php'" class="b1">About</button>
            <button type="button" onClick="location.href='contact.php'" class="b1">Contact</button>
            <img src="ILC.jpg" alt = "Instant Lawn Care Logo" class="ILC" style="position: absolute; transform: translate(-360px, 0px);">

            <div class='transUserNm'>
                <h2>Instant Lawn Care</h2>
            </div>

            <?php
             
                if (isset($_SESSION["useruid"])) {
                    echo "<button type='button' name = 'hold' onClick=location.href='../includes/logout.inc.php' class='b1'>Logout</button>";
                }

                else {
                    echo "<button type='button' name = 'hold2' onClick=location.href='../login.php' class='b4'>Login or<br>Sign Up</button>";
                }
            ?>
            <!-- onClick="location.href='contact.html'" - returns the url of this html and brings you to the url -->
        </div>
        <img src="lawnMower.jpg" class="lawnMower" alt = "Lawn Mower">
        
        
    </div>

    <h1 style="position: absolute; transform: translate(525px, -75px);">About us</h1>

    <img src="hardwood.jpg" position="absolute" class="hardwoodA" alt = "wood" style="opacity:70%">
    <img src="hardwood.jpg" position="absolute" class="hardwoodB" alt = "wood" style="opacity:70%">

    

    <img src="ILC.jpg" alt = "Instant Lawn Care Logo" class="ILCBig" style="position: absolute; transform: translate(570px, 1300px); border-radius:50%; border: 4px solid white;">

    <div class="locBan"></div>
    <h5 style="position: absolute; transform: translate(150px, 350px);"><br>&emsp;&emsp;At Instant Lawn Care & Maintenance, we believe that providing excellent customer 
    service is at the heart of everything we do. We are dedicated to meeting the needs of our clients and exceeding their expectations with 
    every interaction. One of our primary goals is to promote healthy grass growth through our lawn care techniques, which includes using 
    high-quality lawn trimming equipment and grass-friendly pesticides. We understand that a healthy lawn is essential for creating a 
    beautiful and functional outdoor space, and we are committed to helping our clients achieve this goal.
    <br><br><br>&emsp;&emsp;To provide excellent customer service, we make sure to listen to our clients' needs and preferences and tailor our services to meet their 
    specific requirements. We are always transparent and honest in our communication, and we make sure to keep our clients informed about the work
    we are doing and any issues that may arise. We are also punctual and efficient, so our clients can trust that their lawns will be well-maintained and looking their best without disrupting their schedules.
    <br><br><br>&emsp;&emsp;In addition to providing high-quality lawn care services, we also prioritize sustainability and eco-friendliness. We use environmentally 
    friendly products and practices whenever possible, and we aim to minimize our impact on the environment while still providing the best 
    possible care for our clients' lawns. We believe that it is important to take a holistic approach to lawn care, considering the health of the 
    grass and the surrounding ecosystem.
    <br><br><br>&emsp;&emsp;Overall, our values and goals at Instant Lawn care center around providing exceptional customer service and promoting healthy grass growth 
    through our professional and reliable lawn care services. We are passionate about what we do and are committed to helping our clients create 
    beautiful and functional outdoor spaces that they can enjoy for years to come.
    
    <div class="bar" style="position: absolute; transform: translate(-150px, -890px);"></div>
</h5>
</body>
</html>
<style>

img:hover {
    opacity: 50%;
}

.bar {
    height:16px;
    width: 1519px;
    background-color: white;
}

.transUserNm {
    position: absolute;
    transform: translate(300px, -100px);
}

.ILCBig {
    height:350px;
    width:350px;
}

.ILC {
    height:90px;
    width:90px;
}

.locBan {
    background-color: #206040;
    border-radius: 15px;
    border: 8px solid white;
    height: 875px;
    width: 1300px;
    position: absolute;
    transform: translate(100px, 350px);
}

.banner {
    background-color: #40bf80;
    padding: 70px;
    height: 320px;
    overflow: hidden;
    margin-left: -10px;
    margin-right: 0px;
    margin-top: 0px;
    margin-bottom: -270px;
    /* background-size: 100% 50%; */
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
    /* resize: vertical; could be useful*/ 
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
    height: 1700px;
    margin: 0;
    padding: 0;
}

h1 {
    position: absolute;
    transform: translate(15%, -50%);
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

h3 {
    font-size: 2em;
    color: #ffffff;
    font-family: "Trebuchet MS", Helvetica;
}

h5 {
    font-size: 1.5em;
    color: #ffffff;
    font-family: "Trebuchet MS", Helvetica;
    width:1200px;
}

.transConInfo {
    position: absolute;
    transform: translate(30px, 300px);
}

.hardwoodA {
    height: 100%;
    width: 100%;
    opacity: 70%;
    margin-top: 10px;
    position:absolute;
    transform: translate(0, 260px);
}

.hardwoodB {
    height: 100%;
    width: 100%;
    opacity: 70%;
    position:absolute;
    transform: translate(0, 1015px);
}

.lawnMower {
    margin-top: 8px;
    margin-left: -60px;
    height: 360px;
    width: 1520px;
    opacity: 70%;
}

</style>