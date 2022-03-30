<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <nav>
        <div class="img_profile">
            <img src="./images/photo-avatar-profil.png" alt="avatar" id ="img_prof">
        </div>  
        <div class="navbar">
           <div> <a href="#home">Home</a></div>
            
            <div class="dropdown">
                <button class="dropbtn">Gestion 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                        <a href="./Etudiant.php">Etudiant</a>
                        <a href="./Enseignant.php">Enseignant</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Creation 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                        <a href="./inscription_etud.php">Etudiant</a>
                        <a href="./inscription_prof.php">Enseignant</a>
                </div>
            </div> 
        </div>

    </nav>

    
</body>
<script src="/javaScript/admi"></script>
</html>