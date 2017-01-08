-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 05:06 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `empregasantos`
--

CREATE DATABASE `empregasantos`;

--
-- Criar usuário 
--

CREATE USER 'domeadmin'@'localhost' IDENTIFIED BY 'eKcGZr59zAa2BEWU';
GRANT SELECT, INSERT, UPDATE, DELETE ON `empregasantos`.* TO 'domeadmin'@'localhost';

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id`               int(11) NOT NULL AUTO_INCREMENT,
  `nome`             varchar(40) NOT NULL,
  `senha`            varchar(10) NOT NULL,
  `empresa`          varchar(40) NOT NULL,
  `email`            varchar(30) NOT NULL,
  `emailRecuperacao` varchar(30) NOT NULL,
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE `vagas` (
  `id`               int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa`      varchar(40) NOT NULL,
  `email`            varchar(30) NOT NULL,
  `cidade`           varchar(20) NOT NULL,
  `vaga`             varchar(20) NOT NULL,
  `area`             varchar(20) NOT NULL,
  `nomeContato`      varchar(40) NOT NULL,
  `emailContato`     varchar(30) NOT NULL,
  `descricao`        varchar(255) NOT NULL,
  `dataVaga`         datetime default current_timestamp(),
  
  PRIMARY KEY (`id`,`dataVaga`,`vaga`,`area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
