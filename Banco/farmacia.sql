-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2020 às 14:29
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tdprodutos`
--

CREATE TABLE `tdprodutos` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `descricao` text NOT NULL,
  `valorUnitario` decimal(10,2) DEFAULT NULL,
  `validade` date NOT NULL,
  `laboratorio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tdprodutos`
--

INSERT INTO `tdprodutos` (`idProduto`, `nome`, `quantidade`, `descricao`, `valorUnitario`, `validade`, `laboratorio`) VALUES
(1, 'PLURAIR (Propionato de fluticasona) 120 Doses', 12, '                                    Indicado para profilaxia e tratamento da rinite alérgica sazonal e perene, inclusive febre do feno, em adultos e crianças acima de quatro anos de idade. Para pacientes com rinite alérgica, Plurair também é indicado para o controle da dor e da pressão sinusais associadas à doença.                                ', '51.95', '2021-04-25', 'Libbs Farmacêutica Ltda'),
(2, 'Colirio Teuto', 5, '                                                                        Solução oftálmica adstringente para o tratamento das irritações\r\noculares (poeira, vento, calor, fumaça, gases irritantes, luz e corpos estranho                                                                ', '10.75', '2021-07-16', 'Teuto Brasileiro S/A'),
(3, 'Dorflex ', 6, '                                    Dorflex em comprimidos ou solução oral, é indicado para o alivio de dores cabeça tensionais e de dores associadas a contraturas musculares, em adultos.                                ', '5.42', '2021-02-19', 'Sanofi-Aventis Farmacêutica Ltda.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tdprodutos`
--
ALTER TABLE `tdprodutos`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tdprodutos`
--
ALTER TABLE `tdprodutos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
