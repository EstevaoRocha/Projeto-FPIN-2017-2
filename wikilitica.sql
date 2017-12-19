-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2017 às 15:06
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `cand_id` int(11) NOT NULL,
  `cand_name` varchar(100) NOT NULL,
  `cand_sex` int(11) DEFAULT NULL,
  `cand_age` varchar(20) NOT NULL,
  `cand_job` varchar(100) DEFAULT NULL,
  `cand_part` varchar(100) DEFAULT NULL,
  `cand_work` mediumtext,
  `cand_hist` mediumtext NOT NULL,
  `cand_prop` varchar(200) NOT NULL,
  `cand_idea` varchar(200) DEFAULT NULL,
  `cand_source` varchar(300) NOT NULL,
  `cand_city` varchar(60) NOT NULL,
  `cand_pict` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`cand_id`, `cand_name`, `cand_sex`, `cand_age`, `cand_job`, `cand_part`, `cand_work`, `cand_hist`, `cand_prop`, `cand_idea`, `cand_source`, `cand_city`, `cand_pict`) VALUES
(2, 'RONALDO LESSA', 0, '68 ANOS', 'Engenheiro Civil', 'PDT', 'Quem Sabe', 'Ronaldo Augusto Lessa Santos, ou apenas Ronaldo Lessa (Maceió, 25 de abril de 1949) é um engenheiro civil e político brasileiro, ex-prefeito de Maceió, ex-governador de Alagoas por dois mandatos, atualmente Deputado Federal por este Estado, filiado ao Partido Democrático Trabalhista (PDT). É primo do também Deputado Federal Maurício Quintella Lessa.', 'Combater a fome, Organizar a saúde, Reduzir o trânsito', 'Reducao da poluicao, CNH a partir de 16 anos', 'Gazeta de Alagoas, veja', 'maceio', ''),
(3, 'PAULO FERNANDO', 1, '50 Anos', '', 'PT', 'Quem Sabe', 'Paulo Fernando dos Santos, mais conhecido como Paulão ou Paulão do PT (Recife, 15 de setembro de 1957), é um sindicalista e político brasileiro, atualmente Deputado Federal pelo Estado de Alagoas, filiado ao PT.\r\n\r\nÉ um dos condenados na chamada Operação Taturana.', 'Propostas 1, Propostas 5', 'Algumas 1, Algumas 2, Algumas 3', 'Folha de S Paulo', 'recife', ''),
(5, 'RENAN FILHO', 1, '30 Anos', 'Economista', 'PMDB', 'Quem Sabe', 'José Renan Vasconcelos Calheiros Filho (Murici, 8 de outubro de 1979) é um político brasileiro. Filiado ao PMDB, é o atual Governador do Estado de Alagoas.\r\n\r\nÉ filho de Renan Calheiros, ex-presidente do Senado Federal.', 'Propostas 2, Propostas 3', 'Algumas 4, Algumas 1', 'Gazeta', 'maceio', ''),
(6, 'JOAO HENRIQUE CALDAS', 1, '27 Anos', 'Advogado', 'PSB', 'Quem Sabe', 'João Henrique Holanda Caldas, também conhecido como JHC (Maceió, 22 de julho de 1987), é um político brasileiro, filiado ao Partido Socialista Brasileiro (PSB). Foi o candidato a deputado federal mais votado em seu estado nas eleições de 2014 e hoje exerce a função de Terceiro-Secretário da Mesa da Câmara dos Deputados do Brasil.\r\n\r\nÉ filho do também político João Caldas da Silva', 'Propostas 3, Propostas 6', 'Algumas 5, Algumas 6', 'Abril', 'maceio', ''),
(7, 'CICERO ALMEIDA', 1, '65 Anos', 'Radialista', 'PODE', 'Quem Sabe', 'José Cícero Soares de Almeida, ou apenas Cícero Almeida (Maribondo, 8 de janeiro de 1958) é um radialista, cantor e político brasileiro. Foi prefeito de Maceió, atualmente Deputado Federal pelo Estado de Alagoas, eleito em 2014 pelo PRTB mas hoje filiado ao Podemos (PODE).', 'Propostas 4, Propostas 7', 'Algumas 7, Algumas 18', 'Veja', 'maceio', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `city_id` int(11) NOT NULL,
  `city_state` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_popu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`city_id`, `city_state`, `city_name`, `city_popu`) VALUES
