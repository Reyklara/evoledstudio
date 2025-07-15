<html>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="utf8">

    <body class="a2">
        <section>
            <div>
                <img class="img1" src="CSS/imagem/logo png.png">
                <h1 class="a4">AGENDAMENTOS</h1>
            </div>
        </section>
          <section>
            <div>
                <h1 class="a1">Evoled Studio</h1>
            </div>
          </section>
             <section>
                <h1 class="agd">Amiga, Já pode agendar sua Cita!</h1><br>
             </section>
            <section>
                <form action="agendamento.php" method="get">
                <input class="agd1" type="text" placeholder="NOME" name="nome"><br><br>
                <input class="agd1" type="number" placeholder="TELEFONE" name="telf"><br><br>
                <h3 class="agd">Data do Serviço</h3>
                <input class="agd2" type="date" placeholder="DATA" name="datserv"><br><br>
                <h3 class="agd5">Horarios</h3>
                <select class="agd3"   name="horario">
                    <option>8:00</option>
                    <option>9:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>14:00</option>
                    <option>15:00</option>
                    <option>16:00</option>
                    <option>17:00</option>
                    <option>18:00</option>
                </select><br><br>
               
                <h3 class="agd">Serviço(s)</h3>
                <select class="agd1" name="serv1">
                <option>Tranças</option>
                <option>Corte</option>
                <option>Tinturação</option>
                <option>Cronograma de Hidratação</option>
                </select><br><br>

                <input class="env" type="submit" name="ativar"><br>

            </section> <br><br>
            
            <section>
                <a href="https://wa.me/message/73ACF4MW5HENP1"><H1 class="agd">Ou, Pode agendar sua cita pelo Whatsapp</H1></a>
                
            </section><br><br>
            <section>
                <a href="index.html">Voltar ao Inicio</a>
            </section>
            </form>
    </body>
</html>

<?php

@$ativar = $_GET["ativar"];
if($ativar == "Enviar"){

    $nome = $_GET["nome"];
    $telf = $_GET["telf"];
    $datserv = $_GET["datserv"];
    $horario = $_GET["horario"];
    $serv1 = $_GET["serv1"];




    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "agendamento";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    $sql = "insert into agendamento(nome,telf,datserv,horario,serv1) values('$nome','$telf','$datserv','$horario','$serv1')";
    $executar = mysqli_query($conexao,$sql);

}
?>




