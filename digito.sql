-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2025 at 08:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digito`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `image_name` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `description`, `image`, `image_name`) VALUES
(1, '                                                                <p class=\"text-zinc-600 text-xs md:text-sm leading-8\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px solid; font-size: var(--text-sm); line-height: var(--tw-leading, var(--text-sm--line-height)); --tw-leading: calc(var(--spacing) * 8); color: var(--color-zinc-600); font-family: yekanBakhSemiBold;\"><b style=\"color: var(--color-zinc-600); font-size: var(--text-sm);\">دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!</b></p><p class=\"text-zinc-600 text-xs md:text-sm leading-8\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px solid; font-size: var(--text-sm); line-height: var(--tw-leading, var(--text-sm--line-height)); --tw-leading: calc(var(--spacing) * 8); color: var(--color-zinc-600); font-family: yekanBakhSemiBold;\"><b>دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!</b></p><p class=\"text-zinc-800 md:text-lg mb-1 mt-4\" style=\"margin-top: calc(var(--spacing) * 4); margin-right: 0px; margin-bottom: calc(var(--spacing) * 1); margin-left: 0px; padding: 0px; border: 0px solid; color: var(--color-zinc-800); font-size: var(--text-lg); line-height: var(--tw-leading, var(--text-lg--line-height)); font-family: yekanBakhSemiBold;\"><b>فروشگاه دیجیتو</b></p><p class=\"text-zinc-600 text-xs md:text-sm leading-8\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px solid; font-size: var(--text-sm); line-height: var(--tw-leading, var(--text-sm--line-height)); --tw-leading: calc(var(--spacing) * 8); color: var(--color-zinc-600); font-family: yekanBakhSemiBold;\"><b>دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!</b></p><p class=\"text-zinc-600 text-xs md:text-sm leading-8\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px solid; font-size: var(--text-sm); line-height: var(--tw-leading, var(--text-sm--line-height)); --tw-leading: calc(var(--spacing) * 8); color: var(--color-zinc-600); font-family: yekanBakhSemiBold;\"><b>دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!</b></p><p class=\"text-zinc-600 text-xs md:text-sm leading-8\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px solid; font-size: var(--text-sm); line-height: var(--tw-leading, var(--text-sm--line-height)); --tw-leading: calc(var(--spacing) * 8); color: var(--color-zinc-600); font-family: yekanBakhSemiBold;\"><b>دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!</b></p><p class=\"text-zinc-800 md:text-lg mb-1 mt-4\" style=\"margin-top: calc(var(--spacing) * 4); margin-right: 0px; margin-bottom: calc(var(--spacing) * 1); margin-left: 0px; padding: 0px; border: 0px solid; color: var(--color-zinc-800); font-size: var(--text-lg); line-height: var(--tw-leading, var(--text-lg--line-height)); font-family: yekanBakhSemiBold;\"><b>فروشگاه دیجیتو</b></p><p class=\"text-zinc-600 text-xs md:text-sm leading-8\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px solid; font-size: var(--text-sm); line-height: var(--tw-leading, var(--text-sm--line-height)); --tw-leading: calc(var(--spacing) * 8); color: var(--color-zinc-600); font-family: yekanBakhSemiBold;\"><b>دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!</b></p>                                                            ', 'E:/ghoreishi/digito/public/images/aboutUs/a7336f4b612f8b6aeb1af0a171e04de3.webp', 'a7336f4b612f8b6aeb1af0a171e04de3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `family` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `city_id` int NOT NULL,
  `mobile` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `post_code` int NOT NULL,
  `description` varchar(750) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `address` varchar(750) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advertising_banner`
--

CREATE TABLE `advertising_banner` (
  `id` int UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `image_name` text NOT NULL,
  `status` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `advertising_banner`
--

INSERT INTO `advertising_banner` (`id`, `image`, `image_name`, `status`, `title`, `description`, `link`) VALUES
(1, 'E:/ghoreishi/digito/public/images/advertising_banner/139747c149c7ff8bfb14a6f7959f3855.webp', '139747c149c7ff8bfb14a6f7959f3855.webp', 1, 'لپ تاپ Lenovo حرفه ای', 'اقتصادی ترین لپ تاپ بازار', 'instagram.ir'),
(2, 'E:/ghoreishi/digito/public/images/advertising_banner/5c0a8870a52e447f7fc7460d32dca620.png', '5c0a8870a52e447f7fc7460d32dca620.png', 1, 'دسـتـه اصلی پـلـی اسـتـیـشـن', 'چرا از نسخه های جدید استفاده نمیکنی؟', 'instagram.ir');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `image_name` text NOT NULL,
  `status` int NOT NULL,
  `type` int NOT NULL,
  `link` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `image_name`, `status`, `type`, `link`) VALUES
