<?php
include "connection.php";




if(isset($_POST['idetud']) ){
    $id = $_POST['idetud'];
      $sql = " DELETE FROM etudiant WHERE id_etudiant = $id";
     $res =$con->query($sql);
     if($res){
         header('Location:Etudiant.php');
     }
     else{
         echo "echec";
     }

}

?>