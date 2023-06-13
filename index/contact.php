<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>contact us</title>
</head>

<body>


    <?php

    include "header.php";


    ?>

    <div class="container-11">

        <div class="box-11">
            <div class="form-container-1">
                <h2>Get in Touch</h2>
                <form>
                    <h5>Your Name</h5>
                    <input type="text" placeholder="Name" required>
                    <h5>Your Email</h5>
                    <input type="email" placeholder="Email" required>
                    <h5>Send your message</h5>
                    <input type="text" placeholder="Subject" required>
                    <h5>phone number</h5>
                    <input type="number" placeholder="phone number" required>
                    <div class="but01">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="address-container">
                <h2>Reach Us:</h2>
                <ul>
                    <li>VESU : <br>108-109-110 SNS Atria - A, Rundh, Vesu,Surat- <br> 394518, Gujarat, India</li>
                    <li>ADAJAN : <br>4, Premjinagar Society-1, Near Sardar Bridge <br> Circle, Opp. Muktanand Complex,
                        Adajan <br> Surat-395009, Gujarat, India</li>
                    <li>CHAUTAPUL : <br>1st Floor, Sahebji Shelter,Chautapul,Surat- <br> 395003, Gujarat, India</li>
                    <li><img src="./img/Phone.svg" alt="">1800-572-3579 , +91 9377 684422</li>
                    <li><img src="./img/Gmail.svg" alt="">customercare@beautyncurves.com</li>
                </ul>
                <ul class="social-media">
                    <li><a href="#"><img src="./img/Instagram.svg" alt="" height="70px"></a> </li>
                    <li><a href="#"><img src="./img/Facebook.svg" alt="" height="70px"></a></li>
                    <li><a href="#"><img src="./img/linked-in.svg" alt="" height="52px"></a></li>
                    <li><a href="#"><img src="./img/twitter.svg" alt="" height="52px"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="head-text">
        <h1>Find us on Google Map
        </h1>
    </div>

    <div class="container-99">
        <div class="left-side">
            <h2>Stay in touch</h2>
            <p>Subscribe to our newsletter and <br> we’ll keep informed you about our <br> offers. </p>
            <div class="email-container">
                <input type="email" class="email-input" placeholder="Enter your email address" required>
                <button type="submit" class="email-button">Subscribe</button>
            </div>
        </div>
        <div class="right-side">
            <div class="maps">
                <div id="map"><iframe width="700" height="400" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0" id="gmap_canvas"
                        src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=shivnagar%20surat+(sachin)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                        href='https://maps-generator.com/'></a>
                </div>
            </div>
        </div>
    </div>
















    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script>
        function initMap() {
            // Create a map centered at your desired location
            var map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 37.7749, lng: -122.4194 },
                zoom: 12
            });

            // Add a marker at your location
            var marker = new google.maps.Marker({
                position: { lat: 37.7749, lng: -122.4194 },
                map: map,
                title: "Your Location"
            });
        }
    </script>
    <?php



    include "footer.php";


    ?>


</body>

</html>