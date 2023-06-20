<div class="marquee" behavior="alternet"  onmouseover="stopMarquee('center')" onmouseout="startMarquee()">
    <div class="marquee-content">
        <span>customercare@beautyncurves.com</span>
        <span>TOLL FREE: 1800-572-3579</span>
        <div class="social-icons">
            <a href="#"><img src="./img/Instagram.svg" alt=""></a>
            <a href="#"><img src="./img/Facebook.svg" alt=""></a>
            <a href="#"><img src="./img/Gmail.svg" alt=""></a>
            <a href="#"><img src="./img/Phone.svg" alt=""></a>
        </div>
    </div>
</div>


<script>
// var marqueeElement = document.querySelector('.marquee');
// var marqueeContentElement = document.querySelector('.marquee-content');
// var isMarqueeStopped = false;
// var centerPosition = 0;

// marqueeElement.addEventListener('focusin', function() {
//   stopMarquee();
//   centerMarquee();
// });

// marqueeElement.addEventListener('focusout', function() {
//   startMarquee();
// });

// function stopMarquee() {
//   if (!isMarqueeStopped) {
//     var currentPosition = marqueeContentElement.getBoundingClientRect().left;
//     marqueeContentElement.style.animationPlayState = 'paused';
//     centerPosition = (marqueeElement.offsetWidth - marqueeContentElement.offsetWidth) / 2 - currentPosition;
//     marqueeContentElement.style.transform = 'translateX(' + centerPosition + 'px)';
//     isMarqueeStopped = true;
//   }
// }

// function startMarquee() {
//   if (isMarqueeStopped) {
//     marqueeContentElement.style.animationPlayState = 'running';
//     marqueeContentElement.style.transform = 'translateX(0)';
//     isMarqueeStopped = false;
//   }
// }

// function centerMarquee() {
//   marqueeContentElement.style.transform = 'translateX(' + centerPosition + 'px)';
// }



</script>

<header  class="h-nav-resp">
    <div class="logo-1">
        <img src="./img/logo.svg" alt="Logo" style="height: 62px;">
    </div>
    <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    <nav>
    <ul id="navlist" class="v-class-resp">
            <li <?php if($currentPage === 'index') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
            <li <?php if($currentPage === 'about') echo 'class="active"'; ?>><a href="about.php">About</a></li>
            <li <?php if($currentPage === 'services') echo 'class="active"'; ?>><a href="services.php">Services</a></li>
            <li <?php if($currentPage === 'contact') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
            <li><a class="button button1" href="contact.php">Book Now</a></li>
        </ul>
    </nav>
</header>
<script>
   const burger = document.querySelector('.burger')
   const nav = document.querySelector('nav')

   const ul = document.querySelector('ul')
   const header = document.querySelector('header')



    burger.addEventListener('click', function(){
        ul.classList.toggle('v-class-resp')
       header.classList.toggle('h-nav-resp')
    })



</script>
