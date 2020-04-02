<?php
include_once("conexao.php");
?>
<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Cadastrar Despesa</h1>
    </div>
    <form class="form-horizontal" method="POST" action="processa/proc_cad_despesas.php">
        <div class="form-group">
            <label  class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-5">
                <input type="text" class="form-control"  name="descricaod">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Data de Vencimento</label>
            <div class="col-sm-2">
                <input type="date" class="form-control"  name="data_vencimentod">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Tipo de Parcela</label>
            <div class="col-sm-2">
                <select class="form-control" name="tipo_parcelad">
                    <option value="0">Selecione o tipo</option>
                    <option>À Vista</option>
                    <option>À Prazo</option>
                    <option>Parcelado</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Valor</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="valord">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Forma de Pagamento</label>
            <div class="col-sm-2">
                <select class="form-control" name="forma_pagamentod">
                    <option value="0">Selecione o tipo</option>
                    <option>Crédito</option>
                    <option>Débito</option>
                    <option>Depósito</option>
                    <option>Dinheiro</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Data de Pagamento</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" name="data_pagamentod">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Categoria</label>
            <div class="col-sm-5">
                <select class="form-control" name="id_categorias">
                   <option value="">Selecione a Categoria </option>
                    //<?php
                    $resultado = mysqli_query($conn,"SELECT * FROM categorias");
                    while ($dados = mysqli_fetch_array($resultado)) {
                        $id_categorias = $dados['id_categorias'];
                        $descricao     = $dados['descricao'];
                        echo "<option value='$id_categorias'>$descricao</option>";
                    }
//                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
