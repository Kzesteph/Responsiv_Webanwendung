-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Nov 2020 um 11:13
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.2.12

-- Hinweis: die Datenbank muss zuvor erstellt werden!


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `projekte`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunde`
--

CREATE TABLE `kunde` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branche` varchar(255) NOT NULL,
  `ort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `kunde`
--

INSERT INTO `kunde` (`ID`, `name`, `branche`, `ort`) VALUES
(1, 'Aberle Automation GmbH', 'Automatisierung', 'Dahn'),
(2, 'Volvo Trucks', 'Nutzfahrzeuge', 'Göteborg'),
(3, 'Bilfinger Life Science', 'Elektromontage', 'Göteborg'),
(4, 'BMW', 'Softwareentwicklung', 'Göteborg'),
(5, 'ABB', 'Software-Testing', 'Mannheim'),
(6, 'WIPOTEC GmbH', 'Cloud-Computing', 'Kaiserslautern');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projekt`
--

CREATE TABLE `projekt` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `datum_von` date DEFAULT NULL,
  `datum_bis` date DEFAULT NULL,
  `details` varchar(512) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `kategorie` varchar(255) DEFAULT NULL,
  `kundeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `projekt`
--

INSERT INTO `projekt` (`ID`, `name`, `datum_von`, `datum_bis`, `details`, `kategorie`, `kundeID`) VALUES
(1, 'PredMaintApp', '2020-01-01', '2020-08-30', 'Entwicklung einer App für Predictive Maintenance', 'App-Entwicklung', 1),
(2, 'Volvo News', '2019-01-01', '2019-12-31', 'App für Unternehmensnachrichten', 'App-Entwicklung', 2),
(3, 'Bilfinger Life Science', '2019-01-01', '2019-12-31', 'Webseite für Unternehmen', 'Webseite-Entwicklung', 3),
(4, 'BMW', '2019-01-01', '2019-12-31', 'Software für Steuerung von Geräte', 'Softwareentwicklung', 4),
(5, 'ABB', '2019-01-01', '2019-12-31', 'Software-Testing', 'Software-Testing', 5),
(6, 'ProRex', '2018-03-01', '2018-12-31', 'CRM-System und Kundenmanagement', 'Proof-of-Concept', 1);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `referenzprojekte`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `referenzprojekte` (
`projektname` varchar(255)
,`datum_von` date
,`datum_bis` date
,`kategorie` varchar(255)
,`kunde` varchar(255)
,`ort` varchar(255)
);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `referenzprojekte2`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `referenzprojekte2` (
`projektname` varchar(255)
,`laufzeit` varchar(25)
,`kategorie` varchar(255)
,`details` varchar(512)
,`kunde` varchar(255)
,`ort` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur des Views `referenzprojekte`
--
DROP TABLE IF EXISTS `referenzprojekte`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `referenzprojekte`  AS  select `p`.`name` AS `projektname`,`p`.`datum_von` AS `datum_von`,`p`.`datum_bis` AS `datum_bis`,`p`.`kategorie` AS `kategorie`,`k`.`name` AS `kunde`,`k`.`ort` AS `ort` from (`projekt` `p` join `kunde` `k`) where (`p`.`kundeID` = `k`.`ID`) ;

-- --------------------------------------------------------

--
-- Struktur des Views `referenzprojekte2`
--
DROP TABLE IF EXISTS `referenzprojekte2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `referenzprojekte2`  AS  (select `p`.`name` AS `projektname`,concat(`p`.`datum_von`,' bis ',`p`.`datum_bis`) AS `laufzeit`,`p`.`kategorie` AS `kategorie`,`p`.`details` AS `details`,`k`.`name` AS `kunde`,`k`.`ort` AS `ort` from (`projekt` `p` join `kunde` `k`) where (`p`.`kundeID` = `k`.`ID`)) ;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `projekt`
--
ALTER TABLE `projekt`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `projekt_kunde_fk_1` (`kundeID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kunde`
--
ALTER TABLE `kunde`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `projekt`
--
ALTER TABLE `projekt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `projekt`
--
ALTER TABLE `projekt`
  ADD CONSTRAINT `projekt_kunde_fk_1` FOREIGN KEY (`kundeID`) REFERENCES `kunde` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
