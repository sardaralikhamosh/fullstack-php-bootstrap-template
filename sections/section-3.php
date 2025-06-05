<style>
        .approach-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        .approach-card {
            height: 100%;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .approach-card:hover {
            transform: translateY(-10px);
        }
        .approach-img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            padding: 30px;
        }
        .section-title {
            margin-bottom: 60px;
            font-weight: 700;
            color: #2c3e50;
        }
        .card-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .card-text {
            color: #7f8c8d;
        }
        .number-badge {
            background-color: #3498db;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
    <section class="approach-section">
        <div class="container">
            <h2 class="text-center section-title">Our Approach</h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="approach-card">
                        <img src="https://via.placeholder.com/600x400?text=Discovery" class="card-img-top approach-img" alt="Targeted Discovery">
                        <div class="card-body">
                            <div class="number-badge">1</div>
                            <h5 class="card-title">Targeted Discovery</h5>
                            <p class="card-text">We identify key immune pathways involved in multiple diseases, enabling cross-indication therapies with a single antibody.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="approach-card">
                        <img src="https://via.placeholder.com/600x400?text=Engineering" class="card-img-top approach-img" alt="Advanced Antibody Engineering">
                        <div class="card-body">
                            <div class="number-badge">2</div>
                            <h5 class="card-title">Advanced Antibody Engineering</h5>
                            <p class="card-text">We use state-of-the-art techniques to design and optimize mAbs for maximum precision, potency, and safety.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="approach-card">
                        <img src="https://via.placeholder.com/600x400?text=Development" class="card-img-top approach-img" alt="Translational Development">
                        <div class="card-body">
                            <div class="number-badge">3</div>
                            <h5 class="card-title">Translational Development</h5>
                            <p class="card-text">We advance promising candidates through rigorous preclinical models ensuring strong efficacy and safety, advancing candidates with real-world impact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>