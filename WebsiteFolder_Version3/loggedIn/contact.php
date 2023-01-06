<?php 
    session_start();
?>

<!DOCTYPE html>

<html> 
    <head>
        <title>Contact us</title>
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

    <h1>Contact us!</h1>

    <img src="hardwood.jpg" position="absolute" class="hardwoodA" alt = "wood" style="opacity:70%">
    <img src="hardwood.jpg" position="absolute" class="hardwoodB" alt = "wood" style="opacity:70%">
    <div class="imgBan" style="position: absolute; transform: translate(862.5px, 562.5px) rotate(5deg);"></div>
    <img src="lawnHouse.jpg" alt = "House lawn" class="mower" style="position: absolute; transform: translate(900px, 600px); border: 12px solid white; border-radius: 20px;">
    <div class="imgBan" style="position: absolute; transform: translate(862.5px, 1062.5px) rotate(5deg);"></div>
    <img src="playground.jpg" alt = "playground lawn" class="mower" style="position: absolute; transform: translate(900px, 1100px); border: 12px solid white; border-radius: 20px;">

    <h2 class="transConInfo" style="background-color: #206040; padding: 10px; border-radius: 15px; border: 6px solid white;">Book a FREE Estimate Today!</h2>
    <h3 class="trans1st">First Name</h3>
    <h3 class="trans2nd">Last Name</h3>
    <h3 class="transAdd">Home Address</h3>
    <h3 class="transPh">Phone</h3>
    <h3 class="transPost">Postal Code</h3>
    <h3 class="transSub">Subject</h3>
    <h3 class="transBody">What can we do for you?</h3>

    <input type="1stNameText" id="firstN"  class="NameOneTxt">
    <input type="2ndNameText" id="secondN" class="NameTwoTxt">
    <input type="AddText" id="hmAdd" class="AddTxt">
    <input type="phText" id="ph" class="phTxt">
    <input type="postText" id="post" class="postTxt">
    <input type="subText" id="sub" class="subTxt">
    <input type="bodyText" id="mail" class="bodyTxt"> 
    

    <button type="submit" onClick="mail(); return false" class="b2">Submit</button>

    <div class="bar" style="position: absolute; transform: translate(0px, 256px);"></div>

</body>
</html>
<style>

img:hover {
    opacity: 50%;
}

.imgBan {
    background-color: #206040;
    border-radius: 70px;
    height: 400px;
    width: 600px;
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

.mower {
    height:300px;
    width:500px;
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

.b2 {
    height:40px;
    width: 670px;
    display: inline-block;
    text-align:center;
    position: absolute;
    transform: translate(30px, 1650px);
    background-color: #206040;
    font-size: 25px;
    color: #ffffff;
    border: none;
    font-family: "Trebuchet MS", Helvetica;
    cursor: pointer;
    border-radius: 15px;
    border: 4px solid white;
}

.b2:hover {
    background-color: #0d261a;
    border: 4px solid #262626;
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
    transform: translate(75%, -50%);
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
    transform: translate(30px, 280px);
}

h3 {
    font-size: 2em;
    color: #ffffff;
    font-family: "Trebuchet MS", Helvetica;
    background-color: #206040;
    padding: 3px;
    border-radius: 15px;
    border: 4px solid white;
}

input {

    font-size: 1.5em;
    padding-left: 10px;
    /* padding-bottom: 100px; Try and find a way to add this ALSO CHANGE BOX COLOR*/
    color: #000000;
    font-family: "Trebuchet MS", Helvetica;
    background-color: #cee4d8;
    border-bottom: -30px;
    border:medium;
    border-style:solid;
    border-color:#287EC7;
    border-top: #ffffff;
    border-color: #ffffff;
}

.trans1st {
    position: absolute;
    transform: translate(30px, 410px);
}

.trans2nd {
    position: absolute;
    transform: translate(370px, 410px);
}

.transAdd {
    position: absolute;
    transform: translate(30px, 540px);
}

.transPh {
    position: absolute;
    transform: translate(30px, 680px);
}

.transPost {
    position: absolute;
    transform: translate(420px, 680px);
}

.transSub {
    position: absolute;
    transform: translate(30px, 820px);
}

.transBody {
    position: absolute;
    transform: translate(30px, 960px);
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

.NameOneTxt {
    position: absolute;
    transform: translate(30px, 500px);
    height: 40px;
    width: 310px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

.NameTwoTxt {
    position: absolute;
    transform: translate(370px, 500px);
    height: 40px;
    width: 310px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

.AddTxt {
    position: absolute;
    transform: translate(30px, 630px);
    height: 40px;
    width: 650px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

.phTxt {
    position: absolute;
    transform: translate(30px, 770px);
    height: 40px;
    width: 360px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

.postTxt {
    position: absolute;
    transform: translate(420px, 770px);
    height: 40px;
    width: 260px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

.subTxt {
    position: absolute;
    transform: translate(30px, 910px);
    height: 40px;
    width: 650px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

.bodyTxt {
    position: absolute;
    transform: translate(30px, 1050px);
    height: 550px;
    width: 650px;
    border-radius: 15px;
    border: 4px solid #ffffff; 
}

</style>

<script>

function mail() {
    let link = "mailto:k3thamil@uwaterloo.ca" + "?cc=k3thamil@uwaterloo.ca" + 
    "&subject=" + encodeURIComponent(document.getElementById('sub').value) + 
    "&body=" + encodeURIComponent(document.getElementById('mail').value) + 
    encodeURIComponent('\n\n')  + encodeURIComponent(document.getElementById('firstN').value) + 
    encodeURIComponent(' ') + encodeURIComponent(document.getElementById('secondN').value) + encodeURIComponent('\n') 
    + encodeURIComponent(document.getElementById('ph').value) + encodeURIComponent('\n') +
    encodeURIComponent(document.getElementById('hmAdd').value) + encodeURIComponent('\n') + 
    encodeURIComponent(document.getElementById('post').value);
    window.location.href = link;
}

</script>

