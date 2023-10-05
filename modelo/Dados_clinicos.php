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
            top: 25%;
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
        <h2>Dados de Identificação</h2>
        <form method="POST" action="InserirFicha.php">
            Nome: <input type="text" name="nome" placeholder=""><br>
            Idade: <input type="number" name="idade" placeholder=""><br>
            Peso: <input type="number" name="peso" placeholder=""><br>
            Altura: <input type="number" name="altura" placeholder=""><br>
            Sexo:
            <select name="sexo">
                <option value="null">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <br><br><br>

            <!-- Dados sobre a Hidratação -->
            <h2>Dados sobre a Hidratação</h2>
            Bebe água?
            <input type="radio" name="bebe_agua" value="Sim"> Sim
            <input type="radio" name="bebe_agua" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_hidratacao" placeholder=""><br>

            Toma refrigerante?
            <input type="radio" name="toma_refrigerante" value="Sim"> Sim
            <input type="radio" name="toma_refrigerante" value="Não"> Não<br>

            Teve alguma mudança no hábito de hidratação?
            <input type="radio" name="mudanca_habito_hidratacao" value="Sim"> Sim
            <input type="radio" name="mudanca_habito_hidratacao" value="Não"> Não<br><br><br>

            <!-- Dados sobre o Funcionamento do Intestino e Aspecto das Fezes -->
            <h2>Dados sobre o funcionamento do intestino e aspecto das fezes</h2>
            Faz cocô todos os dias?
            <input type="radio" name="faz_coco" value="Sim"> Sim
            <input type="radio" name="faz_coco" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_faz_coco" placeholder=""><br>

            Sente muita dor e dificuldades para fazer cocô?
            <input type="radio" name="dor_fazer_coco" value="Sim"> Sim
            <input type="radio" name="dor_fazer_coco" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_dor_fazer_coco" placeholder=""><br>

            Teve alteração no seu hábito intestinal?
            <input type="radio" name="alteracao_habito_intestinal" value="Sim"> Sim
            <input type="radio" name="alteracao_habito_intestinal" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_alteracao_intestino" placeholder=""><br>

            Tem dificuldade para fazer cocô desde a infância?
            <input type="radio" name="dificuldade_infancia" value="Sim"> Sim
            <input type="radio" name="dificuldade_infancia" value="Não"> Não<br>

            Possui sangramento nas fezes?
            <input type="radio" name="sangramento_fezes" value="Sim"> Sim
            <input type="radio" name="sangramento_fezes" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_sangramento_fezes" placeholder=""><br>

            Tem hemorroida?
            <input type="radio" name="hemorroida" value="Sim"> Sim
            <input type="radio" name="hemorroida" value="Não"> Não<br>

            Tem dor no abdômen?
            <input type="radio" name="dor_abdomen" value="Sim"> Sim
            <input type="radio" name="dor_abdomen" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_dor_abdomen" placeholder=""><br>

            <!-- Sobre a Alimentação -->
            <h2>Sobre a Alimentação</h2>
            Come fritura todos os dias?
            <input type="radio" name="come_fritura" value="Sim"> Sim
            <input type="radio" name="come_fritura" value="Não"> Não<br>

            Come presunto, apresuntado, mortadela e/ou mussarela todos os dias?
            <input type="radio" name="come_presunto" value="Sim"> Sim
            <input type="radio" name="come_presunto" value="Não"> Não<br>

            Come hambúrguer, salsicha, bacon, linguiça calabresa, linguiça tipo toscana ou derivados todos os dias?
            <input type="radio" name="come_hamburguer" value="Sim"> Sim
            <input type="radio" name="come_hamburguer" value="Não"> Não<br>

            Toma leite em caixinha?
            <input type="radio" name="toma_leite_caixinha" value="Sim"> Sim
            <input type="radio" name="toma_leite_caixinha" value="Não"> Não<br>

            Usa tempero tipo caldo "knor" ou "sazon"?
            <input type="radio" name="uso_tempero" value="Sim"> Sim
            <input type="radio" name="uso_tempero" value="Não"> Não<br>

            Pelo menos 3 vezes na semana come lanches tipo hambúrgueres, pizza e salgados fritos?
            <input type="radio" name="come_fastfood_sem" value="Sim"> Sim
            <input type="radio" name="come_fastfood_sem" value="Não"> Não<br>

            Come lasanha, lanches prontos vendidos em supermercado e/ou macarrão tipo miojo?
            <input type="radio" name="come_comida_cong" value="Sim"> Sim
            <input type="radio" name="come_comida_cong" value="Não"> Não<br>

            Come salada e legumes no almoço e no jantar?
            <input type="radio" name="come_salada" value="Sim"> Sim
            <input type="radio" name="come_salada" value="Não"> Não<br>

            Na salada coloca azeite e/ou tempero todos os dias da semana?
            <input type="radio" name="azeite_tempero" value="Sim"> Sim
            <input type="radio" name="azeite_tempero" value="Não"> Não<br>

            Teve alguma mudança no hábito alimentar?
            <input type="radio" name="mudanca_habito_alimentar" value="Sim"> Sim
            <input type="radio" name="mudanca_habito_alimentar" value="Não"> Não<br>

            Teve um emagrecimento repentino?
            <input type="radio" name="emagrecimento_repentino" value="Sim"> Sim
            <input type="radio" name="emagrecimento_repentino" value="Não"> Não<br>
            Nível: <input type="text" name="nivel_emagrecimento_repentino" placeholder=""><br><br><br>

            <!-- Histórico -->
            <h2>Histórico</h2>
            Alguém na família que já teve alguma doença no coloretal?
            <input type="radio" name="historico_familiar" value="Sim"> Sim
            <input type="radio" name="historico_familiar" value="Não"> Não<br>
            Quem? <input type="text" name="quem_historico" placeholder=""><br>
            Qual doença? <input type="text" name="qual_doenca" placeholder=""><br><br>

            <center><button type="submit">Enviar</button></center>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
