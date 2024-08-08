<?php
include('../Database/dbconfig.php');

// Check if review ID is provided in the URL
if (!isset($_GET['id'])) {
    // Redirect if review ID is not provided
    header("Location: Profile.php");
    exit();
}

$review_id = $_GET['id'];

// Fetch review data from the database using the provided review ID
$sql = "SELECT name, art_name, content FROM Reviews WHERE id = $review_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $art_name = $row['art_name'];
    $content = $row['content'];
} else {
    // Redirect if review ID does not exist
    header("Location: Profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Edit.css">
    <title>Edit Review</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link rel="icon" href=
"../Images/Title_logo.png"
          type="image/x-icon">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="../images/Logo.svg" width="200" height="70" alt="" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Browse.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Review.php">Write</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
        <main>
        <!--Banner-->
            <div class="banner">
                    <img src="../Images/write-banner.svg " >
            </div>
            <div class="arrow-container">
                <i onclick="myFunction()" class="arrow down"></i>
            </div>

            <script>
                function myFunction() {
                  const element = document.getElementById("content");
                  element.scrollIntoView();
                }
                </script>

        <!--Thumbnail - Browse-->
        <div class="reviews" id="content">
            <h1 style="text-align: center; margin-bottom: 3%; margin-top:1%; font-size:80px">Write</h1>
            <form action="Update.php" method="post" style="font-family: Chomsky; font-size: 40px; width: 100%;">
    <input type="hidden" name="review_id" value="<?php echo $review_id; ?>">
    <!-- Add a hidden input field to capture the selected painting name -->
    <input type="hidden" name="art_name" id="selectedPainting" value="<?php echo $art_name; ?>">
    <div class="row mb-3">
        <div class="col">
            <label style="text-align: left;">Title:</label><br>
            <input type="text" style="height: 5vh; width: 100%;" name="name" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="col">
            <label style="text-align: left;">Painting:</label><br>
            <div class="input-group">
                <!-- Dropdown menu -->
                <button id="paintingButton" class="form-control" style="height: 5vh; background: #D9D9D9; border: none; border-radius: 18px;" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $art_name; ?></button>
                <!-- Dropdown menu options -->
                <ul class="dropdown-menu" aria-labelledby="paintingButton" style="max-height: 200px; overflow-y: auto;">
                    <?php
                    // Array of painting options
                    $paintings = array(
                        "American Gothic",
                        "Birth of Venus",
                        "Bonjour, Monsieur Courbet",
                        "Book of Kells",
                        "Creation of Adam",
                        "Impression, Sunrise",
                        "Joan of Arc at the Coronation of Charles VII",
                        "Las Meninas",
                        "Luncheon of the Boating Party",
                        "Mona Lisa",
                        "Oath of the Horatii",
                        "October",
                        "Parnassus",
                        "Self-portrait with Straw Hat",
                        "Starry Night",
                        "The Artist's Garden at Giverny",
                        "The Cyclops",
                        "The Death of General Wolfe",
                        "The Embarkation of the Queen of Sheba",
                        "The Hours of Jeanne d'Évreux",
                        "The Last Supper",
                        "The Martyrdom of Saint Serapion",
                        "The Night Watch",
                        "The Widower",
                        "Wheat Field with Cypresses"
                    );
                    
                    // Populate dropdown options dynamically
                    foreach ($paintings as $painting) {
                        echo "<li><a class='dropdown-item' href='#'>$painting</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <label>Body:</label><br>
    <input type="text" name="content" style="height: 35vh;" class="form-control" value="<?php echo $content; ?>"><br><br>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary bt-style-write">Update</button>
        <a href="Profile.php" class="btn btn-dark" style="margin-left: 10px; display: flex; align-items: center; padding: 0 1rem;">Cancel</a>
    </div>
</form>

            
        </div>
        
        </main>
       <!--Footer-->
     <!-- Footer -->
<footer class="footer-01">
  
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
      <h2 class="footer-heading">About</h2>
      <p style="text-align: justify;
      padding-right: 7%;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
      <ul class="ftco-footer-social p-0">
        <i class="fab fa-facebook social-icon"></i>
        <i class="fab fa-twitter social-icon"></i>
        <i class="fab fa-instagram social-icon"></i>
      </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
      <h2 class="footer-heading">Latest Posts</h2>
      <div class="block-21 mb-4 d-flex">
      <a class="img mr-4 rounded" style="background-image: url(../Images/post1.svg);"></a>
      <div class="text">
      <h3 class="heading" style="text-align: justify; padding-right: 5%;"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
      <div class="meta">
      <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
      </div>
      </div>
      </div>
      <div class="block-21 mb-4 d-flex">
      <a class="img mr-4 rounded" style="background-image: url(../Images/post2.svg);"></a>
      <div class="text">
      <h3 class="heading" style="text-align: justify; padding-right: 5%;"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
      <div class="meta">
      <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
      </div>
      </div>
      </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
      <h2 class="footer-heading">Quick Links</h2>
      <ul class="list-unstyled hovering-list-quick-links">
      <li><a href="index.html" class="py-2 d-block">Home</a></li>
      <li><a href="About.html" class="py-2 d-block">About</a></li>
      <li><a href="Browse.html" class="py-2 d-block">Gallery</a></li>
      <li><a href="Museums.html" class="py-2 d-block">Museums</a></li>
      <li><a href="Review.php" class="py-2 d-block">Blog</a></li>
      <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
      </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
      <h2 class="footer-heading">Have a Questions?</h2>
      <div class="block-23 mb-3">
      <ul style="list-style-type:none;">
      <li ><span class="text" style="color: #fff;">92 Harrison Ave, New York City, NY 10024, USA</span></li>
      <li ><a href="#"></span><span class="text">+2 392 3929 210</span></a></li> 
      <li ><a href="#"></span><span class="text">info@yourdomain.com</span></a></li>
      </ul>
      </div>
      </div>
      </div>
      <div class="row mt-5">
      <div class="col-md-12 text-center">
      <p class="copyright">
      Copyright © 2024 All rights reserved 
      </p>
      </div>
      </div>
      </div>
      
    </footer>
        <!-- Bootstrap JavaScript (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    
    
        <script>
          // Add sticky class to navbar on scroll
          window.addEventListener('scroll', function() {
              const navbar = document.querySelector('.navbar');
              if (window.scrollY > 0) {
                  navbar.classList.add('sticky');
              } else {
                  navbar.classList.remove('sticky');
              }
          });
    
    
          document.querySelectorAll('.dropdown-menu a').forEach(item => {
        item.addEventListener('click', event => {
            const selectedPainting = event.target.innerText;
            document.getElementById('paintingButton').innerText = selectedPainting;
            document.getElementById('selectedPainting').value = selectedPainting; // Set hidden input field value
            event.preventDefault(); // Prevent default action
        });
    });
        
      </script>
</body>
</html>
