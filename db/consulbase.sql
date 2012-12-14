-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 14 2012 г., 13:32
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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `consul_dict`
--

INSERT INTO `consul_dict` (`dict_code`, `dict_ru`, `dict_en`) VALUES
(1, 'Главная', 'Main'),
(2, 'O компании', 'About us'),
(3, 'Новости', 'News'),
(4, 'Услуги', 'Service'),
(5, 'Oборудование', 'Equipment'),
(6, 'Партнеры', 'Partners'),
(7, 'Контакты', 'Сontacts'),
(8, 'ООО «ВЭК КОНСУЛ»', 'CONSUL CO., LTD'),
(9, 'Каталог оборудования', 'Equipment catalog'),
(10, 'Новости и события', 'News and events'),
(11, 'Контактная информация', 'Contact Information'),
(12, 'Добро пожаловать', 'Welcome'),
(13, 'Оборудование', 'Equipment'),
(14, 'подробнее', 'details'),
(15, 'Компания "Консул"', '"Consul" Company'),
(16, 'Сообщение успешно отправлено', 'Send success'),
(17, 'Благодарим за интерес к нашим предложениям', 'Thank you for your interest in our proposals'),
(18, 'Отправить сообщение', 'Send message'),
(19, 'Ваше имя', 'Name'),
(20, 'Страна', 'Country'),
(21, 'Телефон', 'Phone'),
(22, 'Сообщение', 'Message'),
(23, 'необходимо заполнить все поля формы', 'fill in all fields'),
(24, 'отправить форму', 'send form');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

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
(24, NULL, 1, 40, '', 15),
(25, NULL, 2, 41, '', 15),
(26, NULL, 1, 42, '', 24),
(27, NULL, 2, 43, '', 24);

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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

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
(15, 'ЦК КПСС', 1, '', 'partner'),
(16, 'Газпром', 1, '', 'partner'),
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
(33, 'КОМПАНИЯ "НАВМАРИН" ЗАВЕРШИЛА РАЗРАБОТКУ И ПРИСТУПИЛА К ВЫПУСКУ ДВУХ МОДЕЛЕЙ КОММУТАТОРОВ СИГНАЛОВ NMEA-СООБЩЕНИЙ NAVCOM BETA-100 И BETA-110', 1, 'http://www.korabel.ru/news/comments/kompaniya_navmarin_zavershila_razrabotku_i_pristupila_k_vipusku_dvuh_modeley_kommutatorov_signalov_nmea-soobshcheniy_navcom_beta-100_i_beta-110.html', 'news'),
(34, 'РАСПРОДАЖА АКСЕССУАРОВ SAILOR 5000 СЕРИИ', 1, 'http://www.korabel.ru/news/comments/rasprodazha_aksessuarov_sailor_5000_serii.html', 'news'),
(35, 'contacts', 1, NULL, 'static'),
(36, 'service', 1, NULL, 'static'),
(37, 'about us', 1, NULL, 'static'),
(38, 'Norwegian Seafood Council', 1, '', 'partner'),
(39, 'main', 1, NULL, 'static'),
(40, 'NAVTEX', 1, '', 'catalog'),
(41, 'Приемники карт погоды', 1, '', 'catalog'),
(42, 'NAVTEX NX-700,”FURUNO”', 1, '', 'catalog'),
(43, 'NAVTEX SNX-300,”SUMYUNG”', 1, '', 'catalog');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `consul_partner`
--

