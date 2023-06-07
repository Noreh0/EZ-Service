
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2023 at 04:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EZservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agenda`
--

CREATE TABLE `Agenda` (
  `ID_Agenda` int(11) NOT NULL,
  `fk_Prestador_de_servico_ID_Prestador` int(11) NOT NULL,
  `fk_Cliente_ID_Cliente` int(11) NOT NULL,
  `fk_Servico_ID_Servico` int(11) NOT NULL,
  `Data_inicial` date NOT NULL,
  `Descricao` varchar(150) NOT NULL,
  `Data_final` date NOT NULL,
  `Descricao_final` varchar(150) NOT NULL,
  `Preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE `Cliente` (
  `ID_Cliente` int(11) NOT NULL,
  `Nome_Cliente` varchar(20) NOT NULL,
  `Email_Cliente` varchar(20) NOT NULL,
  `CPF_Cliente` varchar(15) NOT NULL,
  `Celular_Cliente` varchar(15) NOT NULL,
  `CEP_Cliente` varchar(9) NOT NULL,
  `Senha_Cliente` varchar(100) NOT NULL,
  `Endereco_Cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Cliente`
--

INSERT INTO `Cliente` (`ID_Cliente`, `Nome_Cliente`, `Email_Cliente`, `CPF_Cliente`, `Celular_Cliente`, `CEP_Cliente`, `Senha_Cliente`, `Endereco_Cliente`) VALUES
(1, 'sasa', 'sasasa@gmail.com', '071.925.629-12', '41984422348', '82025255', '70dfcaf14516349b690d4cab30b636d2', 'rua blaca'),
(2, 'guilherme', 'guilherme@gmail.com', '071.925.629-12', '41984422348', '82022444', '706e11219b51bc0c301ce2d8c9ae889c', 'rua angelo trevisan 530'),
(5, 'pedro', 'pedro@gmail.com', '071.925.629-12', '41984422348', '82025255', '706e11219b51bc0c301ce2d8c9ae889c', 'rua pedro'),
(6, 'Maria', 'maria@gmail.com', '071.456.233-12', '41984422348', '82025255', '809af6da6d796aa974c03f2da5a1f5b9', 'rua padre'),
(7, 'ana', 'ana@gmail.com', '071.456.233-12', '41984422348', '82025255', '81724ad8b21aa23188b8df7f59525d70', 'rua pao'),
(8, 'beatriz', 'beatriz@gmail.com', '071.925.729-12', '41984422347', '82025233', '145fde5eb2c5e8c87c20bf3fcaef82d2', 'rua bea'),
(9, 'beatriz', 'beatriz@gmail.com', '071.925.729-12', '41984422347', '82025233', 'd41d8cd98f00b204e9800998ecf8427e', 'rua bea'),
(31, 'roberto', 'defesa123@gmail.com', '071.925.629-12', '41984422348', '82025255', 'c9bcf22e1adbfa46e0210772b64ca0d3', 'rua defesa');

-- --------------------------------------------------------

--
-- Table structure for table `Identificacao_do_prestador`
--

CREATE TABLE `Identificacao_do_prestador` (
  `fk_Servico_ID_Servico` int(11) NOT NULL,
  `fk_Prestador_de_servico_ID_Prestador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Prestador_de_servico`
--

CREATE TABLE `Prestador_de_servico` (
  `ID_Servico` int(11) NOT NULL,
  `Nome_Prestador` varchar(20) NOT NULL,
  `ID_Prestador` int(11) NOT NULL,
  `Email_Prestador` varchar(30) NOT NULL,
  `CPF_Prestador` varchar(15) NOT NULL,
  `Celular_Prestador` varchar(15) NOT NULL,
  `Senha_Prestador` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Servico`
--

CREATE TABLE `Servico` (
  `Nome_Servico` varchar(20) DEFAULT NULL,
  `Descricao` varchar(100) DEFAULT NULL,
  `ID_Servico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agenda`
--
ALTER TABLE `Agenda`
  ADD PRIMARY KEY (`ID_Agenda`),
  ADD KEY `FK_Agenda_1` (`fk_Prestador_de_servico_ID_Prestador`),
  ADD KEY `FK_Agenda_3` (`fk_Servico_ID_Servico`),
  ADD KEY `FK_Agenda_2` (`fk_Cliente_ID_Cliente`);

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indexes for table `Identificacao_do_prestador`
--
ALTER TABLE `Identificacao_do_prestador`
  ADD KEY `FK_Identificacao_do_prestador_1` (`fk_Servico_ID_Servico`),
  ADD KEY `FK_Identificacao_do_prestador_2` (`fk_Prestador_de_servico_ID_Prestador`);

--
-- Indexes for table `Prestador_de_servico`
--
ALTER TABLE `Prestador_de_servico`
  ADD PRIMARY KEY (`ID_Prestador`);

--
-- Indexes for table `Servico`
--
ALTER TABLE `Servico`
  ADD PRIMARY KEY (`ID_Servico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Agenda`
--
ALTER TABLE `Agenda`
  ADD CONSTRAINT `FK_Agenda_1` FOREIGN KEY (`fk_Prestador_de_servico_ID_Prestador`) REFERENCES `Prestador_de_servico` (`ID_Prestador`) ON DELETE NO ACTION,
  ADD CONSTRAINT `FK_Agenda_2` FOREIGN KEY (`fk_Cliente_ID_Cliente`) REFERENCES `Cliente` (`ID_Cliente`) ON DELETE NO ACTION,
  ADD CONSTRAINT `FK_Agenda_3` FOREIGN KEY (`fk_Servico_ID_Servico`) REFERENCES `Servico` (`ID_Servico`) ON DELETE NO ACTION;

--
-- Constraints for table `Identificacao_do_prestador`
--
ALTER TABLE `Identificacao_do_prestador`
  ADD CONSTRAINT `FK_Identificacao_do_prestador_1` FOREIGN KEY (`fk_Servico_ID_Servico`) REFERENCES `Servico` (`ID_Servico`) ON DELETE NO ACTION,
  ADD CONSTRAINT `FK_Identificacao_do_prestador_2` FOREIGN KEY (`fk_Prestador_de_servico_ID_Prestador`) REFERENCES `Prestador_de_servico` (`ID_Prestador`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
