-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 08:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `analyse`
--

CREATE TABLE `analyse` (
  `Id_ana` int(11) NOT NULL,
  `name_ana` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analyse`
--

INSERT INTO `analyse` (`Id_ana`, `name_ana`) VALUES
(1, 'Aldosterone Test'),
(2, 'Aspartate aminotransferase (GOT)'),
(3, 'Bleeding Time'),
(4, 'Blood Count Check'),
(5, 'Blood Test'),
(6, 'Erythrocyte Sedimentation Rate'),
(7, 'Glucose 6 Phosphate Dehydrogenase)'),
(8, 'HDH'),
(9, 'Hemoglobin'),
(10, 'LDL'),
(11, 'Pregnancy Test'),
(12, 'Sugar Check'),
(17, 'HBLAc');

-- --------------------------------------------------------

--
-- Table structure for table `calendrier`
--

CREATE TABLE `calendrier` (
  `id_cal` int(11) NOT NULL,
  `Id_med` int(11) DEFAULT NULL,
  `jour_trav_med` varchar(50) DEFAULT NULL,
  `heur_d` time DEFAULT NULL,
  `heur_f` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendrier`
--

INSERT INTO `calendrier` (`id_cal`, `Id_med`, `jour_trav_med`, `heur_d`, `heur_f`) VALUES
(1, 1, 'Saturday,/Sunday,/Monday,/', '08:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `consultaion`
--

CREATE TABLE `consultaion` (
  `id_cons` int(11) NOT NULL,
  `ID_med` int(11) NOT NULL,
  `date_cons` date NOT NULL DEFAULT current_timestamp(),
  `heur_cons` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultaion`
--

INSERT INTO `consultaion` (`id_cons`, `ID_med`, `date_cons`, `heur_cons`) VALUES
(1, 1, '2021-09-05', '10:04:32'),
(2, 1, '2021-09-05', '10:04:44'),
(3, 1, '2021-09-05', '10:04:53'),
(4, 1, '2021-09-06', '22:45:31'),
(5, 1, '2021-09-06', '22:46:13'),
(6, 1, '2021-09-06', '22:46:29'),
(7, 1, '2021-09-07', '15:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE `medecin` (
  `ID_med` int(11) NOT NULL,
  `nom_med` varchar(50) NOT NULL,
  `pre_med` varchar(50) NOT NULL,
  `date_med` date NOT NULL,
  `sexe_med` varchar(10) NOT NULL,
  `tel_med` int(10) NOT NULL,
  `email_med` varchar(50) NOT NULL,
  `pssaword_med` varchar(50) NOT NULL,
  `grop_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`ID_med`, `nom_med`, `pre_med`, `date_med`, `sexe_med`, `tel_med`, `email_med`, `pssaword_med`, `grop_id`) VALUES
(1, 'Adda Benkoceir', 'Mohamed', '1999-05-07', 'Man', 549380267, 'addamohamed67@gmail.com', '123456789', 1),
(2, 'Adda Benkoceir', 'Oussama', '1996-02-09', 'Man', 668714526, 'oussama@gmail.com', '123456789', 2),
(3, 'Ali Arous', 'Hadjer', '1998-03-26', 'Woman', 663333312, 'ali.arous@gmail.com', '123456789', 2),
(4, 'Hamamouch', 'Amine', '1992-09-18', 'Man', 663910133, 'amine@gmail.com', '123456789', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicament`
--

CREATE TABLE `medicament` (
  `id_medic` int(11) NOT NULL,
  `nom_medic` varchar(50) NOT NULL,
  `type_medic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicament`
--

INSERT INTO `medicament` (`id_medic`, `nom_medic`, `type_medic`) VALUES
(1, 'PROVERA', 'TAB'),
(2, 'ARTAMIN', 'CAPS'),
(3, 'ARTAMIN', 'CAPS'),
(4, 'APICORT 0.12% EYE', 'DROPS'),
(5, 'APICORT FORTE', 'EYE SUSP'),
(6, 'ADVANTAN 0.1%SKIN', 'CREAM'),
(7, 'ARCOXIA', 'TAB'),
(8, 'ARCOXIA', 'TAB'),
(9, 'ARCOXIA', 'TAB'),
(10, 'PLAQUENIL', 'TAB'),
(11, 'INDOGESIC', 'CAP'),
(12, 'INDOCID', 'SUPPOSITORIES'),
(13, 'INDOMETHACIN', 'CAPS'),
(14, 'INDOMETHACIN', 'SUSP'),
(15, 'ORTHOCAM', 'CAPS'),
(16, 'ECONOPRED PLUS', 'DROPS'),
(17, 'BREXIN', 'TABLETS'),
(18, 'CINOKORT', 'AMPOULE'),
(19, 'LATYCIN', 'TAB'),
(20, 'LODINE', 'CAPS'),
(21, 'MABTHERA', 'CONC'),
(22, 'MALAREX SYRUP', 'TAB'),
(23, 'MALAREX TABLETS', 'CAPS'),
(24, 'MEDROL', 'TAB'),
(25, 'NOVO-PIROCAM', 'CAPS'),
(26, 'HUMIRA', 'DROPS'),
(27, 'ENOXIRT', 'VIAL'),
(28, 'SAMIXON', 'VIAL'),
(32, '', 'Anti biotique'),
(33, 'Dolibran', 'Dawowa'),
(34, 'Aaa', 'Moha'),
(35, 'Dolibran', 'Dawoa');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `id_ord` int(11) NOT NULL,
  `id_cons` int(11) NOT NULL,
  `nom_pat` varchar(50) NOT NULL,
  `pre_pat` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `huer_con` time NOT NULL,
  `lname_clinic` varchar(50) NOT NULL,
  `treatement` varchar(50) NOT NULL,
  `group_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordonnance`
--

INSERT INTO `ordonnance` (`id_ord`, `id_cons`, `nom_pat`, `pre_pat`, `age`, `date`, `huer_con`, `lname_clinic`, `treatement`, `group_id`) VALUES
(1, 1, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-05', '10:04:32', 'EL AMEN', 'ARCOXIA  120  MG  2 Times  ,/CINOKORT  40 MG  1 Ti', 1),
(2, 2, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-05', '10:04:44', 'EL AMEN', 'Blood Test,/Glucose 6 Phosphate Dehydrogenase),/HD', 2),
(3, 3, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-05', '10:04:53', 'EL AMEN', 'Cardiology stress test,/Cardiology Ultrasound,/Mam', 3),
(4, 4, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-06', '22:45:31', 'EL AMEN', 'APICORT FORTE  10 MG  3 Times  ,/BREXIN  20 MG  3 ', 1),
(5, 5, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-06', '22:46:13', 'EL AMEN', 'Aldosterone Test,/Blood Test,/HBLAc,/', 2),
(6, 6, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-06', '22:46:29', 'EL AMEN', '64-strip scanner,/Panoramique Dentaire,/', 3),
(7, 7, 'Adda Benkoceir ', 'Mohamed ', 22, '2021-09-07', '15:09:32', 'EL AMEN', 'BREXIN  20 MG  3 Times  ,/ECONOPRED PLUS  1 MG  2 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `ID_pat` int(11) NOT NULL,
  `nom_pat` varchar(50) NOT NULL,
  `pre_pat` varchar(50) NOT NULL,
  `date_niss_pat` date NOT NULL,
  `sexe_pat` varchar(10) NOT NULL,
  `tel_pat` int(10) NOT NULL,
  `address_pat` varchar(255) NOT NULL,
  `email_pat` varchar(50) NOT NULL,
  `pass_pat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`ID_pat`, `nom_pat`, `pre_pat`, `date_niss_pat`, `sexe_pat`, `tel_pat`, `address_pat`, `email_pat`, `pass_pat`) VALUES
(1, 'Adda Benkoceir ', 'Mohamed', '1999-05-07', 'MAn', 549380267, ' Chlef', 'addamohamed67@gmail.com', 'mohamed123456789'),
(2, 'Arbi', 'Aissaoui', '1998-03-26', 'Man', 567123499, 'OUM DEROUAA', 'arbir2@gmail.com', 'AB12345'),
(6, 'Adda Benkoceir', 'Isahk', '1998-10-05', 'Man', 663333312, 'Ain Meran Chlef', 'isahk@gmail.com', '123456789'),
(8, 'Adda Benkoceir', 'Oussama', '1996-02-09', 'Man', 663561183, 'Ain Meran Chlef', 'oussama@gmail.com', '123456789'),
(9, 'Saiha Djabbour', 'Chaima', '2000-11-08', 'Woman', 549380267, 'Owad Fouda', 'chaima@gmail.com', '123456789'),
(10, 'Ali Arous', 'Hadjer', '1998-03-26', 'Woman', 549856588, 'Germani', 'ali.arous@gmail.com', '123456789'),
(11, 'Kellouche', 'Dhiya', '2001-04-29', 'Man', 658199728, 'Chlef', 'dhiya20@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `posologie`
--

CREATE TABLE `posologie` (
  `id` int(11) NOT NULL,
  `id_medic` int(11) NOT NULL,
  `quantite` varchar(50) NOT NULL,
  `posologie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posologie`
--

INSERT INTO `posologie` (`id`, `id_medic`, `quantite`, `posologie`) VALUES
(1, 1, '1G', '2'),
(2, 2, '150MG', '3'),
(3, 3, '250MG', '1'),
(4, 4, '1G', '2'),
(5, 5, '10 MG', '3'),
(6, 6, '1 MG', '1'),
(7, 7, '120  MG', '2'),
(8, 8, '60 MG', '3'),
(9, 9, '90 MG', '1'),
(10, 10, '200 MG', '2'),
(11, 11, '25 MG', '3'),
(12, 12, '100 MG', '1'),
(13, 13, '25 MG', '2'),
(14, 14, '1 MG', '3'),
(15, 15, '20 MG', '1'),
(16, 16, '1 MG', '2'),
(17, 17, '20 MG', '3'),
(18, 18, '40 MG', '1'),
(19, 19, '1 MG', '2'),
(20, 20, '300 MG', '3'),
(21, 21, '10 MG', '1'),
(22, 22, '120 MG', '2'),
(23, 23, '250 MG', '3'),
(24, 24, '4 MG', '1'),
(25, 25, '10 MG', '2'),
(26, 26, '40G', '3'),
(27, 27, '25 G', '1'),
(28, 28, '1 G', '2'),
(33, 33, '500 g', '3');

-- --------------------------------------------------------

--
-- Table structure for table `radio`
--

CREATE TABLE `radio` (
  `id_radio` int(11) NOT NULL,
  `name_scan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radio`
--

INSERT INTO `radio` (`id_radio`, `name_scan`) VALUES
(1, '64-strip scanner'),
(2, 'Diagnostic X-ray Table'),
(3, 'Mammography'),
(4, 'Panoramique Dentaire'),
(5, 'Cardiology Ultrasound'),
(6, 'Cardiology stress test'),
(7, 'X Ray');

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `ID_RDv` int(11) NOT NULL,
  `ID_pat` int(11) DEFAULT NULL,
  `ID_sec` int(11) NOT NULL,
  `objt_rdv` varchar(50) DEFAULT NULL,
  `date_rdv` datetime DEFAULT NULL,
  `date_rdv2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rendez_vous`
--

INSERT INTO `rendez_vous` (`ID_RDv`, `ID_pat`, `ID_sec`, `objt_rdv`, `date_rdv`, `date_rdv2`) VALUES
(1, NULL, 0, 'Cardiology', NULL, '0000-00-00'),
(2, NULL, 0, 'Radiology Specialized Medical imaging', NULL, '0000-00-00'),
(3, NULL, 0, 'Vascular Medicine and Call Vascular', NULL, '0000-00-00'),
(4, NULL, 0, 'Emergency Intensive Care', NULL, '0000-00-00'),
(5, NULL, 0, 'Medical analysis laboratory', NULL, '0000-00-00'),
(6, NULL, 0, 'Dental Surgery', NULL, '0000-00-00'),
(7, 6, 0, 'Cardiology', '2021-09-08 08:00:00', '2021-09-08'),
(8, 6, 2, 'Radiology Specialized Medical imaging', '2021-09-08 13:00:02', '2021-09-08'),
(9, 6, 0, 'Emergency Intensive Care', '2021-09-08 08:30:01', '2021-09-08'),
(10, 6, 0, 'Vascular Medicine and Call Vascular', '2021-09-08 13:30:03', '2021-09-08'),
(11, 6, 2, 'Medical analysis laboratory', '2021-09-08 09:00:04', '2021-09-08'),
(12, 6, 0, 'Dental Surgery', '2021-09-08 14:30:05', '2021-09-08'),
(13, 1, 2, 'Cardiology', '2021-09-08 13:00:00', '2021-09-08'),
(14, 1, 2, 'Radiology Specialized Medical imaging', '2021-09-09 09:00:02', '2021-09-09'),
(15, 1, 2, 'Emergency Intensive Care', '2021-09-08 13:30:01', '2021-09-08'),
(16, 1, 2, 'Vascular Medicine and Call Vascular', '2021-09-08 10:30:03', '2021-09-08'),
(17, 1, 2, 'Dental Surgery', '2021-09-08 08:00:05', '2021-09-08'),
(18, 1, 0, 'Medical analysis laboratory', '2021-09-08 13:30:04', '2021-09-08'),
(25, 8, 2, 'Cardiology', '2021-09-08 14:00:00', '2021-09-08'),
(26, 8, 2, 'Radiology Specialized Medical imaging', '2021-09-08 08:00:02', '2021-09-08'),
(27, 8, 2, 'Emergency Intensive Care', '2021-09-08 14:30:01', '2021-09-08'),
(28, 8, 2, 'Vascular Medicine and Call Vascular', '2021-09-08 15:30:03', '2021-09-08'),
(29, 8, 2, 'Medical analysis laboratory', '2021-09-08 14:30:04', '2021-09-08'),
(30, 8, 2, 'Cardiology ', '2021-09-06 08:00:00', '2021-09-06'),
(31, 8, 0, 'Dental Surgery', '2021-09-08 09:30:05', '2021-09-08'),
(32, 9, 0, 'Cardiology', '2021-09-08 10:00:00', '2021-09-08'),
(33, 9, 0, 'Radiology Specialized Medical imaging', '2021-09-08 10:00:02', '2021-09-08'),
(34, 9, 2, 'Emergency Intensive Care', '2021-09-08 10:30:01', '2021-09-08'),
(35, 9, 0, 'Vascular Medicine and Call Vascular', '2021-09-08 14:30:03', '2021-09-08'),
(36, 9, 0, 'Medical analysis laboratory', '2021-09-08 10:00:04', '2021-09-08'),
(37, 9, 2, 'Dental Surgery', '2021-09-08 10:30:05', '2021-09-08'),
(38, 10, 2, 'Cardiology ', '2021-09-08 15:00:00', '2021-09-08'),
(39, 10, 2, 'Radiology Specialized Medical imaging', '2021-09-08 14:30:02', '2021-09-08'),
(40, 10, 2, 'Emergency Intensive Care', '2021-09-08 09:30:01', '2021-09-08'),
(41, 10, 2, 'Emergency Intensive Care', '2021-09-08 15:30:01', '2021-09-08'),
(42, 10, 2, 'Vascular Medicine and Call Vascular', '2021-09-08 09:00:03', '2021-09-08'),
(43, 10, 2, 'Medical analysis laboratory', '2021-09-08 11:00:04', '2021-09-08'),
(44, 10, 2, 'Dental Surgery', '2021-09-08 15:30:05', '2021-09-08'),
(45, 1, 0, 'Cardiology ', '2021-09-09 08:00:00', '2021-09-09'),
(48, 1, 0, 'Cardiology ', '2021-11-01 08:00:00', '2021-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `resultaa`
--

CREATE TABLE `resultaa` (
  `id` int(11) NOT NULL,
  `id_cons` int(11) NOT NULL,
  `resulta_analyse` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resultaa`
--

INSERT INTO `resultaa` (`id`, `id_cons`, `resulta_analyse`, `date`) VALUES
(1, 2, 'MémoireL3.pdf', '2021-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `resultab`
--

CREATE TABLE `resultab` (
  `id` int(11) NOT NULL,
  `id_cons` int(11) NOT NULL,
  `result_scan` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resultab`
--

INSERT INTO `resultab` (`id`, `id_cons`, `result_scan`, `date`) VALUES
(1, 6, 'برمجية ويب .pdf', '2021-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `secretaire`
--

CREATE TABLE `secretaire` (
  `ID_sec` int(11) NOT NULL,
  `nom_sec` varchar(50) DEFAULT NULL,
  `pre_sec` varchar(50) DEFAULT NULL,
  `date_niss_sec` date DEFAULT NULL,
  `sexe_sec` varchar(10) DEFAULT NULL,
  `tel_sec` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `grop_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secretaire`
--

INSERT INTO `secretaire` (`ID_sec`, `nom_sec`, `pre_sec`, `date_niss_sec`, `sexe_sec`, `tel_sec`, `email`, `password`, `grop_id`) VALUES
(2, 'Adda Benkoceir', 'Isahk', '1985-10-05', 'Man', 549856588, 'isahk@gmail.com', '123456789', 1),
(3, 'Ali Arous', 'Hadjer', '1998-03-26', 'Woman', 668714526, 'ali.arous@gmail.com', '1234567890', 2),
(4, 'Saiha Djabbour', 'Chaima', '2000-11-08', 'Woman', 549380267, 'chaima@gmail.com', '123456789', 3);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID_srv` int(11) NOT NULL,
  `ID_med` int(11) DEFAULT NULL,
  `nom_srv` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID_srv`, `ID_med`, `nom_srv`) VALUES
(1, 1, 'Cardiology'),
(2, 1, 'Radiology Specialized Medical imaging'),
(3, 1, 'Emergency Intensive Care'),
(4, 1, 'Vascular Medicine and Call Vascular'),
(5, 1, 'Medical analysis laboratory'),
(6, 1, 'Dental Surgery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analyse`
--
ALTER TABLE `analyse`
  ADD PRIMARY KEY (`Id_ana`);

--
-- Indexes for table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id_cal`),
  ADD KEY `calendrier_ibfk_1` (`Id_med`);

--
-- Indexes for table `consultaion`
--
ALTER TABLE `consultaion`
  ADD PRIMARY KEY (`id_cons`),
  ADD KEY `ID_med` (`ID_med`);

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`ID_med`);

--
-- Indexes for table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id_medic`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id_ord`),
  ADD KEY `id_cons` (`id_cons`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`ID_pat`);

--
-- Indexes for table `posologie`
--
ALTER TABLE `posologie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_me` (`id_medic`);

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`id_radio`);

--
-- Indexes for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`ID_RDv`),
  ADD UNIQUE KEY `date_rdv` (`date_rdv`),
  ADD KEY `rendez_vous_ibfk_1` (`ID_pat`),
  ADD KEY `ID_sec` (`ID_sec`);

--
-- Indexes for table `resultaa`
--
ALTER TABLE `resultaa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `analyse_ibfk_2` (`id_cons`);

--
-- Indexes for table `resultab`
--
ALTER TABLE `resultab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `radio_ibfk_2` (`id_cons`);

--
-- Indexes for table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`ID_sec`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID_srv`),
  ADD KEY `ID_med` (`ID_med`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analyse`
--
ALTER TABLE `analyse`
  MODIFY `Id_ana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id_cal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultaion`
--
ALTER TABLE `consultaion`
  MODIFY `id_cons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `ID_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id_medic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `ID_pat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posologie`
--
ALTER TABLE `posologie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
  MODIFY `id_radio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `ID_RDv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `resultaa`
--
ALTER TABLE `resultaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resultab`
--
ALTER TABLE `resultab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `ID_sec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID_srv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
