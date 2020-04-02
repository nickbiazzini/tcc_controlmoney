<?php
$id = $_GET['id'];
//Executa consulta
$result = mysqli_query($conn,"SELECT * FROM despesas WHERE id = '$id'");
$despesas = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Editar Despesas</h1>
    </div>
     <div class="row espaco">
		<div class="pull-right">
			<a href='index.php?link=3&id=<?php echo $despesas['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
                        <a href='processa/proc_apagar_despesas.php?id=<?php echo $despesas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
    <form class="form-horizontal" method="POST" action="processa/proc_editar_despesas.php">
        <div class="form-group">
            <label  class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-5">
                <input type="text" class="form-control"  name="descricaod" value="<?php echo $despesas['descricaod'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Data de Vencimento</label>
            <div class="col-sm-2">
                <input type="date" class="form-control"  name="data_vencimentod" value="<?php echo $despesas['data_vencimentod'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Tipo de Parcela</label>
            <div class="col-sm-2">
                <select class="form-control" name="tipo_parcelad" value="<?php echo $despesas['tipo_parcelad'] ?>">
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
                <input type="text" class="form-control" name="valord" value="<?php echo $despesas['valord'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Forma de Pagamento</label>
            <div class="col-sm-2">
                <select class="form-control" name="forma_pagamentod" value="<?php echo $despesas['forma_pagamentod'] ?>">
                    <option value="0">Selecione o tipo</option>
                    <option value="1">Crédito</option>
                    <option>Débito</option> 
                    <option>Depósito</option>
                    <option>Dinheiro</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Data de Pagamento</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" name="data_pagamentod" value="<?php echo $despesas['data_pagamentod'] ?>">
            </div>
        </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Categoria</label>
            <div class="col-sm-5">
                <select class="form-control" name="id_categorias" value="<?php echo $despesas['id_categorias'] ?>">
                    <option value="">Selecione a Categoria </option>
                    <?php
                    $resultado = mysqli_query($conn,"SELECT * FROM categorias");
                    while ($dados = mysqli_fetch_array($resultado)) {
                        $id_categorias = $dados['id_categorias'];
                        $descricao     = $dados['descricao'];
                        echo "<option value='$id_categorias'>$descricao</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $despesas['id']; ?> ">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Editar</button>
            </div>
        </div>
    </form>
</div>

