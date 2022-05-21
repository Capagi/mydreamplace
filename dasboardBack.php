<?php
include_once("conexao.php");
$sqlselectquery="SELECT * FROM user";
$operation=$conection->prepare($sqlselectquery);
$operation->execute();
