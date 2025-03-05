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
                    href="../index.php"
                    class="nav-link active"
                    data-bs-toggle="tab"
                    aria-current="page"
                    >acceuil</a
                >
            </li>
           
            <li class="nav-item" role="presentation">
                <a href="contact.php" class="nav-link" data-bs-toggle="tab"
                    >contact</a
                >
            </li>
            
        </ul>
        
      
        
        <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
        <script>
            var triggerEl = document.querySelector("#navId a");
            bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
        </script>
        
    </header>
    <center>
        <p>Nous sommes les etudiants de l3 </p>
        <p>09866425</p>
    </center>
</body>
</html>