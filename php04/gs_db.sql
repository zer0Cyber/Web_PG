-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2020 年 6 月 05 日 08:59
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `age`, `naiyou`, `indate`) VALUES
(1, 'test1', 'test1@test.jp', 30, 'test', '2020-06-04 11:04:59'),
(2, 'test2', 'test2@test.jp', 40, 'test', '2020-06-04 11:11:23'),
(3, 'test3', 'test3@test.jp', 50, 'test', '2020-06-04 11:16:22'),
(4, 'test4', 'test4@test.jp', 10, 'test', '2020-06-04 11:16:48'),
(5, 'test5', 'test5@test.jp', 20, 'test', '2020-06-04 11:17:18'),
(6, 'test6', 'test6@test.jp', 30, 'test', '2020-06-04 11:17:33'),
(7, 'test7', 'test7@test.jp', 40, 'test', '2020-06-04 11:17:44'),
(8, 'test8', 'test8@test.jp', 50, 'test', '2020-06-04 11:17:55'),
(9, 'test9', 'test9@test.jp', 10, 'test', '2020-06-04 11:18:06'),
(10, 'test10', 'test10@test.jp', 20, 'test', '2020-06-04 11:18:17');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;