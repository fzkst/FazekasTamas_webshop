-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2022. Nov 04. 12:11
-- Kiszolgáló verziója: 5.7.36
-- PHP verzió: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

DROP TABLE IF EXISTS `felhasznalo`;
CREATE TABLE IF NOT EXISTS `felhasznalo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `felhasznalo_nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `teljes_nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `szuletesi_datum` date NOT NULL,
  `iranyito_szam` int(4) NOT NULL,
  `varos` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `cim` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `regisztracio_idopontja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `felhasznalo_nev` (`felhasznalo_nev`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termek`
--

DROP TABLE IF EXISTS `termek`;
CREATE TABLE IF NOT EXISTS `termek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `kep` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `termek`
--

INSERT INTO `termek` (`id`, `nev`, `leiras`, `ar`, `kep`) VALUES
(1, 'MOONRIVER AUDIO 404 STANDARD INTEGRÁLT ERŐSÍTŐ', 'A Moonriver Model 404 előcsalja a rejtett elemeket, és textúrákat jelenít meg bármilyen hangformátumból. Csak a forrás, a hangszórók és a helyiség állítja be a teljesítménykorlátot.', 1299999, '/img/Moonriver.png'),
(2, 'MUSICAL FIDELITY M6X 250.7 VÉGERŐSÍTŐ', 'Új többcsatornás erősítőnk moduláris felépítésű, csatornánként 250 W-os A/B osztályú erősítő fokozattal. Erősítőnket úgy terveztük, hogy minden tranziens és mikroinformáció megtartásával rendkívül természetes hangzású legyen.', 1399999, '/img/MusicalFidelity.png'),
(3, 'CAYIN A-300B MK2 ', 'Bemutatjuk az új Cayin A-300B MK2 300B A osztályú csöves integrált erősítőt és teljesítményerősítőt. A Cayin A-300B MK2 egy integrált erősítő, amely képes teljesítményerősítőként is működni.', 1499999, '/img/Cayin.png'),
(4, 'GATO AUDIO AMP-150 INTEGRÁLT ERŐSÍTŐ', 'Integrált erősítő a legmagasabb esztétikai, műszaki és hangreprodukciós minőséggel. Gyönyörű, egyszerű és funkcionális kialakítású. ', 1529999, '/img/Gato.png'),
(5, 'KLIPSCH KLIPSCHORN AK6 FRONTSUGÁRZÓ', '\r\nAz ikonikus Klipschorn az eredeti, háromutas, teljes kürttel ellátott hangszóró, amely megalapozta a Klipsch márkát. A legújabb kiadása során ez a történelmi hangszóró vadonatúj neodímium hangszóróval, prémium kábelporttal büszkélkedhet. ', 9799999, '/img/Klipschorn.png'),
(6, 'KLIPSCH LA SCALA AL5 FRONTSUGÁRZÓ', 'A La Scala AL5 ugyanazt a csillogó magasságot, extrém kimenetet és felülmúlhatatlan, alacsony torzítású basszus hangot adja, mint az előző modell.', 6799999, '/img/LaScala.png'),
(7, 'DUNE HD ULTRA VISION 4K 3D MÉDIALEJÁTSZÓ', 'Az első high-end Dune HD lejátszó, az Ultra 4K utódja, a 2021-es modellév csúcskészüléke, amely azok számára készült, akik sztereó zenét high-end minőségben szeretnének hallgatni anélkül, hogy a médialejátszó mellé egy újabb készüléket vegyenek.', 629880, '/img/Dune.png'),
(8, 'DUNE HD MAX VISION 4K MÉDIALEJÁTSZÓ', 'A Max Vision 4K szabványos hifi-méretű (42,4 cm széles) médialejátszó, teljes értékű Android 9 operációs rendszerrel. Médiaprocesszora Realtek RTD1619DR, amely a HDR10, HDR10+ mellett már Dolby Vision színkódolású videók lejátszására is képes.', 352880, '/img/Dune2.png'),
(9, 'AUDIOQUEST NIAGARA 7000 LOW-Z POWER TÁPSZŰRŐ', 'A mai növekvő sávszélesség és a dinamikus tartomány ígéretének megfelelő betartásához nagyon széles frekvenciatartományban rendkívül alacsony zajszintet kell elérnünk. Ez a Niagara 7000.', 3999000, '/img/Niagara7000.jpg'),
(10, 'AUDIOQUEST NIAGARA 5000 LOW-Z POWER TÁPSZŰRŐ', 'A mai növekvő sávszélesség és a dinamikus tartomány ígéretének megfelelő betartásához nagyon széles frekvenciatartományban rendkívül alacsony zajszintet kell elérnünk. Ez a Niagara5000.', 1999000, '/img/Niagara5000.jpg'),
(11, 'BLUESOUND NODE MULTIROOM HÃLÃ“ZATI LEJÃTSZÃ“', 'A meglÃ©vÅ‘ hifi hangrendszerÃ©t vagy kedvenc aktÃ­v hangsugÃ¡rzÃ³it korszerÅ±bb szintre emelÅ‘ Bluesound NODE megnyitja az utat az egyszerre tÃ¶bb helyisÃ©gben is Ã©lvezhetÅ‘ nagy felbontÃ¡sÃº zenehallgatÃ¡s vilÃ¡ga elÅ‘tt. ', 264999, '/img/Node.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
