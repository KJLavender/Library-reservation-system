-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-06-16 11:50:26
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bbb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `sid` varchar(8) NOT NULL,
  `seatnumber` varchar(8) NOT NULL,
  `day` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`sid`, `seatnumber`, `day`) VALUES
('D0813188', '1', '6/16'),
('D0813188', '1', '6/17'),
('D0813188', '3', '6/18'),
('D0813188', '1', '6/19'),
('D0886274', '2', '6/16');

-- --------------------------------------------------------

--
-- 資料表結構 `counter`
--

CREATE TABLE `counter` (
  `counterid` varchar(8) NOT NULL,
  `counterpassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `counter`
--

INSERT INTO `counter` (`counterid`, `counterpassword`) VALUES
('megalony', 'sid');

-- --------------------------------------------------------

--
-- 資料表結構 `seat`
--

CREATE TABLE `seat` (
  `seatnumber` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `seat`
--

INSERT INTO `seat` (`seatnumber`) VALUES
('1'),
('2'),
('3'),
('4'),
('5'),
('6'),
('7'),
('8'),
('9'),
('10'),
('11');

-- --------------------------------------------------------

--
-- 資料表結構 `student`
--

CREATE TABLE `student` (
  `sid` varchar(8) NOT NULL,
  `sname` varchar(8) NOT NULL,
  `point` varchar(8) NOT NULL,
  `pw` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `student`
--

INSERT INTO `student` (`sid`, `sname`, `point`, `pw`) VALUES
('D0843969', '陳玟廷', '0', '9'),
('D0886274', '許恩綺', '3', '4'),
('D0813188', '賴靖嫺', '0', '8'),
('D0976935', '楊凱捷', '3', '5'),
('D0975267', '黃楷鈞', '3', '9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
