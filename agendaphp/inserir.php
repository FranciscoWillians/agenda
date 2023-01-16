<?php 
/*
Função         : MOntar a tela para inserir nomes na agenda
Desenvolvedor  :  Francisco Willians
Data           :  13/01/2023
Atualização    :  Atualizado       
*/

session_start();  // inicia a sessão 
include("funcoes.php"); //inclui o arquivo funções

//corpo principal do script

$usuario = trim($_SESSION['USUARIO']); //remove os valores da sessão

//testando o usuario

if(($usuario!="")&&($usuario!="")) {

//mais html 🤦‍♀️

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda PHP</title>
</head>
<body>
    <table class="table1">
        <tr>
            <td class="td1">
<?
include("menu.html");
?>

</td></tr>
<td class="td2">
    <form name="form1" action="insert_agenda.php" method="post">
        <table class="table2">
            <tr>
                <td class="tdform"><table class="tableform">
                    <tr>
                        <td class="tdform2">.:<b>Inserir Nomes na agenda</b>:.</td>
</tr>
<tr>
    <td class="tdform3"><b>Nome</b>&nbsp;</td>
    <td class="input1"><input name="NOME" type="text" id="NOME" maxlength="50" ></td>
</tr>
<tr></tr>

<td class="tdform4"><b>Endereço</b>&nbsp;</td>
<td class="input2"><input name="ENDERECO" type="text" id="ENDERECO" maxlength="100" ></td>
</tr>
<tr>
    <td><b>Fone</b>:</td>
    <td class="input3"><input name="DDD" type="text" id="DDD" maxlength="3">
    -
    <input class="input4" name="FONE" type="text" id="FONE" maxlength="10"></td>
</tr>
<tr>
    <td><b>Email</b>:</td>
    <td class="input5"><input name="EMAIL" type="text" id="EMAIL" maxlength="50"></td>
</tr>
<tr>
    <td><b> Observações</b>:</td>
    <td><textarea name="OBSERVACOES" cols="22"  rows="5" id="OBSERVACOES"></textarea></td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="input6"><input type="submit" name="submit" value="Grava &gt;&gt;">
    <input type="reset" name="submit2" value="Limpar &gt;&gt;"></td>
</tr>

        </table></td>
</tr>
   
    </table>
</form></td>
</tr>
</table>

</body>
</html>

<?php
} else {
    header("location: index.php");

}
?>




}
