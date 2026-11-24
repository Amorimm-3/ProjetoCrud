<?php
    include 'conexao.php';
    $vnome=$_POST['txtnome'];
    $vemail=$_POST['txtemail'];
    $vsenha=$_POST['txtsenha'];
    $vsexo=$_POST['txtsexo'];
    $vdtna=$_POST['txtdata'];
    $cadastrar=$cmd->query("insert into tbteste(nome_t,emai_t,senh_t,sexo_t,dtna_t) values('$vnome','$vemail','$vsenha','$vsexo','$vdtna')");
    echo "<script language='JavaScript'>
            alert('Dados cadastrados com sucesso!!!');
            location.href='crudcada.html';
            </script>";
?>