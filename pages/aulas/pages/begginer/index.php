<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Profit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" href="../../../../img/logo.png" sizes="60x60">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
    <body>
    <header>
        <div class="headerL">
            <section class="logo"><a href="../../../../index.php"><img src="../../../../img/logo.png" alt="Logo Learn Profit" class="logoimg"></a></section>
            <div class="inheaderL">
                <section class="aula"><a href="../../index.php">Aulas</a></section>
                <section class="suport"><a href="../../suporte/index.php">Suporte</a></section>
            </div>
        </div>
        <section class="headerR">
            <svg onclick="showmenu()" xmlns="http://www.w3.org/2000/svg" width="90%" height="90%" viewBox="0 0 24 24" class="svg"><path d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z"></path></svg>
            <div class="menuLR" id="menuLR">
                <div class="first" id="first">
                    <Button onclick="chosemenu()">Login</Button>
                    <Button><a href="pages/cadastro/index.php">Registrar</a></Button>
                </div>
                <div class="second" id="second">
                    <form action="." method="POST">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Senha">
                        <input type="submit" value="LogIn">
                    </form>
                </div>
            </div>
        </section>
    </header>
    <section class="main" onclick="showmenu()">
        <nav class="mTop">
            <div class="op1">Conteúdo</div>
            <div class="op2">Atividade</div>
        </nav>
        <nav class="corpo">
            <nav class="conteudo">
                <p>!!!INSERIR AQUI O CONTEÚDO!!!</p>
                <p>!!!O DESIGN SE REAJUSTA DE ACORDO COM O CONTEUDO DENTRO!!!</p>
                <p>!!!COLOQUE QUANTAS COISAS QUISER DENTRO DESTA NAV CONTEUDO!!!</p>
                <p>!!!EM CASO DAS LETRAS FICAREM MUITO PEQUENAS COLOQUE UM font-size NO CSS</p>
                <p>NA CLASS DO CONTEUDO, POR FAVOR COLOCAR EM MEDIDA (em) RECOMENDO</p>
                <p class="pequena">1em: PARA LETRAS QUE PRECISAM SER PEQUENAS;</p>
                <p class="media">2em: PARA LETRAS QUE PRECISAM SER MÉDIAS;</p>
                <p class="maior">3em: PARA LETRAS QUE PRECISAM SER MAIORES;</p>
                <p>ESTAS SÃO AS RECOMENDAÇÕES, DIANTE DISTO AGRADEÇO!!!</p>
                <p>!!!CASO O TAMANHO AINDA PERMANECA RUIM É POSSIVEL USAR NUMEROS</p>
                <p class="decimal">DECIMAIS NA MEDIDA (em), COMO POR EXEMPLO 1.75em!!!</p>
                <p>!!!QUANDO CONTEUDO FOR ADICIONADO, FAVOR REMOVER TODOS ESTES ALERTAS</p>
                <p>DO .php E DO .css!!!</p>
            </nav>
            <nav class="atividade">
                <p>!!!ESTA PARTE SERÁ FALTA POR MIM DANIEL APÓS A ENTREGA DE DOMINGO, NÃO COLOQUE NADA AQUI!!!</p>
            </nav>
        </nav>
    </section>
    <script src='main.js'></script>
</body>
</html>