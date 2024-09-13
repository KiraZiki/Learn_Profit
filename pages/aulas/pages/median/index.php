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
            <div class="op1">Conteúdo</div>
            <div class="op2">Atividade</div>
        </nav>
        <nav class="corpo">
            <nav class="conteudo">
            <p class="maior">Aula sobre Listas Duplamente Encadeadas</p>
                <p class="media">As listas duplamente encadeadas são uma estrutura de dados avançada que permite uma navegação bidirecional através dos elementos. Neste texto, vamos explorar o que são listas duplamente encadeadas, suas vantagens e desvantagens, e como implementá-las em PHP com exemplos de código comentados.</p>
                <p class="maior"><br>O que é uma Lista Duplamente Encadeada?</p>
                <p class="media">Uma lista duplamente encadeada é uma coleção linear de elementos, onde cada elemento (chamado de nó) contém três componentes principais:</p>
                <p class="media">Dado: O valor armazenado no nó.<br>Ponteiro para o Próximo: Uma referência ao próximo nó da lista.<br>Ponteiro para o Anterior: Uma referência ao nó anterior na lista.</p>
                <p class="maior"><br>Estrutura de um Nó</p>
                <p class="media">Cada nó na lista duplamente encadeada contém um dado e duas referências (ou ponteiros) para os nós adjacentes. Em PHP, podemos definir essa estrutura com uma classe chamada Node.<br></p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/1-inicio.png"></p>
                <p><br><img src="../../../../img/noduplamente.png"></p>
                <p class="maior"><br>Estrutura da Lista Duplamente Encadeada</p>
                <p class="media">Agora, vamos definir a classe DoublyLinkedList, que gerencia os nós e implementa as operações básicas da lista duplamente encadeada.</p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/2-append10.png"></p>
                <p><br><img src="../../../../img/duplamente1.png"></p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/3-append20.png"></p>
                <p><br><img src="../../../../img/duplamente2.png"></p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/4-append30.png"></p>
                <p><br><img src="../../../../img/duplamente3.png"></p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/5-prepend5.png"></p>
                <p><br><img src="../../../../img/duplamente4.png"></p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/6-Delete20.png"></p>
                <p><br><img src="../../../../img/duplamente5.png"></p>
                <p><br><img src="../../../../img/Duplamente Encadeadas/7-Display.png"></p>
                <p class="maior"><br>Comentários sobre a Implementação</p>
                <p class="media">__construct: Inicializa a lista encadeada com a cabeça (head) e a cauda (tail) como null.<br>isEmpty: Verifica se a lista está vazia retornando true se head for null.<br>append: Adiciona um novo nó no final da lista. Se a lista estiver vazia, o novo nó se torna a cabeça e a cauda. Caso contrário, ajusta os ponteiros para adicionar o novo nó no final.<br>prepend: Adiciona um novo nó no início da lista. Se a lista estiver vazia, o novo nó se torna a cabeça e a cauda. Caso contrário, ajusta os ponteiros para adicionar o novo nó no início.<br>delete: Remove o nó que contém o valor especificado (key). Percorre a lista para encontrar o nó a ser removido, ajustando os ponteiros conforme necessário.<br>displayForward: Percorre a lista desde a cabeça até o final, coletando os dados de cada nó e os exibindo.<br>displayBackward: Percorre a lista desde a cauda até o início, coletando os dados de cada nó e os exibindo.</p>
                <p class="maior"><br>Vantagens das Listas Duplamente Encadeadas</p>
                <p class="media">Navegação Bidirecional: Permite percorrer a lista em ambas as direções (para frente e para trás).<br>Facilidade de Remoção: A remoção de um nó é mais eficiente, pois não é necessário percorrer a lista desde a cabeça para encontrar o nó anterior.<br>Inserção mais Flexível: Facilita a inserção de novos nós em qualquer posição da lista.</p>
                <p class="maior"><br>Desvantagens das Listas Duplamente Encadeadas</p>
                <p class="media">Uso Adicional de Memória: Cada nó requer armazenamento adicional para dois ponteiros (anterior e próximo).<br>Complexidade: A implementação e a manutenção são mais complexas do que em listas simplesmente encadeadas.</p>
                <p class="maior"><br>Exemplo de Uso</p>
                <p class="media">Vamos demonstrar como usar a lista duplamente encadeada com algumas operações básicas.</p>
                <p><img src="../../../../img/exemplo.png"></p>
                <p><img src="../../../../img/exemplo2.png"></p>
                <p class="maior"><br>Conclusão</p>
                <p class="media"><br>As listas duplamente encadeadas são uma estrutura de dados poderosa que oferece navegação bidirecional, facilitando inserções e remoções em qualquer posição da lista. Embora sejam mais complexas de implementar e usem mais memória do que as listas simplesmente encadeadas, suas vantagens em flexibilidade e eficiência fazem delas uma escolha útil em muitas aplicações. Compreender como implementá-las em PHP é fundamental para desenvolver algoritmos e estruturas de dados avançadas.<br></p>
            </nav>
            <nav class="atividade">
                <p>!!!ESTA PARTE SERÁ FALTA POR MIM DANIEL APÓS A ENTREGA DE DOMINGO, NÃO COLOQUE NADA AQUI!!!</p>
            </nav>
        </nav>
    </section>
    <script src='main.js'></script>
</body>
</html>