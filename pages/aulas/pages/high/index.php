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
            <p class="maior">Aula sobre TAD (Tipo Abstrato de Dados)</p>
                <p class="media">Os Tipos Abstratos de Dados (TADs) são um conceito fundamental em ciência da computação e programação, fornecendo uma maneira de definir e manipular dados de forma abstrata. Neste texto, exploraremos o que são TADs, suas vantagens, desvantagens e como implementá-los em PHP com exemplos de código comentados.</p>
                <p class="maior"><br>O que é um TAD?</p>
                <p class="media">Um Tipo Abstrato de Dados (TAD) é uma definição formal de uma estrutura de dados, juntamente com um conjunto de operações que podem ser realizadas sobre essa estrutura. Um TAD especifica o que deve ser feito, mas não como deve ser feito. Ele se concentra na interface pública e no comportamento, ocultando a implementação interna.</p>
                <p class="maior"><br>Características dos TADs</p>
                <p class="media">Abstração: Os detalhes internos da implementação são ocultos, permitindo que os usuários interajam com a estrutura de dados sem conhecer sua implementação.<br>Encapsulamento: A implementação dos dados e das operações é encapsulada dentro de uma interface bem definida.<br>Reusabilidade: Os TADs podem ser reutilizados em diferentes partes de um programa ou em diferentes projetos.<br>Modularidade: Facilitam a decomposição de um problema em partes menores e manejáveis.</p>
                <p class="maior"><br>Exemplos Comuns de TADs</p>
                <p class="media">Pilha (Stack): Uma estrutura LIFO (Last In, First Out).<br>Fila (Queue): Uma estrutura FIFO (First In, First Out).<br>Lista (List): Uma coleção de elementos com operações para inserção, remoção e acesso.<br>Mapa (Map) ou Dicionário (Dictionary): Uma coleção de pares chave-valor.</p>
                <p class="maior"><br>Implementação de um TAD em PHP: Exemplo de uma Pilha (Stack)</p>
                <p class="media"><br>Vamos implementar uma pilha (Stack) em PHP para ilustrar o conceito de TAD.<br>Definição da Interface<br>Primeiro, definimos a interface que especifica as operações da pilha.</p>
                <p><br><img src="../../../../img/tad.png"></p>
                <p class="media"><br>Implementação da Pilha<br>Agora, implementamos a interface em uma classe Stack.</p>
                <p><br><img src="../../../../img/abstrato de dados/1-inicio.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/2-Push10.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/3-Push20.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/4-push30.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/5-Peek.png"></p>
                <p><br><img src="../../../../img/tad2.png"></p>   
                <p><br><img src="../../../../img/abstrato de dados/6-Pop30.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/7-isEmpty ();.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/8-Pop20.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/9-pop10.png"></p>
                <p><br><img src="../../../../img/abstrato de dados/10-isEmpty (True).png"></p>
                <p class="maior"><br>Comentários sobre a Implementação</p>
                <p class="media">push($item): Adiciona um item ao topo da pilha usando a função array_push.<br>pop(): Remove e retorna o item do topo da pilha. Lança uma exceção se a pilha estiver vazia.<br>peek(): Retorna o item do topo da pilha sem removê-lo. Lança uma exceção se a pilha estiver vazia.<br>isEmpty(): Verifica se a pilha está vazia retornando true se o array de itens estiver vazio.<br></p>
                <p class="maior"><br>Exemplo de Uso</p>
                <p class="media">Vamos demonstrar como usar a pilha implementada.</p>
                <p><br><img src="../../../../img/exemplotad.png"></p>
                <p class="maior"><br>Vantagens dos TADs</p>
                <p class="media">Abstração e Encapsulamento: Os TADs fornecem uma maneira clara e consistente de interagir com estruturas de dados, sem se preocupar com os detalhes da implementação.<br>Manutenibilidade: Alterações na implementação interna de um TAD não afetam o código que usa o TAD, desde que a interface permaneça a mesma.<br>Reusabilidade: Os TADs podem ser usados em diferentes partes de um programa ou em diferentes projetos, aumentando a reutilização de código.</p>
                <p class="maior"><br>Desvantagens dos TADs</p>
                <p class="media">Overhead: A abstração pode introduzir um overhead adicional em termos de desempenho e uso de memória.<br>Complexidade: Definir e implementar TADs pode ser mais complexo do que usar estruturas de dados simples diretamente.</p>
                <p class="maior"><br>Conclusão</p>
                <p class="media"><br>Os Tipos Abstratos de Dados são uma ferramenta poderosa na programação que permite a criação de estruturas de dados eficientes e reutilizáveis. Eles fornecem uma maneira de encapsular e abstrair a lógica de manipulação de dados, facilitando a manutenção e a reutilização do código. Compreender e saber implementar TADs em PHP é essencial para desenvolver soluções de software robustas e escaláveis.<br></p>
        
            </nav>
            <nav class="atividade">
                <p>!!!ESTA PARTE SERÁ FALTA POR MIM DANIEL APÓS A ENTREGA DE DOMINGO, NÃO COLOQUE NADA AQUI!!!</p>
            </nav>
        </nav>
    </section>
    <script src='main.js'></script>
</body>
</html>