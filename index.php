<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Serpent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- Nav tabs -->
        <ul
            class="nav nav-tabs"
            id="navId"
            role="tablist"
        >
            <li class="nav-item">
                <a
                    href="index.php"
                    class="nav-link active"
                    data-bs-toggle="tab"
                    aria-current="page"
                    >acceuil</a
                >
            </li>
           
            <li class="nav-item" role="presentation">
                <a href="php/contact.php" class="nav-link" data-bs-toggle="tab"
                    >contact</a
                >
            </li>
            
            <li class="nav-item" role="presentation">
                <a href="php/apropos.php" class="nav-link" data-bs-toggle="tab"
                    >Apropos</a
                >
            </li>
        </ul>
        
      
        
        <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
        <script>
            var triggerEl = document.querySelector("#navId a");
            bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
        </script>
        
    </header>
    <h1>SNAKE GAMES</h1>
    <canvas id="gameCanvas"></canvas>
    
    <div class="controls">
        <button class="btn" id="left">⬅️</button>
        <button class="btn" id="up">⬆️</button>
        <button class="btn" id="down">⬇️</button>
        <button class="btn" id="right">➡️</button>
    </div>

   <script src="hhh.js"></script>
</body>

</html>
