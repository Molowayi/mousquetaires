<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <header>
        <nav>
            <ul>
                <li><a href="<?= $href_accueil ?>"><?=$accueil ?></a></li>
                <li><a href="<?= $href_apropos ?>"><?=$apropos ?></a></li>
                <li><a href="livres.php"></a></li>
                <li><a href="actualites.php"></a></li>
                <li><a href="inscription.php"></a></li>
                <li><a href="contact.php"></a></li>
            </ul>
        </nav>
    </header>
    <main>
      <?= $content; ?>
    </main>
    <footer>&#169;</footer>
  </body>
</html>