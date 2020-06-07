CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `hired_date` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8 NOT NULL,
  `martial_status` enum('single','married') CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'general',
  `status` enum('active','pending','deleted','') NOT NULL DEFAULT 'pending',
  `authtoken` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `birth_date`, `hired_date`, `email`, `password`, `gender`, `martial_status`, `mobile`, `designation`, `image`, `type`, `status`, `authtoken`) VALUES
(1, 'admin', 'traitor', 'web', 'california cebu', '1984-03-19', '2009-02-19', 'admin@adminweb.com', '202cb962ac59075b964b07152d234b70', 'male', 'married', '123456789', 'Web developer', '', 'administrator', 'active', '');

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
