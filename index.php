<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        require_once (__DIR__ . "/models/movies.php");
        require_once (__DIR__ . "/models/db.php");
    ?>
    <title>Movies php</title>
</head>
<body>
    <h1>Movie List</h1>

    <ul>
        <?php
        foreach ($movies as $movie){?>
            <li>
                <?php echo $movie->displayMovieInfo(); ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>