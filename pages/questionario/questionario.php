<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Profit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" href="../../img/logo.png" sizes="60x60">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <header>
        <div class="headerL">
            <section class="logo"><a href="index.php"><img src="../../img/logo.png" alt="Logo Learn Profit" class="logoimg"></a></section>
            <div class="inheaderL">
                <section class="aula"><a href="index.php">Aulas</a></section>
                <section class="suport"><a href="pages/suporte/index.php">Suporte</a></section>
                <section class="questionario"><a href="">Questionário</a></section>
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
    <section class="main">

        <nav class="corpo">
            <nav class="conteudo">
                <!-- nivel facil. cada pergunta acertada vale 6 pontos. 
                se todas forem acertadas, a soma dá 30 pontos -->
                    <p class="maior"><br>Teste sua proficiência</p>
                    <p class="media"><br>1. O que é uma lista simplesmente encadeada?</p> 
                    <p class="pequena">a) Uma lista que permite acesso aleatório aos elementos.</p> 
                    <p class="pequena">b) Uma lista que armazena dados em uma matriz.</p> 
                    <p class="pequena">c) Uma lista onde cada elemento aponta para o próximo.</p> 
                    <!-- resposta correta: C -->
                    <p class="media"><br>2. Qual é a estrutura de um nó em uma lista simplesmente encadeada?</p> 
                    <p class="pequena">a) Dados e um ponteiro para o nó anterior.</p> 
                    <p class="pequena">b) Dados e um ponteiro para o próximo nó.</p> 
                    <p class="pequena">c) Apenas um ponteiro para o próximo nó.</p>
                    <!-- resposta correta: B -->
                    <p class="media"><br>3. Como você pode adicionar um novo nó no início de uma lista simplesmente encadeada?</p> 
                    <p class="pequena">a) Criando um novo nó e fazendo o ponteiro do novo nó apontar para o antigo primeiro nó.</p> 
                    <p class="pequena">b) Alterando o ponteiro do último nó.</p> 
                    <p class="pequena">c) Substituindo o primeiro nó pela nova estrutura.</p>
                    <!-- resposta correta: A -->
                    <p class="media"><br>4. Qual é a complexidade de tempo para inserir um nó no final de uma lista simplesmente encadeada?</p> 
                    <p class="pequena">a) O(1)</p> 
                    <p class="pequena">b) O(n)</p> 
                    <p class="pequena">c) O(log n)</p>
                    <!-- resposta correta: B -->
                    <p class="media"><br>5. Como você pode verificar se uma lista simplesmente encadeada está vazia?</p> 
                    <p class="pequena">a) Verificando se o ponteiro "head" é nulo.</p> 
                    <p class="pequena">b) Contando os nós.</p> 
                    <p class="pequena">c) Acessando o último nó.</p>
                    <!-- resposta correta: A -->


                    <!-- nivel medio. cada pergunta acertada vale 6 pontos. 
                    se todas forem acertadas, a soma dá 30 pontos -->
                    <p class="media"><br>6. O que caracteriza uma lista duplamente encadeada?</p> 
                    <p class="pequena">a) Cada nó possui um ponteiro para o próximo e um ponteiro para o anterior.</p> 
                    <p class="pequena">b) Cada nó possui apenas um ponteiro para o próximo nó.</p> 
                    <p class="pequena">c) Os nós são armazenados em uma matriz.</p>
                    <!-- resposta correta: A -->
                    <p class="media"><br>7. Quais são as vantagens de usar listas duplamente encadeadas?</p> 
                    <p class="pequena">a) Maior uso de memória.</p> 
                    <p class="pequena">b) Menor complexidade de inserção.</p> 
                    <p class="pequena">c) Navegação bidirecional.</p>
                    <!-- resposta correta: C -->
                    <p class="media"><br>8. Qual é a desvantagem de listas duplamente encadeadas?</p> 
                    <p class="pequena">a) Acesso mais rápido aos elementos.</p> 
                    <p class="pequena">b) Consumo maior de memória devido aos ponteiros adicionais.</p> 
                    <p class="pequena">c) Estrutura mais simples.</p>
                    <!-- resposta correta: B -->
                    <p class="media"><br>9. Qual é a complexidade de tempo para acessar um elemento específico em uma lista duplamente encadeada?</p> 
                    <p class="pequena">a) O(1)</p> 
                    <p class="pequena">b) O(n)</p> 
                    <p class="pequena">c) O(log n)</p>
                    <!-- resposta correta: B -->
                    <p class="media"><br>10. Em listas duplamente encadeadas, o que faz o ponteiro "tail"?</p> 
                    <p class="pequena">a) Aponta para o último nó.</p> 
                    <p class="pequena">b) Aponta para o primeiro nó.</p> 
                    <p class="pequena">c) Não é utilizado.</p>
                    <!-- resposta correta: A -->


                    <!-- nivel dificil. cada pergunta vale 8 pontos.
                    se todas forem acertadas, a soma dá 40 pontos -->
                    <p class="media"><br>11. O que é um Tipo Abstrato de Dados (TAD)?</p> 
                    <p class="pequena">a) Uma implementação específica de um algoritmo.</p> 
                    <p class="pequena">b) Uma estrutura de dados que define um conjunto de operações.</p> 
                    <p class="pequena">c) Um tipo de variável em programação.</p>
                    <!-- resposta correta: B -->
                    <p class="media"><br>12. Qual é uma característica dos TADs?</p> 
                    <p class="pequena">a) São sempre implementados usando arrays.</p> 
                    <p class="pequena">b) Encapsulam a implementação dos dados.</p> 
                    <p class="pequena">c) Não podem ser utilizados em linguagens de programação modernas.</p>
                    <!-- resposta correta: B -->
                    <p class="media"><br>13. Qual é a operação "pop" em uma pilha?</p> 
                    <p class="pequena">a) Adicionar um novo elemento.</p> 
                    <p class="pequena">b) Acessar o elemento do fundo.</p> 
                    <p class="pequena">c) Remover o elemento no topo.</p>
                    <!-- resposta correta: C -->
                    <p class="media"><br>14. O que é uma fila (queue) em termos de TAD?</p> 
                    <p class="pequena">a) Uma estrutura FIFO (First In, First Out).</p> 
                    <p class="pequena">b) Uma estrutura LIFO (Last In, First Out).</p> 
                    <p class="pequena">c) Uma estrutura que não tem ordem.</p>
                    <!-- resposta correta: A -->
                    <p class="media"><br>15. Qual é a função do método "peek" em uma pilha?</p> 
                    <p class="pequena">a) Remover o elemento no topo.</p> 
                    <p class="pequena">b) Retornar o elemento no topo sem removê-lo.</p> 
                    <p class="pequena">c) Adicionar um novo elemento ao topo.</p>
                    <!-- resposta correta: B -->


                    <!-- resumo do raciocinio: se todas do nivel facil forem acertadas, 
                    o aluno ganha 30 pontos. no nivel medio ele ganhará ganha 30 pontos, e no nivel 
                    dificil 40. tudo isso no total equivale a 100 pontos.
                    ou seja:
                    para iniciar no begginer: de 0 até 30 pontos.
                    para iniciar no median: de 35 até 55 pontos.
                    para iniciar no median: de 60 até 100 pontos.-->

                    <div class="container">
            <div class="container-hidden">
                <div id="div1" class="div">
                    <button onclick="showDiv2()"  class="botao">enviar</button>
                </div>
                <div id="div2" class="div hidden">
                    <h1 class="obrigado">Sua pontuação é de (mostrar calculo) pontos.</h1>
                    <p class="texto">O nível ideal para você começar é no (mostrar begginer, median ou high).</p>
                </div>
            </div>
            </div>
    </section>
    
    <script src='main.js'></script>
    <script src='script.js'></script>
</body>
</html>