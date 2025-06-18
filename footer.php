<!-- Footer Section -->
<footer class="text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Logo and Contact Information -->
            <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                <center>
                    <div class="mb-4">
                    <a href="index.php">
                        <img src="images/logo-footer.png" alt="Elemental Biologics Logo" class="img-fluid" style="max-width: 200px;">
                    </a>
                </div>
                <div class="contact-info">
                    <p class="text-white feature-text"><img src="images/location.svg" alt="Location" class="icon me-2"> Elemental Biologics 6084 Corte del Cedro, Suite 100 Carlsbad, CA 92011</span>
                    </p>
                    <p class="text-white feature-text"><img src="images/email.svg" alt="Email" class="icon me-2"> contact@elementalbiologics.com</p>
                    <p class="text-white feature-text"><img src="images/call.svg" alt="Phone" class="icon me-2"> (760) 814-2087</p>
                    <a href="https://www.linkedin.com/">
                        <img src="images/icons/linkedin-svgrepo-com.svg" alt="Phone" class="icon me-2">
                    </a>
                    
                    
                </div>
                <hr>
                <div class="feature-text col text-center">
                <p class="footer-copyrights">&copy; <?php echo date('Y'); ?> Elemental. All rights reserved</p>
            </div>
        </center>
            </div>
    </div>
</footer>

<!-- Custom CSS for footer -->
<style>
    footer {
        background-color: #02204A !important; /* Exact dark blue color as specified */
    }
    footer.container-fluid.bg-light{
    padding: 0 !important;
}
    
    .hover-underline:hover {
        text-decoration: underline !important;
    }
    
    .social-icon-circle {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid white;
        transition: all 0.3s ease;
    }
    
    .social-icon-circle:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
    
    .icon {
        width: 18px;
        height: 18px;
        display: inline-block;
        vertical-align: middle;
    }
    
    .social-icon {
        width: 20px;
        height: 20px;
    }
    
    @media (max-width: 767px) {
        .col-md-6 {
            text-align: center;
        }
        
        .contact-info {
            margin-bottom: 2rem;
        }
    }
    .footer-copyrights{
        color: darkgray;
        font-size: 12px;
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>