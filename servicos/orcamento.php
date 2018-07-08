<?php include_once("../view/header.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Orçamentos</title>

    <!-- Javascript -->
    <script type="text/javascript">
      
      $('#inputFone').mask("(99)99999-9999");

    </script>

    <!-- Bootstrap
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

    <!-- <link href="estilo.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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
                        <h3>Solicite Já o Seu Orçamento!</h3>
                        <h5>Preencha o formulário abaixo:</h5>
                        <table width="900" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="500">
                                        <form method="post" action="orcamentoCadastro.php" id="form2" name="form" title="Formulário de Contato" target="_self" onsubmit="return valida()">
                                            <table width="800" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td height="40" colspan="5" align="left" style="background: #001b42"><strong style="color :#fff">SEUS DADOS PESSOAIS:</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">Empresa:</td>
                                                        <td align="left">
                                                            <input name="empresa" type="text" class="form" id="empresa" title="Empresa" size="40">
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">Telefone:</td>
                                                        <td width="307" height="30" align="left">
                                                            <input name="telefone" type="text" class="form" id="empresa" title="Telefone" size="40" required="" autofocus="" placeholder="Digite Seu Telefone (Obrigatório)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="109" align="left">Nome:&nbsp;</td>
                                                        <td width="200" align="left">
                                                            <input name="nome" type="text" class="form" id="nome" title="Nome" size="40" required="" autofocus="" placeholder="Digite Seu Nome (Obrigatório)">
                                                        </td>
                                                        <td width="85" align="left">&nbsp;</td>
                                                        <td width="99" align="left">Celular:&nbsp;</td>
                                                        <td width="307" height="30" align="left">
                                                            <input name="celular" type="text" class="form" id="cel" title="Celular" size="40">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">E-mail:&nbsp;</td>
                                                        <td align="left">
                                                            <input name="email" type="text" class="form" id="email" title="E-mail" size="40" required="" autofocus="" placeholder="Digite Seu E-mail (Obrigatório)">
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">Cidade:</td>
                                                        <td height="30" align="left">
                                                            <input name="cidade" type="text" class="form" id="cidade" title="Cidade" size="40">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                    </tr>
                                                    <tr>
                                                        <td height="40" align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="40" colspan="5" align="left" style="background: #001b42"><strong style="color :#fff">PRODUTO DE INTERESSE:</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left">Tipo de Produto:</td>
                                                        <td align="left">
                                                            <select name="tipop" id="tela" required="" autofocus="" placeholder="Escolha o Tipo (Obrigatório)">
                                                                <option value="" selected="">Escolha aqui!</option>
                                                                <option value="Tela de Projeção">Tela de Projeção Elétrica (Motorizada)</option>
                                                                <option value="Tela Retrátil">Tela Retrátil (Manual de Teto)</option>
                                                                <option value="Tela Retrátil Com Tripé">Tela Retrátil Com Tripé</option>
                                                                <option value="Tela Mapa">Tela Mapa</option>
                                                                <option value="Tela para Amarração">Tela para Amarração</option>
                                                                <option value="Outros Produtos">Outros Produtos</option>
                                                                <option value="Ainda Não Sei">Ainda Não Sei Qual. Solicito Ajuda!</option>
                                                            </select>
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">Tamanho:</td>
                                                        <td height="30" align="left">
                                                            <input name="tamanho" type="text" class="form" id="tamanho" title="Tamanho da Tela em polegadas ou metros" size="40">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td rowspan="4" align="left">
                                                            <textarea name="infortela2" cols="35" rows="5" class="form" id="infortela2"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" align="left">Marca:</td>
                                                        <td align="left">
                                                            <input name="marca" type="text" class="form" id="outros" title="Outros Produtos" size="40">
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">Outras Informações:</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" align="left">Quantidade:</td>
                                                        <td align="left">
                                                            <input name="quantidade" type="text" class="form" id="qtd" title="Quantidade" size="40">
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="40" colspan="5" align="left" style="background: #001b42"><strong style="color :#fff">ENTREGA / INSTALAÇÃO:</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">Instalação:</td>
                                                        <td align="left">
                                                            <input type="radio" name="instalacao" value="sim"> Sim
                                                            <input type="radio" name="instalacao" value="nao"> Não</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">Entrega:</td>
                                                        <td height="30" align="left">
                                                            <input type="radio" name="entrega" value="sim"> Sim
                                                            <input type="radio" name="entrega" value="nao"> Não
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">CEP:</td>
                                                        <td align="left">
                                                            <input name="cep" type="text" class="form" id="cep" title="CEP" size="40">
                                                        </td>
                                                    
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">Retirar no local:</td>
                                                        <td align="left">
                                                            <input type="radio" name="retirar" value="sim"> Sim
                                                            <input type="radio" name="retirar" value="nao"> Não
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" align="left">Obs: Local de Retirada (Itaipú // Niterói)</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" colspan="2" align="left" style="background: #001b42"><strong style="color :#fff">PESQUISA:</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" align="left">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">Outras informações Relevantes:&nbsp;</td>
                                                        <td align="left">
                                                            <textarea name="message" cols="45" rows="8" class="form" id="message"></textarea>
                                                        </td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">Como chegou até
                                                            <br> a Br5 Telas de Projeção:</td>
                                                        <td height="30" align="left">
                                                            <select name="comochegou" id="como">
                                                                <option value="">Escolha aqui sua opção!</option>
                                                                <option value="Anuncios Diversos na Internet">Anuncios Diversos na Internet</option>
                                                                <option value="Indicação de Amigos">Indicação de Amigos</option>
                                                                <option value="Facebook">Facebook</option>
                                                                <option value="Google">Google</option>
                                                                <option value="Guia Maricá">Cartões e Panfletos</option>
                                                                <option value="Outros Locais">Outros Locais</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="30" align="left">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                        <td align="left"></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td align="left">&nbsp;</td>
                                                        <td height="40" align="left">
                                                            <input type="submit" name="button" id="button" value="     SOLICITAR ORÇAMENTO     ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </div>
                </section>
                
            </div>
            <!-- end of container -->
        </div>
        <!-- end of shell -->
    </div>
    <!-- end of wrapper -->

</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<?php include_once("../view/footer.php");?>