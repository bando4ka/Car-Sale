-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 23 2019 г., 21:46
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `textArticle` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- ССЫЛКИ ТАБЛИЦЫ `articles`:
--

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `textArticle`, `image`, `date`, `views`, `comments`, `author_id`, `category_id`) VALUES
(1, 'Global car sales analysis 2018', 'In 2018, worldwide sales of passenger cars and light commercial vehicles increased 2,4%, according to JATO Dynamics figures, based on their data of 52 markets. Slightly more than 2 million additional vehicle sales compared to 2016 make for a new total of 86,05 million global car sales.  Passenger car sales were up 2,3% to 82 million and LCV sales were up 4,4% to 4,05 million vehicles. 13 out of the 52 markets showed double digit growth including Russia, Argentina and Thailand, balancing small declines in major markets like the UK, United States, South Korea and Mexico. Growth in China slowed to just 2,3% from 17% in 2016. India and Brazil were other engines of growth, the former setting a third consecutive annual sales record and the latter recovering from a decline the year before. Disclaimer: this total excludes some major markets like Iran, the Middle East and Magreb countries, Pakistan, Philippines and a few South American countries. Still, this should give a reasonably accurate picture of the global car market last year. Our own database of 189 countries shows a total of 93,25 million worldwide car sales, an increase of 2,1%. You can find sales records from 2005-2017 for each of these 189 countries in our Car sales by country section or by using the Worldwide Car Sales Data search box at the top right hand corner of our webpages. You can also find historic sales by brand and model in Europe, US and China of almost every car sold in those markets, monthly analyses of brand and model sales for these three markets as well as quarterly segment analyses for Europe and US. Please get in touch with us if you need more detailed data or an analysis of any car market worldwide for your business.', 'img/keyHandover.jpg', '2018-10-01 06:00:00', 34, 2, 4, 7),
(2, 'Worldwide car sales by region', 'China remains the largest single market with 25,8 million sales despite reporting the slowest growth rate in more than a decade. Car sales in the EMEA region were up 3,5% to 21 million with Germany as the biggest market growing 3% and Russia showing double digit growth after four years of slumping sales. North American car sales decreased 1,5% to 20,9 million vehicles as record sales in Canada (+5% to break 2 million for the first time) were offset by declines in the US (-2% after 7 years of growth) and Mexico (-5% after two record years). Sales in the Asia Pacific region excluding China, Japan and South Korea were up 5,2% to 8,04 million, boosted by India and Thailand (+14% after four years of declines). India may surpass Germany to become the fourth biggest market in the world next year. Australia set another sales record for the third consecutive year, despite just a small gain. Japan was up 2,3% to 5,16 million (of which just 300.000 non-Japanese brands) while South Korea was down 1,8% to 1,76 million. The South America region was the most dynamic, recovering from its crisis with a 14,6% improvement in car sales to 3,4 million. Of the three largest markets in the region Brazil grew by 9% to 2,17 million, Argentina by 26% to 861.000 and Chile by 22% to 370.000 (of which just over 10% Chinese brands). The biggest market not included in the JATO figures is Iran with a 16,6% growth to 1,5 million car sales.', 'img/CarSalesW2017.jpg', '2018-10-01 06:55:00', 28, 1, 2, 6),
(3, '2018 Honda Civic - #3 in Compact Cars', 'The 2018 Honda Civic ranked #3 in Compact Cars. Currently the Honda Civic has a score of 8.8 out of 10 which is based on our evaluation of 40 pieces of research and data elements using various sources.\r\n\r\nThe 2018 Honda Civic features great safety scores, deft handling, and a lineup of engines that offer plenty of power. These attributes help make the Civic one of the highest ranked cars in its class.', 'img/2018_HondaCivic.jpg', '2018-10-01 07:30:00', 24, 1, 3, 5),
(4, 'Is the Honda Civic a Good Car?', 'The 2018 Honda Civic is absolutely a good car. It is a blast to drive and has a well-equipped cabin replete with high-end materials. Braking power is strong, steering boasts excellent feedback, and ride quality is comfortable. One of the Civics few downsides is its tricky infotainment system. Still, that shouldn\'t be a deal breaker given that the Civic is a terrific value. In fact, its combination of value and quality made it a finalist for our 2018 Best Compact Car for the Money award.\r\n\r\nAnyone looking for a well-rounded compact car should seriously consider the 2018 Honda Civic. It has a lineup of powerful engines and great fuel economy, but some rivals like the Toyota Corolla have easier-to-use infotainment systems. Still, the Civics attractive cabin has plenty of room for five people so much so that you may not feel the need to look at a larger car, like the Honda Accord.', 'img/2018_HondaCivic_blue.jpg', '2018-10-01 07:59:00', 36, 2, 1, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `authorName` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- ССЫЛКИ ТАБЛИЦЫ `authors`:
--

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`author_id`, `authorName`) VALUES
(1, 'Jeremy Clarkson'),
(2, 'Richard Hammond'),
(3, 'Jason Dawe'),
(4, 'The Stig');

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `ID` int(100) NOT NULL,
  `district` varchar(25) NOT NULL,
  `city` varchar(45) NOT NULL,
  `caryear` varchar(10) NOT NULL,
  `carmonth` varchar(15) DEFAULT NULL,
  `make` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `bodyStyle` varchar(25) NOT NULL,
  `transmission` varchar(25) DEFAULT NULL,
  `exteriorColor` varchar(25) NOT NULL,
  `numberOfDoors` varchar(15) NOT NULL,
  `engineCylinder` varchar(15) DEFAULT NULL,
  `driveType` varchar(20) NOT NULL,
  `fuelType` varchar(25) NOT NULL,
  `condition1` varchar(25) NOT NULL,
  `mileage` varchar(10) DEFAULT NULL,
  `hand` varchar(12) DEFAULT NULL,
  `engineVolume` varchar(15) NOT NULL,
  `enginePower` varchar(15) DEFAULT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `image5` varchar(500) DEFAULT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- ССЫЛКИ ТАБЛИЦЫ `cars`:
