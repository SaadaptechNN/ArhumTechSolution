<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-links">
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </div>
        <p>&copy; 2024 Creative Agency. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
<script>

     // Hamburger Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-menu li a');

    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('toggle');
    });

 // Smooth Scroll
 document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

        // Close the menu when any link is clicked
        navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            hamburger.classList.remove('toggle');
        });
    });
    </script>

    <!-- Validation Script -->
<script>
    function validateForm() {
        let valid = true;

        // Clear previous error messages
        document.getElementById("nameError").innerHTML = "";
        document.getElementById("emailError").innerHTML = "";
        document.getElementById("messageError").innerHTML = "";

        // Get form values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        // Name validation (must not be empty)
        if (name === "") {
            document.getElementById("nameError").innerHTML = "Please enter your name.";
            valid = false;
        }

        // Email validation (basic email format check)
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email === "") {
            document.getElementById("emailError").innerHTML = "Please enter your email.";
            valid = false;
        } else if (!emailPattern.test(email)) {
            document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
            valid = false;
        }

        // Message validation (must not be empty)
        if (message === "") {
            document.getElementById("messageError").innerHTML = "Please enter your message.";
            valid = false;
        }

        return valid;
    }
</script>