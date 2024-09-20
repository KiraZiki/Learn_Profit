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
                <section class="aula"><a href="pages/aulas/index.php">Aulas</a></section>
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
        <nav class="mTop">
            <button class="op1">Conteúdo</button>
            <button class="op2">Atividade</button>
        </nav>
        <nav class="corpo">
            <nav class="conteudo">
                <p class="maior">Aula sobre Listas Simplesmente Encadeadas </p>
                <p class="media">As listas simplesmente encadeadas são uma estrutura de dados fundamental na ciência da computação, frequentemente usadas para implementar listas, filas, pilhas e outras estruturas complexas. Neste texto, vamos explorar o que são listas simplesmente encadeadas, suas vantagens e desvantagens, e como implementá-las em Python com exemplos de código comentados. </p>
                <p class="maior"><br>O que é uma Lista Simplesmente Encadeada?</p>
                <p class="media">Uma lista simplesmente encadeada é uma coleção linear de elementos, onde cada elemento (chamado de nó) contém dois componentes principais:</p>
                <p class="media">Dado: O valor armazenado no nó. <br>Ponteiro: Uma referência ao próximo nó da lista. <br>O primeiro nó da lista é chamado de cabeça (head) e o último nó aponta para None, indicando o fim da lista. </p>
                <p class="maior"><br>Estrutura de um Nó</p>
                <p class="media">Primeiro, vamos definir a classe Node, que representa cada nó da lista simplesmente encadeada.<br></p>
                <p><br><img src="../../../../img/Simples cadeada/1_Inicio.png"></p>
                <p><br><img src="../../../../img/estruturano.png"></p>
                <p class="maior"><br>Estrutura da Lista Simplesmente Encadeada</p>
                <p class="media">A classe LinkedList gerencia os nós e implementa as operações básicas da lista simplesmente encadeada.</p>
                <p><br><img src="../../../../img/Simples cadeada/2-append 10.png"></p>
                <p><br><img src="../../../../img/estruturasimples.png"></p>
                <p><br><img src="../../../../img/Simples cadeada/3-Append20.png"></p>
                <p><img src="../../../../img/estruturasimples2.png"></p>
                <p><br><img src="../../../../img/Simples cadeada/4-Append30.png"></p>
                <p><img src="../../../../img/estruturasimples3.png"></p>
                <p><br><img src="../../../../img/Simples cadeada/5-Prepend5.png"></p>
                <p><img src="../../../../img/estruturasimples4.png"></p>
                <p><br><img src="../../../../img/Simples cadeada/6-Delete20.png"></p>
                <p><br><img src="../../../../img/Simples cadeada/7-Display.png"></p>
                <p class="maior"><br>Comentários sobre a Implementação</p>
                <p class="media">__construct: Inicializa a lista encadeada com a cabeça (head) como null.<br>isEmpty: Verifica se a lista está vazia retornando true se head for null.<br>append($data): Adiciona um novo nó ao final da lista. Se a lista estiver vazia, o novo nó se torna a cabeça. Caso contrário, percorre a lista até o final e adiciona o novo nó.<br>prepend($data): Adiciona um novo nó ao início da lista. Faz o novo nó apontar para a antiga cabeça e atualiza a cabeça para ser o novo nó.<br>delete($key): Remove o nó que contém o valor especificado (key). Percorre a lista para encontrar o nó a ser removido e ajusta os ponteiros conforme necessário.<br>display(): Percorre a lista desde a cabeça até o final, coletando os dados de cada nó e exibindo-os.</p>
                <p class="maior"><br>Exemplo de Uso</p>
                <p class="media">Vamos demonstrar como usar a lista simplesmente encadeada com algumas operações básicas.</p>
                <p><img src="../../../../img/estruturasimplesfinal.png"></p>
                <p class="maior"><br>Conclusão</p>
                <p class="media"><br>As listas simplesmente encadeadas são uma estrutura de dados eficiente para inserir e remover elementos, especialmente quando a ordem dos elementos é importante. Com a implementação em PHP, podemos criar, manipular e exibir elementos de uma lista simplesmente encadeada, aproveitando a simplicidade e flexibilidade dessa estrutura de dados.<br></p>
            </nav>
            <nav class="atividade">
                <p>!!!ESTA PARTE SERÁ FALTA POR MIM DANIEL APÓS A ENTREGA DE DOMINGO, NÃO COLOQUE NADA AQUI!!!</p>
            </nav>
        </nav>
    </section>
    <script src='main.js'></script>
</body>
</html>