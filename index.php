<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD AJAX</title>
</head>

<body class="#e0e0e0 grey lighten-2">

    <?php
    require_once "headerNav.php";
    ?>

    <h1 class="center-align"> <b>Venda de carro</b></h1>
    <main class="container">

        <div class="card-panel">
        
            <p>
A venda de carros é um processo comercial que envolve a negociação de veículos, novos ou usados, entre vendedores (geralmente fornecedores ou vendedores) e compradores. Esse processo vai além de apenas apresentar o veículo, exigindo conhecimento técnico, habilidades de negociação e foco nas necessidades do

Principais Aspectos da Venda de Carros:
Entendimento do Cliente

Conhecer o perfil e as necessidades do comprador é essencial
Alguns clientes buscam economia de combustível, outros, conforto ou tecnologia avançada.
O vendedor deve ouvir atentamente para oferecer o carro certo para cada
Apresentação do Veículo

Mostre as características do carro, como design, desempenho, segurança, consumo de combustível e acessórios.
</p>
<hr>
            <p><strong>Conheça o Cliente</strong></p>
            <ul>
                <li>Antes de oferecer um carro, é essencial entender o perfil do cliente. Isso inclui saber qual é seu objetivo com o veículo (trabalho, lazer, família), quais recursos ele considera indispensáveis ​​(economia, tecnologia, conforto) e qual é seu orçamento.
                 Uma abordagem personalizada aumenta as chances de fechar uma venda, pois demonstra interesse genuíno em atender</li>
            </ul>
            <hr>

            <p><strong>Apresente o Veículo</strong></p>
            <ul>
                <li>A apresentação do carro é um momento-chave. É importante destacar os principais atributos do modelo, como o design moderno, o desempenho do motor, a eficiência no consumo de combustível e os recursos de segurança. Mostrar como essas características atendem às expectativas do cliente é crucial. Um bom vendedor também pode usar exemplos práticos para ilustrar os benefícios,
                     como o espaço do porta-malas para famílias ou a conectividade para jovens</li>
            </ul><hr>

            <p><strong>  Realizar Test-Drives</strong></p>
            <ul>
                <li>
                Nada substitui a experiência de direção. Proporcionar um test-drive permite ao cliente sentir o conforto, o desempenho e a estabilidade do veículo. Essa etapa ajuda a transformar o interesse inicial em uma decisão de compra, pois muitas vezes o cliente só percebe o valor do carro após experimentar
                </li>
            </ul><hr>

            <p><strong>Negociação Clara:</strong></p>
            <ul>
                <li>
                Uma negociação transparente é fundamental para construir confiança. Apresente todas as condições, incluindo o preço, possíveis descontos, taxas de financiamento e benefícios adicionais, como seguros ou revisões gratuitas. Estar aberto a flexibilizações, como aceitar um carro usado na troca, também facilita a conclusão da venda
                </li>
            </ul>
            <hr>
            <p>
                <strong>  Marketing Estratégico:</strong>
            </p>
            <ul>
                <li>
                Investir em marketing é indispensável para atrair novos clientes. Plataformas digitais, como redes sociais e sites especializados, permitem alcançar um público mais amplo e destacar promoções. Criar anúncios bem elaborados, com fotos de qualidade e informações claras, ajuda a gerar interesse. 
            </ul>
        </div>
    </main>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa a sidenav
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {
                edge: 'left'
            });

            // Configura a largura da sidenav
            var sidenav = document.querySelector('.sidenav');
            sidenav.style.width = '250px'; // Ajuste a largura conforme necessário
        });
    </script>

</body>

</html>