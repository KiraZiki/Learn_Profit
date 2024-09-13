<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Profit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" href="img/logo.png" sizes="60x60">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <header>
        <div class="headerL">
            <section class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo Learn Profit" class="logoimg"></a></section>
            <div class="inheaderL">
                <section class="aula"><a href="pages/aulas/index.php">Aulas</a></section>
                <section class="suport"><a href="pages/suporte/index.php">Suporte</a></section>
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
    <div class="main">
        <div class="sobre">
            <section class="text"></section>
            <section class="textS">
                <p>Durante nossos estudos vimos que há uma lacuna no ensino de estrutura de dados. 
                    Muitos recursos disponíveis eram densos e difíceis de entender para iniciantes. 
                    Por isso, decidimos criar a empresa, Learn Profit, com o objetivo de simplificar o ensino de 
                    estrutura de dados. Nós queremos tornar o aprendizado dessa área crucial da ciência da computação acessível a 
                    todos, desde iniciantes até profissionais experientes. Assim, o site Learn Profit foi 
                    lançado, oferecendo tutoriais  e materiais didáticos que explicam de maneira clara e prática 
                    os conceitos de estrutura de dados.</p>
            </section>
        </div>
        <div class="criadores">
            <div class="owners">
                <section class="owner">
                    <section class="fotoOw"><img src="img/high.png" alt="Foto Daniel"></section>
                    <section class="nameOw">Daniel Jacometo</section>
                </section>
                <section class="owner">
                    <section class="fotoOw"><img src="img/beginner.png" alt="Foto Samira"></section>
                    <section class="nameOw">Samira Acioli</section>
                </section>
                <section class="owner">
                    <section class="fotoOw"><img src="img/median.png" alt="Foto Gabriel"></section>
                    <section class="nameOw">Gabriel Camargo</section>
                </section>
            </div>
        </div>
    </div>
    <footer>
        <section class="footerL">
        </section>
        <section class="footerM">
            <h1>Learn Profit</h1>
        </section>
        <section class="footerR">
            <p><div class="p"><a href="https://github.com/KiraZiki">KiraZIKI</a><img src="img/github.png" alt="GitHub KiraZIKI"></div></p>
            <p><div class="p"><a href="https://github.com/samcioli">Samcioli</a><img src="img/github.png" alt="GitHub Samcioli"></div></p>
            <p><div class="p"><a href="https://github.com/Camarginho">Camarginho</a><img src="img/github.png" alt="GitHub Camarginho"></div></p>
        </section>
    </footer>


    <script src='main.js'></script>
</body>
</html>