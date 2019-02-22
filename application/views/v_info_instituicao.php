<li class="breadcrumb-item active">Informações Instituições</li>
</ol>

<div class="page-content">
		<div class="container-fluid">
			<section class="box-typical box-panel mb-4">
				<div class="widget-container fluid-height">
                    <header class="box-typical-header">
                        <div class="tbl-cell tbl-cell-title">
                            <strong class="titulos">
                                Informações Básicas
                            </strong>
                        </div>
                    </header>
                    
                    <?php $url = ($tipo_tela=='nova') ? "instituicoes/cadastrar/":"instituicoes/salvar_edicao/"; ?>
                    
                    <form action="<?= base_url($url); ?>" method="post">
					<input type="hidden" value="<?= ($tipo_tela=='nova') ? "":$id_instituicao; ?>" name="id_instituicao">
                    <div class="box-typical-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nome">Nome</label>
                                    <input class="form-control proximo_campo" id="nome" name="nome" type="text" value= "<?= @$nome; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="telefone">Telefone</label>
                                    <input class="form-control proximo_campo" id="telefone" name="telefone" type="text" value= "<?= @$telefone; ?>">
                                </fieldset>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">                                
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_geral">Observação</label>
                                    <input class="form-control proximo_campo" id="observacao_geral" name="observacao_geral" type="textarea" value= "<?= @$observacao_geral; ?>">
                                </fieldset>
                            </div>
						</div>
                    </div>
					
                    <header class="box-typical-header">
                        <div class="tbl-cell tbl-cell-title">
                            <strong class="titulos">
                                Endereço
                            </strong>
                        </div>
                    </header>
                    <div class="box-typical-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="cep">CEP</label>
                                    <input class="form-control proximo_campo" id="cep" name="cep" pattern="[0-9]+" type="text" title="Apenas numeros" value= "<?= @$cep; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="logradouro">Logradouro</label>
                                    <input class="form-control proximo_campo uppercase" id="logradouro" name="logradouro" type="text" value= "<?= @$logradouro; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="numero_endereco">Número</label>
                                    <input class="form-control proximo_campo uppercase" id="numero_endereco" name="numero_endereco" type="text" value= "<?= @$numero_endereco; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="complemento">Complemento</label>
                                    <input class="form-control proximo_campo uppercase" id="complemento" name="complemento" type="text" value= "<?= @$complemento; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="bairro">Bairro</label>
                                    <input class="form-control proximo_campo uppercase" id="bairro" name="bairro" type="text" value= "<?= @$bairro; ?>">
                                </fieldset>
                            </div>
                             <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="id_cidade">Cidade</label>
                                    <select class="form-control proximo_campo uppercase" id="id_cidade" name="id_cidade">
									<option value="5339" selected>Anápolis</option>
									 <?php foreach($cidades -> result() as $cidades): ?>
										<?php if(@$id_cidade == $cidades->id_cidade):?>
											<option value="<?= $cidades->id_cidade; ?>" selected> <?= $cidades->descricao; ?></option>
										<?php else: ?>
											<option value="<?= $cidades->id_cidade; ?>"> <?= $cidades->descricao; ?></option>
										<?php endif ?>
									<?php endforeach; ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="referencia">Referência</label>
                                    <input class="form-control proximo_campo uppercase" id="referencia" name="referencia" type="text" value= "<?= @$referencia; ?>">
                                </fieldset>
                            </div>							
                        </div>
                    </div>
					<div class="box-typical-body">
                        <a class="btn btn-info-outline" href="<?= base_url('instituicoes')?>"><i class="fa fa-arrow-left"></i>&nbsp;Voltar</a>
						<button type="submit" class="btn btn-inline btn-success pull-right" id="manusear_despesa">Salvar</button>					
					</div>
					</form>
                </div>
            </section>
        </div>
    </div>
