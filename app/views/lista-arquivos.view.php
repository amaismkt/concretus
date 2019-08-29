<?php include 'app/views/partials/head.php'; ?>
<?php include 'app/views/partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <div class="clearfix">
        <?php include 'app/views/partials/header.php'; ?>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
            
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title"><i class="fa fa-file"></i> Lista de Arquivos <br /><small style="font-size:15px;">Caixa de Entrada</small></h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <table id="tabelaArquivos" class="display compact">
                                            <thead>
                                                <tr>
                                                    <th>#Id</th>
                                                    <th>Nome</th>
                                                    <th>Vizualização</th>
                                                    <th>Exibir</th>
                                                    <th>opt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php foreach($arquivos as $arquivo): ?>
                                                    <?php if($arquivo->status == 'entrada'): ?>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <tr style="font-size:13px;" id="arquivo-<?=$arquivo->id; ?>">
                                                                    <td><?=$arquivo->id;?></td>
                                                                    <td><?=$arquivo->nome; ?></td>
                                                                    <td id="leitura-<?=$arquivo->id;?>"><?=$arquivo->lido ? 'Lido' : '<b>Não</b> lido'; ?></td>
                                                                    <td>
                                                                        <a target="_blank" id="<?=$arquivo->id;?>" onclick="marcarLido(this);" href="public/files/<?=$arquivo->nome;?>">
                                                                            <button class="btn btn-primary" type="button">
                                                                                <i class="fa fa-file"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                                            <li class="dropdown-submenu">
                                                                                <a tabindex="-1" href="#">More options</a>
                                                                                <ul class="dropdown-menu">
                                                                                <li>testing</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                        </div>

                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
<?php include 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/arquivos.js"></script>