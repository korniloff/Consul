-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 10 2012 г., 12:39
-- Версия сервера: 5.1.50
-- Версия PHP: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `consulbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `consul_admin`
--

DROP TABLE IF EXISTS `consul_admin`;
CREATE TABLE IF NOT EXISTS `consul_admin` (
  `admin_code` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(200) NOT NULL DEFAULT '',
  `admin_login` varchar(200) NOT NULL DEFAULT '',
  `admin_pass` varchar(200) NOT NULL DEFAULT '',
  `admin_email` varchar(200) NOT NULL DEFAULT '',
  `admin_active` tinyint(4) NOT NULL DEFAULT '1',
  `admin_radmin` tinyint(4) DEFAULT '0' COMMENT 'права на раздел "Управление доступом"',
  `admin_rtext` tinyint(4) DEFAULT '0' COMMENT 'права на редактирвание "текстовые страницы"',
  `admin_rnews` tinyint(4) DEFAULT '0' COMMENT 'права на раздел "Новости"',
  `admin_requipment` tinyint(4) DEFAULT '0' COMMENT 'права на раздел "Оборудование"',
  `admin_rpartner` tinyint(4) DEFAULT '0' COMMENT 'права на раздел "Партнеры"',
  PRIMARY KEY (`admin_code`),
  UNIQUE KEY `admin_login` (`admin_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `consul_admin`
--

