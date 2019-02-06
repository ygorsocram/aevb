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
                        </div>
                    </header>
                    <div class="box-typical-body">
                        <div class="row">
                            <div class="col-lg-6" id="div_cnpj">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nome">Nome*</label>
                                    <input class="form-control proximo_campo" id="nome" name="nome" type="text" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-2" id="div_cpf">
                                <fieldset class="form-group">
                                    <label class="form-label" for="cpf">CPF</label>
                                    <input class="form-control proximo_campo" id="cpf" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="rg" id="label_ie">RG</label>
                                    <input class="form-control proximo_campo " id="rg" name="rg" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="org_exp">Orgão Expedidor</label>
                                    <input class="form-control proximo_campo" id="org_exp" name="org_exp" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="naturalidade">Naturalidade</label>
                                    <input class="form-control proximo_campo" id="naturalidade" name="naturalidade" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="est_civil">Estado Civil*</label>
                                    <select class="form-control proximo_campo uppercase" id="est_civil" name="est_civil" required>
                                        <option value="V">Viuva</option>
                                        <option value="C">Casada</option>
										<option value="C">Falecida</option>
                                    </select>
                                </fieldset>
                            </div>
							  <div class="col-lg-3">
								  <fieldset class="form-group">
									<label class="form-label" for="data">Data de Nascimento*</label>
									<input class="form-control proximo_campo" id="data" name="data" type="date" placeholder="Data" size="80" required>
								  </fieldset>
							  </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="instituicao">Onde Congrega?*</label>
                                    <select class="form-control proximo_campo uppercase" id="est_civil" name="est_civil" required>
                                        <option value="0">Selecione</option>
                                        <option value="1">Igreja</option>
                                        <option value="2">Alameda</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="ler">Sabe ler?*</label>
                                    <select class="form-control proximo_campo uppercase" id="ler" name="ler" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="diabetes">Tem Diabetes?*</label>
                                    <select class="form-control proximo_campo uppercase" id="diabetes" name="diabetes" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="medicamento">Usa medicação?*</label>
                                    <select class="form-control proximo_campo uppercase" id="medicamento" name="medicamento" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="descricao_remedio">Qual?</label>
                                    <input class="form-control proximo_campo" id="descricao_remedio" name="descricao_remedio" type="text">
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
								<input class="form-control proximo_campo" id="renda" name="renda" type="number" step="0.01">
							  </fieldset>
						  </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="origem_renda">Origem</label>
                                    <input class="form-control proximo_campo" id="origem_renda" name="origem_renda" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_renda">Observação da renda</label>
                                    <input class="form-control proximo_campo" id="observacao_renda" name="observacao_renda" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="recebe_cesta">Recebe Cesta?*</label>
                                    <select class="form-control proximo_campo uppercase" id="recebe_cesta" name="recebe_cesta" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="origem_cesta">De onde?</label>
                                    <input class="form-control proximo_campo" id="origem_cesta" name="origem_cesta" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="precisa_cesta">Precisa de Cesta?*</label>
                                    <select class="form-control proximo_campo uppercase" id="precisa_cesta" name="precisa_cesta" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_cesta">Observação da cesta</label>
                                    <input class="form-control proximo_campo" id="observacao_cesta" name="observacao_cesta" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="aluguel">Mora de aluguel?*</label>
                                    <select class="form-control proximo_campo uppercase" id="aluguel" name="aluguel" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="pagamento_aluguel">Paga o aluguel?*</label>
                                    <select class="form-control proximo_campo uppercase" id="pagamento_aluguel" name="pagamento_aluguel" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="ajuda_aluguel">Precisa de ajuda?*</label>
                                    <select class="form-control proximo_campo uppercase" id="ajuda_aluguel" name="ajuda_aluguel" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao_aluguel">Observação da aluguel</label>
                                    <input class="form-control proximo_campo" id="observacao_aluguel" name="observacao_aluguel" type="text">
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
                                    <label class="form-label" for="cep">CEP*</label>
                                    <input class="form-control proximo_campo" id="cep" name="cep" type="text" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="logradouro">Logradouro*</label>
                                    <input class="form-control proximo_campo uppercase" id="logradouro" name="logradouro" type="text" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="numero">Número</label>
                                    <input class="form-control proximo_campo uppercase" id="numero" name="numero" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="complemento">Complemento</label>
                                    <input class="form-control proximo_campo uppercase" id="complemento" name="complemento" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="bairro">Bairro*</label>
                                    <input class="form-control proximo_campo uppercase" id="bairro" name="bairro" type="text" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label" for="cidade">Cidade*</label>
                                    <input class="form-control proximo_campo uppercase" id="cidade" name="cidade" type="text" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label" for="referencia">Referência*</label>
                                    <input class="form-control proximo_campo uppercase" id="referencia" name="referencia" type="text" required>
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
                                    <label class="form-label" for="esposo">Nome do esposo falecido</label>
                                    <input class="form-control proximo_campo uppercase" id="esposo" name="esposo" type="text">
                                </fieldset>
                            </div>
                          <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label" for="acompanhante">Vive com alguém?*</label>
                                    <select class="form-control proximo_campo uppercase" id="acompanhante" name="acompanhante" required>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nome_acompanhante">Nome do acompanhante</label>
                                    <input class="form-control proximo_campo" id="nome_acompanhante" name="nome_acompanhante" type="text">
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
                                    <label class="form-label" for="porque_procurou">Porque procurou a Associação?</label>
                                    <textarea id="porque_procurou" class="form-control uppercase" rows="3"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                                
                                <fieldset class="form-group">
                                    <label class="form-label" for="observacao">Reservado para a Coordenação</label>
                                    <textarea id="observacao" class="form-control uppercase" rows="3"></textarea>
                                </fieldset>
                            </div>
					</div>
						</div>
					<div class="box-typical-body>
                        <a class="btn btn-info-outline" href="<?= base_url('clientes')?>"><i class="fa fa-arrow-left"></i>&nbsp;Voltar</a>
                        <button type="submit" class="btn btn-inline btn-success pull-right" id="cadastrar_cliente">Cadastrar</button>
					</div>
                </div>
            </section>
        </div>
    </div>
