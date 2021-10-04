<h1> Merci <?= $_POST['user_firstname'];?> <?= $_POST['user_lastname'];?>  de nous avoir contacté à propos de “<?= $_POST['sujet'];?>”. </h1><br>
<br>
Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['user_email'];?> ou par téléphone au <?= $_POST['user_téléphone'];?> dans les plus brefs délais pour traiter votre demande : <br>
<br>
<?= $_POST['user_message'];?>
