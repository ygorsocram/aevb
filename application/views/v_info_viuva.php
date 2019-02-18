<li class="breadcrumb-item active">Informações Viuvas</li>
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
							
							<?php if($tipo_tela=='editar'):?>
								<button id="insere_foto" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static" data-target="#cadastrar_" title="Inserir foto" id="step2"><i class="fa fa-photo"></i> Foto</button>
							<?php endif ?>
							
                        </div>
                    </header>
					
					<?php if($tipo_tela=='nova'):?>
						<form action="<?= base_url("viuvas/cadastrar?id_viuva=0")?>" method="post">
					<?php else: ?>
						<form action="<?= base_url("viuvas/salvar_edicao?id_viuva={$id_viuva}")?>" method="post">
					<?php endif ?>
					
                    <div class="box-typical-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nome">Nome</label>
                                    <input class="form-control proximo_campo" id="nome" name="nome" type="text" value= "<?= $nome; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="telefone">Telefone</label>
                                    <input class="form-control proximo_campo" id="telefone" name="telefone" type="text" value= "<?= $telefone; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="cpf">CPF</label>
                                    <input class="form-control proximo_campo" id="cpf" name="cpf" pattern="[0-9]+" type="text" title="Apenas numeros" value= "<?= $cpf; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="rg" id="label_ie">RG</label>
                                    <input class="form-control proximo_campo " id="rg" name="rg" pattern="[0-9]+" type="text" title="Apenas numeros" value= "<?= $rg; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="orgao_exp">Orgão Expedidor</label>
                                    <input class="form-control proximo_campo" id="orgao_exp" name="orgao_exp" type="text" value= "<?= $orgao_exp; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="naturalidade">Naturalidade</label>
                                    <input class="form-control proximo_campo" id="naturalidade" name="naturalidade" type="text" value= "<?= $naturalidade; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="estado_civil">Estado Civil *</label>
                                    <select class="form-control proximo_campo uppercase" id="estado_civil" name="estado_civil" required>
									<option value="" selected>Selecione</option>
									 <?php foreach($estados_civis -> result() as $estados_civis): ?>
										<?php if($estado_civil == $estados_civis->estado_civil):?>
											<option value="<?= $estados_civis->estado_civil; ?>" selected> <?= $estados_civis->descricao; ?></option>
										<?php else: ?>
											<option value="<?= $estados_civis->estado_civil; ?>"> <?= $estados_civis->descricao; ?></option>
										<?php endif ?>
									<?php endforeach; ?>
                                    </select>
                                </fieldset>
                            </div>
							  <div class="col-lg-3">
								  <fieldset class="form-group">
									<label class="form-label" for="data_nascimento">Data de Nascimento</label>
									<input class="form-control proximo_campo" id="data_nascimento" name="data_nascimento" type="date" value= "<?= $data_nascimento; ?>" size="80">
								  </fieldset>
							  </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="id_instituicao">Onde Congrega?*</label>
                                    <select class="form-control proximo_campo uppercase" id="id_instituicao" name="id_instituicao" required>
									<option value="" selected>Selecione</option>
									 <?php foreach($instituicoes -> result() as $instituicoes): ?>
										<?php if($id_instituicao == $instituicoes->id_instituicao):?>
											<option value="<?= $instituicoes->id_instituicao; ?>" selected> <?= $instituicoes->nome; ?></option>
										<?php else: ?>
											<option value="<?= $instituicoes->id_instituicao; ?>"> <?= $instituicoes->nome; ?></option>
										<?php endif ?>
									<?php endforeach; ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="ler">Sabe ler?</label>
                                    <select class="form-control proximo_campo uppercase" id="ler" name="ler">
									<?php if($ler == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="diabetes">Tem Diabetes?</label>
                                    <select class="form-control proximo_campo uppercase" id="diabetes" name="diabetes">
									<?php if($diabetes == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="medicacao">Usa medicação?</label>
                                    <select class="form-control proximo_campo uppercase" id="medicacao" name="medicacao">
									<?php if($medicacao == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_medicacao">Observação Medicação</label>
                                    <input class="form-control proximo_campo" id="observacao_medicacao" name="observacao_medicacao" type="text" value= "<?= $observacao_medicacao; ?>">
                                </fieldset>
                            </div>
                        </div>
                    </div>
					
                    <header class="box-typical-header">
                        <div class="tbl-cell tbl-cell-title">
                            <strong class="titulos">
                                Situação Financeira
                            </strong>
                        </div>
                    </header>
                    <div class="box-typical-body">
                        <div class="row">
						  <div class="col-lg-2">
							  <fieldset class="form-group">
								<label class="form-label" for="renda">Renda Mensal</label>
								<input class="form-control proximo_campo" id="renda" name="renda" type="number" step="0.01" placeholder="0" value= "<?= $renda; ?>">
							  </fieldset>
						  </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="origem_renda">Origem</label>
                                    <input class="form-control proximo_campo" id="origem_renda" name="origem_renda" type="text" value= "<?= $origem_renda; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_renda">Observação da renda</label>
                                    <input class="form-control proximo_campo" id="observacao_renda" name="observacao_renda" type="text" value= "<?= $observacao_renda; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="recebe_cesta">Recebe Cesta?</label>
                                    <select class="form-control proximo_campo uppercase" id="recebe_cesta" name="recebe_cesta">
									<?php if($recebe_cesta == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="origem_cesta">De onde?</label>
                                    <input class="form-control proximo_campo" id="origem_cesta" name="origem_cesta" type="text" value= "<?= $origem_cesta; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="ajuda_cesta">Precisa de Cesta?</label>
                                    <select class="form-control proximo_campo uppercase" id="ajuda_cesta" name="ajuda_cesta">
									<?php if($ajuda_cesta == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_cesta">Observação da cesta</label>
                                    <input class="form-control proximo_campo" id="observacao_cesta" name="observacao_cesta" type="text" value= "<?= $observacao_cesta; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="mora_aluguel">Mora de aluguel?</label>
                                    <select class="form-control proximo_campo uppercase" id="mora_aluguel" name="mora_aluguel">
									<?php if($mora_aluguel == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="paga_aluguel">Paga o aluguel?</label>
                                    <select class="form-control proximo_campo uppercase" id="paga_aluguel" name="paga_aluguel">
									<?php if($paga_aluguel == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="ajuda_aluguel">Precisa de ajuda?</label>
                                    <select class="form-control proximo_campo uppercase" id="ajuda_aluguel" name="ajuda_aluguel">
									<?php if($ajuda_aluguel == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_aluguel">Observação da aluguel</label>
                                    <input class="form-control proximo_campo" id="observacao_aluguel" name="observacao_aluguel" type="text" value= "<?= $observacao_aluguel; ?>">
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
                                    <input class="form-control proximo_campo" id="cep" name="cep" pattern="[0-9]+" type="text" title="Apenas numeros" value= "<?= $cep; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="logradouro">Logradouro</label>
                                    <input class="form-control proximo_campo uppercase" id="logradouro" name="logradouro" type="text" value= "<?= $logradouro; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="numero_endereco">Número</label>
                                    <input class="form-control proximo_campo uppercase" id="numero_endereco" name="numero_endereco" type="text" value= "<?= $numero_endereco; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="complemento">Complemento</label>
                                    <input class="form-control proximo_campo uppercase" id="complemento" name="complemento" type="text" value= "<?= $complemento; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="bairro">Bairro</label>
                                    <input class="form-control proximo_campo uppercase" id="bairro" name="bairro" type="text" value= "<?= $bairro; ?>">
                                </fieldset>
                            </div>
                             <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="id_cidade">Cidade</label>
                                    <select class="form-control proximo_campo uppercase" id="id_cidade" name="id_cidade">
									<option value="5339" selected>Anápolis</option>
									 <?php foreach($cidades -> result() as $cidades): ?>
										<?php if($id_cidade == $cidades->id_cidade):?>
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
                                    <input class="form-control proximo_campo uppercase" id="referencia" name="referencia" type="text" value= "<?= $referencia; ?>">
                                </fieldset>
                            </div>							

                        </div>
                    </div>
					
                    <header class="box-typical-header">
                        <div class="tbl-cell tbl-cell-title">
                            <strong class="titulos">
                                Relacionamento
                            </strong>
                        </div>
                    </header>
                    <div class="box-typical-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nome_esposo">Nome do esposo falecido</label>
                                    <input class="form-control proximo_campo uppercase" id="nome_esposo" name="nome_esposo" type="text" value= "<?= $nome_esposo; ?>">
                                </fieldset>
                            </div>
                          <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="mora_sozinha">Mora sozinha?</label>
                                    <select class="form-control proximo_campo uppercase" id="mora_sozinha" name="mora_sozinha">
									<?php if($mora_sozinha == 1):?>
                                        <option value="1" selected>Sim</option>
										<option value="0">Não</option>
									<?php else: ?>
										<option value="1">Sim</option>
                                        <option value="0" selected>Não</option>
									<?php endif ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nome_acompanhante">Nome do acompanhante</label>
                                    <input class="form-control proximo_campo" id="nome_acompanhante" name="nome_acompanhante" type="text" value= "<?= $nome_acompanhante; ?>">
                                </fieldset>
                            </div>
						</div>
					</div>
					
					
                    <header class="box-typical-header">
                        <div class="tbl-cell tbl-cell-title">
                            <strong class="titulos">
                                Finalização
                            </strong>
                        </div>
                    </header>
                    <div class="box-typical-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                                
                                <fieldset class="form-group">
                                    <label class="form-label" for="motivo_procura">Porque procurou a Associação?</label>
                                    <input class="form-control proximo_campo" id="motivo_procura" name="motivo_procura" type="textarea" value= "<?= $motivo_procura; ?>">
                                </fieldset>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                                
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_geral">Reservado para a Coordenação</label>
                                    <input class="form-control proximo_campo" id="observacao_geral" name="observacao_geral" type="textarea" value= "<?= $observacao_geral; ?>">
                                </fieldset>
                            </div>
					</div>
						</div>
					<div class="box-typical-body">
                        <a class="btn btn-info-outline" href="<?= base_url('viuvas')?>"><i class="fa fa-arrow-left"></i>&nbsp;Voltar</a>
						<button type="submit" class="btn btn-inline btn-success pull-right" id="manusear_despesa">Salvar</button>					
					</div>
					</form>
                </div>
            </section>
        </div>
    </div>
