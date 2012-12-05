-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 04 2012 г., 11:42
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
  `dict_ru` varchar(250) DEFAULT NULL,
  `dict_en` varchar(250) NOT NULL,
  PRIMARY KEY (`dict_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `consul_dict`
--

INSERT INTO `consul_dict` (`dict_code`, `dict_ru`, `dict_en`) VALUES
(1, 'Я люблю пиво', 'I like bear'),
(2, 'Это кот', 'This is cat');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `consul_equip`
--

INSERT INTO `consul_equip` (`equip_code`, `equip_icon`, `equip_pos`, `page_code`, `equip_url`, `equip_parent`) VALUES
(4, NULL, 1, 9, '', 3),
(5, NULL, 2, 10, '', 3),
(7, NULL, 1, 12, '', 6),
(8, NULL, 2, 13, '', 6),
(9, NULL, 1, 14, '', 0),
(10, NULL, 1, 15, '', 9),
(11, NULL, 2, 16, '', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `consul_lang`
--

DROP TABLE IF EXISTS `consul_lang`;
CREATE TABLE IF NOT EXISTS `consul_lang` (
  `lang_code` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(250) NOT NULL DEFAULT ' ',
  `lang_direct` char(1) NOT NULL DEFAULT 'l',
  PRIMARY KEY (`lang_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `consul_lang`
--

INSERT INTO `consul_lang` (`lang_code`, `lang_name`, `lang_direct`) VALUES
(1, 'ru', 'l'),
(2, 'eng', 'l'),
(3, 'fr', 'l');

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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `consul_news`
--

INSERT INTO `consul_news` (`news_code`, `news_date`, `news_url`, `page_code`) VALUES
(3, '2012-11-29', 'www.cats.ru', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `consul_page`
--

INSERT INTO `consul_page` (`page_code`, `page_name`, `page_active`, `page_url`, `page_type`) VALUES
(1, 'testpage', 1, NULL, 'static'),
(2, 'Первая страница', 1, '', 'static'),
(5, 'О котах', 1, NULL, 'news'),
(9, 'Garmin RS 232', 1, NULL, 'catalog'),
(10, 'Garmin UL 416', 1, NULL, 'catalog'),
(12, 'Samsung 18', 1, NULL, 'catalog'),
(13, 'Samsung 19', 1, NULL, 'catalog'),
(14, 'GMDSS radio equipment ', 1, NULL, 'catalog'),
(15, 'NAVTEX NX-700,”FURUNO”', 1, 'http://www.transas.com.ua/component/option,com_mtree/task,viewlink/link_id,59/Itemid,39/', 'catalog'),
(16, 'NAVTEX SNX-300,”SUMYUNG”', 1, 'http://www.samyung-russia.ru/snx300.html', 'catalog'),
(17, 'Рога и копыта', 1, NULL, 'partner');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `consul_partner`
--

INSERT INTO `consul_partner` (`partner_code`, `partner_pos`, `partner_onmain`, `page_code`, `partner_url`) VALUES
(1, 1, 1, 17, 'www.roga.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `consul_picture`
--

INSERT INTO `consul_picture` (`picture_code`, `page_code`, `picsmall`, `picbig`, `picpos`, `piccomment`, `piccomment_en`) VALUES
(1, 2, 'small.JPG', 'big.JPG', 1, 'Боря и я', 'Borya and I'),
(2, 2, 'small.jpg', 'big.jpg', 2, 'ПАРМ', 'PARM'),
(3, 17, 'small.jpg', 'big.jpg', 1, '', ''),
(4, 15, 'small.jpg', 'big.jpg', 1, '', ''),
(5, 16, 'small.jpg', 'big.jpg', 1, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `consul_static`
--

INSERT INTO `consul_static` (`static_code`, `page_code`, `static_name`, `static_text`, `static_pos`, `static_seo_title`, `static_seo_desc`, `static_seo_key`, `lang_code`, `static_abstract`, `static_url`) VALUES
(12, 2, '1 страница 1', '<p>1 hgfghfghf</p>\r\n<p><img src="/consul/img/logo_4.gif" alt="logo_4" width="132" height="51" /></p>\r\n<p><img src="/consul/img/consul_all.gif" alt="consul_all" width="968" height="463" /></p>', 0, 'Страница', 'Описание', 'Ключевые слова', 1, '', ''),
(13, 2, 'first', '<p>first</p>', 0, 'page', 'description', 'keywords', 2, NULL, NULL),
(14, 1, 'тест', '<p>Это тест.<img title="Хмурюсь" src="http://localhost/consul/admin/editor/tiny_mce/plugins/emotions/img/smiley-frown.gif" alt="Хмурюсь" border="0" /></p>', 0, 'Тест', 'Тестовое описание', 'тестовые ключевые слова', 1, NULL, NULL),
(15, 1, 'test', '<p>this is test&nbsp;<img title="Краснею" src="http://localhost/consul/admin/editor/tiny_mce/plugins/emotions/img/smiley-embarassed.gif" alt="Краснею" border="0" /></p>', 0, NULL, NULL, NULL, 2, NULL, NULL),
(16, 12, 'Морской навигатор Samsung 18', '<p>Морские навигаторы GPS Samsung отличная вещь</p>\r\n<p><img src="/consul/img/4d72f0859d0d6f4e2b8f23296ea1f9c2.JPG" alt="200px-3И-НЕ_74LS(К555)" width="200" height="165" /></p>', 0, NULL, NULL, NULL, 1, NULL, NULL),
(17, 6, 'Морские навигаторы', '<p>Морские навигаторы нужны для навигации</p>', 0, NULL, NULL, NULL, 1, '', '../files/nx700_e_01.pdf'),
(18, 6, 'Sea naviagte', '<p>Sea navigate use for navigate</p>', 0, NULL, NULL, NULL, 2, NULL, NULL),
(20, 8, 'Garmin - это круто', '<p>Garmin лучший нафигатор<img src="/consul/img/logo.gif" alt="logo" width="344" height="70" /></p>', 0, NULL, NULL, NULL, 1, NULL, NULL),
(21, 9, 'Навигатор Garmin RS 232 ', '<p>Навигатор это навигатор</p>', 0, NULL, NULL, NULL, 1, NULL, NULL),
(22, 9, 'Garmin RS 232', '<p>Garmin RS 232 is garmin</p>', 0, NULL, NULL, NULL, 2, NULL, NULL),
(23, 7, 'Электрораспределительные щиты', '<p>Это очень даже щиты</p>', 0, NULL, NULL, NULL, 1, '', ''),
(24, 7, 'Electric board', '<p>It is electric board</p>', 0, NULL, NULL, NULL, 2, NULL, NULL),
(25, 15, 'NAVTEX NX-700,”FURUNO”', '<p>Типовое одобрение Российского Морского Регистра Судоходства.<br />Одобрение типа Регистра судоходства Украины.<br /><br /><br />FURUNO NX-700 представляет собой двухканальный приемник NAVTEX для судов SOLAS, который полностью соответствует новому стандарту MSC.148(77), вступившему в силу 1 июля 2005 г. <br />Память &ndash; 200 сообщений.<br />Дисплей -&nbsp; черно-белый&nbsp; ЖКИ -экран&nbsp;&nbsp; 5".<br />При подключении к NX-700 GPS-приемника передающие станции выбираются автоматически в зависимости от местоположения судна.<br />Все входящие сообщения сохраняются в энергонезависимой памяти (информация не теряется после отключения питания) и выводятся на четкий монохромный 5" LCD экран.<br />Питание 12&hellip;24В постоянного тока.<br />Вес, безбумажный вариант :&nbsp; NX-700-B, только дисплей, вес&nbsp; - 0,7кг ;<br />Вес, вариант с принтером : NX-700-A, дисплей с принтером&nbsp; вес - 3,3кг;<br />Стандартная комплектация: <br /><br />Приемник NX-7001&nbsp; (вес 2,0 кг);<br />Антенна NX-7H зонтичного типа;<br />Дисплей с креплением (указывается при заказе), безбумажный вариант либо вариант с бумажным принтером:<br />Безбумажный вариант, только дисплей:&nbsp; NX-700-B,;<br />Вариант дисплей с принтером:&nbsp; NX-700-A;<br />Монтажный комплект;<br />Комплект документации.</p>', 0, NULL, NULL, NULL, 1, '<p><span style="color: #4f4f4f; font-family: Arial,Helvetica,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.7833px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">FURUNO NX-700 представляет собой двухканальный приемник NAVTEX для судов SOLAS, который полностью соответствует новому стандарту MSC.148(77), вступившему в силу 1 июля 2005 г.<span class="Apple-converted-space"> <br /></span></span></p>\r\n<p>&nbsp;</p>', '../files/nx700_e_01.pdf'),
(26, 16, 'NAVTEX SNX-300,”SUMYUNG”', '<p><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Устройство имеет расширенную энергонезависимую память для хранения принятых сообщений (не менее 200 сообщений объемом, в среднем, 500 знаков) и встроенную систему самодиагностики.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Принимаемая информация отображается на высококонтрастном ЖК дисплее и может выводиться на печать.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Устройство SNX-300 состоит из двух приемников, один из которых работает на частоте, предписанной Регламентом радиосвязи для Международной системы НАВТЕКС (518 кГц), второй может работать одновременно с первым на других частотах, предназначенных для передачи информации НАВТЕКС. Первый приемник имеет приоритет в представлении информации на экране или печатающем устройстве. Получение информации с одного приемника не препятствует приему информации другим приемником.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Приемник SNX-300 с LCD экраном полностью автоматизирован, имеет компактный легкий и простой в установке корпус, автоматически проверяет соединение с антенной после подключения питания, имеет визуальную и звуковую сигнализацию:<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">- о получении сообщений,<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">- о имеющихся неисправностях.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Приемник имеет расширенную энергонезависимую память для хранения принятых сообщений (не менее 200 сообщений объемом, в среднем, 500 знаков) и встроенную систему самодиагностики.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Принимаемая информация отображается на высококонтрастном ЖК дисплее с разрешением 320х240 точек. Индикация о новых полученных сообщениях незамедлительно появляется на экране и сохраняется до тех пор, пока не будет подтверждена или в течение 24 часов после получения. На дисплей выводится не менее 16 строчек текста сообщения.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Вывод информации на бумагу осуществляется при помощи подключаемого принтера. Сообщения выводятся в следующем виде:</span></p>\r\n<ul>\r\n<li><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Устройство имеет расширенную энергонезависимую память для хранения принятых сообщений (не менее 200 сообщений объемом, в среднем, 500 знаков) и встроенную систему самодиагностики.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Принимаемая информация отображается на высококонтрастном ЖК дисплее и может выводиться на печать.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Устройство SNX-300 состоит из двух приемников, один из которых работает на частоте, предписанной Регламентом радиосвязи для Международной системы НАВТЕКС (518 кГц), второй может работать одновременно с первым на других частотах, предназначенных для передачи информации НАВТЕКС. Первый приемник имеет приоритет в представлении информации на экране или печатающем устройстве. Получение информации с одного приемника не препятствует приему информации другим приемником.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Приемник SNX-300 с LCD экраном полностью автоматизирован, имеет компактный легкий и простой в установке корпус, автоматически проверяет соединение с антенной после подключения питания, имеет визуальную и звуковую сигнализацию:<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">- о получении сообщений,<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">- о имеющихся неисправностях.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Приемник имеет расширенную энергонезависимую память для хранения принятых сообщений (не менее 200 сообщений объемом, в среднем, 500 знаков) и встроенную систему самодиагностики.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Принимаемая информация отображается на высококонтрастном ЖК дисплее с разрешением 320х240 точек. Индикация о новых полученных сообщениях незамедлительно появляется на экране и сохраняется до тех пор, пока не будет подтверждена или в течение 24 часов после получения. На дисплей выводится не менее 16 строчек текста сообщения.<span class="Apple-converted-space">&nbsp;</span></span><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Вывод информации на бумагу осуществляется при помощи подключаемого принтера. Сообщения выводятся в следующем виде:</span></li>\r\n</ul>\r\n<p style="text-align: left;">все сообщения по получении;</p>\r\n<p>все сообщения, хранящиеся в памяти;</p>\r\n<p>все сообщения, полученные по оговоренным частотам, сообщения из оговоренных мест или сообщения, имеющие специальные определители сообщений;</p>\r\n<p>все сообщения, представляемые на экран в текущий момент;</p>\r\n<p>отдельные выборочные сообщения из тех, что находятся на экране.</p>\r\n<ul>\r\n<li><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Имеется NMEA порт для передачи информации в ECDIS.<span class="Apple-converted-space"> <br /></span></span></li>\r\n</ul>\r\n<p><br style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff;" /><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;"><span class="Apple-converted-space"><br /></span></span></p>', 0, NULL, NULL, NULL, 1, '<p><span style="color: #000066; font-family: Verdana,Geneva,Arial,Helvetica,sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: #ffffff; display: inline ! important; float: none;">Данный приемник предназначен для несения постоянной вахты, как на международных, так и национальных каналах приема информации (518 кГц, 490 кГц, 4209,5 кГц).<span class="Apple-converted-space"> <br /></span></span></p>', '../files/snx-300.pdf');
