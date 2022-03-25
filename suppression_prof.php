<?php
include "connection.php";




if(isset($_POST['id_enseignant']) ){
    $id = $_POST['id_enseignant'];
      $sql = " DELETE FROM enseignant WHERE id_enseignant = $id";
     $res =$con->query($sql);
     if($res){
         header('Location:Enseignant.php');
     }
     else{
         echo "echec";
     }

}

?>