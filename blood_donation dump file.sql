-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: blood_donation
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `active_donor_register`
--

DROP TABLE IF EXISTS `active_donor_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `active_donor_register` (
  `Donor Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Father Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Gender` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `D.O.B` date NOT NULL,
  `Blood Group` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Body Weight` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Email ID` char(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Province` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `District` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Contact Number` int NOT NULL,
  `Last Blood Donated Date` date NOT NULL,
  `New Donor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Donor Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `active_donor_register`
--

LOCK TABLES `active_donor_register` WRITE;
/*!40000 ALTER TABLE `active_donor_register` DISABLE KEYS */;
INSERT INTO `active_donor_register` VALUES (11,'Nimal Perera','Sunil Perera','Male','1995-08-15','A+','75','nimal.perera@example.com','Western','Colombo','123 Galle Road',771234567,'0000-00-00','Yes'),(12,'Kumari Silva','Ruwan Silva','Female','1988-03-22','B-','68','kumari.silva@example.com','Central','Kandy','45 Peradeniya Road',712345678,'2024-08-15','No'),(13,'Anusha Fernando','Sarath Fernando','Female','1992-12-05','O+','60','anusha.fernando@example.com','Southern','Galle','78 Matara Street',763456789,'2024-07-10','No'),(14,'Ruwan Jayasinghe','Bandara Jayasinghe','Male','2000-11-11','AB+','80','ruwan.jaya@example.com','North Western','Kurunegala','22 Kandy Road',776543210,'0000-00-00','Yes'),(15,'Saman Wijesinghe','Lal Wijesinghe','Male','1997-04-28','A-','70','saman.wije@example.com','Eastern','Batticaloa','34 Lake Road',787654321,'0000-00-00','Yes'),(16,'Dilani Rathnayake','Upul Rathnayake','Female','1985-10-09','O-','85','dilani.rath@example.com','North Central','Anuradhapura','56 Mihintale Lane',701234567,'2024-06-15','No'),(17,'Tharindu Karunaratne','Ranjith Karunaratne','Male','1999-07-19','B+','55','tharindu.k@example.com','Sabaragamuwa','Ratnapura','12 Gem Street',718765432,'2024-04-12','Yes'),(18,'Chathuri De Silva','Nimal De Silva','Female','1990-02-18','AB-','78','chathuri.d@example.com','Uva','Badulla','98 Welimada Road',723456789,'2024-03-08','No'),(19,'Kasun Liyanage','Mahinda Liyanage','Male','1993-05-25','A+','65','kasun.l@example.com','Northern','Jaffna','456 Point Pedro Road',745678901,'2024-07-20','No'),(20,'Lakshmi Rajapaksa','Rohitha Rajapaksa','Female','1987-01-15','B-','82','lakshmi.raj@example.com','Western','Kalutara','567 Aluthgama Lane',759876543,'0000-00-00','Yes'),(21,'Nadeeka Senanayake','Nihal Senanayake','Female','2001-12-12','O+','58','nadeeka.sena@example.com','Central','Nuwara Eliya','23 Tea Estate',767890123,'2024-01-05','Yes'),(22,'Harsha Bandara','Rathnayake Bandara','Male','1996-09-08','A-','73','harsha.b@example.com','North Western','Puttalam','67 Chilaw Road',779876543,'2024-09-10','No'),(23,'Shanika Rathnayake','Amal Rathnayake','Female','1991-03-17','AB+','69','shanika.rath@example.com','Southern','Matara','456 Dondra Road',781230987,'2024-06-01','No'),(24,'Ashen Peiris','Suresh Peiris','Male','1989-11-22','O-','77','ashen.peiris@example.com','Uva','Monaragala','34 Wellawaya Lane',798765432,'0000-00-00','Yes'),(25,'Chandima Gunawardena','Kamal Gunawardena','Female','1994-06-11','B+','62','chandima.g@example.com','Eastern','Trincomalee','567 Kinniya Road',701122334,'2024-05-18','No'),(26,'Kasun Jayawardena','Lalith Jayawardena','Male','1987-05-05','O-','75','kasun.jaya@example.com','Sabaragamuwa','Ratnapura','890 Gem City',745678901,'2023-08-20','No'),(31,'David','Joseph ','male','2000-01-10','O','56','david@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-14','yes');
/*!40000 ALTER TABLE `active_donor_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` char(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('thusha','karan');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blood_stock`
--

DROP TABLE IF EXISTS `blood_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blood_stock` (
  `hospital_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `A_positive` int NOT NULL,
  `A_negative` int NOT NULL,
  `B_positive` int NOT NULL,
  `B_negative` int NOT NULL,
  `AB_positive` int NOT NULL,
  `AB_negative` int NOT NULL,
  `O_positive` int NOT NULL,
  `O_negative` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood_stock`
--

LOCK TABLES `blood_stock` WRITE;
/*!40000 ALTER TABLE `blood_stock` DISABLE KEYS */;
INSERT INTO `blood_stock` VALUES ('Colombo General Hospital',21,15,30,5,15,2,40,8),('Sri Jayewardenepura General Hospital',25,25,70,10,12,3,35,5),('National Hospital of Sri Lanka',30,20,38,7,18,4,50,10),('Kandy Teaching Hospital',25,10,25,5,10,1,30,31),('Ruhuna University Teaching Hospital',12,8,18,4,9,2,25,3),('Jaffna Teaching Hospital',18,9,22,6,11,3,32,7),('Anuradhapura Teaching Hospital',14,7,16,3,8,1,28,4),('Batticaloa Teaching Hospital',10,5,12,2,6,2,15,3),('Negombo General Hospital',22,12,27,8,14,3,36,5),('Matara General Hospital',16,9,20,4,10,1,26,16);
/*!40000 ALTER TABLE `blood_stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inbox` (
  `full_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` int NOT NULL,
  `email` char(150) COLLATE utf8mb4_general_ci NOT NULL,
  `hospital` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
INSERT INTO `inbox` VALUES ('Nimal Perera',711234567,'nimal.perera@example.com','Colombo General Hospital','Looking for urgent O+ blood.'),('Kavindi Silva',779876543,'kavindi.silva@example.com','Kandy Teaching Hospital','Need blood donors for surgery tomorrow.'),('Ruwan Fernando',764567890,'ruwan.fernando@example.com','Jaffna District Hospital','How can I register as a donor?'),('Chamari Wickramasinghe',722345678,'chamari.wickramasinghe@example.com','Galle Base Hospital','Can I donate if I recently traveled abroad?'),('Sunil Jayasinghe',753456789,'sunil.jayasinghe@example.com','Kurunegala General Hospital','Looking for A- blood for a patient in ICU.'),('Thushakaran Balasubramaniyam',762971306,'thushakarant@gmail.com','Colombo General Hospital','I want O positive blood'),('Thushakaran Balasubramaniyam',762971306,'thushakarant@gmail.com','Colombo General Hospital','I want O+ blood'),('Thushakaran Balasubramaniyam',762971306,'thushakarant@gmail.com','Colombo General Hospital','Accident ');
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `need_blood`
--

DROP TABLE IF EXISTS `need_blood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `need_blood` (
  `Patient Id` int NOT NULL AUTO_INCREMENT,
  `Patient Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Gender` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Blood Group Type` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Need Unit of Blood` int NOT NULL,
  `Hospital Address` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Doctor Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Required Date` date NOT NULL,
  `Email` char(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Contact Number` int NOT NULL,
  `Reason` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Patient Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `need_blood`
--

LOCK TABLES `need_blood` WRITE;
/*!40000 ALTER TABLE `need_blood` DISABLE KEYS */;
INSERT INTO `need_blood` VALUES (1,'Anura Perera','Male','A+',2,'National Hospital, Colombo','Dr. Jayasuriya','2024-11-10','anura.perera@example.com',712345678,'Surgery'),(2,'Samanthi Silva','Female','B-',3,'Teaching Hospital, Kandy','Dr. Wijekoon','2024-11-12','samanthi.silva@example.com',758765432,'Accident'),(3,'Ruwan Jayasundara','Male','O+',4,'Karapitiya Hospital, Galle','Dr. Fernando','2024-11-08','ruwan.jaya@example.com',773456789,'Anemia'),(4,'Dilani Rathnayake','Female','AB+',1,'District General Hospital, Kurunegala','Dr. Kumara','2024-11-09','dilani.rath@example.com',764567890,'Childbirth'),(5,'Kamal Wickramasinghe','Male','B+',2,'Base Hospital, Matara','Dr. Perera','2024-11-15','kamal.wick@example.com',781230987,'Thalassemia'),(6,'Sanduni Pathirana','Female','A-',3,'Teaching Hospital, Jaffna','Dr. Vithanage','2024-11-11','sanduni.path@example.com',727890123,'Heart Surgery'),(8,'Arsuna','male','O+',3,'Colombo General Hospital','Kamal','2024-01-11','arsuna@gmail.com',744556365,'Accident');
/*!40000 ALTER TABLE `need_blood` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `non_active_donor_register`
--

DROP TABLE IF EXISTS `non_active_donor_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `non_active_donor_register` (
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Father Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Gender` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `D.O.B` date NOT NULL,
  `Blood Group` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Body Weight` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Email ID` char(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Province` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `District` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Contact Number` int NOT NULL,
  `Last Blood Donated Date` date NOT NULL,
  `New Donor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `non_active_donor_register`
--

LOCK TABLES `non_active_donor_register` WRITE;
/*!40000 ALTER TABLE `non_active_donor_register` DISABLE KEYS */;
INSERT INTO `non_active_donor_register` VALUES ('Nuwan Kumara','Sunil Kumara','Male','1998-07-15','A+','70','nuwan.kumara@example.com','Western','Colombo','123 Marine Drive',712345678,'0000-00-00','Yes'),('Piumi Ratnayake','Gamini Ratnayake','Female','1995-03-22','B-','65','piumi.rat@example.com','Central','Kandy','45 Temple Street',778765432,'0000-00-00','Yes'),('Ravindu Wijesinghe','Chandana Wijesinghe','Male','1989-12-11','O+','78','ravindu.wije@example.com','Southern','Galle','89 Lighthouse Lane',753456789,'2023-11-12','No'),('Sanduni Perera','Ranjith Perera','Female','1997-04-18','AB+','55','sanduni.p@example.com','North Western','Kurunegala','23 Main Street',724567890,'0000-00-00','Yes'),('Gayan Senarath','Mahinda Senarath','Male','1990-09-08','B+','82','gayan.sena@example.com','Eastern','Batticaloa','567 Ampara Road',771230987,'2023-06-15','No'),('Tharushi Fernando','Dinesh Fernando','Female','2000-01-12','A-','60','tharushi.fern@example.com','Northern','Jaffna','10 KKS Road',767890123,'0000-00-00','Yes'),('Thushakaran Balasubramaniyam','Balasubramaniyam','male','2002-01-19','O+','63','thushakarant@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2024-11-13','no'),('saru','Kamal','male','2002-01-11','O+','63','thushakarant@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2024-11-08','no'),('Kamal','David','male','2025-01-21','O+','65','thushakarant@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-21','yes'),('Woner','Eakamparam','male','2002-01-02','O+','56','thushakarant@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-21','yes'),('nirojan','kunesan','male','2023-07-20','O+','30','thushakarant@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',716889714,'2023-12-12','yes'),('Thusha','Mathan','male','2025-01-22','O+','45','thusha@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-01','yes'),('thusha','Mathan','male','2025-01-25','O+','45','thusha@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-01','yes'),('saru','santhan','male','2025-01-23','O+','55','djtyuy@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-31','yes'),('saru','santhan	','male','2025-01-23','O+','55','djtyuy@gmail.com','Northern','Jaffna','Sivan Kovilady, Sithankerney.',762971306,'2025-01-31','yes');
/*!40000 ALTER TABLE `non_active_donor_register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-13  0:17:17
