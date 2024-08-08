<?php
// Include database configuration
include('../Database/dbconfig.php');

// Check if user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: " . ROOT_URL . "login.php");
    exit();
}

// Fetch user's reviews from the database
$user_id = $_SESSION['user_id'];
$sql = "SELECT ur.review_id, r.name, r.content FROM Reviews r
        JOIN UserReviews ur ON r.id = ur.review_id
        WHERE ur.user_id = $user_id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Profile.css">
    <title>Profile</title>

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
            <div class="banner">
                    <img src="../Images/2560px-John_Everett_Millais_-_Ophelia_-_Google_Art_Project 1.jpg" >
            </div>

            <div class="container">
                <div class="row">
                    <div class="col profileName">
                    <h1 class="text-start">
        <?php
        // Check if username is set in the session
        if (isset($_SESSION['username'])) {
            // Display the username in the welcome message
            echo htmlspecialchars($_SESSION['username']) . "'s Profile";
        } else {
            // Default welcome message
            echo "John Doe's Profile";
        }
        ?>
    </h1>
                    </div>
                    <div class="col profileWriteButton">
                    <button type="button" class="btn btn-primary btn-lg float-end" onclick="window.location.href = 'Write.php';">Write</button>
                    </div>
                </div>
            </div>

            <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th class="columnHead">Name</th>
                        <th class="columnHead">Content</th>
                        <th class="columnHead">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo strlen($row['content']) > 40 ? substr($row['content'], 0, 37) . '...' : $row['content']; ?></td>

                            <td>
                                <!-- Action buttons -->
                                <button class="btn btn-primary me-1 delete-button " data-review-id="<?php echo $row['review_id']; ?>">Delete</button>
                                <a href="Edit.php?id=<?php echo $row['review_id']; ?>" class="btn btn-primary edit-button">Edit</a>

                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
            <span class="log-out-bt" onclick="window.location.href = 'Login.php';"> Log Out</span>
        </main>
       <!--Footer-->
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
            </script>
            
        
        
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

                $(document).ready(function() {
    $('.delete-button').click(function() {
        var button = $(this);
        const reviewId = button.data('review-id');
        $.ajax({
            type: 'POST',
            url: 'Delete.php',
            data: { id: reviewId, table: 'userreviews' }, // Assuming the table name is 'userreviews'
        }).done(function(response) {
            console.log(response); // Log the response from the server
            response = JSON.parse(response); // Parse the JSON response
            if (response.success) {
                button.closest('tr').remove();
                alert('Review deleted successfully.');
            } else {
                alert('Failed to delete review. Error: ' + response.error);
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText); // Log the detailed error message
            alert('An error occurred while processing your request.');
        });
    });
});




        
              
        
            
          </script>
        
</body>
</html>
