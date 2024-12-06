<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI BUD</title>
    <link rel="stylesheet" href="css/badui.css">
</head>
<?php
$nomsite = "IA BUD";
include dirname(__FILE__) . "/inc/footer.php";
?>
<body>
    <h1>Appuyez sur les flèches gauche et droite</h1>
    <div id="message" class="basique">Aucune touche pressée</div>

    <script>
        document.addEventListener('keydown', (event) => {
            const message = document.getElementById('message');

            if (event.key === 'ArrowLeft') {
                message.textContent = 'Flèche gauche appuyée';
            } else if (event.key === 'ArrowRight') {
                message.textContent = 'Flèche droite appuyée';
            } else {
                message.textContent = 'Appuyez sur une flèche';
            }
        });
    </script>
</body>

<?php

include dirname(__FILE__) . "/inc/header.php";

?>