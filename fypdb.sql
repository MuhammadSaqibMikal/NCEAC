-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 07:30 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstructure`
--

CREATE TABLE IF NOT EXISTS `adminstructure` (
  `Form_Id` int(10) NOT NULL,
  `AdminStructure_Instituition` varchar(100) DEFAULT NULL,
  `AdminStructure_Evaluate` varchar(100) DEFAULT NULL,
  `AdminStructure_Name` varchar(100) DEFAULT NULL,
  `AdminStructure_Address` varchar(100) DEFAULT NULL,
  `AdminStructure_Name_Of_Chief` varchar(100) DEFAULT NULL,
  `AdminStructure_Administrative` varchar(100) DEFAULT NULL,
  `AdminStructure_Board` varchar(100) DEFAULT NULL,
  `AdminStructure_Bodies` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT NULL,
  `AssignmentDateTime` datetime NOT NULL,
  `SubmissionDateTime` datetime DEFAULT NULL,
  `MainFormID` int(11) DEFAULT '1',
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminstructure`
--

INSERT INTO `adminstructure` (`Form_Id`, `AdminStructure_Instituition`, `AdminStructure_Evaluate`, `AdminStructure_Name`, `AdminStructure_Address`, `AdminStructure_Name_Of_Chief`, `AdminStructure_Administrative`, `AdminStructure_Board`, `AdminStructure_Bodies`, `Emp_Id`, `TimeStamp`, `AssignmentDateTime`, `SubmissionDateTime`, `MainFormID`, `Status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SaqibAkhtar', NULL, '2017-12-31 12:59:00', '2017-12-31 12:59:00', 1, 'Assigned'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SaqibAkhtar', NULL, '2017-12-31 12:59:00', '2017-12-31 12:59:00', 1, 'Assigned'),
(4, 'asdsads', 'sda', 'sadd', 'dasd', 'dasd', 'dasd', 'dasdas', 'qdasd', NULL, NULL, '0000-00-00 00:00:00', NULL, 1, ''),
(5, 'asdsads', 'sda', 'sadd', 'dasd', 'dasd', 'dasd', 'dasdas', 'qdasd', NULL, NULL, '0000-00-00 00:00:00', NULL, 1, ''),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SaqibAkhtar', NULL, '2017-12-31 21:59:00', '2017-12-31 12:59:00', 1, 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `adminstructureb`
--

CREATE TABLE IF NOT EXISTS `adminstructureb` (
  `Name_Degree_Program` varchar(100) DEFAULT NULL,
  `Enrollment` varchar(100) DEFAULT NULL,
  `Full_Time_Faculty_Size` varchar(100) DEFAULT NULL,
  `Faculty_Strength` varchar(100) DEFAULT NULL,
  `MathematicsFt` varchar(100) DEFAULT NULL,
  `MathematicsFte` varchar(100) DEFAULT NULL,
  `Natural_ScienceFt` varchar(100) DEFAULT NULL,
  `Natural_ScienceFte` varchar(100) DEFAULT NULL,
  `HumanitiesFt` varchar(100) DEFAULT NULL,
  `HumanitiesFte` varchar(100) DEFAULT NULL,
  `AdminStructure_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminstructureb`
--

INSERT INTO `adminstructureb` (`Name_Degree_Program`, `Enrollment`, `Full_Time_Faculty_Size`, `Faculty_Strength`, `MathematicsFt`, `MathematicsFte`, `Natural_ScienceFt`, `Natural_ScienceFte`, `HumanitiesFt`, `HumanitiesFte`, `AdminStructure_Form_Id`) VALUES
('dasd', 'dasd', 'dsDAD', 'DASD', 'AS', '', '', '', '', '', NULL),
('dasd', 'dasd', 'dsDAD', 'DASD', 'AS', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `Form_Id` int(10) NOT NULL,
  `AdmissionInstituteName` varchar(50) DEFAULT NULL,
  `ProgramEvalute` varchar(50) DEFAULT NULL,
  `FrequencyAdmission` varchar(500) DEFAULT NULL,
  `NewStdAdmission` varchar(500) DEFAULT NULL,
  `NewInstruments` varchar(500) DEFAULT NULL,
  `AdmissionRqm` varchar(500) DEFAULT NULL,
  `IsOpenMerit` varchar(500) DEFAULT NULL,
  `HowMerit` varchar(500) DEFAULT NULL,
  `StdPerAdmission` varchar(500) DEFAULT NULL,
  `How_Do_You` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(50) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `AssignmentDateTime` datetime NOT NULL,
  `SubmissionDateTime` datetime DEFAULT NULL,
  `MainFormID` int(11) DEFAULT '2',
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`Form_Id`, `AdmissionInstituteName`, `ProgramEvalute`, `FrequencyAdmission`, `NewStdAdmission`, `NewInstruments`, `AdmissionRqm`, `IsOpenMerit`, `HowMerit`, `StdPerAdmission`, `How_Do_You`, `Emp_Id`, `TimeStamp`, `AssignmentDateTime`, `SubmissionDateTime`, `MainFormID`, `Status`) VALUES
(1, 'Usman Institute of Technology', 'Computer Science', '120 Students', 'In Fall Session', 'Computer Science, Math', '50 Percentage', 'Yes', 'Descending order by Intermediate Result', '500', 'By Cross Checking', 'Maheen', '2017-04-11 20:13:31', '2017-12-31 12:59:00', '2017-12-31 12:59:00', 2, 'Submitted'),
(2, 'Usman Institute of Technology', 'BSCS', '120', 'October 2017', 'Math, Physics, Chemistry and Physics marks', '50 Percentage in Intermediate', 'Yes', 'In Descending order by Results', '350', 'By Rechecking', 'Maheen', '2017-04-12 16:36:45', '2017-04-12 01:00:00', '2018-01-01 01:00:00', 2, 'Submitted'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Maheen', '2017-04-12 16:45:59', '2017-04-12 01:00:00', '2018-01-01 01:00:00', 2, 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `Form_Id` int(10) NOT NULL,
  `alumni_InstituteName` varchar(50) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumni_Evaluation` varchar(50) DEFAULT NULL,
  `alumni_institution_y1` varchar(100) DEFAULT NULL,
  `alumni_institution_y2` varchar(100) DEFAULT NULL,
  `alumni_institution_y3` varchar(100) DEFAULT NULL,
  `alumni_institution_y4` varchar(100) DEFAULT NULL,
  `alumni_institution_y5` varchar(100) DEFAULT NULL,
  `alumni_ graduated_1` varchar(100) DEFAULT NULL,
  `alumni_graduated_2` varchar(100) DEFAULT NULL,
  `alumni_graduated_3` varchar(100) DEFAULT NULL,
  `alumni_graduated_4` varchar(100) DEFAULT NULL,
  `alumni_graduated_5` varchar(100) DEFAULT NULL,
  `alumni_facilities` varchar(100) DEFAULT NULL,
  `alumni_Howdoes` varchar(100) DEFAULT NULL,
  `alumni_Summary` varchar(100) DEFAULT NULL,
  `alumni_MSPhD` varchar(100) DEFAULT NULL,
  `alumni_Process` varchar(100) DEFAULT NULL,
  `alumni_Alumni` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `AssignmentDateTime` datetime NOT NULL,
  `SubmissionDateTime` datetime DEFAULT NULL,
  `MainFormID` int(11) DEFAULT '3',
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assigned`
--

CREATE TABLE IF NOT EXISTS `assigned` (
  `AssignmentId` int(11) NOT NULL,
  `AssignDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SubmissionDateTime` datetime DEFAULT NULL,
  `MainFormID` int(11) NOT NULL,
  `Emp_Id` varchar(100) NOT NULL,
  `FormID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned`
--

INSERT INTO `assigned` (`AssignmentId`, `AssignDateTime`, `SubmissionDateTime`, `MainFormID`, `Emp_Id`, `FormID`) VALUES
(8, '2017-04-05 23:59:11', '2017-12-31 12:59:00', 1, 'SaqibAkhtar', 2),
(9, '2017-04-06 02:56:08', '2017-12-31 12:59:00', 1, 'SaqibAkhtar', 3),
(10, '2017-04-06 07:40:15', '2017-12-31 12:59:00', 2, 'Maheen', 1),
(11, '2017-04-12 16:30:19', '2017-12-31 12:59:00', 1, 'SaqibAkhtar', 6),
(12, '2017-04-12 16:34:03', '2018-01-01 01:00:00', 2, 'Maheen', 2),
(13, '2017-04-12 16:45:59', '2018-01-01 01:00:00', 2, 'Maheen', 3);

-- --------------------------------------------------------

--
-- Table structure for table `coursedescription`
--

CREATE TABLE IF NOT EXISTS `coursedescription` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(30) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '4',
  `CourseDescription_InstituteName` varchar(50) DEFAULT NULL,
  `CourseDescription_Evalute` varchar(50) DEFAULT NULL,
  `Course_Code` varchar(20) DEFAULT NULL,
  `Course_Title` varchar(20) DEFAULT NULL,
  `Credit_Hours` varchar(20) DEFAULT NULL,
  `Prerequisites` varchar(100) DEFAULT NULL,
  `Assessments` varchar(100) DEFAULT NULL,
  `Course_Coordinator` varchar(20) DEFAULT NULL,
  `Url` varchar(20) DEFAULT NULL,
  `Current_Catalog` varchar(50) DEFAULT NULL,
  `Textbook` varchar(100) DEFAULT NULL,
  `Reference_Material` varchar(100) DEFAULT NULL,
  `Course_Goals` varchar(100) DEFAULT NULL,
  `Topics_Covered` varchar(100) DEFAULT NULL,
  `Laboratory_Projects` varchar(100) DEFAULT NULL,
  `Programming_Assignments` varchar(100) DEFAULT NULL,
  `Class_Theory` varchar(20) DEFAULT NULL,
  `Class_Problem` varchar(20) DEFAULT NULL,
  `Class_Solution` varchar(20) DEFAULT NULL,
  `Class_Social` varchar(20) DEFAULT NULL,
  `Oral1` varchar(50) DEFAULT NULL,
  `Oral2` varchar(50) DEFAULT NULL,
  `Oral3` varchar(50) DEFAULT NULL,
  `Oral4` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courselog`
--

CREATE TABLE IF NOT EXISTS `courselog` (
  `Form_Id` int(10) NOT NULL,
  `CourseLog_InstituteName` varchar(50) DEFAULT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CourseLog_Evaluation` varchar(50) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courselogb`
--

CREATE TABLE IF NOT EXISTS `courselogb` (
  `CourseLog_Course_Name` varchar(50) DEFAULT NULL,
  `CourseLog_Catalog_Number` varchar(50) DEFAULT NULL,
  `CourseLog_Instructor_Name` varchar(50) DEFAULT NULL,
  `CourseLog_Date` date DEFAULT NULL,
  `CourseLog_Duration` varchar(50) DEFAULT NULL,
  `CourseLog_Topics_Covered` varchar(50) DEFAULT NULL,
  `CourseLog_Evaluation_Instruments` varchar(50) DEFAULT NULL,
  `CourseLog_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursemonitoring`
--

CREATE TABLE IF NOT EXISTS `coursemonitoring` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `coursemonitoring_InstituteName` varchar(50) DEFAULT NULL,
  `coursemonitoring_Evaluation` varchar(50) DEFAULT NULL,
  `Cm_Objective` varchar(50) DEFAULT NULL,
  `Cm_FullCoverage` varchar(50) DEFAULT NULL,
  `Cm_Relevant` varchar(50) DEFAULT NULL,
  `Cm_Assessment` varchar(50) DEFAULT NULL,
  `Cm_Application` varchar(50) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(11) DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courseregistration`
--

CREATE TABLE IF NOT EXISTS `courseregistration` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CR_InstituteName` varchar(30) DEFAULT NULL,
  `CR_Evaluation` varchar(30) DEFAULT NULL,
  `CR_When_is_pre` varchar(50) DEFAULT NULL,
  `CR_How_is_pre` varchar(50) DEFAULT NULL,
  `CR_When_is_late` varchar(50) DEFAULT NULL,
  `CR_What_is_panelty` varchar(50) DEFAULT NULL,
  `CR_When_is_Allowed` varchar(50) DEFAULT NULL,
  `CR_What_is_policy` varchar(50) DEFAULT NULL,
  `CR_What_policy_regarding` varchar(50) DEFAULT NULL,
  `CR_E_Minimum_Maximum` varchar(50) DEFAULT NULL,
  `CR_Process_Ensure` varchar(50) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '7'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cricorecourses`
--

CREATE TABLE IF NOT EXISTS `cricorecourses` (
  `CRICoreCourses_Code` varchar(30) DEFAULT NULL,
  `CRICoreCourses_Title` varchar(30) DEFAULT NULL,
  `CRICoreCourses_Hours` varchar(30) DEFAULT NULL,
  `CRICoreCourses_Prerequisite` varchar(30) DEFAULT NULL,
  `CRI_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crigeneral`
--

CREATE TABLE IF NOT EXISTS `crigeneral` (
  `criGeneral_Code` varchar(30) DEFAULT NULL,
  `criGeneral_Title` varchar(30) DEFAULT NULL,
  `criGeneral_Hours` varchar(30) DEFAULT NULL,
  `criGeneral_Prerequisite` varchar(30) DEFAULT NULL,
  `CRI_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crimajorbased`
--

CREATE TABLE IF NOT EXISTS `crimajorbased` (
  `CRIMajorBased_Code` varchar(30) DEFAULT NULL,
  `CRIMajorBased_Title` varchar(30) DEFAULT NULL,
  `CRIMajorBased_Hours` varchar(30) DEFAULT NULL,
  `CRIMajorBased_Prerequisite` varchar(30) DEFAULT NULL,
  `CRI_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crisupportingsciences`
--

CREATE TABLE IF NOT EXISTS `crisupportingsciences` (
  `criSupportingSciences_Code` varchar(30) DEFAULT NULL,
  `criSupportingSciences_Title` varchar(30) DEFAULT NULL,
  `criSupportingSciences_Hours` varchar(30) DEFAULT NULL,
  `criSupportingSciences_Prerequisite` varchar(30) DEFAULT NULL,
  `CRI_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `criuni`
--

CREATE TABLE IF NOT EXISTS `criuni` (
  `criuni_Code` varchar(30) DEFAULT NULL,
  `criuni_Title` varchar(30) DEFAULT NULL,
  `criuni_Hours` varchar(30) DEFAULT NULL,
  `criuni_Prerequisite` varchar(30) DEFAULT NULL,
  `CRI_Form_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `curriculumrelatedinformation`
--

CREATE TABLE IF NOT EXISTS `curriculumrelatedinformation` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CRI_InstituteName` varchar(30) DEFAULT NULL,
  `CRI_Evaluation` varchar(30) DEFAULT NULL,
  `CRI_Computing_Hours` varchar(30) DEFAULT NULL,
  `CRI_Major_Core` varchar(30) DEFAULT NULL,
  `CRI_Major_Based` varchar(30) DEFAULT NULL,
  `CRI_Supporting` varchar(30) DEFAULT NULL,
  `CRI_General` varchar(30) DEFAULT NULL,
  `CRI_University` varchar(30) DEFAULT NULL,
  `CRI_Total_Credit` varchar(30) DEFAULT NULL,
  `CRI_Cumulative_Credit_HoursA` varchar(30) DEFAULT NULL,
  `CRI_Cumulative_Credit_HoursB` varchar(30) DEFAULT NULL,
  `CRI_Cumulative_Credit_HoursTotal` varchar(30) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '8'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `Emp_Id` varchar(30) NOT NULL,
  `Emp_Name` varchar(30) DEFAULT NULL,
  `Emp_Password` varchar(30) DEFAULT NULL,
  `Emp_Designation` varchar(30) DEFAULT NULL,
  `Emp_Department` varchar(30) DEFAULT NULL,
  `Admin` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Emp_Id`, `Emp_Name`, `Emp_Password`, `Emp_Designation`, `Emp_Department`, `Admin`) VALUES
('Admin', 'Administrator', 'admin', 'Administrator', 'Administrator', 'yes'),
('FauzanSaeed', 'Fauzan Saeed', '12345', 'Assistant Professor', 'Faculty', 'no'),
('Maheen', 'Maheen', '123456', 'Junior', 'Admission', 'no'),
('SaqibAkhtar', 'Saqib Akhtar', '123456', 'Senior', 'Administrator', 'no'),
('SyedFaisal', 'Syed Faisal Ali', '123456', 'Assistant Professor', 'Faculty', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `FormID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Link` varchar(150) NOT NULL,
  `dbName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`FormID`, `Title`, `Department`, `Link`, `dbName`) VALUES
(1, 'Admin Structure', 'Administrator', '2AdminStructure.php', 'adminstructure'),
(2, 'Admission', 'Admission', '3Admission.php', 'admission'),
(3, 'Alumni', 'Administrator', '15Alumni.php', 'alumni'),
(4, 'Course Description', 'Faculty', '5CourseDescription.php', 'coursedescription'),
(5, 'Course Log Template', 'HOD', '6CourseLogTemplate(CLT).php', 'courselog'),
(6, ' Course Monitoring Process', 'HOD', '7CourseMonitoringProcess(CMPF).php', 'coursemonitoring'),
(7, 'Course Registration', 'Academics', '9CourseRegistration.php', 'courseregistration'),
(8, 'Curriculum Related Information', 'Academics', '10CurriculumRelatedInformation.php', 'curriculumrelatedinformation'),
(9, 'Faculty Information', 'HOD', '12FacultyInformationFIF.php', 'facultyinformation'),
(10, 'Field Audit Schedule', 'Administrator', '18Field Audit Schedule.php', 'fieldaudit'),
(11, 'Infrastructure', 'Administrator', '14Infrastructure.php', 'infrastructure'),
(12, 'Financial', 'Finance', '11Financial.php', 'financial'),
(13, 'Grading Policy', 'Academics', '13GradingPolicy.php', 'gradingpolicy'),
(14, 'Program Monitoring ', 'Administrator', '8ProgramMonitoringProcess(PMPF).php', 'programmonitoring'),
(15, 'Request For Evaluation', 'Administrator', '1RequestforEvaluation(RFE).php', 'requestforevaluation'),
(16, 'Student Infomation', 'Academics', '4StudentInformation.php', 'studentinformation');

-- --------------------------------------------------------

--
-- Table structure for table `gradingpolicy`
--

CREATE TABLE IF NOT EXISTS `gradingpolicy` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `GP_InstituteName` varchar(30) DEFAULT NULL,
  `GP_Evaluation` varchar(30) DEFAULT NULL,
  `GP_Grades` varchar(100) DEFAULT NULL,
  `GP_Policy_Grade` varchar(100) DEFAULT NULL,
  `GP_Policy_Insuring` varchar(100) DEFAULT NULL,
  `GP_Any_Policy` varchar(100) DEFAULT NULL,
  `GP_Procedures` varchar(100) DEFAULT NULL,
  `GP_Policy_Ensuring` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '13'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE IF NOT EXISTS `infrastructure` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT NULL,
  `INFRA_InstituteName` varchar(30) DEFAULT NULL,
  `INFRA_Evaluation` varchar(30) DEFAULT NULL,
  `INFRA_Size_Campus` varchar(30) DEFAULT NULL,
  `INFRA_Covered_Area` varchar(30) DEFAULT NULL,
  `INFRA_Sizes_Lecture` varchar(30) DEFAULT NULL,
  `INFRA_Sizes_LectureB` varchar(30) DEFAULT NULL,
  `INFRA_Sizes_LectureC` varchar(30) DEFAULT NULL,
  `INFRA_Instructional` varchar(100) DEFAULT NULL,
  `INFRA_InstructionalB` varchar(100) DEFAULT NULL,
  `INFRA_General` varchar(100) DEFAULT NULL,
  `INFRA_Nature` varchar(100) DEFAULT NULL,
  `INFRA_Specialized` varchar(100) DEFAULT NULL,
  `INFRA_SpecializedB` int(100) DEFAULT NULL,
  `INFRA_Studentyear1` int(10) DEFAULT NULL,
  `INFRA_Studentyear2` int(10) DEFAULT NULL,
  `INFRA_Studentyear3` int(10) DEFAULT NULL,
  `INFRA_Studentyear4` int(10) DEFAULT NULL,
  `INFRA_Studentyear5` int(10) DEFAULT NULL,
  `INFRA_Average` varchar(100) DEFAULT NULL,
  `INFRA_Library_Area` varchar(50) DEFAULT NULL,
  `INFRA_Library_Automated` varchar(50) DEFAULT NULL,
  `INFRA_Total_Books` varchar(50) DEFAULT NULL,
  `INFRA_Total_Computer` varchar(100) DEFAULT NULL,
  `INFRA_Total_Journals` varchar(100) DEFAULT NULL,
  `INFRA_IEEE` varchar(100) DEFAULT NULL,
  `INFRA_ACM` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '11'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programmonitoring`
--

CREATE TABLE IF NOT EXISTS `programmonitoring` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PM_InstituteName` varchar(30) DEFAULT NULL,
  `PM_Evaluation` varchar(30) DEFAULT NULL,
  `PM_Howfar` varchar(50) DEFAULT NULL,
  `PM_Howfrequent` varchar(50) DEFAULT NULL,
  `PM_Summaryof_Problems` varchar(50) DEFAULT NULL,
  `PM_Summaryof_Technologies` varchar(50) DEFAULT NULL,
  `PM_Assessment` varchar(50) DEFAULT NULL,
  `PM_Howfar_Program` varchar(50) DEFAULT NULL,
  `PM_Application` varchar(50) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '14'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestforevaluation`
--

CREATE TABLE IF NOT EXISTS `requestforevaluation` (
  `Form_Id` int(10) NOT NULL,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RfeInstituteName` varchar(50) DEFAULT NULL,
  `RfeEvaluate` varchar(50) DEFAULT NULL,
  `RfeInstituition` varchar(150) DEFAULT NULL,
  `RfeFederal` varchar(20) DEFAULT NULL,
  `RfeProvincial` varchar(50) DEFAULT NULL,
  `RfeDateGranted` varchar(50) DEFAULT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MainFormID` int(10) DEFAULT '15'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestforevaluationbb`
--

CREATE TABLE IF NOT EXISTS `requestforevaluationbb` (
  `Rfeb_Program_Evaluated` varchar(100) DEFAULT NULL,
  `Rfeb_Type` varchar(30) DEFAULT NULL,
  `Rfeb_Degree` varchar(30) DEFAULT NULL,
  `Rfeb_years` varchar(20) DEFAULT NULL,
  `Rfeb_Initial` varchar(30) DEFAULT NULL,
  `RfeForm_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestforevaluationpart2`
--

CREATE TABLE IF NOT EXISTS `requestforevaluationpart2` (
  `RfeForm_Id` int(10) DEFAULT NULL,
  `RfePartB_BOG` varchar(50) DEFAULT NULL,
  `RfePartB_Officer` varchar(50) DEFAULT NULL,
  `RfePartB_All_Departments` int(50) DEFAULT NULL,
  `RfePartB_All_Disciplines` varchar(50) DEFAULT NULL,
  `RfePartB_All_Bachelor` int(50) DEFAULT NULL,
  `RfePartB_All_Graduate` int(50) DEFAULT NULL,
  `RfePartB_Total_Students_Graduated` int(50) DEFAULT NULL,
  `RfePartB_Department_Based_Strength_Faculty` int(50) DEFAULT NULL,
  `RfePartB_Program_Based` varchar(50) DEFAULT NULL,
  `RfePartB_Department_Based_Strength_Students` int(50) DEFAULT NULL,
  `RfePartB_Total_Strength_Supporting` int(11) DEFAULT NULL,
  `RfePartB_Total_Number_Students` int(11) DEFAULT NULL,
  `RfePartB_Labs` int(11) DEFAULT NULL,
  `RfePartB_Based_Labs` int(11) DEFAULT NULL,
  `RfePartB_Books` int(11) DEFAULT NULL,
  `RfePartB_Journals` int(11) DEFAULT NULL,
  `RfePartB_Rooms` int(11) DEFAULT NULL,
  `RfeForm_Total_Strength_Faculty` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestforevaluationpartcc`
--

CREATE TABLE IF NOT EXISTS `requestforevaluationpartcc` (
  `aname` varchar(50) DEFAULT NULL,
  `aaddress` varchar(50) DEFAULT NULL,
  `bcity` varchar(100) DEFAULT NULL,
  `bcode` varchar(100) DEFAULT NULL,
  `bgeneral` varchar(100) DEFAULT NULL,
  `burl` varchar(100) DEFAULT NULL,
  `bname` varchar(100) DEFAULT NULL,
  `btitle` varchar(100) DEFAULT NULL,
  `bphone` varchar(100) DEFAULT NULL,
  `bemail` varchar(100) DEFAULT NULL,
  `bfax` varchar(100) DEFAULT NULL,
  `baddress` varchar(100) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `ctitle` varchar(100) DEFAULT NULL,
  `cphone` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cfax` varchar(100) DEFAULT NULL,
  `caddress` varchar(100) DEFAULT NULL,
  `dliaison` varchar(100) DEFAULT NULL,
  `dtitle` varchar(100) DEFAULT NULL,
  `dphone` varchar(100) DEFAULT NULL,
  `dfax` varchar(100) DEFAULT NULL,
  `daddress` varchar(100) DEFAULT NULL,
  `ename` varchar(100) DEFAULT NULL,
  `etitle` varchar(100) DEFAULT NULL,
  `ephone` varchar(100) DEFAULT NULL,
  `eemail` varchar(100) DEFAULT NULL,
  `efax` varchar(100) DEFAULT NULL,
  `eaddress` varchar(100) DEFAULT NULL,
  `RfeForm_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentinformation`
--

CREATE TABLE IF NOT EXISTS `studentinformation` (
  `Form_Id` int(10) NOT NULL,
  `StudentInformation_Instituition` varchar(100) DEFAULT NULL,
  `StudentInformation_Evaluation` varchar(100) DEFAULT NULL,
  `Average_Matriculationyear1` varchar(30) DEFAULT NULL,
  `Average_Matriculationyear2` varchar(30) DEFAULT NULL,
  `Average_Matriculation3` varchar(30) DEFAULT NULL,
  `Average_Fscyear1` varchar(30) DEFAULT NULL,
  `Average_Fscyear2` varchar(30) DEFAULT NULL,
  `Average_Fscyear3` varchar(30) DEFAULT NULL,
  `Byear1` varchar(30) DEFAULT NULL,
  `Byear2` varchar(30) DEFAULT NULL,
  `Byear3` varchar(30) DEFAULT NULL,
  `Byear4` varchar(30) DEFAULT NULL,
  `Byear15` varchar(30) DEFAULT NULL,
  `Cyear1` varchar(30) DEFAULT NULL,
  `Cyear2` varchar(30) DEFAULT NULL,
  `Cyear3` varchar(30) DEFAULT NULL,
  `Cyear4` varchar(30) DEFAULT NULL,
  `Cyear5` varchar(30) DEFAULT NULL,
  `DOutOfClass` varchar(300) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SubmissionDateTime` date DEFAULT NULL,
  `AssignmentDateTime` date NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Emp_Id` varchar(30) DEFAULT NULL,
  `MainFormID` int(10) DEFAULT '16'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminstructure`
--
ALTER TABLE `adminstructure`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `adminstructureb`
--
ALTER TABLE `adminstructureb`
  ADD KEY `AdminStructure_Form_Id` (`AdminStructure_Form_Id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `assigned`
--
ALTER TABLE `assigned`
  ADD PRIMARY KEY (`AssignmentId`);

--
-- Indexes for table `coursedescription`
--
ALTER TABLE `coursedescription`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `courselog`
--
ALTER TABLE `courselog`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `courselogb`
--
ALTER TABLE `courselogb`
  ADD KEY `CourseLog_Form_Id` (`CourseLog_Form_Id`);

--
-- Indexes for table `coursemonitoring`
--
ALTER TABLE `coursemonitoring`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `courseregistration`
--
ALTER TABLE `courseregistration`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `cricorecourses`
--
ALTER TABLE `cricorecourses`
  ADD KEY `CRI_Form_Id` (`CRI_Form_Id`);

--
-- Indexes for table `crigeneral`
--
ALTER TABLE `crigeneral`
  ADD KEY `CRI_Form_Id` (`CRI_Form_Id`);

--
-- Indexes for table `crimajorbased`
--
ALTER TABLE `crimajorbased`
  ADD KEY `CRI_Form_Id` (`CRI_Form_Id`);

--
-- Indexes for table `crisupportingsciences`
--
ALTER TABLE `crisupportingsciences`
  ADD KEY `CRI_Form_Id` (`CRI_Form_Id`);

--
-- Indexes for table `criuni`
--
ALTER TABLE `criuni`
  ADD KEY `CRI_Form_Id` (`CRI_Form_Id`);

--
-- Indexes for table `curriculumrelatedinformation`
--
ALTER TABLE `curriculumrelatedinformation`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`Emp_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`FormID`);

--
-- Indexes for table `gradingpolicy`
--
ALTER TABLE `gradingpolicy`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `programmonitoring`
--
ALTER TABLE `programmonitoring`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- Indexes for table `requestforevaluation`
--
ALTER TABLE `requestforevaluation`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`),
  ADD KEY `Emp_Id_2` (`Emp_Id`);

--
-- Indexes for table `requestforevaluationbb`
--
ALTER TABLE `requestforevaluationbb`
  ADD KEY `RfeForm_Id` (`RfeForm_Id`);

--
-- Indexes for table `requestforevaluationpart2`
--
ALTER TABLE `requestforevaluationpart2`
  ADD KEY `RfeForm_Id` (`RfeForm_Id`);

--
-- Indexes for table `requestforevaluationpartcc`
--
ALTER TABLE `requestforevaluationpartcc`
  ADD KEY `RfeForm_Id` (`RfeForm_Id`);

--
-- Indexes for table `studentinformation`
--
ALTER TABLE `studentinformation`
  ADD PRIMARY KEY (`Form_Id`),
  ADD KEY `Emp_Id` (`Emp_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminstructure`
--
ALTER TABLE `adminstructure`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assigned`
--
ALTER TABLE `assigned`
  MODIFY `AssignmentId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `coursedescription`
--
ALTER TABLE `coursedescription`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courselog`
--
ALTER TABLE `courselog`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coursemonitoring`
--
ALTER TABLE `coursemonitoring`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courseregistration`
--
ALTER TABLE `courseregistration`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `curriculumrelatedinformation`
--
ALTER TABLE `curriculumrelatedinformation`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `FormID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programmonitoring`
--
ALTER TABLE `programmonitoring`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requestforevaluation`
--
ALTER TABLE `requestforevaluation`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentinformation`
--
ALTER TABLE `studentinformation`
  MODIFY `Form_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminstructure`
--
ALTER TABLE `adminstructure`
  ADD CONSTRAINT `adminstructure_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `adminstructureb`
--
ALTER TABLE `adminstructureb`
  ADD CONSTRAINT `adminstructureb_ibfk_1` FOREIGN KEY (`AdminStructure_Form_Id`) REFERENCES `adminstructure` (`Form_Id`);

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `coursedescription`
--
ALTER TABLE `coursedescription`
  ADD CONSTRAINT `coursedescription_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `courselog`
--
ALTER TABLE `courselog`
  ADD CONSTRAINT `courselog_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `courselogb`
--
ALTER TABLE `courselogb`
  ADD CONSTRAINT `courselogb_ibfk_1` FOREIGN KEY (`CourseLog_Form_Id`) REFERENCES `courselog` (`Form_Id`);

--
-- Constraints for table `coursemonitoring`
--
ALTER TABLE `coursemonitoring`
  ADD CONSTRAINT `coursemonitoring_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `courseregistration`
--
ALTER TABLE `courseregistration`
  ADD CONSTRAINT `courseregistration_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `cricorecourses`
--
ALTER TABLE `cricorecourses`
  ADD CONSTRAINT `cricorecourses_ibfk_1` FOREIGN KEY (`CRI_Form_Id`) REFERENCES `curriculumrelatedinformation` (`Form_Id`);

--
-- Constraints for table `crigeneral`
--
ALTER TABLE `crigeneral`
  ADD CONSTRAINT `crigeneral_ibfk_1` FOREIGN KEY (`CRI_Form_Id`) REFERENCES `curriculumrelatedinformation` (`Form_Id`);

--
-- Constraints for table `crimajorbased`
--
ALTER TABLE `crimajorbased`
  ADD CONSTRAINT `crimajorbased_ibfk_1` FOREIGN KEY (`CRI_Form_Id`) REFERENCES `curriculumrelatedinformation` (`Form_Id`);

--
-- Constraints for table `crisupportingsciences`
--
ALTER TABLE `crisupportingsciences`
  ADD CONSTRAINT `crisupportingsciences_ibfk_1` FOREIGN KEY (`CRI_Form_Id`) REFERENCES `curriculumrelatedinformation` (`Form_Id`);

--
-- Constraints for table `criuni`
--
ALTER TABLE `criuni`
  ADD CONSTRAINT `criuni_ibfk_1` FOREIGN KEY (`CRI_Form_Id`) REFERENCES `curriculumrelatedinformation` (`Form_Id`);

--
-- Constraints for table `curriculumrelatedinformation`
--
ALTER TABLE `curriculumrelatedinformation`
  ADD CONSTRAINT `curriculumrelatedinformation_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `gradingpolicy`
--
ALTER TABLE `gradingpolicy`
  ADD CONSTRAINT `gradingpolicy_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD CONSTRAINT `infrastructure_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `programmonitoring`
--
ALTER TABLE `programmonitoring`
  ADD CONSTRAINT `programmonitoring_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `requestforevaluation`
--
ALTER TABLE `requestforevaluation`
  ADD CONSTRAINT `requestforevaluation_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

--
-- Constraints for table `requestforevaluationbb`
--
ALTER TABLE `requestforevaluationbb`
  ADD CONSTRAINT `requestforevaluationbb_ibfk_1` FOREIGN KEY (`RfeForm_Id`) REFERENCES `requestforevaluation` (`Form_Id`);

--
-- Constraints for table `requestforevaluationpart2`
--
ALTER TABLE `requestforevaluationpart2`
  ADD CONSTRAINT `requestforevaluationpart2_ibfk_1` FOREIGN KEY (`RfeForm_Id`) REFERENCES `requestforevaluationbb` (`RfeForm_Id`);

--
-- Constraints for table `requestforevaluationpartcc`
--
ALTER TABLE `requestforevaluationpartcc`
  ADD CONSTRAINT `requestforevaluationpartcc_ibfk_1` FOREIGN KEY (`RfeForm_Id`) REFERENCES `requestforevaluation` (`Form_Id`);

--
-- Constraints for table `studentinformation`
--
ALTER TABLE `studentinformation`
  ADD CONSTRAINT `studentinformation_ibfk_1` FOREIGN KEY (`Emp_Id`) REFERENCES `emp` (`Emp_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