(4, 'E:/ghoreishi/digito/public/images/banner/1765126935_1.webp', '1765126935_1.webp', 1, 1, 'instagram.ir'),
(5, 'E:/ghoreishi/digito/public/images/banner/1765126942_2.webp', '1765126942_2.webp', 1, 1, 'instagram.ir'),
(6, 'E:/ghoreishi/digito/public/images/banner/1765126948_3.webp', '1765126948_3.webp', 1, 1, 'instagram.ir'),
(7, 'E:/ghoreishi/digito/public/images/banner/1765126954_4.webp', '1765126954_4.webp', 1, 1, 'instagram'),
(8, 'E:/ghoreishi/digito/public/images/banner/1765126960_5.webp', '1765126960_5.webp', 1, 1, 'instagram.ir'),
(10, 'E:/ghoreishi/digito/public/images/banner/1765126993_2.webp', '1765126993_2.webp', 1, 2, 'https://yadaksabz.com/product/search?query=%D8%B3%DB%8C%DA%A9%D9%88'),
(11, 'E:/ghoreishi/digito/public/images/banner/9bcdb9ecdbc526a15f90bff65432e122.webp', '9bcdb9ecdbc526a15f90bff65432e122.webp', 1, 2, 'instagram.ir');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `image_name` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '2',
  `createAt` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `author` varchar(50) NOT NULL,
  `slug` text NOT NULL,
  `label` text NOT NULL,
  `blog_categories_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `image_name`, `status`, `createAt`, `author`, `slug`, `label`, `blog_categories_id`) VALUES
(14, 'تیم برنامه نویسی امیران ', '                                                                                                                                                                                                                                                                <p><span style=\"color: rgb(35, 37, 78); font-family: \"Arial Black\"; font-size: 14px;\">گوشی موبایل اپل مدل iPhone 16، به عنوان یکی از جدیدترین مدل‌های این برند معتبر، با طراحی مدرن و ویژگی‌های پیشرفته، تجربه‌ای بی‌نظیر از دنیای تکنولوژی را برای کاربران فراهم می‌کند. این گوشی با ظرفیت 128 گیگابایت و رم 8 گیگابایت، عملکردی سریع و روان را ارائه می‌دهد که به راحتی از پس کارهای روزمره و multitasking برمی‌آید. طراحی این دستگاه با دقت و ظرافت بالا انجام شده و بدنه آن از مواد با کیفیت ساخته شده است که حس لوکس بودن را به کاربر منتقل می‌کند. قابلیت پشتیبانی از دو سیم کارت، امکان استفاده همزمان از دو شماره تلفن را برای کاربران فراهم می‌کند که این ویژگی به‌خصوص برای افرادی که به دو شماره مختلف برای کار و زندگی شخصی نیاز دارند بسیار مفید است. دوربین‌های با کیفیت iPhone 16، تجربه عکاسی فوق‌العاده‌ای را ارائه می‌دهند و با فناوری‌های نوین، امکان ثبت لحظات خاص با جزئیات بالا را فراهم می‌کنند. همچنین، باتری با عمر طولانی و قابلیت‌های شارژ سریع، این اطمینان را به شما می‌دهد که می‌توانید در طول روز به راحتی از گوشی خودتان استفاده کنید. به‌طور کلی، iPhone 16 یک انتخاب عالی برای کسانی است که به دنبال ترکیبی از کیفیت، قدرت و طراحی مدرن هستند. همانطور که می‌دانید گوشی‌های آیفون با پارت نامبرهای مختلفی از جمله CH، ZAA، LLAT ZPAو ... در بازار وجود دارند. پارت نامبر CH مربوط به کشور چین است که تفاوت خاصی با دیگر پارت نامبرها ندارند و تنها در مورد استفاده از تماس‌های صوتی و تماس‌های گروهی در نرم افزار فیس تایم شامل محدودیت است. این پارت نامبر از دو سیم‌کارت فیزیکی پشتیبانی می‌کند که یک نکته مثبت محسوب می‌شود. این گوشی، مانند تمامی گوشی‌های عرضه‌شده در دیجی‌کالا، به صورت قانونی و تجاری وارد کشور شده و با رجیستر رسمی، کارت گارانتی معتبر و کد فعال‌سازی به شما تحویل داده می‌شود.</span><span style=\"font-family: Helvetica;\">﻿</span></p>                                                                                                                                                                                                                                                ', 'E:/ghoreishi/digito/public/images/blog/748089cedd724927ac6889768b1669e4.jpg', '748089cedd724927ac6889768b1669e4.jpg', 1, '2025-04-12 15:39:39', 'امیر قریشی', 'تیم-برنامه-نویسی-امیران-', 'تست ', 7),
(15, 'تست ', '<p>تست&nbsp;</p>', 'E:/ghoreishi/digito/public/images/blog/1765046311_ChatGPT Image Sep 30, 2025, 09_27_22 PM.png', '1765046311_ChatGPT Image Sep 30, 2025, 09_27_22 PM.png', 1, '2025-12-06 18:38:31', 'تیم برنامه نویسی امیران ', 'تست-', 'تست ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_name` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `image`, `image_name`, `status`) VALUES
(6, 'موبایل ', 'E:/ghoreishi/digito/public/images/blog_categories/1744468128_best-xiaomi-midrange-610x380.jpg', '1744468128_best-xiaomi-midrange-610x380.jpg', 1),
(7, 'ماشین های اداری ', 'E:/ghoreishi/digito/public/images/blog_categories/1744468316_1430613.jpg', '1744468316_1430613.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `image` varchar(1000) NOT NULL,
  `image_name` varchar(1000) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `title`, `image`, `image_name`, `status`) VALUES
