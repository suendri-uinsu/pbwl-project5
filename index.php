<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Mr.Sue">

      <title>Eid Mubarak Blog | PBWL Project5</title>
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <div class="container">
            <header>
                  <img src="layouts/assets/img/header.jpg" alt="">
            </header>

            <nav>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?hal=kat_tampil">Kategori</a></li>
                  </ul>
            </nav>

            <main>
                  <section>
                        <?php
                        if (isset($_GET['hal'])) {
                              require $_GET['hal'] . ".php";
                        } else {
                              require "main.php";
                        }
                        ?>
                  </section>
            </main>

            <footer>
                  Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Mr. Sue
            </footer>
      </div>

</body>

</html>