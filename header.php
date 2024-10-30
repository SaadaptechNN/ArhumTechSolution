<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creative Agency</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- Header -->
<header>
    <nav>
        <div class="logo">Arhum TECH SOLUTION</div>
        <!-- Hamburger Menu Icon -->
        <div class="hamburger" id="hamburger" >
           
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-menu" id="nav-menu" style="background-color: #2c3e50;">
        <li><a href="index.php" >Home</a></li>        
            <li><a href="about.php" >About</a></li>
            <!-- <li><a href="services.html">Services</a></li> -->
            <div class="dropdown">
  <a class="dropdown-toggle" href="services.php" role="button" style="text-decoration:none;" data-bs-toggle="dropdown" aria-expanded="false">
    Services
  </a>

  <ul class="dropdown-menu" style="background-color: #2c3e50;">
    <li><a class="dropdown-item text-light" href="services.php#WebDesigning">Web Designing</a></li>
    <!-- <li><a class="dropdown-item" href="services.php#WebDevelopment">Web Development</a></li> -->
    <li><a class="dropdown-item" href="services.php#LogoDesigning">Logo Designing</a></li>
    <li><a class="dropdown-item" href="services.php#DigitalMarketing">Digital Marketing</a></li>
    <li><a class="dropdown-item" href="services.php#GraphicDesigning">Graphic Designing</a></li>

  </ul>
</div>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="#contact" class="cta-btn">Get in Touch</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Creative Solutions, Tailored For You</h1>
        <p>Designing experiences that inspire and engage your audience.</p>
        <a href="portfolio.php" class="btn">Our Work</a>
        <a href="services.php" class="btn btn-secondary">Our Services</a>
    </div>
</section>