-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2025 at 07:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `userName` text NOT NULL,
  `email` text NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `book_number` int(11) NOT NULL,
  `language` text NOT NULL,
  `birth_year` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `description`, `slug`, `image`, `book_number`, `language`, `birth_year`, `category_id`, `rating`) VALUES
(1, 'پونه مقیمی', '', 'پونه-مقیمی', 'assets\\img\\home\\team-img1.jpg', 5, 'فارسی', 1360, 1, 5),
(2, 'فلورانس اسکوال شین ', '', 'فلورانس-اسکوال-شین', 'assets\\img\\home\\team-img2.jpg', 10, 'انگلیسی', 1345, 2, 5),
(3, 'جیمز کلییر', '', 'جیمز-کلییر', 'assets\\img\\home\\team-img3.jpg', 4, 'انگلیسی', 1355, 3, 4),
(4, 'راندا برن', '', 'راندا-برن', 'assets\\img\\home\\team-img3.jpg', 5, 'انگلیسی', 1340, 4, 5),
(5, 'انوشا', '', 'انوشا', 'assets\\img\\home\\team-img5.jpg', 2, 'فارسی', 1367, 5, 4),
(6, 'پائولو کوئیلو', '', 'پائولو-کوئیلو', 'assets\\img\\home\\team-img7.jpg', 3, 'انگلیسی', 1340, 6, 5),
(7, 'کاترین ایلگیت', '', 'کاترین-ایلگیت', 'assets\\img\\home\\team-img8.jpg', 3, 'انگلیسی', 1360, 7, 4),
(8, 'انتوان اگزوپری', '', 'انتوان-اگزوپری', 'assets\\img\\home\\team-img9.jpg', 4, 'انگلیسی', 1360, 8, 4),
(9, 'فروغ فرخزاد', '', 'فروغ-فرخزاد', 'assets\\img\\home\\team-img7.jpg', 2, 'فارسی', 1320, 9, 5),
(10, 'شهریار', '', 'شهریار', 'assets\\img\\home\\team-img8.jpg', 2, 'فارسی', 1330, 10, 5),
(11, 'رابین شارما', '', 'رابین-شارما', 'assets\\img\\home\\team-img4.jpg', 3, 'انگلیسی', 1310, 11, 4),
(12, 'استفان گایز', '', 'استفان-گایز', 'assets\\img\\home\\team-img5.jpg', 4, 'انگلیسی', 1330, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `discount`, `title`, `body`) VALUES
(1, 31, 'با کتاب مورد علاقه بعدی خود آشنا شوید', 'تخیل خود را با حماسه های فانتزی حماسی، عرفانی آزاد کنید ماجراها و داستان های قلمروهای ماورایی. با قهرمانان وارد ماموریت شوید.');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `slug`, `status`) VALUES
(1, 'روانشناسی', 'روانشناسی', 1),
(2, 'توسعه فردی', 'توسعه-فردی', 1),
(3, 'داستان', 'داستان', 1),
(4, 'شعر', 'شعر', 1),
(6, 'ادبیات فارسی', 'ادبیات-فارسی', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `text`, `date`, `status`) VALUES
(1, 1, 1, 'عالی بوود', '2025-03-18 18:39:49', 0),
(2, NULL, 2, 'بی نظیر', '2025-05-14 16:43:27', 0),
(3, 2, 3, 'بهترین کتاب', '2025-05-10 02:32:42', 0),
(4, NULL, 4, 'لذت بردم', '2025-05-16 06:39:44', 0),
(5, 2, 5, 'بد نبود', '2025-05-01 21:28:39', 0),
(6, 1, 6, 'چرت بود', '2025-05-05 21:50:39', 0),
(7, 3, 7, 'ممنون از سایت خوبتون', '2025-05-04 21:04:58', 0),
(8, 3, 8, 'عااااالی', '2025-05-06 06:29:58', 0),
(9, 4, 9, 'بد نبود', '2025-05-28 06:31:15', 0),
(10, 4, 10, 'بهترین سایت', '2025-08-13 21:30:52', 1),
(12, 5, 12, 'مرسی از سایت خوبیتون', '2025-05-08 21:33:42', 0),
(13, 5, 1, 'محتوای کتاب عالی بود، واقعاً ارزش خوندن داشت.', '2025-05-13 01:08:37', 0),
(14, 5, 2, 'انتظارم بیشتر بود، ولی در کل بد نبود.', '2025-08-14 04:16:44', 1),
(15, 5, 3, 'خیلی ساده و روان نوشته شده، خوشم اومد.', '2025-05-13 01:09:56', 0),
(16, 4, 4, 'بعضی فصل‌ها طولانی بودن، ولی مطالب مفید بودن.', '2025-05-13 01:09:56', 0),
(17, 4, 5, 'برای شروع مطالعه در این زمینه خوبه.', '2025-08-13 21:30:36', 1),
(18, 4, 6, 'طراحی جلد و چاپ خیلی باکیفیت بود.', '2025-05-13 01:10:57', 0),
(19, 3, 7, 'نکات کاربردی زیادی داشت، پیشنهاد می‌کنم.\r\n\r\n', '2025-05-13 01:12:47', 0),
(20, 3, 8, 'به نظرم بیشتر برای افراد مبتدی مناسبه.', '2025-05-13 01:12:43', 0),
(21, 3, 9, 'محتوای کتاب به‌روز و دقیق بود.', '2025-05-13 01:14:13', 0),
(22, 2, 10, 'یکی از بهترین کتاب‌هایی بود که تو این موضوع خوندم.', '2025-05-13 01:14:13', 0),
(23, 1, 11, 'کاش بخش‌های عملی بیشتری داشت.', '2025-05-13 01:15:50', 0),
(24, 1, 12, 'زمان خوندنش اصلاً خسته نشدم، خیلی جذاب بود.', '2025-05-13 01:15:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text DEFAULT NULL,
  `publisher` text DEFAULT NULL,
  `language` text NOT NULL,
  `page_number` int(11) NOT NULL,
  `edition` int(11) DEFAULT NULL,
  `slug` text NOT NULL,
  `author` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `img_thumbnail` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `oldPrice` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `suggestion` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `key_features` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `statue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `body`, `publisher`, `language`, `page_number`, `edition`, `slug`, `author`, `rating`, `img_thumbnail`, `price`, `quantity`, `oldPrice`, `discount`, `suggestion`, `user_id`, `category_id`, `created_at`, `key_features`, `details`, `statue`) VALUES
(1, 'کتاب تکه هایی از یک کل منسجم اثر پونه مقیمی نشر بینش نو', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'بینش نو', 'فارسی', 10, 1, 'تکه-هایی-از-یک-کل-منسجم', 'پونه مقیمی', 4, 'products/gmILgv6nVCd5WKrn1ovkuJcsSnCnHtD5tVIF21O4.jpg', 30, '20', 15, 10, 0, 0, 1, '2025-08-14 04:17:55', 'محتوای کاربردی و قابل فهم برای عموم مخاطبان , ساختار منظم و هدفمند در ارائه مطالب', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(2, 'کتاب باشگاه پنج صبحی ها اثر رابین شارما نشر نون', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'نون', 'فارسی', 120, 2, 'باشگاه-پنج-صبحی-ها', 'رابین شارما', 3, 'products/TwEIN8IO69UEXuqY33yTz9G5rr4UD6cwPtJPc33J.jpg', 100, '11', 20, 5, 0, 0, 2, '2025-08-11 23:35:28', 'محتوای کاربردی و قابل فهم برای عموم مخاطبان , ساختار منظم و هدفمند در ارائه مطالب ,  مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(3, 'کتاب چگونه کمال گرا نباشیم اثر استفان گایز انتشارات شمشاد\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'شمشاد', 'فارسی', 20, 3, 'چگونه-کمال-گرا-نباشیم\r\n', 'استفان گایز', 5, 'assets\\img\\product\\pr-3.webp', 20, '2', 25, 60, 0, 0, 2, '2025-08-11 19:52:59', 'مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی  ,قابل استفاده در محیط‌های آموزشی و حرفه‌ای', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(4, 'کتاب چهار اثر فلورانس اسکاول شین انتشارات نگین ایران\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'نگین ایران', 'فارسی', 140, 4, 'چهار-اثر', 'فلورانس سلکاول شین', 5, 'assets\\img\\product\\pr-4.webp', 30, '5', 35, 5, 1, 0, 1, '2025-08-11 19:53:04', 'ارائه مطالب به‌روز و متناسب با نیازهای روز جامعه علمی و فرهنگی ,مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 0),
(5, 'کتاب قدرت شروع ناقص اثر جمیز کلیر انتشارات داریوش\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'داریوش', 'فارسی', 130, 2, ' قدرت-شروع-ناقص\r\n', 'جیمز کلییر', 3, 'assets\\img\\product\\pr-5.webp', 30, '7', 35, 65, 0, 0, 1, '2025-08-11 19:53:07', 'مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی ,ساختار منظم و هدفمند در ارائه مطالب', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(6, 'کتاب معجزه شکرگزاری اثر راندا برن انتشارات آیین محمود\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'ایین محمود', 'فارسی', 130, 3, 'معجزه-شکرگزاری\r\n', 'راندا برن', 4, 'assets\\img\\product\\pr-6.webp', 40, '10', 50, 10, 0, 0, 1, '2025-08-11 19:53:15', 'ساختار منظم و هدفمند در ارائه مطالب , قابل استفاده در محیط‌های آموزشی و حرفه‌ای', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(7, 'کتاب بیداری ، دنیای درون و بیرون خود را تغیر دهید اثر آنوشا انتشارات مون\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'مون', 'فارسی', 100, 1, 'کتاب-بیداری', 'انوشا', 5, 'assets\\img\\product\\pr-7.webp', 40, '11', 55, 5, 0, 0, 1, '2025-08-11 19:53:18', 'قابل استفاده در محیط‌های آموزشی و حرفه‌ای , مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 0),
(8, 'کتاب کیمیاگر اثر پائولو کوئیلو نشر آذرگون\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'آذرگون', 'فارسی', 200, 2, 'کتاب-کیمیاگر', 'پاءولو کولو', 5, 'assets\\img\\product\\pr-12.webp', 30, '12', 40, 6, 1, 0, 3, '2025-08-11 19:53:23', 'مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی , قابل استفاده در محیط‌های آموزشی و حرفه‌ای', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(9, 'کتاب پاستیل های بنفش اثر کاترین اپلگیت انتشارات تلاش اندیشه\r\n', 'آنچه گفته شد را توضیح خواهم داد. زیرا هیچ کس از خود لذت متنفر نیست و از آن فرار نمی کند چون موفق می شوند', 'تلاش اندیشه', 'فارسی', 150, 3, 'پاستیل-های-بنفش', 'کاترین اپلگیت', 3, 'assets\\img\\product\\pr-13.webp', 20, '8', 25, 3, 0, 0, 3, '2025-08-11 19:53:31', 'قابل استفاده در محیط‌های آموزشی و حرفه‌ای , مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به توسعه فردی', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(10, 'کتاب شازده کوچولو اثرانتشارات نگاه آشنا\r\n', '', 'نگاه اشنا', 'فارسی', 70, 1, 'شازده-کوچولو', 'آنتوان دوسنت اگزوپری', 5, 'assets\\img\\product\\pr-14.webp', 60, '3', 65, 55, 1, 0, 3, '2025-08-11 19:53:34', 'ساختار منظم و هدفمند در ارائه مطالب , قابل استفاده...', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(11, 'کتاب گزیده اشعار فروغ فرخزاد انتشارات مروارید\r\n', '', 'مروارید', 'فارسی', 130, 2, 'اشعار-فروغ-فرخزاد', 'فروغ فرخزاد', 5, 'assets\\img\\product\\pr-16.webp', 4, '5', 50, 55, 0, 0, 4, '2025-08-11 19:53:39', 'مناسب برای دانشجویان، پژوهشگران و علاقه‌مندان به ت...', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 0),
(12, 'کتاب مجموعه اشعار شهریار انتشارات درقلم\r\n', '', 'درقلم', 'فارسی', 76, 3, 'اشعار-شهریار', 'شهریار', 5, 'assets\\img\\product\\pr-19.webp', 55, '8', 60, 10, 1, 0, 4, '2025-08-11 19:53:44', 'محتوای کاربردی و قابل فهم برای عموم مخاطبان , ساخت...', 'این کتاب با نگاهی جامع و زبانی روان، مناسب برای علاقه‌مندان به یادگیری و توسعه فردی در حوزه‌های مختلف است. محتوای آن به گونه‌ای طراحی شده که برای مخاطبان عمومی، دانشجویان و متخصصان قابل استفاده باشد و درک مطالب را تسهیل کند. ', 1),
(14, 'ساعت', NULL, NULL, 'فارسی', 20, NULL, 'ادبیات-فارسی', NULL, NULL, 'products/WpUMWOQJzAPayGsmWvXtrMyQKEZzRJUW3YmfFKak.jpg', 100000, '20', NULL, 10, NULL, NULL, 6, '2025-08-14 23:21:12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bio` text NOT NULL,
  `instagram` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `bio`, `instagram`, `picture`) VALUES
