<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container">
        
        <div class="right">
        <fieldset class="field">
                <form action="creation_prof.php" method="post">
                <input type="file" name="profil" id="file" class ="file">
                <label for="file"> <center> <img src="./images/photo-avatar-profil.png" alt="avatar" class="avatar" ></center></label>
               
                <div class="group_input">
                        <div class="position_lab">
                        <input type="text" class="form__input" name="nom" id="nom" >
                        <label for="nom" class="form__label info"> Nom </label>
                            
                        </div>
                        <div class="position_lab">
                        <input type="text"class="form__input" name="prenom" id="prenom">
                        <label for="prenom " class="form__label info">Prenom</label>
                            
                        </div>
                        <div class="position_lab">
                        <input type="text" name="cin" class="form__input" id="cin" >
                            <label for="cin" class="form__label info"> Cin</label>
                            
                        </div>
                        <div class="position_lab">
                            <input type="text" name="email" class="form__input" id="email" >
                            <label for="email" class="form__label info"> Email</label>
                         
                        </div>

                        <div class="position_lab">
                        <input class="form__input" type="text" name="password" id="password" >
                            <label for="password" class=" form__label"> Password</label>
                            
                        </div>
                        <div class="content_date">
                            <div class="dt" >
                                <label for="date" class="info"> Date de naissance</label>
                                <input type="date" name="date" id="date" >
                            </div>
                            
                            <div class="content_sub ">
                            <input type="submit" value="envoyer"> 
                            </div>
                        </div>
                        
                  
                </div>
                
                  
        

                </form>
            </fieldset>

        </div>
    </div>
    
</body>

</html>