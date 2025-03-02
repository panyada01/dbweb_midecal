-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 06:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbweb_midecal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug`
--

CREATE TABLE `tbl_drug` (
  `drug_id` varchar(13) NOT NULL,
  `drug_name_thai` varchar(100) DEFAULT NULL,
  `drug_name_eng` varchar(100) DEFAULT NULL,
  `dt_id` varchar(6) DEFAULT NULL,
  `drug_key` text DEFAULT NULL,
  `drug_ind` text DEFAULT NULL,
  `drug_suse` text DEFAULT NULL,
  `drug_caution` text DEFAULT NULL,
  `drug_image` varchar(150) DEFAULT NULL,
  `drug_price` double DEFAULT NULL,
  `drug_amount` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_drug`
--

INSERT INTO `tbl_drug` (`drug_id`, `drug_name_thai`, `drug_name_eng`, `dt_id`, `drug_key`, `drug_ind`, `drug_suse`, `drug_caution`, `drug_image`, `drug_price`, `drug_amount`) VALUES
('0001', 'พารา', '-', '100001', '-', '-', '-', '-', '-', 25, 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drugtype`
--

CREATE TABLE `tbl_drugtype` (
  `dt_id` varchar(6) NOT NULL,
  `dt_name` varchar(100) DEFAULT NULL,
  `dt_use` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_drugtype`
--

INSERT INTO `tbl_drugtype` (`dt_id`, `dt_name`, `dt_use`) VALUES
('100001', 'ยาสามัญประจำบ้าน', 'ยาแผนปัจจุบันหรือยาแผนโบราณ ยาตำราหลวง มีไว้ประจำบ้าน ปลอดภัยสูง ใช้บ่อย'),
('100002', 'ยาอันตราย', 'ยาแผนปัจจุบันหรือยาแผนโบราณ ยาชนิดนี้หากใช้เกินขนาด ใช้ไม่ถูกวิธี อาจถึงตาย'),
('100003', 'ยาควบคุมพิเศษ', 'ยาแผนปัจจุบันหรือยาแผนโบราณ ที่ต้องมีใบสั่งแพทย์เท่านั้น'),
('100004', 'ยาแผนปัจจุบัน', 'ยาที่ใช้ในการประกอบวิชาชีพเวชกรรม แผนปัจจุบัน'),
('100005', 'ยาแผนโบราณ ', 'ยาที่ใช้ในการประกอบโรคศิลปะแผนโบราณ'),
('100006', 'ยาสมุนไพร ', 'ยาที่ได้จากพฤกษชาติ สัตว์ หรือแร่ ซึ่งไม่ได้ปรุงแต่ง แปรสภาพ'),
('100007', 'ยาใช้ทาภายนอก', 'ยาแผนปัจจุบันหรือยาแผนโบราณ สำหรับการใช้ภายนอก'),
('100008', 'ยาใช้เฉพาะที่', 'ยาแผนปัจจุบันหรือยาแผนโบราณใช้เฉพาะที่ เช่น ใช้กับผิวหนัง หู ตา จมูก ปาก ทวารหนัก ช่องคลอด ท่อปัสสาวะ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medical`
--

CREATE TABLE `tbl_medical` (
  `mdc_id` varchar(13) NOT NULL,
  `mdc_name` varchar(13) DEFAULT NULL,
  `mdc_surname` varchar(80) DEFAULT NULL,
  `pst_id` varchar(5) DEFAULT NULL,
  `mdc_add` text DEFAULT NULL,
  `mdc_email` varchar(10) DEFAULT NULL,
  `mdc_phone` varchar(50) DEFAULT NULL,
  `mdc_image` varchar(150) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medical`
--

INSERT INTO `tbl_medical` (`mdc_id`, `mdc_name`, `mdc_surname`, `pst_id`, `mdc_add`, `mdc_email`, `mdc_phone`, `mdc_image`, `username`, `password`, `level`) VALUES
('1020800035366', 'ชนน่าน', 'ก้าวไกล', '11111', 'พรรคเพื่อไทย และพรรคก้าวไกล 68/3 อ.เมือง จ.น่าน', 'sen@gmail.', '0617863452', ' ', 'sen', '112233', 'user'),
('2020600035789', 'จีระนันทร', 'ณ เขาใหญ่กาฬสินธุ์', '11111', '202 ถ.เกษตรสมบูรณ์ ต.กาฬสินธุ์ อ.เมือง จ.กาฬสินธุ์', 'Jiran@gmai', '0945621876', ' ', 'jiran.n', '22446688', 'user'),
('3430800035345', 'เจษฎา', 'สิงห์ทองชัย', '11132', '13 หมู่ 14 ต.สงเปลือย อ.นามน จ.กาฬสินธุ์ 46230  [มหาวิทยาลัยกาฬสินธุ์ พื้นที่นามน]', 'jatsada.si', '043-602-055', NULL, 'jatsada.si', '111111', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `pst_id` varchar(5) NOT NULL,
  `pst_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`pst_id`, `pst_name`) VALUES
('11111', 'แพทย์'),
('11112', 'ทันตแพทย์'),
('11113', 'เภสัชกร'),
('11114', 'พยาบาลวิชาชีพ'),
('11115', 'นักเทคนิคการแพทย์'),
('11116', 'นักกายภาพบำบัด'),
('11117', 'นักรังสีการแพทย์'),
('11118', 'นักกิจกรรมบำบัด'),
('11119', 'นักจิตวิทยาคลินิก'),
('11120', 'นักเวชศาสตร์สื่อความหมาย'),
('11121', 'นักเทคโนโลยีหัวใจและทรวงอก'),
('11122', 'นักการแพทย์แผนไทย'),
('11123', 'นักวิชาการสาธารณสุข'),
('11124', 'นักฟิสิกส์รังสี'),
('11125', 'นักโภชนาการ/นักกำหนดอาหาร'),
('11126', 'นักวิทยาศาสตร์การแพทย์'),
('11127', 'นักสังคมสงเคราะห์'),
('11128', 'นักวิชาการทันตสาธารณสุข'),
('11129', 'นักกายอุปกรณ์'),
('11130', 'นักวิชาการอาหารและยา'),
('11131', 'นักวิชาการศึกษาพิเศษ'),
('11132', 'นักเทคโนโลยีสารสนเทศ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_drug`
--
ALTER TABLE `tbl_drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `tbl_drugtype`
--
ALTER TABLE `tbl_drugtype`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `tbl_medical`
--
ALTER TABLE `tbl_medical`
  ADD PRIMARY KEY (`mdc_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`pst_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
