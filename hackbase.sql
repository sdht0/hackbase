-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2014 at 12:24 AM
-- Server version: 5.5.37-MariaDB-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id` int(11) NOT NULL,
  `levelcode` int(11) NOT NULL,
  `url` text NOT NULL,
  `content` text NOT NULL,
  `comment` text NOT NULL,
  `cookie` text NOT NULL,
  `answer` text NOT NULL,
  `score` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updateOn` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `levelcode`, `url`, `content`, `comment`, `cookie`, `answer`, `score`, `createdOn`, `updateOn`) VALUES
(1, 1, 'level1', 'sum(pi_digits[1342:1698])=? where pi_digits[1]=1', 'Ans is one H of a lot cooler than PI', '', '1618', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'level2', 'Alice securely sent a question to Bob, but Eve was able to intercept it. Decrypt and answer the question: "ovdthufwyvnyhttlyzkvlzpaahrlavjohunlhspnoaibsi"?', 'You''ll need the help of Friends, Romans, countrymen.', '', '0', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'level3', 'The IP of the first server is 192.168.102.xyz. You need to find out the last three digits.', 'Apply 5x5 to ______', 'Cipher=FSROFIEIZIRRPEVSVTRETEWO.', '205', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 'level4', 'Who does littlebobbytables have a crush on?', 'are you afraid of needles?', '', 'hermoine', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 'level5', 'littlebobbytables wrote about a weird mail he received. Decrypt the message in it.', '', 'decryption=DES;type=CBC;key=secret;using=hexa', 'anonymous', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 'level6', 'It seems this is just a dummy server. Find and enter the last three digits of next server.', '', '', '163', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, 'level7', 'Sum of all open ports < 10,000 on Server 2 = ?', '', 'hint=did you check all ports?', '43036', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 8, 'level8', 'Find a username present on the server.', 'check all ports', '', 'noobpk', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, 'level9', 'The server hides important secrets. To proceed, we need md5sum value of the file containing the answer to Life, Universe and Everything.', 'pass: you know it already. command: ''md5sum filename''', '', 'fd07572c0ee28c462ff0d2514916b01d', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, 'level10', 'The Answer should be hidden in the third server. Find last three digits of IP.', '', 'hint1=look around the server;hint2=the subject many hate', '183', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 11, 'level11', 'There is a ''secret_code'' lying around on the server. Retrieve it and paste it here.', 'uppload.php, think phpinfo()', '', 'bigbang', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 12, 'level12', 'The Answer?', 'you need to hijack the session. find out admin sessionid and send a get request (?id=''sessionid'') to index page of third server', '', 'deepthought', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 13, 'level13', 'The Answer was in encypted form. Decrypt it.', 'The secret can be revealed only by ''cfb'' in the words of the Holy 0xBlowfish.', '', 'quadraginta-duo', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 0, 'mcq', '', '', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 14, 'levelpro', '', '', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` int(11) NOT NULL,
  `session` text NOT NULL,
  `request` text NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16984 ;
-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE IF NOT EXISTS `mcq` (
`id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `correct` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`id`, `question`, `a`, `b`, `c`, `d`, `correct`, `createdOn`, `updatedOn`) VALUES
(1, 'What is the port no on which mysql server runs?', '3300', '3302', '3304', '3306', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'FTP uses port 20 and 21 for?', '20 is the control port and 21 is used for data transfer.', '20 is used for data transfer and 21 is the control port.', 'Both can used for data transfer as well as control port.', 'Both are used for data transfer only.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Which of the following is not a valid subnet mask?', '254.0.0.0', '255.252.0.0', '255.255.232.0', 'None of these', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'What is the port no. of dc server?', '411', '421', '431', '441', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Where are log kept in linux system?', '/etc/log', '/proc/log', '/var/log', '/dev/log', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Which command is used to list inode of a file?', 'ls -a filename', 'ls -h filename', 'ls -i filename', 'ls -l filename', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'How will you install killall command in a Debian system?', 'apt-get install killall', 'apt-get install kill', 'apt-get install psmisc', 'Any of these', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'What is the name of device file Printers?', '/dev/lp0', '/dev/psaux', '/dev/pts', '/dev/sr0', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'What is the name of device file PS/2 mouse connection?', '/dev/lp0', '/dev/psaux', '/dev/pts', '/dev/sr0', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'pop3 port no?', '25', '53', '110', '139', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'How many types of file are there in Linux/Unix?', '1', '3', '5', '7', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'What is the default value of upload_max_filesize in php.ini?', '1', '2', '3', '4', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'How web server uniquely identifies a user?', 'Session', 'Cookie', 'Both', 'None', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Every command in linux is a__________.', 'executable program', 'text file', 'stored variable', 'None of these', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Which of the following allows to secure remote command line access?', 'telnet', 'ssl', 'rlogin', 'ssh', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Which of the following commands can be used to check file for corruption?', 'md5sum', 'checkfile', 'cat-vet', 'tar --checksum', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'How long can a filename in linux be?', '127', '255', '511', 'There is no limit.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Which of the following will kill the process 1010 by an administrator(logged in as a standard user)? The process 1010 was started by the root user.', 'su "kill 1010"', 'su -c "kill 1010"', 'killall -9 1010', 'kill 1010', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '___________ is a common tool for determining services and ports running on a remote Linux.', 'iptables', 'arp', 'netstat', 'nmap', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'How much usable space is available, when a Linux system is configured with a RAID 5 array that consists of six 20 GB  hard disk drives?', '60', '80', '100', '120', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `teamname` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `rollno` text NOT NULL,
  `email` text NOT NULL,
  `phoneno` text NOT NULL,
  `name2` text NOT NULL,
  `rollno2` text NOT NULL,
  `email2` text NOT NULL,
  `phoneno2` text NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `mcq_starttime` int(11) NOT NULL DEFAULT '0',
  `mcq_answer` text NOT NULL,
  `cheat` int(11) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '1',
  `access` int(11) NOT NULL DEFAULT '1',
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `teamname`, `password`, `name`, `rollno`, `email`, `phoneno`, `name2`, `rollno2`, `email2`, `phoneno2`, `score`, `mcq_starttime`, `mcq_answer`, `cheat`, `level`, `access`, `createdOn`, `updatedOn`) VALUES
(1, 'Admin', 'aa', 'yoyoyo', 'zf', 'sfa@sd', 'szfsa', 'fd', 'df', 'sf@df', 'sfa', 140, 0, '', 1, 15, 1, '2014-02-13 15:40:28', '2014-02-13 15:59:27');

-- --------------------------------------------------------

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16984;
--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
