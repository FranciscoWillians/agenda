<?php 
/*
Função         : exibir a tela de login
Desenvolvedor  :  Francisco Willians
Data           :  13/01/2023
Atualização    :  Atualizado       
*/

session_start();               //inicia a sessão
$_SESSION['USUARIO']  = NULL;  //Limpa a sessão se existir

?>
<!-- Mais um pouco dehtml😊-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="login.php" href="login.php">

</head>

<body>

<table class="menu">
    <tr class="menu1">
        <td class="menu2">
            <a href="inserir.php">Inserir</a>
        </td>
        <td class="menu2">
            <a href="busca.php">Buscar</a>
        </td>
        <td class="menu2">
            <a href="listar.php">Listar</a>
        </td>
        <td class="menu2">
            <a href="index.php">Sair</a>
        </td>
    </tr>

        
</table>


<form name="form1" action="login.php" method="post">

<table class="index">
    <tr>
        <td class="tdindex">
            <table class="tabletd">
                <tr>
                    <td class="tdindex1"><b>Bem-vindo. Por favor Informe seus dados</b></td>
                </tr>
                <tr>
                    <td class="tdindex2"><b>LOGIN</b>.:&NonBreakingSpace;</td>
                    <td class="tdindex3"><input class= "login" name="LOGIN" value=""></td>
                </tr>
                <tr>
                </tr>   
                <td class="tdindex4"><b>SENHA</b>:&NonBreakingSpace;</td>
                <td class="tdindex5"><input name="SENHA" type="password" id="SENHA" value=""></td>    
    </tr>  
    <tr>
                 <td class="tdindex6">&NonBreakingSpace;</td>  
                 <td class="tdindex7"><input type="submit" value="Acessar &gt;&gt;"></td>
    </tr>
    </td>
</tr>  
</table>
</form>
</body>
</html> 
