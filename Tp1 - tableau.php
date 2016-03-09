<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Variables</title>
</head>
<body>
    
    <div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <fieldset style="vertical-align: middle;"><legend>Création du tableau :</legend>
                <label for="nom">Colonne: </label><input type="text" name="nom" id="nom">
                <label for="password">Ligne : </label><input type="text" name="password" id="password">
                <input type="submit" value="Valider">
            </fieldset>
        </form>
    </div>
    <br>
    
<?php
    function createHTMLtable($colonne,$ligne){
  
        echo "<table>";
        for ($i=0;$i<=$ligne;$i++){
            echo "<tr>";
            $gras="normal";
            if($i%2==0)
                $gras="bold";
            for($j=0;$j<=$colonne;$j++){  
                $rouge="";
                if($j%2==0)
                    $rouge="color:red;";
            echo "<td style='{$rouge} font-weight:{$gras}'>{$i} - {$j}</td>";                       }
            echo "</tr>";
        }
        echo "</table>";
    }
#if(array_key_exists("ligne",$_GET)){
 #   createHTMLtable($_GET["ligne"],$_GET["colonne"]);
#}

echo createHTMLtable(7,11);
?>
</body>
</html>