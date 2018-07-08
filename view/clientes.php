<?php include_once("header.php");?>

		
	<div id="wrapper">
    <!-- shell -->
		<div class="shell">
        <!-- container -->
			<div class="container">
				<div class="slider-holder">
				<!-- main -->
					<div class="main">
						<section class="cols2">
							<div class="col2">
							<!--<h5>Prencha aqui!</h5>-->
								<table width="900" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
										<td width="500">		
											<form name="formcadcli" method="post" action="../rotas/cadastroCliente.php">
												<table width="800" border="0" cellspacing="0" cellpadding="0">
												<tbody>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<td height="30" colspan="5" align="left"  style="color:#FFFFFF;background-color:#003580">
														<b><h5><strong>&nbsp;&nbsp;DADOS PESSOAIS</strong></h5></b>
													</td>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<tr>
														<div class="form-group">
															<td>	<label class="col-md-4 control-label">Codigo</label></td>
																<div class="col-md-6  inputGroupContainer">
																<td>
																	<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
																	<input name="codigo" placeholder="Codigo" class="form-control"  type="text" required>
																	</div>
																</td>
																</div>
														</div>	
														<td align="left">&nbsp;</td>
															<div class="form-group">
																<td><label class="col-md-4 control-label">Nome</label></td>
																<div class="col-md-6  inputGroupContainer">
																	<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																			<input  name="nome" placeholder="Nome" class="form-control"  type="text" required>
																		</div>
																	</td>
																</div>
															</div>
													</tr>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<tr>
														<div class="form-group">
															<td><label class="col-md-4 control-label">CPF</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
																		<input name="cpf" placeholder="999.999.999-99" class="form-control"  type="text" required>
																	</div></td>
															</div>
														</div>
														<td align="left">&nbsp;</td>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Data Nascimento</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
																		<input name="data" class="form-control"  type="date" required>
																	</div></td>
															</div>
														</div>
													</tr>	
														
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<tr>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Sexo</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td align="left">
																	
																	<input name="sexo" type="radio" value="Masculino" checked="checked" />Masculino 
																	<input name="sexo" type="radio" value="Feminino" />Feminino
																</td>
															</div>
														</div>
														<td align="left">&nbsp;</td>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Tipo</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td align="left">
																	<input type="radio" name="tipo" value="cliente"/> Cliente 
																	<input type="radio" name="tipo" value="Colaborador "/> Colaborador 
																</td>
															</div>
														</div>
													</tr>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
														<td height="30" colspan="5" align="left"  style="color:#FFFFFF;background-color:#003580">
														<b><h5><strong>&nbsp;&nbsp;Endereco</strong></h5></b>
													</td>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<tr>
														<div class="form-group">
															<td><label class="col-md-4 control-label">CEP</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
																		<input name="cep" placeholder="99999-999" class="form-control"  type="cep" required>
																	</div></td>
															</div>
														</div>
														<td align="left">&nbsp;</td>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Endereco</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
																		<input name="endereco" placeholder="Logradouro e numero" class="form-control"  type="text" required>
																	</div></td>
															</div>
														</div>
													</tr>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
													<tr>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Complemento</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
																		<input name="complemento" placeholder="Casa/Bloco/Ap" class="form-control"  type="text" required>
																	</div></td>
															</div>
														</div>
														<td align="left">&nbsp;</td>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Bairro:</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
																		<input name="bairro" placeholder="Nome" class="form-control"  type="text" required>
																	</div></td>
															</div>
														</div>
													<tr>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
														<td align="left">&nbsp;</td>
													</tr>
														<div class="form-group">
															<td><label class="col-md-4 control-label">Cidade</label></td>
															<div class="col-md-6  inputGroupContainer">
																<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
																		<input name="cidade" placeholder="Nome" class="form-control"  type="text" required>
																	</div></td>
															</div>
														</div>
														<td align="left">&nbsp;</td>
															<div class="form-group">
															<td><label class="col-md-4 control-label">Estado</label></td>
																<div class="col-md-6  inputGroupContainer">
																<td align="left">
																	<select name="estado" id="estado">
																	<option>Selecione</option>
																		<option>AC</option>
																		<option>AL</option>
																		<option>AP</option>
																		<option>AM</option>
																		<option>BA</option>
																		<option>CE</option>
																		<option>DF</option>
																		<option>ES</option>
																		<option>GO</option>
																		<option>MA</option>
																		<option>MT</option>
																		<option>MS</option>
																		<option>MG</option>
																		<option>PA</option>
																		<option>PB</option>
																		<option>PR</option>
																		<option>PE</option>
																		<option>PI</option>
																		<option>RJ</option>
																		<option>RN</option>
																		<option>RS</option>
																		<option>RO</option>
																		<option>RR</option>
																		<option>SC</option>
																		<option>SP</option>
																		<option>SE</option>
																		<option>TO</option>
																</select required></label>
																</td>
															</div></td>
														</div>
													</div>
																<tr>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																</tr>
																	<td height="30" colspan="5" align="left"  style="color:#FFFFFF;background-color:#003580">
																		<b><h5><strong>&nbsp;&nbsp;Contatos</strong></h5></b>
																	</td>
																<tr>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																</tr>
																<tr>
																	<div class="form-group">
																		<td><label class="col-md-4 control-label">Celular</label></td>
																		<div class="col-md-6  inputGroupContainer">
																			<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
																				<input  name="celular" placeholder="(00)95555-1212" class="form-control"  type="text" required>
																				</div>
																			</td>
																		</div>
																	</div>
																	<td align="left">&nbsp;</td>
																	<div class="form-group">
																		<td><label class="col-md-4 control-label">Residencial</label></td>
																		<div class="col-md-6  inputGroupContainer">
																			<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
																				<input  name="residencial" placeholder="(00)5555-1212" class="form-control"  type="text" required>
																				</div>
																			</td>
																		</div>
																	</div>
																</tr>
																<tr>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																	<td align="left">&nbsp;</td>
																</tr>
																<tr>
																	<div class="form-group">
																		<td><label class="col-md-4 control-label">Comercial</label></td>
																		<div class="col-md-6  inputGroupContainer">
																			<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
																				<input  name="comercial" placeholder="(00)5555-1212" class="form-control"  type="text" required>
																				</div>
																			</td>
																		</div>
																	</div>
																	<td align="left">&nbsp;</td>
																	<div class="form-group">
																		<td><label class="col-md-4 control-label">Email</label></td>
																		<div class="col-md-6  inputGroupContainer">
																			<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
																				<input  name="email" placeholder="teste@teste.com" class="form-control"  type="text" required>
																				</div>
																			</td>
																		</div>
																	</div>
																<tr>
																			<td align="right">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																		</tr>
																		
																			<td height="20" colspan="5" align="right" style="background:#003580"><strong>
																			</strong>
																			</td>
																		<tr>
																			<td align="right">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																		</tr>
																			<td style="margin-right:70px">
																			<div class="form-group">
																					<td><label class="col-md-4 control-label"></label></td>
																						<div class="col-md-4">
																							<td style="margin-right:70px"><button type="submit" class="btn btn-primary" >Cadastrar&nbsp;<span class="glyphicon glyphicon-send"></span></button></td>
																							<td align="left">&nbsp;</td>
																							<td style="margin-right:70px"><button type="reset" class="btn btn-primary" >Limpar&nbsp;<span class="glyphicon glyphicon-erase"></span></button></td>
																						</div>
																			</div>
																			</td>
									</tbody>
									</table>
								</form>
										</td>
										</tr>
									</tbody>
								</table>
							<!--<p>&nbsp;</p>-->
							</div>
						</section>
				</div>
				<!-- end of container -->
			</div>
			<!-- end of shell -->
		</div>
		<!-- end of wrapper -->
	</div>
		

		
	

<?php include_once("footer.php");?>