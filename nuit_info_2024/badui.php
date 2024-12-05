<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détection des Flèches</title>
    <link rel="stylesheet" href="badui.css">
</head>
<body>
    <h1>Appuyez sur les flèches gauche et droite</h1>
    <div id="message">Aucune touche pressée</div>

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
</html>
