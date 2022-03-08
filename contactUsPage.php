<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Torque Rent a Car | Car Rental Lebanon</title>
</head>

<body>
    <div class="Top-Bar">

        <div class="Headerlogo" id="logoContainer">
            <img id="logo" src="Logo.jpg" alt="" style="height: 45px; width: 140px;">
        </div>
        <div class="HeaderOption">
        <div class="container mt-3" id="langBar">
                <button type="button" class="btn" id="homeBtn" onclick="document.location='homePage.html'">HOME</button>
                <button type="button" class="btn" id="reservationBtn">RESERVATION</button>
                <button type="button" class="btn" id="servicesBtn">SERVICES</button>
                <button type="button" class="btn" id="insuranceBtn">INSURANCE</button>
                <button type="button" class="btn" id="awardsBtn">AWARDS</button>
                <button type="button" class="btn" id="aboutusBtn" onclick="document.location='AboutUs.html'">ABOUT US</button>
                <button type="button" class="btn" id="contactusBtn" onclick="document.location='contactUsPage.php'">CONTACT US</button>
                <button type="button" class="btn" id="langBtn" onclick="translateBack()">LANGUAGE: EN</button> 
                <button type="button" class="btn" id="loginBtn">LOGIN</button>
                <button type="button" class="btn" id="registerBtn">REGISTER</button>
              </div>
        </div>
        <div class="offcanvas offcanvas-end" id="demo">
            <div class="offcanvas-header">
                <h1></h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <img src="https://img.icons8.com/material-rounded/30/000000/home-page.png" />
                <button class="btn btn-secondary" type="button" id="homeBtn1">HOME</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img
                    src="https://img.icons8.com/external-flat-icons-inmotus-design/30/000000/external-booking-booking-flat-icons-inmotus-design-3.png" />
                <button class="btn btn-secondary" type="button" id="reservationBtn1">RESERVATION</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img src="https://img.icons8.com/ios-filled/30/000000/services--v1.png" />
                <button class="btn btn-secondary" type="button" id="servicesBtn1">SERVICES</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img
                    src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/30/000000/external-insurance-automobile-kiranshastry-solid-kiranshastry.png" />
                <button class="btn btn-secondary" type="button" id="insuranceBtn1">INSURANCE</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img
                    src="https://img.icons8.com/external-icongeek26-glyph-icongeek26/30/000000/external-awards-police-icongeek26-glyph-icongeek26.png" />
                <button class="btn btn-secondary" type="button" id="awardsBtn1">AWARDS</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img src="https://img.icons8.com/ios-glyphs/30/000000/about-us-male.png" />
                <button class="btn btn-secondary" type="button" id="aboutusBtn1">ABOUT US</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img src="https://img.icons8.com/ios-filled/30/000000/phone-disconnected.png" />
                <button class="btn btn-secondary" type="button" id="contactusBtn1">CONTACT US</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img src="https://img.icons8.com/ios-glyphs/30/000000/language.png" />
                <button class="btn btn-secondary" type="button" id="langBtn1" onclick="translateBack()">LANGUAGE:
                    ENGLISH</button>
                <div id="spaces" style="margin-bottom: 35px"></div>
                <img src="https://img.icons8.com/ios-glyphs/30/000000/login-rounded-right--v1.png" />
                <button class="btn btn-secondary" type="button" id="loginBtn1">LOGIN</button>
                <div id="spaces" style="margin-bottom: 15px"></div>
                <img src="https://img.icons8.com/ios-filled/30/000000/create-new.png" />
                <button class="btn btn-secondary" type="button" id="registerBtn1">REGISTER</button>
                <div id="spaces" style="margin-bottom: 10px"></div>
            </div>
        </div>

        <div class="container-fluid mt-3">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo"></button>
        </div>

    </div>
        <!-- contact us body  -->
    <div class="mapContainer">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.8905652108433!2d35.527960415166376!3d33.86671108065684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1744efffab51%3A0x87faedc0fc9d642f!2sTORQUE%20RENT%20A%20CAR!5e0!3m2!1sen!2slb!4v1645970263772!5m2!1sen!2slb"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
