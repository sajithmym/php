CREATE database `smart_mobile_shop`;

use `smart_mobile_shop`;

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
);

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(0, 'SaJiTh', 'sajithcool@gmail.com', '%^&*#@!))%)'),
(1, 'Admin', 'admin@gmail.com', '%^&*#@&%#)');

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);


create database `phone`;

use `phone`;

CREATE TABLE `list` (
  `id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `link` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL
);

ALTER TABLE `list`
  ADD UNIQUE KEY `name` (`name`);

INSERT INTO `list` ( `link`, `name`) VALUES
( '\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfUMAqLG1QwkxCjeboVgcUbv1yrjXtbnu-iw&usqp=CAU\"', 'Huawei y5 prime'),
( '\"https://www.ineedamobile.com/wp-content/uploads/2019/03/iphone-x-600x598.png\"', 'I Phone one plus'),
( '\"https://www.alcatelmobile.com/wp-content/uploads/2021/07/A1L-pro_560x700_Blue-1.png\"', 'Alcatel Mobile'),
( '\"https://www.ineedamobile.com/wp-content/uploads/2019/03/iphone-x-600x598.png\"', 'I phone X'),
( '\"https://i.ytimg.com/vi/IV0M-1lg5JM/maxresdefault.jpg\"', 'Nokia 1100'),
( '\"https://celltronics.lk/wp-content/uploads/2022/05/71G-UqoDkL._AC_SL1500_.jpg\" ', 'Samsung Galaxy A13'),
( '\"https://mistermobile.lk/wp-content/uploads/2022/08/91W42b8YWL._SL1500_.jpg\" ', 'Samsung Galaxy A23'),
( '\"https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6516/6516938_sd.jpg;maxHeight=640;maxWidth=550\" ', 'Samsung');


CREATE database save;