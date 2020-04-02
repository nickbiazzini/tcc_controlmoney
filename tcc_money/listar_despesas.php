<?php
include_once("conexao.php");
$resultado = mysqli_query($conn,"SELECT * FROM despesas ORDER BY 'id'");
?>

<div class="container theme-showcase" role="main">      
    <div class="page-header">
        <h1>Lista de Despesas</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href="index.php?link=2"><button type="button" class="btn btn-sm bg-success">Cadastrar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Data Vencimento</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($despesas = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $despesas['id']."</td>";
                        echo "<td>" . $despesas['descricaod']."</td>";
                        echo "<td>" . $despesas['data_vencimentod']."</td>";
                        echo "<td>" . $despesas['valord']."</td>";
                        echo "<td>" . $despesas['id_categorias']."</td>" ;
                        ?>

                    <td>
                        <a href = 'index.php?link=19&id=<?php echo $despesas['id'];?>'><button type = 'button'class = 'btn btn-sm btn-primary'>Visualizar</button></a>
                        <a href = 'index.php?link=14&id=<?php echo $despesas['id']; ?>'><button type = 'button'class = 'btn btn-sm btn-warning'>Editar</button></a>
                        <a href = 'processa/proc_apagar_despesas.php?id=<?php echo $despesas['id']; ?>'><button type = 'button'class = 'btn btn-sm btn-danger'>Apagar</button></a>

                    
                    <?php
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--/container -->


