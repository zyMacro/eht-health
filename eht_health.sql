-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2016 at 03:57 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eht-health`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

CREATE TABLE `info_table` (
  `username` varchar(10) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_table`
--
ALTER TABLE `info_table`
  ADD PRIMARY KEY (`username`);
