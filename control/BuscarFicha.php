<?php
session_start();

// Conecte-se ao banco de dados (substitua com suas próprias configurações)
$servidor = "localhost";
$usuario = "root";
$senha_db = "";
$banco = "sistema_triagem";

$conexao = new mysqli($servidor, $usuario, $senha_db, $banco);

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

    // Consulta para obter os dados da tabela 'ficha' com base no 'id_usuario'
    $consulta_ficha = "SELECT * FROM ficha WHERE id_usuario = '$id_usuario'";
    $resultado_ficha = $conexao->query($consulta_ficha);

    if ($resultado_ficha && $resultado_ficha->num_rows > 0) {
        $row_ficha = $resultado_ficha->fetch_assoc();

        // Preencha os campos do formulário com os dados obtidos da tabela 'ficha'
        $nome = $row_ficha['nome'];
        $idade = $row_ficha['idade'];
        $peso = $row_ficha['peso'];
        $altura = $row_ficha['altura'];
        $sexo = $row_ficha['sexo'];
        $bebe_agua = $row_ficha['bebe_agua'];
        $nivel_hidratacao = $row_ficha['nivel_hidratacao'];
        $toma_refrigerante = $row_ficha['toma_refrigerante'];
        $mudanca_habito_hidratacao = $row_ficha['mudanca_habito_hidratacao'];
        $faz_coco = $row_ficha['faz_coco'];
        $nivel_faz_coco = $row_ficha['nivel_faz_coco'];
        $dor_fazer_coco = $row_ficha['dor_fazer_coco'];
        $nivel_dor_fazer_coco = $row_ficha['nivel_dor_fazer_coco'];
        $alteracao_habito_intestinal = $row_ficha['alteracao_habito_intestinal'];
        $nivel_alteracao_intestino = $row_ficha['nivel_alteracao_intestino'];
        $dificuldade_infancia = $row_ficha['dificuldade_infancia'];
        $sangramento_fezes = $row_ficha['sangramento_fezes'];
        $nivel_sangramento_fezes = $row_ficha['nivel_sangramento_fezes'];
        $hemorroida = $row_ficha['hemorroida'];
        $dor_abdomen = $row_ficha['dor_abdomen'];
        $nivel_dor_abdomen = $row_ficha['nivel_dor_abdomen'];
        $come_fritura = $row_ficha['come_fritura'];
        $come_presunto = $row_ficha['come_presunto'];
        $come_hamburguer = $row_ficha['come_hamburguer'];
        $toma_leite_caixinha = $row_ficha['toma_leite_caixinha'];
        $uso_tempero = $row_ficha['uso_tempero'];
        $come_fastfood_sem = $row_ficha['come_fastfood_sem'];
        $come_comida_cong = $row_ficha['come_comida_cong'];
        $come_salada = $row_ficha['come_salada'];
        $azeite_tempero = $row_ficha['azeite_tempero'];
        $mudanca_habito_alimentar = $row_ficha['mudanca_habito_alimentar'];
        $emagrecimento_repentino = $row_ficha['emagrecimento_repentino'];
        $nivel_emagrecimento_repentino = $row_ficha['nivel_emagrecimento_repentino'];
        $historico_familiar = $row_ficha['historico_familiar'];
        $quem_historico = $row_ficha['quem_historico'];
        $qual_doenca = $row_ficha['qual_doenca'];

    } else {
        // Trate o caso em que não há dados na tabela 'ficha' para o 'id_usuario'
        // Você pode definir valores padrão ou fazer qualquer outra coisa
    }
} else {
    // Tratar o caso em que o e-mail da sessão não corresponde a um usuário válido
    // Você pode redirecionar para uma página de erro ou fazer qualquer outra coisa
}

// Feche a conexão com o banco de dados
$conexao->close();
?>
