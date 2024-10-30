
<?php
include('header.php');
?>


    <!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you! Whether you have a question, feedback, or want to discuss your project, feel free to reach out.</p>
        
        <!-- Contact Form -->
        <form id="contactForm" class="contact-form" onsubmit="return validateForm()" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Your Name">
                <small class="error-message" id="nameError"></small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Your Email">
                <small class="error-message" id="emailError"></small>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required placeholder="Your Message"></textarea>
                <small class="error-message" id="messageError"></small>
            </div>
            <button type="submit" class="submit-btn" name="sub">Send Message</button>
        </form>
        
        <div class="contact-info">
            <h3>Get in Touch</h3>
            <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
            <p>Phone: <a href="tel:+1234567890">+123 456 7890</a></p>
        </div>
    </div>
</section>
<?php
include('footer.php');
?>

 

<?php
include('insert.php');
?>