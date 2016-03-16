<?php
    include("function.php");
    getHeader(False,"TP2");
?>
        <form methode="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for"nom">Saisissez votre prénom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo $nom?>">
        </form>
<?php
    $nom="";
    if(array_key_exists("nom",$_POST)) {
            $nom= $_POST["nom"];
        }

    getFooter();
?>