<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <p>Nous les finaliste de l'uac </p>
    <p>Nous avons travers </p>
</body>
</html>