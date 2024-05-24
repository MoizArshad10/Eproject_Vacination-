-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 08:14 PM
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
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `USER_ID_FK` int(11) NOT NULL,
  `CHILD_ID_FK` int(11) NOT NULL,
  `HOSPITAL_ID_FK` int(11) NOT NULL,
  `VACCINE_ID_FK` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `TIME` time NOT NULL,
  `REMARKS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `USER_ID_FK`, `CHILD_ID_FK`, `HOSPITAL_ID_FK`, `VACCINE_ID_FK`, `DATE`, `STATUS`, `TIME`, `REMARKS`) VALUES
(23, 12, 8, 14, 2, '2024-05-15', 'Pending', '16:00:00', ''),
(24, 13, 9, 20, 5, '2024-05-16', 'Pending', '23:10:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `CAT_NAME` varchar(40) NOT NULL,
  `DETAILS` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `CAT_NAME`, `DETAILS`) VALUES
(2, 'Covid-19', 'Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that originated in China.  The virus is known as severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease it causes is called coronavirus disease 2019 (COVID-19). In March 2020, the World Health Organization (WHO) declared the COVID-19 outbreak a pandemic.  Public health groups, including the U.S. Centers for Disease Control and Prevention (CDC) and WHO, are monitoring the COVID-19 pandemic and posting updates on their websites. These groups have also issued recommendations for preventing and treating the virus that causes COVID-19.'),
(3, 'Chickenpox', 'Chickenpox is an infection caused by the varicella-zoster virus. It causes an itchy rash with small, fluid-filled blisters. Chickenpox is highly contagious to people who haven\'t had the disease or been vaccinated against it. Today, a vaccine is available that protects children against chickenpox. Routine vaccination is recommended by the U.S. Centers for Disease Control and Prevention (CDC).\r\n\r\nThe chickenpox vaccine is a safe, effective way to prevent chickenpox and its possible complications.'),
(4, 'Dengue', 'Dengue (DENG-gey) fever is a mosquito-borne illness that occurs in tropical and subtropical areas of the world. Mild dengue fever causes a high fever and flu-like symptoms. The severe form of dengue fever, also called dengue hemorrhagic fever, can cause serious bleeding, a sudden drop in blood pressure (shock) and death.\r\n\r\nMillions of cases of dengue infection occur worldwide each year. Dengue fever is most common in Southeast Asia, the western Pacific islands, Latin America and Africa. But the disease has been spreading to new areas, including local outbreaks in Europe and southern parts of the United States.\r\n\r\nResearchers are working on dengue fever vaccines. For now, in areas where dengue fever is common, the best ways to prevent infection are to avoid being bitten by mosquitoes and to take steps to reduce the mosquito population'),
(5, 'Flu', 'Flu (influenza) is an infection of the nose, throat and lungs, which are part of the respiratory system. Influenza is commonly called the flu, but it\'s not the same as stomach \"flu\" viruses that cause diarrhea and vomiting.\r\n\r\nMost people with the flu get better on their own. But sometimes, influenza and its complications can be deadly. People at higher risk of developing flu complications include:\r\n\r\nYoung children under age 2\r\nAdults older than age 65\r\nResidents of nursing homes and other long-term care facilities\r\nPeople who are pregnant or plan to be pregnant during flu season\r\nPeople with weakened immune systems\r\nAmerican Indians or Alaska Natives\r\nPeople who have chronic illnesses, such as asthma, heart disease, kidney disease, liver disease and diabetes\r\nPeople with a body mass index (BMI) of 40 or higher\r\nAlthough the annual influenza vaccine isn\'t 100% effective, it reduces the chances of having severe complications from infection.'),
(6, 'Hepatitis A', 'Hepatitis A is a highly contagious liver infection caused by the hepatitis A virus. The virus is one of several types of hepatitis viruses that cause liver inflammation and affect your liver\'s ability to function.\r\n\r\nYou\'re most likely to get hepatitis A from contaminated food or water or from close contact with a person or object that\'s infected. Mild cases of hepatitis A don\'t require treatment. Most people who are infected recover completely with no permanent liver damage.\r\n\r\nPracticing good hygiene, including washing hands frequently, can prevent the spread of the virus. The hepatitis A vaccine can protect against hepatitis A.'),
(7, 'Hepatitis B', 'Hepatitis B is a serious liver infection caused by the hepatitis B virus (HBV). For most people, hepatitis B is short term, also called acute, and lasts less than six months. But for others, the infection becomes chronic, meaning it lasts more than six months. Having chronic hepatitis B increases your risk of developing liver failure, liver cancer or cirrhosis — a condition that permanently scars the liver.\r\n\r\nMost adults with hepatitis B recover fully, even if their symptoms are severe. Infants and children are more likely to develop a long-lasting hepatitis B infection. This is known as a chronic infection.\r\n\r\nA vaccine can prevent hepatitis B, but there\'s no cure if you have the condition. If you\'re infected, taking certain precautions can help prevent spreading the virus to others.'),
(8, 'Polio', 'Polio is a contagious viral illness that in its most severe form causes nerve injury leading to paralysis, difficulty breathing and sometimes death.\r\n\r\nIn the U.S., the last case of naturally occurring polio was in 1979. Today, despite a worldwide effort to wipe out polio, poliovirus continues to affect children and adults in parts of Asia and Africa.\r\n\r\nThe Centers for Disease Control and Prevention (CDC) advises taking precautions to protect yourself from polio if you\'re traveling anywhere there\'s a risk of polio.\r\n\r\nAdults who have been vaccinated who plan to travel to an area where polio is occurring should receive a booster dose of inactivated poliovirus vaccine (IPV). Immunity after a booster lasts a lifetime.');

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `ID` int(11) NOT NULL,
  `PARENTS_ID_FK` int(11) NOT NULL,
  `D_O_B` date NOT NULL,
  `CHILD_NAME` varchar(40) NOT NULL,
  `BLOOD_GROUP` varchar(30) NOT NULL,
  `GENDER` varchar(30) NOT NULL,
  `B_FORM` varchar(30) NOT NULL,
  `B_CERTIFICATE` varchar(30) NOT NULL,
  `PARENTS_CNIC` varchar(40) NOT NULL,
  `CHILD_PICTURE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`ID`, `PARENTS_ID_FK`, `D_O_B`, `CHILD_NAME`, `BLOOD_GROUP`, `GENDER`, `B_FORM`, `B_CERTIFICATE`, `PARENTS_CNIC`, `CHILD_PICTURE`) VALUES
