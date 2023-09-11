<?php
session_start();

$_SESSION['visit'] += 1;

echo "je hebt deze pagina al " .$_SESSION['visit']. " bekeken <br>" ;
echo "voordat je de browser heb afgesloten";