INSERT INTO `consul_admin` (`admin_code`, `admin_name`, `admin_login`, `admin_pass`, `admin_email`, `admin_active`, `admin_radmin`, `admin_rtext`, `admin_rnews`, `admin_requipment`, `admin_rpartner`) VALUES
(1, 'Константин', 'korniloff', '30aabd946905001c29251b1d158e1891', 'korniloff@ukr.net', 1, 1, 1, 1, 1, 1),
(2, 'Георгий', 'george', 'b633e58ff7d328a069f54451d1685e0a', 'pu88@mail.ru', 1, 1, 1, 1, 1, 1),
(11, 'Владимир Перов', 'peroff', 'dc16584b10df0d1b4d71e090802c70a9', 'peroff@mail.net', 0, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `consul_dict`
--

DROP TABLE IF EXISTS `consul_dict`;
CREATE TABLE IF NOT EXISTS `consul_dict` (
  `dict_code` int(11) NOT NULL AUTO_INCREMENT,
  `dict_ru` varchar(250) NOT NULL,
  `dict_en` varchar(250) NOT NULL,
  PRIMARY KEY (`dict_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `consul_dict`
--

INSERT INTO `consul_dict` (`dict_code`, `dict_ru`, `dict_en`) VALUES
(1, 'главная', 'main'),
(2, 'о компании', 'about us'),
(3, 'новости', 'news'),
(4, 'услуги', 'service'),
(5, 'оборудование', 'equipment'),
(6, 'партнеры', 'partners'),
(7, 'контакты', 'contacts'),
(8, 'ООО «ВЭК КОНСУЛ»', 'CONSUL CO., LTD'),
(9, 'Каталог оборудования', 'Equipment catalog'),
(10, 'Новости и события', 'News and events'),
(11, 'Контактная информация', 'Contact Information'),
(12, 'Добро пожаловать', 'Welcome');

-- --------------------------------------------------------

--
-- Структура таблицы `consul_equip`
--

DROP TABLE IF EXISTS `consul_equip`;
CREATE TABLE IF NOT EXISTS `consul_equip` (
  `equip_code` int(11) NOT NULL AUTO_INCREMENT,
  `equip_icon` varchar(256) CHARACTER SET cp1251 DEFAULT NULL,
  `equip_pos` int(11) NOT NULL,
  `page_code` int(11) NOT NULL,
  `equip_url` varchar(250) CHARACTER SET cp1256 DEFAULT NULL,
  `equip_parent` int(11) NOT NULL,
  PRIMARY KEY (`equip_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `consul_equip`
--

INSERT INTO `consul_equip` (`equip_code`, `equip_icon`, `equip_pos`, `page_code`, `equip_url`, `equip_parent`) VALUES
(1, NULL, 1, 6, 'www.navigane.ru', 0),
(2, NULL, 2, 7, 'www.electric.com', 0),
(4, NULL, 1, 9, '', 3),
(5, NULL, 2, 10, '', 3),
(7, NULL, 1, 12, '', 6),
(8, NULL, 2, 13, '', 6),
(10, NULL, 3, 19, '', 0),
(11, NULL, 4, 20, '', 0),
(12, NULL, 5, 21, '', 0),
(13, NULL, 6, 22, '', 0),
(14, NULL, 7, 23, '', 0),
(15, NULL, 8, 24, '', 0),
(16, NULL, 9, 25, '', 0),
(17, NULL, 10, 26, '', 0),
(18, NULL, 11, 27, '', 0),
(19, NULL, 12, 28, '', 0),
(20, NULL, 1, 29, '', 10),
(21, NULL, 2, 30, '', 10),
(22, NULL, 3, 31, '', 10),
(23, NULL, 4, 32, '', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `consul_lang`
--

DROP TABLE IF EXISTS `consul_lang`;
CREATE TABLE IF NOT EXISTS `consul_lang` (
  `lang_code` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(250) NOT NULL DEFAULT ' ',
  `lang_direct` char(1) NOT NULL DEFAULT 'l',
  `lang_charset` varchar(20) NOT NULL DEFAULT 'windows-1251',
  PRIMARY KEY (`lang_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `consul_lang`
--

INSERT INTO `consul_lang` (`lang_code`, `lang_name`, `lang_direct`, `lang_charset`) VALUES
(1, 'ru', 'l', 'windows-1251'),
(2, 'eng', 'l', 'windows-1251');

-- --------------------------------------------------------

--
-- Структура таблицы `consul_news`
--

DROP TABLE IF EXISTS `consul_news`;
CREATE TABLE IF NOT EXISTS `consul_news` (
  `news_code` int(11) NOT NULL AUTO_INCREMENT,
  `news_date` date NOT NULL,
  `news_url` varchar(200) DEFAULT '',
  `page_code` int(11) NOT NULL,
  PRIMARY KEY (`news_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `consul_news`
--

INSERT INTO `consul_news` (`news_code`, `news_date`, `news_url`, `page_code`) VALUES
(3, '2012-11-29', 'www.navico.com', 5),
(4, '2012-12-09', 'http://www.korabel.ru/news/comments/kompaniya_navmarin_zavershila_razrabotku_i_pristupila_k_vipusku_dvuh_modeley_kommutatorov_signalov_nmea-soobshcheniy_navcom_beta-100_i_beta-110.html', 33),
(5, '2012-12-09', 'http://www.korabel.ru/news/comments/rasprodazha_aksessuarov_sailor_5000_serii.html', 34);

-- --------------------------------------------------------

--
-- Структура таблицы `consul_page`
--

DROP TABLE IF EXISTS `consul_page`;
CREATE TABLE IF NOT EXISTS `consul_page` (
  `page_code` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `page_active` tinyint(1) NOT NULL DEFAULT '0',
  `page_url` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `page_type` varchar(10) NOT NULL DEFAULT 'static',
  PRIMARY KEY (`page_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `consul_page`
--

INSERT INTO `consul_page` (`page_code`, `page_name`, `page_active`, `page_url`, `page_type`) VALUES
(2, 'toptext', 1, NULL, 'static'),
(5, 'Новые эхолоты от Navico', 1, 'http://lowrance-eholot.ru/news/20-elite4.html', 'news'),
(6, 'Авторулевые', 1, '', 'catalog'),
(7, 'АРБ, РЛО, УКВ-носимые', 1, '', 'catalog'),
(9, 'Garmin RS 232', 1, NULL, 'catalog'),
(10, 'Garmin UL 416', 1, NULL, 'catalog'),
(12, 'Samsung 18', 1, NULL, 'catalog'),
(13, 'Samsung 19', 1, NULL, 'catalog'),
(15, 'ЦК КПСС', 1, NULL, 'partner'),
(16, 'Газпром', 1, NULL, 'partner'),
(19, 'Гирокомпасы', 1, '', 'catalog'),
(20, 'Картографические системы', 1, '', 'catalog'),
(21, 'Командно-вещательные установки', 1, '', 'catalog'),
(22, 'Компасы магнитные', 1, '', 'catalog'),
(23, 'Приемники GPS, карт-плоттеры', 1, '', 'catalog'),
(24, 'Приемники NAVTEX, приемники карт погоды', 1, '', 'catalog'),
(25, 'ПВ/КВ, УКВ-радиостанции', 1, '', 'catalog'),
(26, 'Радары', 1, '', 'catalog'),
(27, 'Регистраторы данных рейса', 1, '', 'catalog'),
(28, 'Спутниковые системы связи', 1, '', 'catalog'),
(29, 'Гирокомпас GC 80 Simrad', 1, '', 'catalog'),
(30, 'Гирокомпас Standard 22 Raytheon', 1, '', 'catalog'),
(31, 'Гирокомпас PGM-C-009', 1, '', 'catalog'),
(32, 'Гирокомпас Меридиан', 1, '', 'catalog'),
(33, 'КОМПАНИЯ "НАВМАРИН" ЗАВЕРШИЛА РАЗРАБОТКУ И ПРИСТУПИЛА К ВЫПУСКУ ДВУХ МОДЕЛЕЙ КОММУТАТОРОВ СИГНАЛОВ NMEA-СООБЩЕНИЙ NAVCOM BETA-100 И BETA-110', 1, 'http://www.korabel.ru/news/comments/kompaniya_navmarin_zavershila_razrabotku_i_pristupila_k_vipusku_dvuh_modeley_kommutatorov_signalov_nmea-soobshcheniy_navcom_beta-100_i_beta-110.html', 'news'),
(34, 'РАСПРОДАЖА АКСЕССУАРОВ SAILOR 5000 СЕРИИ', 1, 'http://www.korabel.ru/news/comments/rasprodazha_aksessuarov_sailor_5000_serii.html', 'news'),
(35, 'contacts', 1, NULL, 'static');

-- --------------------------------------------------------

--
-- Структура таблицы `consul_partner`
--

DROP TABLE IF EXISTS `consul_partner`;
CREATE TABLE IF NOT EXISTS `consul_partner` (
  `partner_code` int(11) NOT NULL AUTO_INCREMENT,
  `partner_pos` int(11) NOT NULL DEFAULT '0',
  `partner_onmain` int(1) NOT NULL DEFAULT '1',
  `page_code` int(11) NOT NULL DEFAULT '0',
  `partner_url` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  PRIMARY KEY (`partner_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `consul_partner`
--

INSERT INTO `consul_partner` (`partner_code`, `partner_pos`, `partner_onmain`, `page_code`, `partner_url`) VALUES
(1, 1, 0, 15, 'www.ussr.com'),
(2, 2, 1, 16, 'www.gazprom.ua');

-- --------------------------------------------------------

--
-- Структура таблицы `consul_picture`
--

DROP TABLE IF EXISTS `consul_picture`;
CREATE TABLE IF NOT EXISTS `consul_picture` (
  `picture_code` int(11) NOT NULL AUTO_INCREMENT,
  `page_code` int(11) NOT NULL DEFAULT '0',
  `picsmall` varchar(200) DEFAULT NULL,
  `picbig` varchar(200) DEFAULT NULL,
  `picpos` int(11) NOT NULL DEFAULT '0',
  `piccomment` text,
  `piccomment_en` text,
  PRIMARY KEY (`picture_code`),
  UNIQUE KEY `picture_code` (`picture_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `consul_picture`
--

INSERT INTO `consul_picture` (`picture_code`, `page_code`, `picsmall`, `picbig`, `picpos`, `piccomment`, `piccomment_en`) VALUES
(1, 2, 'small.JPG', 'big.JPG', 1, 'Боря и я', 'Borya and I'),
(2, 2, 'small.jpg', 'big.jpg', 2, 'ПАРМ', 'PARM'),
(6, 5, 'small3.jpg', 'big3.jpg', 1, '', ''),
(7, 33, 'small7.jpg', 'big7.jpg', 1, '', ''),
(8, 34, 'small8.jpg', 'big8.jpg', 1, '', ''),
(10, 7, 'small10.jpg', 'big10.jpg', 1, '', ''),
(11, 19, 'small11.jpg', 'big11.jpg', 1, '', ''),
(12, 20, 'small12.jpg', 'big12.jpg', 1, '', ''),
(13, 21, 'small13.jpg', 'big13.jpg', 1, '', ''),
(14, 22, 'small14.jpg', 'big14.jpg', 1, '', ''),
(15, 25, 'small15.jpg', 'big15.jpg', 1, '', ''),
(16, 23, 'small16.jpg', 'big16.jpg', 1, '', ''),
(17, 24, 'small17.jpg', 'big17.jpg', 1, '', ''),
(18, 6, 'small18.jpg', 'big18.jpg', 1, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `consul_static`
--

DROP TABLE IF EXISTS `consul_static`;
CREATE TABLE IF NOT EXISTS `consul_static` (
  `static_code` int(11) NOT NULL AUTO_INCREMENT,
  `page_code` int(11) NOT NULL DEFAULT '0',
  `static_name` varchar(200) NOT NULL DEFAULT '',
  `static_text` text NOT NULL,
  `static_pos` int(11) NOT NULL DEFAULT '0',
  `static_seo_title` text,
  `static_seo_desc` text,
  `static_seo_key` text,
  `lang_code` int(11) NOT NULL,
  `static_abstract` text,
  `static_url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`static_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=59 ;

--
-- Дамп данных таблицы `consul_static`
--

INSERT INTO `consul_static` (`static_code`, `page_code`, `static_name`, `static_text`, `static_pos`, `static_seo_title`, `static_seo_desc`, `static_seo_key`, `lang_code`, `static_abstract`, `static_url`) VALUES
(12, 2, 'Компания Консул', '<p><span>Компания КОНСУЛ была основано в 2001 году. Деятельность компании основана на использовании новейших технологий в области радиоэлектроники, передовых научных достижений и богатого опыта наших специалистов. Наша философия заключается в гибком подходе к потребностям наших клиентов, высокой ответственности и профессионализме в развитии проектов. Мы дорожим репутацией нашей компании как надежного партнера!</span></p>', 0, 'Страница', 'Описание', 'Ключевые слова', 1, '.mysql_escape_string().', NULL),
(13, 2, 'Consul Company', '<p>CONSUL company was founded in 2001. The company''s activity is based on the latest technology in electronics, advanced scientific knowledge and vast experience of our professionals. Our philosophy is to take a flexible approach to the needs of our customers, high responsibility and professionalism in the development of projects. We value our reputation as a reliable partner!</p>', 0, 'page', 'description', 'keywords', 2, '.mysql_escape_string().', NULL),
(14, 1, 'тест', '<p>Это тест.<img title="Хмурюсь" src="http://localhost/consul/admin/editor/tiny_mce/plugins/emotions/img/smiley-frown.gif" alt="Хмурюсь" border="0" /></p>', 0, 'Тест', 'Тестовое описание', 'тестовые ключевые слова', 1, NULL, NULL),
(15, 1, 'test', '<p>this is test&nbsp;<img title="Краснею" src="http://localhost/consul/admin/editor/tiny_mce/plugins/emotions/img/smiley-embarassed.gif" alt="Краснею" border="0" /></p>', 0, NULL, NULL, NULL, 2, NULL, NULL),
(17, 6, 'Авторулевые', '', 0, NULL, NULL, NULL, 1, '', NULL),
(18, 6, 'Autopilots', '', 0, NULL, NULL, NULL, 2, '', NULL),
(23, 7, 'АРБ, РЛО, УКВ-носимые', '', 0, NULL, NULL, NULL, 1, '', '../files/Copy of Invoice - Professional (Cool).gdoc'),
(24, 7, 'EPIRB, SART, VHF portable', '', 0, NULL, NULL, NULL, 2, '', NULL),
(27, 19, 'Гирокомпасы', '', 0, NULL, NULL, NULL, 1, '', NULL),
(28, 19, 'Gyrocompasses', '', 0, NULL, NULL, NULL, 2, '', NULL),
(29, 27, 'Регистраторы данных рейса', '', 0, NULL, NULL, NULL, 1, '', NULL),
(30, 27, 'Voyage data recorders', '', 0, NULL, NULL, NULL, 2, '', NULL),
(31, 20, 'Картографические системы', '', 0, NULL, NULL, NULL, 1, '', NULL),
(32, 20, 'Mapping systems', '', 0, NULL, NULL, NULL, 2, '', NULL),
(33, 21, 'Командно-вещательные установки', '', 0, NULL, NULL, NULL, 1, '', NULL),
(34, 21, 'Command and broadcast settings', '', 0, NULL, NULL, NULL, 2, '', NULL),
(35, 22, 'Компасы магнитные', '', 0, NULL, NULL, NULL, 1, '', NULL),
(36, 22, 'Magnetic compasses', '', 0, NULL, NULL, NULL, 2, '', NULL),
(37, 25, 'MF/HF, VHF radio', '', 0, NULL, NULL, NULL, 2, '', NULL),
(38, 25, 'ПВ/КВ, УКВ-радиостанции', '', 0, NULL, NULL, NULL, 1, '', NULL),
(39, 23, 'Приемники GPS, карт-плоттеры', '', 0, NULL, NULL, NULL, 1, '', NULL),
(40, 23, 'Receivers GPS, map plotter', '', 0, NULL, NULL, NULL, 2, '', NULL),
(41, 24, 'Приемники NAVTEX, приемники карт погоды', '', 0, NULL, NULL, NULL, 1, '', NULL),
(42, 24, 'Receiver NAVTEX, weather maps receivers', '', 0, NULL, NULL, NULL, 2, '', NULL),
(43, 26, 'Радары', '', 0, NULL, NULL, NULL, 1, '', NULL),
(44, 26, 'Radars', '', 0, NULL, NULL, NULL, 2, '', NULL),
(45, 28, 'Спутниковые системы связи', '', 0, NULL, NULL, NULL, 1, '', NULL),
(46, 28, 'Satellite systems', '', 0, NULL, NULL, NULL, 2, '', NULL),
(47, 29, 'Гирокомпас GC 80 Simrad', '', 0, NULL, NULL, NULL, 1, '', NULL),
(48, 31, 'Гирокомпас PGM-C-009', '', 0, NULL, NULL, NULL, 1, '', NULL),
(49, 30, 'Гирокомпас Standard 22 Raytheon', '', 0, NULL, NULL, NULL, 1, '', NULL),
(50, 32, 'Гирокомпас Меридиан', '', 0, NULL, NULL, NULL, 1, '', NULL),
(51, 5, 'Новые эхолоты от Navico', '<table class="contentpaneopen">\r\n<tbody>\r\n<tr>\r\n<td class="createdate" valign="top">16.11.11 10:05</td>\r\n</tr>\r\n<tr>\r\n<td valign="top"><br />\r\n<div align="justify"><img src="http://lowrance-eholot.ru/images/stories/news/2011/mark4.jpg" alt="картплоттер/эхолот Lowrance Mark-4" width="386" height="272" />Компания&nbsp;<a title="Navico" href="http://www.navico.com/" target="_blank">Navico</a>, мировой лидер по производству морской электроники, объявила о выходе новой линейки эхолотов и картплоттеров Lowrance серии Elite&trade; и серии Mark&trade;. Все устройства данных серий оснащены 3,5 дюймовым экраном, черно-белым в приборах Mark и цветным в Elite, а также функциями, которые ранее были доступны только в дорогих моделях.<br /><br />Яркий экран обеспечивает максимальную четкость, позволяющую увидеть все детали при любых условиях. Функция Trackback&trade; позволяет просмотреть историю уже пройденного маршрута, поближе рассмотреть структуру дна и рыбу. Рыбаки по достоинству оценят полезность опции Advanced Signal Processing&trade;, которая автоматически определяет рыбу, структуру и детали дна более четко. Приборы легко и быстро устанавливаются, все коннекторы подходят для кабелей Lowrance или Eagle&reg;.<br /><br />Модели с картплоттером имеют встроенную GPS антенну и слот для карт microSD.&nbsp;<br /><br />В серии Elite представлены 6 приборов - эхолоты Elite-4x, Elite-4x DSI и картплоттеры/эхолоты Elite-4, Elite-4 DSI, Elite-4 GOLD,&nbsp; Elite-4M.<br />В серии Mark представлен черно-белый картплоттер/эхолот Mark-4.</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, NULL, NULL, NULL, 1, '<p><span>Компания Navico, мировой лидер по производству морской электроники, объявила о выходе новой линейки эхолотов и картплоттеров Lowrance серии Elite&trade; и серии Mark&trade;.</span></p>', NULL),
(52, 5, 'New fishfinders from Navico', '<p>The company Navico, the world leader in marine electronics, today announced a new line of sonar and chartplotter Lowrance Elite &trade; Series and Series Mark &trade;. All of the devices in these series features a 3.5 inch screen, a black-and-white in color, and Mark devices in Elite, as well as features that were previously only available in high-end models.</p>\r\n<p>Bright screen for maximum clarity, allows you to see all the details at all times. Trackback &trade; feature allows you to view the history of the route covered already, a closer look at the structure of the bottom and fish. Fishermen will appreciate the usefulness of options Advanced Signal Processing &trade;, which automatically detects fish, structure and bottom detail more clearly. Products are easily and quickly installed, all the connectors are suitable for cables Lowrance or Eagle &reg;.</p>\r\n<p>Models with built-in GPS chartplotter to have an antenna and a slot for microSD.</p>\r\n<p>In the Elite series are 6 units - echo sounders Elite-4x, Elite-4x DSI and chartplotter / fishfinders Elite-4, Elite-4 DSI, Elite-4 GOLD, Elite-4M.<br />In a series of Mark presented a black and white combination chartplotter / sounder Mark-4.</p>', 0, NULL, NULL, NULL, 2, '<p>The company Navico, the world leader in marine electronics, today announced a new line of Lowrance sonar and chartplotter series&nbsp;Elite&trade; &amp; Mark&trade;.</p>', NULL),
(53, 33, 'Торговая марка NavCom', '<p><span>Коммутаторы NavCom Beta-100 и Beta-110 найдут широкое применение на судах морского и речного флота в качестве устройств, предназначенных для сбора информационных посылок с установленного на борту навигационного и другого оборудования с последующей передачей данных на единое устройство обработки и вывода информации. Также устройства могут использоваться при организации резервных систем отображения информации на мостике, за счёт наличия функции распараллеливания сообщений в стандарте IEC 61162-1 (NMEA 0183 версия 1.5/2.0) со скоростью следования от 4800 бит/сек. до 38400 бит/сек.</span><br /><br /><span>Существует множество вариантов использования коммутаторов NavCom Beta. Например, при подаче сигнала на коммутатор с различных внешних устройств (приёмоиндикатор ГНСС ГЛОНАСС/GPS, система АИС, эхолот, компас, метеостанция и др.) появляется возможность вывода информации от них на один общий терминал (ЭКНИС/СОЭНКИ/ЭКС, ПК и др.), что, в свою очередь, позволяет оптимизировать процесс судовождения для капитанов судов как с точки зрения удобства навигации, так и повышения уровня безопасности.</span><br /><br /><span>При необходимости организации резервного поста отображения навигационной информации на мостике судна коммутаторы NavCom Beta позволяют дублировать сигналы от внешних устройств на резервную систему. При этом источниками информации могут являться различные виды судового навигационного оборудования, имеющие в своём составе устройства ввода/вывода информации в едином стандарте NMEA, с которыми полностью совместимы коммутаторы NavCom Beta.</span></p>\r\n<div align="center"><img src="http://www.navmarine.ru/images/16_11_12.jpg" alt="" /></div>', 0, NULL, NULL, NULL, 1, '<p><span>Компания НавМарин завершила разработку и приступила к выпуску нового оборудования под торговой маркой NavCom - коммутаторов сигналов NMEA-сообщений&nbsp;</span><strong><a href="http://navcom.ru/index.php?GID=84" target="_blank">NavCom Beta-100</a></strong><span>&nbsp;и&nbsp;</span><strong><a href="http://navcom.ru/index.php?GID=85" target="_blank">NavCom Beta-110</a></strong><span>.</span></p>', NULL),
(54, 33, 'Navcom brand news', '<p>Switches NavCom Beta-Beta-100 and 110 will be widely used in ships of sea and river fleet as devices designed to collect information from the installed packages on board navigation and other equipment in connection with the transfer of data to a single unit of processing and output. Also, the device can be used in the organization of backup systems to display information on the bridge, by the presence of the functions in the standard parallel communications IEC 61162-1 (NMEA 0183 version 1.5/2.0) at repetition of 4800 bits / sec. up to 38400 bits / sec.</p>\r\n<p>There are a variety of switches NavCom Beta. For example, if a signal is applied to the switch from a variety of external devices (receiver-GLONASS / GPS, AIS system, depth sounder, compass, weather station, etc.) it is possible to display information from them on a common terminal (ECDIS / ECDIS / ECS, PC, etc .), which, in turn, allows to optimize the process of navigation for ships'' masters, both in terms of ease of navigation, and improve safety.</p>\r\n<p>If necessary, the organization backing the post displaying navigation information on the bridge of the ship switches NavCom Beta allow duplicate signals from external devices to the backup system. The source of information may include various types of marine navigation equipment, which have in their composition of the input / output information to a single standard NMEA, which are fully compatible switches NavCom Beta.</p>\r\n<p><img src="http://www.navmarine.ru/images/16_11_12.jpg" alt="" /></p>', 0, NULL, NULL, NULL, 2, '<p>Company NavMarin finalized and launched its new equipment under the brand name NavCom - switch signals soobscheniyNavCom NMEA-Beta-100 NavCom Beta-110.</p>', NULL),
(55, 34, 'ACCESSORIES SALE SAILOR 5000 Series', '<p><span data-mce-mark="1">ВIn connection with the start of deliveries Sailor 6000 Series and with the removal of a Sailor 5000 Series production company Telemar Russia to inform you that in the period from 12 March 2012 until the end of availability of goods in a warehouse in St. Petersburg, will be held on Sale accessories Sailor 5000 Series:</span></p>\r\n<table class="koTable" style="width: 73%;" border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403606E-003</td>\r\n<td nowrap="nowrap">Opt. NMEA Adapter / NMEA адаптер</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">8050080006</td>\r\n<td nowrap="nowrap">EB5008 Extension Box for RT5022/RT5020 / Расширительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050090006</td>\r\n<td nowrap="nowrap">CB5009 Connection Box for RT5022/RT5020 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">402049A</td>\r\n<td nowrap="nowrap">SAILOR H2049A VDR Connection Boks for RT2048 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050000009</td>\r\n<td nowrap="nowrap">SAILOR CU5000 Semi-intelligent control unit, Blue, incl. handset, cable and mounting kit<br />Блок дистанционного управления</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">739814</td>\r\n<td nowrap="nowrap">Flush mounting kit for RT5022/RT5020</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">405070A</td>\r\n<td nowrap="nowrap">SAILOR 5070 Loudspeaker</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">405100-920</td>\r\n<td nowrap="nowrap">CU5100 Opt. 920 Panel Mounting Kit&nbsp;</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">401701A</td>\r\n<td nowrap="nowrap">Shunt Box complete&nbsp;</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">403616D</td>\r\n<td nowrap="nowrap">TT-3616D Interconnection Box&nbsp;</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403026-101</td>\r\n<td nowrap="nowrap">1&rdquo; Pole mount kit&nbsp;</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">80465611</td>\r\n<td nowrap="nowrap">SAILOR CH4656 Battery charger 24V/10A, black&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, NULL, NULL, NULL, 2, '<p>In connection with the start of deliveries Sailor 6000 Series and with the removal of a Sailor 5000 Series production company Telemar Russia to inform you that in the period from 12 March 2012 until the end of availability of goods in a warehouse in St. Petersburg, will be held on Sale accessories Sailor 5000 Series</p>', NULL),
(56, 34, 'РАСПРОДАЖА АКСЕССУАРОВ SAILOR 5000 СЕРИИ', '<p><span>В связи с началом поставок&nbsp;&nbsp;Sailor&nbsp;6000 Серии и со снятием с производства&nbsp;Sailor&nbsp;5000 Серии компания Телемар Россия информирует вас, что в период с 12 марта 2012 года до окончания наличия товара на складе в Санкт-Петербурге, будет проходить распродажа аксессуаров&nbsp;Sailor&nbsp;5000 Серии:&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<table class="koTable" style="width: 73%;" border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403606E-003</td>\r\n<td nowrap="nowrap">Opt. NMEA Adapter / NMEA адаптер</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">8050080006</td>\r\n<td nowrap="nowrap">EB5008 Extension Box for RT5022/RT5020 / Расширительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050090006</td>\r\n<td nowrap="nowrap">CB5009 Connection Box for RT5022/RT5020 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">402049A</td>\r\n<td nowrap="nowrap">SAILOR H2049A VDR Connection Boks for RT2048 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050000009</td>\r\n<td nowrap="nowrap">SAILOR CU5000 Semi-intelligent control unit, Blue, incl. handset, cable and mounting kit<br />Блок дистанционного управления</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">739814</td>\r\n<td nowrap="nowrap">Flush mounting kit for RT5022/RT5020 / Монтажная рамка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">405070A</td>\r\n<td nowrap="nowrap">SAILOR 5070 Loudspeaker / Громкоговоритель</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">405100-920</td>\r\n<td nowrap="nowrap">CU5100 Opt. 920 Panel Mounting Kit / Кронштейн панельного монтажа</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">401701A</td>\r\n<td nowrap="nowrap">Shunt Box complete / &nbsp;Шунтирующая коробка</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">403616D</td>\r\n<td nowrap="nowrap">TT-3616D Interconnection Box / Cоединительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403026-101</td>\r\n<td nowrap="nowrap">1&rdquo; Pole mount kit / Трубный кронштейн 1"</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">80465611</td>\r\n<td nowrap="nowrap">SAILOR CH4656 Battery charger 24V/10A, black / Автоматическое зарядное устройство</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, NULL, NULL, NULL, 1, '<p><span>В связи с началом поставок&nbsp;&nbsp;Sailor&nbsp;6000 Сериина складе в Санкт-Петербурге, будет проходить распродажа аксессуаров&nbsp;Sailor&nbsp;5000 Серии:&nbsp;</span></p>', NULL),
(57, 35, 'Контактная информация', '<p><strong>ООО &laquo;ВЭК КОНСУЛ&raquo;</strong><br /><strong>Адрес:</strong></p>\r\n<p>99055. Украина, г. Севастополь<br />ул. Генерала Острякова 4/21<br /><a href="https://maps.google.ru/maps?q=%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0+4&amp;hl=ru&amp;ie=UTF8&amp;sll=55.354135,40.297852&amp;sspn=12.518162,43.286133&amp;hnear=%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D0%B0+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0,+4,+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0&amp;t=m&amp;z=16" target="_blank">схема проезда</a><a> &raquo;</a></p>\r\n<p><strong>Телефон:</strong> +38 (0692) 65-76-85</p>\r\n<p><strong>Факс:</strong> +38 (0692) 44-82-378</p>\r\n<p><strong>Мобильный:</strong> +38 (050) 393-26-78</p>\r\n<p><strong>E-mail:</strong> <a href="mailto:office@consul-marine.com.ua">office@consul-marine.com.ua</a></p>\r\n<p><strong>Skype:</strong> <a>consul-marine</a></p>', 0, NULL, NULL, NULL, 1, '', NULL),
(58, 35, 'Contacts', '<p><strong>CONSUL CO., LTD</strong></p>\r\n<p><strong>Address:</strong></p>\r\n<p>Ostryakova 4/21<br />Sebastopol, Ukraine, 99055. &nbsp;<br /><a href="https://maps.google.ru/maps?q=%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0+4&amp;hl=ru&amp;ie=UTF8&amp;sll=55.354135,40.297852&amp;sspn=12.518162,43.286133&amp;hnear=%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D0%B0+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0,+4,+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0&amp;t=m&amp;z=16" target="_blank">map &raquo;</a></p>\r\n<p><strong>Phone:</strong> +38 (0692) 65-76-85</p>\r\n<p><strong>Fax:</strong> +38 (0692) 44-82-378<br /> <br /><strong>Phone mobile:</strong> +38 (050) 393-26-78</p>\r\n<p><strong>E-mail:</strong> <a href="mailto:office@consul-marine.com.ua">office@consul-marine.com.ua</a></p>\r\n<p><strong>Skype:</strong> <a>consul-marine</a></p>', 0, NULL, NULL, NULL, 2, '', NULL);