(6, 2, '2009-02-10', 'Anas', 'B-', 'Male', '23457-8665-4224-9', '2222-344-35674-44', '42401-77777-334', 'mypictures/childs/card.jpg'),
(7, 2, '2006-05-08', 'Areesha', 'O-', 'Female', '2233-22111-355355', '11-3335-5557-88-90-0', '12456-758-5448-54-7', 'mypictures/childs/girl.jpg'),
(8, 12, '2024-05-16', 'Ana', 'B+', 'Female', '23457-8665-4224-9', '2222-344-35674-44', '42401-77777-334', 'mypictures/childs/girl.jpg'),
(9, 13, '2014-12-28', 'Ali', 'A-', 'Male', '23457-8665-4224-9', '2222-344-35674-44', '42401-77777-334', 'mypictures/childs/card.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `ID` int(11) NOT NULL,
  `USER_ID_FK` int(11) NOT NULL,
  `HOSPITAL_NAME` varchar(50) NOT NULL,
  `LOCATION` varchar(60) NOT NULL,
  `CONTACT` varchar(30) NOT NULL,
  `HOSPITAL_PIC` varchar(100) NOT NULL,
  `DETAILS` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`ID`, `USER_ID_FK`, `HOSPITAL_NAME`, `LOCATION`, `CONTACT`, `HOSPITAL_PIC`, `DETAILS`) VALUES
