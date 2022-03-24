<?php
include "functions.php";
include "connection.php";

$items =[ "id", "nom" , "prenom ", "cne" , "date de naaissance" , "email" , "num classe"];

$req ="SELECT id_etudiant, nom , prenom ,cne ,date_naissance ,email,id_classe from etudiant ";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div>
    <table border="1">
        <?php
        echo "<tr>";
        foreach($items as $item){
            echo " <th>$item</th>";
        } 
        echo "<th>modifier </th>";
        echo "<th> supprimer </th>";
        "</tr>";
        
        while($rows =mysqli_fetch_assoc($res)){
            echo "<tr>";
            foreach($rows as $row ){
                echo " <td>$row</td>";
                
            }
            echo "
            <td>
            <form action='modification_etud.php' method='post'>
            <input hidden type='text' name='idetud' value='$rows[id_etudiant]' >
            <button >modifier </button>
           </form></td>";
            echo "<td> 
            <form action='suppression_etud.php' method='post'>
            <input hidden type='text' name='idetud' value='$rows[id_etudiant]' >
            <button>supprimer </button></td>";
            
            echo "</tr>";
            

        }
        echo $rows['id_etudiant'];
        
        
       
       
        ?>
        
       
    </table>
</div>

    
</body>
<script src="./javaScript/Etudiant.js"></script>
</html>