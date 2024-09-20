<!DOCTYPE html>
<html lang="pt-BR">
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
            <svg onclick="showmenu()" xmlns="http://www.w3.org/2000/svg" width="90%" height="90%" viewBox="0 0 24 24" class="svg">
                <path d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z"></path>
            </svg>
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
                <p class="maior"><br>Teste sua proficiência</p>
                <form id="quizForm">
                    <!-- Nível Fácil -->
                    <p class="media"><br>1. O que é uma lista simplesmente encadeada?</p>
                    <input type="radio" name="q1" value="c"> c) Uma lista onde cada elemento aponta para o próximo.<br>
                    <input type="radio" name="q1" value="wrong"> a) Uma lista que permite acesso aleatório aos elementos.<br>
                    <input type="radio" name="q1" value="wrong"> b) Uma lista que armazena dados em uma matriz.<br>

                    <p class="media"><br>2. Qual é a estrutura de um nó em uma lista simplesmente encadeada?</p>
                    <input type="radio" name="q2" value="b"> b) Dados e um ponteiro para o próximo nó.<br>
                    <input type="radio" name="q2" value="wrong"> a) Dados e um ponteiro para o nó anterior.<br>
                    <input type="radio" name="q2" value="wrong"> c) Apenas um ponteiro para o próximo nó.<br>

                    <p class="media"><br>3. Como você pode adicionar um novo nó no início de uma lista simplesmente encadeada?</p>
                    <input type="radio" name="q3" value="a"> a) Criando um novo nó e fazendo o ponteiro do novo nó apontar para o antigo primeiro nó.<br>
                    <input type="radio" name="q3" value="wrong"> b) Alterando o ponteiro do último nó.<br>
                    <input type="radio" name="q3" value="wrong"> c) Substituindo o primeiro nó pela nova estrutura.<br>

                    <p class="media"><br>4. Qual é a complexidade de tempo para inserir um nó no final de uma lista simplesmente encadeada?</p>
                    <input type="radio" name="q4" value="wrong"> a) O(1)<br>
                    <input type="radio" name="q4" value="b"> b) O(n)<br>
                    <input type="radio" name="q4" value="wrong"> c) O(log n)<br>

                    <p class="media"><br>5. Como você pode verificar se uma lista simplesmente encadeada está vazia?</p>
                    <input type="radio" name="q5" value="a"> a) Verificando se o ponteiro "head" é nulo.<br>
                    <input type="radio" name="q5" value="wrong"> b) Contando os nós.<br>
                    <input type="radio" name="q5" value="wrong"> c) Acessando o último nó.<br>

                    <!-- Nível Médio -->
                    <p class="media"><br>6. O que caracteriza uma lista duplamente encadeada?</p>
                    <input type="radio" name="q6" value="a"> a) Cada nó possui um ponteiro para o próximo e um ponteiro para o anterior.<br>
                    <input type="radio" name="q6" value="wrong"> b) Cada nó possui apenas um ponteiro para o próximo nó.<br>
                    <input type="radio" name="q6" value="wrong"> c) Os nós são armazenados em uma matriz.<br>

                    <p class="media"><br>7. Quais são as vantagens de usar listas duplamente encadeadas?</p>
                    <input type="radio" name="q7" value="wrong"> a) Maior uso de memória.<br>
                    <input type="radio" name="q7" value="wrong"> b) Menor complexidade de inserção.<br>
                    <input type="radio" name="q7" value="c"> c) Navegação bidirecional.<br>

                    <p class="media"><br>8. Qual é a desvantagem de listas duplamente encadeadas?</p>
                    <input type="radio" name="q8" value="wrong"> a) Acesso mais rápido aos elementos.<br>
                    <input type="radio" name="q8" value="b"> b) Consumo maior de memória devido aos ponteiros adicionais.<br>
                    <input type="radio" name="q8" value="wrong"> c) Estrutura mais simples.<br>

                    <p class="media"><br>9. Qual é a complexidade de tempo para acessar um elemento específico em uma lista duplamente encadeada?</p>
                    <input type="radio" name="q9" value="wrong"> a) O(1)<br>
                    <input type="radio" name="q9" value="b"> b) O(n)<br>
                    <input type="radio" name="q9" value="wrong"> c) O(log n)<br>

                    <p class="media"><br>10. Em listas duplamente encadeadas, o que faz o ponteiro "tail"?</p>
                    <input type="radio" name="q10" value="a"> a) Aponta para o último nó.<br>
                    <input type="radio" name="q10" value="wrong"> b) Aponta para o primeiro nó.<br>
                    <input type="radio" name="q10" value="wrong"> c) Não é utilizado.<br>

                    <!-- Nível Difícil -->
                    <p class="media"><br>11. O que é um Tipo Abstrato de Dados (TAD)?</p>
                    <input type="radio" name="q11" value="b"> b) Uma estrutura de dados que define um conjunto de operações.<br>
                    <input type="radio" name="q11" value="wrong"> a) Uma implementação específica de um algoritmo.<br>
                    <input type="radio" name="q11" value="wrong"> c) Um tipo de variável em programação.<br>

                    <p class="media"><br>12. Qual é uma característica dos TADs?</p>
                    <input type="radio" name="q12" value="b"> b) Encapsulam a implementação dos dados.<br>
                    <input type="radio" name="q12" value="wrong"> a) Necessitam de um compilador específico.<br>
                    <input type="radio" name="q12" value="wrong"> c) São usados apenas em linguagens de programação orientadas a objetos.<br>

                    <p class="media"><br>13. Quais são os dois principais tipos de listas encadeadas?</p>
                    <input type="radio" name="q13" value="a"> a) Simplesmente encadeadas e duplamente encadeadas.<br>
                    <input type="radio" name="q13" value="wrong"> b) Encadeadas e não encadeadas.<br>
                    <input type="radio" name="q13" value="wrong"> c) Estáticas e dinâmicas.<br>

                    <p class="media"><br>14. O que é uma lista circular?</p>
                    <input type="radio" name="q14" value="a"> a) Uma lista onde o último nó aponta de volta para o primeiro nó.<br>
                    <input type="radio" name="q14" value="wrong"> b) Uma lista que possui um ponteiro de "tail".<br>
                    <input type="radio" name="q14" value="wrong"> c) Uma lista que armazena dados em uma matriz.<br>

                    <p class="media"><br>15. Qual é a principal vantagem de uma lista circular?</p>
                    <input type="radio" name="q15" value="a" class="media"> a) Facilita a implementação de algoritmos que requerem iterações contínuas.<br>
                    <input type="radio" name="q15" value="wrong"> b) Permite acesso aleatório aos elementos.<br>
                    <input type="radio" name="q15" value="wrong"> c) Ocupa menos memória.<br>

                    <div class="container">
                        <div class="container-hidden">
                            <div id="div1" class="div">
                                <button type="button" onclick="calculateScore()" class="botao">Enviar</button>
                            </div>
                            <div id="div2" class="div hidden">
                                <h1 class="obrigado">Sua pontuação é de <span id="score"></span> pontos.</h1>
                                <p class="texto">O nível ideal para você começar é no<span id="level" style="margin-left: 5px;"></span>.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </nav>
        </nav>
    </section>

    <script>
        function calculateScore() {
            const form = document.getElementById('quizForm');
            let score = 0;

            // Pontos para o nível fácil
            if (form.q1.value === 'c') score += 6;
            if (form.q2.value === 'b') score += 6;
            if (form.q3.value === 'a') score += 6;
            if (form.q4.value === 'b') score += 6;
            if (form.q5.value === 'a') score += 6;

            // Pontos para o nível médio
            if (form.q6.value === 'a') score += 8;
            if (form.q7.value === 'c') score += 8;
            if (form.q8.value === 'b') score += 8;
            if (form.q9.value === 'b') score += 8;
            if (form.q10.value === 'a') score += 8;

            // Pontos para o nível difícil
            if (form.q11.value === 'b') score += 10;
            if (form.q12.value === 'b') score += 10;
            if (form.q13.value === 'a') score += 10;
            if (form.q14.value === 'a') score += 10;
            if (form.q15.value === 'a') score += 10;

            // Exibição da pontuação e nível
            document.getElementById('score').innerText = score;
            let level;

            if (score <= 30) {
                level = "begginer";
            } else if (score <= 60) {
                level = "median";
            } else {
                level = "high";
            }

            document.getElementById('level').innerText = level;

            // Mostra o resultado
            document.getElementById('div1').style.display = 'none';
            document.getElementById('div2').style.display = 'block';
        }
    </script>
</body>
</html>
