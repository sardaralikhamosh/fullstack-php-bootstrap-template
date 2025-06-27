<?php
// Initialize page variables
$pageTitle = "About Us | Biotech Company";
$metaDescription = "Learn about our biotech company focused on developing innovative monoclonal antibody therapies for autoimmune and inflammatory diseases.";
?>

    <style>
        
         .section2p{
            color: #555;
            font-size: 16px;
            line-height: 26px;
        }
        .team-section {
            margin-bottom: 3rem;
        }
        
        .team-members {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }
        
        .team-member {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            text-align: center;
        }
        
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        
        .team-member h3 {
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        
        .team-member p.position {
            color: #4b5563;
/*            font-style: italic;*/
            margin-bottom: 1rem;
        }
    
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
            
            .section-subtitle {
                font-size: 1.5rem;
            }
        }
        @media screen and (min-width:634px){
            .section-title-career {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            position: relative;
        }
        }
    </style>
    

        <!-- About Us Section -->
        <section class="about-section">
            <h3 class="section-title-career">Company Culture</h3><br>
            <div class="about-content">
                <div class="about-text">
                    <ul>
                        <li><p class="section2p feature-text">
                        <b>Collaboration:</b> We value teamwork and diverse perspectives to drive innovation.
                    </p></li>
                    <li>
                    <p class="section2p">
                        <b class="feature-text">Integrity:</b> We uphold transparency and ethical practices in all actions.
                    </p></li>
                    <li>
                    <p class="section2p">
                        <b>Continuous Learning:</b> We prioritize ongoing education and skill development.
                    </p></li>
                    <li>
                    <p class="feature-text">
                        <b>Resilience:</b> We embrace challenges and adapt to change.
                    </p>
                    </li>
                    <li>
                    <p class="section2p feature-text">
                        <b>Supportive Environment:</b> We foster a workplace where everyone can thrive. Every team member's input and ideas are encouraged.
                    </p></li>
                    </ul>
                </div>
            </div>
        </section>
         <section class="about-section">
            <h3 class="section-title-career">Job listings</h3><br>
            <div class="about-content">
                <div class="about-text">
                    <p class="section2p feature-text">
                        At Elemental Biologics, we're driven by a passion for science and a mission to transform care. We're always looking for talented individuals to join our team. Explore our current opportunities below to learn more and apply.
                    </p>
                </div>
            </div>
        </section>

        