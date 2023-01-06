<?php 
    session_start();
?>

<!DOCTYPE html>

<html> 
    <head>
        <title>Services and Locations</title>
    </head>

<body>
    
    <div class="banner">
        <div class="nav">
            <button type="button" onClick="location.href='home.php'" class="b1">Home</button>
            <button type="button" onClick="location.href='services.php'" class="b1">Services</button>
            <button type="button" onClick="location.href='about.php'" class="b1">About</button>
            <button type="button" onClick="location.href='contact.php'" class="b1">Contact</button>
            <img src="ILC.jpg" alt = "Instant Lawn Care Logo" class="ILC" style="position: absolute; transform: translate(-360px, 0px);;">

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

    <h1>Services and Locations</h1>

    <img src="hardwood.jpg" position="absolute" class="hardwoodA" alt = "wood" style="opacity:70%">
    <img src="hardwood.jpg" position="absolute" class="hardwoodB" alt = "wood" style="height: 400px; object-fit: cover; opacity:70%;">
    <div class="locBan"></div>
    <div class="mapBan"></div>
    <h5 style="position: absolute; transform: translate(150px, 350px);">&emsp;&emsp;Instant Lawn Care & Maintenance currently has one location in Whitby 
    but we also provide service to surrounding towns as well. We provide a range of outdoor maintenance services, including lawn mowing, 
    garden care, and snow removal. We offer customizable schedules to meet the specific needs of our clients and are dedicated to providing 
    reliable and efficient service. Our customers can use the map below to see if they are in our service region and can easily get in 
    contact with us for a free estimate by clicking on the contact tab above. We would be happy to provide more information about our services
    and answer any questions our customers may have.</h5>

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11494.385656570692!2d-78.96719260472437!3d43.926329067440385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d51ec412d9d4b3%3A0x2066516290c88757!2s41%20Sleepy%20Hollow%20Pl%2C%20Whitby%2C%20ON%20L1R%200E5!5e0!3m2!1sen!2sca!4v1672268294570!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        class="mapSize" >
    </iframe>

    <div class="bar" style="position: absolute; transform: translate(0px, 256px);"></div>

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

.ILC {
    height:90px;
    width:90px;
}

.mapBan {
    background-color: #206040;
    border-radius: 15px;
    border: 8px solid white;
    height: 600px;
    width: 1300px;
    position: absolute;
    transform: translate(100px, 725px);
}

.locBan {
    background-color: #206040;
    border-radius: 15px;
    border: 8px solid white;
    height: 300px;
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
    height: 1500px;
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

.transConInfo {
    position: absolute;
    transform: translate(30px, 300px);
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

.mapSize {
    height: 500px;
    width: 1200px;
    border-radius: 25px;
    position: absolute;
    transform: translate(155px, 775px);
}

</style>