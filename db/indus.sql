-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 03:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indus`
--

-- --------------------------------------------------------

--
-- Table structure for table `switch_admin`
--

CREATE TABLE `switch_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `admin_password` varchar(225) CHARACTER SET latin1 NOT NULL,
  `admin_type` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `switch_admin`
--

INSERT INTO `switch_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_type`) VALUES
(1, 'master', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `switch_data`
--

CREATE TABLE `switch_data` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `json_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `switch_data`
--

INSERT INTO `switch_data` (`id`, `type`, `category_id`, `subcategory_id`, `name`, `image`, `json_data`, `slug`, `status`, `update_at`) VALUES
(1, 'banner', 0, 0, 'Test', 'smallthmb_7490381538684651interior-design.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"banner\",\"name\":\"Test\",\"description\":\"<p>Lorem ipsum dolor sit amet, nam te agam soleat cetero,<br \\/> his ad exerci quodsi sententiae putent bonorum ne.<\\/p>\"}', 'test', 'Yes', '2018-10-04 20:24:11'),
(2, 'banner', 0, 0, 'testingg', 'smallthmb_6988211538684674interior-design-2.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"banner\",\"name\":\"testingg\",\"description\":\"<p>Lorem ipsum dolor sit amet, nam te agam soleat cetero,<br \\/> his ad exerci quodsi sententiae putent bonorum ne.<\\/p>\"}', 'testingg', 'Yes', '2018-10-04 20:24:34'),
(3, 'service', 0, 0, 'Service 1', 'smallthmb_443515386853881.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"service\",\"name\":\"Service 1\",\"description\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.<\\/p>\"}', 'service-1', 'Yes', '2018-10-04 20:36:28'),
(4, 'service', 0, 0, 'Servuce 2', 'smallthmb_7485115386854052.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"service\",\"name\":\"Servuce 2\",\"description\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.<\\/p>\"}', 'servuce-2', 'Yes', '2018-10-04 20:36:45'),
(5, 'service', 0, 0, 'Service 4', 'smallthmb_77859315386854213.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"service\",\"name\":\"Service 4\",\"description\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.<\\/p>\"}', 'service-4', 'Yes', '2018-10-04 20:37:01'),
(6, 'category', 0, 0, 'Cat1', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"category\",\"name\":\"Cat1\",\"description\":\"\"}', 'cat1', 'Yes', '2018-10-04 20:43:34'),
(7, 'category', 0, 0, 'Cat2', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"category\",\"name\":\"Cat2\",\"description\":\"\"}', 'cat2', 'Yes', '2018-10-04 20:43:43'),
(8, 'subcategory', 7, 0, 'Project15', 'smallthmb_6869331538686299p4_a.jpg', '{\"action\":\"edit\",\"id\":\"8\",\"type\":\"subcategory\",\"category_id\":\"7\",\"name\":\"Project15\",\"project_info\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"project_features\":\"<ul class=\\\"project-info-list info-div2\\\">\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Client<\\/h5>\\r\\n<p>Modern Designers<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Category<\\/h5>\\r\\n<p>Residential Design<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Start Date<\\/h5>\\r\\n<p>17th Dec 2018<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>End Date<\\/h5>\\r\\n<p>21st Feb 2016<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Project Value<\\/h5>\\r\\n<p>$2650.00<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Location<\\/h5>\\r\\n<p>Newyork City, USA<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<\\/ul>\"}', 'project15', 'Yes', '2018-10-04 20:51:39'),
(9, 'subcategory', 6, 0, 'Project12', 'smallthmb_6825171538686276p3_b.jpg', '{\"action\":\"edit\",\"id\":\"9\",\"type\":\"subcategory\",\"category_id\":\"6\",\"name\":\"Project12\",\"project_info\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"project_features\":\"<ul class=\\\"project-info-list info-div2\\\">\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Client<\\/h5>\\r\\n<p>Modern Designers<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Category<\\/h5>\\r\\n<p>Residential Design<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Start Date<\\/h5>\\r\\n<p>17th Dec 2018<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>End Date<\\/h5>\\r\\n<p>21st Feb 2016<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Project Value<\\/h5>\\r\\n<p>$2650.00<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Location<\\/h5>\\r\\n<p>Newyork City, USA<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<\\/ul>\"}', 'project12', 'Yes', '2018-10-04 20:51:16'),
(10, 'subcategory', 6, 0, 'Project11', 'smallthmb_874231538686246rel-pj-2.jpg', '{\"action\":\"edit\",\"id\":\"10\",\"type\":\"subcategory\",\"category_id\":\"6\",\"name\":\"Project11\",\"project_info\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"project_features\":\"<ul class=\\\"project-info-list info-div2\\\">\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Client<\\/h5>\\r\\n<p>Modern Designers<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Category<\\/h5>\\r\\n<p>Residential Design<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Start Date<\\/h5>\\r\\n<p>17th Dec 2018<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>End Date<\\/h5>\\r\\n<p>21st Feb 2016<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Project Value<\\/h5>\\r\\n<p>$2650.00<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Location<\\/h5>\\r\\n<p>Newyork City, USA<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<\\/ul>\"}', 'project11', 'Yes', '2018-10-04 20:50:46'),
(11, 'subcategory', 7, 0, 'Project1', 'smallthmb_7121371538686258office2.jpg', '{\"action\":\"edit\",\"id\":\"11\",\"type\":\"subcategory\",\"category_id\":\"7\",\"name\":\"Project1\",\"project_info\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pharetra libero, nec euismod quam. Aliquam porta metus dolor, id maximus arcu ullamcorper et. Donec vitae nisi ac mi finibus malesuada. Nam pellentesque eget diam ut luctus.<\\/p>\",\"project_features\":\"<ul class=\\\"project-info-list info-div2\\\">\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Client<\\/h5>\\r\\n<p>Modern Designers<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Category<\\/h5>\\r\\n<p>Residential Design<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Start Date<\\/h5>\\r\\n<p>17th Dec 2018<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>End Date<\\/h5>\\r\\n<p>21st Feb 2016<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Project Value<\\/h5>\\r\\n<p>$2650.00<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<li>\\r\\n<div class=\\\"icon-holder\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"text-holder\\\">\\r\\n<h5>Location<\\/h5>\\r\\n<p>Newyork City, USA<\\/p>\\r\\n<\\/div>\\r\\n<\\/li>\\r\\n<\\/ul>\"}', 'project1-11', 'Yes', '2018-10-04 20:50:58'),
(14, 'testimonial', 0, 0, 'Rajib', 'smallthmb_8648311538689693img2.jpg', '{\"action\":\"edit\",\"id\":\"14\",\"type\":\"testimonial\",\"name\":\"Rajib\",\"designation\":\"test\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons entum tempor. Duis porta lectus ut dui consequat<\\/p>\"}', 'rajib', 'Yes', '2018-10-04 21:48:13'),
(15, 'testimonial', 0, 0, 'Rajib', 'smallthmb_8967011538689679img3.jpg', '{\"action\":\"edit\",\"id\":\"15\",\"type\":\"testimonial\",\"name\":\"Rajib\",\"designation\":\"test\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons entum tempor. Duis porta lectus ut dui consequat<\\/p>\"}', 'rajib-15', 'Yes', '2018-10-04 21:47:59'),
(16, 'testimonial', 0, 0, 'sdgsdg', 'smallthmb_25901538689735img1.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"testimonial\",\"name\":\"sdgsdg\",\"designation\":\"gsdgsdg\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons entum tempor. Duis porta lectus ut dui consequat<\\/p>\"}', 'sdgsdg', 'Yes', '2018-10-04 21:48:55'),
(17, 'testimonial', 0, 0, 'dgdsgs', 'smallthmb_973431538689754img4.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"testimonial\",\"name\":\"dgdsgs\",\"designation\":\"xcvcxvcx\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons entum tempor. Duis porta lectus ut dui consequat<\\/p>\"}', 'dgdsgs', 'Yes', '2018-10-04 21:49:14'),
(18, 'testimonial', 0, 0, 'fdhc cfbdfh', 'smallthmb_8389811538689775img3.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"testimonial\",\"name\":\"fdhc cfbdfh\",\"designation\":\"dfhdfhdf\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons entum tempor. Duis porta lectus ut dui consequat<\\/p>\"}', 'fdhc-cfbdfh', 'Yes', '2018-10-04 21:49:35'),
(20, 'gallery', 7, 0, 'test', 'smallthmb_93472115524230242015-09-26+22.56.55.jpg', '{\"action\":\"edit\",\"id\":\"20\",\"type\":\"gallery\",\"category_id\":\"7\",\"name\":\"test\"}', 'test', 'Yes', '2019-03-12 20:38:53'),
(21, 'gallery', 6, 0, 'testt tt', 'smallthmb_4294671548879471IMG_6943.JPG', '{\"action\":\"edit\",\"id\":\"21\",\"type\":\"gallery\",\"name\":\"testt tt\"}', 'testt-tt', 'Yes', '2019-05-05 17:29:24'),
(26, 'client', 0, 0, '', 'smallthmb_2859681552421212awards01.png', '{\"action\":\"add\",\"id\":\"\",\"type\":\"client\",\"name\":\"\",\"description\":\"\"}', '-26', 'Yes', '2019-03-12 20:06:52'),
(27, 'client', 0, 0, '', 'smallthmb_8127621552421221awards02.png', '{\"action\":\"add\",\"id\":\"\",\"type\":\"client\",\"name\":\"\",\"description\":\"\"}', '-27', 'Yes', '2019-03-12 20:07:02'),
(28, 'equipment', 0, 0, 'First', 'smallthmb_50906715524231842015-09-26+22.56.55.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"equipment\",\"name\":\"First\",\"description\":\"<p>Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.<\\/p>\"}', 'first', 'Yes', '2019-03-12 20:39:44'),
(29, 'equipment', 0, 0, 'Twow', 'smallthmb_4023251552423199blog01.jpg', '{\"action\":\"edit\",\"id\":\"29\",\"type\":\"equipment\",\"name\":\"Twow\",\"description\":\"<p>Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.Keep in mind: when you start a new project, it\'s essential to choose the right road to move forward. Thankfully, we\'ve been there before, and we know where to turn on a highway.<\\/p>\"}', 'twow', 'Yes', '2019-03-12 21:00:26'),
(35, 'show', 0, 0, 'testter', 'smallthmb_6901891552761785img4.jpg', '{\"action\":\"edit\",\"id\":\"35\",\"type\":\"show\",\"name\":\"testter\",\"post_date\":\"12\\/11\\/2019\",\"event_status\":\"Upcomming\",\"location\":\"Location\",\"description\":\"<p>We create digital experiences for brands communicating the unique services provided to your customers. Creativity for us something personal.We create digital experiences for brands communicating the unique services provided to your customers. Creativity for us something personal.We create digital experiences for brands communicating the unique services provided to your customers. Creativity for us something personal.<\\/p>\"}', 'testter', 'Yes', '2019-05-13 12:31:34'),
(36, 'show', 0, 0, 'Testingdsds', 'smallthmb_4768341552761813img1.jpg', '{\"action\":\"edit\",\"id\":\"36\",\"type\":\"show\",\"name\":\"Testingdsds\",\"post_date\":\"12\\/12\\/2019\",\"event_status\":\"Complted\",\"location\":\"Kolkata\",\"description\":\"<p>We create digital experiences for brands communicating the unique services provided to your customers. Creativity for us something personal.We create digital experiences for brands communicating the unique services provided to your customers. Creativity for us something personal.We create digital experiences for brands communicating the unique services provided to your customers. Creativity for us something personal.<\\/p>\"}', 'testingdsds', 'Yes', '2019-05-13 12:30:30'),
(44, 'branding', 0, 0, 'brand 1', 'smallthmb_91486215528382742015-09-26+22.56.55.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"branding\",\"name\":\"brand 1\",\"description\":\"\"}', 'brand-1', 'Yes', '2019-03-17 15:57:54'),
(45, 'branding', 0, 0, 'brand 2', 'smallthmb_2201711552838291blog04.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"branding\",\"name\":\"brand 2\",\"description\":\"\"}', 'brand-2', 'Yes', '2019-03-17 15:58:11'),
(47, 'creative', 0, 0, 'sdsdf', 'smallthmb_72299215528388302015-09-26+22.56.55.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"creative\",\"name\":\"sdsdf\",\"description\":\"\"}', 'sdsdf', 'Yes', '2019-03-17 16:07:10'),
(48, 'creative', 0, 0, 'dsfdsf', 'smallthmb_7819851552838842img5.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"creative\",\"name\":\"dsfdsf\",\"description\":\"\"}', 'dsfdsf', 'Yes', '2019-03-17 16:07:22'),
(50, 'press', 0, 0, 'sdsd', 'smallthmb_335991557750848B_happywinte_x53sdq88.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"press\",\"name\":\"sdsd\",\"description\":\"\"}', 'sdsd', 'Yes', '2019-05-13 12:34:08'),
(51, 'press', 0, 0, 'sdsdsd', 'smallthmb_9609981557750856images(1).jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"press\",\"name\":\"sdsdsd\",\"description\":\"\"}', 'sdsdsd', 'Yes', '2019-05-13 12:34:16'),
(52, 'press', 0, 0, 'sdsd', 'smallthmb_3443291557750863best-nature-top-hd-wallpapers-widescreen.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"press\",\"name\":\"sdsd\",\"description\":\"\"}', 'sdsd-52', 'Yes', '2019-05-13 12:34:23'),
(53, 'press', 0, 0, 'sdsd', 'smallthmb_1507261557750869images(3).jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"press\",\"name\":\"sdsd\",\"description\":\"\"}', 'sdsd-53', 'Yes', '2019-05-13 12:34:29'),
(54, 'video', 0, 0, 'sdsdsdsd', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"video\",\"name\":\"sdsdsdsd\",\"video_url\":\"https:\\/\\/www.youtube.com\\/embed\\/mjkqN8pLU8\"}', 'sdsdsdsd', 'Yes', '2019-05-13 12:40:12'),
(55, 'video', 0, 0, 'dfdsfsdfs', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"video\",\"name\":\"dfdsfsdfs\",\"video_url\":\"https:\\/\\/www.youtube.com\\/embed\\/mjkqN8pLU8\"}', 'dfdsfsdfs', 'Yes', '2019-05-13 12:40:21'),
(56, 'video', 0, 0, 'ssddsd', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"video\",\"name\":\"ssddsd\",\"video_url\":\"https:\\/\\/www.youtube.com\\/embed\\/mjkqN8pLU8w\"}', 'ssddsd', 'Yes', '2019-05-13 12:43:07'),
(57, 'cms', 0, 0, 'Indusband', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Indusband\",\"description\":\"<p>It is a two member band with a tenor voice from India and a bass from Bangladesh. SOMALI has been the vocalist, a Sangeet Visharad from Lucknow Vatkhande Sangeet Vidyapith. Mystical genres of music from around the world and the musical notes from Indian subcontinent on that canvas has been her sphere of work. F Hossain, the bassist, has been a thorough rock musician playing in numerous leading bands in Bangladesh so far. His playing creates a soulful jazz tone while he converges with classical forms with strong trance and psychedelic overtones. Together the tenor-bass combination creates the magic of mystical world to tell the story of humanity on stage.<\\/p>\"}', 'indusband', 'Yes', '2019-05-13 12:46:23'),
(58, 'cms', 0, 0, 'Migrating Music: A Genre in Making', 'smallthmb_1379081557751608images(1).jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Migrating Music: A Genre in Making\",\"description\":\"<p>traversed and founded habitations in, including Persia, Turkey, and, of course, parts of Indian peninsula, became mere have-note with only the glorious cultural heritage, and were commonly known as the Gypsies after their ever migrating character. Toward the end of the 14th century, and early into the 15th century, Taimur&rsquo;s conquest resulted in immense destruction and loss of life in Persia and India. And the poorest of the poor people of the areas, I.e., the Gypsies, were the worst sufferers. Many of these wanderers, or the Gypsies, headed west, and some of them finally ended up in the early 15th century in the Spain, and, in particular, in Andalusia. This part of the world, the corridor of the Gypsies, incidentally, has been the cradle of Mysticism.traversed and founded habitations in, including Persia, Turkey, and, of course, parts of Indian peninsula, became mere have-note with only the glorious cultural heritage, and were commonly known as the Gypsies after their ever migrating character. Toward the end of the 14th century, and early into the 15th century, Taimur&rsquo;s conquest resulted in immense destruction and loss of life in Persia and India. And the poorest of the poor people of the areas, I.e., the Gypsies, were the worst sufferers. Many of these wanderers, or the Gypsies, headed west, and some of them finally ended up in the early 15th century in the Spain, and, in particular, in Andalusia. This part of the world, the corridor of the Gypsies, incidentally, has been the cradle of Mysticism.<\\/p>\"}', 'migrating-music-a-genre-in-making', 'Yes', '2019-05-13 12:46:48'),
(59, 'cms', 0, 0, 'Testts aboutt', 'smallthmb_9190361557751635images.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Testts aboutt\",\"description\":\"<p>traversed and founded habitations in, including Persia, Turkey, and, of course, parts of Indian peninsula, became mere have-note with only the glorious cultural heritage, and were commonly known as the Gypsies after their ever migrating character. Toward the end of the 14th century, and early into the 15th century, Taimur&rsquo;s conquest resulted in immense destruction and loss of life in Persia and India. And the poorest of the poor people of the areas, I.e., the Gypsies, were the worst sufferers. Many of these wanderers, or the Gypsies, headed west, and some of them finally ended up in the early 15th century in the Spain, and, in particular, in Andalusia. This part of the world, the corridor of the Gypsies, incidentally, has been the cradle of Mysticism.traversed and founded habitations in, including Persia, Turkey, and, of course, parts of Indian peninsula, became mere have-note with only the glorious cultural heritage, and were commonly known as the Gypsies after their ever migrating character. Toward the end of the 14th century, and early into the 15th century, Taimur&rsquo;s conquest resulted in immense destruction and loss of life in Persia and India. And the poorest of the poor people of the areas, I.e., the Gypsies, were the worst sufferers. Many of these wanderers, or the Gypsies, headed west, and some of them finally ended up in the early 15th century in the Spain, and, in particular, in Andalusia. This part of the world, the corridor of the Gypsies, incidentally, has been the cradle of Mysticism.<\\/p>\"}', 'testts-aboutt', 'Yes', '2019-05-13 12:47:15'),
(60, 'cms', 0, 0, 'About', 'smallthmb_8798821557752026aboutbanner.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"About\",\"description\":\"\"}', 'about', 'Yes', '2019-05-13 12:53:46'),
(62, 'cms', 0, 0, 'Image', 'smallthmb_7839661557752135aboutbanner.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Image\",\"description\":\"\"}', 'image', 'Yes', '2019-05-13 12:55:35'),
(63, 'cms', 0, 0, 'Video', 'smallthmb_634151557752296abt.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Video\",\"description\":\"\"}', 'video', 'Yes', '2019-05-13 12:58:16'),
(64, 'cms', 0, 0, 'Audio', 'smallthmb_4620971557752357aboutbanner.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Audio\",\"description\":\"\"}', 'audio', 'Yes', '2019-05-13 12:59:17'),
(65, 'cms', 0, 0, 'Press', 'smallthmb_9015801557752375abt.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Press\",\"description\":\"\"}', 'press', 'Yes', '2019-05-13 12:59:36'),
(66, 'cms', 0, 0, 'Shows', 'smallthmb_8709711557752422aboutbanner.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Shows\",\"description\":\"\"}', 'shows', 'Yes', '2019-05-13 13:00:23'),
(67, 'cms', 0, 0, 'Contact', 'smallthmb_1744381557752433aboutbanner.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Contact\",\"description\":\"\"}', 'contact', 'Yes', '2019-05-13 13:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `switch_seo`
--

CREATE TABLE `switch_seo` (
  `id` int(11) NOT NULL,
  `pageurl` varchar(255) CHARACTER SET latin1 NOT NULL,
  `meta_data` longtext CHARACTER SET latin1 NOT NULL,
  `meta_key` longtext CHARACTER SET latin1 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `switch_seo`
--

INSERT INTO `switch_seo` (`id`, `pageurl`, `meta_data`, `meta_key`, `status`) VALUES
(1, 'SEO', '<p>Invictus Corporate Solutions is a knowledge centric and value driven firm committed to offering our clients seamless services in the area of resource raising, transaction &amp; corporate advisory support and strategy consulting We strive to add value to the business of our clients through focused and specialized advisory&nbsp;</p>', '<p>Invictus Corporate Solutions is a knowledge centric and value driven firm committed to offering our clients seamless services in the area of resource raising, transaction &amp; corporate advisory support and strategy consulting We strive to add value to the business of our clients through focused and specialized advisory and consulting services</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `switch_settings`
--

CREATE TABLE `switch_settings` (
  `id` int(11) NOT NULL,
  `config_type` varchar(256) CHARACTER SET latin1 NOT NULL,
  `config_val` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `switch_settings`
--

INSERT INTO `switch_settings` (`id`, `config_type`, `config_val`) VALUES
(1, 'admin_email', 'swagata.infotech@gmail.com'),
(2, 'facebook_link', 'https://www.facebook.com/swagatainfotech'),
(3, 'twitter_link', 'https://twitter.com/?lang=en'),
(6, 'youtube_link', 'http://youtube.com'),
(17, 'googleplus_link', 'http://www.google.com'),
(22, 'linkedin_link', ''),
(23, 'contact_email', 'swagata.infotech@gmail.com'),
(24, 'corporate_office_address', '106 Santoshpur Avenue, Lake Terrace, near Santoshpur Lake, Kolkata: 700075'),
(25, 'contact_no_1', '+91-9073861954'),
(26, 'contact_no_2', ''),
(27, 'product_bigthmb_width', ''),
(28, 'product_bigthmb_height', ''),
(29, 'product_smallthmb_width', ''),
(30, 'product_smallthmb_height', ''),
(31, 'banner_width', ''),
(32, 'banner_height', ''),
(33, 'additionalbanner_width', ''),
(34, 'additionalbanner_height', ''),
(35, 'landline_no', ''),
(36, 'cat_nav_limit', ''),
(39, '', ''),
(40, 'admin_email', 'swagata.infotech@gmail.com'),
(41, 'admin_email', 'swagata.infotech@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `switch_admin`
--
ALTER TABLE `switch_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `switch_data`
--
ALTER TABLE `switch_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switch_seo`
--
ALTER TABLE `switch_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switch_settings`
--
ALTER TABLE `switch_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `switch_admin`
--
ALTER TABLE `switch_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `switch_data`
--
ALTER TABLE `switch_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `switch_seo`
--
ALTER TABLE `switch_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `switch_settings`
--
ALTER TABLE `switch_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
