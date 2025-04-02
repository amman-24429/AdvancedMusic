<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Digital Media. Advanced Websites</title>
</head>
<body>
    <header>
        <figure>
            <img src="images/lc-mint.png" width="100" alt="Learn Coach Logo.">
        </figure>
        <h1>Digital Media. Advanced Websites</h1>
    </header>
    <nav>
        <label for="navCheck"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="navCheck">         
        <div id="menuItems">
            <p><a href="index.php">Home</a></p>
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
        </div>
    </nav>
    <div class="main" role="main">
        <!-- Sort Form -->
        <form id="sortForm" action="music.php" method="post">
            <select name="sort" id="sort">
                <option value="Artist_Name">Artist</option>
                <option value="Genre">Genre</option>
                <option value="Rating">Rating</option>
                <option value="Title" selected>Title</option>
            </select>
            <input type="submit" value="Sort" class="button">
        </form>

        <h1>Food Group List</h1>

            <!-- php to display songs -->
            <?php
            require_once 'myconnect.php';

            // Create the database query
            $sql = "SELECT FoodGroup.FoodGroup_Name, FoodGroup.Image  FROM FoodGroup";

                  $result = $conn->query($sql);

            echo '<section id="musicList">';

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<article>';

                        echo '<h2>' . $row["FoodGroup_Name"] . '</h2>';
                        echo '<figure class="centre"><img src="' . $row["Image"] . '" height="150" width="150"></figure>';
        

                    echo '</article>';
                }
            }
            echo '</section>';
            ?> 
    </div>
    <footer>
        <p class="centre">&copy; 2025 Amman test </p>
    </footer>
</body>
</html>