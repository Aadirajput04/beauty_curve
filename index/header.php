<div class="marquee">
    <span>customercare@beautyncurves.com</span>
    <span>TOLL FREE: 1800-572-3579</span>
    <span>
        <a href=""><img src="./img/Instagram.svg" alt=""></a>
        <a href=""><img src="./img/Facebook.svg" alt=""></a>
        <a href=""><img src="./img/Gmail.svg" alt=""></a>
        <a href=""><img src="./img/Phone.svg" alt=""></a>
    </span>
</div>

<header>
    <div class="logo-1">
        <img src="./img/logo.svg" alt="Logo" style="height: 62px;">
    </div>
    <nav>
        <ul>
            <li <?php if($currentPage === 'index') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
            <li <?php if($currentPage === 'about') echo 'class="active"'; ?>><a href="about.php">About</a></li>
            <li <?php if($currentPage === 'services') echo 'class="active"'; ?>><a href="services.php">Services</a></li>
            <li <?php if($currentPage === 'contact') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
            <li><a class="button button1" href="contact.php">Book Now</a></li>
        </ul>
    </nav>
</header>
