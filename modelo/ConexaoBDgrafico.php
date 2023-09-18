<?php
// Conexão com o banco de dados (ajuste as configurações conforme necessário)
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para recuperar os nomes e valores das doenças
$sqlDoencas = "SELECT nome, valor FROM tabela_doencas";
$resultDoencas = $conn->query($sqlDoencas);

if ($resultDoencas->num_rows > 0) {
    // Crie um array para armazenar as informações das doenças
    $doencas = array();

    // Preencha o array com as informações das doenças
    while ($row = $resultDoencas->fetch_assoc()) {
        $doenca = array(
            "nome" => $row["nome"],
            "valor" => $row["valor"]
        );
        $doencas[] = $doenca;
    }

    // Consulta SQL para obter o nome do usuário de outra tabela (ajuste a consulta conforme necessário)
    $sqlNomeUsuario = "SELECT nome FROM tabela_usuarios WHERE id = 1"; // Supondo que você deseja o nome do usuário com ID 1

    $resultNomeUsuario = $conn->query($sqlNomeUsuario);

    if ($resultNomeUsuario->num_rows > 0) {
        $rowNomeUsuario = $resultNomeUsuario->fetch_assoc();
        $nomePaciente = $rowNomeUsuario["nome"];

        // Crie um array que inclui o nome do paciente e as informações das doenças
        $data = array(
            "nomePaciente" => $nomePaciente,
            "doencas" => $doencas
        );

        // Feche a conexão com o banco de dados
        $conn->close();

        // Converta o array em JSON e imprima-o
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo "Nome do usuário não encontrado.";
    }
} else {
    echo "Nenhum resultado encontrado no banco de dados de doenças.";
}
?>
