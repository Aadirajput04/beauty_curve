<?php
$currentPage = 'index';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>





    <?php




    include "header.php"; ?>



    <div class="section-main">
        <div class="main-section-hero">
            <div class="section-hero-left">
                <h2>Embrace Your<br>
                    Authentic <br>Beauty</h2>
                <p>Journey to Unveiling Your Radiance</p>
                <a href="contact.php" class="button">Book Apointment</a>



            </div>
            <div class="section-hero-right">

            </div>
        </div>
        <div class="section-hero2">
            <div class="view">



                <h1>We are the leading<br>
                    skin centre in Gujarat</h1>
                <div class="view-more">
                  <a href="about.php" style="text-decoration:none; color:white;">  <h2>View More <img class="arrow-img" src="./img/ArrowDown.svg" alt=""> </h2></a>
                </div>

            </div>

        </div>

        <section class="our-services">
            <h1>Our Services</h1>
            <hr>
            <div class="our-service-main-container">
                <div class="our-service-container">
                    <div class="our-services-1">
                        <div class="our-services-up">
                            <h2>Acne Scar Treatment</h2>
                            <p>Regain your skin's confidence with our transformative acne scar treatment solutions</p>

                        </div>
                        <div class="our-services-bottom">
                            <img src="./img/ourserevice1.svg" alt="" class="serviceimage1">
                        </div>


                    </div>
                </div>
                <div class="our-service-container">
                    <div class="our-services-1">
                        <div class="our-services-bottom">
                            <img src="./img/ourserevice2.svg" alt="" class="serviceimage2">
                        </div>
                        <div class="our-services-up">
                            <h2>Acne Scar Treatment</h2>
                            <p>Regain your skin's confidence with our transformative acne scar treatment solutions</p>

                        </div>



                    </div>
                </div>
                <div class="our-service-container">
                    <div class="our-services-1">
                        <div class="our-services-up">
                            <h2>Acne Scar Treatment</h2>
                            <p>Regain your skin's confidence with our transformative acne scar treatment solutions</p>

                        </div>
                        <div class="our-services-bottom">
                            <img src="./img/ourserevice3.svg" alt="" class="serviceimage3">
                        </div>


                    </div>
                </div>


            </div>
            <a class="button" href="services.php">Explore More</a>


        </section>
        <section class="our-services-dec">
            <div class="service-dec-main">
                <div class="service-dec">
                    <h1>Our Services</h1>
                    <hr>
                    <div class="service-decp">
                        <p>With 64 years of experience in the skin clinic industry and 56 years specializing in Laser
                            Cosmetology and Medical Aesthetics, we offer a safe and effective alternative to plastic
                            cosmetic
                            surgeries. </p>
                        <p>Our portfolio boasts 100% successful, result-oriented treatments, designed to seamlessly
                            integrate
                            into your lifestyle. </p>
                    </div>



                </div>
            </div>
            <!-- <img src="./img/ourserevice1.svg" alt="" id="serviceimage1">
            <img src="./img/ourserevice3.svg" alt="" id="serviceimage2"> -->

        </section>
        <section class="testi">
            <div class="service-dec testimonial">
                <h1>Testimonials</h1>
                <hr>
                <div class="testi-container">
                    <a href="#" id="prev-btn"><img src="./img/prarrow.svg" alt="Previous"></a>
                    <div class="testi-dec">
                        <p>It was an experience of a lifetime with you guys. It is definitely the best dental clinic I
                            have ever visited.</p>
                        <h3>Evelynne Celie</h3>
                        <h5>Houston</h5>
                    </div>
                    <img src="./img/testi1.svg" alt="" class="re-img">
                    <a href="#" id="next-btn"><img src="./img/nextarrow.svg" alt="Next"></a>
                </div>
            </div>
        </section>
        <script>
            const testimonials = [{
                    comment: "It was an experience of a lifetime with you guys. It is definitely the best dental clinic I have ever visited.",
                    name: "Evelynne Celie",
                    location: "Houston",
                    images: ["./img/testi1.svg", "./img/testi2.svg", "./img/testi3.svg", "./img/testi4.svg"]
                },
                {
                    comment: "I highly recommend this dental clinic. The staff is friendly and professional, and the service is exceptional.",
                    name: "John Smith",
                    location: "New York",
                    images: ["./img/testi1.svg", "./img/testi2.svg", "./img/testi3.svg", "./img/testi4.svg"]
                },
                // Add more testimonials as needed
            ];

            let currentTestimonial = 0;
            let currentImage = 0;
            let imageInterval;

            function showTestimonial() {
                const testimonial = testimonials[currentTestimonial];
                document.querySelector(".testi-dec p").textContent = testimonial.comment;
                document.querySelector(".testi-dec h3").textContent = testimonial.name;
                document.querySelector(".testi-dec h5").textContent = testimonial.location;
                document.querySelector(".re-img").src = testimonial.images[currentImage];

                clearInterval(imageInterval); // Clear previous image interval

                // Check if it's the last image in the testimonial
                if (currentImage === testimonial.images.length - 1) {
                    // If it's the last image, don't start the interval
                    imageInterval = null;
                } else {
                    // If it's not the last image, start the interval
                    imageInterval = setInterval(nextImage, 3000);
                }
            }

            function prevTestimonial(e) {
                e.preventDefault(); // Prevent default link behavior (scrolling to top)
                currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
                currentImage = 0; // Reset current image index
                showTestimonial();
            }

            function nextTestimonial(e) {
                e.preventDefault(); // Prevent default link behavior (scrolling to top)
                currentTestimonial = (currentTestimonial + 1) % testimonials.length;
                currentImage = 0; // Reset current image index
                showTestimonial();
            }

            function nextImage() {
                currentImage = (currentImage + 1) % testimonials[currentTestimonial].images.length;
                document.querySelector(".re-img").src = testimonials[currentTestimonial].images[currentImage];

                // Check if it's the last image in the testimonial
                if (currentImage === testimonials[currentTestimonial].images.length - 1) {
                    clearInterval(imageInterval); // Stop the interval
                }
            }

            document.getElementById("prev-btn").addEventListener("click", prevTestimonial);
            document.getElementById("next-btn").addEventListener("click", nextTestimonial);

            showTestimonial();

            // Change image on mouseenter
            document.querySelector(".re-img").addEventListener("mouseenter", () => {
                nextImage();
            });

            // Change image on wheel scroll
            document.querySelector(".re-img").addEventListener("wheel", (event) => {
                if (event.deltaY < 0) {
                    // Scroll up
                    currentImage = (currentImage - 1 + testimonials[currentTestimonial].images.length) % testimonials[currentTestimonial].images.length;
                } else {
                    // Scroll down
                    currentImage = (currentImage + 1) % testimonials[currentTestimonial].images.length;
                }
                document.querySelector(".re-img").src = testimonials[currentTestimonial].images[currentImage];
            });
            document.querySelector(".re-img").addEventListener("wheel", (event) => {
                event.preventDefault();
            });
        </script>
        <div class="container-11" style="margin-bottom:30px; padding-top:0px;">


            <div class="box-11">
                <div class="form-container-1">
                    <h2>Get in Touch</h2>


                    <form action="https://formspree.io/f/xjvdnjgn" method="post">

                        <input id="input" type="text" placeholder="Name" name="name"required>

                        <input id="input" type="email" placeholder="Email"name="email" required>

                        <input id="input" type="text" placeholder="Subject" name="subject" required>

                        <input id="input" type="tel" placeholder="Phone Number" name="phone" required>
                        <div class="but01">
                            <button type="submit">Send Message</button>
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
                        <li><img src="./img/Phone.svg" alt=""><a style="text-decoration: none; color:white;"  href="tel:18005723579">1800-572-3579</a>, <a style="text-decoration: none; color:white;" href="tel:+919377684422">+91 9377 684422</a></li>

<li><img src="./img/Gmail.svg" alt=""><a style="text-decoration: none; color:white;" href="mailto:customercare@beautyncurves.com">customercare@beautyncurves.com</a></li>
                    </ul>
                    <ul class="social-media">
                        <li><a href="#"><img src="./img/Instagram.svg" alt="" height="30px"></a> </li>
                        <li><a href="#"><img src="./img/Facebook.svg" alt="" height="30px"></a></li>
                        <li><a href="#"><img src="./img/linked-in.svg" alt="" height="23px"></a></li>
                        <li><a href="#"><img src="./img/twitter.svg" alt="" height="23px"></a></li>
                    </ul>
                </div>
            </div>
        </div>






    </div>




    <?php

    include "footer.php";


    ?>

    <script src="javascript/main.js"></script>
</body>

</html>