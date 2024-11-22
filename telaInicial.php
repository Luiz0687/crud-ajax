<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD JS</title>

    <style>
        .topo {
            margin-top: 50px;
        }

        .colorBlack {
            color: black;
        }
    </style>
</head>

<body class="#f5f5f5 grey lighten-4">

    <?php
    require_once "headerNav.php";
    ?>

    <main class="container topo">
        <div class="card-panel">

            <!--O arquivo telaInicial.php descrito implementa uma interface simples para um CRUD (Create, Read, Update, Delete) de usuários utilizando JavaScript para interagir com o back-end e manipular a interface do usuário.-->

            <!--
            Relação com as Funções Anteriores

            Formulário de Entrada de Usuário:

            Quando o usuário preenche o formulário e clica no botão "Salvar Usuário", a função salvarUsuario(event) é chamada. Esta função evita o envio padrão do formulário, coleta os dados do formulário e decide se deve chamar a função cadastrar (para criar um novo usuário) ou alterar (para atualizar um usuário existente).
            -->

            <!--Formulário de Entrada de Usuário:-->

            <form onsubmit="return salvarCarro(event);">

                <!--
                Contém um formulário HTML que captura os dados do usuário (ID, Nome, Email, Senha).

                Atribui um evento onsubmit ao formulário para chamar a função JavaScript salvarUsuario(event) quando o formulário é enviado.
                -->

                <div class="row">

                    <div class="input-field col s12">
                        <input placeholder="ID" id="id_carro" name="id_carro" type="text" disabled>
                        <label for="id_carro">ID :</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="nome" type="text" placeholder="Digite o nome do carro" class="validate" name="nome" pattern="^(?!.*').+$" required>
                        <label for="nome">Nome :</label>
                        <span class="helper-text" data-error="Você deve preencher corretamente com nome do carro!"> </span>
                    </div>

                    <div class="input-field col s12">
                        <input id="kilometragem" type="number" placeholder="Digite a kilometragem do carro" class="validate" name="kilometragem" pattern="^(?!.*').+$" required>
                        <label for="kilometragem">Kilometragem :</label>
                        <span class="helper-text" data-error="Você deve preencher corretamente com a kilometragem do carro!"> </span>
                    </div>

                    <div class="input-field col s12">
                        <input id="ano" type="number" placeholder="Digite o ano do carro" class="validate" name="ano" pattern="^(?!.*').+$" required>
                        <label for="ano">Ano:</label>
                        <span class="helper-text" data-error="Você deve preencher corretamente com o ano do carro!"> </span>
                    </div>


                    <button class="btn waves-effect waves-light #00c853 green accent-4 lighten-3 " type="submit">Salvar Venda
                        <i class="material-icons right">send</i>
                    </button><br>
            </form>
            <br>

            <!--Tabela de Usuários:-->
            <table class="highlight">

                <!--
                Tabela de Usuários:

                A função listarTodos() é chamada ao carregar a página para buscar todos os usuários do servidor e exibir seus dados na tabela.

                Funções como inserirUsuario(usuario), alterarUsuario(usuario) e excluirUsuario(retorno, id_usuario) são responsáveis por manipular as linhas da tabela dinamicamente, inserindo, atualizando ou removendo usuários conforme necessário.
                -->

                <!--
                Exibe os usuários em uma tabela HTML.

                A tabela contém um cabeçalho (<thead>) com colunas para ID, Nome, Email e Opções (para ações como alterar e excluir).

                O corpo da tabela (<tbody>) tem o ID usuarios, onde as linhas da tabela serão inseridas dinamicamente pelo JavaScript.
                -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do carro</th>
                        <th>Kilometragem</th>
                        <th>Ano</th>
                        <th colspan="2">Opções</th>
                    </tr>
                </thead>

                <tbody id="carros">

                </tbody>
            </table>
        </div>
        <a href='relatorio.php' class="brown lighten-3 waves-effect waves-light btn"><i class="material-icons right">add</i>Gerar relatório</a>
    </main>
    <script src="script.js"></script>

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

        $('#textarea1').val('New Text');
        M.textareaAutoResize($('#textarea1'));
    </script>

</body>

</html>