INSERT INTO `consul_partner` (`partner_code`, `partner_pos`, `partner_onmain`, `page_code`, `partner_url`) VALUES
(1, 1, 0, 15, 'http://dic.academic.ru/dic.nsf/bse/148321/%D0%A6%D0%9A'),
(2, 2, 1, 16, 'http://www.gazprom.ru/'),
(3, 3, 1, 38, 'http://en.seafood.no/');

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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=29 ;

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
(18, 6, 'small18.jpg', 'big18.jpg', 1, '', ''),
(19, 36, 'small19.jpg', 'big19.jpg', 1, 'Сертификат 1', 'Sertificate 1'),
(20, 36, 'small20.jpg', 'big20.jpg', 2, 'Сертификат 2', 'Sertificat 2'),
(21, 5, 'small21.jpg', 'big21.jpg', 2, '', ''),
(22, 5, 'small22.jpg', 'big22.jpg', 3, '', ''),
(23, 5, 'small23.jpg', 'big23.jpg', 4, '', ''),
(24, 16, 'small24.jpg', 'big24.jpg', 1, '', ''),
(25, 15, 'small25.jpg', 'big25.jpg', 1, '', ''),
(26, 38, 'small26.jpg', 'big26.jpg', 1, '', ''),
(27, 29, 'small27.jpg', 'big27.jpg', 1, ' Гирокомпас GC 80 Simrad', 'Gyro GC 80 Simrad'),
(28, 30, 'small28.jpg', 'big28.jpg', 1, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=78 ;

--
-- Дамп данных таблицы `consul_static`
--

INSERT INTO `consul_static` (`static_code`, `page_code`, `static_name`, `static_text`, `static_pos`, `static_seo_title`, `static_seo_desc`, `static_seo_key`, `lang_code`, `static_abstract`, `static_url`) VALUES
(12, 2, 'Компания Консул', '<p><span>Компания КОНСУЛ была основано в 2001 году. Деятельность компании основана на использовании новейших технологий в области радиоэлектроники, передовых научных достижений и богатого опыта наших специалистов. Наша философия заключается в гибком подходе к потребностям наших клиентов, высокой ответственности и профессионализме в развитии проектов. Мы дорожим репутацией нашей компании как надежного партнера!</span></p>', 0, 'Страница', 'Описание', 'Ключевые слова', 1, '.mysql_escape_string().', NULL),
(13, 2, 'Consul Company', '<p>CONSUL company was founded in 2001. The company''s activity is based on the latest technology in electronics, advanced scientific knowledge and vast experience of our professionals. Our philosophy is to take a flexible approach to the needs of our customers, high responsibility and professionalism in the development of projects. We value our reputation as a reliable partner!</p>', 0, 'page', 'description', 'keywords', 2, '.mysql_escape_string().', NULL),
(14, 1, 'тест', '<p>Это тест.<img title="Хмурюсь" src="http://localhost/consul/admin/editor/tiny_mce/plugins/emotions/img/smiley-frown.gif" alt="Хмурюсь" border="0" /></p>', 0, 'Тест', 'Тестовое описание', 'тестовые ключевые слова', 1, NULL, NULL),
(15, 1, 'test', '<p>this is test&nbsp;<img title="Краснею" src="http://localhost/consul/admin/editor/tiny_mce/plugins/emotions/img/smiley-embarassed.gif" alt="Краснею" border="0" /></p>', 0, NULL, NULL, NULL, 2, NULL, NULL),
(17, 6, 'Авторулевые', '<p>Авторулевой может производить повороты и изменения курса корабля на заданную ему величину. Как только от датчика авторулевого поступает сигнал,&nbsp;<a class="new" title="Рулевой привод (страница отсутствует)" href="http://ru.wikipedia.org/w/index.php?title=%D0%A0%D1%83%D0%BB%D0%B5%D0%B2%D0%BE%D0%B9_%D0%BF%D1%80%D0%B8%D0%B2%D0%BE%D0%B4&amp;action=edit&amp;redlink=1">рулевой привод</a>&nbsp;перекладывает руль на заданный угол в сторону, которая противоположна уходу корабля с курса. Как только начинает возвращаться на прежний курс, авторулевой отводит руль, а потом, удерживая его, перекладывает руль в сторону, противоположную прежней стороне. Автоматический режим&nbsp;&mdash; основной режим работы авторулевого<sup id="cite_ref-sudno1_0-1" class="reference"><a href="http://ru.wikipedia.org/wiki/%D0%90%D0%B2%D1%82%D0%BE%D1%80%D1%83%D0%BB%D0%B5%D0%B2%D0%BE%D0%B9#cite_note-sudno1-0">[1]</a></sup>.</p>\r\n<p>В нормальных условиях плавания корабль обычно &laquo;рыскает&raquo; в правую и левую стороны на одинаковое число градусов. Зато в других условиях плавания есть случаи несимметричного &laquo;рысканья&raquo;. Например, когда шторм и качка на волнении, и когда корабль непрерывно &laquo;рыскает&raquo; в правую и левую стороны на одинаковое число градусов, авторулевой имеет на этот случай регулировку его чувствительности для того, чобы изменить курса от &laquo;рысканья&raquo;. Эта регулировка позволяет кораблю в шторм делать небольшие отклонения от заданного курса. Наиболее распространён такой тип авторулевого, который устанавливается на судах, имеющих средний и крупного тоннаж. Этот тип называется автоматическим бесконтактным рулевым (АБР). Основной прибор такого авторулевого&nbsp;&mdash; пульт управления&nbsp;&mdash; устанавливают в<a title="Рулевая рубка" href="http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%8F_%D1%80%D1%83%D0%B1%D0%BA%D0%B0">рулевой рубке</a><sup id="cite_ref-sudno1_0-2" class="reference"><a href="http://ru.wikipedia.org/wiki/%D0%90%D0%B2%D1%82%D0%BE%D1%80%D1%83%D0%BB%D0%B5%D0%B2%D0%BE%D0%B9#cite_note-sudno1-0">[1]</a></sup>.</p>', 0, NULL, NULL, NULL, 1, '<p><span>Авторулевой может производить повороты и изменения курса корабля на заданную ему величину. Как только от датчика авторулевого поступает сигнал,&nbsp;</span><a class="new" title="Рулевой привод (страница отсутствует)" href="http://ru.wikipedia.org/w/index.php?title=%D0%A0%D1%83%D0%BB%D0%B5%D0%B2%D0%BE%D0%B9_%D0%BF%D1%80%D0%B8%D0%B2%D0%BE%D0%B4&amp;action=edit&amp;redlink=1">рулевой привод</a><span>&nbsp;перекладывает руль на заданный угол в сторону, которая противоположна уходу корабля с курса. Как только начинает возвращаться на прежний курс, авторулевой отводит руль, а потом, удерживая его, перекладывает руль в сторону, противоположную прежней стороне. Автоматический режим&nbsp;&mdash; основной режим работы авторулевого</span></p>', NULL),
(18, 6, 'Autopilots', '<p>Autopilot can make turns and changes of a ship to a request for quantity. As soon as the sensor signal autopilot, steering wheel shifts at a given angle to the side, which is opposite to the care of the ship course. Just when back on track, autopilot removes the steering wheel, and then hold it shifts the steering wheel in the opposite side of the same. Auto mode - the main mode of the autopilot.&nbsp;<br />Under normal sailing conditions usually ship "prowl" in the right and left sides of the same number of degrees. But in other cases there is sailing conditions unbalanced "yaw". For example, when a storm rolling in rough seas, and when the ship was constantly "prowl" in the right and left sides of the same number of degrees, the autopilot is in this case adjust its sensitivity in order to change the course of choby "yaw". This adjustment allows the ship in a storm to make small deviations from the desired course. The most common type is an autopilot, which is installed in ships of medium and large tonnage. This type is called a non-contact automatic steering (ADB). The main instrument of the autopilot - control panel - mounted in the wheelhouse.</p>', 0, NULL, NULL, NULL, 2, '<p>Autopilot can make turns and changes of a ship to a request for quantity. As soon as the sensor signal autopilot, steering wheel shifts at a given angle to the side, which is opposite to the care of the ship course. Just when back on track, autopilot removes the steering wheel, and then hold it shifts the steering wheel in the opposite side of the same. Auto mode - the main mode of the autopilot.&nbsp;</p>', NULL),
(23, 7, 'АРБ, РЛО, УКВ-носимые', '<p><strong>Аварийный радиобуй</strong>&nbsp;(<a title="Английский язык" href="http://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA">англ.</a>&nbsp;<em><span lang="en" xml:lang="en">EPIRB, Emergency Position Indicating Radio Beacon</span></em>) &mdash; передатчик для подачи сигнала бедствия и пеленгации поисково-спасательными силами терпящих бедствие плавсредств, летательных аппаратов (<a title="Английский язык" href="http://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA">англ.</a>&nbsp;<em><span lang="en" xml:lang="en">ELТ, emergency locator transmitter</span></em>) и персон (PLT, Personal locator transmitter) на суше и на море. Аварийные радиобуи являются обязательным компонентом&nbsp;<a title="ГМССБ" href="http://ru.wikipedia.org/wiki/%D0%93%D0%9C%D0%A1%D0%A1%D0%91">ГМССБ</a>.</p>\r\n<p>Морской аварийный радиобуй обычно хранится в двустворчатом контейнере, закрепленном на одной из верхних палуб судна так, чтобы над ним ничего не было мешающего всплытию. Половинки контейнера скреплены чекой с&nbsp;<a class="new" title="Баростат (page does not exist)" href="http://ru.wikipedia.org/w/index.php?title=%D0%91%D0%B0%D1%80%D0%BE%D1%81%D1%82%D0%B0%D1%82&amp;action=edit&amp;redlink=1">баростатом</a>, который перерубает чеку на глубине 6-7 метров при затоплении гибнущего судна. Под действием плоской выталкивающей пружины в контейнере, радиобуй выталкивается наружу, а внешняя створка контейнера отбрасывается. Распрямляется сложенная вдвое гибкая антенна радиобуя, и буй, обладающий положительной плавучестью, всплывает на поверхность. Одновременно с этим, вода (неважно - морская или пресная) замыкает 2 контакта в нижней части буя, в резутьтате чего буй получает команду начала передачи сигналов бедствия.</p>\r\n<p>Есть возможность и ручного приведения радиобуя в действие: для этого надо выдернув чеку, достать буй из контейнера, и включить его с помощью влагозащищенного выключателя на верхней его части, после чего его можно оставить на судне, либо взять в спасательную шлюпку, либо бросить в воду. Радиобуй оснащается штатно проблесковым маячком белого цвета, современные радиобуи имеют влагозащищенный датчик освещенности, позволяющий экономить батареи отключением его в дневное время. Также, каждый радиобуй программируется (обычно через влагозащищенный IR-порт): вносится имя судна, его номер и многое другое.</p>\r\n<p>Существует 1-минутная задержка на начало передачи сигнала бедствия, до этого сигнал передается в тестовом режиме (этот режим используется для проверки работоспособности буя специальным тестером.) После этого буй начинает подавать сигнал бедствия в штатном режиме, а наземные службы спасения обязаны отреагировать на этот сигнал.</p>\r\n<p>Не существует способа отмены посланного сигнала бедствия посредством радиобуя, выключение или пропадение сигнала не отменяет поданный сигнал.</p>', 0, NULL, NULL, NULL, 1, '<p><strong>Аварийный радиобуй</strong><span>&nbsp;(</span><a title="Английский язык" href="http://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA">англ.</a><span>&nbsp;</span><em><span lang="en" xml:lang="en">EPIRB, Emergency Position Indicating Radio Beacon</span></em><span>) &mdash; передатчик для подачи сигнала бедствия и пеленгации поисково-спасательными силами терпящих бедствие плавсредств, летательных аппаратов (</span><a title="Английский язык" href="http://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA">англ.</a><span>&nbsp;</span><em><span lang="en" xml:lang="en">ELТ, emergency locator transmitter</span></em><span>) и персон (PLT, Personal locator transmitter) на суше и на море. Аварийные радиобуи являются обязательным компонентом&nbsp;</span><a title="ГМССБ" href="http://ru.wikipedia.org/wiki/%D0%93%D0%9C%D0%A1%D0%A1%D0%91">ГМССБ</a><span>.</span></p>', '../files/Copy of Invoice - Professional (Cool).gdoc'),
(24, 7, 'EPIRB, SART, VHF portable', '<p>Emergency beacon (English EPIRB, Emergency Position Indicating Radio Beacon) - transmitter to signal distress and direction-finding search and rescue forces distressed vessels, aircraft (English ELT, emergency locator transmitter) and persons (PLT, Personal locator transmitter) on land and at sea. Emergency beacons are an essential component of GMDSS.<br />Maritime emergency beacon is typically stored in bivalve container, fixed on one of the upper decks of the ship, so that anything to him was not interfering ascents. Container halves are fastened with cotter barostat which pererubaet check at a depth of 6-7 meters at flooding the sinking ship. Under the action of the spring in a plane buoyant container beacon pushed out, and the outer leaf container is discarded. Folded in half straighten flexible antenna beacon and buoy with positive buoyancy to the surface. At the same time, water (it does not matter - the sea or fresh) closes the 2 pins on the bottom of the buoy to buoy rezuttate which receives an early signal of distress.<br />It is possible to manually align and Beacon in action: to do this, pulling out a check, get a buoy from the container, and include it with waterproof switch on the upper part of it, then it can be left on the ship, or take in a lifeboat, or thrown into the water . Normally equipped with a beacon flashing light white, modern beacons are waterproof light sensor that saves battery disconnect it in the daytime. Also, each beacon is programmed (usually waterproof IR-port): the name of the vessel entered his room, and more.<br />There is a 1-minute delay at the beginning of Distress, before the signal is transmitted in test mode (this mode is used for testing the buoy special tester.) Then buoy starts sounding a distress signal in the normal mode, and ground rescue services must respond to this signal .<br />There is no way to cancel the distress signal sent by the beacon signal off or propadenie not cancel beeps.</p>', 0, NULL, NULL, NULL, 2, '<p>Emergency beacon (English EPIRB, Emergency Position Indicating Radio Beacon) - transmitter to signal distress and direction-finding search and rescue forces distressed vessels, aircraft (English ELT, emergency locator transmitter) and persons (PLT, Personal locator transmitter) on land and at sea. Emergency beacons are an essential component of GMDSS.</p>', NULL),
(27, 19, 'Гирокомпасы', '<p><strong>Гироко&#769;мпас</strong>&nbsp;(в морском профессиональном жаргоне&nbsp;&mdash; гирокомпа&#769;с)&nbsp;&mdash; механический указатель направления истинного (географического)&nbsp;<a title="Меридиан" href="http://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D1%80%D0%B8%D0%B4%D0%B8%D0%B0%D0%BD">меридиана</a>, предназначенный для определения курса объекта, а также&nbsp;<a title="Азимут (геодезия)" href="http://ru.wikipedia.org/wiki/%D0%90%D0%B7%D0%B8%D0%BC%D1%83%D1%82_(%D0%B3%D0%B5%D0%BE%D0%B4%D0%B5%D0%B7%D0%B8%D1%8F)">азимута</a>&nbsp;(пеленга) ориентируемого направления. Принцип действия гирокомпаса основан на использовании свойств&nbsp;<a title="Гироскоп" href="http://ru.wikipedia.org/wiki/%D0%93%D0%B8%D1%80%D0%BE%D1%81%D0%BA%D0%BE%D0%BF">гироскопа</a>&nbsp;и&nbsp;<a title="Суточное вращение Земли" href="http://ru.wikipedia.org/wiki/%D0%A1%D1%83%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B5_%D0%B2%D1%80%D0%B0%D1%89%D0%B5%D0%BD%D0%B8%D0%B5_%D0%97%D0%B5%D0%BC%D0%BB%D0%B8">суточного вращения Земли</a>. Его идея была предложена французским учёным&nbsp;<a class="mw-redirect" title="Леон Фуко" href="http://ru.wikipedia.org/wiki/%D0%9B%D0%B5%D0%BE%D0%BD_%D0%A4%D1%83%D0%BA%D0%BE">Фуко</a>.</p>\r\n<p>Гирокомпасы широко применяются в&nbsp;<a title="Морская навигация" href="http://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B0%D0%B2%D0%B8%D0%B3%D0%B0%D1%86%D0%B8%D1%8F">морской навигации</a>&nbsp;и&nbsp;<a class="mw-redirect" title="Ракетная техника" href="http://ru.wikipedia.org/wiki/%D0%A0%D0%B0%D0%BA%D0%B5%D1%82%D0%BD%D0%B0%D1%8F_%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0">ракетной технике</a>. Они имеют два важных преимущества перед&nbsp;<a class="mw-redirect" title="Магнитный компас" href="http://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D1%82%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D1%81">магнитными компасами</a>:</p>\r\n<ul>\r\n<li>они показывают направление на&nbsp;<a class="mw-redirect" title="Географические полюсы" href="http://ru.wikipedia.org/wiki/%D0%93%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D0%BF%D0%BE%D0%BB%D1%8E%D1%81%D1%8B">истинный полюс</a>, то есть на ту точку, через которую проходит ось вращения Земли, в то время как магнитный компас указывает направление на&nbsp;<a title="Северный магнитный полюс" href="http://ru.wikipedia.org/wiki/%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D0%B3%D0%BD%D0%B8%D1%82%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BE%D0%BB%D1%8E%D1%81">магнитный полюс</a>;</li>\r\n<li>они гораздо менее чувствительны к внешним&nbsp;<a title="Магнитное поле" href="http://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D1%82%D0%BD%D0%BE%D0%B5_%D0%BF%D0%BE%D0%BB%D0%B5">магнитным полям</a>, например, тем полям, которые создаются&nbsp;<a class="mw-redirect" title="Ферромагнит" href="http://ru.wikipedia.org/wiki/%D0%A4%D0%B5%D1%80%D1%80%D0%BE%D0%BC%D0%B0%D0%B3%D0%BD%D0%B8%D1%82">ферромагнитными</a>&nbsp;деталями корпуса&nbsp;<a title="Судно" href="http://ru.wikipedia.org/wiki/%D0%A1%D1%83%D0%B4%D0%BD%D0%BE">судна</a>.</li>\r\n</ul>', 0, NULL, NULL, NULL, 1, '<p><strong>Гироко&#769;мпас</strong>&nbsp;(в морском профессиональном жаргоне&nbsp;&mdash; гирокомпа&#769;с)&nbsp;&mdash; механический указатель направления истинного (географического)&nbsp;<a title="Меридиан" href="http://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D1%80%D0%B8%D0%B4%D0%B8%D0%B0%D0%BD">меридиана</a>, предназначенный для определения курса объекта, а также&nbsp;<a title="Азимут (геодезия)" href="http://ru.wikipedia.org/wiki/%D0%90%D0%B7%D0%B8%D0%BC%D1%83%D1%82_(%D0%B3%D0%B5%D0%BE%D0%B4%D0%B5%D0%B7%D0%B8%D1%8F)">азимута</a>&nbsp;(пеленга) ориентируемого направления. Принцип действия гирокомпаса основан на использовании свойств&nbsp;<a title="Гироскоп" href="http://ru.wikipedia.org/wiki/%D0%93%D0%B8%D1%80%D0%BE%D1%81%D0%BA%D0%BE%D0%BF">гироскопа</a>&nbsp;и&nbsp;<a title="Суточное вращение Земли" href="http://ru.wikipedia.org/wiki/%D0%A1%D1%83%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B5_%D0%B2%D1%80%D0%B0%D1%89%D0%B5%D0%BD%D0%B8%D0%B5_%D0%97%D0%B5%D0%BC%D0%BB%D0%B8">суточного вращения Земли</a>. Его идея была предложена французским учёным&nbsp;<a class="mw-redirect" title="Леон Фуко" href="http://ru.wikipedia.org/wiki/%D0%9B%D0%B5%D0%BE%D0%BD_%D0%A4%D1%83%D0%BA%D0%BE">Фуко</a>.</p>\r\n<p>&nbsp;</p>', NULL),
(28, 19, 'Gyrocompasses', '<p>Gyro - Mechanical indication of direction of true (geographic) meridian, designed to determine the course of the object, and the azimuth (bearing)-oriented direction. The principle of operation is based on a gyro properties gyroscope and rotation of the earth. His idea was first proposed by the French scientist Foucault.<br />Gyrocompasses widely used in marine navigation and missile technology. They have two important advantages over magnetic compasses:<br />they show the direction of the true pole, that is, the point through which the axis of rotation of the Earth, while the magnetic compass indicates the direction of the magnetic pole;<br />they are much less sensitive to external magnetic fields, for example, the fields that are ferromagnetic parts of the hull.</p>', 0, NULL, NULL, NULL, 2, '<p>Gyro - Mechanical indication of direction of true (geographic) meridian, designed to determine the course of the object, and the azimuth (bearing)-oriented direction. The principle of operation is based on a gyro properties gyroscope and rotation of the earth. His idea was first proposed by the French scientist Foucault.</p>', NULL),
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
(53, 33, 'Новое оборудование от NavCom', '<p><span>Коммутаторы NavCom Beta-100 и Beta-110 найдут широкое применение на судах морского и речного флота в качестве устройств, предназначенных для сбора информационных посылок с установленного на борту навигационного и другого оборудования с последующей передачей данных на единое устройство обработки и вывода информации. Также устройства могут использоваться при организации резервных систем отображения информации на мостике, за счёт наличия функции распараллеливания сообщений в стандарте IEC 61162-1 (NMEA 0183 версия 1.5/2.0) со скоростью следования от 4800 бит/сек. до 38400 бит/сек.</span><br /><br /><span>Существует множество вариантов использования коммутаторов NavCom Beta. Например, при подаче сигнала на коммутатор с различных внешних устройств (приёмоиндикатор ГНСС ГЛОНАСС/GPS, система АИС, эхолот, компас, метеостанция и др.) появляется возможность вывода информации от них на один общий терминал (ЭКНИС/СОЭНКИ/ЭКС, ПК и др.), что, в свою очередь, позволяет оптимизировать процесс судовождения для капитанов судов как с точки зрения удобства навигации, так и повышения уровня безопасности.</span><br /><br /><span>При необходимости организации резервного поста отображения навигационной информации на мостике судна коммутаторы NavCom Beta позволяют дублировать сигналы от внешних устройств на резервную систему. При этом источниками информации могут являться различные виды судового навигационного оборудования, имеющие в своём составе устройства ввода/вывода информации в едином стандарте NMEA, с которыми полностью совместимы коммутаторы NavCom Beta.</span></p>\r\n<div align="center"><img src="http://www.navmarine.ru/images/16_11_12.jpg" alt="" /></div>', 0, NULL, NULL, NULL, 1, '<p><span>Компания НавМарин завершила разработку и приступила к выпуску нового оборудования под торговой маркой NavCom - коммутаторов сигналов NMEA-сообщений&nbsp;</span><strong><a href="http://navcom.ru/index.php?GID=84" target="_blank">NavCom Beta-100</a></strong><span>&nbsp;и&nbsp;</span><strong><a href="http://navcom.ru/index.php?GID=85" target="_blank">NavCom Beta-110</a></strong><span>.</span></p>', NULL),
(54, 33, 'Navcom brand news', '<p>Switches NavCom Beta-Beta-100 and 110 will be widely used in ships of sea and river fleet as devices designed to collect information from the installed packages on board navigation and other equipment in connection with the transfer of data to a single unit of processing and output. Also, the device can be used in the organization of backup systems to display information on the bridge, by the presence of the functions in the standard parallel communications IEC 61162-1 (NMEA 0183 version 1.5/2.0) at repetition of 4800 bits / sec. up to 38400 bits / sec.</p>\r\n<p>There are a variety of switches NavCom Beta. For example, if a signal is applied to the switch from a variety of external devices (receiver-GLONASS / GPS, AIS system, depth sounder, compass, weather station, etc.) it is possible to display information from them on a common terminal (ECDIS / ECDIS / ECS, PC, etc .), which, in turn, allows to optimize the process of navigation for ships'' masters, both in terms of ease of navigation, and improve safety.</p>\r\n<p>If necessary, the organization backing the post displaying navigation information on the bridge of the ship switches NavCom Beta allow duplicate signals from external devices to the backup system. The source of information may include various types of marine navigation equipment, which have in their composition of the input / output information to a single standard NMEA, which are fully compatible switches NavCom Beta.</p>\r\n<p><img src="http://www.navmarine.ru/images/16_11_12.jpg" alt="" /></p>', 0, NULL, NULL, NULL, 2, '<p>Company NavMarin finalized and launched its new equipment under the brand name NavCom - switch signals soobscheniyNavCom NMEA-Beta-100 NavCom Beta-110.</p>', NULL),
(55, 34, 'ACCESSORIES SALE SAILOR 5000 Series', '<p><span data-mce-mark="1">ВIn connection with the start of deliveries Sailor 6000 Series and with the removal of a Sailor 5000 Series production company Telemar Russia to inform you that in the period from 12 March 2012 until the end of availability of goods in a warehouse in St. Petersburg, will be held on Sale accessories Sailor 5000 Series:</span></p>\r\n<table class="koTable" style="width: 73%;" border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403606E-003</td>\r\n<td nowrap="nowrap">Opt. NMEA Adapter / NMEA адаптер</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">8050080006</td>\r\n<td nowrap="nowrap">EB5008 Extension Box for RT5022/RT5020 / Расширительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050090006</td>\r\n<td nowrap="nowrap">CB5009 Connection Box for RT5022/RT5020 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">402049A</td>\r\n<td nowrap="nowrap">SAILOR H2049A VDR Connection Boks for RT2048 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050000009</td>\r\n<td nowrap="nowrap">SAILOR CU5000 Semi-intelligent control unit, Blue, incl. handset, cable and mounting kit<br />Блок дистанционного управления</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">739814</td>\r\n<td nowrap="nowrap">Flush mounting kit for RT5022/RT5020</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">405070A</td>\r\n<td nowrap="nowrap">SAILOR 5070 Loudspeaker</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">405100-920</td>\r\n<td nowrap="nowrap">CU5100 Opt. 920 Panel Mounting Kit&nbsp;</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">401701A</td>\r\n<td nowrap="nowrap">Shunt Box complete&nbsp;</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">403616D</td>\r\n<td nowrap="nowrap">TT-3616D Interconnection Box&nbsp;</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403026-101</td>\r\n<td nowrap="nowrap">1&rdquo; Pole mount kit&nbsp;</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">80465611</td>\r\n<td nowrap="nowrap">SAILOR CH4656 Battery charger 24V/10A, black&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, NULL, NULL, NULL, 2, '<p>In connection with the start of deliveries Sailor 6000 Series and with the removal of a Sailor 5000 Series production company Telemar Russia to inform you that in the period from 12 March 2012 until the end of availability of goods in a warehouse in St. Petersburg, will be held on Sale accessories Sailor 5000 Series</p>', NULL),
(56, 34, 'РАСПРОДАЖА АКСЕССУАРОВ SAILOR 5000 СЕРИИ', '<p><span>В связи с началом поставок&nbsp;&nbsp;Sailor&nbsp;6000 Серии и со снятием с производства&nbsp;Sailor&nbsp;5000 Серии компания Телемар Россия информирует вас, что в период с 12 марта 2012 года до окончания наличия товара на складе в Санкт-Петербурге, будет проходить распродажа аксессуаров&nbsp;Sailor&nbsp;5000 Серии:&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<table class="koTable" style="width: 73%;" border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403606E-003</td>\r\n<td nowrap="nowrap">Opt. NMEA Adapter / NMEA адаптер</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">8050080006</td>\r\n<td nowrap="nowrap">EB5008 Extension Box for RT5022/RT5020 / Расширительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050090006</td>\r\n<td nowrap="nowrap">CB5009 Connection Box for RT5022/RT5020 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">402049A</td>\r\n<td nowrap="nowrap">SAILOR H2049A VDR Connection Boks for RT2048 / Соединительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">8050000009</td>\r\n<td nowrap="nowrap">SAILOR CU5000 Semi-intelligent control unit, Blue, incl. handset, cable and mounting kit<br />Блок дистанционного управления</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">739814</td>\r\n<td nowrap="nowrap">Flush mounting kit for RT5022/RT5020 / Монтажная рамка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">405070A</td>\r\n<td nowrap="nowrap">SAILOR 5070 Loudspeaker / Громкоговоритель</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">405100-920</td>\r\n<td nowrap="nowrap">CU5100 Opt. 920 Panel Mounting Kit / Кронштейн панельного монтажа</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">401701A</td>\r\n<td nowrap="nowrap">Shunt Box complete / &nbsp;Шунтирующая коробка</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">403616D</td>\r\n<td nowrap="nowrap">TT-3616D Interconnection Box / Cоединительная коробка</td>\r\n</tr>\r\n<tr class="odd">\r\n<td nowrap="nowrap">403026-101</td>\r\n<td nowrap="nowrap">1&rdquo; Pole mount kit / Трубный кронштейн 1"</td>\r\n</tr>\r\n<tr class="even">\r\n<td nowrap="nowrap">80465611</td>\r\n<td nowrap="nowrap">SAILOR CH4656 Battery charger 24V/10A, black / Автоматическое зарядное устройство</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, NULL, NULL, NULL, 1, '<p><span>В связи с началом поставок&nbsp;&nbsp;Sailor&nbsp;6000 Сериина складе в Санкт-Петербурге, будет проходить распродажа аксессуаров&nbsp;Sailor&nbsp;5000 Серии:&nbsp;</span></p>', NULL),
(57, 35, 'Контактная информация', '<p><strong>ООО &laquo;ВЭК КОНСУЛ&raquo;</strong><br /><strong>Адрес:</strong></p>\r\n<p>99055. Украина, г. Севастополь<br />ул. Генерала Острякова 4/21<br /><a href="https://maps.google.ru/maps?q=%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0+4&amp;hl=ru&amp;ie=UTF8&amp;sll=55.354135,40.297852&amp;sspn=12.518162,43.286133&amp;hnear=%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D0%B0+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0,+4,+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0&amp;t=m&amp;z=16" target="_blank">схема проезда</a><a> &raquo;</a></p>\r\n<p><strong>Телефон:</strong> +38 (0692) 65-76-85</p>\r\n<p><strong>Факс:</strong> +38 (0692) 44-82-378</p>\r\n<p><strong>Мобильный:</strong> +38 (050) 393-26-78</p>\r\n<p><strong>E-mail:</strong> <a href="mailto:office@consul-marine.com.ua">office@consul-marine.com.ua</a></p>\r\n<p><strong>Skype:</strong> <a>consul-marine</a></p>', 0, NULL, NULL, NULL, 1, '', NULL),
(58, 35, 'Contacts', '<p><strong>CONSUL CO., LTD</strong></p>\r\n<p><strong>Address:</strong></p>\r\n<p>Ostryakova 4/21<br />Sebastopol, Ukraine, 99055. &nbsp;<br /><a href="https://maps.google.ru/maps?q=%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0+4&amp;hl=ru&amp;ie=UTF8&amp;sll=55.354135,40.297852&amp;sspn=12.518162,43.286133&amp;hnear=%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D0%B0+%D0%9E%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D0%B0,+4,+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0&amp;t=m&amp;z=16" target="_blank">map &raquo;</a></p>\r\n<p><strong>Phone:</strong> +38 (0692) 65-76-85</p>\r\n<p><strong>Fax:</strong> +38 (0692) 44-82-378<br /> <br /><strong>Phone mobile:</strong> +38 (050) 393-26-78</p>\r\n<p><strong>E-mail:</strong> <a href="mailto:office@consul-marine.com.ua">office@consul-marine.com.ua</a></p>\r\n<p><strong>Skype:</strong> <a>consul-marine</a></p>', 0, NULL, NULL, NULL, 2, '', NULL),
(59, 36, 'Услуги компании Консул', '<p><span>Мы постоянно расширяем спектр предлагаемых услуг и ассортимент всех видов товара, но принцип нашей работы остается неизменным: долгосрочные и взаимовыгодные отношения со всеми нынешними и будущими клиентами, так же осуществляется индивидуальный подход.</span><span><br /><br /><br /></span></p>', 0, NULL, NULL, NULL, 1, '', NULL),
(60, 36, 'Consul Company service', '<p>We are constantly expanding the range of services and range of all kinds of goods, but the principle of our work is the same: long-term and mutually beneficial relationships with all current and future customers, as well an individual approach.</p>', 0, NULL, NULL, NULL, 2, '', NULL),
(61, 37, 'О нас', '<p>Компания КОНСУЛ была основано в 2001 году. Деятельность компании основана на использовании новейших технологий в области радиоэлектроники, передовых научных достижений и богатого опыта наших специалистов. Наша философия заключается в гибком подходе к потребностям наших клиентов, высокой ответственности и профессионализме в развитии проектов. Мы дорожим репутацией нашей компании как надежного партнера!</p>', 0, 'Компания Консул', 'Компания Консул', 'Компания Консул электрооборудование суда', 1, '', NULL),
(62, 37, 'about us', '<p>CONSUL company was founded in 2001. The company''s activity is based on the latest technology in electronics, advanced scientific knowledge and vast experience of our professionals. Our philosophy is to take a flexible approach to the needs of our customers, high responsibility and professionalism in the development of projects. We value our reputation as a reliable partner!</p>', 0, 'Consul company', 'Consul Company Sebastopol', 'Consul company Sebastopol sea equipment', 2, '', NULL),
(63, 38, 'Norwegian Seafood Council', '', 0, NULL, NULL, NULL, 1, '<p><span>Норвежский совет по морепродуктов представлена &#8203;&#8203;в 13 странах.&nbsp;</span><span class="goog-text-highlight">В большинстве из этих рынков НСК использовать собственные веб-сайты потребителя как часть комплекса маркетинга СМИ.&nbsp;</span><span><br /></span></p>', NULL),
(64, 38, 'Norwegian Seafood Council', '', 0, NULL, NULL, NULL, 2, '<p><span>The Norwegian Seafood Council is represented in 13 markets. In most of these markets NSC use own consumer websites as part of the marketing media mix. This article contains a list of all consumer websites.</span></p>', NULL),
(65, 16, 'Газпром', '', 0, NULL, NULL, NULL, 1, '<p><strong>ОАО &laquo;Газпро&#769;м&raquo;</strong><span>&nbsp;&mdash;&nbsp;</span><a title="Россия" href="http://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F">российская</a><span>&nbsp;энергетическая компания, занимающаяся геологоразведкой, добычей, транспортировкой, хранением, переработкой и реализацией газа, газового конденсата и нефти, а также производством и сбытом тепло- и электроэнергии. Крупнейшая компания в&nbsp;</span><a title="Россия" href="http://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F">России</a><span>&nbsp;(</span><a class="mw-redirect" title="Список крупнейших компаний России журнала &laquo;Эксперт&raquo;" href="http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BA%D1%80%D1%83%D0%BF%D0%BD%D0%B5%D0%B9%D1%88%D0%B8%D1%85_%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B9_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8_%D0%B6%D1%83%D1%80%D0%BD%D0%B0%D0%BB%D0%B0_%C2%AB%D0%AD%D0%BA%D1%81%D0%BF%D0%B5%D1%80%D1%82%C2%BB">по данным журнала &laquo;Эксперт&raquo;</a><span>)</span><sup id="cite_ref-exp1_1-0" class="reference"><a href="http://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%B7%D0%BF%D1%80%D0%BE%D0%BC#cite_note-exp1-1">[1]</a></sup><span>, крупнейшая газовая компания мира, владеет самой протяжённой&nbsp;</span><a class="new" title="Газотранспортная система (страница отсутствует)" href="http://ru.wikipedia.org/w/index.php?title=%D0%93%D0%B0%D0%B7%D0%BE%D1%82%D1%80%D0%B0%D0%BD%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0&amp;action=edit&amp;redlink=1">газотранспортной системой</a><span>&nbsp;(более 160 000 км)</span><sup id="cite_ref-2" class="reference"><a href="http://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%B7%D0%BF%D1%80%D0%BE%D0%BC#cite_note-2">[2]</a></sup><span>. Является мировым лидером отрасли</span><sup id="cite_ref-3" class="reference"><a href="http://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%B7%D0%BF%D1%80%D0%BE%D0%BC#cite_note-3">[3]</a></sup><span>. Согласно списку</span><a title="Forbes Global 2000" href="http://ru.wikipedia.org/wiki/Forbes_Global_2000">Forbes Global 2000</a><span>&nbsp;(</span><a title="2012 год" href="http://ru.wikipedia.org/wiki/2012_%D0%B3%D0%BE%D0%B4">2012 год</a><span>), &laquo;Газпром&raquo; по выручке занимает 15-е место среди мировых компаний</span><sup id="cite_ref-4" class="reference"><a href="http://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%B7%D0%BF%D1%80%D0%BE%D0%BC#cite_note-4">[4]</a></sup><span>. Согласно рейтингу журнала Forbes, &laquo;Газпром&raquo; по итогам 2011 года стал самой прибыльной компанией мира</span></p>', NULL);
INSERT INTO `consul_static` (`static_code`, `page_code`, `static_name`, `static_text`, `static_pos`, `static_seo_title`, `static_seo_desc`, `static_seo_key`, `lang_code`, `static_abstract`, `static_url`) VALUES
(66, 16, 'Gazprom', '', 0, NULL, NULL, NULL, 2, '<p>"Gazprom" - Russian energy company engaged in exploration, production, transportation, storage, processing and marketing of gas, gas condensate and oil, as well as the production and marketing of heat and electric power. The largest company in Russia (according to the "Expert") [1], the largest gas company in the world, has the most extensive transmission system (more than 160 000 km). [2] Is a world leader in the industry. [3] According to the list of Forbes Global 2000 (2012 year), "Gazprom" for revenue ranks 15th among the world''s companies. [4] According to the rating of Forbes, &laquo;Gazprom&raquo; in 2011 has become the most profitable company in the world</p>', NULL),
(67, 15, 'ЦК КПСС', '', 0, NULL, NULL, NULL, 1, '<p><strong>Центральный комитет&nbsp;<a title="Коммунистическая партия Советского Союза" href="http://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BC%D0%BC%D1%83%D0%BD%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BF%D0%B0%D1%80%D1%82%D0%B8%D1%8F_%D0%A1%D0%BE%D0%B2%D0%B5%D1%82%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D0%A1%D0%BE%D1%8E%D0%B7%D0%B0">Коммунистической партии Советского Союза</a></strong><span>&nbsp;(до весны&nbsp;</span><a class="mw-redirect" title="1917" href="http://ru.wikipedia.org/wiki/1917">1917</a><span>: ЦК РСДРП;&nbsp;</span><a class="mw-redirect" title="1917" href="http://ru.wikipedia.org/wiki/1917">1917</a><span>&mdash;</span><a class="mw-redirect" title="1918" href="http://ru.wikipedia.org/wiki/1918">1918</a><span>&nbsp;ЦК РСДРП(б);</span><a class="mw-redirect" title="1918" href="http://ru.wikipedia.org/wiki/1918">1918</a><span>&mdash;</span><a class="mw-redirect" title="1925" href="http://ru.wikipedia.org/wiki/1925">1925</a><span>&nbsp;ЦК РКП(б);&nbsp;</span><a class="mw-redirect" title="1925" href="http://ru.wikipedia.org/wiki/1925">1925</a><span>&mdash;</span><a class="mw-redirect" title="1952" href="http://ru.wikipedia.org/wiki/1952">1952</a><span>&nbsp;ЦК ВКП(б))&nbsp;&mdash; высший партийный орган в промежутках между съездами партии. Наибольший по численности состав ЦК КПСС (412 членов) был избран на&nbsp;</span><a title="XXVIII съезд КПСС" href="http://ru.wikipedia.org/wiki/XXVIII_%D1%81%D1%8A%D0%B5%D0%B7%D0%B4_%D0%9A%D0%9F%D0%A1%D0%A1">XXVIII съезде КПСС</a></p>', NULL),
(68, 15, 'CC CPSU', '', 0, NULL, NULL, NULL, 2, '<p>The Central Committee of the Communist Party of the Soviet Union (until the spring of 1917: the CC, 1917-1918 RSDLP (b), 1918-1925 RCP (b), 1925-1952 Central Committee of the CPSU (b)) - the highest party organ in between Congresses . The largest in size of the Central Committee of the CPSU (412 members) was elected to the XXVIII Congress of the CPSU</p>', NULL),
(69, 39, '', '', 0, 'Компания Консул. Главная страница', 'Компания Консул специализируется на продаже морского электрооборудования', 'Консул компания Севастополь электрооборудование суда', 1, NULL, NULL),
(70, 39, '', '', 0, 'Consul Company. Main Page', 'Consul company', 'Consul sea ship', 2, NULL, NULL),
(71, 42, 'NAVTEX NX-700,”FURUNO”', '', 0, NULL, NULL, NULL, 1, '<p>1111</p>', NULL),
(72, 43, 'NAVTEX SNX-300,”SUMYUNG”', '', 0, NULL, NULL, NULL, 1, '<p>2222</p>', NULL),
(73, 43, 'NAVTEX SNX-300,”SUMYUNG”', '', 0, NULL, NULL, NULL, 2, '', NULL),
(74, 40, 'NAVTEX', '', 0, NULL, NULL, NULL, 1, '', NULL),
(75, 40, 'NAVTEX', '', 0, NULL, NULL, NULL, 2, '', NULL),
(76, 41, 'Приемники карт погоды', '', 0, NULL, NULL, NULL, 1, '', NULL),
(77, 41, 'Приемники карт погоды', '', 0, NULL, NULL, NULL, 2, '', NULL);