(13, 4, 'Agha Khan University Hospital', 'Stadium Road,Karachi', '+92 21 3493 0051', 'mypictures/hospital/agha_khan.jpg', 'The Aga Khan University Hospital in Karachi, established in 1985. Their vision is to provide premier,            tertiary, referral health care facilities to the people of Pakistan.AKU\'s objective is to promote human welfare by             disseminating knowledge and providing instruction, training, research and services in health sciences, education and             other disciplines. AKU is a non-denominational institution open to all on merit, and admissions to its academic             programmes are needs-blind. The University places special emphasis on the development of women. Through its high             academic standards, programmes relevant to the needs of developing societies, its work as a dialogue partner with             government on issues of health and education policy, and its delivery of critical social services, AKU has had a              national impact in Pakistan. With the launch of academic programmes in East Africa, the United Kingdom, Syria and              Afghanistan, AKU has now established itself as an international institution at ten sites in seven countries. AKU\'s               Faculty of Health Sciences, comprising a Medical College and a School of Nursing, is located on the same campus in               Karachi as Aga Khan University Hospital (AKUH). The Institute for Educational Development (AKUIED) is situated at                another campus in Karachi, while the Institute for the Study of Muslim Civilisations (AKU-ISMC) is based in                London. With the development of AKU-IED and AKU-ISMC, along with the planning of a Faculty of Arts and Sciences,                AKU has moved towards becoming a comprehensive university.'),
(14, 5, 'Liaquat National Hospital', 'National Stadium Road,Karachi', '+92-21 34413010', 'mypictures/hospital/liaquat_national.png', 'Welcome to Liaquat National Hospital! Every day thousands of people enter the gates of Liaquat National Hospital (LNH) seeking medical attention for themselves or their loved ones. With an undying commitment to excellence that meets international standards, regulations and quality systems, we make sure that the patient’s needs are met satisfactorily under a single roof. Liaquat National Hospital is located in the center of the bustling city of Karachi near the National Cricket Stadium. Owing to this unique location LNH has easy access from all quadrants of the city.  LNH was conceived 60 years ago as a not-for-profit organization with a vision to provide quality healthcare at an affordable cost to all socioeconomic classes. Over the years, the hospital has evolved to become the largest tertiary care hospital in the country with more than 700 beds. We also have the largest number of ICU beds and ventilators in the city. The hospital excels in all facets of medicine, surgery, diagnostics and medical support services. LNH houses more than 35 specialties. Considering patient’s care as priority, we provide 24 hour emergency services, acute care, inpatient, outpatient and day care facilities not only to the city but also to patients from the far reaching corners of Sindh, Balochistan, Khyber Pakhtunkhwa and Punjab.'),
(16, 8, 'Dr. Ruth K . M. Pfau Civil Hospital', 'Opp: Allawala Market, M.A.Jinnah Road,Karachi', '02199215740', 'mypictures/hospital/civil_hosp.jpg', 'The Civil Hospital Karachi Initially established in 1898 with 250 beds to provide basic health facilities, the hospital has expanded considerably and has been totally transformed over the years. Its 1900 beds are located in 34 departments, with over a dozen major operation theaters and a huge out patient’s attendance. Greater stress is being laid on public-private partnerships and preventive work notably in the Paediatrics department to avert unnecessary infant and child deaths due to pneumonia, malnutrition, diarrhea or vaccine-preventable illnesses. Measures are also in place to prevent and control major communicable diseases such as Tuberculosis, Malaria, viral Hepatitis B & C and HIV/AIDS, in addition to non-communicable diseases such as cardiovascular diseases, diabetes and cancers having a huge burden in Pakistan. Today as Karachi is a sprawling mega-city with a population estimated at 18 million divided into 18 major towns, the Civil Hospital Karachi lives on to tell two tales in the same city. The services of this tertiary care institution have kept in line with the latest technological advances as far as that is compatible with the situation in a low-income developing country. Sophisticated laboratory and radiographical procedures, investigations and examinations are performed totally free to benefit the poor patients attending the hospital. An average of two million out-patients report to the Hospital annually; 95% of which are non-affording patients entailing a huge cost on medicines, laboratory facilities and other logistics.\n\n \n '),
(17, 10, 'Dow University Hospital', 'Saddar,Karachi', '+ 922199232660 ', 'mypictures/hospital/dow_medical.jpg', 'Dow University Hospital was established in the year 2009. It serves as a tertiary care University Hospital attached to Dow International Medical College for teaching and training of MBBS & Post-graduate students. The Dow hospital is a 5 story building, with large capacity of 1000 beds, fully equipped emergency room, spacious general wards, semi-private rooms, private rooms, an operation theater complex and labor rooms. It is also equipped with most modern facilities and units for treatment of surgical and medical problems, like the 12 bedded ICU and HDU, Nursery, Special Care Unit, Endoscopy Units, and the Liver Transplant Center. The hospital consists of Ultrasound, Echocardiography and pharmacy besides Seminar Rooms, a cafeteria, and the administrative departments.\n \nAll types of routine and specialized surgeries are carried out by qualified and experienced surgeons of every specialty, including neurosurgery, cardiac surgery and even plastic surgery. The Intensive Care Unit (ICU) is also fully equipped with ventilators and other required equipment and monitors. High Dependency Unit (HDU) is meant for serious patients, not requiring ventilators. 10 dialysis machines are providing services till late night daily, separate machines are designated for Hepatitis B and C patients. A new dialysis lab has also been created to meet with demand for dialysis around the clock. A lab collection point is placed within the Dow Hospital to facilitate indoor and emergency patients, besides specialized collection centers all over the city, and interior of Sindh.'),
(20, 11, 'Dr. Ziauddin Hospital North Nazimabad', 'Allama Rasheed Turabi Rd, Wahid Colony, Karachi, Karachi Cit', '(021) 111 942 942', 'mypictures/hospital/ziaudin.jpg', 'Operating under the Ziauddin Trust, Dr. Ziauddin Group of Hospitals is one of the largest private groups in the country. Its mission has been to reach out to the masses and cater to their needs for quality health care facilities at affordable rates in the country. It began with a small maternity home and has grown exponentially over the years to include five hospitals, including three tertiary-care facilities, responding to the healthcare needs of the people.  These hospitals are:  Dr. Ziauddin Hospital, North Nazimabad Campus Dr. Ziauddin Hospital, Clifton Campus Dr. Ziauddin Cancer Hospital Dr. Ziauddin Hospital , Keamari Campus Dr. Ziauddin Memorial Hospital Boat Basin Executive Clinics All facilities under Dr. Ziauddin Group of Hospitals are equipped with state-of-the-art equipment and focused on providing services of the highest quality. The diagnostic technologies, and medical and surgical treatments provided, are controlled to keep pace with the technological advancements. The planning and development ');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `ROLE_NAME` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `ROLE_NAME`) VALUES
(1, 'Admin'),
(2, 'Parent'),
(3, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `ROLE_ID_FK` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `CONTACT` varchar(40) NOT NULL,
  `USER_IMAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `ROLE_ID_FK`, `USERNAME`, `PASSWORD`, `CONTACT`, `USER_IMAGE`) VALUES
(1, 1, 'admin', 'admin234', '03245263865', 'mypictures/users/Profile.png'),
(2, 2, 'Idrak', 'idrak123', '0343718182', 'mypictures/users/avatar.jpg'),
(4, 3, 'Agha', 'agha123', '03001234567', 'mypictures/users/agha.jpg'),
(5, 3, 'Liaquat', 'liaquat123', '12345678', 'mypictures/users/liaquat.png'),
(6, 3, 'Patel', 'patel123', '03353780500', 'mypictures/users/patel.jpg'),
(8, 3, 'Civil', 'civil123', '03353780501', 'mypictures/users/civil.jpg'),
(10, 3, 'Dow', 'dow123', '03353780504', 'mypictures/users/dow.jpg'),
(11, 3, 'Zia-Uddin ', 'zia123', '(021) 111 942 942', 'mypictures/users/ziuddin.jpg'),
(12, 2, 'Abdullah', 'abdullah123', '03294206718', 'mypictures/users/abd.png'),
(13, 2, 'Muzammil', 'muzamil123', '03254152635', 'mypictures/users/muz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_availability`
--

CREATE TABLE `vaccine_availability` (
  `ID` int(11) NOT NULL,
  `USER_ID_FK` int(11) NOT NULL,
  `VACCINE_ID_FK` int(11) NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `HOSPITAL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_availability`
--

INSERT INTO `vaccine_availability` (`ID`, `USER_ID_FK`, `VACCINE_ID_FK`, `STATUS`, `HOSPITAL`) VALUES
(9, 10, 1, '', 'Dow University Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_detail`
--

CREATE TABLE `vaccine_detail` (
  `ID` int(11) NOT NULL,
  `CAT_ID_FK` int(11) NOT NULL,
  `VACCINE_NAME` varchar(40) NOT NULL,
  `DOSAGE` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_detail`
--

INSERT INTO `vaccine_detail` (`ID`, `CAT_ID_FK`, `VACCINE_NAME`, `DOSAGE`) VALUES
(1, 2, 'Pfizer', 'First'),
(2, 2, 'Moderna', 'First'),
(3, 2, 'Synopharm', 'First'),
(4, 3, 'Varivax', 'First'),
(5, 3, 'Proquad', 'First');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `VACCINE_ID_FK` (`VACCINE_ID_FK`),
  ADD KEY `CHILD_ID_FK` (`CHILD_ID_FK`),
  ADD KEY `USER_ID_FK` (`USER_ID_FK`),
  ADD KEY `HOSPITAL_ID_FK` (`HOSPITAL_ID_FK`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PARENTS_ID_FK` (`PARENTS_ID_FK`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ID_FK` (`USER_ID_FK`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`,`ROLE_ID_FK`),
  ADD UNIQUE KEY `PASSWORD` (`PASSWORD`),
  ADD KEY `ROLE_ID_FK` (`ROLE_ID_FK`);

--
-- Indexes for table `vaccine_availability`
--
ALTER TABLE `vaccine_availability`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `vaccine_availability_ibfk_1` (`VACCINE_ID_FK`),
  ADD KEY `USER_ID_FK` (`USER_ID_FK`);

--
-- Indexes for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CAT_ID_FK` (`CAT_ID_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vaccine_availability`
--
ALTER TABLE `vaccine_availability`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`VACCINE_ID_FK`) REFERENCES `vaccine_detail` (`ID`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`CHILD_ID_FK`) REFERENCES `child_details` (`ID`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`USER_ID_FK`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`HOSPITAL_ID_FK`) REFERENCES `hospital` (`ID`);

--
-- Constraints for table `child_details`
--
ALTER TABLE `child_details`
  ADD CONSTRAINT `child_details_ibfk_1` FOREIGN KEY (`PARENTS_ID_FK`) REFERENCES `users` (`ID`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`USER_ID_FK`) REFERENCES `users` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ROLE_ID_FK`) REFERENCES `role` (`ID`);

--
-- Constraints for table `vaccine_availability`
--
ALTER TABLE `vaccine_availability`
  ADD CONSTRAINT `vaccine_availability_ibfk_1` FOREIGN KEY (`VACCINE_ID_FK`) REFERENCES `vaccine_detail` (`ID`),
  ADD CONSTRAINT `vaccine_availability_ibfk_2` FOREIGN KEY (`USER_ID_FK`) REFERENCES `users` (`ID`);

--
-- Constraints for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  ADD CONSTRAINT `vaccine_detail_ibfk_1` FOREIGN KEY (`CAT_ID_FK`) REFERENCES `category` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
