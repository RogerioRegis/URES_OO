<title>SICAES</title>

<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#Categoria1" data-toggle="tab"><img src="image/icons/zoo_blog.png"><br/>Categoria 1</a></li>
        <li><a href="#Categoria2" data-toggle="tab"><img src="image/icons/zoo_product.png"><br/>Categoria 2</a></li>
        <li><a href="#Categoria3" data-toggle="tab"><img src="image/icons/zoo_download.png"><br/>Categoria 3</a></li>
        <li><a href="#Categoria4" data-toggle="tab"><img src="image/icons/zoo_business.png"><br/>Categoria 4</a></li>
        <li><a href="#Categoria5" data-toggle="tab"><img src="image/icons/zoo_pages.png"><br/>Categoria 5</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="Categoria1">
            <h1>html</h1>
            <p> HTML (abreviação para a expressão inglesa HyperText Markup Language, que significa Linguagem de Marcação de Hipertexto) é uma linguagem de marcação utilizada para produzir páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.

                HyTime é um padrão para a representação estruturada de hipermídia e conteúdo baseado em tempo. Um documento é visto como um conjunto de eventos concorrentes dependentes de tempo (como áudio, vídeo, etc.), conectados por hiperligações. O padrão é independente de outros padrões de processamento de texto em geral.

                SGML é um padrão de formatação de textos. Não foi desenvolvido para hipertexto, mas tornou-se conveniente para transformar documentos em hiper-objetos e para descrever as ligações. 
            </p>
        </div>
        <div class="tab-pane" id="Categoria2">
            <h1>bootstrap</h1>
            <p>Bootstrap é uma coleção gratuita de ferramentas para a criação de sites e aplicações web. Ele contém HTML e modelos de design baseados em CSS para tipografia, formulários, botões, navegação e outros componentes da interface, bem como extensões JavaScript opcionais. Em junho de 2014, foi o projeto No.1 no GitHub com 69.000 + 25.000 + estrelas e garfos, com uma base de usuários, incluindo MSNBC e NASA.</p>
        </div>
        <div class="tab-pane" id="Categoria3">
            <h1>php</h1>
            <p>PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.2 Figura entre as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados. O código é interpretado no lado do servidor pelo módulo PHP, que também gera a página web a ser visualizada no lado do cliente.
                <br />
            <h1>php pdo</h1>
            <p>PDO(PHP Data Objects) é um módulo de PHP montado sob o paradigma Orientado a Objetos e cujo objetivo é prover uma padronização da forma com que PHP se comunica com um banco de dados relacional. Este módulo surgiu a partir da versão 5 de PHP. PDO, portanto, é uma interface que define um conjunto de classes e a assinatura dos métodos de comunicação com uma base de dados.
        </div>
        <div class="tab-pane" id="Categoria4">
            <h1>sql</h1>
            <p>O SQL foi desenvolvido originalmente no início dos anos 70 nos laboratórios da IBM em San Jose, dentro do projeto System R, que tinha por objetivo demonstrar a viabilidade da implementação do modelo relacional proposto por E. F. Codd. O nome original da linguagem era SEQUEL, acrônimo para "Structured English Query Language" (Linguagem de Consulta Estruturada, em Inglês)1 , vindo daí o facto de, até hoje, a sigla, em inglês, ser comumente pronunciada "síquel" ao invés de "és-kiú-él", letra a letra. No entanto, em português, a pronúncia mais corrente é a letra a letra: "ésse-quê-éle".

                A linguagem é um grande padrão de banco de dados. Isto decorre da sua simplicidade e facilidade de uso. Ela se diferencia de outras linguagens de consulta a banco de dados no sentido em que uma consulta SQL especifica a forma do resultado e não o caminho para chegar a ele. Ela é uma linguagem declarativa em oposição a outras linguagens procedurais. Isto reduz o ciclo de aprendizado daqueles que se iniciam na linguagem.</p>
        </div>
        <div class="tab-pane" id="Categoria5">
            <h1>github</h1>
            <p>GitHub é um Serviço de Web Hosting Compartilhado para projetos que usam o controle de versionamento Git. É escrito em Ruby on Rails pelos desenvolvedores da Logical Awesome (Chris Wanstrath, PJ Hyett e Tom Preston - Wernder). O GitHub possui planos comerciais e gratuitos para projetos de código aberto.

                Este site possui funcionalidades de uma rede social como feeds, followers, wiki e um gráfico que mostra como os desenvolvedores trabalham as versões de seus repositórios.

                O GitHub também possui um serviço parecido com o pastebin chamado Gist.</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#tabs').tab();
    });
</script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
