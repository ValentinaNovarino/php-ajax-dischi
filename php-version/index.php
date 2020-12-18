<?php include '../dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <link rel="stylesheet" href="../dist/app.css">
        <meta charset="utf-8">
        <title>PHP version</title>
    </head>
    <body>
        <header class="flex">
            <div class="container">
                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="">
            </div>
        </header>
        <main>
            <div class="container">
                <div class="filter">
                    <select id="filter" name="">
                        <option value="">Generi</option>
                        <?php foreach ($genres as $genre) { ?>
                            <option value="<?php echo $genre  ?>"><?php echo $genre ?><option>
                            <?php
                        }?>
                    </select>
                </div>
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
        <!-- HENDLEBARS -->
        <script id="dischi-template" type="text/x-handlebars-template">
            <div class="card">
                <img src="{{ poster }}" alt="{{ title }}">
                <h3 class="title">
                    {{ title }}
                </h3>
                <h4 class="author">
                    {{ author }}
                </h4>
                <p class="year">
                    {{ year }}
                </p>
            </div>
        </script>

        <script src="../dist/app.js" charset="utf-8"></script>
    </body>
</html>
