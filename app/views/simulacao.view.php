<?php include 'app/views/partials/head.php'; ?>
<?php include 'app/views/partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <div class="clearfix">
        <?php include 'app/views/partials/header.php'; ?>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

            <div class="row simulacao-usuario">
                <div class="col-md-12">
                    <p>Você está simulando o usuário <?=$usuario[0]->nome;?></p>
                </div>
            </div>
            
                <div class="row" id="entrada">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title">
                                            <i class="fa fa-file"></i> Lista de Arquivos <br />
                                            <small style="font-size:15px;">Caixa de Entrada / 
                                                <a id="mostrar-arquivados" href="#">Arquivados</a>
                                            </small>
                                        </h2>
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
                                                    <th>Arquivar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php foreach($arquivos as $arquivo): ?>
                                                    <?php if($arquivo->status == 'entrada' && $arquivo->sirius == $cliente[0]->sirius): ?>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <tr style="font-size:13px;" id="arquivo-<?=$arquivo->id; ?>">
                                                                    <td><?=$arquivo->id;?></td>
                                                                    <td><?=$arquivo->nome; ?></td>
                                                                    <td id="leitura-<?=$arquivo->id;?>"><?=$arquivo->lido ? 'Lido' : '<b>Não</b> lido'; ?></td>
                                                                    <td>
                                                                        <a target="_blank" id="<?=$arquivo->id;?>" href="public/files/<?=$arquivo->sirius;?>/<?=$arquivo->nome;?>">
                                                                            <button class="btn btn-primary" type="button">
                                                                                <i class="fa fa-file"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a id="<?=$arquivo->id;?>" onclick="arquivar(this);" href="#">
                                                                            <i class="fa fa-archive arquivar"></i>
                                                                        </a>
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
                <div class="row" id="arquivados">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title">
                                            <i class="fa fa-archive"></i> Lista de Arquivados <br />
                                            <small style="font-size:15px;">Arquivados / 
                                                <a id="mostrar-entrada" href="#">Caixa de Entrada</a>
                                            </small>
                                        </h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <table id="tabelaArquivados" class="display compact">
                                            <thead>
                                                <tr>
                                                    <th>#Id</th>
                                                    <th>Nome</th>
                                                    <th>Vizualização</th>
                                                    <th>Exibir</th>
                                                    <th>Mover p/ C. de Entrada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php foreach($arquivos as $arquivo): ?>
                                                    <?php if($arquivo->status == 'arquivado' && $arquivo->sirius == $cliente[0]->sirius): ?>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <tr style="font-size:13px;" id="arquivo-<?=$arquivo->id; ?>">
                                                                    <td><?=$arquivo->id;?></td>
                                                                    <td><?=$arquivo->nome; ?></td>
                                                                    <td id="leitura-<?=$arquivo->id;?>"><?=$arquivo->lido ? 'Lido' : '<b>Não</b> lido'; ?></td>
                                                                    <td>
                                                                        <a target="_blank" id="<?=$arquivo->id;?>" href="public/files/<?=$arquivo->sirius;?>/<?=$arquivo->nome;?>">
                                                                            <button class="btn btn-primary" type="button">
                                                                                <i class="fa fa-file"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a id="<?=$arquivo->id;?>" onclick="desarquivar(this);" href="#">
                                                                            <i class="fa fa-arrow-up desarquivar"></i></i>
                                                                        </a>
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
<script src="public/assets/js/simulacaoArquivos.js"></script>