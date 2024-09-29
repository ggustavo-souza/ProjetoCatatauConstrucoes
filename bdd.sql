CREATE DATABASE banco_catatau;
USE banco_catatau;

CREATE TABLE IF NOT EXISTS `tabela_catatau` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `endereco` varchar(80) NOT NULL,
    `descricao` varchar(80) NOT NULL,
    `prop` varchar(80) NOT NULL,
    `cadastramento` datetime NOT NULL,
    `imagem` varchar(150) NOT NULL,
    `preco` int NOT NULL


) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

create table if not exists `usuarios_catatau` (
    `id` int UNSIGNED ZEROFILL not null AUTO_INCREMENT,
    `usuario` varchar(16) not null,
    `senha` varchar(20) not null,
    primary key (id)
) engine = MyISAM; 

INSERT INTO `tabela_catatau` (`id`, `endereco`, `descricao`, `prop`, `cadastramento`, `imagem`, `preco`) VALUES
(1, 'Rua Manoel Vieira - Jardim Camélias, N° 493 - Araçoiaba da Serra, SP', '1000m², 3 banheiros, 4 quartos, cozinha, sala de estar, piscina e área de lazer', 'José de Alencar', '2024-03-25', 'chacara1.jpg', 200000),
(2, 'Rua Manaus - Jardim Alvorada, N° 23 - Alumínio, SP', '1300m², 3 banheiros, 5 quartos, cozinha, sala de estar, piscina, área de lazer e pomar de frutas cítricas', 'Ademir de Nóbrega', '2023-07-10', 'chacara2.jpg', 350000),
(3, 'Rua Paineiras - Bairro do Cercado, N° 1002 - Iperó, SP', '2000m², 3 banheiros, 4 quartos, cozinha, sala de estar, 600m² de pasto, chiqueiro e galinheiro', 'Roberto Munhoz', '2022-10-06', 'chacara3.jpg', 500000);

