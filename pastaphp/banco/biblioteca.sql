-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `ano` int(4) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `npags` int(4) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `sinopse` varchar(451) NOT NULL,
  `capa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `ano`, `genero`, `editora`, `npags`, `estado`, `sinopse`, `capa`) VALUES
(56, 'O menino no alto da montanha', 'John Boyne', 2016, 'FicÃ§Ã£o cientÃ­fica militar', 'Seguinte', 232, 'disponivel', 'Quando fica Ã³rfÃ£o, Pierrot Ã© obrigado a deixar sua casa em Paris para recomeÃ§ar a vida com sua tia Beatrix, governanta de uma mansÃ£o no alto das montanhas alemÃ£s PorÃ©m, essa nÃ£o Ã© uma Ã©poca qualquer: estamos em 1936, e a Segunda Guerra Mundial se aproxima E essa nÃ£o Ã© uma casa qualquer: seu dono Ã© Adolf Hitler', '65755214cde89.jpg'),
(58, 'O baÃº do Raul', 'Raul Seixas', 1992, 'Biografia', 'Globo', 213, 'disponivel', 'O diÃ¡rio pessoal e escritos inÃ©ditos do maior mito do rock brasileiro As drogas, as mulheres, o corpo-a -corpo com a fama, a perseguiÃ§Ã£o polÃ­tica, a utopia de uma sociedade alternativa O BaÃº do Raul invade o camarim do astro, remexe nas gavetas de seu cÃ©rebro inquieto', '6575537a9c6c3.jpg'),
(59, 'ADS definitivo', 'Eldes Saullo', 2022, 'ComputaÃ§Ã£o', 'Casa do escritor', 61, 'disponivel', 'TrÃ¡fego Ã© o motor das vendas no perpÃ©tuo, dos lanÃ§amentos, das aÃ§Ãµes sÃ©rias no Marketing Digital\r\nVocÃª nÃ£o precisa de muitos funis para faturar mÃºltiplos dÃ­gitos com e-books ou outro tipo de infoproduto\r\nMas vocÃª precisa acertar em um para que possa escalar, replicar e investir em outros produtos, se quiser', '657553f78dff6.jpg'),
(60, 'O prÃ­ncipe', 'Maquiavel', 2022, 'PolÃ­tica', 'Editora Garnier', 92, 'disponivel', 'Um bom governante deve proteger seu regimento e preservar o poder, custe o que custar Assim defendeu o teÃ³rico polÃ­tico Nicolau Maquiavel no tratado que imortalizou seu nome: O PrÃ­ncipe', '657554b768466.jpg'),
(61, 'A metamorfose', 'Franz Kafka', 2020, 'Literatura', 'principis', 232, 'disponivel', 'Um dos maiores clÃ¡ssicos da literatura mundial, agora em nova traduÃ§Ã£o do alemÃ£o e com mais de 90 ilustraÃ§Ãµes do artista LourenÃ§o Mutarelli Essa pequena novela, lanÃ§ada em 1915, revolucionou a literatura e as artes De forma agressiva, acessÃ­vel e inovadora, tornou-se um dos mais importantes e difundidos textos da histÃ³ria', '657555ea595a0.jpg'),
(62, 'A formaÃ§Ã£o da classe operÃ¡ria', 'Paul Singer', 2019, 'CiÃªncias sociais', 'Atual', 96, 'disponivel', 'O que Ã© classe operÃ¡ria? Como se dÃ¡ sua formaÃ§Ã£o? De que maneira essa classe se reproduz? Por que o operariado de alguns paÃ­ses Ã© considerado mais ativo que o de outros? Neste livro de cunho histÃ³rico e social, o autor penetra nas contradiÃ§Ãµes da classe operÃ¡ria e mostra que os assalariados Ã© que sÃ£o os verdadeiros explorados', '65755654628eb.jpg'),
(63, 'Os mizerÃ¡veis', 'Victor Hugo', 2012, 'Literatura', 'Moderna', 216, 'disponivel', 'ApÃ³s Cumprir Pena De Trabalhos ForÃ§ados Por Quase Vinte Anos, Jean Valjean Ã‰ Posto Em Liberdade Seu CoraÃ§Ã£o EstÃ¡ Cheio De Ã“dio E Rancor Sem Ser Aceito Em Nenhum Lugar, Encontra Abrigo Na Casa Do Bispo, Que Lhe Oferece Comida E Pouso Mas A Amargura E A Revolta Que Traz No CoraÃ§Ã£o Fazem Com Que Jean Valjean NÃ£o ReconheÃ§a A Generosidade Recebida', '657556d303485.jpg'),
(66, 'A droga da obediÃªncia', 'Pedro Bandeira', 2021, 'Livros infantis', 'Moderna', 192, 'disponivel', 'Uma Turma De Adolescentes Enfrenta O Mais DiabÃ³lico Dos Crimes Num Clima De Muito MistÃ©rio E Suspense, Cinco Estudantes Os Karas Enfrentam Uma Macabra Trama Internacional: O Sinistro Doutor QI Pretende Subjugar A Humanidade Aos Seus DesÃ­gnios, Aplicando Na Juventude Uma Perigosa Droga', '6575593847312.jpg'),
(67, 'A droga do amor', 'Pedro Bandeira', 2014, 'Literatura infantojuvenil', 'Moderna', 176, 'disponivel', 'Mais Uma Aventura Com Os Karas O Amor Por MagrÃ­ SignificarÃ¡ O Fim Da Turma Dos Karas Um Cientista Americano, Que Havia Criado A Cura Para A Praga Do SÃ©culo, O Mal Que Transforma O Amor Em Morte, Ã‰ Sequestrado No Brasil MagrÃ­ E Chumbinho Tentam Reunir A Turma Secreta Dos Karas Para Investigar Esse Crime TÃ£o Tremendo Para A Humanidade', '657559a8ab8d8.jpg'),
(68, 'Robinson CrusoÃ©', 'Daniel Defoe', 2016, 'Aventura', 'L&amp;PM Editores', 68, 'disponivel', 'Um marinheiro nÃ¡ufrago numa ilha deserta Ã© a receita ideal para a criaÃ§Ã£o de uma exÃ³tica e emocionante aventura de alcance universal Robinson CrusoÃ©, porÃ©m, estÃ¡ longe de ser apenas uma romÃ¢ntica aventura NÃ£o a lemos de modo a escapar para um mundo de perigos e triunfos Mas, sim, de modo a seguir com enorme interesse o sucesso do herÃ³i em construir, passo a passo, uma rÃ©plica fÃ­sica e moral do mundo que ele deixou para trÃ¡s', '65755a95b6b4b.jpg'),
(69, 'O pequeno principe', 'Antoine de Saint-ExupÃ©ry', 2018, 'ClÃ¡ssicos', 'Harper Collins', 96, 'disponivel', 'Nesta histÃ³ria que marcou geraÃ§Ãµes de leitores em todo o mundo, um piloto cai com seu aviÃ£o no deserto do Saara e encontra um pequeno prÃ­ncipe, que o leva a uma aventura filosÃ³fica e poÃ©tica atravÃ©s de planetas que encerram a solidÃ£o humana', '65755b295d01e.jpg'),
(70, 'Crime e castigo', 'Fyodor Dostoyevsky', 2016, 'Literatura europÃ©ia', 'Editora 34', 592, 'disponivel', 'Publicado em 1866, Crime e castigo Ã© a obra mais cÃ©lebre de FiÃ³dor DostoiÃ©vski Neste livro, RaskÃ³lnikov, um jovem estudante, pobre e desesperado, perambula pelas ruas de SÃ£o Petersburgo atÃ© cometer um crime que tentarÃ¡ justificar por uma teoria: grandes homens, como CÃ©sar ou NapoleÃ£o, foram assassinos absolvidos pela HistÃ³ria', '65755b9d994f3.jpg'),
(71, 'MemÃ³rias PÃ³stumas de BrÃ¡s Cubas', 'Machado de Assis', 2022, 'Literatura nacional', 'Editora AntofÃ¡gica', 480, 'disponivel', 'BrÃ¡s Cubas estÃ¡ morto Mas isso nÃ£o o impede de relatar em seu livro os acontecimentos de sua existÃªncia e de sua grande ideia fixa: lanÃ§ar o Emplasto BrÃ¡s Cubas Deus te livre, leitor, de uma ideia fixa O medicamento anti-hipocondrÃ­aco torna-se o estopim de uma sÃ©rie de lembranÃ§as, reminiscÃªncias e digressÃµes da vida do defunto autor', '65755c7c2f16a.jpg'),
(73, 'MemÃ³rias', 'Fyodor Dostoyevsky', 2009, 'Literatura europÃ©ia', 'Editora 34', 152, 'disponivel', 'Obra-prima da literatura mundial, esta pequena novela traz, em embriÃ£o, vÃ¡rios temas da fase madura de DostoiÃ©vski Seu protagonista, um funcionÃ¡rio que vive no subsolo de um edifÃ­cio em SÃ£o Petersburgo, expÃµe a sua visÃ£o de mundo num discurso explosivo, labirÃ­ntico, vertido impecavelmente para o portuguÃªs por Boris Schnaiderman', '65755d5a161f2.jpg'),
(74, 'O processo', 'Franz Kafka', 272, 'Literatura e FicÃ§Ã£o', 'Companhia de bolso', 2005, 'disponivel', 'A histÃ³ria de Josef K atravessa os anos sem perder nada do seu vigor Ao contrÃ¡rio, a banalizaÃ§Ã£o da violÃªncia irracional no sÃ©culo XX acrescentou a ela o fascÃ­nio dos romances realistas Na sua luta para descobrir por que o acusam, por quem Ã© acusado e que lei ampara a acusaÃ§Ã£o, K defronta permanentemente com a impossibilidade de escolher um caminho que lhe pareÃ§a sensato ou lÃ³gico, pois o processo de que Ã© vÃ­tima segue leis prÃ³prias', '65755db356fd1.jpg'),
(75, 'Kafka e a Boneca Viajante', 'Franz Kafka', 2009, 'Contos', 'Martin Fontes', 128, 'disponivel', 'Um ano antes de sua morte, Franz Kafka viveu uma experiÃªncia singular Passeando pelo parque de Steglitz, em Berlim, encontrou uma menina chorando porque havia perdido sua boneca Para acalmar a garotinha, inventou uma histÃ³ria: a boneca nÃ£o estava perdida, mas viajara, e ele, um â€œcarteiro de bonecasâ€, tinha uma carta em seu poder que lhe entregaria no dia seguinte', '65755ea51d86d.jpg'),
(76, 'Guerra e paz', 'Leon TolstÃ³i', 2000, 'Literatura europÃ©ia', 'Editora Garnier', 976, 'disponivel', 'Liev TolstÃ³i Ã© um escritor russo nascido em 9 de setembro de 1828 De famÃ­lia aristocrata, ficou Ã³rfÃ£o de pai e mÃ£e ainda na infÃ¢ncia Mais tarde, iniciou a Faculdade de Direito, mas abandonou o curso logo depois, e participou da Guerra da Crimeia Seu sucesso como escritor ocorreu jÃ¡ com a publicaÃ§Ã£o de suas trÃªs primeiras obras, uma trilogia composta pelos livros InfÃ¢ncia, AdolescÃªncia e Juventude No entanto, suas obras mais conhecidas', '65755f392e0f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `dataEnvio` varchar(255) NOT NULL,
  `idProf` int(11) NOT NULL,
  `idLivro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `texto`, `dataEnvio`, `idProf`, `idLivro`) VALUES
