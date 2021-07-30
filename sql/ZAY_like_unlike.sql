-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-07-30 05:31
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ZAY_like_unlike`
--

CREATE TABLE `ZAY_like_unlike` (
  `ZAY_like_unlike_idx` int(11) NOT NULL COMMENT '고유번호',
  `ZAY_like_unlike_userid` int(11) NOT NULL COMMENT '좋아요 작성자',
  `ZAY_like_unlike_postid` int(11) NOT NULL COMMENT '좋아요 대상 상품 번호',
  `ZAY_like_unlike_type` int(2) NOT NULL COMMENT '좋아요 타입'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `ZAY_like_unlike`
--

INSERT INTO `ZAY_like_unlike` (`ZAY_like_unlike_idx`, `ZAY_like_unlike_userid`, `ZAY_like_unlike_postid`, `ZAY_like_unlike_type`) VALUES
(1, 1, 14, 1),
(7, 4, 14, 1),
(8, 5, 14, 1),
(9, 6, 14, 0),
(10, 1, 15, 0),
(11, 1, 13, 0),
(12, 4, 15, 1),
(13, 4, 13, 1),
(14, 4, 11, 1),
(15, 4, 8, 1),
(16, 4, 7, 1),
(17, 4, 12, 1),
(18, 4, 10, 1),
(19, 4, 9, 0),
(20, 4, 4, 1),
(21, 1, 12, 0),
(22, 1, 11, 1),
(23, 1, 10, 1),
(24, 1, 9, 0),
(25, 1, 8, 1),
(26, 1, 7, 0),
(27, 1, 6, 1),
(28, 5, 13, 1),
(29, 5, 12, 0),
(30, 5, 11, 0),
(31, 5, 10, 1),
(32, 5, 9, 1),
(33, 5, 8, 1),
(34, 5, 7, 0),
(35, 5, 5, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ZAY_like_unlike`
--
ALTER TABLE `ZAY_like_unlike`
  ADD PRIMARY KEY (`ZAY_like_unlike_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `ZAY_like_unlike`
--
ALTER TABLE `ZAY_like_unlike`
  MODIFY `ZAY_like_unlike_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
