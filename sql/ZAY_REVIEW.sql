-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-07-19 03:33
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
-- 테이블 구조 `ZAY_REVIEW`
--

CREATE TABLE `ZAY_REVIEW` (
  `ZAY_pro_rev_idx` int(11) NOT NULL COMMENT '상품평 고유번호',
  `ZAY_pro_rev_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품평 작성자',
  `ZAY_pro_rev_con_idx` int(11) NOT NULL COMMENT '상품평 대상 상품 번호',
  `ZAY_pro_rev_txt` text CHARACTER SET utf8 NOT NULL COMMENT '상품평 내용',
  `ZAY_pro_rev_reg` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '상품평 입력일'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ZAY_REVIEW`
--
ALTER TABLE `ZAY_REVIEW`
  ADD PRIMARY KEY (`ZAY_pro_rev_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `ZAY_REVIEW`
--
ALTER TABLE `ZAY_REVIEW`
  MODIFY `ZAY_pro_rev_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '상품평 고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
