<?php
// Include database configuration
include('../Database/dbconfig.php');

// Check if sorting option is set
if (isset($_POST['sort'])) {
    // Extract sorting direction from the sorting option
    $sort_parts = explode('-', $_POST['sort']);
    $sort_field = $sort_parts[0];
    $sort_direction = $sort_parts[1];

    // Construct SQL query to fetch reviews sorted alphabetically
    $sql = "SELECT * FROM reviews ORDER BY $sort_field $sort_direction";

    // Fetch sorted reviews based on the constructed SQL query
    $result = $conn->query($sql);

    // Display each sorted review
    while ($row = $result->fetch_assoc()) {
        echo '<h1 style="text-align: left; padding-bottom: 5vh;">' . $row['name'] . '</h1>';
        echo '<p class="review-paragraph">';
        echo substr($row['content'], 0, 200) . '...'; // Limit content to 200 characters
        echo '<br><br>';
        echo '<a href="ReviewOne.php?id=' . $row['id'] . '" class="link">Show More -></a>';
        echo '</p>';
    }
} else {
    // Handle invalid or missing sorting option
    echo "Invalid sorting option.";
}
?>
