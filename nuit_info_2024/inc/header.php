<?php
$list_pages = array(
  'index.php' => 'Acceuil',
  'services.php' => 'Services',
  'apropos.php' => 'À propos',
  'contact.php' => 'Contact',
);
?>

<div class="navbar">
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