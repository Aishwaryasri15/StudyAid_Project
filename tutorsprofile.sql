-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2020 at 06:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u325434902_studyaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutorsprofile`
--

CREATE TABLE `tutorsprofile` (
  `id` int(120) NOT NULL,
  `tutor_name` text NOT NULL,
  `tutor_phonenumber` varchar(100) NOT NULL,
  `tutor_qualification` varchar(200) NOT NULL,
  `subjects` varchar(900) NOT NULL,
  `email` text NOT NULL,
  `sitelink` varchar(555) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(555) NOT NULL,
  `city` varchar(150) NOT NULL,
  `pincode` int(15) NOT NULL,
  `bio` varchar(555) NOT NULL,
  `propic_link` varchar(5555) NOT NULL,
  `password` varchar(555) NOT NULL,
  `Institution` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorsprofile`
--

INSERT INTO `tutorsprofile` (`id`, `tutor_name`, `tutor_phonenumber`, `tutor_qualification`, `subjects`, `email`, `sitelink`, `gender`, `address`, `city`, `pincode`, `bio`, `propic_link`, `password`, `Institution`) VALUES
(49010, 'Ankan shill', '8575643722', 'M.Sc on applied physics', 'Physics', 'imankans1996@gmail.com', '', 'male', 'Agartala', 'Agartala', 799001, 'I solve each & every doubt of my students individually.I teach full science group for 8-10 th standard & Physics for 11th & 12th students of all boards(TBSE,CBSE,ICSE)', 'iamankans1996@gmail.com.jpeg', '0ecf78c35685601029cc4fc47584feda', ''),
(49011, 'Joydeep Sutradhar', '8787329020', 'Graduate ', 'Yoga & bengali, english, SST(Class 6 to 9).', 'joydeepsutradhar94@gmail.com', '', 'male', 'Abhoynagar(near A.O.C.),Agartala,West Tripura', 'Agartala', 799005, 'Knowledge is everywhere. Calm your mind and move forward to try to learn as much as possible at your best level.', 'joydeepsutradhar94@gmail.com.jpeg', '2fe6d82bf1d70e3f915ff9d36aa533b3', ''),
(49012, 'Sagardip Das', '8575643722', 'BA - BEd in English', 'English', 'sagardip@gmail.com', '', 'male', 'Agartala', 'Agartala', 799001, 'Will always give my 100% for the betterment of my students', 'sagardip@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49014, 'Debanjan Paul', '8837304502', 'M. Sc in Physics', 'Physics (11-12 all Board, NEET, JEE MAIN). Physics and Chemistry ( Class 9 & 10) ', 'pauldebanjan25@gmail.com', '', 'male', 'Kalyani,  Dhaleswar, Agartala', 'Agartala', 799001, ' Debanjan Paul( B.Sc (1st Class), IIT JAM , M.Sc ( 1st Class))\r\nI am deeply passionate for Physics. I will help to grow the basics in your mind.', 'pauldebanjan25@gmail.com.jpeg', 'bdc973771ee5b91c6da15d3ca0facf4f', 'Tripura University'),
(49015, 'Himanshu Dwivedi', '9336108729', 'B.Tech', 'Art & Crsft', 'himrd95@gmail.com', 'https://instagram.com/mr_artist_hrd?igshid=lq0n8y6ftsly', 'male', 'Noida, Uttarpradesh', 'Varanasi', 221005, 'A meticulous sketch artist myself,blessed with lots of love from people all over India.I shall try to guide my students with every details of painting', 'himrd95@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49016, 'sanketh', '7588425170', 'mtech', 'ADS', 'sanketdesuwar@gmail.com', 'https://nofrdz.com/', 'male', 'unique acadamy building', 'Gadchiroli', 442605, 'nothing to specify', 'sanketdesuwar@gmail.com.jpeg', '81c6fa745434534c4a9633ad8c08506a', 'gnitc'),
(49017, 'Sayan Saha', '8794571095', 'MSc.(Chemistry) ,Bsc.', 'Chemistry', 'sayansah84@gmail.com', '', 'male', 'Kaylar Math,R.K.Pur,Udaipur,Gomati,Tripura', 'Udaipur', 799114, 'A young & passionate teacher who works on strengthening basics of my students.Myself at a constant learning process even wants my students to learn new topics constantly', 'sayansah84@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49018, 'Dhilon Debnath', '7005503217', 'Persuing MSc. Chemical Science from NIT(Agartala),BSc.(Tripura University)', 'Chemistry', 'dhilondebnath.co.in@gmail.com', '', 'male', 'Agartala', 'Agartala', 799001, 'I try my best to clear every concept of my student with full enthusiasm', 'dhilondebnath.co.in@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49019, 'Ankit Tiwary', '9507714022', 'Pursuing Btech', 'Mathematicas,Physics, Chemistry', 'tiwary158@gmail.com', 'https://youtu.be/CS1w5J38woc', 'male', 'Hazaribagh, Jharkhand', 'Hazaribagh', 825301, 'A very passionate teacher, experienced in guiding students to crack IIT JEE.He is a very popular  mentor among students of 11th & 12 th standards', 'tiwary158@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49020, 'Supratim Roy', '9774172711', 'Post Graduate, Engineering Physics(Gold Medalist)', 'Mathematics (8th -12th),Physics (9th - 12th)', 'supratimroy01@gmail.com', 'https://www.youtube.com/channel/UCPRyT0rJVdEhpEUnPhbOPLA', 'male', 'Paradise Chowmuhani, Agartala', 'Agartala', 799001, 'He concentrates more on motivating & inspiring students then mere pushing the subject in their brain.He has an excellent academic record himself', 'supratimroy01@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49021, 'Mr.BISHAL ACHARJEE', '8837403075', 'M.Sc (Physics), B.Ed, CTET QUALIFIED.', 'PHYSICS', 'bishalacharjee8@gmail.com', 'https://www.youtube.com/channel/UCPRyT0rJVdEhpEUnPhbOPLA', 'male', 'Bhati Abhoy Nagar,Agartala, Tripura west.', 'Agartala', 799001, 'Teaching experience-5 years.\r\nConcrete knowledge over subject,Gives basic concept (along with demonstration) and develop various ideas in mind of students, Theory along with Numericals,Interesting and easy way of understanding.\r\nCan speak-English, Hindi & Bengali.\r\n', 'bishalacharjee8@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49022, 'Malay Jyoti Pal', '9862773967', 'M.Sc zoology', 'Biology', 'malay.jyoti.pal@gmail.com', '', 'male', 'Ganarajchowmuhani, Agartala', 'Agartala', 799001, 'Getting prepared for NEET with concept', 'malay.jyoti.pal@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49023, 'Rupam Roy', '9865078652', 'M.Sc In Physics (From Tripura University) ', 'Science & Mathematics for class 8-10 and Physics for class 11-12 along with NEET&TBJEE', 'rupamroy727@gmail.com', '', 'male', 'Khowai', 'Khowai', 799202, 'A passionate teacher....guide each & every student individually', 'rupamroy2396@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49024, 'Vikrant Debbarma ', '8731841460', 'BCA', 'Maths, chemistry, physics, english grammar', 'vikrantdebbarma94@gmail.com', 'https://www.facebook.com/101805658277242/posts/105062901284851/?app=fbl', 'male', 'Golaghati', 'Agartala', 799102, 'I have been running coaching classes since 2014. I am well experienced in science group.', 'vikrantdebbarma94@gmail.com.jpeg', '9a418196a6b10014c4aa3f41c8c4f5fa', 'Jevi Academy'),
(49025, 'Arindam Nath ', '8837292747', 'I cracked State Level NMMS Exam and District Level Mathematics Olympiad.Now I am graduating in BSc-BEd(MATHEMATICS)', 'From class-1 to 5(All subjects);From class-6 to 8(Science and Mathematics); Class- 9 & 10(Mathematics)', 'arijohn1999@gmail.com', '', 'male', 'Badharghat,Agartala,Tripura,India', 'Agartala', 799001, 'I love to teach my students not as their teacher but as their big brother.', 'arijohn1999@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49026, 'Soumitra Debbarma', '8787376223', 'MA(History),NET,SLET,Ph.D(Pursuing)', 'History', 'soumitradebbarma3@gmail.com', '', 'male', 'Suryamaninagar,Tripura University,Agartala', 'Agartala', 799022, 'I guide students from Class 11th to M.A. & believe in making History a beautiful journey for my students', 'soumitradebbarma3@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49028, 'Dr. Saikat Kar', '9774308790', 'MBBS,Former research intern in Max Planck Institute of Molecular cell biology & Genetics', 'Biology', 'k.saikat@ymail.com', '', 'male', 'Krishnanagar,Thakurpalli Road,Opposite TRTC', 'Agartala', 799001, 'Advanced Biology Guidance for NEET(UG), AIIMS(UG), JIPMER (UG), SAT Subject Test, KVPY, MCAT and OLYMPIADS by a doctor (AIPMT state top \r\n', 'k.saikat@ymail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', 'Dr S.K.Sir’s biology'),
(49029, 'Farukul Islam', '9615416242', 'BSc.,MSc.,BEd.', 'Biology', 'ifarukul@gmail.com', '', 'male', 'South Ramnagar,Agartala', 'Agartala', 799001, 'I emphasis on clearing concepts of my students.Both Bengali & English Medium students can be mentored by me', 'ifarukul@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49030, 'Nabanita Chakraborty', '7005827833', 'M.sc in chemistry', 'Chemistry', 'nitanaba319@gmail.com', '', 'female', 'A.D.Nagar', 'Agartala', 799003, 'Chemistry is all about concepts. Feel free to get the concepts from me.', 'nitanaba319@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49031, 'Anusha Banerjee', '8902387421', 'M.Sc in Zoology, qualified CSIR-NET LS, GATE-XL', 'Biology,Painting', 'anushabanerjee01@gmail.com', 'https://www.instagram.com/audacious.artist/', 'female', '', 'Serampore, Hooghly, West Bengal', 712201, 'unlock the world of biology with me and clear your concepts. Also, shake your creativity while painting with me and kick out all the stress of the day.', 'anushabanerjee01@gmail.com.jpeg', '13fda0469aad9ead46f53129f8fc6111', ''),
(49032, 'Subhrajit Majumder', '6909695670', 'M.Sc', 'Physics', 'sjit96here@gmail.com', '', 'male', 'A D Nagar 6, Agartala', 'Agartala', 799003, 'If you like to grow your concepts, then I\'m here\r\n', 'sjit96here@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49033, 'Sargadip Das', '9774591020', 'BA-BEd in english', 'All subjects upto class 8 and class 9 and 10 all subjects except mathematics', 'sargadip@gmail.com', '', 'male', 'Babulchowmuhuni , suryamani nagar, Agartala ,tripura west', 'Agartala', 977022, 'Will always give my 100% for the betterment of my students', 'sargadip@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49034, 'Basudeb chakraborty ', '8414955824', 'Msc in human physiology (pursuring) ', 'Biology ', 'basudebchakraborty1997@gmail.com', '', 'male', 'Hapania(cold store para), agartala, tripura west. Pin-799130', 'AGARTALA', 799130, 'My self basudeb chakraborty a enthusiastic learner and motivator . graduated from Ramthakur college in biological sciences with first class, and pursuing msc in Tripura University. Teaching is just like a new life to me, it gives me more knowledge and help me to better understand the society specially students\r\n', 'basudebchakraborty1997@gmail.com.jpeg', '98fec06b4f406400c829916da085f9cf', 'Mutation'),
(49035, 'Suman Nath', '9051589701', 'Graduate in Sanskrit..B.ed holder', 'Primary class Bengali, Sanskrit', 'suman30nath@gmail.com', '', 'male', 'Kaulikura,Sonamukhi, Kailasahar,Unakoti', 'Kailasahar', 799280, 'I am graduate in Sanskrit, can teach all arts subject in all primary class(Nursery to class 8 in Bengali medium)(Nursery to class V in English medium)', 'suman30nath@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49036, 'Ankita Kar ', '7005343437', 'B. E. Electronics and Communications ', 'Realistic drawing ', 'crayons.n.colours2017@gmail.com', 'https://youtu.be/fZEtkQeMX5g', 'female', 'Munnekollal, Kundanahalli ', 'Bangalore', 560037, 'I identify myself as a passionate artist although pursuing a career in IT. I have trained myself in arts for a very long time. It will give me an immense pleasure to give out the knowledge I have gathered over the time for myself to the ones who are in need of the guidance to excel in the field of arts ', 'crayons.n.colours2017@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49037, 'Bapi Debnath', '8787608185', 'MSc. Mathematics (Tripura University)', 'Mathematics', 'bapidebnath1729@gmail.com', '', 'male', 'Agartala', 'Agartala', 799001, 'A teacher with 6 years + experience providing tuition in batches & one to one basis.\r\nCourse list -\r\n•JEE mains + Advanced\r\n•TBSE,CBSE,ICSE ( 11-12th Bengali & English medium)\r\n•BSc Hons & Pass(All BSc. Entrances)\r\n•All semesters Diploma Students (Only maths)', 'bapidebnath1729@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', 'Math Academy'),
(49038, 'Subhamoy Thakura', '8535879434', 'A national level painter', 'Painting', 'shubhamoyartworks@gmail.com', '', 'male', 'Saradapally,Sonamukhi,Bankura,West Bengal', 'Sonamukhi,Bankura', 722207, 'A National level painter myself,is known in Instagram community for creative paintings.I try to enhance the creative notion of my students', 'shubhamoyartworks@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49039, 'Susmita Chakraborty', '7085758292', 'B.sc honours ', 'Physics, Chemistry, Biology , MathmaticsEnglish and Bengali grammar crash course', 'susmitanh1998@gmail.com', '', 'female', 'Chandrapur ,Near ISBT', 'Agartala', 799001, 'I can ensure that under my supervision students can understand each and every point clearly, through my crash courses students can implement there knowledge anywhere and be exam ready!!\r\n10 days free trial for all 👍', 'susmitanh1998@gmail.com.jpeg', '79480b6316af0fc3756e04e46003edd3', ''),
(49040, 'Ankur Nath', '9402594629', 'B.Tech M.Tech Dual Engineering Physics.', 'Physics', 'ankurnath94@gmail.com', '', 'male', 'Dhakeshwar Road no.12, Agartala', 'Agartala', 799001, 'I can prepare my students for IITJEE,NEET,KVPY,NTSE , with all basics cleared for Board Examinations', 'ankurnath94@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49041, 'Subinay Debnath', '8257883369', 'BSc (Physics Hons.), pursuing BEd', 'Physics(11,12) ; Physics,Chemistry,Maths(9 - 12)', 'subinayd805@gmail.com', '', 'male', 'East Badharghat,Amtali', 'Agartala', 799003, 'I try my best to make a friendly relation with my students & devote my utmost to nurture the best hidden within them . So,far I m all parents are satisfied 8257883369 my teaching😊', 'subinayd805@gmail.com.jpeg', '71eecbac3053178eb4798b1a364f81b9', ''),
(49042, 'Sujan shil', '8837340396', 'B.sc hons (physics)', 'Physics', 'sujanshil281@gmail.com', '', 'male', ' Badharghat, matripoli ', 'Agartala', 799003, '4 years experience in this field .', 'sujanshil281@gmail.com.jpeg', '9d306cdef95f36aec57dfb6a9c8088e0', 'PHYSICS UNIVERS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutorsprofile`
--
ALTER TABLE `tutorsprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutorsprofile`
--
ALTER TABLE `tutorsprofile`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49043;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
