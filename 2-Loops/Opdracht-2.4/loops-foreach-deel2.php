<?php
    if(isset($_GET["klas"])){
        echo $_GET["klas"];
    }else{
        echo "er is nog niks!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="./loops-foreach-deel2.php">


    <label>Klassenformulier</label> <br>
    <label>Ik zit in klas:</label> 
        <select name="klas">
            <?php
                $klassen = array("8A", "8B", "8C", "8D", "9A", "9B", "9C", "9D", "9E");
                foreach($klassen as $klas){
                    echo "<option>".$klas."</option>"; 
                }
            ?>
        </select> <br>



        <button type="submit">verzenden</button>
    </form>

</body>
</html>
