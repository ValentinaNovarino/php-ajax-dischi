<?php include 'dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../dist/app.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header class="flex">
                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="">
        </header>
        <main>
            <div class="container">
                <div class="card-container">
                    <?php foreach ($dischi as $disco) { ?>
                        <div class="card">
                            <img src="<?php echo $disco['poster'] ?>">
                            <h3 class="album"><?php echo $disco['title']  ?></h3>
                            <h4 class="artist"><?php echo $disco['author'] ?></h4>
                            <p class="year"><?php echo $disco['year'] ?></p>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
        </main>

    </body>
</html>
