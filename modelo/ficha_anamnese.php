<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ficha de Anamnese</title>
    <style>
        body{
            font-size: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family:fantasy;
            background: #0ea1338a;
            background-size: cover;
            height: 101vh;
        }
        div{
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            height: 55vh;
        }
        input, select, textarea {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            background-color: transparent;
            color: black;
        }
        button{
            background-color: #2E8B57;
            border: none;
            padding: 15px;
            width: 30%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
        }
        button:hover{
            background-color:green;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div>
  <h1><center>Ficha de Anamnese</center></h1>
  <br><br>
  <center>
  <center><h2>Dados de Identificação</h2></center>
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
        <center><h2>Dados sobre a Hidratação</h2></center>
        Bebe água?
        <input type="checkbox" name="bebe_agua" value="Sim"> Sim
        <input type="checkbox" name="bebe_agua" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_faz_coco" placeholder=""><br>
        Não bebo água: -5<br>
        Bebo menos de 5 copos de água por dia. -4 <br>
        Bebo cerca de 5 copos de água por dia. -3<br>
        Bebo mais de 5 copos de água por dia -2<br>
        Bebo de 8 a 10 copos de água por dia. -1<br>
        Bebo mais de 10 copos de água por dia. -0<br>
        <br><br>

        Toma refrigerante?
        <input type="checkbox" name="toma_refrigerante" value="Sim"> Sim
        <input type="checkbox" name="toma_refrigerante" value="Não"> Não
        <br><br>

        Teve alguma mudança no hábito de hidratação?
        <input type="checkbox" name="mudanca_habito_hidratacao" value="Sim"> Sim
        <input type="checkbox" name="mudanca_habito_hidratacao" value="Não"> Não
        <br><br><br>

        <!-- Dados sobre o Funcionamento do Intestino e Aspecto das Fezes -->
        <center> <h2>Dados sobre o funcionamento do intestino e aspecto das fezes</h2></center>
        Faz cocô todos os dias?
        <input type="checkbox" name="faz_coco" value="Sim"> Sim
        <input type="checkbox" name="faz_coco" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_faz_coco" placeholder=""><br>
        Não faz cocô.-5<br>
        Faz cocô a cada 5 dias. -4<br>
        Faz cocô a cada 4 dias. -3<br>
        Faz cocô a cada 3 dias. -2<br>
        Faz cocô a cada dois dias. -1<br>
        Faz cocô 1 vez por semana. -0<br>
        <br><br>

        Sente muita dor e dificuldades para fazer cocô?
        <input type="checkbox" name="dor_fazer_coco" value="Sim"> Sim
        <input type="checkbox" name="dor_fazer_coco" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_dor_fazer_coco" placeholder=""><br>
        Muito. -5<br>
        Pouca. -0<br>
        <br><br>

        Teve alteração no seu hábito intestinal?
        <input type="checkbox" name="alteracao_habito_intestinal" value="Sim"> Sim
        <input type="checkbox" name="alteracao_habito_intestinal" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_dor_intestino" placeholder=""><br>
        Muito alteração. -5<br>
        Pouca alteração. -0<br>
        <br><br>

        Tem dificuldade para fazer cocô desde a infância?
        <input type="checkbox" name="dificuldade_infancia" value="Sim"> Sim
        <input type="checkbox" name="dificuldade_infancia" value="Não"> Não
        <br><br>

        Possui sangramento nas fezes?
        <input type="checkbox" name="sangramento_fezes" value="Sim"> Sim
        <input type="checkbox" name="sangramento_fezes" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_sangramento_fezes" placeholder=""><br>
        Muito sangue. -5<br>
        Pouco sangue. -0<br>
        <br><br>

        Tem hemorroida?
        <input type="checkbox" name="hemorroida" value="Sim"> Sim
        <input type="checkbox" name="hemorroida" value="Não"> Não
        <br><br>

        Tem dor no abdômen?
        <input type="checkbox" name="dor_intestino" value="Sim"> Sim
        <input type="checkbox" name="dor_intestino" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_dor_intestino" placeholder=""><br>
        Muito Dor. -5<br>
        Pouca dor. -0<br>

        <!-- Sobre a Alimentação -->
        <center><h2>Sobre a Alimentação</h2></center>
        Come fritura todos os dias?
        <input type="checkbox" name="come_fritura" value="Sim"> Sim
        <input type="checkbox" name="come_fritura" value="Não"> Não
        <br><br>

        Come presunto, apresuntado, mortadela e/ou mussarela todos os dias?
        <input type="checkbox" name="come_presunto" value="Sim"> Sim
        <input type="checkbox" name="come_presunto" value="Não"> Não
        <br><br>

        Come hambúrguer, salsicha, bacon, linguiça calabresa, linguiça tipo toscana ou derivados todos os dias?
        <input type="checkbox" name="come_hamburguer" value="Sim"> Sim
        <input type="checkbox" name="come_hamburguer" value="Não"> Não
        <br><br>

        Toma leite em caixinha?
        <input type="checkbox" name="toma_leite_caixinha" value="Sim"> Sim
        <input type="checkbox" name="toma_leite_caixinha" value="Não"> Não
        <br><br>

        Uso tempero tipo caldo "knor" ou "sazon"?
        <input type="checkbox" name="uso_tempero" value="Sim"> Sim
        <input type="checkbox" name="uso_tempero" value="Não"> Não
        <br><br>

        Pelo menos 3 vezes na semana come lanches tipo hambúrgueres, pizza e salgados fritos?
        <input type="checkbox" name="come_lanches" value="Sim"> Sim
        <input type="checkbox" name="come_lanches" value="Não"> Não
        <br><br>

        Come lasanha, lanches prontos vendidos em supermercado e/ou macarrão tipo miojo?
        <input type="checkbox" name="come_lasanha" value="Sim"> Sim
        <input type="checkbox" name="come_lasanha" value="Não"> Não
        <br><br>

        Come salada e legumes no almoço e no jantar?
        <input type="checkbox" name="come_salada" value="Sim"> Sim
        <input type="checkbox" name="come_salada" value="Não"> Não
        <br><br>

        Na salada coloca azeite e/ou tempero todos os dias da semana?
        <input type="checkbox" name="azeite_tempero" value="Sim"> Sim
        <input type="checkbox" name="azeite_tempero" value="Não"> Não
        <br><br>

        Teve alguma mudança no hábito alimentar?
        <input type="checkbox" name="mudanca_habito_alimentar" value="Sim"> Sim
        <input type="checkbox" name="mudanca_habito_alimentar" value="Não"> Não
        <br><br>

        Teve um emagrecimento repentino?
        <input type="checkbox" name="emagrecimento_repentino" value="Sim"> Sim
        <input type="checkbox" name="emagrecimento_repentino" value="Não"> Não<br>
        Nível: <input type="text" name="nivel_emagrecimento_repentino" placeholder=""><br>
        Perdi muito peso. -5<br>
        Perdi pouco peso, mas perdi. -0<br>
        <br><br><br>

        <!-- Histórico -->
        <center><h2>Histórico</h2></center>
        Alguém na família que já teve alguma doença no coloretal?
        <input type="checkbox" name="historico_familiar" value="Sim"> Sim
        <input type="checkbox" name="historico_familiar" value="Não"> Não
        <br>
        Quem? <input type="text" name="quem_historico" placeholder=""><br>
        Qual doença? <input type="text" name="qual_doenca" placeholder="" rows="3" cols="32"><br>
        <br>
    <form action="tela-principal.html" method="POST">

    <button type="submit">Enviar</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
