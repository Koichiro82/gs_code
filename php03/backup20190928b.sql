-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2019 年 9 月 28 日 15:41
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, '増田', 'test@gmail.co.jp', '無いよ', '2019-09-21 16:16:01'),
(2, '福政', 'test3@gmail.co.jp', '無いよ', '2019-09-21 16:20:39'),
(3, '柴田', 'test4@gmail.co.jp', '無いよ', '2019-09-21 16:20:39'),
(4, '後藤', 'test03@gmail.co.jp', '無いよ', '2019-09-21 16:20:39'),
(5, '川辺', 'test30@gmail.co.jp', '無いよ', '2019-09-21 16:20:39'),
(6, 'フクマサ ユウスケ', 'test2@test.co.jp', '0', '2019-09-21 17:40:10'),
(8, 'ゴトウ リョウタ', 'test3@test.co.jp', '0', '2019-09-21 17:41:20'),
(9, 'シバタ ユウスケ', 'test30@test.com', '0', '2019-09-21 18:45:24'),
(10, '川辺 悠司', 'test35@test.com', '登録テスト4回目', '2019-09-21 18:53:14'),
(11, 'Masuda Koichiro', 'kouichiro@test.com', '登録テスト5回目', '2019-09-21 18:55:46');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
