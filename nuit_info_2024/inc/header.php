<?php
$list_pages = array(
  'index.php' => 'Accueil',
  'badui.php' => 'Bad UI',
  'comparaison.php' => 'Comparaison',
  'jeu.php' => 'Jeu',
  'apropos.php' => 'A propos',
);
?>

<div class="navbar" id ="navbar">
  <div class="logo">
    <a href="index.php"><img src="img/1.png" alt="Description de l'image"></a>
  </div>
  <div class="nav-links">
    <ul>
      <?php
        foreach ($list_pages as $file => $title) {
          ?>
            <li><a href="<?= $file; ?>"><?= $title ?></a></li>
          <?php
        }
      ?>
    </ul>
  </div>
</div>