(12, 'Sobre Raul Seixas', '10/12/2023 - 22:01', 2, 58),
(13, 'Bom para aprender ADS', '10/12/2023 - 22:01', 2, 59),
(14, 'Politica braba', '10/12/2023 - 22:01', 2, 60),
(15, 'Li na minha infÃ¢ncia', '10/12/2023 - 22:02', 2, 66),
(16, 'Sobre um naufrago', '10/12/2023 - 22:03', 2, 68),
(17, 'PTSD', '10/12/2023 - 22:05', 2, 73),
(18, 'Menino no alto da montanha', '11/12/2023 - 10:27', 11, 56),
(19, 'politica braba', '11/12/2023 - 10:54', 11, 60),
(20, 'Me ajudou numa fase difÃ­cil', '11/12/2023 - 10:55', 11, 61),
(21, 'um dos primeiros livros que li', '11/12/2023 - 10:55', 11, 66),
(22, 'parece um bloco de concreto', '11/12/2023 - 10:56', 11, 76);

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

CREATE TABLE `profs` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ra` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` int(11) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`id`, `nome`, `ra`, `senha`, `adm`, `ativo`) VALUES
(2, 'NOVOTEC', 'NOVOTEC', '$2y$10$/J3aZbgbQgwSbR6XSt5is.JMXqcUb3vY1JcDFKNbMsha4c2hIxo1K', 1, 1),
(3, 'Mateus Pinheiro dos Santos', '00001120199049sp', '$2y$10$ib0Jbuj/zj3ZHZo2OVvHOuDaWxKXaVJz46OC6C5zRx6pX5dRXDXAW', 1, 1),
(4, 'Alyson Silva Prado', '00000000000000sp', '$2y$10$fxHn6Hhs0RMVCrH40LL1we8EuLNw.t1b4spF0lfNcmN5MAcIPjYW6', 1, 1),
(6, 'algum professor 1', '44822549', '$2y$10$KZlb7.ER2iQLVvNUPbBrKegrIdsjcrd41oMNoe0l0ByREgmgS3C/u', 0, 0),
(7, 'algum professor 2', '454812125615', '$2y$10$ttpTele.peZbCOI2ZOYWjuoQcMdD.Z5jvqnJ6VE2uXxqMPyb/Lrsy', 0, 0),
(8, 'algum adm', '449261418', '$2y$10$soomqxY6tSnnoO/Cnlsmb.4DxPf3RJFH3.r2pdvPh8kadIpUR0bu6', 1, 0),
(9, 'jean', 'ra do jean', '$2y$10$zwECCMTwcLeLERGcd76Q7uTA0HM6.tD8n1661U1qfm7fnah1e.NU.', 1, 1),
(10, 'Nome com menos Ã©Ã©Ã©Ã©Ã©', 'Ã¡cento', '$2y$10$Hj8b9rH96LWcS3wbFsRdBuTzGfUslr5WhOf.cRwsxIWh8vD7aJFry', 0, 1),
(11, 'Professor', 'Professor', '$2y$10$smblLyx2s3J9p02GxDgAZedAsCKZgBXi9IgqUt1aeV73s5HBPFm32', 0, 1),
(12, 'triste', 'muitotriste', '$2y$10$Vn4.lD9OoHQTnAQ5XZ0dMuZbP/cINVnhoM2ifl9vIBXmDgALt530q', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
