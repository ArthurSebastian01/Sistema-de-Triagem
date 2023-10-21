<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Adicione estilos de fundo verde */
        body {
            font-size: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family: fantasy;
            background: #0ea1338a;
            background-size: cover;
            height: 94vh;
        }

        div {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
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
            opacity: 0.6;
            width: 100%;
        }

        button {
            background-color: #2E8B57;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
        }

        button:hover {
            background-color: green;
            cursor: pointer;
        }

        /* Estilos para o botão de confirmação */
        .btn-deletar {
            background-color: #DC3545;
            border: none;
            padding: 10px 5px;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .btn-deletar:hover {
            background-color: #C82333; /* Cor mais escura quando o botão é hover */
        }

        /* Estilos para o link de cancelamento */
        a {
            text-decoration: none;
            color: white;
            font-size: 15px; /* Tamanho do texto do link */
        }

        a:hover {
            text-decoration: none; /* Remove o sublinhado quando o link é hover */
        }
    </style>
</head>
<body>
    <header>
    </header>
    <main>
        <center><h1>Confirmação de Exclusão de Perfil</h1></center>
        <center><p>Tem certeza de que deseja excluir seu perfil?</p></center>
        <br><br>
        <form method="POST" action="excluir_perfil.php">
            <center><button type="submit" class="btn btn-deletar">Confirmar Exclusão</button></center>
        </form>
        <center><a href="PerfilUser.php">Cancelar</a></center>
    </main>
    <footer>
    </footer>
</body>
</html>
