<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enomondia - Therapeutic Antibody Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
<header>
    <?php include "header.php"; ?>
</header>

<!-- Main Content -->
    <main class="container-fluid">
        <?php include "slider.php"; ?>
        <?php #include "sections/section-1.php"; ?>
        
   
        <section class="container-fluid">
            <!-- 1 -->
              <?php include "sections/section-7.php"; ?>
              <!-- 2 -->
               <?php include('section-2.php'); ?>
               <!--3-->
                <?php include "sections/section-8.php"; ?>
                <!--4-->
                 <?php include 'sections/home-section-3.php';?>
                 <!--5-->
                 <?php include 'sections/home-section-2.php';?>
                    <!--6-->
                 <?php include('section-3.php'); ?>
               
            <?php include'sections/home-welcome-section.php';?> 
            <!--<?php #include 'sections/home-section-1.php';?>-->
            
        </section>
        <?php include "sections/section-6.php"; ?>

    </main>

    <!-- Footer -->
    <footer class=" container-fluid bg-light">
     <?php include "footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>