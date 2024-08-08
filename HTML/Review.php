<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Reveiw.css">
    <title>Reveiw</title>


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
                  <a class="nav-link" href="Review.php">Blog</a>
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
                    <img src="../Images/reveiws-banner.svg">
            </div>

            <div class="container">
                <table style="width: 100%; margin-top: 5%;">
                    <tr>
                        <td style="width: 60%; display:flex; margin-left: 30%;">
                        <form id="searchForm" class="d-flex">
                            <input id="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                            <button id="searchBtn" class="btn btn-primary bt-style-filter" type="button" style="width: 70px; height: 38px;">Search</button>
                        </form>
                        </td>
                        <td style="width: 15%;">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle bt-style-filter" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100px; height: 38px;">
                                    Filters
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#" data-epoch="Gothic">Gothic</a></li>
                                    <li><a class="dropdown-item" href="#" data-epoch="Renaissance">Renaissance</a></li>
                                    <li><a class="dropdown-item" href="#" data-epoch="Baroque">Baroque</a></li>
                                    <li><a class="dropdown-item" href="#" data-epoch="Neoclassicism">Neoclassicism</a></li>
                                    <li><a class="dropdown-item" href="#" data-epoch="Realism">Realism</a></li>
                                    <li><a class="dropdown-item" href="#" data-epoch="Impressionism">Impressionism</a></li>
                                    <li><a class="dropdown-item" href="#" data-epoch="Post-Impressionism">Post-Impressionism</a></li>
                                </ul>
                            </div>
                        </td>
                        <td style="width: 15%;">
                        <button class="btn btn-primary bt-style-filter" id="sortButton" type="button" style="width: 100px; height: 38px;">
                                    Sort
                                </button>
                        </td>

                        <td style="width: 15%;">
                <button class="btn btn-primary bt-style-filter" id="resetButton" type="button" style="width: 100px; height: 38px;">
                    Refresh
                </button>
            </td>

                    </tr>
                </table>
            </div>

        <!--Thumbnail - Browse-->
        <!-- Reviews Container -->
        <div class="reviews" id='searchResults'>
        
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
    
    
          $(document).ready(function() {
    function performSearch() {
        var searchQuery = $('#searchInput').val();

        $.ajax({
            url: 'search.php', 
            type: 'POST',
            data: { search: searchQuery },
            success: function(response) {
                $('#searchResults').html(response);
            }
        });
    }

    // Trigger search on button click
    $('#searchBtn').click(function() {
        performSearch();
    });

    // Trigger search on input change
    $('#searchInput').on('keyup', function() {
        performSearch();
    });

    // Trigger initial search on page load
    $('#searchInput').trigger('keyup');
});

        
    
        $(document).ready(function() {
    // Event listener for dropdown item click
    $('.dropdown-item').on('click', function(event) {
        event.preventDefault(); // Prevent default action
        
        var epoch = $(this).data('epoch');

        $.ajax({
            url: 'Filtering.php',
            type: 'POST',
            data: { epoch: epoch },
            success: function(response) {
                $('#searchResults').html(response);
            }
        });
    });
});



$(document).ready(function() {
    console.log("Document ready!");

    // Initialize sorting direction variable
    var sortDirection = 'asc'; // Assuming ascending order initially

    $('#sortButton').on('click', function(event) {
        console.log("Sort button clicked!");

        event.preventDefault();

        // Toggle sorting direction between 'asc' and 'desc'
        sortDirection = (sortDirection === 'asc') ? 'desc' : 'asc';

        console.log('Sorting direction:', sortDirection);

        $.ajax({
            url: 'Sorting.php',
            type: 'POST',
            data: { sort: 'name-' + sortDirection },
            success: function(response) {
                $('#searchResults').html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

$(document).ready(function() {
    // Event listener for reset button click
    $('#resetButton').on('click', function(event) {
        event.preventDefault(); // Prevent default action

        // Perform actions to reset filters, search, or sort
        // For example, you can reload the original content of the reviews container
        $('#searchInput').val(''); // Reset search input value
        $('#searchResults').load('Refresh.php'); // Load original content from PHP script
        
        // Additionally, if you have applied sorting, you may need to reset it as well
        // Example: sortDirection = 'asc';
    });
});

        
      </script>
</body>
</html>