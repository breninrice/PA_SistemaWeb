CREATE DATABASE `deposito_contrumar`

DROP TABLE IF EXISTS `tb_pessoal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoal` (
  `id_pessoal` int(50) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `cpf` int(20) DEFAULT NULL,
  `data_nasc` datetime(15) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `cep` int(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `residencial` varchar(30) DEFAULT NULL,
  `comercial` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tb_pessoal`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_fornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `cnpj` int(20) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `restringir` varchar(20) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `cep` int(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `residencial` varchar(15) DEFAULT NULL,
  `comercial` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
/*refazer  a tabela*/
CREATE TABLE `tb_produtos` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(100) DEFAULT NULL,
  `nome_prod` varchar(100) DEFAULT NULL,
  `qtd_prod` int(20) DEFAULT NULL,
  `descricao_prod` varchar(100) DEFAULT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `localizacao_prod` varchar(100) DEFAULT NULL,
  `data_lote` date DEFAULT NULL,
  `lote` varchar(100) DEFAULT NULL,
  `preco` varchar(100) DEFAULT NULL,
  `custo` varchar(100) DEFAULT NULL, 
  PRIMARY KEY (`id_prod`),
  FOREIGN KEY (id_fornecedor) REFERENCES tb_fornecedor(id_fornecedor)
  /*`visivel` bit(8) DEFAULT NULL,*/ 
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_venda` (
  `id_venda` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `forma_de_pagamento` varchar(20) DEFAULT NULL, 
  PRIMARY KEY (`id_venda`),
  `id_pessoal` int(11) NOT NULL,
  FOREIGN KEY (id_pessoal) REFERENCES tb_pessoal (id_pessoal)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `tb_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_item` (
  `id_item` int(20) NOT NULL AUTO_INCREMENT,
  `qtde` int(20) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
   PRIMARY KEY (`id_item`),
  `id_prod` int(20) NOT NULL,
  `id_venda` int(20) NOT NULL,
  FOREIGN KEY (id_prod) REFERENCES tb_produtos (id_prod), 
  FOREIGN KEY (id_venda) REFERENCES tb_venda (id_venda) 
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_lote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_lote` (
  `id_lote` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `data_venc` date DEFAULT NULL,
  `qtde` int(11) NOT NULL, 
  PRIMARY KEY (`id_lote`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `tb_estoque`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_estoque` (
  `id_estoque` int(20) NOT NULL AUTO_INCREMENT,
  `qtde` int(20) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `data` date DEFAULT NULL,
PRIMARY KEY (`id_estoque`),
`id_lote` int(20) NOT NULL,
FOREIGN KEY (id_lote) REFERENCES tb_lote(id_lote) 
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_login` (
  `id_login` int(20) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL, 
PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_laje`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_laje` (
  `id_laje` int(20) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `Tipo_laje` varchar(30) DEFAULT NULL,
  `tamanho_vigota` varchar(30) DEFAULT NULL,
  `qtd_tijolos` varchar(30) DEFAULT NULL,
  `qtd_tijolos_furados` varchar(30) DEFAULT NULL,
  `outras_informacoes` varchar(100) DEFAULT NULL,
  `instalacao` varchar(15) DEFAULT NULL,
  `entrega` varchar(15) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `outras_informacoes_rel` varchar(100) DEFAULT NULL,
  `como_chegou` varchar(30) DEFAULT NULL
PRIMARY KEY (`id_laje`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_orcamento`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_orcamento` (
  `id_orcamento` int(20) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `tipo_produto` varchar(30) DEFAULT NULL,
  `tamanho` varchar(30) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `quantidade` varchar(30) DEFAULT NULL,
  `outras_informacoes` varchar(100) DEFAULT NULL,
  `instalacao` varchar(5) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `entrega` varchar(15) DEFAULT NULL,
  `outras_informacoes_rel` varchar(100) DEFAULT NULL,
  `retirar` varchar(5) DEFAULT NULL,
  `como_chegou` varchar(30) DEFAULT NULL
PRIMARY KEY (`id_orcamento`)
) ENGINE=InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tb_crediario`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_crediario` (
  `id_crediario` int(20) NOT NULL AUTO_INCREMENT,
  `emitente_devedor` varchar(150) DEFAULT NULL,
  `cpf_cnpj` varchar(150) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cidade` varchar(15) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `beneficiario` varchar(20) DEFAULT NULL,
  `cpf_cnpj_benef` varchar(30) DEFAULT NULL,
  `local_pgto` varchar(30) DEFAULT NULL,
  `valor_total` varchar(30) DEFAULT NULL,
  `parcelas` varchar(30) DEFAULT NULL,
  `data_venc` varchar(100) DEFAULT NULL
PRIMARY KEY (`id_crediario`)
) ENGINE=InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;