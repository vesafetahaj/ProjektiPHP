-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 03:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `start smart academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `vendndodhja` varchar(1000) NOT NULL,
  `misioni` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `vendndodhja`, `misioni`) VALUES
(1, 'Nxënësit tanë janë pjesë e rrjetit botëror të programerëve<br>\r\ntë Start Smart Academy në disa lokacione, anë e mbanë botës.', 'Misioni i Start Smart Academy është të fuqizojë fëmijët tanë për të <br>\r\narritur potencialin e tyre më të madh si studentë dhe si anëtarë të komuniteteve të tyre.');

-- --------------------------------------------------------

--
-- Table structure for table `addnews`
--

CREATE TABLE `addnews` (
  `news_id` int(11) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addnews`
--

INSERT INTO `addnews` (`news_id`, `imgSrc`, `name`, `description`, `pdf`) VALUES
(236, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Girls_Coding-600x337.jpg', 'Sfida e kodimit per vajza', 'Çdo vit, Technovation fton ekipe vajzash në mbarë botën për të mësuar dhe zbatuar                              aftësitë e nevojshme për të zgjidhur problemet e botës reale përmes teknologjisë.                              Kjo organizatë globale ka krijuar', 'http://localhost:8080/Projekti/ProjektiPHP/pdf/SfidaKodimitPerVajza.pdf'),
(358, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/uni-fair-NB-600x338.jpg', 'Panairi i Start Smart Academy', 'Shume nxenes te grupmoshave 16-18 paten mundesine                             te marrin pjese ne nje panair te organizuar nga                             akademia jone duke i informuar ata per mbarvajtjen                             e mesimit te Start Sma', 'http://localhost:8080/Projekti/ProjektiPHP/pdf/PanairiIStartSmartAcademy.pdf'),
(454, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/personal-NB-600x337.jpg', 'Prezentimi i Projekteve Personale', 'Projekti Personal është një pjesë integrale e kurrikulës sone, sepse u jep studentëve një mundësi për të vënë në praktikë                              të gjitha aftësitë e rëndësishme që kanë mësuar gjatë gjithë kohës së tyre në SSA, të tilla si aftësitë ', 'http://localhost:8080/Projekti/ProjektiPHP/pdf/PrezentimiIProjektevePersonale.pdf'),
(501, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/grad-seanNB-600x337.jpg', 'Ceremonia e Çertifikimit', 'Pasi qe nxenesit te aftesohen ne fushen e programimit                             dhe te kene permbushur kerkesat e kurrikules tone, atyre                              u mbahet nje ceremoni certifikimi.Nje e tille do te mbahet                             ', 'http://localhost:8080/Projekti/ProjektiPHP/pdf/CeremoniaECertifikimit.pdf'),
(505, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/DofE-600x337.jpg', 'Aktivitete jashte kurrikulare', 'Cdo fundjave studenteve te akademise sone iu ofrohen edhe                              aktivitete te ndryshme jashte kurrikulare per relaksim. Zakonisht                             orgaizohen kampe te ndryshme, ne te cilat studentet kane mundesi          ', 'http://localhost:8080/Projekti/ProjektiPHP/pdf/AktiteteJashteKurrikulare.pdf'),
(645, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Higher-edu-NB-600x337.jpg', 'Panairi virtual', 'Panairi virtual i mbajtur ne mars te vitit 2022 u kishte ofruar një mundësi studenteve te akademise sone për të takuar universitetet                              virtualisht duke ndërvepruar me përfaqësuesit zyrtarë të pranimeve, alumni dhe studentët aktu', 'http://localhost:8080/Projekti/ProjektiPHP/pdf/PanairiVirtual.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `zipcode`, `phone`) VALUES
(35, 'Vesa', 'vesafetahaj2@gmail.com', 30000, 44123123),
(176, 'Greta', 'greta.ahma@ubt-uni.net', 30000, 44123123),
(211, 'Florentina', 'florentinaademaj@gmail.com', 40000, 44123123),
(244, 'Arber', 'arber@gmail.com', 30000, 44123123),
(251, 'Andi', 'andi@gmail.com', 30000, 44121121),
(264, 'Hysen Ademaj', 'hysenademaj@gmail.com', 10000, 44222333),
(349, 'Ramiz', 'ramiz.hoxha@ubt-uni.net', 10000, 44111222),
(705, 'Vesa', 'vesafetahaj2@gmail.com', 30000, 44222333);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `text`) VALUES
(10, 'Start Smart Academy është shkolle private për trajnimin dhe edukimin e fëmijëve\r\n                            dhe adoleshentëve (7 - 18 vjeç) në teknologji dhe programim. \r\n                            Derisa nxënësit mësojnë aftësitë e programimit të cilat i mundësojnë të \r\n                            zhvillojnë produkte softuerike si aplikacione dhe webfaqe, ata gjithashtu  \r\n                            mësojnë të menduarit kritik dhe aftësitë e zgjidhjes së problemeve.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `filename`) VALUES
(20, 'Aktitete jashte kurrikulare.pdf'),
(21, 'Ceremonia e Certifikimit.pdf'),
(22, 'Panairi i Start Smart Academy.pdf'),
(23, 'Panairi virtual.pdf'),
(24, 'Prezentimi i Projekteve Personale.pdf'),
(25, 'Sfida e kodimit per vajza.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `planprogrami`
--

CREATE TABLE `planprogrami` (
  `id` int(11) NOT NULL,
  `kurrikula8deri11` varchar(1000) NOT NULL,
  `kurrikula12deri15` varchar(1000) NOT NULL,
  `kurrikula16deri18` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planprogrami`
--

INSERT INTO `planprogrami` (`id`, `kurrikula8deri11`, `kurrikula12deri15`, `kurrikula16deri18`) VALUES
(1, 'Mësimi i programimit për këto mosha fillon nga bazat. Viti i parë i mësimit përfshin tri nivele njohurish.                      \r\n                    Dy nivelet e para të njohurive përdorin platformën CODE.org ndërsa niveli i trete përdor platformën Scratch. \r\n                    Këto platforma përdoren kryesisht për praktikën e njohurive te nxenesve.', 'Gjatë këtij niveli njohurish, fëmijët do të jenë në gjendje të mësojnë se si të zhvillojnë aplikacionet e tyre të para \r\n                    celulare duke përdorur platformën MIT APP INVENTOR.Pas përfundimit të këtij niveli njohurish, studentët vazhdojnë me mësime \r\n                    më të avancuara si mësimi i gjuhëve profesionale të programimit HTML, CSS dhe JavaScript (Front End Developer)', 'Përmes këtij programi, studentët do të mund të zgjidhin probleme komplekse programuese përmes kodimit real tekstual i cili bazohet në JavaScript.\r\n                    Ata gjithashtu do të mësojnë se si të përdorin gjuhën e programimit për ueb siç është PHP dhe do të mësojnë për bazat e të dhënave përmes MYSQL.\r\n                    Pas këtyre dy niveleve të njohurive, studentët do të vazhdojnë të mësojnë programimin e avancuar profesional për platformën Android (aplikacione)');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `imgSrc` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `imgSrc`, `name`) VALUES
(1004, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (15).png', 'Park the Car - Game'),
(1005, 'http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (16).png', 'Cake Shop - Game');

-- --------------------------------------------------------

--
-- Table structure for table `regjistro`
--

CREATE TABLE `regjistro` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `mosha` int(11) NOT NULL,
  `numriTel` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `trajnimi` varchar(255) NOT NULL,
  `orari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regjistro`
--

INSERT INTO `regjistro` (`id`, `emri`, `mbiemri`, `mosha`, `numriTel`, `email`, `city`, `trajnimi`, `orari`) VALUES
(95, 'Albi', 'Ademaj', 13, '049-999-999', 'albiademaj7@gmail.com', 'Peje', 'Online', '15:00 - Marte, Enjte'),
(136, 'Alba', 'Neziraj', 9, '044-111-222', 'albaneziraj@gmail.com', 'Mitrovice', 'Fizikisht', '12:00 - Marte, Enjte'),
(268, 'Nesa', 'Fetahaj', 14, '049-159-951', 'nesafetahaj@gmail.com', 'Prishtine', 'Fizikisht', '9:00 - Marte, Enjte'),
(347, 'Andi', 'Neziraj', 12, '044-999-888', 'andineziraj@gmail.com', 'Prishtine', 'Online', '12:00 - Marte, Enjte'),
(400, 'Florentina', 'Ademaj', 18, '049-123-123', 'florentinaademaj@gmail.com', 'Gjakove', 'Fizikisht', '11:00 - Hëne, Mërkurë'),
(467, 'Nesa', 'Fetahaj', 15, '044-123-123', 'nesafetahaj@gmail.com', 'Mitrovice', 'Fizikisht', '13:30 - Hëne, Mërkurë'),
(859, 'Sara', 'Fetahaj', 11, '045-895-895', 'sarafetahaj@gmail.com', 'Prizren', 'Fizikisht', '12:00 - Marte, Enjte');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `is_admin`) VALUES
(62, 'Florentina', 'Ademaj', 'florentinaademaj@gmail.com', 'Flora123', 0),
(168, 'Alba', 'Neziraj', 'albaneziraj@gmail.com', 'Alba1234', 0),
(456, 'Vanesa', 'Fetahaj', 'vanesa.fetahaj@gmail.com', 'Vanesa123', 0),
(558, 'Vesa', 'Fetahaj', 'vesafetahaj2@gmail.com', 'Vesa1234', 1),
(599, 'Enver', 'Fetahaj', 'enverfetahaj@gmail.com', 'Enver123', 0),
(940, 'Greta', 'Ahma', 'greta.ahma@ubt-uni.net', 'Greta123', 1),
(965, 'Ramiz', 'Hoxha', 'ramiz.hoxha@ubt-uni.net', 'Ramiz123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addnews`
--
ALTER TABLE `addnews`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planprogrami`
--
ALTER TABLE `planprogrami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `regjistro`
--
ALTER TABLE `regjistro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addnews`
--
ALTER TABLE `addnews`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=955;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=785;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `planprogrami`
--
ALTER TABLE `planprogrami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `regjistro`
--
ALTER TABLE `regjistro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=929;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=966;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
