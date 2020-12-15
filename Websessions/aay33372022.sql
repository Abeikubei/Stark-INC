-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 12:01 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aay33372022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--


CREATE TABLE `admins` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(200) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Role` smallint(6) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_ID`, `Admin_Name`, `Email`, `Password`, `Contact`, `Role`) VALUES
(3, 'Abeiku Yorke', 'abeikubei123@gmail.com', '64ea4cc830111ab0ea847da1cdb808ed', 'a5e9388481b113fd9bd5ee64ea5b1230', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bank_transactions`
--

CREATE TABLE `bank_transactions` (
  `BankID` int(10) UNSIGNED NOT NULL,
  `Bank_Name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Transaction_Date_and_Time` datetime NOT NULL,
  `Amount_of_CTOR_recieved` decimal(10,2) NOT NULL,
  `Amount_of_Money_Withdrawn` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_transactions`
--

INSERT INTO `bank_transactions` (`BankID`, `Bank_Name`, `Location`, `Transaction_Date_and_Time`, `Amount_of_CTOR_recieved`, `Amount_of_Money_Withdrawn`) VALUES
(1, 'Ghana Cocoa Board', 'Tarkwa', '2020-12-14 13:34:00', '60.00', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `clerk_transactions`
--

CREATE TABLE `clerk_transactions` (
  `CTransactionID` int(10) UNSIGNED NOT NULL,
  `CTransaction_Date_and_Time` datetime NOT NULL,
  `Number_Of_CocoaBags` int(11) NOT NULL,
  `Amount_of_Money_Paid` decimal(8,2) NOT NULL,
  `FarmerID` int(11) NOT NULL,
  `ClerkID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clerk_transactions`
--

INSERT INTO `clerk_transactions` (`CTransactionID`, `CTransaction_Date_and_Time`, `Number_Of_CocoaBags`, `Amount_of_Money_Paid`, `FarmerID`, `ClerkID`) VALUES
(1, '2020-12-14 11:12:00', 200, '200.00', 1, 1),
(3, '2020-12-14 16:40:00', 10, '10.00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_cocoa_transactions`
--

CREATE TABLE `company_cocoa_transactions` (
  `TransactionID` int(10) UNSIGNED NOT NULL,
  `Transaction_Date_and_Time` datetime NOT NULL,
  `Category_Of_Cocoa` enum('Small','Medium','Large') NOT NULL,
  `Port` enum('Takoradi Port','Tema Port','Kaase Port') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_cocoa_transactions`
--

INSERT INTO `company_cocoa_transactions` (`TransactionID`, `Transaction_Date_and_Time`, `Category_Of_Cocoa`, `Port`) VALUES
(1, '2020-12-14 16:25:00', 'Medium', 'Tema Port'),
(2, '2020-12-19 19:38:00', 'Medium', 'Tema Port'),
(3, '2020-12-19 19:38:00', 'Medium', 'Tema Port');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `DistrictID` int(11) NOT NULL,
  `District_Name` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `VehicleID` int(11) NOT NULL,
  `Vehicle_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`DistrictID`, `District_Name`, `Region`, `VehicleID`, `Vehicle_Number`) VALUES
(1, 'Sehwi Wiawso', 'Eastern Region', 91, 'VR-098-20'),
(3, 'Sehwi Kakabi', 'Eastern Region', 1111, 'VR-0989-21');

-- --------------------------------------------------------

--
-- Table structure for table `district_managers`
--

CREATE TABLE `district_managers` (
  `ManagerID` int(11) NOT NULL,
  `Manager_Name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `DistrictID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district_managers`
--

INSERT INTO `district_managers` (`ManagerID`, `Manager_Name`, `DOB`, `Contact`, `DistrictID`) VALUES
(1, 'Obeng Kwadwo', '1990-08-15', '0243137536', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district_operations`
--

CREATE TABLE `district_operations` (
  `OperationID` int(11) NOT NULL,
  `Season` enum('Main Season','Light Season') NOT NULL,
  `Week` smallint(6) NOT NULL,
  `SeedFund` decimal(10,2) NOT NULL,
  `Cocoa_Purchases` int(11) NOT NULL,
  `Cocoa_Evacuated_To_Depot` int(11) NOT NULL,
  `Evacuation_To_Depot_Percentage` int(11) NOT NULL,
  `Cocoa_Evacuated_To_Port` int(6) NOT NULL,
  `Evacuation_Percentage_To_Port` int(11) NOT NULL,
  `Driver_Name` varchar(50) NOT NULL,
  `Driver_Contact` varchar(15) NOT NULL,
  `Assist_Driver_Name` varchar(50) DEFAULT NULL,
  `Assist_Driver_Contact` varchar(15) DEFAULT NULL,
  `DistrictID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district_operations`
--

INSERT INTO `district_operations` (`OperationID`, `Season`, `Week`, `SeedFund`, `Cocoa_Purchases`, `Cocoa_Evacuated_To_Depot`, `Evacuation_To_Depot_Percentage`, `Cocoa_Evacuated_To_Port`, `Evacuation_Percentage_To_Port`, `Driver_Name`, `Driver_Contact`, `Assist_Driver_Name`, `Assist_Driver_Contact`, `DistrictID`) VALUES
(7, 'Light Season', 2, '1000.00', 12, 12, 100, 12, 100, 'Alhassan', '0243137546', 'Frederick Opana', '0243137545', 3);

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `FarmerID` int(11) NOT NULL,
  `Farmer_Name` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Family_Relative_Name` varchar(50) DEFAULT NULL,
  `Family_Relative_Contact` varchar(15) DEFAULT NULL,
  `Residence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`FarmerID`, `Farmer_Name`, `Gender`, `DOB`, `Contact`, `Family_Relative_Name`, `Family_Relative_Contact`, `Residence`) VALUES
(1, 'Opanin Kwame', 'Male', '0000-00-00', '0243137538', 'Yaa Foowaaa', '0243137538', 'Tarkwa');

-- --------------------------------------------------------

--
-- Table structure for table `purchasing_clerks`
--

CREATE TABLE `purchasing_clerks` (
  `ClerkID` int(11) NOT NULL,
  `Clerk_Name` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `Level_of_Education` enum('Secondary School Graduate','University','University Graduate','Masters','Masters Grad','PHd') NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `ManagerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchasing_clerks`
--

INSERT INTO `purchasing_clerks` (`ClerkID`, `Clerk_Name`, `Gender`, `DOB`, `Level_of_Education`, `Contact`, `ManagerID`) VALUES
(1, 'kweku Yamoah', 'Male', '2000-08-14', 'University', '0243137538', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  ADD PRIMARY KEY (`BankID`),
  ADD UNIQUE KEY `BankID` (`BankID`);

--
-- Indexes for table `clerk_transactions`
--
ALTER TABLE `clerk_transactions`
  ADD PRIMARY KEY (`CTransactionID`),
  ADD KEY `FarmerID` (`FarmerID`),
  ADD KEY `ClerkID` (`ClerkID`);

--
-- Indexes for table `company_cocoa_transactions`
--
ALTER TABLE `company_cocoa_transactions`
  ADD PRIMARY KEY (`TransactionID`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`DistrictID`,`VehicleID`),
  ADD UNIQUE KEY `DistrictID` (`DistrictID`,`VehicleID`);

--
-- Indexes for table `district_managers`
--
ALTER TABLE `district_managers`
  ADD PRIMARY KEY (`ManagerID`),
  ADD KEY `DistrictID` (`DistrictID`);

--
-- Indexes for table `district_operations`
--
ALTER TABLE `district_operations`
  ADD PRIMARY KEY (`OperationID`),
  ADD KEY `DistrictID` (`DistrictID`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`FarmerID`);

--
-- Indexes for table `purchasing_clerks`
--
ALTER TABLE `purchasing_clerks`
  ADD PRIMARY KEY (`ClerkID`),
  ADD KEY `ManagerID` (`ManagerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  MODIFY `BankID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clerk_transactions`
--
ALTER TABLE `clerk_transactions`
  MODIFY `CTransactionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_cocoa_transactions`
--
ALTER TABLE `company_cocoa_transactions`
  MODIFY `TransactionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `DistrictID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `district_managers`
--
ALTER TABLE `district_managers`
  MODIFY `ManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district_operations`
--
ALTER TABLE `district_operations`
  MODIFY `OperationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `FarmerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchasing_clerks`
--
ALTER TABLE `purchasing_clerks`
  MODIFY `ClerkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clerk_transactions`
--
ALTER TABLE `clerk_transactions`
  ADD CONSTRAINT `clerk_transactions_ibfk_1` FOREIGN KEY (`FarmerID`) REFERENCES `farmers` (`FarmerID`),
  ADD CONSTRAINT `clerk_transactions_ibfk_2` FOREIGN KEY (`ClerkID`) REFERENCES `purchasing_clerks` (`ClerkID`);

--
-- Constraints for table `district_managers`
--
ALTER TABLE `district_managers`
  ADD CONSTRAINT `district_managers_ibfk_1` FOREIGN KEY (`DistrictID`) REFERENCES `districts` (`DistrictID`);

--
-- Constraints for table `district_operations`
--
ALTER TABLE `district_operations`
  ADD CONSTRAINT `district_operations_ibfk_1` FOREIGN KEY (`DistrictID`) REFERENCES `districts` (`DistrictID`);

--
-- Constraints for table `purchasing_clerks`
--
ALTER TABLE `purchasing_clerks`
  ADD CONSTRAINT `purchasing_clerks_ibfk_1` FOREIGN KEY (`ManagerID`) REFERENCES `district_managers` (`ManagerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