<div class="ContactUsBody" style="display: flex;">
<div class="contactus1" style="width: 40%;">
<div class="contactus1P1" style="color: rgb(67, 39, 116);">Furn El Chebak Branch</div>
<div class="contactus1P2">
    <div id="contactus1P2Div1">
        <img src="https://img.icons8.com/office/16/000000/marker.png" id="locationLogo"/>
        <p id="branchLocationLabel"> La Sagesse Street, Al Tohwita <br></p>
        
    </div>
    <div id="contactus1P2Div1">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/ringer-volume.png" style="height: 25px;margin-right: 3px;"/>
        <p id="branchPhoneNumberLabel">+961 70 716 800/ +961 03 449 100</p>
        
    </div>
   
    <div id="contactus1P2Div1">
        <img src="https://img.icons8.com/office/16/000000/clock--v1.png" style="height: 23px;margin-right: 5px;"/>
        <p id="branchPhoneNumberLabel">Monday to Saturday: From 8:00 AM to 5:00 PM</p>
        
    </div>
</div>
<div class="contactUsImage">
    <img src="https://media.istockphoto.com/photos/close-up-of-a-man-receiving-new-car-key-picture-id628453996?k=20&m=628453996&s=612x612&w=0&h=o0YMpSeU9tL73tn3xih1fGd3RQ8XViJpIgOeCTI_RB4=" alt="" style="width: 100%; height: 100%;border-radius: 4px;">
</div>
</div>

<div class="contactus2" style="width: 60%;">

    <div class="contactus1P12" style="color: rgb(67, 39, 116);">Contact Us</div>
    <div class="contactus1P2">
        <form action="includes/signup.inc.php" class="contactUsForm" method="POST">
            <div class="firstRowInForm" style="margin-bottom: 3%;">
            <label for="lname">Last Name </label>
            <input type="text" id="lname" name="lname" style="margin-right: 84px;" required>

            <label for="fname">First Name </label>
            <input type="text" id="fname" name="fname" required>
            </div>
            <div class="secondRowInForm"  style="margin-bottom: 3%;">
                <label for="country">Country </label>
                <select id="country" name="country" style="width:184px; height: 33px;margin-right: 15.5%;margin-left: 46px;" required>
                    <option value="Lebanon">Lebanon </option>
                    <option value="Syria">Syria</option>
                    </select>
                    <label for="Age">Age </label>
            <input type="text" id="Age" name="age" required>
            </div>
            <div class="thirdRowInForm"  style="margin-bottom: 3%;">

                <label for="MobileExt">Country Ext </label>
            <input type="MobileExt" id="MobileExt" name="countryExt" placeholder="Ex. +961" required style="    margin-right: 50px;
            ">
                    <label for="Mobile">Mobile Number </label>
            <input type="number" id="mobile" name="mobile" required>
            </div>
            <div class="fourthRowInForm"  style="margin-bottom: 3%;">

                <label for="Email">Email </label>
            <input type="email" id="Email" name="Email" placeholder="Ex. john.Dhoe@gmail.com" required style="width: 60%;">
                    
            </div>
            <div class="fifthRowInForm"  style="margin-bottom: 3%;">

                <label for="bookfrom"  >Booking period from:</label>
                <input type="date" id="bookfrom" name="bookFrom" style="    margin-right: 38px;">
                <label for="bookFTime">Pick up time</label>
                <input type="text" id="bookFTime" name="bookFTime" placeholder="8:00 AM" required>
            </div>
            <div class="sixthRowInForm"  style="margin-bottom: 6%;">

                <label for="bookfrom" >Booking period to:</label>
                <input type="date" id="bookfrom" name="bookTo" style="margin-right: 38px;">
                <label for="bookTTime" >Drop off time </label>
                <input type="text" id="bookTTime" name="bookTTime" placeholder="8:00 AM" required>
            </div>
            <div class="seventhRowInForm"  style="margin-bottom: 3%;">
            <button type="submit" id="submitBtn" style="width: 60%; margin-left:80px;background-color: rgb(67, 39, 116); color: #adb5bd;">Submit</button>
            
        </div>
            
        </form>
    </div>
