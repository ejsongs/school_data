-- phpMyAdmin SQL Dump
-- version 4.6.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 17-01-19 17:21
-- 서버 버전: 5.5.53-MariaDB
-- PHP 버전: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sdhsdb`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `write_date` varchar(100) NOT NULL,
  `qut_count` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `login_id` varchar(30) NOT NULL,
  `login_pw` varchar(30) NOT NULL,
  `qut_text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `title`, `writer`, `write_date`, `qut_count`, `pw`, `login_id`, `login_pw`, `qut_text`) VALUES
(1, '서울디지텍고등학교 가고싶습니다', '규현', '', '100', '0329', '', '', '디지텍고 고등학교에 가고싶습니다. '),
(2, '서울디지텍고등학교에 입학하려면..', '하라랄', '', '50', '0000', '', '', '서울디지텍고등학교에 입학하려면 내신이 몇퍼센트가 되어야하는건가요?'),
(3, '가는길', '루트', '', '6', '0000', '', '', '서울디지텍고등학교 가는길이 엄청 험하던데 학교를 옮기실 생각은 없으신가욥?'),
(4, '내가 디지텍의 짱이 될것이야', 'kms', '', '200', '1751', '', '', '제가 곧 서울디지텍고등학교를 접수하겠습니다. '),
(5, '급식충', '곧급식', '', '', '1111', '', '', '이 학교의 급식 양, 맛, 퀄리티 어떠한가요?'),
(20, 'title', 'writer', '', '', '', '', '', ''),
(21, 'asfd', 'afsd', '', '', '', '', '', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
