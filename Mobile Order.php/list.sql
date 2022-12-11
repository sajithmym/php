CREATE DATABASE Phone;
USE Phone;

CREATE TABLE list(`id` int(5) NOT NULL,`link` varchar(300) NOT NULL,`name` varchar(300) NOT NULL,PRIMARY KEY(`id`));

INSERT INTO `list` (`id`, `link`, `name`) VALUES
(1, '\"https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fA%3D%3D&w=1000&q=80/"','Huawei y5 prime'),
(2, '\"https://www.ineedamobile.com/wp-content/uploads/2019/03/iphone-x-600x598.png/" ','I Phone one plus'),
(3, '\"https://www.alcatelmobile.com/wp-content/uploads/2021/07/A1L-pro_560x700_Blue-1.png/" ','Alcatel Mobile'),
(4, '\"https://www.ineedamobile.com/wp-content/uploads/2019/03/iphone-x-600x598.png/" ','I phone X'),
(5, '\"https://techtrix.lk/wp-content/uploads/2022/09/Itel-it2163-4MB-Dual-SIM-FM-Radio-Black-1.jpg/" ','Nokia 1100');