<?php
ob_start(); //def : Enclenche la temporisation de sortie
?>

<div class="">
    
</div>

<?php
$title = "Home Page";
$content = ob_get_clean(); //def : Exécute successivement ob_get_contents() et ob_end_clean(). Lit le contenu courant du tampon de sortie puis l'efface
require "view/template.php";
