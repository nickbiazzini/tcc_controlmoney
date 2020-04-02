<?php
$conn = mysqli_connect("localhost","root","","tcc") or die ("Erro na conexão");
mysqli_select_db($conn,"tcc")or die ("Base não encontrada");
?>