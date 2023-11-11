<?php
 if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
  include_once("./components/navbar.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/relatorio_geral.css">
    <link rel="stylesheet" href="../css/style_global.css">
    <style>
        .container {
            text-align: center; /* Centraliza o conteúdo */
        }
        .content {
            display: inline-block; /* Permite centralizar o conteúdo */
            text-align: left; /* Alinha o texto à esquerda dentro da div */
        }
        .info-right {
            text-align: right; /* Alinha à direita */
        }
    </style>
    <title>Relatorio Geral</title>
</head>
<body>
<div class="container">
  <h1>RELATORIO GERAL</h1><br><br>
  <div class="content">

  <?php
  // Coloque o código de conexão com o banco de dados aqui (substitua pelas suas configurações)
  $servidor = "localhost";
  $usuario = "root";
  $senha_db = "";
  $banco = "sistema_triagem";

  $conexao = new mysqli($servidor, $usuario, $senha_db, $banco);

  if ($conexao->connect_error) {
      die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
  }

  // Suponha que você já possui o $id_usuario disponível (você pode obtê-lo da sessão, por exemplo)
  $email = $_SESSION['email'];
  $consulta_usuario = "SELECT id, nome, sexo, idade FROM usuarios WHERE email = '$email'";
  $resultado_usuario = $conexao->query($consulta_usuario);

  if ($resultado_usuario && $resultado_usuario->num_rows > 0) {
      $row_usuario = $resultado_usuario->fetch_assoc();
      $id_usuario = $row_usuario['id'];

      // Consulta para obter os dados da tabela 'ficha' com base no 'id_usuario'
      $consulta_ficha = "SELECT nivel_alteracao_intestino, nivel_sangramento_fezes, nivel_dor_abdomen, nivel_emagrecimento_repentino FROM ficha WHERE id_usuario = '$id_usuario'";
      $resultado_ficha = $conexao->query($consulta_ficha);

      if ($resultado_ficha && $resultado_ficha->num_rows > 0) {
          $row_ficha = $resultado_ficha->fetch_assoc();

          echo"Laudo do Sistema";
          echo "<br><br>"; 
          // Exibir os níveis e os valores
          echo "<div class='content'>";
          echo "<hr style='border-top: 2px solid black;'>"; // Linha horizontal preta
          echo "<br><br>"; // Dois <br> após a linha

          echo "<div style='display: flex; justify-content: space-between;'>";
          echo "<div style='display: flex; flex-direction: column; justify-content: space-between;'>";
          echo "<p>Nome: " . $row_usuario['nome'] . "</p>";
          echo "<p>Idade: " . $row_usuario['idade'] . "</p>";
          echo "<p>Sexo: " . $row_usuario['sexo'] . "</p>";
          echo "</div>";

          echo "<div style='text-align: right; display: flex; flex-direction: column; justify-content: space-between;'>";
          echo "<p style='align-self: flex-end;'>Indicação: Avaliação Médica</p>";

          // Data do relatório
          echo "<p style='align-self: flex-end;'>Data do Relatório: " . date('d/m/Y') . "</p>";

          echo "</div>";

          echo "</div>";
          echo "<hr style='border-top: 2px solid black; margin: 10px 0;'>"; // Linha horizontal preta
          echo"<br><br>";

          echo"Conclusão";
          echo"<br><br>";
          // Calcule a média dos valores
          
          $media = ($row_ficha['nivel_alteracao_intestino'] + $row_ficha['nivel_sangramento_fezes'] + $row_ficha['nivel_dor_abdomen'] + $row_ficha['nivel_emagrecimento_repentino']) / 4;
          if($media>=4){
            echo "Prezado(a),
            
            Conforme nossos registros e análises de dados, observamos que o seu estado de saúde não está de acordo com o padrão de referência esperado.<br><br>
  
            É importante priorizar a sua saúde e bem-estar. Recomendamos que você agende uma consulta médica o mais breve possível para uma avaliação mais detalhada e discussão sobre o melhor plano de tratamento, tendo em vista que os resultados obtidos podem não estar coerentes.<br><br>
            
            Lembramos que a prevenção e o cuidado atempado são fundamentais para uma vida saudável.<br><br>

            Segue seus resulatados abaixo:<br><br>";

            echo "<br>";
          }

          if($media<4){
            if($media>=3){
            echo "Prezado(a),
            
            Conforme nossos registros e análises de dados, observamos que o seu estado de saúde não está totalmente de acordo com o padrão de referência esperado.<br><br>
  
            É importante priorizar a sua saúde e bem-estar. Recomendamos que você agende uma consulta médica o mais breve possível para uma avaliação mais detalhada e discussão sobre o melhor plano de tratamento, tendo em vista que os resultados obtidos podem não estar coerentes.<br><br>
            
            Lembramos que a prevenção e o cuidado atempado são fundamentais para uma vida saudável.<br><br>

            Segue seus resulatados abaixo:<br><br>";

            echo "<br>";
          }
        }

          if($media<3){
            if($media>=2){
            echo "Prezado(a),

            Conforme nossos registros e análises de dados, observamos que o seu estado de saúde está bem proximo do padrão de referência esperado, mas não em uma media aceitavel.<br><br>
  
            É importante priorizar a sua saúde e bem-estar. Recomendamos que você agende uma consulta médica o mais breve possível para uma avaliação mais detalhada e discussão sobre o melhor plano de tratamento, tendo em vista que os resultados obtidos podem não estar coerentes.<br><br>
            
            Lembramos que a prevenção e o cuidado atempado são fundamentais para uma vida saudável.<br><br>

            Segue seus resulatados abaixo:<br><br>";

            echo "<br>";
          }
        }

        if($media>1){
            if($media<2){
            echo "Prezado(a),

            Conforme nossos registros e análises de dados, observamos que o seu estado de saúde está em um media aceitavel com o padrão de referência esperado.<br><br>
  
            É importante priorizar a sua saúde e bem-estar. Recomendamos que mesmo que os resultados estejam de acordo com o padrão esperado que você agende uma consulta médica o mais breve possível para uma avaliação mais detalhada e discussão sobre o melhor plano de tratamento, tendo em vista que os resultados obtidos podem não estar coerentes.<br><br>
            
            Lembramos que a prevenção e o cuidado atempado são fundamentais para uma vida saudável.<br><br>

            Segue seus resulatados abaixo:<br><br>";

            echo "<br>";
          }
        }

        if($media<=1){
            echo "Prezado(a),

            Conforme nossos registros e análises de dados, observamos que o seu estado de saúde está está de acordo com o padrão de referência esperado.<br><br>
  
            É importante priorizar a sua saúde e bem-estar. Recomendamos que mesmo que os resultados estejam de acordo com o padrão esperado que você agende uma consulta médica o mais breve possível para uma avaliação mais detalhada e discussão sobre o melhor plano de tratamento, tendo em vista que os resultados obtidos podem não estar coerentes.<br><br>
            
            Lembramos que a prevenção e o cuidado atempado são fundamentais para uma vida saudável.<br><br>

            Segue seus resulatados abaixo:<br><br>";

            echo "<br>";
          }

          echo "<p>Nível de Alteração no Intestino: " . determinarNivel($row_ficha['nivel_alteracao_intestino']) . " (Valor: " . $row_ficha['nivel_alteracao_intestino'] . ")</p>";
          echo "<br>";
          echo "<p>Nível de Sangramento nas Fezes: " . determinarNivel($row_ficha['nivel_sangramento_fezes']) . " (Valor: " . $row_ficha['nivel_sangramento_fezes'] . ")</p>";
          echo "<br>";
          echo "<p>Nível de Dor Abdominal: " . determinarNivel($row_ficha['nivel_dor_abdomen']) . " (Valor: " . $row_ficha['nivel_dor_abdomen'] . ")</p>";
          echo "<br>";
          echo "<p>Nível de Emagrecimento Repentino: " . determinarNivel($row_ficha['nivel_emagrecimento_repentino']) . " (Valor: " . $row_ficha['nivel_emagrecimento_repentino'] . ")</p>";


          echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
          // Exibindo data atual
          echo "<div class='info-right'>";
          echo "<p>Equipe SISTECCRE</p>";
          echo date('d/m/Y') . "</p>";
          echo "</div>";
          echo "</div>";
      } else {
          // Trate o caso em que não há dados na tabela 'ficha' para o 'id_usuario'
          // Você pode definir valores padrão ou fazer qualquer outra coisa
      }
  } else {
      echo "Nenhum dado encontrado para este usuário.";
  }

  // Função para determinar o nível com base no valor
  function determinarNivel($valor) {
      if ($valor <= 1) {
          return "Nivel Normal";
      } elseif ($valor >= 2 && $valor <= 3) {
          return "Nivel Intermediário";
      } elseif ($valor == 4) {
          return "Nivel Preocupante";
      } elseif ($valor == 5) {
          return "Nivel Grave";
      }
  }

  // Feche a conexão com o banco de dados
  $conexao->close();
  ?>
    
 </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