(1, 1, 'شقایق قهرمانی از تهران', 'https://instagram.com/sha_ghaayegh', 'assets/img/profile-img.png'),
(2, 2, 'ازیتا صالحی از تهران', '', 'assets/img/profile-img.png'),
(3, 3, 'لیلا فروهر از دورقوزاباد', '', 'assets/img/profile-img.png'),
(4, 4, 'مهران مدیری از کرج', '', 'assets/img/profile-img.png'),
(5, 5, 'رحیمه قهرمانی از تهران', '', 'assets/img/profile-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` int(11) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `footer_icon` text NOT NULL,
  `logo` text NOT NULL,
  `header_icon` text NOT NULL,
  `footer_items` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `footer_icon`, `logo`, `header_icon`, `footer_items`) VALUES
(1, '2024 کتاب باز تمامی حقوق محفوظ است\r\n\r\n', '{\"facebook\":\"fa-brands fa-facebook-f\",\n\"instagram\":\"fa-brands fa-instagram\",\n\"twitter\":\"fa-brands fa-twitter\",\n\"youtube\":\"fa-brands fa-youtube\"}', 'assets\\img\\home\\logo-white.svg', '{\"search\":\"icon-search\",\r\n\"shopping-basket\":\"icon-shopping-basket\", \"user\":\"icon-user\"}', '{\"services\": \"شرایط خدمات\" ,\n\"privacy-policy\":\"سیاست حفظ حریم خصوصی\"\n}');

