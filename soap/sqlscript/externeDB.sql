SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `sharescompany`
--
CREATE DATABASE IF NOT EXISTS `sharescompany` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sharescompany`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- TRUNCATE Tabelle vor dem Einfügen `shares`
--

TRUNCATE TABLE `shares`;
--
-- Daten für Tabelle `shares`
--

INSERT INTO `shares` (`share_id`, `share_name`, `share_symbol`, `share_valor`, `share_value`, `share_currency`, `share_package`, `share_opening`) VALUES
(1, 'Roche Holding AG (Genussschein)', 'ROG', '1203204', 123.45, 'CHF', '100 Stk', '1980-09-12 00:00:00'),
(2, 'Roche Holding AG (Inhaberaktie)', 'RO', '1203211', 145.45, 'CHF', '100 Stk', '2014-01-06 00:00:00'),
(3, 'Nestlé', 'NES', '5435353', 1230, 'CHF', '1 Package', '2013-01-12 00:00:00'),
(4, 'Share with Singlequote named d''Artagnan', 'DART', '01123581321', 344, 'EUR', '1 Unit', '2014-05-05 00:00:00'),
(5, 'Aktie1', 'AK1', '112233', 424, 'CHF', '1 Unit', '2014-05-05 00:00:00'),
(6, 'Aktie2', 'AK2', '112234', 234.89, 'EUR', '1 Bundle', '2014-01-09 00:00:00'),
(8, 'Aktie4', 'AK4', '112236', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(9, 'Aktie5', 'AK5', '112237', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(11, 'Aktie6', 'AK6', '116236', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(12, 'Aktie7', 'AK7', '112277', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(14, 'Aktie8', 'AK8', '162236', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(15, 'Aktie9', 'AK9', '182237', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(17, 'Aktie10', 'AK10', '122236', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(18, 'Aktie11', 'AK11', '112299', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(21, 'Aktie12', 'AK12', '1122347', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(22, 'Aktie13', 'AK14', '112237123', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(24, 'Aktie15', 'AK16', '11223698', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(25, 'Aktie17', 'AK18', '11223700', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(27, 'Aktie19', 'AK19', '11223688', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(28, 'Aktie20', 'AK20', '112237122', 345, 'CHF', '1 STK', '2014-05-06 00:00:00'),
(30, 'Aktie21', 'AK22', '442236', 567, 'CHF', '2 STK', '2012-04-04 00:00:00'),
(31, 'Aktie22', 'AK22', '7832237', 345, 'CHF', '1 STK', '2014-05-06 00:00:00');
