<?php
include_once("conexao.php");
$resultado = mysqli_query($conn,"SELECT * FROM recebimentos ORDER BY 'id'");
?>

<div class="container theme-showcase" role="main">      
    <div class="page-header">
        <h1>Lista de Recebimentos</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href="index.php?link=4"><button type="button" class="btn btn-sm bg-success">Cadastrar</button></a>
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
                    while ($recebimentos = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $recebimentos['id_recebimentos']."</td>";
                        echo "<td>" . $recebimentos['descricaor']."</td>";
                        echo "<td>" . $recebimentos['data_vencimentor']."</td>";
                        echo "<td>" . $recebimentos['valorr']."</td>";
                        echo "<td>" . $recebimentos['id_categorias']."</td>" ;
                        ?>

                    <td>
                        <a href = 'index.php?link=20&id=<?php echo $recebimentos['id_recebimentos'];?>'><button type = 'button'class = 'btn btn-sm btn-primary'>Visualizar</button></a>
                        <a href = 'index.php?link=15&id=<?php echo $recebimentos['id_recebimentos']; ?>'><button type = 'button'class = 'btn btn-sm btn-warning'>Editar</button></a>
                        <a href = 'processa/proc_apagar_recebimentos.php?id=<?php echo $recebimentos['id_recebimentos']; ?>'><button type = 'button'class = 'btn btn-sm btn-danger'>Apagar</button></a>

                    
                    <?php
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--/container -->