-- --------------------------------------------------------

--
-- Table structure for table `staticpages`
--

CREATE TABLE `staticpages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `secondTitle` text NOT NULL,
  `thirdTiitle` text NOT NULL,
  `description` text NOT NULL,
  `secondDescription` text NOT NULL,
  `fetureTilteOne` text NOT NULL,
  `fetureTitleTow` text NOT NULL,
  `fetureTitleThree` text NOT NULL,
  `fetureDescriptionOne` text NOT NULL,
  `fetureDescriptionTwo` text NOT NULL,
  `fetureDescriptionTree` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `staticpages`
--

INSERT INTO `staticpages` (`id`, `title`, `slug`, `secondTitle`, `thirdTiitle`, `description`, `secondDescription`, `fetureTilteOne`, `fetureTitleTow`, `fetureTitleThree`, `fetureDescriptionOne`, `fetureDescriptionTwo`, `fetureDescriptionTree`) VALUES
(1, 'درباره ما', 'about-us', 'ماموریت ما', 'مشتریان خوشحال ما در مورد چه می گویند؟', 'ماموریت ما این است که اشتیاق و عشق به کتابخوانی را بازگردانیم. آیا آن یک کتاب کاغذی معمولی یا یک نسخه آنلاین، ما می خواهیم خوانندگان ما بدانند که ما از آن قدردانی می کنیم داستان سرایی با کیفیت و هنرمندانه\r\n\r\nبه انجمن ما بپیوندید و از ژانرهای متعدد، نویسندگان مدرن و کلاسیک، نظرات، لذت ببرید. منتقدان و بیشتر!', 'فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد،', 'بهترین هدیه را بدهید\r\n', 'نویسندگان مورد علاقه خود را پیدا کنید\r\n', 'نظرات خواننده را بخوانید\r\n', 'کتاب هنوز هم یکی از بهترین هدیه هاست برای هر کسی در هر مناسبتی.\r\n\r\n', 'نویسندگان بزرگ بسیار الهام بخش هستن\r\n\r\n', 'نقد و بررسی مجلات را به صورت آنلاین خواهید دید منابع و کتاب های مورد علاقه\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `avatar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'شقایق قهرمانی', 'shaghayeghghahremani@gmail.com', NULL, '$2y$12$YYoXeu5c7Z9ednbuhUB9veugJGn3YlULMzxLlCLPvwHjEdyTIuGsi', 'KDZ2g5eH3ndUW3XKChaBGnX2YwbHngLsaLUXPqECT6yr9BUZr8EnEdAAHM6S', '1', '2025-08-14 21:03:43', '2025-08-14 04:19:30', 'user/lVYqkKGUNpgbRuMJhYlJOQmmgN63mIbDXA1tyoJw.jpg'),
(2, 'ازیتا صالحی', 'azitasalehi@gmail.com', NULL, '$2y$10$UgpOfR3xzMa4Z27zvCHW7OG6KVogFUATF0XRk7Ti.JKZHngHKIcAy', NULL, '1', '2025-08-14 17:29:20', '2025-08-13 21:31:28', 'assets\\img\\user\\7.jpg'),
(3, 'لیلا فروهر', 'lalifrhr@gmail.com', NULL, '$2y$10$UgpOfR3xzMa4Z27zvCHW7OG6KVogFUATF0XRk7Ti.JKZHngHKIcAy', NULL, '0', '2025-08-14 17:29:24', '2025-05-19 22:17:47', 'assets\\img\\user\\8.jpg'),
(4, 'مهران مدیری', 'mehranmdr@gmail.com', NULL, '$2y$10$UgpOfR3xzMa4Z27zvCHW7OG6KVogFUATF0XRk7Ti.JKZHngHKIcAy', NULL, '0', '2025-08-14 17:29:26', '2025-05-19 22:17:48', 'assets\\img\\user\\1.jpg'),
(5, 'رحیمه قهرمانی', 'rahimeghahremani@gmail.com', NULL, '$2y$10$UgpOfR3xzMa4Z27zvCHW7OG6KVogFUATF0XRk7Ti.JKZHngHKIcAy', NULL, '0', '2025-08-14 17:29:28', '2025-05-19 22:17:48', 'assets\\img\\user\\7.jpg'),
(7, 'مبینا قهرمانی', 'mobi@gmaIi.com', NULL, '$2y$12$vRi0koY0U6A1ANCfJJxoFuwG0LI1BBKFoipnYQ1KAR.M19HxJBkRC', NULL, '0', '2025-08-14 17:29:32', '2025-06-01 14:05:35', 'assets\\img\\user\\8.jpg'),
(14, 'امیرعلی', 'amiraliii@gmail.com', NULL, '$2y$12$9Co64kdswZRfbkRYl.ydfuzQX0CXRu5Toxjh64y2evuXNTW.3cCBi', NULL, '0', '2025-08-14 22:15:26', '2025-08-15 05:15:26', 'user/mcXWLRFSDeDBtL6jyO8Zerfn7WzM8oODdaVTGrP5.jpg'),
(15, 'زینب قهرمانی', 'zeinabghahremani@gmail.com', NULL, '$2y$12$f8CUlZb9xdrczD.y.u604.hznI26lmyox9CsKcLxJMtfh1d7XvfN.', NULL, '1', '2025-08-15 03:52:00', '2025-08-15 03:52:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staticpages`
--
ALTER TABLE `staticpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cache`
--
ALTER TABLE `cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staticpages`
--
ALTER TABLE `staticpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
