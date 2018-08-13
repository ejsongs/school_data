-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 17-04-06 04:26
-- 서버 버전: 10.1.21-MariaDB
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `board`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `recommend`
--

CREATE TABLE `recommend` (
  `idx` int(11) NOT NULL,
  `category` text NOT NULL,
  `count` int(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `recommend`
--

INSERT INTO `recommend` (`idx`, `category`, `count`, `title`, `content`) VALUES
(1, 'place', 0, '안뇽', '임러ㅣㅇ'),
(2, '', 0, 'ㅁㄹ', 'ㄻㄴㅇ'),
(3, 'etc', 0, '52', '2132'),
(4, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(5, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(6, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(7, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(8, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(9, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(10, 'food', 0, '장소/위치/제목을 작성해주세요.', ''),
(11, 'food', 0, '장소/위치/제목을 작성해주세요.', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `recommend`
--
ALTER TABLE `recommend`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
