<?php
    include_once("./components/navbar.php");
    include_once("../control/BuscarFicha.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ficha_anamnese.css">
    <title>DADOS CLINICOS DO PACIENTE</title>
</head>
<body>
    <div class="container">
        <h1>DADOS CLINICOS DO PACIENTE</h1>
        <div class="content">

        <div class="box">
            <form action="">
                <!-- Dados de Identificação -->
                <div class="column">
                    <h2>Dados de Identificação</h2>
                    <label class="id">
                        <span>Nome:</span>
                        <input type="text" name="nome" placeholder="" value="<?php echo isset($nome) ? $nome : ''; ?>">
                    </label>
                    <label>
                        <span>Idade:</span>
                        <input type="number" name="idade" placeholder="" value="<?php echo isset($idade) ? $idade : ''; ?>">
                    </label>
                    <label>
                        <span>Peso:</span>
                        <input type="number" name="peso" placeholder="" value="<?php echo isset($peso) ? $peso : ''; ?>">
                    </label>
                    <label>
                        <span>Altura:</span>
                        <input type="number" name="altura" placeholder="" value="<?php echo isset($altura) ? $altura : ''; ?>">
                    </label>
                    <label>
                        <span>Sexo:</span>
                        <select name="sexo">
                            <option value="null">Selecione</option>
                            <option value="Masculino" <?php echo (isset($sexo) && $sexo == "Masculino") ? "selected" : ""; ?>>Masculino</option>
                            <option value="Feminino" <?php echo (isset($sexo) && $sexo == "Feminino") ? "selected" : ""; ?>>Feminino</option>
                        </select>
                    </label>
                </div>
                <div class="column">
                <!-- Dados sobre a Hidratação -->
                    <h2>Hidratação</h2>
                    <label>
                        <span>Bebe água?</span>
                        <input type="radio" name="bebe_agua" value="Sim" <?php echo (isset($bebe_agua) && $bebe_agua == "Sim") ? "checked" : ""; ?>> Sim
                        <input type="radio" name="bebe_agua" value="Não" <?php echo (isset($bebe_agua) && $bebe_agua == "Não") ? "checked" : ""; ?>> Não
                    </label>
                    <label>
                        <span>Nível:</span>
                        <input type="text" name="nivel_hidratacao" placeholder="" value="<?php echo isset($nivel_hidratacao) ? $nivel_hidratacao : ''; ?>">
                    </label>
                    <label>
                        <span>Toma refrigerante?</span>
                        <input type="radio" name="toma_refrigerante" value="Sim" <?php echo (isset($toma_refrigerante) && $toma_refrigerante == "Sim") ? "checked" : ""; ?>> Sim
                        <input type="radio" name="toma_refrigerante" value="Não" <?php echo (isset($toma_refrigerante) && $toma_refrigerante == "Não") ? "checked" : ""; ?>> Não
                    </label>
                    <label>
                        <span>Teve alguma mudança no hábito de hidratação?</span>
                        <input type="radio" name="mudanca_habito_hidratacao" value="Sim" <?php echo (isset($mudanca_habito_hidratacao) && $mudanca_habito_hidratacao == "Sim") ? "checked" : ""; ?>> Sim
                        <input type="radio" name="mudanca_habito_hidratacao" value="Não" <?php echo (isset($mudanca_habito_hidratacao) && $mudanca_habito_hidratacao == "Não") ? "checked" : ""; ?>> Não
                    </label>
                </div>
                <div class="column">
                <!-- Histórico -->
                <h2>Histórico</h2>
                <label>
                    <span>Alguém na família que já teve alguma doença no intestino?</span>
                    <input type="radio" name="historico_familiar" value="Sim" <?php echo (isset($historico_familiar) && $historico_familiar == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="historico_familiar" value="Não" <?php echo (isset($historico_familiar) && $historico_familiar == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Quem?</span>
                    <input type="text" name="quem_historico" placeholder="" value="<?php echo isset($quem_historico) ? $quem_historico : ''; ?>">
                </label>

                <label>
                    <span>Qual doença?</span>
                    <input type="text" name="qual_doenca" placeholder="" value="<?php echo isset($qual_doenca) ? $qual_doenca : ''; ?>">
                </label>  
                </div>
                </div>
                <div class="column">
                <!-- Dados sobre o Funcionamento do Intestino e Aspecto das Fezes -->
                <h2>Funcionamento do intestino e aspecto das fezes</h2>
                <label>
                    <span>Faz cocô todos os dias?</span>
                    <input type="radio" name="faz_coco" value="Sim" <?php echo (isset($faz_coco) && $faz_coco == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="faz_coco" value="Não" <?php echo (isset($faz_coco) && $faz_coco == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Nível:</span>
                    <input type="text" name="nivel_faz_coco" placeholder="" value="<?php echo isset($nivel_faz_coco) ? $nivel_faz_coco : ''; ?>">
                </label>

                <label>
                    <span>Sente muita dor e dificuldades para fazer cocô?</span>
                    <input type="radio" name="dor_fazer_coco" value="Sim" <?php echo (isset($dor_fazer_coco) && $dor_fazer_coco == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="dor_fazer_coco" value="Não" <?php echo (isset($dor_fazer_coco) && $dor_fazer_coco == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Nível:</span>
                    <input type="text" name="nivel_dor_fazer_coco" placeholder="" value="<?php echo isset($nivel_dor_fazer_coco) ? $nivel_dor_fazer_coco : ''; ?>">
                </label>

                <label>
                    <span>Teve alteração no seu hábito intestinal?</span>
                    <input type="radio" name="alteracao_habito_intestinal" value="Sim" <?php echo (isset($alteracao_habito_intestinal) && $alteracao_habito_intestinal == "Sim") ? "checked" : ""; ?>> Sim
                <input type="radio" name="alteracao_habito_intestinal" value="Não" <?php echo (isset($alteracao_habito_intestinal) && $alteracao_habito_intestinal == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label>
                    <span>Nível:</span>
                    <input type="text" name="nivel_alteracao_intestino" placeholder="" value="<?php echo isset($nivel_alteracao_intestino) ? $nivel_alteracao_intestino : ''; ?>">
                </label>

                <label>
                    <span>Tem dificuldade para fazer cocô desde a infância?</span>
                    <input type="radio" name="dificuldade_infancia" value="Sim" <?php echo (isset($dificuldade_infancia) && $dificuldade_infancia == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="dificuldade_infancia" value="Não" <?php echo (isset($dificuldade_infancia) && $dificuldade_infancia == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Possui sangramento nas fezes?</span>
                    <input type="radio" name="sangramento_fezes" value="Sim" <?php echo (isset($sangramento_fezes) && $sangramento_fezes == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="sangramento_fezes" value="Não" <?php echo (isset($sangramento_fezes) && $sangramento_fezes == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Nível:</span>
                    <input type="text" name="nivel_sangramento_fezes" placeholder="" value="<?php echo isset($nivel_sangramento_fezes) ? $nivel_sangramento_fezes : ''; ?>">
                </label>
                <label>
                    <span>Tem hemorroida?</span>
                    <input type="radio" name="hemorroida" value="Sim" <?php echo (isset($hemorroida) && $hemorroida == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="hemorroida" value="Não" <?php echo (isset($hemorroida) && $hemorroida == "Não") ? "checked" : ""; ?>> Não
                </label>    
                
                <label>
                    <span>Tem dor no abdômen?</span>
                    <input type="radio" name="dor_abdomen" value="Sim" <?php echo (isset($dor_abdomen) && $dor_abdomen == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="dor_abdomen" value="Não" <?php echo (isset($dor_abdomen) && $dor_abdomen == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label >
                    <span>Nível:</span>
                    <input type="text" name="nivel_dor_abdomen" placeholder="" value="<?php echo isset($nivel_dor_abdomen) ? $nivel_dor_abdomen : ''; ?>">
                </label>
                <!-- Sobre a Alimentação -->
                <h2>Sobre a Alimentação</h2>
                <label>
                    <span>Come fritura todos os dias?</span>
                    <input type="radio" name="come_fritura" value="Sim" <?php echo (isset($come_fritura) && $come_fritura == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="come_fritura" value="Não" <?php echo (isset($come_fritura) && $come_fritura == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Come presunto, apresuntado, mortadela e/ou mussarela todos os dias?</span>
                    <input type="radio" name="come_presunto" value="Sim" <?php echo (isset($come_presunto) && $come_presunto == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="come_presunto" value="Não" <?php echo (isset($come_presunto) && $come_presunto == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Come hambúrguer, salsicha, bacon, linguiça calabresa, linguiça tipo toscana ou derivados todos os dias?</span>
                    <input type="radio" name="come_hamburguer" value="Sim" <?php echo (isset($come_hamburguer) && $come_hamburguer == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="come_hamburguer" value="Não" <?php echo (isset($come_hamburguer) && $come_hamburguer == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label>
                    <span>Toma leite em caixinha?</span>
                    <input type="radio" name="toma_leite_caixinha" value="Sim" <?php echo (isset($toma_leite_caixinha) && $toma_leite_caixinha == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="toma_leite_caixinha" value="Não" <?php echo (isset($toma_leite_caixinha) && $toma_leite_caixinha == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label>
                    <span>Usa tempero tipo caldo "knor" ou "sazon"?</span>
                    <input type="radio" name="uso_tempero" value="Sim" <?php echo (isset($uso_tempero) && $uso_tempero == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="uso_tempero" value="Não" <?php echo (isset($uso_tempero) && $uso_tempero == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label>
                    <span>Pelo menos 3 vezes na semana come lanches tipo hambúrgueres, pizza e salgados fritos?</span>
                    <input type="radio" name="come_fastfood_sem" value="Sim" <?php echo (isset($come_fastfood_sem) && $come_fastfood_sem == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="come_fastfood_sem" value="Não" <?php echo (isset($come_fastfood_sem) && $come_fastfood_sem == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Come lasanha, lanches prontos vendidos em supermercado e/ou macarrão tipo miojo?</span>
                    <input type="radio" name="come_comida_cong" value="Sim" <?php echo (isset($come_comida_cong) && $come_comida_cong == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="come_comida_cong" value="Não" <?php echo (isset($come_comida_cong) && $come_comida_cong == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Come salada e legumes no almoço e no jantar?</span>
                    <input type="radio" name="come_salada" value="Sim" <?php echo (isset($come_salada) && $come_salada == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="come_salada" value="Não" <?php echo (isset($come_salada) && $come_salada == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Na salada coloca azeite e/ou tempero todos os dias da semana?</span>
                    <input type="radio" name="azeite_tempero" value="Sim" <?php echo (isset($azeite_tempero) && $azeite_tempero == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="azeite_tempero" value="Não" <?php echo (isset($azeite_tempero) && $azeite_tempero == "Não") ? "checked" : ""; ?>> Não
                </label>

                <label>
                    <span>Teve alguma mudança no hábito alimentar?</span>
                    <input type="radio" name="mudanca_habito_alimentar" value="Sim" <?php echo (isset($mudanca_habito_alimentar) && $mudanca_habito_alimentar == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="mudanca_habito_alimentar" value="Não" <?php echo (isset($mudanca_habito_alimentar) && $mudanca_habito_alimentar == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label>
                    <span>Teve um emagrecimento repentino?</span>
                    <input type="radio" name="emagrecimento_repentino" value="Sim" <?php echo (isset($emagrecimento_repentino) && $emagrecimento_repentino == "Sim") ? "checked" : ""; ?>> Sim
                    <input type="radio" name="emagrecimento_repentino" value="Não" <?php echo (isset($emagrecimento_repentino) && $emagrecimento_repentino == "Não") ? "checked" : ""; ?>> Não
                </label>
                
                <label>
                    <span>Nível:</span>
                    <input type="text" name="nivel_emagrecimento_repentino" placeholder="" value="<?php echo isset($nivel_emagrecimento_repentino) ? $nivel_emagrecimento_repentino : ''; ?>">
                </label>
                </div>  

                <input type="submit" value="Atualizar" class="btn_atualizar">  
            </form>

</div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
