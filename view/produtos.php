<?php include_once("header.php");?>
	<meta charset="utf-8">	
				
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
											<form name="formcadprod" method="post" action="cadastroProduto.php">
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
													<td height="30" colspan="5" align="left"  style="color:#FFFFFF;background-color:#001b42">
														<b><h5><strong>&nbsp;&nbsp;CADASTRO DE PRODUTOS</strong></h5></b>
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
																					<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
																							<input name="codigo" placeholder="Codigo" class="form-control"  type="text">
																						</div></td>
																				</div>
																			</div>
																		
																			<td align="left">&nbsp;</td>
																			
																			<div class="form-group">
																			<td><label class="col-md-4 control-label">Nome</label></td>
																				<div class="col-md-6  inputGroupContainer">
																					<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
																							<input  name="nome" placeholder="Produto" class="form-control"  type="text">
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
																				<td>	<label class="col-md-4 control-label">Quantidade</label></td>
																				<div class="col-md-6  inputGroupContainer">
																				<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
																						<input name="quantidade" placeholder="Somente numeros" class="form-control"  type="text">
																					</div></td>
																				</div>
																			</div>
																			
																			<td align="left">&nbsp;</td>
																			<div class="form-group">
																			<td><label class="col-md-4 control-label">Descricao</label></td>
																				<div class="col-md-6  inputGroupContainer">
																					<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
																						<input  name="descricao" placeholder="Tamanho/cor/..." class="form-control"  type="text">
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
																				<td>	<label class="col-md-4 control-label">Fornecedor</label></td>
																				<div class="col-md-6  inputGroupContainer">
																				<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-retweet"></i></span>
																						<input name="fornecedor" placeholder="Somente numeros" class="form-control"  type="text">
																					</div></td>
																				</div>
																			</div>
																			
																			<td align="left">&nbsp;</td>
																			      <div class="form-group">
																					<td><label class="col-md-4 control-label">Localizacao</label></td>
																					<div class="col-md-6  inputGroupContainer">
																					  <td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
																						<input name="localizacao" placeholder="Qual destino?" class="form-control" type="text">
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
																				<td><label class="col-md-4 control-label">Data lote</label></td>
																				<div class="col-md-6  inputGroupContainer">
																				<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
																						<input name="data_lote" class="form-control"  type="date" required>
																					</div></td>
																				</div>
																			</div>
																			
																			<td align="left">&nbsp;</td>
																			<div class="form-group">
																				<td>	<label class="col-md-4 control-label">Lote</label></td>
																				<div class="col-md-6  inputGroupContainer">
																				<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
																						<input name="lote" placeholder="Somente numeros" class="form-control"  type="text">
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
																				<td>	<label class="col-md-4 control-label">Preco</label></td>
																				<div class="col-md-6  inputGroupContainer">
																				<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
																						<input name="preco" placeholder="Somente numeros" class="form-control"  type="text">
																					</div></td>
																				</div>
																			</div>
																			
																			<td align="left">&nbsp;</td>
																			<div class="form-group">
																				<td>	<label class="col-md-4 control-label">Custo</label></td>
																				<div class="col-md-6  inputGroupContainer">
																				<td><div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
																						<input name="custo" placeholder="Somente numeros" class="form-control"  type="text">
																					</div></td>
																				</div>
																			</div>
																			
																		</tr>
																		<tr>
																			<td align="right">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																			<td align="left">&nbsp;</td>
																		</tr>
																		
																			<td height="20" colspan="5" align="right" style="background:#001b42"><strong>
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