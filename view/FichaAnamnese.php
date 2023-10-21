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
    <title>FICHA DE ANAMNESE</title>
</head>
<body>
    <div class="container">
        <h1>FICHA DE ANAMNESE</h1>
        <div class="content">

        <form method="POST" action="../control/InserirFicha.php">
            <!-- Dados de Identificação -->
            <h2>Dados de Identificação</h2>
            <label>
                <span>Nome:</span>
                <input type="text" name="nome" placeholder="">
            </label>
            <label>
                <span>Idade:</span>
                <input type="number" name="idade" placeholder="">
            </label>
            <label>
                <span>Peso:</span>
                <input type="number" name="peso" placeholder="">
            </label>
            <label>
                <span>Altura:</span>
                <input type="number" name="altura" placeholder="">
            </label>
            <label>
                <span>Sexo:</span>
                <select name="sexo">
                    <option value="null">Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </label>

            <!-- Dados sobre a Hidratação -->
            <h2>Dados sobre a Hidratação</h2>
            <label>
                <span>Bebe água?</span>
                <input type="radio" name="bebe_agua" value="Sim"> Sim
                <input type="radio" name="bebe_agua" value="Não"> Não
            </label>
            <label>
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_hidratacao" placeholder="">
            </label>
            <label>
                <span>Toma refrigerante?</span>
                <input type="radio" name="toma_refrigerante" value="Sim"> Sim
                <input type="radio" name="toma_refrigerante" value="Não"> Não
            </label>
            <label>
                <span>Teve alguma mudança no hábito de hidratação?</span>
                <input type="radio" name="mudanca_habito_hidratacao" value="Sim"> Sim
                <input type="radio" name="mudanca_habito_hidratacao" value="Não"> Não
            </label>

            <!-- Dados sobre o Funcionamento do Intestino e Aspecto das Fezes -->
            <h2>Dados sobre o funcionamento do intestino e aspecto das fezes</h2>
            <label>
                <span>Faz cocô todos os dias?</span>
                <input type="radio" name="faz_coco" value="Sim"> Sim
                <input type="radio" name="faz_coco" value="Não"> Não
            </label>

            <label>
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_faz_coco" placeholder="">
            </label>

            <label>
                <span>Sente muita dor e dificuldades para fazer cocô?</span>
                <input type="radio" name="dor_fazer_coco" value="Sim"> Sim
                <input type="radio" name="dor_fazer_coco" value="Não"> Não
            </label>

            <label>
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_dor_fazer_coco" placeholder="">
            </label>

            <label>
                <span>Teve alteração no seu hábito intestinal?</span>
                <input type="radio" name="alteracao_habito_intestinal" value="Sim"> Sim
            <input type="radio" name="alteracao_habito_intestinal" value="Não"> Não
            </label>
            
            <label>
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_alteracao_intestino" placeholder="">
            </label>

            <label>
                <span>Tem dificuldade para fazer cocô desde a infância?</span>
                <input type="radio" name="dificuldade_infancia" value="Sim"> Sim
                <input type="radio" name="dificuldade_infancia" value="Não"> Não
            </label>

            <label>
                <span>Possui sangramento nas fezes?</span>
                <input type="radio" name="sangramento_fezes" value="Sim"> Sim
                <input type="radio" name="sangramento_fezes" value="Não"> Não
            </label>

            <label>
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_sangramento_fezes" placeholder="">
            </label>
            <label>
                <span>Tem hemorroida?</span>
                <input type="radio" name="hemorroida" value="Sim"> Sim
                <input type="radio" name="hemorroida" value="Não"> Não
            </label>    
            
            <label>
                <span>Tem dor no abdômen?</span>
                <input type="radio" name="dor_abdomen" value="Sim"> Sim
                <input type="radio" name="dor_abdomen" value="Não"> Não
            </label>
            
            <label >
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_dor_abdomen" placeholder="">
            </label>

            <!-- Sobre a Alimentação -->
            <h2>Sobre a Alimentação</h2>
            <label>
                <span>Come fritura todos os dias?</span>
                <input type="radio" name="come_fritura" value="Sim"> Sim
                <input type="radio" name="come_fritura" value="Não"> Não
            </label>

            <label>
                <span>Come presunto, apresuntado, mortadela e/ou mussarela todos os dias?</span>
                <input type="radio" name="come_presunto" value="Sim"> Sim
                <input type="radio" name="come_presunto" value="Não"> Não
            </label>

            <label>
                <span>Come hambúrguer, salsicha, bacon, linguiça calabresa, linguiça tipo toscana ou derivados todos os dias?</span>
                <input type="radio" name="come_hamburguer" value="Sim"> Sim
                <input type="radio" name="come_hamburguer" value="Não"> Não
            </label>
            
            <label>
                <span>Toma leite em caixinha?</span>
                <input type="radio" name="toma_leite_caixinha" value="Sim"> Sim
                <input type="radio" name="toma_leite_caixinha" value="Não"> Não
            </label>
            
            <label>
                <span>Usa tempero tipo caldo "knor" ou "sazon"?</span>
                <input type="radio" name="uso_tempero" value="Sim"> Sim
                <input type="radio" name="uso_tempero" value="Não"> Não
            </label>
            
            <label>
                <span>Pelo menos 3 vezes na semana come lanches tipo hambúrgueres, pizza e salgados fritos?</span>
                <input type="radio" name="come_fastfood_sem" value="Sim"> Sim
                <input type="radio" name="come_fastfood_sem" value="Não"> Não
            </label>

            <label>
                <span>Come lasanha, lanches prontos vendidos em supermercado e/ou macarrão tipo miojo?</span>
                <input type="radio" name="come_comida_cong" value="Sim"> Sim
                <input type="radio" name="come_comida_cong" value="Não"> Não
            </label>

            <label>
                <span>Come salada e legumes no almoço e no jantar?</span>
                <input type="radio" name="come_salada" value="Sim"> Sim
                <input type="radio" name="come_salada" value="Não"> Não
            </label>

            <label>
                <span>Na salada coloca azeite e/ou tempero todos os dias da semana?</span>
                <input type="radio" name="azeite_tempero" value="Sim"> Sim
                <input type="radio" name="azeite_tempero" value="Não"> Não
            </label>

            <label>
                <span>Teve alguma mudança no hábito alimentar?</span>
                <input type="radio" name="mudanca_habito_alimentar" value="Sim"> Sim
                <input type="radio" name="mudanca_habito_alimentar" value="Não"> Não
            </label>
            
            <label>
                <span>Teve um emagrecimento repentino?</span>
                <input type="radio" name="emagrecimento_repentino" value="Sim"> Sim
                <input type="radio" name="emagrecimento_repentino" value="Não"> Não
            </label>
            
            <label>
                <span>Nível(0-5):</span>
                <input type="text" name="nivel_emagrecimento_repentino" placeholder="">
            </label>

            <!-- Histórico -->
            <h2>Histórico</h2>
            <label>
                <span>Alguém na família que já teve alguma doença no coloretal?</span>
                <input type="radio" name="historico_familiar" value="Sim"> Sim
                <input type="radio" name="historico_familiar" value="Não"> Não
            </label>

            <label>
                <span>Quem?</span>
                <input type="text" name="quem_historico" placeholder="">
            </label>

            <label>
                <span>Qual doença?</span>
                <input type="text" name="qual_doenca" placeholder="">
            </label>  
            <input type="submit" value="Enviar class="btn_atualizar">  
        </form>

</div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
