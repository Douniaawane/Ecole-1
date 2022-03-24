<?php
include "connection.php";




if(isset($_POST['idetud']) ){
    $id = $_POST['idetud'];
        echo $id;
    $sql = "SELECT * FROM etudiant WHERE id_etudiant = '$id'";

     $res =$con->query($sql);
        $row = mysqli_fetch_assoc($res);

}

if(isset($_POST['btn'] )==="annuler" ){
    header('location:Etudiant.php');
} 
else{
    if(isset($_POST['nom']) and isset($_POST['password']) and 
        isset($_POST['email']) and isset($_POST['date']) 
        and isset($_POST['cne']) and isset($_POST['prenom']) and isset($_POST['idetud'])  ){
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $cne=$_POST['cne'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];
    $ide =$_POST['idetud'];
    echo "$nom $prenom $date $password $cne $email ";
        $req="UPDATE etudiant SET nom='$nom', prenom = '$prenom',cne ='$cne', date_naissance='$date',email = '$email',password ='$password' 
        WHERE id_etudiant = $ide ";
        echo $req;
    
        $ress=$con->query($req);
        if($ress){
            header("Location:Etudiant.php");

        } else
        echo "echec l'etudiant deja existe ";   
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="left">
            <fieldset class="field">
                <form action="" method="post">
                <!-- <input type="file" name="profil" id="file" class ="file">
                <label for="file"> <center> <img src="./images/photo-avatar-profil.png" alt="avatar" class="avatar" ></center></label>
                 -->
                <div class="group_input">
                        <div class="position_lab">
                            <input class="form__input" type="text" value="<?php echo $row['nom'] ?>" name="nom" id="nom" >
                            <label for="nom" class="form__label"> Nom </label>
                        </div>
                        <div class="position_lab">
                        <input class="form__input" type="text" value="<?php echo $row['prenom'] ?>" name="prenom" id="prenom">
                        <label for="prenom " class="form__label" >Prenom</label>
                            
                        </div>
                        <div class="position_lab">
                        <input class="form__input" type="text" value="<?php echo $row['cne'] ?>" name="cne" id="cne" >
                            <label for="cne" class=" form__label"> Cne</label>
                            
                        </div>
                        <div class="position_lab">
                        <input class="form__input" type="text" value="<?php echo $row['email'] ?>" name="email" id="email" >
                            <label for="email" class=" form__label"> Email</label>
                            
                        </div>
                        <div class="position_lab">
                        <input class="form__input" type="text" value="<?php echo $row['password'] ?>" name="password" id="password" >
                            <label for="password" class=" form__label"> Password</label>
                            
                        </div>
                        <div  hidden class="position_lab">
                        <input class="form__input" type="text" value="<?php echo $row['id_etudiant'] ?>" name="idetud" id="idetud" >
                            
                        </div>

                        <div class="content_date">
                            <div class="dt" >
                            <label for="date" class="info"  Date de naissance</label>
                            <input type="date" name="date" id="date" value="<?php echo $row['date_naissance'] ?>"> >
                            </div>
                            <div class="content_sub btn_left">
                            <input type="submit" name="btn" value="enregestre"> 
                            <input type="submit" name="btn" value="annuler"> 

                            </div>
                           
                        </div>
                        
                        
                  
                </div>
                
                  
        

                </form>
            </fieldset>

          
    
</body>
</html>
<!-- 


        </div> -->