<?

// Pegar/puxar uma conexão do banco de dados
require_once ('conexao.php');

// Montar o código SQL
$sql = 'SELECT * FROM Receita';

$listarnobd = BuscarNoBD($sql);

?>

