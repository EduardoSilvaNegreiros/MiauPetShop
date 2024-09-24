<!-- Cabeçalho do formulário, onde é exibido o título "Cadastro de Contato" -->
<header class="form-header">
    <h3>Cadastro de Contato</h3>
</header>

<!-- Início da div que envolve o formulário -->
<div class="form">
    <!-- Início do formulário, com o método POST (para envio de dados) e sem ação definida -->
    <form action="" method="post">
        <!-- Grupo de inputs (campos do formulário) -->
        <div class="input-group">
            <!-- Caixa de entrada de dados dentro do grupo -->
            <div class="input-box">
                <!-- Rótulo para o campo de cpf do cliente -->
                <label for="cpfCliente">Cpf</label>
                <!-- Campo de entrada de texto para o cpf do cliente -->
                <input type="text" name="cpfCliente">

                <!-- Rótulo para o campo de e-mail do cliente -->
                <label for="dataNascCliente">Data de Nascimento</label>
                <!-- Campo de entrada de texto para o e-mail do cliente -->
                <input type="text" name="dataNascCliente">

                <label for="emailCliente">E-mail</label>
                <input type="text" name="emailCliente">

                <label for="nomeCliente">Nome</label>
                <input type="text" name="nomeCliente">

                <label for="sexoCliente">Sexo</label>
                <input type="text" name="sexoCliente">

                <label for="dataNascCliente">Telefone</label>
                <input type="text" name="telefoneCliente">
            </div>
        </div>
        <div>
            <input type="button" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>