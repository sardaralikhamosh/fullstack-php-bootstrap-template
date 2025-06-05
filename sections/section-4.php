<section class="pipeline-infographic modern-section-spacing bg-white py-5 analytics-container" data-title="Product Pipeline as of April 29, 2025">
    <div class="container-fluid px-0">
        <div class="container">
            <div class="eyebrow text-uppercase text-primary-custom4 mb-2 fw-bold small">
                Pipeline Snapshot as of April 29, 2025
            </div>
            
            <!-- Full-width pipeline cards container -->
            <div class="pipeline-cards-container">
                <div class="row g-3 flex-nowrap overflow-auto pb-3">
                    <!-- Phase 1 -->
                    <div class="col-auto">
                        <a href="/about.php" 
                           class="pipeline-card text-center p-3 rounded-3 d-block text-decoration-none"
                           data-pfa-click="" sc:linkname="product pipeline as of [date]:our science: pharmaceutical development:27phase 1">
                            <div class="count display-4 fw-bold text-primary-custom4">47</div>
                            <div class="label small fw-medium text-primary-custom4">Phase 1</div>
                        </a>
                    </div>
                    
                    <!-- Phase 2 -->
                    <div class="col-auto">
                        <a href="/about.php" 
                           class="pipeline-card text-center p-3 rounded-3 d-block text-decoration-none"
                           data-pfa-click="" sc:linkname="product pipeline as of [date]:our science: pharmaceutical development:11phase 2">
                            <div class="count display-4 fw-bold text-primary-custom4">28</div>
                            <div class="label small fw-medium text-primary-custom4">Phase 2</div>
                        </a>
                    </div>
                    
                    <!-- Phase 3 -->
                    <div class="col-auto">
                        <a href="/about.php" 
                           class="pipeline-card text-center p-3 rounded-3 d-block text-decoration-none"
                           data-pfa-click="" sc:linkname="product pipeline as of [date]:our science: pharmaceutical development:7phase 3">
                            <div class="count display-4 fw-bold text-primary-custom4">30</div>
                            <div class="label small fw-medium text-primary-custom4">Phase 3</div>
                        </a>
                    </div>
                    
                    <!-- Registration -->
                    <div class="col-auto">
                        <a href="/about.php" 
                           class="pipeline-card text-center p-3 rounded-3 d-block text-decoration-none"
                           data-pfa-click="" sc:linkname="product pipeline as of [date]:our science: pharmaceutical development:0registration">
                            <div class="count display-4 fw-bold text-primary-custom4">3</div>
                            <div class="label small fw-medium text-primary-custom4">Registration</div>
                        </a>
                    </div>
                    
                    <!-- Total -->
                    <div class="col-auto">
                        <a href="/about.php" 
                           class="pipeline-card total-card text-center p-3 rounded-3 d-block text-decoration-none bg-primary-custom4 text-white"
                           data-pfa-click="" sc:linkname="product pipeline as of [date]:our science: pharmaceutical development:00 total">
                            <div class="count display-4 fw-bold">108</div>
                            <div class="label small fw-medium text-primary-custom4white">Total Pipeline</div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="cta-wrapper mt-5 d-flex flex-wrap gap-3">
                <a href="/about.php" 
                   class="btn btn-primary-custom4 px-4 py-2 rounded-1 fw-medium text-primary-custom4"
                   data-pfa-click="" sc:linkname="button:our science: pharmaceutical development:explore the product pipeline">
                    Explore the Product Pipeline
                </a>
            </div>
        </div>
    </div>
</section>

<style>
a.pipeline-card.total-card.text-center.p-3.rounded-3.d-block.text-decoration-none.bg-primary-custom4.text-white {
    background: #02204a;
}
text-primary-custom4white{
    color: #fff;
}
    .bg-primary-custom4{
        background-color : #02204a;
    }
    .text-primary-custom4{
         color: #02204a;
    }
    .btn-primary-custom4,
    .btn-primary-custom4:hover {
        color: #02204a;
        border-color: #02204a;
    }
    .pipeline-infographic {
        background-color: #f8fafc;
    }
    
    .pipeline-cards-container {
        width: 100%;
    }
    
    .pipeline-card {
        background-color: white;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        min-width: 200px;
    }
    
    .pipeline-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        border-color: #cbd5e1;
    }
    
    .total-card {
        border: none !important;
        min-width: 250px;
    }
    
    .total-card:hover {
        background-color: #1e40af !important;
    }
    
    .eyebrow {
        letter-spacing: 1px;
        font-size: 0.75rem;
    }
    
    .count {
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .label {
        letter-spacing: 0.5px;
    }
    
    /* Hide scrollbar but keep functionality */
    .overflow-auto::-webkit-scrollbar {
        display: none;
    }
    
    .overflow-auto {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    
    @media (max-width: 767.98px) {
        .count {
            font-size: 2rem !important;
        }
        
        .pipeline-card {
            min-width: 160px;
        }
        
        .total-card {
            min-width: 200px;
        }
    }
    
    @media (max-width: 480px) {
        .pipeline-card {
            min-width: 140px;
        }
        
        .total-card {
            min-width: 180px;
        }
        
        .count {
            font-size: 1.75rem !important;
        }
    }
</style>
