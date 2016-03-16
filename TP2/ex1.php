<?php
    include("function.php");
    include("ex1Validation.php");
    getHeader(True,"Exercice 1");
?>
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="nom"> Saisissez votre nom : </label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom?>" >
    </form>
<?php
    $nom="";
    if(array_key_exists("nom",$_POST)) {
        $nom= $_POST["nom"];
    }
?>
<?php
    getFooter();
?>