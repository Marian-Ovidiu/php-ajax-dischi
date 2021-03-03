<?php
  require_once __DIR__ . '/../database/database.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1</title>
    <link rel="stylesheet" href="../dist/app.css">
</head>
<body>
  <header>

  </header>
  <main>
    <div class="container">
    <?php foreach ($dischi as $disco) {?>
      <div class="disco">
          <div class="cover">
            <img src="<?php echo $disco['poster']?>" alt="">
          </div>
          <div class="title">
            <span><?php echo $disco['title']?></span>
          </div>
          <div class="author">
            <span><?php  echo $disco['author']?></span>
          </div>
          <div class="year">
            <span><?php  echo $disco['year']?></span>
          </div>
      </div>
         <?php } ?>
    </div>
  </main>
</body>
</html>
