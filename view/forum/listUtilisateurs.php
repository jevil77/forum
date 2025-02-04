<?php
    $utilisateurs = $result["data"]['utilisateurs']; 
    var_dump($utilisateurs);
    
?>



<?php 
if (empty($utilisateurs)) { ?>
   
<?php } else { ?>



<?php foreach($utilisateurs as $utilisateur ){ ?>
    <p><a href="index.php?ctrl=forum&action=listUtilisateurs"><?= $utilisateur?></a></p>
<?php } ?>
<?php } ?>