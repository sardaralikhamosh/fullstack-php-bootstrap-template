    <style>
        .feature-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        
        .feature-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        
        .feature-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        
        .feature-desc {
            color: #7f8c8d;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 50px;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }
        
        @media (max-width: 768px) {
            .feature-card {
                margin-bottom: 30px;
            }
        }
    </style>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Science & Technology</h2>
                <p class="lead text-muted">Yor's satasfaction is our success!</p>
            </div>
            
            <div class="row g-4">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <img src="./images/sections/section-1-i1.jpg" class="feature-img">
                        <div class="feature-content">
                            <h3 class="feature-title">A Unique And Transformative Therapeutic Antibody Platform</h3>
                            <p class="feature-desc">Elemental is engaged in the discovery and development of mAbs as next-generation treatments for multiple autoimmune & gastrointestinal inflammatory diseases.</p>
                            <a href="/contact.php" class="btn btn-primary align-self-start">Contact Us</a>
                        </div>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <img src="./images/sections/section-1-i2.jpg" alt="Development Service" class="feature-img">
                        <div class="feature-content">
                            <h3 class="feature-title">Transforming Immune Pathways Into Multi-Disease Solutions</h3>
                            <p class="feature-desc">Elemental Biologics creates innovative treatments that target shared immune pathways to address multiple diseases with unmet medical needs, helping more patients while reducing risk and improving development efficiency.</p>
                            <a href="/contact.php" class="btn btn-primary align-self-start">Contact Us</a>
                        </div>
                    </div>
                </div>
                
                <!-- Column 3 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <img src="./images/sections/section-1-i3.jpg" alt="Marketing Service" class="feature-img">
                        <div class="feature-content">
                            <h3 class="feature-title">Extensive Pipeline Of Assets Supported By Strong Data</h3>
                            <p class="feature-desc">Increasingly diversified pipeline of 5 advanced program assets with strategically commercially viable targets demonstrating the strength of our pre-clinical mAb discovery and development platform.</p>
                            <a href="/contact.php" class="btn btn-primary align-self-start">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>