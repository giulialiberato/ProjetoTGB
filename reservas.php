<?php

    if(isset($_POST['submit']))
    {

      include_once('config.php');

      $nomereserva = $_POST['nomereserva'];
      $emailreserva = $_POST['emailreserva'];
      $telefonreserva = $_POST['telefonereserva'];
      $datareserva = $_POST['datareserva'];
      $convidados = $_POST['convidados'];

      $result = mysqli_query($conexao,"INSERT INTO reservas(nome,email,telefone,datareserva,convidados) VALUES ('$nomereserva','$emailreserva','$telefonereserva','$datareserva','$convidados')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>The Good Burger</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav-bar">

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="index.html" target="_self" class="nav-link">SOBRE NÓS</a></li>
                    <li class="nav-item"><a href="contato.php" target="_self" rel="next" class="nav-link" >CONTATO</a></li>
                    <li class="nav-item"><a href="reservas.php" target="_self" rel="next" class="nav-link">RESERVAS</a></li>
                    <li class="nav-item"><a href="menu.html" target="_self" rel="next" class="nav-link">MENU</a></li>
                    <li class="nav-item"><a href="paginaQuiz.html" target="_self" rel="next" class="nav-link">QUIZ</a></li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="imagens/icone-menu-jaune.png" alt="" style="width: 27px;"></button>
            </div>
        </nav>
        
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="index.html" target="_self" class="nav-link">SOBRE NÓS</a></li>
                <li class="nav-item"><a href="contato.html" target="_self" rel="next" class="nav-link" >CONTATO</a></li>
                <li class="nav-item"><a href="reservas.html" target="_self" rel="next" class="nav-link">RESERVAS</a></li>
                <li class="nav-item"><a href="menu.html" target="_self" rel="next" class="nav-link">MENU</a></li>
            </ul>
        </div>     
    </header>

    <script src="script.js"></script>
    <main>
        <img src="imagens/foto-orcamento.jpg" alt="foto.orcamentos" width="100%">
        
        <div class="container2">
            <form action="">
                <p class="titulo"> FAÇA SUA RESERVA CONOSCO!</p>
                    <div class="inputBox">
                        <label for="nomereserva">Nome:</label><br>
                        <input type="text" name="nomereserva" id="nomereserva" class="inputOrcamento" required>
                    </div>
                    <div class="inputBox">
                        <label for="emailreserva">E-mail:</label><br>
                        <input type="email" name="emailreserva" id="emailreserva" class="inputOrcamento" required>
                    </div>
                    <div class="inputBox">
                        <label for="telefonereserva">Telefone/WhatsApp:</label><br>
                        <input type="tel" name="telefonereserva" id="telefonereserva" class="inputOrcamento" required>
                    </div>
                    <div class="inputBox">
                        <label for="data">Data:</label><br>
                        <input type="date" name="datareserva" id="datareserva" class="inputOrcamento" required>
                    </div>
                    <div class="inputBox">
                        <label for="convidados">Quantidade de Convidados:</label><br>
                        <input type="number" name="convidados" id="convidados" class="inputOrcamento" required>
                    </div>
                    
                    

                    <input type="submit" name="submit" id="submit" >
            </form>
        </div>
        
        <button class="whatsApp"><a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511964684178"><img
            src="imagens/WhatsApp-icone.png" data-selector="img"></a></button>
    </main>
    <footer>
        <p>Site para fins educativos, dados e localizações genéricos.</p>
    </footer>
</body>
</html>