<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dados Clínicos do Paciente</title>
    <style>
        body {
            font-size: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family: fantasy;
            background: #0ea1338a;
            background-size: cover;
            height: 101vh;
        }
        
        div {
            position: absolute;
            top: 43%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            height: 90vh;
        }
        
        input, select, textarea {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            background-color: transparent;
            color: black;
        }
        
        button {
            background-color: #2E8B57;
            border: none;
            padding: 15px;
            width: 30%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
        }
        
        button:hover {
            background-color: green;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center><h1>Dados Clínicos do Paciente</h1></center>
    <br><br>
    <div>
            <?php include "BuscarFicha.php"; ?>
            <!-- Dados de Identificação -->
            <h2>Dados de Identificação</h2>
            Nome: <input type="text" name="nome" placeholder="" value="<?php echo isset($nome) ? $nome : ''; ?>"><br>
            Idade: <input type="number" name="idade" placeholder="" value="<?php echo isset($idade) ? $idade : ''; ?>"><br>
            Peso: <input type="number" name="peso" placeholder="" value="<?php echo isset($peso) ? $peso : ''; ?>"><br>
            Altura: <input type="number" name="altura" placeholder="" value="<?php echo isset($altura) ? $altura : ''; ?>"><br>
            Sexo:
            <select name="sexo">
                <option value="null">Selecione</option>
                <option value="Masculino" <?php echo (isset($sexo) && $sexo == "Masculino") ? "selected" : ""; ?>>Masculino</option>
                <option value="Feminino" <?php echo (isset($sexo) && $sexo == "Feminino") ? "selected" : ""; ?>>Feminino</option>
            </select>
            <br><br><br>

            <!-- Dados sobre a Hidratação -->
            <h2>Dados sobre a Hidratação</h2>
            Bebe água?
            <input type="radio" name="bebe_agua" value="Sim" <?php echo (isset($bebe_agua) && $bebe_agua == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="bebe_agua" value="Não" <?php echo (isset($bebe_agua) && $bebe_agua == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_hidratacao" placeholder="" value="<?php echo isset($nivel_hidratacao) ? $nivel_hidratacao : ''; ?>"><br>

            Toma refrigerante?
            <input type="radio" name="toma_refrigerante" value="Sim" <?php echo (isset($toma_refrigerante) && $toma_refrigerante == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="toma_refrigerante" value="Não" <?php echo (isset($toma_refrigerante) && $toma_refrigerante == "Não") ? "checked" : ""; ?>> Não<br>

            Teve alguma mudança no hábito de hidratação?
            <input type="radio" name="mudanca_habito_hidratacao" value="Sim" <?php echo (isset($mudanca_habito_hidratacao) && $mudanca_habito_hidratacao == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="mudanca_habito_hidratacao" value="Não" <?php echo (isset($mudanca_habito_hidratacao) && $mudanca_habito_hidratacao == "Não") ? "checked" : ""; ?>> Não<br><br><br>

            <!-- Dados sobre o Funcionamento do Intestino e Aspecto das Fezes -->
            <h2>Dados sobre o funcionamento do intestino e aspecto das fezes</h2>
            Faz cocô todos os dias?
            <input type="radio" name="faz_coco" value="Sim" <?php echo (isset($faz_coco) && $faz_coco == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="faz_coco" value="Não" <?php echo (isset($faz_coco) && $faz_coco == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_faz_coco" placeholder="" value="<?php echo isset($nivel_faz_coco) ? $nivel_faz_coco : ''; ?>"><br>

            Sente muita dor e dificuldades para fazer cocô?
            <input type="radio" name="dor_fazer_coco" value="Sim" <?php echo (isset($dor_fazer_coco) && $dor_fazer_coco == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="dor_fazer_coco" value="Não" <?php echo (isset($dor_fazer_coco) && $dor_fazer_coco == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_dor_fazer_coco" placeholder="" value="<?php echo isset($nivel_dor_fazer_coco) ? $nivel_dor_fazer_coco : ''; ?>"><br>

            Teve alteração no seu hábito intestinal?
            <input type="radio" name="alteracao_habito_intestinal" value="Sim" <?php echo (isset($alteracao_habito_intestinal) && $alteracao_habito_intestinal == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="alteracao_habito_intestinal" value="Não" <?php echo (isset($alteracao_habito_intestinal) && $alteracao_habito_intestinal == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_alteracao_intestino" placeholder="" value="<?php echo isset($nivel_alteracao_intestino) ? $nivel_alteracao_intestino : ''; ?>"><br>

            Tem dificuldade para fazer cocô desde a infância?
            <input type="radio" name="dificuldade_infancia" value="Sim" <?php echo (isset($dificuldade_infancia) && $dificuldade_infancia == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="dificuldade_infancia" value="Não" <?php echo (isset($dificuldade_infancia) && $dificuldade_infancia == "Não") ? "checked" : ""; ?>> Não<br>

            Possui sangramento nas fezes?
            <input type="radio" name="sangramento_fezes" value="Sim" <?php echo (isset($sangramento_fezes) && $sangramento_fezes == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="sangramento_fezes" value="Não" <?php echo (isset($sangramento_fezes) && $sangramento_fezes == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_sangramento_fezes" placeholder="" value="<?php echo isset($nivel_sangramento_fezes) ? $nivel_sangramento_fezes : ''; ?>"><br>

            Tem hemorroida?
            <input type="radio" name="hemorroida" value="Sim" <?php echo (isset($hemorroida) && $hemorroida == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="hemorroida" value="Não" <?php echo (isset($hemorroida) && $hemorroida == "Não") ? "checked" : ""; ?>> Não<br>

            Tem dor no abdômen?
            <input type="radio" name="dor_abdomen" value="Sim" <?php echo (isset($dor_abdomen) && $dor_abdomen == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="dor_abdomen" value="Não" <?php echo (isset($dor_abdomen) && $dor_abdomen == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_dor_abdomen" placeholder="" value="<?php echo isset($nivel_dor_abdomen) ? $nivel_dor_abdomen : ''; ?>"><br>

            <!-- Sobre a Alimentação -->
            <h2>Sobre a Alimentação</h2>
            Come fritura todos os dias?
            <input type="radio" name="come_fritura" value="Sim" <?php echo (isset($come_fritura) && $come_fritura == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="come_fritura" value="Não" <?php echo (isset($come_fritura) && $come_fritura == "Não") ? "checked" : ""; ?>> Não<br>

            Come presunto, apresuntado, mortadela e/ou mussarela todos os dias?
            <input type="radio" name="come_presunto" value="Sim" <?php echo (isset($come_presunto) && $come_presunto == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="come_presunto" value="Não" <?php echo (isset($come_presunto) && $come_presunto == "Não") ? "checked" : ""; ?>> Não<br>

            Come hambúrguer, salsicha, bacon, linguiça calabresa, linguiça tipo toscana ou derivados todos os dias?
            <input type="radio" name="come_hamburguer" value="Sim" <?php echo (isset($come_hamburguer) && $come_hamburguer == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="come_hamburguer" value="Não" <?php echo (isset($come_hamburguer) && $come_hamburguer == "Não") ? "checked" : ""; ?>> Não<br>

            Toma leite em caixinha?
            <input type="radio" name="toma_leite_caixinha" value="Sim" <?php echo (isset($toma_leite_caixinha) && $toma_leite_caixinha == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="toma_leite_caixinha" value="Não" <?php echo (isset($toma_leite_caixinha) && $toma_leite_caixinha == "Não") ? "checked" : ""; ?>> Não<br>

            Usa tempero tipo caldo "knor" ou "sazon"?
            <input type="radio" name="uso_tempero" value="Sim" <?php echo (isset($uso_tempero) && $uso_tempero == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="uso_tempero" value="Não" <?php echo (isset($uso_tempero) && $uso_tempero == "Não") ? "checked" : ""; ?>> Não<br>

            Pelo menos 3 vezes na semana come lanches tipo hambúrgueres, pizza e salgados fritos?
            <input type="radio" name="come_fastfood_sem" value="Sim" <?php echo (isset($come_fastfood_sem) && $come_fastfood_sem == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="come_fastfood_sem" value="Não" <?php echo (isset($come_fastfood_sem) && $come_fastfood_sem == "Não") ? "checked" : ""; ?>> Não<br>

            Come lasanha, lanches prontos vendidos em supermercado e/ou macarrão tipo miojo?
            <input type="radio" name="come_comida_cong" value="Sim" <?php echo (isset($come_comida_cong) && $come_comida_cong == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="come_comida_cong" value="Não" <?php echo (isset($come_comida_cong) && $come_comida_cong == "Não") ? "checked" : ""; ?>> Não<br>

            Come salada e legumes no almoço e no jantar?
            <input type="radio" name="come_salada" value="Sim" <?php echo (isset($come_salada) && $come_salada == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="come_salada" value="Não" <?php echo (isset($come_salada) && $come_salada == "Não") ? "checked" : ""; ?>> Não<br>

            Na salada coloca azeite e/ou tempero todos os dias da semana?
            <input type="radio" name="azeite_tempero" value="Sim" <?php echo (isset($azeite_tempero) && $azeite_tempero == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="azeite_tempero" value="Não" <?php echo (isset($azeite_tempero) && $azeite_tempero == "Não") ? "checked" : ""; ?>> Não<br>

            Teve alguma mudança no hábito alimentar?
            <input type="radio" name="mudanca_habito_alimentar" value="Sim" <?php echo (isset($mudanca_habito_alimentar) && $mudanca_habito_alimentar == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="mudanca_habito_alimentar" value="Não" <?php echo (isset($mudanca_habito_alimentar) && $mudanca_habito_alimentar == "Não") ? "checked" : ""; ?>> Não<br>

            Teve um emagrecimento repentino?
            <input type="radio" name="emagrecimento_repentino" value="Sim" <?php echo (isset($emagrecimento_repentino) && $emagrecimento_repentino == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="emagrecimento_repentino" value="Não" <?php echo (isset($emagrecimento_repentino) && $emagrecimento_repentino == "Não") ? "checked" : ""; ?>> Não<br>
            Nível: <input type="text" name="nivel_emagrecimento_repentino" placeholder="" value="<?php echo isset($nivel_emagrecimento_repentino) ? $nivel_emagrecimento_repentino : ''; ?>"><br><br><br>

            <!-- Histórico -->
            <h2>Histórico</h2>
            Alguém na família que já teve alguma doença no coloretal?
            <input type="radio" name="historico_familiar" value="Sim" <?php echo (isset($historico_familiar) && $historico_familiar == "Sim") ? "checked" : ""; ?>> Sim
            <input type="radio" name="historico_familiar" value="Não" <?php echo (isset($historico_familiar) && $historico_familiar == "Não") ? "checked" : ""; ?>> Não<br>
            Quem? <input type="text" name="quem_historico" placeholder="" value="<?php echo isset($quem_historico) ? $quem_historico : ''; ?>"><br>
            Qual doença? <input type="text" name="qual_doenca" placeholder="" value="<?php echo isset($qual_doenca) ? $qual_doenca : ''; ?>"><br><br>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
