-- phpMyAdmin SQL Dump
-- Database: `student_management`

CREATE DATABASE IF NOT EXISTS `student_management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `student_management`;

-- Table structure for table `students`

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `students`
INSERT INTO `students` (`student_id`, `full_name`, `course`, `year`, `status`, `email`, `phone`) VALUES
('S1001', 'James Wilson', 'Computer Science', '3rd', 'Active', 'james.wilson@university.edu', '555-0101'),
('S1002', 'Sarah Miller', 'Business Admin', '2nd', 'Probation', 'sarah.miller@university.edu', '555-0102');
