-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2025 at 06:00 AM
-- Server version: 11.4.4-MariaDB
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hivjvnqc_fay`
--

-- --------------------------------------------------------

--
-- Table structure for table `faylearn_category`
--

CREATE TABLE `faylearn_category` (
  `id` int(11) NOT NULL,
  `order_by` varchar(20) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `active` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faylearn_category`
--

INSERT INTO `faylearn_category` (`id`, `order_by`, `category_name`, `active`, `date`) VALUES
(1, '2', 'Nurture', '1', '2024-06-01 02:54:16'),
(2, '1', 'Academic', '1', '2024-06-01 02:54:16'),
(3, '0', 'Demo', '1', '2024-06-01 02:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `faylearn_course`
--

CREATE TABLE `faylearn_course` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_bio` varchar(100) NOT NULL,
  `course_details` varchar(1000) NOT NULL,
  `course_materials` varchar(2000) NOT NULL,
  `course_banner` varchar(200) NOT NULL,
  `course_fee` varchar(20) NOT NULL,
  `final_fee` varchar(20) NOT NULL,
  `active` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faylearn_course`
--

INSERT INTO `faylearn_course` (`id`, `category_name`, `course_name`, `course_bio`, `course_details`, `course_materials`, `course_banner`, `course_fee`, `final_fee`, `active`, `date`) VALUES
(1, 'Nurture', 'Nurture 1.0', 'Nursing Admisiion Care', 'স্বাগতম FayLearn-এর প্রথম কোর্স Nurture 1.0-এ! আমাদের এই কোর্সটি বিশেষভাবে প্রস্তুত করা হয়েছে বাংলাদেশে নার্সিং ভর্তি পরীক্ষার জন্য আগ্রহী শিক্ষার্থীদের জন্য!', '<div>                     <div class=\"flex items-center mb-3 leading-5\">                         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* সম্পূর্ণ সিলেবাস কাভারেজ:</span> নার্সিং ভর্তি পরীক্ষার সমস্ত প্রয়োজনীয় বিষয়বস্তু অন্তর্ভুক্ত।</h4>                     </div>                 </div>                 <div>                     <div class=\"flex items-center mb-3 leading-5\">                         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* সুবিন্যস্ত পাঠক্রম:</span> প্রতিটি পাঠ একটি ধারাবাহিক এবং সুসংগঠিত পদ্ধতিতে উপস্থাপন করা হয়েছে, যা আপনাকে শেখার প্রক্রিয়াকে সহজ এবং সাবলীল করবে।</h4>                     </div>                 </div>                 <div>                     <div class=\"flex items-center mb-3 leading-5\">                         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* বিশেষজ্ঞ শিক্ষক:</span> অভিজ্ঞ এবং দক্ষ শিক্ষকদের দ্বারা প্রণীত লেকচার এবং শিক্ষাসামগ্রী।</h4>                     </div>                 </div>                 <div>                     <div class=\"flex items-center mb-3 leading-5\">                         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* ইন্টারেক্টিভ কন্টেন্ট:</span> মডিউল, কুইজ এবং মূল্যায়নের মাধ্যমে আপনার জ্ঞান যাচাই করার সুযোগ।</h4>                     </div>                 </div>                 <div>                     <div class=\"flex items-center mb-3 leading-5\">                         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* সহায়ক রিসোর্স:</span> পড়াশোনার জন্য বিভিন্ন সহায়ক উপকরণ এবং গাইডলাইন প্রদান</h4>                     </div>                 </div>', 'https://i.ibb.co/fks5CWr/U10n-Bu-ERNIA-HD.jpg', '৳1000', '৳299', '1', '2024-06-01 04:30:01'),
(2, 'Nurture', 'Nurture 2.0', 'Nursing Admisiion Care', '', '', 'https://i.ibb.co/fks5CWr/U10n-Bu-ERNIA-HD.jpg', '৳1000', '৳499', '2', '2024-06-01 04:30:01'),
(3, 'Academic', 'EBI', 'HSC-English, Bangla, ICT', '', '', 'https://i.ibb.co/fks5CWr/U10n-Bu-ERNIA-HD.jpg', '৳1000', '৳399', '1', '2024-06-01 04:30:01'),
(4, 'Academic', 'Biology', 'HSC-Biology', '', '', 'https://i.ibb.co/fks5CWr/U10n-Bu-ERNIA-HD.jpg', '৳499', '৳199', '1', '2024-06-01 04:30:01'),
(5, 'Demo', 'Demo1.0', 'Demo', '', '', 'https://i.ibb.co/fks5CWr/U10n-Bu-ERNIA-HD.jpg', '৳199', '৳1', '1', '2024-06-01 04:30:01'),
(6, 'Academic', 'Bio-26', 'HSC-26 Biology Private Batch', '', '<div>     <div class=\"flex items-center mb-3 leading-5\">         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* সম্পূর্ণ                 সিলেবাস কাভারেজ:</span> একাডেমিক এবং এডমিশন ভর্তি পরীক্ষার সমস্ত প্রয়োজনীয় বিষয়বস্তু অন্তর্ভুক্ত।</h4>     </div> </div> <div>     <div class=\"flex items-center mb-3 leading-5\">         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* সুবিন্যস্ত                 পাঠক্রম:</span> প্রতিটি পাঠ একটি ধারাবাহিক এবং সুসংগঠিত পদ্ধতিতে উপস্থাপন করা হয়েছে, যা আপনাকে শেখার             প্রক্রিয়াকে সহজ এবং সাবলীল করবে।</h4>     </div> </div> <div>     <div class=\"flex items-center mb-3 leading-5\">         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* বিশেষজ্ঞ                 শিক্ষক:</span> অভিজ্ঞ এবং দক্ষ শিক্ষক দ্বারা প্রণীত লেকচার এবং শিক্ষাসামগ্রী।</h4>     </div> </div> <div>     <div class=\"flex items-center mb-3 leading-5\">         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* ইন্টারেক্টিভ                 কন্টেন্ট:</span> মডিউল, কুইজ এবং মূল্যায়নের মাধ্যমে আপনার জ্ঞান যাচাই করার সুযোগ।</h4>     </div> </div> <div>     <div class=\"flex items-center mb-3 leading-5\">         <h4 class=\"mb-0 inline-block pl-4 tracking-[0.005em] text-[#111827]\"><span class=\"font-semibold\">* সহায়ক                 রিসোর্স:</span> পড়াশোনার জন্য বিভিন্ন সহায়ক উপকরণ এবং গাইডলাইন প্রদান</h4>     </div> </div>', 'https://drive.fay.com.bd/image/HSC-26-Course.png', '', '৳500', '1', '2024-08-13 03:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `faylearn_exam`
--

CREATE TABLE `faylearn_exam` (
  `id` int(11) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `exam_id` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faylearn_exam`
--

INSERT INTO `faylearn_exam` (`id`, `course_id`, `exam_id`, `date`, `active`) VALUES
(1, '6', '80001', '2024-08-13 08:36:33', '1'),
(2, '6', '80002', '2024-08-13 08:36:33', '1'),
(3, '6', '80003', '2024-08-13 08:36:33', '1'),
(7, '6', '50796', '2024-08-22 14:41:43', '1'),
(8, '6', '50743', '2024-08-22 16:30:36', '0'),
(9, '6', '97736', '2024-08-22 16:32:03', '1'),
(10, '6', '32490', '2024-08-22 16:39:42', '1'),
(11, '16222', '56674', '2024-08-29 08:37:07', '1'),
(12, '6', '59025', '2024-08-29 08:37:31', '1');

-- --------------------------------------------------------

--
-- Table structure for table `faylearn_instructor`
--

CREATE TABLE `faylearn_instructor` (
  `id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `fay_id` varchar(20) NOT NULL,
  `active` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faylearn_instructor`
--

INSERT INTO `faylearn_instructor` (`id`, `course_id`, `fay_id`, `active`, `date`) VALUES
(1, '1', '17704', '1', '2024-06-04 12:13:17'),
(2, '1', '82', '1', '2024-06-04 12:13:17'),
(3, '3', '82', '1', '2024-06-04 12:13:17'),
(4, '3', '17704', '1', '2024-06-04 12:13:17'),
(5, '4', '17704', '1', '2024-06-04 12:13:17'),
(6, '6', '17704', '1', '2024-06-04 12:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `faylearn_invoice`
--

CREATE TABLE `faylearn_invoice` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_bio` varchar(100) NOT NULL,
  `course_fee` varchar(200) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `paid_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `active` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faylearn_invoice`
--

INSERT INTO `faylearn_invoice` (`id`, `invoice_number`, `name`, `roll`, `course_id`, `course_name`, `course_bio`, `course_fee`, `sub_total`, `total`, `status`, `paid_on`, `active`, `date`) VALUES
(53, 'FL53106142', 'Shovan Mandal', '8282828282', '5', 'Demo1.0', 'Demo', '৳199', '৳1', '৳1', '1', '2024-06-07 18:21:21', '1', '2024-06-07 18:16:24'),
(54, 'FL23313785', 'Shovan Mandal', '8282828282', '5', 'Demo1.0', 'Demo', '৳199', '৳1', '৳1', '', '2024-06-13 07:40:37', '1', '2024-06-13 07:40:37'),
(55, 'FL53472910', 'Shovan Mandal', '8282828282', '3', 'EBI', 'HSC-English, Bangla, ICT', '৳1000', '৳399', '৳399', '', '2024-06-13 07:42:39', '1', '2024-06-13 07:42:39'),
(56, 'FL67453973', 'মোঃ ফয়সাল', '8747784545', '1', 'Nurture 1.0', 'Nursing Admisiion Care', '৳1000', '৳299', '৳299', '', '2024-07-08 04:03:51', '1', '2024-07-08 04:03:51'),
(57, 'FL57850320', 'মোঃ ফয়সাল', '8747784545', '4', 'Biology', 'HSC-Biology', '৳499', '৳199', '৳199', '', '2024-07-09 05:32:29', '1', '2024-07-09 05:32:29'),
(58, 'FL23962764', 'Shovan Mandal', '8282828282', '6', 'HSC-26 Biology Private Batch', '', '500', '500', '500', '', '2024-08-13 04:27:08', '1', '2024-08-13 04:27:08'),
(59, 'FL44063537', 'মোঃ ফয়সাল', '8747784545', '6', 'Bio-26', 'HSC-26 Biology Private Batch', '', '৳500', '৳500', '', '2024-08-16 04:39:48', '1', '2024-08-16 04:39:48'),
(60, 'FL36740932', 'Mukta golder', '8727137426', '6', 'Bio-26', 'HSC-26 Biology Private Batch', '', '৳500', '৳500', '1', '2024-08-20 05:34:48', '1', '2024-08-20 05:01:55'),
(61, 'FL45712500', 'মোঃ ফয়সাল', '8747784545', '6', 'Bio-26', 'HSC-26 Biology Private Batch', '', '৳500', '৳500', '', '2024-08-20 06:52:24', '1', '2024-08-20 06:52:24'),
(62, 'FL82113836', 'Mukta golder', '8727137426', '6', 'Bio-26', 'HSC-26 Biology Private Batch', '', '৳500', '৳500', '', '2024-08-20 07:18:06', '1', '2024-08-20 07:18:06'),
(63, 'FL32101397', 'Shovan Mandal', '8282828282', '5', 'Demo1.0', 'Demo', '৳199', '৳1', '৳1', '', '2025-01-20 16:51:44', '1', '2025-01-20 16:51:44'),
(64, 'FL71772835', 'Shovan Mandal', '8282828282', '1', 'Nurture 1.0', 'Nursing Admisiion Care', '৳1000', '৳299', '৳299', '', '2025-05-05 05:54:45', '1', '2025-05-05 05:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `faylearn_student`
--

CREATE TABLE `faylearn_student` (
  `id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `student_roll` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `active` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faylearn_student`
--

INSERT INTO `faylearn_student` (`id`, `course_id`, `student_roll`, `status`, `active`, `date`) VALUES
(4, '5', '8282828282', '1', '1', '2024-06-07 18:21:21'),
(5, '6', '8727137426', '1', '1', '2024-08-20 05:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `fay_bkash`
--

CREATE TABLE `fay_bkash` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `from_fayid` varchar(20) NOT NULL,
  `to_fayid` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `trx_id` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `active` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fay_bkash`
--

INSERT INTO `fay_bkash` (`id`, `status`, `type`, `number`, `from_fayid`, `to_fayid`, `amount`, `trx_id`, `payment_id`, `invoice`, `time`, `active`, `date`) VALUES
(32, 'Completed', 'FLWEB', '01971970802', '8282828282', '8282828282', '1', 'BF8636TP76', 'TR0011n5HbwkB1717784444523', 'FL53106142', '2024-06-08T00:21:21:465 GMT+0600', '1', '2024-06-07 18:21:21'),
(33, 'Completed', 'FLWEB', '01772934785', '8727137426', '8282828282', '500', 'BHK1TSA2S9', 'TR0011B4H1LAw1724132050525', 'FL36740932', '2024-08-20T11:34:48:853 GMT+0600', '1', '2024-08-20 05:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `fay_team`
--

CREATE TABLE `fay_team` (
  `id` int(11) NOT NULL,
  `possition` varchar(20) NOT NULL DEFAULT '0',
  `fay_id` varchar(20) NOT NULL,
  `name_english` varchar(50) NOT NULL,
  `name_bangla` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `job_tittle` varchar(500) NOT NULL,
  `known_for` varchar(100) NOT NULL,
  `active` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fay_team`
--

INSERT INTO `fay_team` (`id`, `possition`, `fay_id`, `name_english`, `name_bangla`, `image`, `job_tittle`, `known_for`, `active`, `date`) VALUES
(1, '1', '17704', 'Md. Faysal', '', 'https://drive.fay.com.bd/image/faysal.jpg', 'Founder & CEO, FayLearn', 'Sher-E-Bangla Medical College', '1', '2024-06-04 18:05:59'),
(2, '1', '82', 'Shovan Mandal', 'শোভন মন্ডল', 'https://drive.fay.com.bd/image/hb.jpg', 'CTO, FayLearn', 'Founder & CEO, <a href=\"https://hbworld.com.bd\" class=\"underline text-green\">HBWorld</a>', '1', '2024-06-04 18:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `fay_user`
--

CREATE TABLE `fay_user` (
  `id` int(11) NOT NULL,
  `fayid` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name_english` varchar(50) NOT NULL,
  `name_bangla` varchar(50) NOT NULL,
  `father_english` varchar(50) NOT NULL,
  `father_bangla` varchar(50) NOT NULL,
  `mother_english` varchar(50) NOT NULL,
  `mother_bangla` varchar(50) NOT NULL,
  `parents_mobile` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT '1',
  `active` varchar(20) NOT NULL,
  `profile` varchar(20) NOT NULL DEFAULT '0',
  `referral` varchar(20) NOT NULL DEFAULT '8282828282',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fay_user`
--

INSERT INTO `fay_user` (`id`, `fayid`, `mobile`, `email`, `password`, `name_english`, `name_bangla`, `father_english`, `father_bangla`, `mother_english`, `mother_bangla`, `parents_mobile`, `address`, `date_of_birth`, `type`, `active`, `profile`, `referral`, `date`) VALUES
(1, '8282828282', '01971970802', '', '', 'Shovan Mandal', '', '', '', '', '', '', '', '', '1', '1', '0', '8282828282', '2024-06-05 02:42:19'),
(8, '8714968939', '01860515888', '', '', 'Shovan', '', '', '', '', '', '', '', '', '1', '1', '0', '8282828282', '2024-06-07 18:11:53'),
(9, '8747784545', '01770497287', '', '', 'মোঃ ফয়সাল', '', '', '', '', '', '', '', '', '1', '1', '0', '8282828282', '2024-07-08 04:03:51'),
(10, '8727137426', '01618014924', '', '', 'Mukta golder', '', '', '', '', '', '', '', '', '1', '1', '0', '8282828282', '2024-08-20 05:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faylearn_category`
--
ALTER TABLE `faylearn_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faylearn_course`
--
ALTER TABLE `faylearn_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faylearn_exam`
--
ALTER TABLE `faylearn_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faylearn_instructor`
--
ALTER TABLE `faylearn_instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faylearn_invoice`
--
ALTER TABLE `faylearn_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faylearn_student`
--
ALTER TABLE `faylearn_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fay_bkash`
--
ALTER TABLE `fay_bkash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fay_team`
--
ALTER TABLE `fay_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fay_user`
--
ALTER TABLE `fay_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faylearn_category`
--
ALTER TABLE `faylearn_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faylearn_course`
--
ALTER TABLE `faylearn_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faylearn_exam`
--
ALTER TABLE `faylearn_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faylearn_instructor`
--
ALTER TABLE `faylearn_instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faylearn_invoice`
--
ALTER TABLE `faylearn_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `faylearn_student`
--
ALTER TABLE `faylearn_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fay_bkash`
--
ALTER TABLE `fay_bkash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `fay_team`
--
ALTER TABLE `fay_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fay_user`
--
ALTER TABLE `fay_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
