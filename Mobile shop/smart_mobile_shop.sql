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
  ADD UNIQUE KEY `name` (`name`);

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(0, 'Team Fire', 'Team@gmail.com', '1020'),
(1, 'Admin', 'admin@gmail.com', '1020');

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES
(0, 'user', 'u@gmail.com', '1020'),
(1, 'Sajith', 'sajmym@gmail.com', '1020'),
(2, 'musha', 'm@gmail.com', '1020');