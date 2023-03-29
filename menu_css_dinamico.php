<style>
    #menu {
        display block;
        background-color: black;
        padding:15px;
    }
    #menu a {
        background-color:#3396FF;
        color:#ffffff;
        font-weight:bold;
        font-family: Arial, Helvetica, sans-serif;
        padding:5px;
        text-decoration:none;
        margin-right:5px;
    }
    #menu a:hover {
        background-color:#1abc9c;
    }
</style>

<?php
/**
Menu dinamico con estructura CSS para emplear en futuros proyectos, para practicar un poco con arrays y php
*/

$paginas = array(
    'index.php' => 'Home',
    'sobre_nosotros.php' => 'Sobre Nosotros',
    'contacto.php' => 'Contacto'
);
?>

<nav id="menu">
    <?php
    foreach($paginas as $link => $titulo) {
        echo '<a href="'.$link.'">'.$titulo.'</a>';
     }
?>