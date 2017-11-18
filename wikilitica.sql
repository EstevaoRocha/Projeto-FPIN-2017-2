-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2017 às 21:55
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wikilitica`
--
CREATE DATABASE IF NOT EXISTS `wikilitica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wikilitica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE `candidato` (
  `cand_id` int(11) NOT NULL,
  `cand_name` varchar(100) NOT NULL,
  `cand_sex` int(11) DEFAULT NULL,
  `cand_age` varchar(20) NOT NULL,
  `cand_job` varchar(100) DEFAULT NULL,
  `cand_part` varchar(100) DEFAULT NULL,
  `cand_work` text,
  `cand_hist` text NOT NULL,
  `cand_prop` varchar(200) NOT NULL,
  `cand_idea` varchar(200) DEFAULT NULL,
  `cand_source` varchar(300) NOT NULL,
  `cand_city` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`cand_id`, `cand_name`, `cand_sex`, `cand_age`, `cand_job`, `cand_part`, `cand_work`, `cand_hist`, `cand_prop`, `cand_idea`, `cand_source`, `cand_city`) VALUES
(2, 'RONALDO LESSA', 1, '68 Anos', 'Engenheiro civil ', 'PDT', 'Quem Sabe', 'Atualmente Deputado Federal , Partido DemocrÃ¡tico Trabalhista (PDT) , Foi um dos envolvidos no escÃ¢ndalo conhecido como OperaÃ§Ã£o Navalha. MACEIÃ“-AL Ronaldo Augusto Lessa Santos, ou apenas Ronaldo Lessa (MaceiÃ³, 25 de abril de 1949) Ã© um engenheiro civil e polÃ­tico brasileiro, ex-prefeito de MaceiÃ³, ex-governador de Alagoas por dois mandatos, atualmente Deputado Federal por este Estado, filiado ao Partido DemocrÃ¡tico Trabalhista (PDT). Ã‰ primo do tambÃ©m Deputado Federal MaurÃ­cio Quintella Lessa.', 'Combater a fome, Arrumar a saÃºde, Acabar com o trÃ¢nsito', 'Reducaoo da poluicao, CNH a partir de 16 anos', 'Gazeta de Alagoas, Veja', 'maceio'),
(3, 'Paulo Fernando', 1, '50 Anos', 'Teste', 'PT', 'Quem Sabe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac pharetra ante. In condimentum, dui eu pretium molestie, nibh urna faucibus urna, ultricies tincidunt dolor ipsum quis mi. Duis vulputate velit urna, sed gravida velit sagittis nec. Fusce rhoncus, nulla ut rhoncus convallis, lectus nisi accumsan lectus, ac commodo lorem augue eu velit. Curabitur aliquam vestibulum velit, eu mattis nisi volutpat ut. Integer eu porttitor nisi, eget ultricies eros. Nullam malesuada eget leo nec egestas. Maecenas faucibus consectetur dolor, eget consectetur magna consequat nec. Nullam volutpat velit lectus, et elementum nibh faucibus eget. Integer eget turpis feugiat, fermentum est at, aliquet erat. Mauris in feugiat mi. Duis vulputate finibus commodo.', 'Algumas', 'Algumas', 'Folha de S Paulo', 'maceio'),
(4, 'CICERO ALMEIDA', 1, '65 Anos', 'Radialista', 'Selecione o Partido', 'Quem Sabe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac pharetra ante. In condimentum, dui eu pretium molestie, nibh urna faucibus urna, ultricies tincidunt dolor ipsum quis mi. Duis vulputate velit urna, sed gravida velit sagittis nec. Fusce rhoncus, nulla ut rhoncus convallis, lectus nisi accumsan lectus, ac commodo lorem augue eu velit. Curabitur aliquam vestibulum velit, eu mattis nisi volutpat ut. Integer eu porttitor nisi, eget ultricies eros. Nullam malesuada eget leo nec egestas. Maecenas faucibus consectetur dolor, eget consectetur magna consequat nec. Nullam volutpat velit lectus, et elementum nibh faucibus eget. Integer eget turpis feugiat, fermentum est at, aliquet erat. Mauris in feugiat mi. Duis vulputate finibus commodo.', 'Algumas', 'Algumas', 'Globo', 'maceio'),
(5, 'RENAN FILHO', 1, '30 Anos', 'Economista', 'PMDB', 'Quem Sabe', 'Foi eleito prefeito do municÃ­pio de Murici, em Alagoas, nas eleiÃ§Ãµes de 2004, sendo reeleito em 2008.[2] No inÃ­cio de abril deste ano, renunciou ao mandato para possivelmente disputar um mandato de deputado estadual, na Assembleia Legislativa, sendo substituÃ­do por Remi Calheiros, ex-prefeito e que era seu vice.  Nas eleiÃ§Ãµes de outubro de 2010 foi eleito Deputado Federal,[2] sendo naquele pleito o candidato mais votado de Alagoas.[3] Foi quem recebeu mais votos em 22 dos 104 MunicÃ­pios do estado de Alagoas.  Ã‰ o filho primogÃªnito do senador, Renan Calheiros, ex-presidente do Senado Federal, com Maria VerÃ´nica Rodrigues Calheiros.[3]', 'Algumas', 'Algumas', 'Gazeta', 'maceio'),
(6, 'JOAO HENRIQUE CALDAS', 1, '27 Anos', 'Advogado', 'PSB', 'Quem Sabe', 'Tendo ingressado na Assembleia Legislativa de Alagoas com apenas 23 anos, desde que assumiu o mandato JHC demonstrou postura independente ao Governo do Estado[carece de fontes], que tinha como governador TeotÃ´nio Vilela Filho (PSDB).  Entre as aÃ§Ãµes desempenhadas, destacam-se a criaÃ§Ã£o da ComissÃ£o de CiÃªncia e Tecnologia,[3] Parlamento Jovem, ComissÃ£o de Defesa do Consumidor e Contribuinte,[4] ComissÃ£o Especial das Enchentes e denÃºncias de irregularidades que mais tarde culminariam com o afastamento da Mesa Diretora, entÃ£o presidida pelo deputado Fernando Toledo (PSDB).[5]', 'Algumas', 'Algumas', 'Abril', 'maceio'),
(8, 'teste', 1, 'teste', 'teste', 'PODE', 'teste', 'etestsa', 'asdsad', 'sadad', 'dasdsad', 'recife');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `pass_user` text NOT NULL,
  `cpf_user` varchar(15) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `birth_user` date DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `state_user` varchar(60) DEFAULT NULL,
  `city_user` varchar(60) DEFAULT NULL,
  `sex_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `email_user`, `pass_user`, `cpf_user`, `name_user`, `birth_user`, `add_user`, `state_user`, `city_user`, `sex_user`) VALUES
(1, 'estevaogabrielsr@outlook.com.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '99999999909', 'ESTEVAO GABRIEL SANTOS ROCHA', NULL, NULL, NULL, NULL, NULL),
(16, 'teste@teste.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '99999999908', 'teste', '0000-00-00', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`cand_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidato`
--
ALTER TABLE `candidato`
  MODIFY `cand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
