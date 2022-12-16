create database `phone`;

use `phone`;

CREATE TABLE `list` (
  `id` int(5) NOT NULL,
  `link` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL
);

ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

INSERT INTO `list` (`id`, `link`, `name`) VALUES
(0, '\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfUMAqLG1QwkxCjeboVgcUbv1yrjXtbnu-iw&usqp=CAU\"', 'Huawei y5 prime'),
(1, '\"https://www.ineedamobile.com/wp-content/uploads/2019/03/iphone-x-600x598.png\"', 'I Phone one plus'),
(2, '\"https://www.alcatelmobile.com/wp-content/uploads/2021/07/A1L-pro_560x700_Blue-1.png\"', 'Alcatel Mobile'),
(3, '\"https://www.ineedamobile.com/wp-content/uploads/2019/03/iphone-x-600x598.png\"', 'I phone X'),
(4, '\"https://i.ytimg.com/vi/IV0M-1lg5JM/maxresdefault.jpg\"', 'Nokia 1100'),
(5, '\"https://www.ideabeam.com/images/product/big/oneplus-9-pro.jpg\" ', 'One Plus 9');
