<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC LearnSphere</title>

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="css/index.css" rel="stylesheet">
    


    <style>
        /* Ensure body takes at least full height */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Push footer to the bottom */
        .content {
            flex: 1;
        }

        /* Footer styling */
        .footer {
            background-color: #222;
            color: white;
            padding: 30px 0;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        /* Initially hide footer */
        .footer-hidden {
            transform: translateY(100%);
        }
    </style>
</head>

<body>

    <!-- Footer -->
    <footer class="footer footer-hidden" style="height: 200px;">
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <!-- Quick Links -->
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-3">Quick Links</h4>
                        <p><a class="text-light" href="about.html">About Us</a></p>
                        <p><a class="text-light" href="contact.html">Contact Us</a></p>
                        <p><a class="text-light" href="#">Privacy Policy</a></p>
                        <p><a class="text-light" href="#">Terms & Conditions</a></p>
                        <p><a class="text-light" href="#">FAQs & Help</a></p>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-3">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Perundurai, Tamil Nadu</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9876543210</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>keclearnsphere@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-3">Subscribe to our Newsletter</h4>
                        <p>Subscribe now and join our growing community of learners committed to lifelong education!</p>
                        <div class="position-relative mx-auto" style="max-width: 200px;">
                            <form action="#">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email" required>
                                <button type="submit" class="btn btn-primary">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="container">
                <div class="copyright text-center py-3">
                    &copy; <a class="border-bottom text-white" href="index.html">KEC LearnSphere</a>, All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Custom Script -->
    <script>
        new WOW().init();

        // Show footer only when it comes into view
        function toggleFooterVisibility() {
            const footer = document.querySelector(".footer");
            const scrollPosition = window.scrollY + window.innerHeight;
            const footerPosition = document.body.scrollHeight - 100; // Adjust to fine-tune when it appears

            if (scrollPosition >= footerPosition) {
                footer.classList.remove("footer-hidden");
            } else {
                footer.classList.add("footer-hidden");
            }
        }

        window.addEventListener("scroll", toggleFooterVisibility);
    </script>
</body>

</html>
