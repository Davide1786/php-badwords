
<?php 
    $paragrafo = 'Questa concessionaria è autorizzata a vendere  i marchi di: Guzzi, Honda, Suzuky, Piaggio, Ducati';
    $lenParagrafo = strlen($paragrafo);
    $marca_moto = $_GET['marca'];
    $censura = array('honda', 'ducati');
?>

<h3> <?php echo $paragrafo ?></h3>
<p> La lunghezza del paragrafo è di: <?php echo $lenParagrafo ?> caratteri</p>

<!-- normale -->
<h3> <?php echo str_ireplace($marca_moto ,"***", $paragrafo); ?> </h3>

<!-- Con array -->
<h3> <?php echo str_ireplace($censura ,"***", $paragrafo); ?> </h3>

<p> la lunghezza del paragrafo è di: <?php echo strlen(str_ireplace($censura ,"***", $paragrafo)); ?> caratteri </p>








