<?php
// Initialize page variables
$pageTitle = "About Us | Biotech Company";
$metaDescription = "Learn about our biotech company focused on developing innovative monoclonal antibody therapies for autoimmune and inflammatory diseases.";
?>

    <style>
         .section2p{
            color: #555;
            font-size: 16px !important;
            line-height: 26px;
        }
        
        .section-title {
            font-size: 2.2rem;
            color: #1f2937;
            margin-bottom: 1rem;
            font-weight: bold;
            color: #1a2c41;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            align-items: center;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column-reverse;
            }
            
            .site-title {
                font-size: 2rem;
            }
            
            .site-description {
                font-size: 1rem;
            }
            
            .nav-container {
                flex-direction: column;
            }
            
            .menu {
                margin-top: 1rem;
                justify-content: center;
            }
            
            .menu li:first-child {
                margin-left: 0;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-subtitle {
                font-size: 1.5rem;
            }
        }
    </style>
    

        <!-- About Us Section -->
        <section class="about-section">
            <h2 class="section-title">About us</h2>
            <div class="about-content">
                <div class="about-text">
                    <p class="section2p">
                        We are a biotech company engaged in the discovery and development of monoclonal antibodies (mAbs) as next-generation treatments for autoimmune and other inflammatory diseases.
                    </p>
                    <p class="section2p">
                        Our innovative monoclonal antibody (mAb) development approach focuses on targeting multiple disease areas where effective therapies are unavailable.
                    </p>
                </div>
                <div class="about-image">
                    <img src="./images/about-image.jpg" alt="Our laboratory facility with research equipment and scientists at work">
                </div>
            </div>
        </section>
        
        <!-- Mission Section -->
        