(1, 'AL', 'maceio', ''),
(2, 'PE', 'recife', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partido`
--

CREATE TABLE `partido` (
  `part_id` int(11) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `part_sigla` varchar(10) NOT NULL,
  `part_cand` mediumtext NOT NULL,
  `part_city` varchar(100) NOT NULL,
  `part_hist` mediumtext NOT NULL,
  `part_numb` int(11) NOT NULL,
  `part_pres` varchar(50) NOT NULL,
  `part_fund` date DEFAULT NULL,
  `part_page` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `partido`
--

INSERT INTO `partido` (`part_id`, `part_name`, `part_sigla`, `part_cand`, `part_city`, `part_hist`, `part_numb`, `part_pres`, `part_fund`, `part_page`) VALUES
(6, 'Partido dos Trabalhadores', 'PT', 'Paulo Fernando', 'SP', 'O Partido dos Trabalhadores (PT) ï¿½ um partido polï¿½tico brasileiro. Fundado em 1980, integra um dos maiores e mais importantes movimentos de esquerda da Amï¿½rica Latina. No inï¿½cio de 2015, o partido contava com 1,59 milhï¿½o de filiados, sendo o segundo maior partido polï¿½tico do Brasil, depois do PMDB. Na legislatura atual (2015-2019), o PT tem a segunda maior bancada na Cï¿½mara dos Deputados e a terceira maior do Senado Federal.', 13, 'GLEISI HOFFMANN', '1980-02-10', 'www.pt.org.br'),
(8, 'Podemos', 'PODE', 'Cicero Almeida', 'SP', 'Podemos (PODE), anteriormente denominado Partido Trabalhista Nacional (PTN), Ã© um partido polÃ­tico brasileiro. O PTN era um dos partidos mais antigos do Brasil, uma vez que remontava Ã  organizaÃ§Ã£o fundada na RepÃºblica Nova por dissidentes do Partido Trabalhista Brasileiro (PTB) e refundada com o retorno do pluripartidarismo no paÃ­s. Tem sido comandado pela famÃ­lia Abreu (JosÃ© Masci de Abreu, Dorival de Abreu e Renata Abreu) desde a refundaÃ§Ã£o em 1995. Antes disso, conseguiu eleger um filiado como presidente do Brasil: JÃ¢nio Quadros, em 1960.[6] Em 2016 mudou de nome para PODEMOS, mas ideologicamente se difere muito do PODEMOS (Espanha), que Ã© de Esquerda', 19, 'RENATA ABREU', '1945-05-02', 'www.podemos.org.br/'),
(9, 'Partido do Movimento DemocrÃ¡tico Brasileiro', 'PMDB', 'Renan Filho', 'DF', 'O Partido do Movimento DemocrÃ¡tico Brasileiro (PMDB) Ã© o maior partido polÃ­tico brasileiro e com maior nÃºmero de filiados, sendo 2 355 472 filiados em maio de 2012,[8] apesar de nunca ter elegido nenhum presidente da repÃºblica atravÃ©s do voto direto.[9] Fundado em 1980, possui uma orientaÃ§Ã£o polÃ­tica centrista. Ã‰ sucessor do Movimento DemocrÃ¡tico Brasileiro, legenda de oposiÃ§Ã£o Ã  Regime Militar de 1964. Seu cÃ³digo eleitoral Ã© o 15.[10] Ã‰ o partido tambÃ©m com maior nÃºmero de prefeitos e vereadores, alÃ©m de ter a maior representaÃ§Ã£o no Congresso Nacional. Atualmente Ã© presidido por Romero JucÃ¡ que assumiu em 5 de abril de 2016 apÃ³s Michel Temer se licenciar.', 15, 'ROMERO JUCA', '1980-01-15', 'www.pmdb.org.br/'),
(10, 'Partido Socialista Brasileiro', 'PSB', 'Joao Henrique Caldas', 'AL', 'O Partido Socialista Brasileiro (PSB) Ã© um partido polÃ­tico brasileiro que segue a ideologia socialista democrÃ¡tica. Foi criado em 1947 a partir da Esquerda DemocrÃ¡tica, atÃ© ser extinto por forÃ§a do Ato Institucional nÂº 2, de 1965. Em 1985, com a redemocratizaÃ§Ã£o no Brasil, foi recriado. Entre 1947 e 1964, editou o jornal Folha Socialista.  O PSB utiliza, como sÃ­mbolo, uma pomba carregando uma folha, e suas cores sÃ£o o vermelho e o amarelo.  Obteve registro definitivo junto ao Tribunal Superior Eleitoral em 1Âº de julho de 1988 com o cÃ³digo eleitoral 40. Externamente, Ã© membro do Foro de SÃ£o Paulo. No dia 13 de agosto de 2014 morreu vÃ­tima de acidente aÃ©reo, o entÃ£o presidente do PSB e candidato a presidÃªncia da RepÃºblica, Eduardo Campos.', 40, 'CARLOS SIQUEIRA', '1947-08-06', 'www.psb40.org.br'),
(11, 'Partido Democratico Trabalhista', 'PDT', 'RONALDO LESSA', 'DF', 'O Partido DemocrÃ¡tico Trabalhista (PDT) Ã© um partido polÃ­tico brasileiro. Foi fundado em 1979, logo apÃ³s o inÃ­cio do processo de abertura polÃ­tica da regime militar, e Ã© alinhado Ã s ideologias trabalhista e social-democrata. Seu nÃºmero eleitoral Ã© o 12. Ã‰ o Ãºnico partido brasileiro a integrar a Internacional Socialista.', 12, 'CARLOS LUPI', '1979-06-17', 'www.pdt.org.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `pass_user` mediumtext NOT NULL,
  `cpf_user` varchar(15) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `birth_user` date DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `state_user` varchar(60) DEFAULT NULL,
  `city_user` varchar(60) DEFAULT NULL,
  `sex_user` int(11) DEFAULT NULL,
  `type_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `email_user`, `pass_user`, `cpf_user`, `name_user`, `birth_user`, `add_user`, `state_user`, `city_user`, `sex_user`, `type_user`) VALUES
(1, 'estevaogabrielsr@outlook.com.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '99999999950', 'ESTEVAO GABRIEL SANTOS ', '0000-00-00', '', '', '', 1, 0),
(16, 'teste@teste.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '99999999908', 'teste', '0000-00-00', '', '', '', 1, 0),
(21, 'usuario@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '99999999906', 'Usuario Comum', '1997-07-07', '', '', '', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`cand_id`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`part_id`);

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
  MODIFY `cand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partido`
--
ALTER TABLE `partido`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
