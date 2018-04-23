<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Tela Inicial</h1>

    <div class="alert alert-warning" role="alert">
        Esta área restrita está acessível para todos, porque ainda não foi implementado o sistem de Login.     
    </div>

    <div class="alert alert-danger" role="alert">
        Falta implementar a busca por nome, telefone e endereço
    </div>

    <h2>Como Testar</h2>

    <ol>
        <li>Criar o banco de dados <strong>'contatos_ci2'</strong></li>
        <li>Editar o arquivo <strong>application/config/database.php</strong> ara ajustar as configurações do banco de dados</li>
        <li>Executar os comando sql abaixo para criar e popular a tabela de usuários:</li>
    </ol>    
    
    <p>&nbsp;&nbsp;</p>
        
        <pre>

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `cpf`, `endereco`, `email`, `senha`, `status`, `nivel`) VALUES
(1, 'Carlos Alberto', '123456789-00', 'Rua Olimpio Leite da Silva, 77, Sobreloja', 'carlos.cadilhe1973@gmail.com', '476e81bf040ea41ba3aeeb6db105ab8c', 1, 1),
(2, 'Pedro H', '123456789-99', 'Ru Caraguatatuba 12345', 'pedro.henrique123@gmail.com', 'c6cc8094c2dc07b700ffcc36d64e2138', 1, 2),
(3, 'Patricia L', '09876543210', 'Estrada das Oliveiras', 'patcacal1212@gmail.com', '743982df4b872edeb81ed3ed9c7e618b', 1, 2),
(4, 'Mayra B', '132465798-00', 'Rua Rio Grande do Norte', 'mayra.bueno12345@email.com', '3b6533cfca994e8bd63aaea47c2ee0c9', 1, 2),
(5, 'Peterson M', '32165498700', 'Rua Peterson 23456', 'peterson.un@hotmail.com', '3e6f31d8c5f341a9c1b16dcf607e1ace', 1, 1);
COMMIT;

    </pre>


</div>