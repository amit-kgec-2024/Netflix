<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Unlimited movies, TV shows, and more.</h1>
            <p>Watch anywhere. Cancel anytime.</p>
            <a href="#" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <section class="content">
        <h2>Popular on Netflix</h2>
        <div class="movie-grid">
            <?php
            $movies = [
                ["img" => "movie1.jpg", "title" => "Movie Title 1"],
                ["img" => "movie2.jpg", "title" => "Movie Title 2"],
                ["img" => "movie3.jpg", "title" => "Movie Title 3"],
                ["img" => "movie4.jpg", "title" => "Movie Title 4"]
            ];
            foreach ($movies as $movie) {
                echo '<div class="movie">';
                echo '<img src="' . $movie["img"] . '" alt="' . $movie["title"] . '">';
                echo '<h3>' . $movie["title"] . '</h3>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>