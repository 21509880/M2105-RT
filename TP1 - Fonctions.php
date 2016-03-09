<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fonctions</title>
</head>
<body>
<h1>Mes fonctions</h1>
<?php
    function fact($nombre){
        $result=$nombre;
       while ($nombre>1) {
           $nombre--;
           $result*=$nombre;
            }
        return $result;
    }
echo fact(7);
?>
</body>
</html>