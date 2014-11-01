SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `admazing`
--
CREATE DATABASE IF NOT EXISTS `admazing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `admazing`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shares`
--

DROP TABLE IF EXISTS `shares`;
CREATE TABLE IF NOT EXISTS `shares` (
  `share_id` int(11) NOT NULL AUTO_INCREMENT,
  `share_name` varchar(255) NOT NULL,
  `share_symbol` varchar(15) NOT NULL,
  `share_valor` varchar(125) NOT NULL,
  `share_value` float NOT NULL,
  `share_currency` varchar(3) NOT NULL,
  `share_package` varchar(50) NOT NULL,
  `share_opening` datetime NOT NULL,
  PRIMARY KEY (`share_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
