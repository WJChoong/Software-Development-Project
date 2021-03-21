-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 21, 2021 at 05:09 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attend_id` int(11) NOT NULL AUTO_INCREMENT,
  `lect_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `attend_status` tinyint(1) NOT NULL,
  `attend_module` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `attend_group` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `attend_date` date NOT NULL,
  `attend_duration` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `start_time` time NOT NULL,
  `classtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`attend_id`),
  KEY `afk_lect_id` (`lect_id`),
  KEY `afk_stud_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attend_id`, `lect_id`, `student_id`, `attend_status`, `attend_module`, `attend_group`, `attend_date`, `attend_duration`, `start_time`, `classtype`) VALUES
(209, 'LT001', 'ST001', 1, 'Artificial Intelligence', 'L1', '2021-03-20', '2h', '09:15:00', 'lecture'),
(210, 'LT001', 'ST002', 0, 'Artificial Intelligence', 'L1', '2021-03-20', '2h', '09:15:00', 'lecture'),
(211, 'LT001', 'ST003', 0, 'Artificial Intelligence', 'L1', '2021-03-20', '2h', '09:15:00', 'lecture'),
(212, 'LT001', 'ST004', 0, 'Artificial Intelligence', 'L1', '2021-03-20', '2h', '09:15:00', 'lecture'),
(213, 'LT001', 'ST005', 1, 'Artificial Intelligence', 'L1', '2021-03-20', '2h', '09:15:00', 'lecture'),
(214, 'LT001', 'ST006', 1, 'Artificial Intelligence', 'L1', '2021-03-20', '2h', '09:15:00', 'lecture'),
(228, 'LT001', 'ST001', 1, 'Software Development Project', 'L1', '2021-03-20', '1h', '22:44:00', 'lecture'),
(229, 'LT001', 'ST002', 0, 'Software Development Project', 'L1', '2021-03-20', '1h', '22:44:00', 'lecture'),
(230, 'LT001', 'ST003', 1, 'Software Development Project', 'L1', '2021-03-20', '1h', '22:44:00', 'lecture'),
(231, 'LT001', 'ST004', 1, 'Software Development Project', 'L1', '2021-03-20', '1h', '22:44:00', 'lecture'),
(232, 'LT001', 'ST005', 1, 'Software Development Project', 'L1', '2021-03-20', '1h', '22:44:00', 'lecture'),
(233, 'LT001', 'ST006', 1, 'Software Development Project', 'L1', '2021-03-20', '1h', '22:44:00', 'lecture');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_no` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course_name` varchar(59) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `module_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `module_group` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`course_no`) USING BTREE,
  KEY `module_id` (`module_id`),
  KEY `module_group` (`module_group`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_no`, `course_id`, `course_name`, `module_id`, `module_group`) VALUES
(10, 'SE-1', 'Software Engineering', 'AI', 'T1'),
(11, 'SE-1', 'Software Engineering', 'AI', 'L1'),
(12, 'SE-2', 'Software Engineering', 'AI', 'T2'),
(22, 'SE-2', 'Software Engineering', 'AI', 'L1'),
(23, 'SE-1', 'Software Engineering', 'DSF', 'T1'),
(24, 'SE-1', 'Software Engineering', 'DSF', 'L1'),
(25, 'SE-2', 'Software Engineering', 'DSF', 'T2'),
(26, 'SE-2', 'Software Engineering', 'DSF', 'L1'),
(27, 'SE-1', 'Software Engineering', 'SDP', 'T1'),
(29, 'SE-1', 'Software Engineering', 'SDP', 'L1'),
(30, 'SE-2', 'Software Engineering', 'SDP', 'T2'),
(31, 'SE-2', 'Software Engineering', 'SDP', 'L1');

-- --------------------------------------------------------

--
-- Table structure for table `ec`
--

DROP TABLE IF EXISTS `ec`;
CREATE TABLE IF NOT EXISTS `ec` (
  `EC_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `EC_reason` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `EC_photo` mediumblob NOT NULL,
  `EC_date` date NOT NULL,
  `lect_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `EC_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`EC_id`),
  KEY `efk_lect_id` (`lect_id`),
  KEY `efk_stud_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ec`
