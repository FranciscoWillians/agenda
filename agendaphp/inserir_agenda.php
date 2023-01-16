<?
/*
Função         : insere dados na agenda
Desenvolvedor  :  Francisco Willians
Data           :  14/01/2023
Atualização    :  Atualizado       
*/

session_start();  // inicia a sessão
include("funcoes.php");  // incluir o arquivo de funções

//criando função para inserir dados na agenda
function inserir_agenda($nome,$endereco, $ddd, $fone, $email, $observacoes) {
    global $con;
    $valor = false;
    $sql = "INSERT INTO Agenda (NOME, ENDERECO, DDD, FONE, EMAIL, OBSERVACOES)VALUES('$nome'.'$endereco', '$ddd','$fone','$email', '$observacoes')";
    $result = odbc_exec($con, $sql);
    if (!$result) {
        $valor = false;
    } else {
        $valor=true;
    }
    return $valor;
}

//corpo principal do script
$usuario = trim($_SESSION['USUARIO']); // recebe os dados da sessão
$nome    = $_POST['NOME'];
$endereço= $_POST['ENDERECO'];
$ddd= $_POST['DDD'];
$fone= $_POST['FONE'];
$email= $_POST['EMAIL'];
$observacoes= $_POST['OBSERVACOES'];

//TESTA O USUARIO

if (($usuario != "") && ($usuario != "")) {
    if (!$con) { // testa aconexão ao banco
        conecta(BANCO, USUARIO, SENHA); // conectando ao banco de dados
    }

    //chamando a função que vai inserir os dados na agenda

    if (inserir_agenda($nome , $endereço, $ddd, $fone, $email, $observacoes)) {
        header("location: listar.php"); // Direciona para a tela de listar
    } else {
        header("location: index.php"); //direciona para tela inicial
    }
}

?>