(7, 'شاییومی ', 'E:/ghoreishi/digito/public/images/brand/94e87a78fca654f82043a676bc5f7206.png', '94e87a78fca654f82043a676bc5f7206.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `image_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `image_name`, `status`) VALUES
(2, 'سامسونگ', 'E:/ghoreishi/teb/public/images/brands/1754919809_2.jpg', '1754919809_2.jpg', 1),
(3, 'شایومی', 'E:/ghoreishi/teb/public/images/brands/1754919823_1.png', '1754919823_1.png', 1),
(4, 'راینو', 'E:/ghoreishi/teb/public/images/brands/1754919835_12.png', '1754919835_12.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `level` tinyint NOT NULL DEFAULT '0',
  `image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `image_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `parent_id`, `level`, `image`, `image_name`, `status`) VALUES
(10, 'الکترونیک ', NULL, 0, 'E:/ghoreishi/digito/public/images/category/b32472f3f2655d0f06fcfeb53610411a.jpg', 'b32472f3f2655d0f06fcfeb53610411a.jpg', 1),
(11, 'قطعات موتوری', 10, 1, NULL, NULL, 1),
(12, 'قطعات سایپا ', 11, 2, NULL, NULL, 1),
(13, 'لوازم خانگی ', NULL, 0, 'E:/ghoreishi/digito/public/images/category/73762bbb5be159e8c4a41d5156d5f9ab.jpg', '73762bbb5be159e8c4a41d5156d5f9ab.jpg', 1),
(14, 'یخچال فریزر', 13, 1, NULL, NULL, 1),
(15, 'یخچال فریزر دوقلو', 14, 2, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_tickets`
--

CREATE TABLE `chat_tickets` (
  `id` mediumint NOT NULL,
  `ticketId` mediumint NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `fileUrl` varchar(200) DEFAULT NULL,
  `sender` tinyint NOT NULL,
  `timeSend` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `chat_tickets`
--

INSERT INTO `chat_tickets` (`id`, `ticketId`, `text`, `fileUrl`, `sender`, `timeSend`) VALUES
(77, 12, 'با سلام میخاستم محصولم رو با کد رهگیری 222356 برام رهگیری کنید . متشکرم ', NULL, 2, '2025-12-15 18:02:13'),
(82, 12, 'سلام بررسی میشه ', NULL, 1, '2025-12-16 17:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int UNSIGNED NOT NULL,
  `province_id` int UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `province_id`, `name`) VALUES
(1, 1, 'تبريز'),
(2, 1, 'كندوان'),
(3, 1, 'بندر شرفخانه'),
(4, 1, 'مراغه'),
(5, 1, 'ميانه'),
(6, 1, 'شبستر'),
(7, 1, 'مرند'),
(8, 1, 'جلفا'),
(9, 1, 'سراب'),
(10, 1, 'هاديشهر'),
(11, 1, 'بناب'),
(12, 1, 'كليبر'),
(13, 1, 'تسوج'),
(14, 1, 'اهر'),
(15, 1, 'هريس'),
(16, 1, 'عجبشير'),
(17, 1, 'هشترود'),
(18, 1, 'ملكان'),
(19, 1, 'بستان آباد'),
(20, 1, 'ورزقان'),
(21, 1, 'اسكو'),
(22, 1, 'آذر شهر'),
(23, 1, 'قره آغاج'),
(24, 1, 'ممقان'),
(25, 1, 'صوفیان'),
(26, 1, 'ایلخچی'),
(27, 1, 'خسروشهر'),
(28, 1, 'باسمنج'),
(29, 1, 'سهند'),
(30, 2, 'اروميه'),
(31, 2, 'نقده'),
(32, 2, 'ماكو'),
(33, 2, 'تكاب'),
(34, 2, 'خوي'),
(35, 2, 'مهاباد'),
(36, 2, 'سر دشت'),
(37, 2, 'چالدران'),
(38, 2, 'بوكان'),
(39, 2, 'مياندوآب'),
(40, 2, 'سلماس'),
(41, 2, 'شاهين دژ'),
(42, 2, 'پيرانشهر'),
(43, 2, 'سيه چشمه'),
(44, 2, 'اشنويه'),
(45, 2, 'چایپاره'),
(46, 2, 'پلدشت'),
(47, 2, 'شوط'),
(48, 3, 'اردبيل'),
(49, 3, 'سرعين'),
(50, 3, 'بيله سوار'),
(51, 3, 'پارس آباد'),
(52, 3, 'خلخال'),
(53, 3, 'مشگين شهر'),
(54, 3, 'مغان'),
(55, 3, 'نمين'),
(56, 3, 'نير'),
(57, 3, 'كوثر'),
(58, 3, 'كيوي'),
(59, 3, 'گرمي'),
(60, 4, 'اصفهان'),
(61, 4, 'فريدن'),
(62, 4, 'فريدون شهر'),
(63, 4, 'فلاورجان'),
(64, 4, 'گلپايگان'),
(65, 4, 'دهاقان'),
(66, 4, 'نطنز'),
(67, 4, 'نايين'),
(68, 4, 'تيران'),
(69, 4, 'كاشان'),
(70, 4, 'فولاد شهر'),
(71, 4, 'اردستان'),
(72, 4, 'سميرم'),
(73, 4, 'درچه'),
(74, 4, 'کوهپایه'),
(75, 4, 'مباركه'),
(76, 4, 'شهرضا'),
(77, 4, 'خميني شهر'),
(78, 4, 'شاهين شهر'),
(79, 4, 'نجف آباد'),
(80, 4, 'دولت آباد'),
(81, 4, 'زرين شهر'),
(82, 4, 'آران و بيدگل'),
(83, 4, 'باغ بهادران'),
(84, 4, 'خوانسار'),
(85, 4, 'مهردشت'),
(86, 4, 'علويجه'),
(87, 4, 'عسگران'),
(88, 4, 'نهضت آباد'),
(89, 4, 'حاجي آباد'),
(90, 4, 'تودشک'),
(91, 4, 'ورزنه'),
(92, 6, 'ايلام'),
(93, 6, 'مهران'),
(94, 6, 'دهلران'),
(95, 6, 'آبدانان'),
(96, 6, 'شيروان چرداول'),
(97, 6, 'دره شهر'),
(98, 6, 'ايوان'),
(99, 6, 'سرابله'),
(100, 7, 'بوشهر'),
(101, 7, 'تنگستان'),
(102, 7, 'دشتستان'),
(103, 7, 'دير'),
(104, 7, 'ديلم'),
(105, 7, 'كنگان'),
(106, 7, 'گناوه'),
(107, 7, 'ريشهر'),
(108, 7, 'دشتي'),
(109, 7, 'خورموج'),
(110, 7, 'اهرم'),
(111, 7, 'برازجان'),
(112, 7, 'خارك'),
(113, 7, 'جم'),
(114, 7, 'کاکی'),
(115, 7, 'عسلویه'),
(116, 7, 'بردخون'),
(117, 8, 'تهران'),
(118, 8, 'ورامين'),
(119, 8, 'فيروزكوه'),
(120, 8, 'ري'),
(121, 8, 'دماوند'),
(122, 8, 'اسلامشهر'),
(123, 8, 'رودهن'),
(124, 8, 'لواسان'),
(125, 8, 'بومهن'),
(126, 8, 'تجريش'),
(127, 8, 'فشم'),
(128, 8, 'كهريزك'),
(129, 8, 'پاكدشت'),
(130, 8, 'چهاردانگه'),
(131, 8, 'شريف آباد'),
(132, 8, 'قرچك'),
(133, 8, 'باقرشهر'),
(134, 8, 'شهريار'),
(135, 8, 'رباط كريم'),
(136, 8, 'قدس'),
(137, 8, 'ملارد'),
(138, 9, 'شهركرد'),
(139, 9, 'فارسان'),
(140, 9, 'بروجن'),
(141, 9, 'چلگرد'),
(142, 9, 'اردل'),
(143, 9, 'لردگان'),
(144, 9, 'سامان'),
(145, 10, 'قائن'),
(146, 10, 'فردوس'),
(147, 10, 'بيرجند'),
(148, 10, 'نهبندان'),
(149, 10, 'سربيشه'),
(150, 10, 'طبس مسینا'),
(151, 10, 'قهستان'),
(152, 10, 'درمیان'),
(153, 11, 'مشهد'),
(154, 11, 'نيشابور'),
(155, 11, 'سبزوار'),
(156, 11, 'كاشمر'),
(157, 11, 'گناباد'),
(158, 11, 'طبس'),
(159, 11, 'تربت حيدريه'),
(160, 11, 'خواف'),
(161, 11, 'تربت جام'),
(162, 11, 'تايباد'),
(163, 11, 'قوچان'),
(164, 11, 'سرخس'),
(165, 11, 'بردسكن'),
(166, 11, 'فريمان'),
(167, 11, 'چناران'),
(168, 11, 'درگز'),
(169, 11, 'كلات'),
(170, 11, 'طرقبه'),
(171, 11, 'سر ولایت'),
(172, 12, 'بجنورد'),
(173, 12, 'اسفراين'),
(174, 12, 'جاجرم'),
(175, 12, 'شيروان'),
(176, 12, 'آشخانه'),
(177, 12, 'گرمه'),
(178, 12, 'ساروج'),
(179, 13, 'اهواز'),
(180, 13, 'ايرانشهر'),
(181, 13, 'شوش'),
(182, 13, 'آبادان'),
(183, 13, 'خرمشهر'),
(184, 13, 'مسجد سليمان'),
(185, 13, 'ايذه'),
(186, 13, 'شوشتر'),
(187, 13, 'انديمشك'),
(188, 13, 'سوسنگرد'),
(189, 13, 'هويزه'),
(190, 13, 'دزفول'),
(191, 13, 'شادگان'),
(192, 13, 'بندر ماهشهر'),
(193, 13, 'بندر امام خميني'),
(194, 13, 'اميديه'),
(195, 13, 'بهبهان'),
(196, 13, 'رامهرمز'),
(197, 13, 'باغ ملك'),
(198, 13, 'هنديجان'),
(199, 13, 'لالي'),
(200, 13, 'رامشیر'),
(201, 13, 'حمیدیه'),
(202, 13, 'دغاغله'),
(203, 13, 'ملاثانی'),
(204, 13, 'شادگان'),
(205, 13, 'ویسی'),
(206, 14, 'زنجان'),
(207, 14, 'ابهر'),
(208, 14, 'خدابنده'),
(209, 14, 'طارم'),
(210, 14, 'ماهنشان'),
(211, 14, 'خرمدره'),
(212, 14, 'ايجرود'),
(213, 14, 'زرين آباد'),
(214, 14, 'آب بر'),
(215, 14, 'قيدار'),
(216, 15, 'سمنان'),
(217, 15, 'شاهرود'),
(218, 15, 'گرمسار'),
(219, 15, 'ايوانكي'),
(220, 15, 'دامغان'),
(221, 15, 'بسطام'),
(222, 16, 'زاهدان'),
(223, 16, 'چابهار'),
(224, 16, 'خاش'),
(225, 16, 'سراوان'),
(226, 16, 'زابل'),
(227, 16, 'سرباز'),
(228, 16, 'نيكشهر'),
(229, 16, 'ايرانشهر'),
(230, 16, 'راسك'),
(231, 16, 'ميرجاوه'),
(232, 17, 'شيراز'),
(233, 17, 'اقليد'),
(234, 17, 'داراب'),
(235, 17, 'فسا'),
(236, 17, 'مرودشت'),
(237, 17, 'خرم بيد'),
(238, 17, 'آباده'),
(239, 17, 'كازرون'),
(240, 17, 'ممسني'),
(241, 17, 'سپيدان'),
(242, 17, 'لار'),
(243, 17, 'فيروز آباد'),
(244, 17, 'جهرم'),
(245, 17, 'ني ريز'),
(246, 17, 'استهبان'),
(247, 17, 'لامرد'),
(248, 17, 'مهر'),
(249, 17, 'حاجي آباد'),
(250, 17, 'نورآباد'),
(251, 17, 'اردكان'),
(252, 17, 'صفاشهر'),
(253, 17, 'ارسنجان'),
(254, 17, 'قيروكارزين'),
(255, 17, 'سوريان'),
(256, 17, 'فراشبند'),
(257, 17, 'سروستان'),
(258, 17, 'ارژن'),
(259, 17, 'گويم'),
(260, 17, 'داريون'),
(261, 17, 'زرقان'),
(262, 17, 'خان زنیان'),
(263, 17, 'کوار'),
(264, 17, 'ده بید'),
(265, 17, 'باب انار/خفر'),
(266, 17, 'بوانات'),
(267, 17, 'خرامه'),
(268, 17, 'خنج'),
(269, 17, 'سیاخ دارنگون'),
(270, 18, 'قزوين'),
(271, 18, 'تاكستان'),
(272, 18, 'آبيك'),
(273, 18, 'بوئين زهرا'),
(274, 19, 'قم'),
(275, 5, 'طالقان'),
(276, 5, 'نظرآباد'),
(277, 5, 'اشتهارد'),
(278, 5, 'هشتگرد'),
(279, 5, 'كن'),
(280, 5, 'آسارا'),
(281, 5, 'شهرک گلستان'),
(282, 5, 'اندیشه'),
(283, 5, 'كرج'),
(284, 5, 'نظر آباد'),
(285, 5, 'گوهردشت'),
(286, 5, 'ماهدشت'),
(287, 5, 'مشکین دشت'),
(288, 20, 'سنندج'),
(289, 20, 'ديواندره'),
(290, 20, 'بانه'),
(291, 20, 'بيجار'),
(292, 20, 'سقز'),
(293, 20, 'كامياران'),
(294, 20, 'قروه'),
(295, 20, 'مريوان'),
(296, 20, 'صلوات آباد'),
(297, 20, 'حسن آباد'),
(298, 21, 'كرمان'),
(299, 21, 'راور'),
(300, 21, 'بابك'),
(301, 21, 'انار'),
(302, 21, 'کوهبنان'),
(303, 21, 'رفسنجان'),
(304, 21, 'بافت'),
(305, 21, 'سيرجان'),
(306, 21, 'كهنوج'),
(307, 21, 'زرند'),
(308, 21, 'بم'),
(309, 21, 'جيرفت'),
(310, 21, 'بردسير'),
(311, 22, 'كرمانشاه'),
(312, 22, 'اسلام آباد غرب'),
(313, 22, 'سر پل ذهاب'),
(314, 22, 'كنگاور'),
(315, 22, 'سنقر'),
(316, 22, 'قصر شيرين'),
(317, 22, 'گيلان غرب'),
(318, 22, 'هرسين'),
(319, 22, 'صحنه'),
(320, 22, 'پاوه'),
(321, 22, 'جوانرود'),
(322, 22, 'شاهو'),
(323, 23, 'ياسوج'),
(324, 23, 'گچساران'),
(325, 23, 'دنا'),
(326, 23, 'دوگنبدان'),
(327, 23, 'سي سخت'),
(328, 23, 'دهدشت'),
(329, 23, 'ليكك'),
(330, 24, 'گرگان'),
(331, 24, 'آق قلا'),
(332, 24, 'گنبد كاووس'),
(333, 24, 'علي آباد كتول'),
(334, 24, 'مينو دشت'),
(335, 24, 'تركمن'),
(336, 24, 'كردكوي'),
(337, 24, 'بندر گز'),
(338, 24, 'كلاله'),
(339, 24, 'آزاد شهر'),
(340, 24, 'راميان'),
(341, 25, 'رشت'),
(342, 25, 'منجيل'),
(343, 25, 'لنگرود'),
(344, 25, 'رود سر'),
(345, 25, 'تالش'),
(346, 25, 'آستارا'),
(347, 25, 'ماسوله'),
(348, 25, 'آستانه اشرفيه'),
(349, 25, 'رودبار'),
(350, 25, 'فومن'),
(351, 25, 'صومعه سرا'),
(352, 25, 'بندرانزلي'),
(353, 25, 'كلاچاي'),
(354, 25, 'هشتپر'),
(355, 25, 'رضوان شهر'),
(356, 25, 'ماسال'),
(357, 25, 'شفت'),
(358, 25, 'سياهكل'),
(359, 25, 'املش'),
(360, 25, 'لاهیجان'),
(361, 25, 'خشک بيجار'),
(362, 25, 'خمام'),
(363, 25, 'لشت نشا'),
(364, 25, 'بندر کياشهر'),
(365, 26, 'خرم آباد'),
(366, 26, 'ماهشهر'),
(367, 26, 'دزفول'),
(368, 26, 'بروجرد'),
(369, 26, 'دورود'),
(370, 26, 'اليگودرز'),
(371, 26, 'ازنا'),
(372, 26, 'نور آباد'),
(373, 26, 'كوهدشت'),
(374, 26, 'الشتر'),
(375, 26, 'پلدختر'),
(376, 27, 'ساري'),
(377, 27, 'آمل'),
(378, 27, 'بابل'),
(379, 27, 'بابلسر'),
(380, 27, 'بهشهر'),
(381, 27, 'تنكابن'),
(382, 27, 'جويبار'),
(383, 27, 'چالوس'),
(384, 27, 'رامسر'),
(385, 27, 'سواد كوه'),
(386, 27, 'قائم شهر'),
(387, 27, 'نكا'),
(388, 27, 'نور'),
(389, 27, 'بلده'),
(390, 27, 'نوشهر'),
(391, 27, 'پل سفيد'),
(392, 27, 'محمود آباد'),
(393, 27, 'فريدون كنار'),
(394, 28, 'اراك'),
(395, 28, 'آشتيان'),
(396, 28, 'تفرش'),
(397, 28, 'خمين'),
(398, 28, 'دليجان'),
(399, 28, 'ساوه'),
(400, 28, 'سربند'),
(401, 28, 'محلات'),
(402, 28, 'شازند'),
(403, 29, 'بندرعباس'),
(404, 29, 'قشم'),
(405, 29, 'كيش'),
(406, 29, 'بندر لنگه'),
(407, 29, 'بستك'),
(408, 29, 'حاجي آباد'),
(409, 29, 'دهبارز'),
(410, 29, 'انگهران'),
(411, 29, 'ميناب'),
(412, 29, 'ابوموسي'),
(413, 29, 'بندر جاسك'),
(414, 29, 'تنب بزرگ'),
(415, 29, 'بندر خمیر'),
(416, 29, 'پارسیان'),
(417, 29, 'قشم'),
(418, 30, 'همدان'),
(419, 30, 'ملاير'),
(420, 30, 'تويسركان'),
(421, 30, 'نهاوند'),
(422, 30, 'كبودر اهنگ'),
(423, 30, 'رزن'),
(424, 30, 'اسدآباد'),
(425, 30, 'بهار'),
(426, 31, 'يزد'),
(427, 31, 'تفت'),
(428, 31, 'اردكان'),
(429, 31, 'ابركوه'),
(430, 31, 'ميبد'),
(431, 31, 'طبس'),
(432, 31, 'بافق'),
(433, 31, 'مهريز'),
(434, 31, 'اشكذر'),
(435, 31, 'هرات'),
(436, 31, 'خضرآباد'),
(437, 31, 'شاهديه'),
(438, 31, 'حمیدیه شهر'),
(439, 31, 'سید میرزا'),
(440, 31, 'زارچ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int UNSIGNED NOT NULL,
  `nameAndFamily` varchar(155) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `text` varchar(556) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `status` int NOT NULL,
  `createAt` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `nameAndFamily`, `mobile`, `text`, `status`, `createAt`) VALUES
(1, 'امیر قریشی', '09330756569', 'تست ', 1, '2025-12-02 17:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int UNSIGNED NOT NULL,
  `code` varchar(20) NOT NULL,
  `discount_value` varchar(20) NOT NULL,
  `discount_type` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `usage_limit` varchar(10) DEFAULT NULL,
  `min_purchase` varchar(20) DEFAULT NULL,
  `once_per_user` varchar(3) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `details_adminstrators`
--

CREATE TABLE `details_adminstrators` (
  `userID` mediumint NOT NULL,
  `dateBirth` varchar(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `refID` mediumint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `details_adminstrators`
--

INSERT INTO `details_adminstrators` (`userID`, `dateBirth`, `userName`, `password`, `refID`) VALUES
(3, '1379/03/23', 'admin', '$2y$10$kUBW3E6M0lvpc2lstxebqu3J1LTARNdE7JWE2FMvetpfiUTIhNkHi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `details_senior_managers`
--

CREATE TABLE `details_senior_managers` (
  `userID` mediumint NOT NULL,
  `dateBirth` varchar(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `details_senior_managers`
--

INSERT INTO `details_senior_managers` (`userID`, `dateBirth`, `userName`, `password`) VALUES
(2, '1372/7/12', 'admin', '$2y$10$O0oeF73h8w/GkCNHse3eIeGzYGI8n0YdtW287ZZcbr5CSiBjujJrG');

-- --------------------------------------------------------

--
-- Table structure for table `details_users`
--

CREATE TABLE `details_users` (
  `userID` mediumint NOT NULL,
  `dateBirth` varchar(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `refID` mediumint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `details_users`
--

INSERT INTO `details_users` (`userID`, `dateBirth`, `userName`, `password`, `refID`) VALUES
(1, '1386/07/27', 'abbasi.abl2', '$2y$10$y2L4FU3j8fXzdPK64cWx3OOYgzUnSki39ZFLcJmaFKg0MGA9wlY1q', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `description`, `status`, `type`) VALUES
(2, ' چطور برنامه تمرینی و غذایی دریافت کنیم؟', 'برای دریافت برنامه غذایی یا ورزشی کافیست روی دکمه دریافت برنامه در منوی کناری یا بالای صفحه کلیک کنید و وارد صفحه دریافت برنامه شوید ', 1, 1),
(3, 'دریافت برنامه به چه صورت است ؟', 'بعد از ارسال مشخصات بدنی خود برای ما مربیان ما بر اساس داده های ارسالی شما برنامه شما را تنطیم کرده و وارد سیستم کرده و برای شما قابل استفاده می باشد ', 1, 2),
(6, 'برای ثبت سفارش، به صفحه تماس با ما مراجعه کنید و اطلاعات خود را ارسال کنید.', 'برای ثبت سفارش، به صفحه تماس با ما مراجعه کنید و اطلاعات خود را ارسال کنید.', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `favourtes`
--

CREATE TABLE `favourtes` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `forwarding`
--

CREATE TABLE `forwarding` (
  `min_weight` varchar(20) NOT NULL,
  `max_weight` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `base_post_cost` varchar(20) NOT NULL,
  `insurance_cost` varchar(20) NOT NULL,
  `added_value_tax` varchar(20) NOT NULL,
  `id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int UNSIGNED NOT NULL,
  `mobileHeather` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `title_store` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `image_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `color` varchar(100) NOT NULL,
  `font` int NOT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mobile_sms` varchar(11) NOT NULL,
  `theme` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `post_code` varchar(30) NOT NULL,
  `working_hours` varchar(50) NOT NULL,
  `color2` varchar(10) NOT NULL,
  `color3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `mobileHeather`, `title_store`, `text`, `image`, `image_name`, `color`, `font`, `address`, `mobile_sms`, `theme`, `email`, `post_code`, `working_hours`, `color2`, `color3`) VALUES
(1, '051-44556677', 'دیجیتو', 'دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!', 'E:/ghoreishi/digito/public/images/logo/e66af7bb5c973fe75428a0c6f3dca402.png', 'e66af7bb5c973fe75428a0c6f3dca402.png', '#ff8e3d', 3, 'شهر اصلی - خیابان اصلی - کوچه اصلی - پلاک 1', '09330756569', 1, 'digito@gmail.com', '9613856699', '8 تا 21', '#ff7900', '#e06800');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `title`, `link`, `status`) VALUES
(1, 'instagram', 'test2222', 1),
(2, 'whatsapp', 'test', 1),
(3, 'etaa', 'te', 1),
(4, 'telegram', 'q', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(300) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `price` text NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `status` int NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `garanti` varchar(255) NOT NULL,
  `main_image` text NOT NULL,
  `images` text NOT NULL,
  `english_title` varchar(200) DEFAULT NULL,
  `length` int NOT NULL,
  `width` int NOT NULL,
  `height` int NOT NULL,
  `actualWeight` int NOT NULL,
  `token` int DEFAULT NULL,
  `technical` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `category_id` int NOT NULL,
  `max_purchases` int DEFAULT NULL,
  `brand_id` int NOT NULL,
  `special` int NOT NULL,
  `seo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `price`, `stock`, `status`, `short_description`, `description`, `created_at`, `garanti`, `main_image`, `images`, `english_title`, `length`, `width`, `height`, `actualWeight`, `token`, `technical`, `category_id`, `max_purchases`, `brand_id`, `special`, `seo`) VALUES
(11, 'لپ تاپ 13.3 اینچی ایسوس مدل Zenbook S 13 OLED UX5304VA', 'لپ-تاپ-13-3-اینچی-ایسوس-مدل-enbook-13-5304-', '5000000', 3, 1, 'تست&nbsp;', '<p>تست&nbsp;</p>', '2025-12-18 05:57:57', '', '1766050077_4823_1.webp', '[\"1766050077_4823_1.webp\"]', 'Asus Zenbook S 13 OLED UX5304VA-NQ003 13.3 Inch Laptop', 20, 12, 30, 400, 24, '[{\"name\":\"\\u06a9\\u0634\\u0648\\u0631 \\u0633\\u0627\\u0646\\u062f\\u0647 : \",\"value\":\"\\u0627\\u06cc\\u0631\\u0627\\u0646 \"}]', 12, 2, 3, 2, '{\"title\":\"\\u0644\\u067e \\u062a\\u0627\\u067e 13.3 \\u0627\\u06cc\\u0646\\u0686\\u06cc \\u0627\\u06cc\\u0633\\u0648\\u0633 \\u0645\\u062f\\u0644 Zenbook S 13 OLED UX5304VA\",\"keywords\":[\"\"],\"seo_description\":\"\",\"canonical\":\"\"}'),
(12, 'لپ تاپ 13.3 اینچی ایسوس مدل Zenbook S 13 OLED UX5304VA', 'لپ-تاپ-13-3-اینچی-ایسوس-مدل-enbook-13-5304-', '5000000', 3, 1, 'تست&nbsp;', '<p>تست&nbsp;</p>', '2025-12-18 06:00:23', '', '1766050223_5023_1.webp', '[\"1766050223_5023_1.webp\"]', 'Asus Zenbook S 13 OLED UX5304VA-NQ003 13.3 Inch Laptop', 20, 12, 30, 400, 24, '[{\"name\":\"\\u06a9\\u0634\\u0648\\u0631 \\u0633\\u0627\\u0646\\u062f\\u0647 : \",\"value\":\"\\u0627\\u06cc\\u0631\\u0627\\u0646 \"}]', 12, 2, 3, 2, '{\"title\":\"\\u0644\\u067e \\u062a\\u0627\\u067e 13.3 \\u0627\\u06cc\\u0646\\u0686\\u06cc \\u0627\\u06cc\\u0633\\u0648\\u0633 \\u0645\\u062f\\u0644 Zenbook S 13 OLED UX5304VA\",\"keywords\":[\"\"],\"seo_description\":\"\",\"canonical\":\"\"}'),
(13, 'گوشی شاشومی نوت 13', 'گوشی-شاشومی-نوت-13', '[{\"price\":\"7000000\",\"discount\":\"6500000\",\"color\":\"#0f1ef5\",\"titleColor\":\"\\u0627\\u0628\\u06cc\",\"count\":\"1\"},{\"price\":\"6000000\",\"discount\":\"5500000\",\"color\":\"#034404\",\"titleColor\":\"\\u0633\\u0628\\u0632\",\"count\":\"2\"},{\"price\":\"550000\",\"discount\":\"450000\",\"color\":\"#000000\",\"titleColor\":\"\\u0645\\u0634\\u06a9\\u06cc\",\"count\":\"1\"}]', 1, 1, '                                                                                                                                                                                                                                                                                                                    <p>تست </p>                                                                                                                                                                                                                                                                                        ', '                                                                                                                                                                                                                                                                                                                    <p>تست </p>                                                                                                                                                                                                                                                                                        ', '2025-12-18 06:04:17', '10', '1766050457_7591_5.webp', '[\"1766050457_7591_5.webp\"]', 'not 13 s ', 20, 12, 30, 400, NULL, '[{\"name\":\"on\",\"value\":\"\\u0627\\u0646\\u062f\\u0648\\u0646\\u0632\\u06cc\"}]', 15, 2, 7, 1, '{\"title\":\"\\u06af\\u0648\\u0634\\u06cc \\u0634\\u0627\\u0634\\u0648\\u0645\\u06cc \\u0646\\u0648\\u062a 13\",\"keywords\":[\"\"],\"seo_description\":\"\",\"canonical\":\"\"}'),
(14, 'کامپیوتر گیمینگ ', 'کامپیوتر-گیمینگ-', '[{\"price\":\"7000000\",\"discount\":\"6500000\",\"color\":\"#000000\",\"titleColor\":\"\\u0645\\u0634\\u06a9\\u06cc \",\"count\":\"2\"},{\"price\":\"6000000\",\"discount\":\"5000000\",\"color\":\"#6b2ae5\",\"titleColor\":\"\\u0628\\u0646\\u0641\\u0634 \",\"count\":\"2\"}]', 2, 1, '                                                                                                                                                                                                                                                                        <p>تست </p>                                                                                                                                                                                                                                                ', '                                                                                                                                                                                                                                                                        <p>تست </p>                                                                                                                                                                                                                                                ', '2025-12-18 11:44:22', '18', '1766070862_9049_13.webp', '[\"1766070862_9049_13.webp\"]', 'pc ', 20, 12, 40, 400, NULL, '[{\"name\":\"on\",\"value\":\"\\u0686\\u06cc\\u0646 \"},{\"name\":\"on\",\"value\":\"8 \\u06af\\u06cc\\u06af \\u06af\\u0631\\u0627\\u0641\\u06cc\\u06a9 \"},{\"name\":\"on\",\"value\":\"\\u0633\\u0627\\u0645\\u0633\\u0648\\u0646\\u06af \"}]', 12, 2, 7, 2, '{\"title\":\"\\u06a9\\u0627\\u0645\\u067e\\u06cc\\u0648\\u062a\\u0631 \\u06af\\u06cc\\u0645\\u06cc\\u0646\\u06af \",\"keywords\":[\"\"],\"seo_description\":\"\",\"canonical\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`) VALUES
(1, 'آذربايجان شرقي'),
(2, 'آذربايجان غربي'),
(3, 'اردبيل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ايلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال بختياري'),
(10, 'خراسان جنوبي'),
(11, 'خراسان رضوي'),
(12, 'خراسان شمالي'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سيستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوين'),
(19, 'قم'),
(20, 'كردستان'),
(21, 'كرمان'),
(22, 'كرمانشاه'),
(23, 'كهكيلويه و بويراحمد'),
(24, 'گلستان'),
(25, 'گيلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مركزي'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'يزد');

-- --------------------------------------------------------

--
-- Table structure for table `request_login`
--

CREATE TABLE `request_login` (
  `userIp` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'sms'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `request_login`
--

INSERT INTO `request_login` (`userIp`, `time`, `type`) VALUES
('127.0.0.1', '1764752064', 'req'),
('127.0.0.1', '1764752173', 'req'),
('127.0.0.1', '1764754535', 'req'),
('127.0.0.1', '1764754538', 'sms'),
('127.0.0.1', '1764754579', 'sms'),
('127.0.0.1', '1764755474', 'sms'),
('127.0.0.1', '1764856306', 'sms'),
('127.0.0.1', '1764856434', 'sms'),
('127.0.0.1', '1765031731', 'sms'),
('127.0.0.1', '1765695534', 'sms'),
('127.0.0.1', '1765697215', 'sms'),
('127.0.0.1', '1765704412', 'sms'),
('127.0.0.1', '1765732197', 'sms'),
('127.0.0.1', '1765810429', 'sms'),
('127.0.0.1', '1765898714', 'sms'),
('127.0.0.1', '1765956565', 'sms'),
('127.0.0.1', '1765962203', 'sms');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` mediumint NOT NULL,
  `userID` mediumint NOT NULL,
  `title` varchar(100) NOT NULL,
  `code_tickets` int NOT NULL,
  `timeSend` varchar(19) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `userID`, `title`, `code_tickets`, `timeSend`, `status`) VALUES
(12, 5, 'رهگیری مرسوله ', 6675011, '2025-12-15 18:02:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_info_public`
--

CREATE TABLE `users_info_public` (
  `userID` mediumint NOT NULL,
  `userMobile` int NOT NULL,
  `userAccLvl` tinyint NOT NULL,
  `userFullName` varchar(25) NOT NULL,
  `gender` tinyint NOT NULL,
  `status` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users_info_public`
--

INSERT INTO `users_info_public` (`userID`, `userMobile`, `userAccLvl`, `userFullName`, `gender`, `status`) VALUES
(1, 155706106, 4, 'ابوالفضل عباسی', 1, 1),
(2, 155725643, 1, 'حسین حسینی', 1, 1),
(3, 123657182, 2, 'محمد یوسفی', 1, 1),
(4, 304809037, 4, 'کاربر سایت', 1, 1),
(5, 330756569, 4, 'امیر قریشی نژاد', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_last_login`
--

CREATE TABLE `users_last_login` (
  `userID` mediumint NOT NULL,
  `date` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users_last_login`
--

INSERT INTO `users_last_login` (`userID`, `date`) VALUES
(1, '2024-10-12 02:12:44'),
(2, '2025-12-20 14:11:27'),
(3, '2024-11-09 18:52:54'),
(4, '2024-10-16 16:51:28'),
(5, '2025-12-17 09:03:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertising_banner`
--
ALTER TABLE `advertising_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_tickets`
--
ALTER TABLE `chat_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketId` (`ticketId`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_adminstrators`
--
ALTER TABLE `details_adminstrators`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `details_senior_managers`
--
ALTER TABLE `details_senior_managers`
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- Indexes for table `details_users`
--
ALTER TABLE `details_users`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourtes`
--
ALTER TABLE `favourtes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forwarding`
--
ALTER TABLE `forwarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users_info_public`
--
ALTER TABLE `users_info_public`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users_last_login`
--
ALTER TABLE `users_last_login`
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `advertising_banner`
--
ALTER TABLE `advertising_banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat_tickets`
--
ALTER TABLE `chat_tickets`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favourtes`
--
ALTER TABLE `favourtes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `forwarding`
--
ALTER TABLE `forwarding`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_info_public`
--
ALTER TABLE `users_info_public`
  MODIFY `userID` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_last_login`
--
ALTER TABLE `users_last_login`
  MODIFY `userID` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