--

INSERT INTO `ec` (`EC_id`, `student_id`, `EC_reason`, `EC_photo`, `EC_date`, `lect_id`, `EC_status`) VALUES
(6, 'ST001', 'I\'m Sick', '', '2021-03-01', 'LT001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `lect_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_DOB` date NOT NULL,
  `lect_num` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_gender` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_street` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_postcode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_city` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_state` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_country` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_password` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_pic` mediumblob NOT NULL,
  PRIMARY KEY (`lect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lect_id`, `lect_name`, `lect_DOB`, `lect_num`, `lect_gender`, `lect_email`, `lect_street`, `lect_postcode`, `lect_city`, `lect_state`, `lect_country`, `lect_password`, `lect_pic`) VALUES
('LT001', 'Eugene', '1981-03-03', '011-9810303', 'F', 'eugene@gmail.com', 'penthouse', '12345', 'Seoul', 'Seongbuk-gu', 'Korea', 'Oh Yoon Hee', ''),
('LT002', 'Park Eun Seok', '1984-02-10', '011-9840210', 'M', 'eunseok@gmail.com', 'penthouse', '12345', 'Seoul', 'Seongbuk-gu', 'Korea', 'Logan Lee', '');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `module_no` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `module_group` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `module_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `module_subject` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lect_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`module_no`) USING BTREE,
  KEY `tfk_lect_id` (`lect_id`),
  KEY `module_group` (`module_group`),
  KEY `module_id` (`module_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_no`, `module_id`, `module_group`, `module_name`, `module_subject`, `lect_id`) VALUES
(6, 'AI', 'T1', 'Artificial Intelligence', 'Artificial Intelligence', 'LT001'),
(7, 'AI', 'L1', 'Artificial Intelligence', 'Artificial Intelligence', 'LT001'),
(8, 'AI', 'T2', 'Artificial Intelligence', 'Artificial Intelligence', 'LT001'),
(9, 'DSF', 'T1', 'Digital Security Forensics', 'Digital Security Forensics', 'LT002'),
(10, 'DSF', 'L1', 'Digital Security Forensics', 'Digital Security Forensics', 'LT002'),
(11, 'DSF', 'T2', 'Digital Security Forensics', 'Digital Security Forensics', 'LT002'),
(13, 'SDP', 'T1', 'Software Development Project', 'Software Development Project', 'LT001'),
(14, 'SDP', 'T2', 'Software Development Project', 'Software Development Project', 'LT002'),
(15, 'SDP', 'L1', 'Software Development Project', 'Software Development Project', 'LT001');

-- --------------------------------------------------------

--
-- Table structure for table `noctification`
--

DROP TABLE IF EXISTS `noctification`;
CREATE TABLE IF NOT EXISTS `noctification` (
  `Notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Noctification_title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Noctification_content` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Notification_id`),
  KEY `nfk_staff_id` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_DOB` date NOT NULL,
  `staff_num` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_gender` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_street` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_postcode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_city` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_state` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_country` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_password` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_pic` mediumblob NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_DOB`, `staff_num`, `staff_gender`, `staff_email`, `staff_street`, `staff_postcode`, `staff_city`, `staff_state`, `staff_country`, `staff_password`, `staff_pic`) VALUES