</div>

</div>


    <footer>


        <div class="row1" style="background-color: #adb5bd; width: 33%;height: -webkit-fill-available;">
            <h6 style="font-weight:bold ; color: rgb(67, 39, 116);">Contact Info</h6>
            <table>
                <tr>
                    <th id="c1">Email: </th>
                    <th>Torquerentacar@gmail.com</th>

                </tr>
                <tr>
                    <th id="c2">Main Office: </th>
                    <th>Furn El Shebbek, La Sagesse Street, Al Tohwita</th>
                </tr>
                <tr>
                    <th id="c3">Cell:</th>
                    <th>+961 70 716 800</th>
                </tr>
                <tr>
                    <th id="c4"></th>
                    <th>+961 70 716 800</th>

                </tr>
                <tr>
                    <th id="c5" style="color:rgb(67, 39, 116);">Tel: </th>
                    <th>+961 01 29 40 60</th>

                </tr>


            </table>

        </div>
        <div class="row1" style="background-color: #adb5bd; width: 33%;height: -webkit-fill-available;">
            <h6 style="font-weight:bold ;color: rgb(67, 39, 116);">Service Hours</h6>
            <table>
                <tr>
                    <th id="c1">Monday to Saturday : </th>
                    <th>8 AM till 7 PM</th>

                </tr>
                <tr>
                    <th id="c2">Road Assistance: </th>
                    <th>24/7</th>
                </tr>

            </table>
        </div>
        <div class="row1" style="background-color: #adb5bd;width: 33%;height: -webkit-fill-available;">
            <h6 style="font-weight:bold ; color: rgb(67, 39, 116);">Social Networks</h6>
            <img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-new.png" />
            <img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" />
            <img src="https://img.icons8.com/material-outlined/24/000000/new-post.png" />
            <img src="https://img.icons8.com/material-outlined/24/000000/whatsapp--v1.png" />
        </div>



    </footer>





























    <script>
        var count = 0;
        function translateAll() {
            count = 1;
            document.getElementById("langBtn").innerHTML = "(ar) العربية ";
            document.getElementById("homeBtn").innerHTML = "الصفحة الرئيسية";
            document.getElementById("reservationBtn").innerHTML = "التحفظات  ";
            document.getElementById("loginBtn").innerHTML = "تسجيل الدخول";
            document.getElementById("insuranceBtn").innerHTML = "تأمين ";
            document.getElementById("awardsBtn").innerHTML = "الرخصة  ";
            document.getElementById("aboutusBtn").innerHTML = "معلومات عنا";
            document.getElementById("contactusBtn").innerHTML = "اتصل بنا";
            document.getElementById("servicesBtn").innerHTML = "خدمات";
            document.getElementById("registerBtn").innerHTML = "إنشاء حساب";
            document.getElementById("langBar").style.direction = "rtl";
            document.getElementById("loginBtn").style.marginLeft = "0px";
            document.getElementById("loginBtn").style.marginRight = "50px";
            document.getElementById("langBtn1").innerHTML = "(ar) العربية ";
            document.getElementById("homeBtn1").innerHTML = "الصفحة الرئيسية";
            document.getElementById("reservationBtn1").innerHTML = "التحفظات  ";
            document.getElementById("loginBtn1").innerHTML = "تسجيل الدخول";
            document.getElementById("insuranceBtn1").innerHTML = "تأمين ";
            document.getElementById("awardsBtn1").innerHTML = "الرخصة  ";
            document.getElementById("aboutusBtn1").innerHTML = "معلومات عنا";
            document.getElementById("contactusBtn1").innerHTML = "اتصل بنا ";
            document.getElementById("servicesBtn1").innerHTML = "خدمات";
            document.getElementById("registerBtn1").innerHTML = "إنشاء حساب";


        }
        function translateBack() {
            if (count == 1) {

                location.reload();
            }
            else {
                translateAll();
            }


        }

    </script>






</body>

</html>