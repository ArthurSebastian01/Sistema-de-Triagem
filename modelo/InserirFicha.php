<?php
include_once "conexao_bd.php";

// Coletar dados do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
$altura = filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_NUMBER_FLOAT);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$bebe_agua = filter_input(INPUT_POST, 'bebe_agua', FILTER_SANITIZE_STRING);
$nivel_bebe_agua = filter_input(INPUT_POST, 'nivel_bebe_agua', FILTER_SANITIZE_NUMBER_INT);
$toma_refrigerante = filter_input(INPUT_POST, 'toma_refrigerante', FILTER_SANITIZE_STRING);
$mudanca_habito_hidratacao = filter_input(INPUT_POST, 'mudanca_habito_hidratacao', FILTER_SANITIZE_STRING);
$faz_coco = filter_input(INPUT_POST, 'faz_coco', FILTER_SANITIZE_STRING);
$nivel_qnt_faz_coco = filter_input(INPUT_POST, 'nivel_qnt_faz_coco', FILTER_SANITIZE_NUMBER_INT);
$sente_dor_fazer_coco = filter_input(INPUT_POST, 'sente_dor_fazer_coco', FILTER_SANITIZE_STRING);
$nivel_dor_fazer_coco = filter_input(INPUT_POST, 'nivel_dor_fazer_coco', FILTER_SANITIZE_NUMBER_INT);
$alteracao_habito_intestinal = filter_input(INPUT_POST, 'alteracao_habito_intestinal', FILTER_SANITIZE_STRING);
$nivel_dor_intestino = filter_input(INPUT_POST, 'nivel_dor_intestino', FILTER_SANITIZE_NUMBER_INT);
$dificuldade_infancia = filter_input(INPUT_POST, 'dificuldade_infancia', FILTER_SANITIZE_STRING);
$sangramento_fezes = filter_input(INPUT_POST, 'sangramento_fezes', FILTER_SANITIZE_STRING);
$nivel_sangramento_fezes = filter_input(INPUT_POST, 'nivel_sangramento_fezes', FILTER_SANITIZE_NUMBER_INT);
$hemorroida = filter_input(INPUT_POST, 'hemorroida', FILTER_SANITIZE_STRING);
$dor_abdomen = filter_input(INPUT_POST, 'dor_abdomen', FILTER_SANITIZE_STRING);
$nivel_dor_abdomen = filter_input(INPUT_POST, 'nivel_dor_abdomen', FILTER_SANITIZE_NUMBER_INT);
$come_fritura = filter_input(INPUT_POST, 'come_fritura', FILTER_SANITIZE_STRING);
$come_presunto = filter_input(INPUT_POST, 'come_presunto', FILTER_SANITIZE_STRING);
$come_hamburguer = filter_input(INPUT_POST, 'come_hamburguer', FILTER_SANITIZE_STRING);
$toma_leite_caixinha = filter_input(INPUT_POST, 'toma_leite_caixinha', FILTER_SANITIZE_STRING);
$uso_tempero = filter_input(INPUT_POST, 'uso_tempero', FILTER_SANITIZE_STRING);
$come_lanches = filter_input(INPUT_POST, 'come_lanches', FILTER_SANITIZE_STRING);
$come_lasanha = filter_input(INPUT_POST, 'come_lasanha', FILTER_SANITIZE_STRING);
$come_salada = filter_input(INPUT_POST, 'come_salada', FILTER_SANITIZE_STRING);
$usa_azeite_tempero = filter_input(INPUT_POST, 'usa_azeite_tempero', FILTER_SANITIZE_STRING);
$teve_mudanca_habito_alimentar = filter_input(INPUT_POST, 'teve_mudanca_habito_alimentar', FILTER_SANITIZE_STRING);
$tev_emagrecimento_repentino = filter_input(INPUT_POST, 'tev_emagrecimento_repentino', FILTER_SANITIZE_STRING);
$nivel_emagrecimento_repentino = filter_input(INPUT_POST, 'nivel_emagrecimento_repentino', FILTER_SANITIZE_NUMBER_INT);
$historico_familiar = filter_input(INPUT_POST, 'historico_familiar', FILTER_SANITIZE_STRING);
$quem_historico = filter_input(INPUT_POST, 'quem_historico', FILTER_SANITIZE_STRING);
$qual_doenca = filter_input(INPUT_POST, 'qual_doenca', FILTER_SANITIZE_STRING);



echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Peso: " . $peso . "<br>";
echo "Altura: " . $altura . "<br>";
echo "Sexo: " . $sexo . "<br>";
echo "Bebe Água: " . $bebe_agua . "<br>";
echo "Nível de Bebida de Água: " . $nivel_bebe_agua . "<br>";
echo "Toma Refrigerante: " . $toma_refrigerante . "<br>";
echo "Mudança de Hábito de Hidratação: " . $mudanca_habito_hidratacao . "<br>";
echo "Faz Cocô: " . $faz_coco . "<br>";
echo "Nível de Quantidade de Cocô: " . $nivel_qnt_faz_coco . "<br>";
echo "Sente Dor ao Fazer Cocô: " . $sente_dor_fazer_coco . "<br>";
echo "Nível de Dor ao Fazer Cocô: " . $nivel_dor_fazer_coco . "<br>";
echo "Alteração de Hábito Intestinal: " . $alteracao_habito_intestinal . "<br>";
echo "Nível de Dor no Intestino: " . $nivel_dor_intestino . "<br>";
echo "Dificuldade na Infância: " . $dificuldade_infancia . "<br>";
echo "Sangramento nas Fezes: " . $sangramento_fezes . "<br>";
echo "Nível de Sangramento nas Fezes: " . $nivel_sangramento_fezes . "<br>";
echo "Hemorroida: " . $hemorroida . "<br>";
echo "Dor no Abdômen: " . $dor_abdomen . "<br>";
echo "Nível de Dor no Abdômen: " . $nivel_dor_abdomen . "<br>";
echo "Come Fritura: " . $come_fritura . "<br>";
echo "Come Presunto: " . $come_presunto . "<br>";
echo "Come Hambúrguer: " . $come_hamburguer . "<br>";
echo "Toma Leite Caixinha: " . $toma_leite_caixinha . "<br>";
echo "Uso de Tempero: " . $uso_tempero . "<br>";
echo "Come Lanches: " . $come_lanches . "<br>";
echo "Come Lasanha: " . $come_lasanha . "<br>";
echo "Come Salada: " . $come_salada . "<br>";
echo "Usa Azeite de Tempero: " . $usa_azeite_tempero . "<br>";
echo "Teve Mudança de Hábito Alimentar: " . $teve_mudanca_habito_alimentar . "<br>";
echo "Teve Emagrecimento Repentino: " . $tev_emagrecimento_repentino . "<br>";
echo "Nível de Emagrecimento Repentino: " . $nivel_emagrecimento_repentino . "<br>";
echo "Histórico Familiar: " . $historico_familiar . "<br>";
echo "Quem no Histórico: " . $quem_historico . "<br>";
echo "Qual Doença: " . $qual_doenca . "<br>";

// Preparar a consulta SQL com parâmetros
$sql = "INSERT INTO ficha (nome, idade, peso, altura, sexo, bebe_agua, nivel_bebe_agua, toma_refrigerante, mudanca_habito_hidratacao, faz_coco, nivel_qnt_faz_coco, sente_dor_fazer_coco, nivel_dor_fazer_coco, alteracao_habito_intestinal, nivel_dor_intestino, dificuldade_infancia, sangramento_fezes, nivel_sangramento_fezes, hemorroida, dor_abdomen, nivel_dor_abdomen, come_fritura, come_presunto, come_hamburguer, toma_leite_caixinha, uso_tempero, come_lanches, come_lasanha, come_salada, usa_azeite_tempero, teve_mudanca_habito_alimentar, tev_emagrecimento_repentino, nivel_emagrecimento_repentino, historico_familiar, quem_historico, qual_doenca) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar a declaração SQL
$stmt = mysqli_prepare($conn, $sql);

// Verificar se a preparação da declaração foi bem-sucedida
if ($stmt) {
    // Vincular os parâmetros da declaração com os valores das variáveis
    mysqli_stmt_bind_param($stmt, "sissssssssisssssssssssssssssssssssss", $nome, $idade, $peso, $altura, $sexo, $bebe_agua, $nivel_bebe_agua, $toma_refrigerante, $mudanca_habito_hidratacao, $faz_coco, $nivel_qnt_faz_coco, $sente_dor_fazer_coco, $nivel_dor_fazer_coco, $alteracao_habito_intestinal, $nivel_dor_intestino, $dificuldade_infancia, $sangramento_fezes, $nivel_sangramento_fezes, $hemorroida, $dor_abdomen, $nivel_dor_abdomen, $come_fritura, $come_presunto, $come_hamburguer, $toma_leite_caixinha, $uso_tempero, $come_lanches, $come_lasanha, $come_salada, $usa_azeite_tempero, $teve_mudanca_habito_alimentar, $tev_emagrecimento_repentino, $nivel_emagrecimento_repentino, $historico_familiar, $quem_historico, $qual_doenca);
    // Executar a declaração SQL
    if (mysqli_stmt_execute($stmt)) {
        // Redirecionar para tela-principal.php
        header("Location: tela-principal.php");
        exit();
    } else {
        // Se ocorrer um erro na execução da declaração, defina uma mensagem de erro na variável de sessão
        session_start();
        $_SESSION['mensagem_erro'] = "Erro ao inserir dados no banco de dados.";

        // Redirecionar de volta para Dados_clinicos.php
        header("Location: Dados_clinicos.php");
        exit();
    }

    // Fechar a declaração
    mysqli_stmt_close($stmt);
} else {
    // Se a preparação da declaração falhar, defina uma mensagem de erro na variável de sessão
    session_start();
    $_SESSION['mensagem_erro'] = "Erro na preparação da declaração SQL.";

    // Redirecionar de volta para Dados_clinicos.php
    header("Location: Dados_clinicos.php");
    exit();
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
