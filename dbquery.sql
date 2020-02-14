-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2020 at 04:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `myregdb`
--
CREATE DATABASE IF NOT EXISTS `myregdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myregdb`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `feb`;
CREATE TABLE IF NOT EXISTS `feb` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `march`;
CREATE TABLE IF NOT EXISTS `march` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `april`;
CREATE TABLE IF NOT EXISTS `april` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `may`;
CREATE TABLE IF NOT EXISTS `may` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `june`;
CREATE TABLE IF NOT EXISTS `june` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `july`;
CREATE TABLE IF NOT EXISTS `july` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `august`;
CREATE TABLE IF NOT EXISTS `august` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `sept`;
CREATE TABLE IF NOT EXISTS `sept` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `oct`;
CREATE TABLE IF NOT EXISTS `oct` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `nov`;
CREATE TABLE IF NOT EXISTS `nov` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dec`;
CREATE TABLE IF NOT EXISTS `dec` (
  `email` varchar(150) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `practice_licence` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `speciality` varchar(150) NOT NULL,
  `teller_no` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `reg_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;