
<?php ob_start() ?>
<p><strong>Une erreur est survenue : </strong><?= $msgErreur ?></p>
<?php $content = ob_get_clean(); 
include "baselayout.php";
?>
