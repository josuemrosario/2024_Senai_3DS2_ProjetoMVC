-- --------------------------------------------------------
--
-- Criacao do banco
--
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS db_aulaPHP;

-- --------------------------------------------------------
--
-- Estrutura da tabela `pessoa`
--
-- --------------------------------------------------------

USE db_aulaPHP;

CREATE TABLE `pessoa` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- Dados para Teste
--
-- --------------------------------------------------------


INSERT INTO pessoa (nome, endereco, telefone, email, sexo) 
VALUES 
('Janete da Silva', 'Ruas das flores floridas, 362', '19983847273', 'janete@email.com.br', 'F'),
('Joao Ricardo Moletti', 'Rua Quefoi e Nãovoltou', '1926495846', 'joao@email.com.br', 'M'),
('Joana Alegre', 'Rua Jardins Floridos, 34', '19954586852', 'joana@email.com.br', 'F'),
('Marleilson de Andrade Peres', 'Rua do Carro de Boi 35', '19987366458', 'Marlei@email.com.br', 'M');
