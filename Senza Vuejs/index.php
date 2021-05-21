<?php
    include '../database/database.php';
    // var_dump($database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Php Ajax Dischi</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<!-- BODY -->
<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="logo">
        </div>
    </header>
    <!-- HEADER END -->

    <!-- MAIN -->
    <main>
        <!-- Container -->
        <div class="disc_container">
            <!-- Ciclo php per polpolare ogni singolo cd -->
            <?php foreach($database as $data) { ?>
                <!-- Singolo disco -->
                <div class="disc">
                    <div class="album">
                        <img src= <?php echo $data['poster'];?> alt= <?php echo $data['title'];?> >
                    </div>
                    <div class="title">
                        <?php echo $data['title'];?>
                    </div>
                    <div class="author">
                        <?php echo $data['author'];?>
                    </div>
                    <div class="year">
                        <?php echo $data['year'];?>
                    </div>
                </div>
                <!-- Singolo disco End -->
            <?php } ?>
            <!-- Fine ciclo php -->
        </div>
        <!-- Container End -->
    </main>
    <!-- MAIN END -->
</body>
<!-- BODY END -->
</html>