--

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`ID`, `district`, `city`, `caryear`, `carmonth`, `make`, `model`, `bodyStyle`, `transmission`, `exteriorColor`, `numberOfDoors`, `engineCylinder`, `driveType`, `fuelType`, `condition1`, `mileage`, `hand`, `engineVolume`, `enginePower`, `image1`, `image2`, `image3`, `image4`, `image5`, `firstname`, `lastname`, `phone`, `email`, `password`, `date`) VALUES
(41, 'Tel-Aviv District', 'Herzliya', '2019', 'January', 'BMW', 'X5', 'SUV', 'Automanual', 'Gold', '5 Doors', '8 cylinder', '4x4/4wheeldrive', 'Diesel', 'excellent', '20', '1', '3.8', '220', 'http://www.blogcdn.com/www.autoblog.com/media/2008/10/12_bmw_x1_live.jpg', 'http://alliswall.com/file/4521/1920x1200/16:9/bmw-x1-concept-the-gold-beauty.jpg', 'https://i.pinimg.com/originals/4b/be/f0/4bbef0e7607a9343959e7209e54ec4c9.png', 'https://cartype.com/pics/4262/full/bmw_x1_08_sr1.jpg', 'http://www.hongliyangzhi.com/manufacturers/bmw/bmw-x1/bmw-x1-gold/bmw-x1-gold-1.jpg', 'Artan', 'Hugo', '0584455666', 'qwe@rty.com', '123456789', '18-06-2019'),
(2, 'Tel-Aviv District', 'Bat Yam', '2015', 'February', 'BMW', 'X5', 'SUV', 'Manual', 'Silver', '4 Doors', '8 cylinder', '4x2/2wheeldrive', 'Hybrid', 'good', '250', '2', '4', '160', 'https://i.ytimg.com/vi/yKOCfDJAML0/maxresdefault.jpg', 'https://www.honda.ca/Content/honda.ca/7eb0d442-bd2f-4b0c-ba5f-7eb7e83278e5/ModelPage_MainTout/my18_accord4D_hero_desktop-EN.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Anna', 'Oldman', '542001221', 'rrr@bbb.ccc', '123456789', '17-09-2018'),
(3, 'Haifa District', 'Haifa', '2015', 'April', 'Honda', 'Civic', 'Hetchback', 'Automatic', 'White', '5 Doors', '4 cylinder', 'AWD', 'Gasoline', 'excellent', '130', '1', '1.8', '155', 'https://s.auto.drom.ru/img1/catalog/photos/fullsize/honda/civic/honda_civic_31384.jpg', 'https://www.honda.ca/Content/honda.ca/7eb0d442-bd2f-4b0c-ba5f-7eb7e83278e5/ModelPage_MainTout/my18_accord4D_hero_desktop-EN.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Artem', 'Fichman', '054136859', 'abc@bbb.ccc', '123456789', '17-09-2018'),
(4, 'Northern District', 'Karmiel', '2015', 'May', 'BMW', 'X3', 'SUV', 'Automanual', 'Black', '5 Doors', '12 cylinder', '4x2/2wheeldrive', 'Diesel', 'excellent', '180', '2', '3.6', '210', 'https://pvlimages.blob.core.windows.net/images/large/0T60240_22062017_1.jpg', 'https://www.honda.ca/Content/honda.ca/7eb0d442-bd2f-4b0c-ba5f-7eb7e83278e5/ModelPage_MainTout/my18_accord4D_hero_desktop-EN.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Alice', 'Garaeva', '542001233', 'bcd@bbb.ccc', '123456789', '23-09-2018'),
(5, 'Central District', 'Rehovot', '2017', 'June', 'Honda', 'Civic', 'Hetchback', 'Automatic', 'Blue', '4 Doors', '8 cylinder', '4x2/2wheeldrive', 'Diesel', 'good', '25', '2', '1.8', '165', 'https://i.ytimg.com/vi/n2ad2yzHtV4/maxresdefault.jpg', 'https://www.honda.ca/Content/honda.ca/7eb0d442-bd2f-4b0c-ba5f-7eb7e83278e5/ModelPage_MainTout/my18_accord4D_hero_desktop-EN.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Maria', 'Freedom', '0584466852', 'cde@bbb.ccc', '123456789', '22-09-2018'),
(6, 'Tel-Aviv District', 'Tel Aviv-Yafo', '2016', 'February', 'Honda', 'Civic', 'Hetchback', 'Manual', 'Orange', '4 Doors', '8 cylinder', '4x2/2wheeldrive', 'Diesel', 'good', '250', '2', '4', '160', 'https://i.ebayimg.com/00/s/NzY4WDEwMjQ=/z/hewAAOSwFvZbhnHE/$_86.JPG', 'https://www.honda.ca/Content/honda.ca/7eb0d442-bd2f-4b0c-ba5f-7eb7e83278e5/ModelPage_MainTout/my18_accord4D_hero_desktop-EN.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Anna', 'Oldman', '542001221', 'aba@bbb.ccc', '123456789', '22-09-2018'),
(7, 'Southern District', 'Omer', '2018', 'October', 'BMW', 'X5', 'SUV', 'Automanual', 'White', '5 Doors', '10 cylinder', 'FWD', 'E85 Flex Fuel', 'excellent', '15', '1', '2.5', '190', 'https://cdn.vdmsti.ru/image/2018/4d/3l37w/default-4na.jpg', 'https://www.audi.co.uk/content/dam/audi/production/Models/NewModelsgallery/TTrange/TT/tt-coupe-social-share-facebook.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Orly', 'Mitelman', '0581112223', 'php@bbb.ccc', '123456789', '23-09-2018'),
(8, 'Southern District', 'Eilat', '2018', 'September', 'BMW', 'X6', 'SUV', 'Automanual', 'Blue', '5 Doors', '12 cylinder', 'RWD', 'E85 Flex Fuel', 'needs repair', '100', '1', '4.8', '250', 'https://isbh.tmgrup.com.tr/sbh/2015/07/23/650x344/1437652951768.jpg', 'https://www.audi.co.uk/content/dam/audi/production/Models/NewModelsgallery/TTrange/TT/tt-coupe-social-share-facebook.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'http://dbsolutionsltd.com/wp-content/uploads/2018/08/2015-audi-tt-convertible-luxury-tag-for-2016audi-tt-convertible-tuned-audi-unveils-2016-tt-rs-photos-of-2015-audi-tt-convertible.jpg', 'Benny', 'Jackman', '0542003115', 'ppp@bbb.ccc', '123456789', '24-09-2018'),
(9, 'Judea and Samaria Area', 'Ariel', '2015', 'March', 'BMW', 'X5', 'SUV', 'Automanual', 'Silver', '5 Doors', '8 cylinder', '4x2/2wheeldrive', 'Diesel', 'good', '116', '1', '4.8', '250', 'https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/images/09q3/267587/2010-bmw-activehybrid-x6-photo-293601-s-original.jpg?crop=1xw:1xh;center,center&resize=900:*', 'https://www.honda.ca/Content/honda.ca/7eb0d442-bd2f-4b0c-ba5f-7eb7e83278e5/ModelPage_MainTout/my18_accord4D_hero_desktop-EN.jpg', 'https://s.auto.drom.ru/i24196/c/photos/fullsize/honda/accord/honda_accord_477290.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'Inna', 'Ort', '054200115', 'mkm@bbb.ccc', '123456789', '22-09-2018'),
(10, 'Central District', 'Petah Tikva', '2017', 'June', 'Audi', 'RS8', 'Sedan', 'Automatic', 'White', '4 Doors', '8 cylinder', '4x2/2wheeldrive', 'Hybrid', 'excellent', '65', '1', '1.8', '175', 'https://pictures.topspeed.com/IMG/jpg/200804/audi-rs8-to-debut-in.jpg', 'https://www.audi.co.uk/content/dam/audi/production/Models/NewModelsgallery/TTrange/TT/tt-coupe-social-share-facebook.jpg', 'https://i.kinja-img.com/gawker-media/image/upload/s--JjNMJ907--/c_scale,f_auto,fl_progressive,q_80,w_800/lerwb9pwc4qdmhg42bfp.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'https://www.hondacarindia.com/Areas/Accord/Content/desktop/images/dashboard.jpg', 'David', 'Kohen', '0548089890', 'qwe@aaa.ccc', '123456789', '06-10-2018'),
(11, 'Southern District', 'Omer', '2013', 'May', 'Audi', 'RS7', 'Sedan', 'Automatic', 'White', '4 Doors', '10 cylinder', 'AWD', 'Hybrid', 'excellent', '75', '1', '1.8', '160', 'https://bordalo.observador.pt/700x,q85/https://s3.observador.pt/wp-content/uploads/2017/09/28123210/audi-rs7-14_770x433_acf_cropped.jpg', 'https://www.audi.co.uk/content/dam/audi/production/Models/NewModelsgallery/TTrange/TT/tt-coupe-social-share-facebook.jpg', 'https://i.kinja-img.com/gawker-media/image/upload/s--JjNMJ907--/c_scale,f_auto,fl_progressive,q_80,w_800/lerwb9pwc4qdmhg42bfp.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'http://dbsolutionsltd.com/wp-content/uploads/2018/08/2015-audi-tt-convertible-luxury-tag-for-2016audi-tt-convertible-tuned-audi-unveils-2016-tt-rs-photos-of-2015-audi-tt-convertible.jpg', 'Viki', 'Sinitsa', '0548091212', 'wer@bbb.ccc', '123456789', '06-10-2018'),
(12, 'Jerusalem District', 'Jerusalem', '2018', 'March', 'Audi', 'RS8', 'Coupe', 'Automanual', 'Green', '2 Doors', '6 cylinder', '4x2/2wheeldrive', 'Electric', 'excellent', '100', '1', '1.6', '149', 'https://www.leblogauto.com/wp-content/uploads/2016/05/05-1.jpg', 'https://www.audi.co.uk/content/dam/audi/production/Models/NewModelsgallery/TTrange/TT/tt-coupe-social-share-facebook.jpg', 'https://i.kinja-img.com/gawker-media/image/upload/s--JjNMJ907--/c_scale,f_auto,fl_progressive,q_80,w_800/lerwb9pwc4qdmhg42bfp.jpg', 'http://uzr.com.ua/wp-content/uploads/2016/12/Audi-TT-RS-3.jpg', 'http://dbsolutionsltd.com/wp-content/uploads/2018/08/2015-audi-tt-convertible-luxury-tag-for-2016audi-tt-convertible-tuned-audi-unveils-2016-tt-rs-photos-of-2015-audi-tt-convertible.jpg', 'Benyamin', 'Shalom', '0523344695', 'fff@bbb.ccc', '123456789', '06-10-2018'),
(13, 'Northern District', 'Yokneam', '2010', 'April', 'Honda', 'CR-V', 'SUV', 'Automanual', 'Brown', '5 Doors', '4 cylinder', '4x2/2wheeldrive', 'Diesel', 'good', '330', '2', '2.5', '160', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'Orean', 'Happy', '0542336587', 'hhh@bbb.ccc', '123456789', '06-10-2018'),
(23, 'Haifa District', 'Haifa', '2012', 'July', 'BMW', 'X5', 'SUV', 'Manual', 'Silver', '5 Doors', '6 cylinder', '4x4/4wheeldrive', 'Diesel', 'needs repair', '300', '3', '2.5', '175', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'Helga', 'Ulman', '0542255669', 'asd@mailmail.com', '123456789', '08-10-2018'),
(24, 'Central District', 'Rishon-LeZion', '2016', 'February', 'Audi', 'TT', 'Coupe', 'Automatic', 'Red', '2 Doors', '2 cylinder', 'RWD', 'Electric', 'excellent', '200', '2', '2.8', '210', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'Jeniffer', 'Mycon', '0548866333', '11.1@gmail.com', '123456789', '08-10-2018'),
(25, 'Jerusalem District', 'Jerusalem', '2018', 'February', 'Audi', 'RS7', 'Sedan', 'Automanual', 'Red', '4 Doors', '5 cylinder', 'AWD', 'Diesel', 'excellent', '25', '2', '2.5', '250', 'https://i.ytimg.com/vi/2YWpQayFNMY/maxresdefault.jpg', 'https://i.ytimg.com/vi/2YWpQayFNMY/maxresdefault.jpg', 'https://i.ytimg.com/vi/2YWpQayFNMY/maxresdefault.jpg', 'https://i.ytimg.com/vi/2YWpQayFNMY/maxresdefault.jpg', 'https://i.ytimg.com/vi/2YWpQayFNMY/maxresdefault.jpg', 'Sapir', 'Rishona', '0586699772', 'name@gmair.com', '123456789', '08-10-2018'),
(26, 'Central District', 'Lod', '2016', 'April', 'Honda', 'Fit', 'Hetchback', 'Automatic', 'Orange', '3 Doors', '2 cylinder', '4x2/2wheeldrive', 'Electric', 'needs repair', '78', '3', '1.2', '99', 'http://releasedatesnewcars.com/wp-content/uploads/2016/01/2017-Honda-Fit-exterior-alloy-wheels.jpg', 'https://insideevs.com/wp-content/uploads/2017/12/2017-Chevrolet-BoltEV-074.jpg', 'https://insideevs.com/wp-content/uploads/2017/12/2017-Chevrolet-BoltEV-074.jpg', 'https://insideevs.com/wp-content/uploads/2017/12/2017-Chevrolet-BoltEV-074.jpg', 'https://insideevs.com/wp-content/uploads/2017/12/2017-Chevrolet-BoltEV-074.jpg', 'Ann', 'Apple', '0584466852', 'zxc@bbb.ccc', '123456789', '08-10-2018'),
(27, 'Central District', 'Netanya', '2011', 'March', 'BMW', 'X5', 'SUV', 'Manual', 'Yellow', '5 Doors', '5 cylinder', 'AWD', 'Gasoline', 'excellent', '200', '2', '4.8', '190', 'https://www.bmw.com.mx/content/dam/bmw/marketMX/bmw_com_mx/public_pools/teaser_pool/home/39-X2CDMX-680x756%20px.jpg', 'https://www.bmw.com.mx/content/dam/bmw/marketMX/bmw_com_mx/public_pools/teaser_pool/home/39-X2CDMX-680x756%20px.jpg', 'https://www.bmw.com.mx/content/dam/bmw/marketMX/bmw_com_mx/public_pools/teaser_pool/home/39-X2CDMX-680x756%20px.jpg', 'https://www.bmw.com.mx/content/dam/bmw/marketMX/bmw_com_mx/public_pools/teaser_pool/home/39-X2CDMX-680x756%20px.jpg', 'https://www.bmw.com.mx/content/dam/bmw/marketMX/bmw_com_mx/public_pools/teaser_pool/home/39-X2CDMX-680x756%20px.jpg', 'Matan', 'Barazi', '0587766152', 'qar@bbb.ccc', '123456789', '08-10-2018'),
(28, 'Northern District', 'Acre', '2016', 'July', 'Honda', 'CR-V', 'SUV', 'Manual', 'White', '5 Doors', '8 cylinder', 'AWD', 'Compressed Natural Gas', 'good', '85', '1', '2', '180', 'https://i.ytimg.com/vi/RABIA8efS00/maxresdefault.jpg', 'https://i.ytimg.com/vi/RABIA8efS00/maxresdefault.jpg', 'https://i.ytimg.com/vi/RABIA8efS00/maxresdefault.jpg', 'https://i.ytimg.com/vi/RABIA8efS00/maxresdefault.jpg', 'https://i.ytimg.com/vi/RABIA8efS00/maxresdefault.jpg', 'Rachel', 'Yohanson', '054213654', 'poi@bbb.ccc', '123456789', '08-10-2018'),
(29, 'Southern District', 'Omer', '2016', 'August', 'Audi', 'TT', 'Coupe', 'Automatic', 'Pink', '2 Doors', '4 cylinder', '4x2/2wheeldrive', 'Compressed Natural Gas', 'excellent', '100', '1', '2.5', '190', 'http://wallpapersdsc.net/wp-content/uploads/2015/11/732.jpg', 'http://www.carspotting.de/userfiles/1399/Audi-Audi-TT-RS_38494.jpg', 'http://www.carspotting.de/userfiles/1399/Audi-Audi-TT-RS_38494.jpg', 'http://www.carspotting.de/userfiles/1399/Audi-Audi-TT-RS_38494.jpg', 'http://www.carspotting.de/userfiles/1399/Audi-Audi-TT-RS_38494.jpg', 'Michel', 'Liteman', '0546634445', 'mmm@gmail.com', '123456789', '08-10-2018'),
(30, 'Tel-Aviv District', 'Tel Aviv-Yafo', '2015', 'May', 'Honda', 'Civic', 'Sedan', 'Automanual', 'White', '5 Doors', '6 cylinder', '4x4/4wheeldrive', 'E85 Flex Fuel', 'good', '120', '2', '3', '210', 'https://i.ytimg.com/vi/refBOFihVew/hqdefault.jpg', 'https://i.ytimg.com/vi/refBOFihVew/hqdefault.jpg', 'https://i.ytimg.com/vi/refBOFihVew/hqdefault.jpg', 'https://i.ytimg.com/vi/refBOFihVew/hqdefault.jpg', 'http://dbsolutionsltd.com/wp-content/uploads/2018/08/2015-audi-tt-convertible-luxury-tag-for-2016audi-tt-convertible-tuned-audi-unveils-2016-tt-rs-photos-of-2015-audi-tt-convertible.jpg', 'Dvir', 'Kadosh', '054133698', 'das@gmail.com', '123456789', '08-10-2018'),
(31, 'Central District', 'Kfar Saba', '2017', 'June', 'BMW', 'X6', 'SUV', 'Automatic', 'Red', '5 Doors', '4 cylinder', '4x2/2wheeldrive', 'Diesel', 'excellent', '65', '1', '4.8', '200', 'https://s.auto.drom.ru/img4/catalog/photos/fullsize/bmw/x6/bmw_x6_109797.jpg', 'https://s.auto.drom.ru/img4/catalog/photos/fullsize/bmw/x6/bmw_x6_109797.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://i.ytimg.com/vi/2YWpQayFNMY/maxresdefault.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'Matanel', 'Manchester', '0541320369', 'email@email.com', '123456789', '08-10-2018'),
(32, 'Central District', 'Yavne', '2012', 'February', 'Honda', 'Accord', 'Coupe', 'Automanual', 'Blue', '2 Doors', '8 cylinder', 'AWD', 'Electric', 'excellent', '123', '1', '2.5', '160', 'https://di-uploads-pod3.s3.amazonaws.com/silkohonda/uploads/2015/02/2015-honda-accord-angle.jpg', 'https://di-uploads-pod3.s3.amazonaws.com/silkohonda/uploads/2015/02/2015-honda-accord-angle.jpg', 'https://di-uploads-pod3.s3.amazonaws.com/silkohonda/uploads/2015/02/2015-honda-accord-angle.jpg', 'https://di-uploads-pod3.s3.amazonaws.com/silkohonda/uploads/2015/02/2015-honda-accord-angle.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'Amir', 'Goodboy', '0586611321', '12mail@gmail.com', '123456789', '08-10-2018'),
(33, 'Central District', 'Rosh Ha Ayin', '2015', 'August', 'BMW', 'X6', 'SUV', 'Automatic', 'Beige', '5 Doors', '6 cylinder', '4x2/2wheeldrive', 'E85 Flex Fuel', 'excellent', '95', '1', '1.8', '160', 'https://a.ccdn.es/cnet/2017/11/28/33939889/128980403_g.jpg', 'https://a.ccdn.es/cnet/2017/11/28/33939889/128980403_g.jpg', 'https://a.ccdn.es/cnet/2017/11/28/33939889/128980403_g.jpg', 'https://a.ccdn.es/cnet/2017/11/28/33939889/128980403_g.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'Yuval', 'Etgar', '0541664120', 'mail17@gmail.com', '123456789', '08-10-2018'),
(35, 'Haifa District', 'Hadera', '2010', 'March', 'Honda', 'CR-V', 'SUV', 'Automatic', 'Silver', '5 Doors', '4 cylinder', 'FWD', 'Diesel', 'needs repair', '100', '2', '2.5', '160', 'https://static.rebusmarket.com/images/D/Honda%20CR%20V%203504_1.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://static.rebusmarket.com/images/D/Honda%20CR%20V%203504_1.jpg', 'Tamar', 'Postman', '0541122333', 'tamar@gmail.com', '123456789', '08-10-2018'),
(36, 'Tel-Aviv District', 'Bat Yam', '2013', 'April', 'BMW', 'X5', 'SUV', 'Automanual', 'Blue', '5 Doors', '4 cylinder', 'FWD', 'Diesel', 'good', '180', '3', '2.5', '190', 'https://i.ytimg.com/vi/u7rgjcAlaUo/maxresdefault.jpg', 'https://i.ytimg.com/vi/u7rgjcAlaUo/maxresdefault.jpg', 'https://i.ytimg.com/vi/u7rgjcAlaUo/maxresdefault.jpg', 'https://i.ytimg.com/vi/u7rgjcAlaUo/maxresdefault.jpg', 'https://i.ytimg.com/vi/u7rgjcAlaUo/maxresdefault.jpg', 'Max', 'Olmert', '05422336666', 'Olmert@gmail.com', '123456789', '08-10-2018'),
(37, 'Jerusalem District', 'Jerusalem', '2018', 'January', 'BMW', 'X6', 'SUV', 'Manual', 'White', '5 Doors', '2 cylinder', '4x2/2wheeldrive', 'Compressed Natural Gas', 'excellent', '20', '1', '4.5', '210', 'http://bay2car.com/img/2016-BMW-X6-3-0TD-xDrive40d-M-Sport-Diesel-white-Automatic-222427707777/0.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'Tomer', 'Bu', '0542013369', 'tomer.bu@gmail.com', '123456789', '13-10-2018'),
(40, 'Southern District', 'Rahat', '2011', 'November', 'Audi', 'TT', 'Hetchback', 'Automatic', 'Black', '4 Doors', '5 cylinder', '4x2/2wheeldrive', 'Diesel', 'good', '158', '2', '2.5', '175', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'https://images.summitmedia-digital.com/topgear/images/articleImages/news/2010_Honda_CR_V/2010_Honda_CR_V_A.jpg', 'https://i.kinja-img.com/gawker-media/image/upload/s--JjNMJ907--/c_scale,f_auto,fl_progressive,q_80,w_800/lerwb9pwc4qdmhg42bfp.jpg', 'https://car-images.bauersecure.com/pagefiles/33231/audittrs001.jpg', 'https://www.bmw.ua/content/dam/bmw/common/all-models/x-series/x1/2015/at-a-glance/F48_Ataglance_stage.jpg', 'asd', 'kgjh', '0586699456', 'kga@bbb.ccc', '123456789', '04-12-2018');

-- --------------------------------------------------------

--
-- Структура таблицы `carticles`
--

CREATE TABLE `carticles` (
  `category_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- ССЫЛКИ ТАБЛИЦЫ `carticles`:
--

--
-- Дамп данных таблицы `carticles`
--

INSERT INTO `carticles` (`category_id`, `category`) VALUES
(1, '#cars'),
(2, '#cars, #famouspeople'),
(3, '#cars, #carsshow'),
(4, '#cars, #news'),
(5, '#cars, #honda'),
(6, '#cars, #sales'),
(7, '#cars, #analitics');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- ССЫЛКИ ТАБЛИЦЫ `users`:
--

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(1, 'aaa@bbb.ccc', '123456789'),
(2, 'rrr@bbb.ccc', '123456789'),
(3, 'abc@bbb.ccc', '123456789'),
(4, 'bcd@bbb.ccc', '123456789'),
(5, 'cde@bbb.ccc', '123456789'),
(6, 'aba@bbb.ccc', '123456789'),
(7, 'php@bbb.ccc', '123456789'),
(8, 'ppp@bbb.ccc', '123456789'),
(9, 'mkm@bbb.ccc', '123456789'),
(10, 'qwe@aaa.ccc', '123456789'),
(11, 'wer@bbb.ccc', '123456789'),
(12, 'fff@bbb.ccc', '123456789'),
(13, 'hhh@bbb.ccc', '123456789'),
(23, 'asd@mailmail.com', '123456789'),
(24, '11.1@gmail.com', '123456789'),
(25, 'name@gmair.com', '123456789'),
(26, 'zxc@bbb.ccc', '123456789'),
(27, 'qar@bbb.ccc', '123456789'),
(28, 'poi@bbb.ccc', '123456789'),
(29, 'mmm@gmail.com', '123456789'),
(30, 'das@gmail.com', '123456789'),
(31, 'email@email.com', '123456789'),
(32, '12mail@gmail.com', '123456789'),
(33, 'mail17@gmail.com', '123456789'),
(35, 'tamar@gmail.com', '123456789'),
(36, 'Olmert@gmail.com', '123456789'),
(82, 'garaevajulia@mail.com', '123456789'),
(81, 'kga@gmail.com', '123456789'),
(37, 'tomer.bu@gmail.com', '123456789');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `carticles`
--
ALTER TABLE `carticles`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `carticles`
--
ALTER TABLE `carticles`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;


--
-- Метаданные
--
USE `phpmyadmin`;

--
-- Метаданные для таблицы articles
--

--
-- Метаданные для таблицы authors
--

--
-- Метаданные для таблицы cars
--

--
-- Метаданные для таблицы carticles
--

--
-- Метаданные для таблицы users
--

--
-- Дамп данных таблицы `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'cars', 'users', '[]', '2018-10-11 17:16:23');

--
-- Метаданные для базы данных cars
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
