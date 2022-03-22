<?php 
include 'connection.php';
$error="";
if(isset($_POST['nom']) and isset($_POST['password']) and 
isset($_POST['email']) and isset($_POST['date']) 
and isset($_POST['cin']) and isset($_POST['prenom'])){
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $cin=$_POST['cin'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];
    echo "$nom $prenom $date $password $cin $email <br>";
        $req="INSERT INTO enseignant(nom,prenom,cin,date_naissance,email,password) 
        VALUES ('$nom','$prenom','$cin','$date','$email','$password')";
        
        
        $res=$con->query($req);
        if($res){
            echo " succes ";
           // header("location : index.php");
        } else
        echo "echec l'enseignant deja existe ";
}
?>