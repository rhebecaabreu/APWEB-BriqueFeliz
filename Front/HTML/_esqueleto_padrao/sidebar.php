<div class="container-fluid">

    <div class="row">

        <!-- <div class="area"></div> -->
        <nav class="main-menu  d-none d-md-block bg-light h-100">
            <div class="sidebar-sticky">
                <!-- <ul class="nav flex-column"> -->

                <ul>

                    <!-- Vendas -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarVendas" aria-expanded="false"
                        aria-controls="collapseGerenciarVendas">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="shopping-cart"></i>
                            </i>
                            <span class="nav-text">
                                Gerenciar Vendas
                            </span>

                        </a>
                    </li>

                    <div class="collapse" id="collapseGerenciarVendas">
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=registrar_venda">Realizar Venda</a>
                            </span>
                        </li>

                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a class="nav-text"> Listar Vendas</a>
                            </span>
                        </li>
                    </div>


                    <!-- Funcionarios -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarFuncionario"
                        aria-expanded="false" aria-controls="collapseGerenciarFuncionario">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="users"></i></i>
                            <span class="nav-text">
                                Gerenciar Funcionários
                            </span>

                        </a>
                    </li>

                    <div class="collapse" id="collapseGerenciarFuncionario">

                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=cadastrar_funcionario">Adicionar Funcionário</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a class="nav-link">Alterar dados do Funcionário</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=excluir_funcionario">Excluir Funcionário</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=alterar_permissao">Alterar permissão do Funcionário</a>
                            </span>
                        </li>
                    </div>

                    <!-- Produtos -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarProduto" aria-expanded="false"
                        aria-controls="collapseGerenciarProduto">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="shopping-bag"></i></i>
                                <span class="nav-text">
                                    Gerenciar Produtos
                                </span>

                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarProduto">
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=cadastrar_produto">Adicionar Produto</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=excluir_produto">Excluir Produto</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=cadastrar_estoque">Adicionar Estoque de um Produto</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=alterar_estoque">Alterar Estoque de um Produto</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=excluir_estoque">Excluir Estoque de um Produto</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a class="nav-link">Alterar descrição de um Produto</a>
                            </span>
                        </li>
                    </div>

                    <!-- Clientes -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarClientes"
                        aria-expanded="false" aria-controls="collapseGerenciarClientes">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="user"></i></i>
                            <span class="nav-text">
                                Gerenciar Clientes
                            </span>

                        </a>



                    </li>
                    <div class="collapse" id="collapseGerenciarClientes">

                    </div>

                    <!-- Fornecedores -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarFornecedores"
                        aria-expanded="false" aria-controls="collapseGerenciarFornecedores">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="truck"></i></i>
                            <span class="nav-text">
                                Gerenciar Fornecedores
                            </span>

                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarFornecedores">
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=cadastrar_fornecedor">Adicionar Fornecedor</a>
                            </span>
                        </li>
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=excluir_fornecedor">Excluir Fornecedor</a>
                            </span>
                        </li>
                    </div>

                    <!-- Categorias -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarCategoria"
                        aria-expanded="false" aria-controls="collapseGerenciarCategoria">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="list"></i></i>
                            <span class="nav-text">
                                Gerenciar Categorias
                            </span>

                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarCategoria">
                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=cadastrar_categoria">Adicionar Categoria</a>
                            </span>
                        </li>

                        <li class="has-subnav">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                <a href="?funcao=excluir_categoria">Excluir Categoria</a>
                            </span>
                        </li>
                    </div>

                    <!-- Relatorios -->
                    <li class="has-subnav" data-toggle="collapse" data-target="#collapseGerenciarRelatorios"
                        aria-expanded="false" aria-controls="collapseGerenciarRelatorios">
                        <a href="#">
                            <i class="fa fa-home fa-2x"><i data-feather="file-text"></i></i>
                            <span class="nav-text">
                                Gerenciar Relatórios
                            </span>

                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarRelatorios">

                    </div>

                </ul>

            </div>

        </nav>