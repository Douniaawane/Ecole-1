<?php
include "functions.php";
include "connection.php";

$items =[ "id","image", "nom" , "prenom ", "cne" , "date de naaissance" , "email" , "num classe"];

$req ="SELECT id_etudiant,image, nom , prenom ,cne ,date_naissance ,email,id_classe from etudiant ";
 $res = $con->query($req);

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
    <link rel="stylesheet" href="./css/Etudiant.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="tab_container">
<div class="header_ajout">
         <a href="inscription_etud.php"><button class="btn_ajout" >Ajout</button></a>
         <div class="search">
            <input class="recherch" type="text" placeholder="Entrer le CIN">
        
            <button><a href="#">  <i class="fa fa-search" aria-hidden="true"></i></a></button>
         </div>
     </div>
    <table >
        <?php
        echo "<tr class='th-style'>";
        foreach($items as $item){
            echo " <th>$item</th>";
        } 
        echo "<th >modifier </th>";
        echo "<th> supprimer </th>";
        "</tr>";
        
        while($rows =mysqli_fetch_assoc($res)){
            echo "<tr>";
            foreach($rows as $key => $row ){
                 if($key!='image'){
                    echo " <td>$row</td>";
                 }else
                 echo "<td><img  class='img-pf' src='$row' alt='image_profil'/></td>";
                
                
            }
            echo " <td>
                <form action='modification_etud.php' method='post'>
                    <input hidden type='text' name='idetud' value='$rows[id_etudiant]' >
                    <button class='button-71' >modifier </button>
                </form>
            </td>";
            echo "<td> 
                <form action='suppression_etud.php' method='post'>
                    <input hidden type='text' name='idetud' value='$rows[id_etudiant]' >
                    <button class='btn-72'>supprimer </button>
                </form>
            </td>";
            
            echo "</tr>";
            

        }
        

       
        ?>
        
       
    </table>
</div>
<img src="" alt="">
    
</body>
<script src="./javaScript/Etudiant.js"></script>
</html>