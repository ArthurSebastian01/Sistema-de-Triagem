<?php
session_start();
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao seu banco de dados (substitua os valores com as configurações do seu banco)
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sistema_triagem";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Consulta para obter o ID do usuário com base no e-mail da sessão
    $email = $_SESSION['email'];
    $consulta_usuario = "SELECT id FROM usuarios WHERE email = '$email'";
    $resultado_usuario = $conexao->query($consulta_usuario);

    if ($resultado_usuario && $resultado_usuario->num_rows > 0) {
    $row_usuario = $resultado_usuario->fetch_assoc();
    $id_usuario = $row_usuario['id'];
    } else {
    // Tratar o caso em que o e-mail da sessão não corresponde a um usuário válido
    // Você pode redirecionar para uma página de erro ou fazer qualquer outra coisa
    }

    // Recupere os valores do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $sexo = $_POST["sexo"];
    $bebe_agua = isset($_POST["bebe_agua"]) ? $_POST["bebe_agua"] : "";
    $nivel_hidratacao = $_POST["nivel_hidratacao"];
    $toma_refrigerante = isset($_POST["toma_refrigerante"]) ? $_POST["toma_refrigerante"] : "";
    $mudanca_habito_hidratacao = isset($_POST["mudanca_habito_hidratacao"]) ? $_POST["mudanca_habito_hidratacao"] : "";
    $faz_coco = isset($_POST["faz_coco"]) ? $_POST["faz_coco"] : "";
    $nivel_faz_coco = $_POST["nivel_faz_coco"];
    $dor_fazer_coco = isset($_POST["dor_fazer_coco"]) ? $_POST["dor_fazer_coco"] : "";
    $nivel_dor_fazer_coco = $_POST["nivel_dor_fazer_coco"];
    $alteracao_habito_intestinal = isset($_POST["alteracao_habito_intestinal"]) ? $_POST["alteracao_habito_intestinal"] : "";
    $nivel_alteracao_intestino = $_POST["nivel_alteracao_intestino"];
    $dificuldade_infancia = isset($_POST["dificuldade_infancia"]) ? $_POST["dificuldade_infancia"] : "";
    $sangramento_fezes = isset($_POST["sangramento_fezes"]) ? $_POST["sangramento_fezes"] : "";
    $nivel_sangramento_fezes = $_POST["nivel_sangramento_fezes"];
    $hemorroida = isset($_POST["hemorroida"]) ? $_POST["hemorroida"] : "";
    $dor_abdomen = isset($_POST["dor_abdomen"]) ? $_POST["dor_abdomen"] : "";
    $nivel_dor_abdomen = $_POST["nivel_dor_abdomen"];
    $come_fritura = isset($_POST["come_fritura"]) ? $_POST["come_fritura"] : "";
    $come_presunto = isset($_POST["come_presunto"]) ? $_POST["come_presunto"] : "";
    $come_hamburguer = isset($_POST["come_hamburguer"]) ? $_POST["come_hamburguer"] : "";
    $toma_leite_caixinha = isset($_POST["toma_leite_caixinha"]) ? $_POST["toma_leite_caixinha"] : "";
    $uso_tempero = isset($_POST["uso_tempero"]) ? $_POST["uso_tempero"] : "";
    $come_fastfood_sem = isset($_POST["come_fastfood_sem"]) ? $_POST["come_fastfood_sem"] : "";
    $come_comida_cong = isset($_POST["come_comida_cong"]) ? $_POST["come_comida_cong"] : "";
    $come_salada = isset($_POST["come_salada"]) ? $_POST["come_salada"] : "";
    $azeite_tempero = isset($_POST["azeite_tempero"]) ? $_POST["azeite_tempero"] : "";
    $mudanca_habito_alimentar = isset($_POST["mudanca_habito_alimentar"]) ? $_POST["mudanca_habito_alimentar"] : "";
    $emagrecimento_repentino = isset($_POST["emagrecimento_repentino"]) ? $_POST["emagrecimento_repentino"] : "";
    $nivel_emagrecimento_repentino = $_POST["nivel_emagrecimento_repentino"];
    $historico_familiar = isset($_POST["historico_familiar"]) ? $_POST["historico_familiar"] : "";
    $quem_historico = $_POST["quem_historico"];
    $qual_doenca = $_POST["qual_doenca"];

    if (empty($nome) || empty($idade) || empty($peso) || empty($altura) || empty($sexo) ||
    empty($bebe_agua) || empty($nivel_hidratacao) || empty($toma_refrigerante) || empty($mudanca_habito_hidratacao)) {
    echo "Por favor, preencha todos os campos obrigatórios.";
} else {
    // Execute a consulta SQL para inserir os dados na tabela 'ficha' (substitua com sua própria consulta)
    $sql = "INSERT INTO ficha (id_usuario, nome, idade, peso, altura, sexo, bebe_agua, nivel_hidratacao, toma_refrigerante, mudanca_habito_hidratacao, /*...outros campos*/) 
        VALUES ('$id_usuario', '$nome', '$idade', '$peso', '$altura', '$sexo', '$bebe_agua', '$nivel_hidratacao', '$toma_refrigerante', '$mudanca_habito_hidratacao', /*...outros valores*/)";

    if ($conexao->query($sql) === TRUE) {
        // Redirecionar para a tela-principal.php após a inserção bem-sucedida
        header("Location: ../view/home.php");
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
}
}
?>
