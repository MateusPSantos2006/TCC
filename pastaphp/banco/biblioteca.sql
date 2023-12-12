-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 06:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `sinopse` varchar(800) NOT NULL,
  `capa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `ano`, `genero`, `editora`, `npags`, `estado`, `sinopse`, `capa`) VALUES
(14, 'A arte da guerra', 'Sun Tzu', 2010, 'tratado', 'Record', 128, 'disponivel', 'Em A arte da guerra, são discutidos todos os aspectos da guerra - táticos, hierárquicos e humanos, entre outros - numa linguagem tão poética quanto didática James Clavell, autor de prestígio mundial, assina o prefácio, onde cita alguns preceitos do livro e os contextualiza em nosso cotidiano Uma obra para ser lida não apenas por todo comandante ou oficial, mas por qualquer pessoa interessada na paz', '652ec02f980d0.jpeg'),
(15, 'Os mizeráveis', 'Walcyr Carrasco', 2012, 'romance', 'Moderna', 216, 'disponivel', 'Após Cumprir Pena De Trabalhos Forçados Por Quase Vinte Anos, Jean Valjean É Posto Em Liberdade Seu Coração Está Cheio De Ódio E Rancor Sem Ser Aceito Em Nenhum Lugar, Encontra Abrigo Na Casa Do Bispo, Que Lhe Oferece Comida E Pouso Mas A Amargura E A Revolta Que Traz No Coração Fazem Com Que Jean Valjean Não Reconheça A Generosidade Recebida A Partir Desse Acontecimento, Jean Valjean Vai Descobrir Uma Fé Que Julgava Morta Dentro Dele, E Qualidade', '652ec0acd0575.jpg'),
(16, 'O príncipe', 'Nicolau Maquiavel', 2018, 'tratado', 'Edipro', 96, 'disponivel', 'Nesta obra, que é um clássico sobre pensamento político, o grande escritor Maquiavel mostra como funciona a ciência política\r\n\r\nDiscorre sobre os diferentes tipos de Estado e ensina como um príncipe pode conquistar e manter o domínio sobre um Estado\r\n\r\nTrata daquilo que é o seu objetivo principal: as virtudes que o governante deve adquirir e os vícios que deve evitar para manter-se no poder\r\n\r\nMaquiavel mostra em O Príncipe que a moralidade e a ci', '652ec169b01fa.jpg'),
(18, 'Kafka e a marca do corvo', 'Jeanette Rozsas', 2009, 'biografia', 'Geração Editorial', 184, 'disponivel', 'Biografia romanceada de Kafka – pesquisada pela a autora durante anos para se certificar de que a fidelidade histórica não sofresse o menor arranhão E, numa parceria equilibradíssima, aliado ao cuidado da pesquisadora, sempre esteve presente o talento da prosadora A obra de Kafka ― sua linguagem protocolar, os contos fantásticos e os romances claustrofóbicos, as cartas e os diários angustiados ― marcou profundamente muitas gerações de escritores S', '652ec2471e2a8.jpg'),
(19, 'Crime e castigo', 'Fiodór Dostoiérvski', 2016, 'romance', 'Editora 34', 592, 'disponivel', 'Publicado em 1866, Crime e castigo é a obra mais célebre de Fiódor Dostoiévski Neste livro, Raskólnikov, um jovem estudante, pobre e desesperado, perambula pelas ruas de São Petersburgo até cometer um crime que tentará justificar por uma teoria: grandes homens, como César ou Napoleão, foram assassinos absolvidos pela História Este ato desencadeia uma narrativa labiríntica que arrasta o leitor por becos, tabernas e pequenos cômodos, povoados de per', '652ec2bc5a404.jpg'),
(20, 'Drogados', 'Pedro', 2000, 'novela policial', 'Mod', 1, 'perdido', 'hue hue br', '65704a9a713d7.png'),
(21, 'A droga do amor', 'Pedro Bandeira', 2014, 'novela policial', 'Moderna', 176, 'disponivel', 'Mais Uma Aventura Com Os Karas O Amor Por Magrí Significará O Fim Da Turma Dos Karas Um Cientista Americano, Que Havia Criado A Cura Para A Praga Do Século, O Mal Que Transforma O Amor Em Morte, É Sequestrado No Brasil Magrí E Chumbinho Tentam Reunir A Turma Secreta Dos Karas Para Investigar Esse Crime Tão Tremendo Para A Humanidade Mas Miguel, Calu E Crânio, Por Não Quererem Disputar Entre Si O Amor Por Magrí, Decidem Terminar Com Os Karas Para A', '652ec3aca9374.jpg'),
(22, 'Tratado sobre a tolerância', 'Voltaire', 2017, 'tratado', 'Martin Claret', 152, 'disponivel', 'O livro Tratado sobre a tolerância propõe, por meio de reflexões, argumentos sólidos, fatos históricos contemporâneos e antigos, citações bíblicas, assim como interpretações de estudiosos de diferentes tendências, uma ideia que no século XVIII mostrava-se recente nos debates: a ideia da tolerância. Extremamente atual em face do contexto em que vivemos, a obra de Voltaire traz à tona uma das questões que o autor fazia ao leitor do século XVIII, mas', '652ec4099789c.jpg'),
(24, 'Carta ao pai', 'Franz Kafka', 2019, 'carta', 'Livros do Corvo', 62, 'disponivel', 'Esta Carta ao Pai, escrita em 1919, é simultaneamente uma escrita nascida do carácter complexo do escritor com uma intenção epistolar, nunca concretizada (a carta não foi enviada), e um documento literário extraordinário', '652ec70c50380.jpg'),
(25, 'O menino no alto da montanha', 'Cândice Lisbôa Alves', 2016, 'ficção histórica', 'Seguinte', 232, 'disponivel', 'Quando fica órfão, Pierrot é obrigado a deixar sua casa em Paris para recomeçar a vida com sua tia Beatrix, governanta de uma mansão no alto das montanhas alemãs. Porém, essa não é uma época qualquer: estamos em 1936, e a Segunda Guerra Mundial se aproxima. E essa não é uma casa qualquer: seu dono é Adolf Hitler. Logo Pierrot se torna um dos protegidos do Führer e se junta à Juventude Alemã.', '652ec8e2f3629.jpg'),
(26, 'Fique onde está e então corra', 'John Boyne', 2014, 'ficção histórica', 'Seguinte', 224, 'disponivel', 'Apresentação. A Primeira Guerra Mundial eclodiu no dia do aniversário de cinco anos de Alfie Summerfield. Quatro anos depois, Alfie não sabe onde o pai está. Então, enquanto engraxa sapatos na estação de trem, Alfie encontra uma pista sobre o paradeiro do pai, em um hospital da região - e decide resgatá-lo.', '652ec9b3c9eaa.jpg'),
(27, 'Baú do Raul', 'Raul Seixas', 1992, 'autobiografia', 'GLOBO', 213, 'disponivel', 'Esse livro reúne fotos e manuscritos inéditos de um dos maiores ídolos do Brasil Conhecer a história de Raul e do rock nacional através de seus objetos pessoais irá agradar até quem nasceu há dez mil anos atrás', '652ecae7c2592.jpg'),
(29, 'ADS Definitivo', 'Eldes Saullo', 2022, 'guia prático', 'Casa do escritor', 61, 'disponivel', 'Tráfego é o motor das vendas no perpétuo, dos lançamentos, das ações sérias no Marketing Digital\r\nVocê não precisa de muitos funis para faturar múltiplos dígitos com e-books ou outro tipo de infoproduto\r\nMas você precisa acertar em um para que possa escalar, replicar e investir em outros produtos, se quiser\r\nErrar no tráfego compromete toda sua estratégia de vendas', '65379ec742f51.jpg'),
(32, 'Dom Casmurro', 'Machado de Assis', 2019, 'novela', 'Principis', 208, 'disponivel', 'Em Dom Casmurro, o narrador Bento Santiago retoma a infância que passou na Rua de Matacavalos e conta a história do amor e das desventuras que viveu com Capitu, uma das personagens mais enigmáticas e intrigantes da literatura brasileira', '6537a6114228f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `texto` varchar(800) NOT NULL,
  `data` varchar(255) NOT NULL,
  `idProf` int(11) NOT NULL,
  `idLivro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

CREATE TABLE `profs` (
  `id` int(11) NOT NULL,
  `ra` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` int(1) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`id`, `ra`, `nome`, `senha`, `adm`, `ativo`) VALUES
(8, 'NOVOTEC', 'NOVOTEC', '$2y$10$tThT7Kq5WvpkMj7.DEpFuuwJ6jiZ0hLlV234F69YpWgeeBlN1HJzS', 1, 1),
(10, 'teste', 'desativado', '$2y$10$S2hLVHJ51YGWWB9ZRyvBY.60KxFioDVozGgy0.Mq3WYrmwuKAzcZe', 0, 0),
(11, '10000', 'Alyson Silva Prado', '$2y$10$I4.nEdjC5Eh79lfe/cn4..rorDggTyXxeSt4V9vCDRzFZOKSm6PEC', 1, 1),
(12, '00001120199049sp', 'Mateus Pinheiro dos Santos', '$2y$10$DskkGLOYtkv0Q64G0XXKkOlejf8MBjY0W3luO.njIUqzbcmLOxP1q', 1, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
