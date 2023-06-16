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
                <a class="button" href="#">Book Apointment</a>

            </div>
            <div class="section-hero-right">

            </div>
        </div>
        <div class="section-hero2">
            <div class="view">



                <h1>We are the leading<br>
                    skin centre in Gujarat</h1>
                <div class="view-more">
                    <h2>View More <img class="arrow-img" src="./img/ArrowDown.svg" alt=""> </h2>
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
            <a class="button" href="#">Explore More</a>


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
        <script>const testimonials = [
                {
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






    </div>




    <?php

    include "footer.php";


    ?>

    <script src="javascript/main.js"></script>
</body>

</html>