('ST000001', 'name 01', '2021-02-10', '6016-5263346', 'M', 'name01@gmail.com', '10, Jalan Serma 1 , Taman Sarjana', '31400', 'IPOH', 'PERAK', 'MALAYSIA', '123', 0xffd8ffe000104a46494600010100000100010000ffdb00840009060712121115131213161315171818171717171716181512151816171717171815181d2820181d251b151621312125292b2e2e2e171f3338332d37282d2e2b010a0a0a0e0d0e1b10101b2d1f20252e2d2d2d2d2b2b2d2d2d2d2d2d2d2d2b2d2d2d2d2d2d2d2d2d2d2d2d2d2d2f2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d352d2d2dffc000110800fd00c803012200021101031101ffc4001c0000010501010100000000000000000000000102030405060708ffc40041100001020303080705070304030000000001000203041112213105064151617191d11322325281a1c2077292c1f014425362a2b1e14382f1162333b22463d2ffc400190100020301000000000000000000000000000102030405ffc4002b11000202010302050402030000000000000001021103213141041213225181f01461a1b123713291c1ffda000c03010002110311003f00f6c987b9ad25a01234134f3a1481eebfaa2e34ed1d40f776a26fb24ec48dfbc76fc9a811255da8713c91576a1c4f248e1e3f24135a20604bb50e27925abb50e27921982476344c00b9da8713c92d5da8713c934e9094dc1002d5da8713c91576a1c4f2494a1145224032aed4389e48abb50e27927a10032aed4389e48abb50e27927a10032aed4389e48abb50e27927a10032aed4389e48abb50e27927a10032aed4389e48abb50e27927a10032aed4389e48abb50e27927a100421efa9eab6e34ed1d40f776a1ef7804d96ddf98ff00f297bdbfd21362bbaae3502ea0ae15ff00281092d1dcead5a00f7aa78529e6850c8dedc6b87edb10840b62d4c764ee4305eedfe90898ec9dc961e2edfe90801c5a105a12a1031004109508010040684ab92cf0cfb83244c36831a3d2b605cd65702f768dc2f49c9256c6937b1d2cd4cc382d2f88f6c368c5ce200e25729947da3cab2e82d7c73b0596f175e7c02f22cad9623cdc4b71e2179d5f7583506e002cd8f941ac06fc31ff002b34b3c9e912e5892dcf5398f6a2f6ff0045807bce3e777eca943f6b5109be1b00d62a283c49aaf2889941ee3d56f89bcf055223dcefbc7c280797f288f89cb1351e0f7781ed4a060f6c434d2ce8cd7c1d4fdd4aef6af200d1c661a76b219f3057cfcd6b85e091bcabf2b103ee7dfa0505fe454fba4b9b21da8fa7721e5c979c6da96981100c40b21cdf7985b51c169f467beefd3c97cb12b122ca44116044731c0d4169a7811811bee5ed5ecf3da23670881316591fee9173636ed4ed9a7429c66989c68ef7a33df77e9e48e8cf7ddfa792910ac21447d19efbbf4f247467beefd3c948840511f467beefd3c91d19efbbf4f2522101440c866aeebbb1fcbdd1b13590c9b40b8d0114b9ba81d5aca9a1e2edfe9092162ff7bd2d482864297a126a4d741b34f200a553213191cc764ee4b0f176ff00484931d93b92c3c5dbfd21021e84210304217379fd9c824251d1053a47752103df23b54d21a2a7c06b49ba1a56617b41cfe12c5d2d2a418ff7df716c004603417e17602b7d705e3f3334492e712493524925ce71c49274ed4c7457105ef24b9c4b8938924d4976dadfe2b22766493e437ecf9acadb9b34a4a08bd333f7063463a0627693a37fd1cd309ce38d4834a81703dd60d77e2aa0791a7ac713a87d60ad439aa0005da029a876ec41cbb9ea4ce854bb563a8ebbf57eea278b20170dc367c829c470053e89e4a38b18385ff450ac1959c4b8de7c15d952d6e8b87ea2aa183b779d5b147538f052dc851b2d884e26edfe1a76a8ab7da612d2284106f14c0822f0a83229c2aa6644aeefdf604aa867bcfb2fcfa3363ecd3247da1a3aaec3ed0c1a755b14bf58bf5af435f2849cebe139b12192d731c1cd7696b860be92ccace26cfca3230a07f662347dc88311b8dc46c21591970464b937508429900421080190f176ff0048490b17fbde96a5878bb7fa424858bfdef4b5022442108191cc764ee4b0f176ff00484d983d53b90d37bb78ff00a84089509a5c94b903157cf39f99c267e79c6bfecc02e6431a0d0deff122be0d0bd87da165a32b93e2c461ebb8746cd8f7dd5f0153e0be75e92829b2a4eb3fe55593d0b31fa8b3b315bb00b25fde3e1bbf957638c1bc5538834f0518c689c9d91319a4f8efd012d9d29ee61a535e295d77d69536446441a38a219a2477eff5c1369f5ad219298d5d17681cd4ec845c6ebcfd5d45041805c7cf605d9e6d641a0b6f1b40d8a13928a2c8637239e6e4a21b6df701f5e253a0c83836d9171c376b5d3458023c6b20751b8ed35c16a3e4c52cd2ea5dbb52a1e665cf123cfc43b351883c5767ec8b38fec93a20bdd4851e90cd4dc2257fdb77125bfdc352e7b2de4d30dd7764e1b0ea58ce7df506845fb41d85688cad5a33ca35a1f5ea162665656337212f1dc6ae73007fbedeabbcc15b6af3382108400c878bb7fa424858bfdef4b50c37bb7fa426c337bf7fa5a81132136d2103239b1d43b9235bdadff26a7cc764ee4b0f176ff484081de2835bbe49e840cf2df6e33e192f021137b9cf8846c6343479bd78bc910ebcebaf0c3e65771edfa7cba79b087dc84c1f11738fee179eb62d96d37055bd5962d8d1752975e4a80c1bf77eea3813405360298276bc53025743a5530b6ea94f8d34dd3f5f57a83eda08bf87ec950ec6165ff576c56e4727be2bc35a390097274bbe33c3582a4f068d64af4ac8d92592f0b0aba9571f90509cfb4bb1c3b8c293c86d1119040b80b510f789ec8f0a13e0b672ac7207450c5f70d80ff014993de1ad7c537b9e491bb01c025c992449b6ff0001e64959252b3645513e4e910c68faa9d27eb451597c20ac0098e0a962660e59930f6907eb6af38ca20b5c469078af569dc179967236910fd576ad3d3bd68cd99687b1fb02cac224ac69738c27878f76203ea63b8af535f3bfb02ca363293a11374582e1bdcc2d7b7cadafa216e4637b821084c444076b7fa42640bed9d67d0d4b105cfe37d295b2298dc9b2583b7eceeb755c958b925a5c314291098c8e63b27725878bb7fa42498ec9dc961e2edfe90810f421213440cf957da8653e9f2b4d3c5ed6bfa31ba180c3e6d2b9889112cf4c18915f11d5abdef79ae35738b8d78a85f80dca24c57444748a3a2b52993a2c53486c73b70bb8a340d4ae5c4ad5c9191a2c7700c69bf49ad00d64ab30737662110f742269b2ad1bd75592b3ac42a36242bb5b71db50a1293af2ea5908abf31bb9b7901b01941793da27134d0b5a799486ed743fb25c9d9561456da8641d9a4782b7d202b1c9dbd4df15e8644864f26c9898340a3345c34eb2b4db0a812458e1a09c17179733923c471852e08185a1da3af70e692877688252ed474b9472b4283db70aead3c15094ce897886c8750e8a8a57c56164ecd2744ebcc4570adf4041778b8ae81b9bd2a1b410da769bcf14de3825ea55dd37c50e997ae073b6151c0aedbec9d1f54125ba0135b3b2a742e633da01b208461d26472eb1287b318e5995e508d31437c1c0b4f915f56af997d8fe4831f2ac02455b09a631d42cd2cdfef398be9a5d04616084213115a61f46bceda620621a31376949206e3ef6cd4355ca4240b56a94a8c77353648dc77dfbecb6be754b923c96108426488e63b27725878bb7fa42ab3a3ac34f54e8c3c7478ab2c37bb7fa42425b9220a1098cf8f7296467c38d121d93d4739b85303ab45c554128e71000a9d4be86f697906117322b581ae75bb47bceb8871dabcd7216452c8eeb42bc966965ed6d3e0d2b15c54bd4cdc8b9a6d2418809c091a372eb634ec1976d0002c8c30016bc093145839c19adf68352e229fb2cde277cbcccbd46968649cfc697384384e8835e0078d3e5a1568b97191cd62cb51ba1e09701bcd0531f35af2d9b96618842cd904e835a114209ade4eb5a39372774208043ad36c9b7579a1a022a4df735a2fc0001694b156857fcb66664d84d866d4371a6a2705d7489b4d0561c2c961b5229a4d2941b85f72dbc91d5145967b9a914b2c3a946ae7e339c0d9810ed4437802809da49b9a3695d1e516d5e9ad94b2eb4d2ea9bc90695df417f8a9e2ae453bd91e7f1e3cdb9d67a6a388b40078045d5ecd6d536d295baaabcc4f4f4a3c74ae2e6b85c71b8dfaae2bbf98c90d75fd604d6b7635c46ed89a72435ceb4e05c7493fcabe592096c668e2c97ab296459d31d95a1ba82a74f8e9506734bda85b974b06035ada014599952182d75755782c9dde6b45b28e85af62732ee9ace80d7b4ed15b42bbae0bda5797fb22c9f47be20140182bef3a94f20e5ea0ba18b58d98f3692a04210ac2a2bc67001f5a11515b5860dc6e289435b47f379d057404e23b57d286b5baea341d2925bef7bdaa9f75ba12e45c93a100a13199f395b7782452e34146ebbeba68ad35ddadfe96a59a1561dc8637b436fa4210921ce75e95c7721cd4961319cde7c42b5018753c79ff85e750217fbf10e8b82f56ce5972e958805e40b43fb4827c815e610203838bb10ec0f3583a94948db81de37f62ec1729c054a1baf5698565d8d2a368798234808730680a660aa57b55a9be06a3467476d136571524f9a25946dcaa937648ab367acac4a3aebd4594189b92e25450e2138b068d3098e6a9981451559204915a21a2ca9dbdaedc55f997d1508603ab5c1452d48e48e8775ecb452548a50d5b5dbd503e478aed173d98b2b62501a52db8bfc306f90af8ae8574b1ff8a39995dcdd02108532b2bc63d57e9c7fea13244dcec31d9dd6f76e4f8cd05af06b4a8ecde706e09922059752e04d45d4a02d69c3c52e48f2582ec122759429121b31d93b92c3c5dbfd2124c764ee4b0f176ff484843d08420635ec04106f0450ed05799656c9ee811dcc27ab88fccdd07e5e0bd3d51ca79260cc01d2b2d530209047882a9cd8bbd16e2c9d8f5d8f2a8b7395881114d97650428f118300ebb71bc79159ec342b9cd6b4ce8629e86bc37a22c6b95111d3593209538ba2c22ca048209c3e6b3a1e58b112c8a9bb51a0feec16dc56870a1bc2aed90680452e3a1354d859979532cd4b4509aea186fd4ae64b3571235053b24da1b4a27c08219826e90cd086fbaf4d8ce55c454911f551b04509d88ac66f6498b324b6181a2d389a0683515dbb9549b6aee7d9940a418afef3c37e16d7d4a7863dd2a28ea3254743ae958021b1ac6e0d6868dc0514a842e89cc04210802130c3ad0385469a6869c42259805a03bdfbb5a53e1e2edfe9092162ff007bd2d4844884213191cc764ee4b0f176ff00484931d93b92c3c5dbfd21021e8421030421080384cfd96b319afd0f6d3c5bfc10b9a0c5e879e321d2cb92055d0fac35d3ef0e17f82f3c86e5ceea2353bf536f4f2b544a65c39aaa478cc863ac4346d5a10a22ad3b2ac8808700ab55c9a8a072f421855c760e691d97853b141ac9fe164c5c98c84eeb36ed62e1e582b8c9280e00b4d0e8eb5ead518f06a8e38b45819731a3411bff0084872fc2af5aaddffc2acf94822f73c1bb02746a543ec022bba8d006bd9bf4a938c790708a5a9d0ca4e322761d6969f4540a964f956c36868170f356e2c5b950eaf43372509cb97a5e65caf47270ea285d579fee351fa68bce64a55d311d909bf78de75345ee3c2abd821b034068b800001a80b82d5d3477662eaa5b21c84216b3202108400c878bb7fa424858bfdef4b52c3c5dbfd21242c5fef7a5a8112210840c8e63b27721b8bb7fa426cdf649d89adfbc76fc9a811610a378f14135a2063ca54c66091d8d0e0980f7617af33cebc95f668d56ff00c6fbdbf94e96f856ed857a46bd4b8ff6970c741088b8db22bbda792a3a88a70b2cc326a5a1c9c27ab566ab9e873258403fe772d6959b0573dfd8e8a913ba5c1b8aaafc8ed3a0705a2c7a9dae09c4b13315b92003d91c02b0c960d5a0f705522bf4a7206ec63ee54a663a867a740d2b2e2bdcf04de050ef3c922b6ecf58cc2c886143e9e20a44883aa0e2c8788f138f05d6282408e8a1d30b0da6eb228a75d38c545523992936ed8210852220842100321e2edfe909b0f17fbde96a29dadfe90990af2f3b7d0d4089c21329704898c598ec9dc860bddbfd21131d93b92c3c5dbfd21210e2d41095081894410950801005c6fb4b3485086b793c1bfcaecd707ed3230b5059a839c7c6807ec553d43ac6cb70af3a38a30438508a855624b3d86ac351a8fc8f357e1052b9972e5c5b3a55666332b39bda046f1771c14cdcb8cef79a57c2bf052439769d015b1902b23765b6e835dd79e0abbe7e23ee6b48daeb870c55e7406e86a6365c57008ee13b2ac292fbceeb1f2f0089a172bee8635054e6e1e951623d8734e67a4929777feb6b4ef68b07cda56b2e0bd974db5d0a2407005cc36db502f63b1e0eff00b05dcfd9d9dd6f00ba78e5dd14ce6644e3268910a3fb3b3bade011f676775bc02b08122147f676775bc023ececeeb780400b0f176ff484c834abfdef4b5232032aeeab71d43ba148c84d18340dc00480716a12a13191cc764ee4b0f176ff00484931d93b92c3c5dbfd21021e842103042108005e4d9d73dd3ccbdc2f68eab7736eaf89a9f15d66756708b260c13526e73c60069035ef5c2ba1deb9bd5e752f247dcd7831b5e663612b4d6aaac142ae422b2c4d8886243bd35b0d5c211602b50148a74386acf42020b53a0b2abdaa9cd0b95c8a5578cda851111e46ca2e958ec8cdbec9eb0ef30dce1f5a405ed393e761c686d890dd69ae1507e47511a978858d0b47216588d28eac23569ed30ded778683b42bf0e6f0f47b19f362efd56e7b32160e44cea81300027a27f75c6e27f2bb03e456f2df19292b46269ad1821085210c878bb7fa427a643c5dbfd213d0008421004731d93b92c3c5dbfd213661a48b20d9274915f9851b0baafbc5c47dd3dd6fe640b92ca1444bb58f84f341b5ac7c279a06453b9421c2157bb701da3b82e472be5c8916ad1d466a189de7e4b59f9b2d249e94de7ba39a63b359bf8a7e11cd61cd1ea3268952fecd18de38eaf538d8cd50062ed9d9a6c23fe577c239a68cd067e2bbe11cd678f4791705fe3c0e1a2c24f972bb5399cc3774aef847348ccc860feb3be11cd4d74b917035d440e5688a2ebffd20d1fd577c239a8999af08e118e8fbb4c6f18a9f81317d443d4e5004d8b705d80cd287f8c780bfcd0eccc61feabbe11cd3fa798fea21ea7026f29ee62ed9b98ac06bd33be11cd3ce6533f15df08e68fa798bea2079ff0046830577dfe8687f8aef8423fd0ecfc677c239a83e9b27a0d67c6704c62da93cbd350800c8b70c03807b775f7d36021747fe8767e33be11cd28cc867e33be11cd28f4f9a2ee3a7b91966c52dccd83ed360c27064ec374127b3121831213fc075daed943bd74f93f3a24a3d3a29984e2706da0d71fed750f92c19ff006750630022447100834a0186d06aa83fd934b5d6234468d20863da7c1e0deba7815c7f91d33164a4fc9b1e830f176ff484f5939b99304ac11003dd10349169d89a807c31a506a5a84a6c43909b6909003c2ac213aafbc8a917507745f78faa2b6840a881d0ddde3c1bc9058eef1e0de4a74202885b0ddde3c1bc92186ead6d1e0de4a74202883a275fd63c1bc91d1ba9da3c1bc94e84051058713da3c1bc93ec1ef1e0de4a44202888c33de3e5c944648697138ead22874695690950522b09415ad4d6b5d18920eafca38296c1ef1e0de4a44228288ec1ef1e0de48b07bc783792a53194ec3df6c064286d0e7c573c3436a0917117e14c74a6c2cae1ee86610112144716748d756cbc07920b69752c531c4ab3c3910f123f9ae7faf8f62fd83de3c1bc9160f78f06f2522cecb796192ad639ec88f0f88d860436da20bab42468177eca2a2dba44dd2d5976c1ef1e0de48b07bc78379291090511d83de3c1bc9160f78f06f25472d65612e19d47447bdd658c6e2e3bfeb156e4e317b1ae730c32716ba956efa293c6d4549ecc82c9173704f5410619ebd4d7ad506807dd6a900b8a6ccccb21b6d447b58dbbace21a054d05e76a9544991d2e172148840c1084200108420010842001084200108420010842001084200e6f3be681e8a5416b6245736235ef706b21f411213ea41bde6b668c14b403af18a4cdb9bb11e34bc4731f11c4c72f86e05843acb6cd8a930c8a000126d5926b881ab319258f88e7bfacd7001d0dcd63a1bac820121cd274e829b0f22c26bd8618e8dac3684386d86d876acb9b6880dad68f3a55ea50ecedf97f3db928a9f777573f8f9efc1859c1962349e509774489ff008719ae86e040a428a2f0eb54adf70c7bda961bf38274c9439b314b3ed13cc10db659d49625c0330beb66b5ddad76f9c990a14ec030235a0d243839a407b4b4e2d241185461812a3ca79b9063418300da6320be1bd81840a18428d06a0dd453865c692b5af3a71f3f41284edd3d38f9f37390ce5ca7370a722f4d311e525c59e8224280d8b03016ba5b89adad1fc56ee75e57b511ac813732d70842216cb40115b475ed8b11c0121a452e1a29ad6a658ccd873111ee33134c6c5a74909917fda89400765c0d2a0006892773265e2456c46448f0290db09cd8310b1b121b051ac7dd5a500171170535931795be17a222e1935afd9852994234e4be4d8ae7d88af74405e003d66bac5ab385f66b4c2f53cc4c4e4d4fc492873465d92d0e197bdac69891dee6b4daa1ec8eb68f3a8a74393735e0c0872f0d8e885b2e5ee654b6a4bdc5c6d51a2b79d1450e5dcd08333144711234bc60db262407d8739ba9d71afd6a4de7c6dd2db5ad36b76bf0530e9e7194a4f9ae77a8a5fb384ce0cab3113274f4b4cbc45892d1e0b3a50037a46ba25d502eb42c9e3e277f2d4c4f4b365a51b37d2469a8ae1f687c3637a186032ad6b05c4d4d413ac8bae236999932824e24a51e5914da7bcbab15ef0410f2ea52a081a29b2f298fcc980f96e822c5988d47f48c8b1225a8d09d400587d3aa00185288f1b17b5be3ecb5ff007ad167853fc7afddff00ce4cec9f37372794a0c9c6983370e618f735ce6b5b121398d738d6ce20d93c7450d45af9073460cb4531cc48d31188b3d2477db735ba9b70a2167cd28c9aedf4d74abf62fc69a5a9ffd9),
('ST000002', 'CHOONG WEI JIE', '2021-02-11', '0165263346', 'F', 'TP056081@mail.apu.edu.my', '10, Jalan BIru, Taman Hijau,', '31400', 'IPOH', 'PERAK', 'Malaysia', '$2y$10$ig9xXuBSb0/igAZiXJ1rnuVddQMZg00mfOM1PieU3aT8BNu5EozXS', 0x706173732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_DOB` date NOT NULL,
  `student_num` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_street` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_city` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_postcode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_country` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_photo` mediumblob NOT NULL,
  `student_password` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_gender` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_state` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `sfk_course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_DOB`, `student_num`, `student_email`, `student_street`, `student_city`, `student_postcode`, `student_country`, `course_id`, `student_photo`, `student_password`, `student_gender`, `student_state`) VALUES
('ST001', 'Joo Seok Hoon', '1996-03-03', '011-9960603', 'kimyoungdae@gmail.com', 'penthouse', 'seoul', '12345', 'korea', 'SE-1', '', 'Joo Seok Hoon', 'M', 'hera palance'),
('ST002', 'Bae Rona', '2000-03-03', '012-0000303', 'kimheonsoo@gmail.com', 'penthouse', 'seoul', '12345', 'korea', 'SE-1', '', 'Bae Rona', 'F', 'hera palance'),
('ST003', 'Yoo Je-ni', '1999-03-25', '012-0000303', 'jinjihee@yahoomail.com', 'penthouse', 'seoul', '12345', 'korea', 'SE-1', '', 'Yoo Je-no', 'F', 'hera palance'),
('ST004', 'Min Seol-ah', '1999-03-05', '012-0000303', 'josoomin@gmail.com', 'penthouse', 'seoul', '12345', 'korea', 'SE-2', '', 'Min Seol-ah', 'F', 'hera palance');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_date` date NOT NULL,
  `time_time` time NOT NULL,
  `time_group` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `module_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`time_id`),
  KEY `timefk_module_id` (`module_id`),
  KEY `timefk_module_group` (`time_group`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`time_id`, `time_date`, `time_time`, `time_group`, `module_id`) VALUES
(5, '2021-03-22', '02:00:00', 'T1', 'SDP'),
(6, '2021-03-16', '02:00:00', 'T1', 'SDP'),
(7, '2021-03-17', '02:00:00', 'T1', 'SDP'),
(8, '2021-03-18', '02:00:00', 'T1', 'SDP'),
(9, '2021-03-19', '02:00:00', 'T2', 'AI'),
(10, '2021-03-15', '11:34:00', 'T2', 'DSF');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `afk_lect_id` FOREIGN KEY (`lect_id`) REFERENCES `lecturer` (`lect_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `cfk_module_group` FOREIGN KEY (`module_group`) REFERENCES `module` (`module_group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cfk_module_id` FOREIGN KEY (`module_id`) REFERENCES `module` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ec`
--
ALTER TABLE `ec`
  ADD CONSTRAINT `efk_lect_id` FOREIGN KEY (`lect_id`) REFERENCES `lecturer` (`lect_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `efk_stud_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `mfk_lect_id` FOREIGN KEY (`lect_id`) REFERENCES `lecturer` (`lect_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noctification`
--
ALTER TABLE `noctification`
  ADD CONSTRAINT `nfk_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `sfk_course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timefk_module_group` FOREIGN KEY (`time_group`) REFERENCES `module` (`module_group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timefk_module_id` FOREIGN KEY (`module_id`) REFERENCES `module` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
