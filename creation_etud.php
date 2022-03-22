<?php 
include 'connection.php';
$error="";
if(isset($_POST['nom']) and isset($_POST['password']) and 
isset($_POST['email']) and isset($_POST['date']) 
and isset($_POST['cne']) and isset($_POST['prenom'])){
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $cne=$_POST['cne'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];
    echo "$nom $prenom $date $password $cne $email ";
    $req="select * from etudiant where email='$email' or cne= '$cne'";
    $res=$con->query($req);
    if(mysqli_num_rows($res)==0){
        echo "psps";
        $req="INSERT into etudiant  (nom,prenom,cne,date_naissance,email,password) 
        VALUES ('$nom','$prenom','$cne','$date','$email','$password')";
        $con->query($req);
        
    }else 
      echo "l'etudiant deja existe";
}

?>