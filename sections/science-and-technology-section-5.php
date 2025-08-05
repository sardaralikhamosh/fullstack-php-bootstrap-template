<?php
/**
 * About Us Section Template
 * 
 * This template displays the "About Us" section with an angled image
 * and company description.
 */
?>

<section class="about-section">
    <div class="container-fluid p-0">
        <div class="about-container">
            <div class="row g-0">
                <!-- Image Column with Angle -->
                <div class="col-lg-7 col-md-12 about-image-container">
                    <div class="about-image displaynon-onmobile">
                        <img src="./images/new-image-2.png" alt="Elemental Biologics Laboratory" class="img-fluid ">
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="col-lg-5 col-md-12 about-content-wrapper">
                    <div class="about-content">
                        <h2>Translational Development</h2>
                        <p class="mb-4 feature-text">
                            We advance promising candidates through rigorous preclinical models advancing candidates with real-world impact.
                        </p>
                    </div>
                </div>

                <!-- this is only for moble  -->
                 <div class="col-lg-7 col-md-12 about-image-container">
                    <div class="about-image <div class="col-lg-7 col-md-12 about-image-container">
                    <div class="about-image displaynon-laptop">
                        <img src="./images/new-image-2.png" alt="Elemental Biologics Laboratory" class="img-fluid ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    section.container-fluid{
        padding: 0;
    }
    .about-section {
        overflow: hidden;
        position: relative;
        background-color: #fff;
    }
    
    .about-container {
        position: relative;
    }
    
    .about-image-container {
        position: relative;
        overflow: hidden;
        height: 100%;
    }
    
    .about-image {
        width: 100%;
        height: 100%;
/*        clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);*/
        position: relative;
    }
    
    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .about-content-wrapper {
        display: flex;
        align-items: center;
    }
    
    .about-content {
        padding: 4rem 3rem 4rem 4rem;
    }
    
    .about-content h2 {
        color: #0a2240;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }
    
    .about-content p {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
    }
    
    .learn-more-btn {
        background-color: #0a2240;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 0;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }
    
    .learn-more-btn:hover {
        background-color: #051830;
    }
    
    @media (max-width: 991px) {
        .about-image {
            clip-path: none;
            height: 400px;
        }
        
        .about-content {
            padding: 3rem 2rem;
        }
        
        .about-content h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
    }
    
    @media (max-width: 767px) {
        .displaynon-onmobile{
            display: none;
            paddin-bottom: 20px;
        }
        .about-image {
            height: 300px;
        }
        
        .about-content {
            padding: 2rem 1.5rem;
        }
        
        .about-content h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
    }
    @media screen and (min-width:768px){
        .displaynon-laptop{
            display:none;
        }
    }
        
    }
</style>