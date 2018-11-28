--
-- Table structure for table `webchat_lines`
--
 DROP `webchat_lines` if Exists;
CREATE TABLE `webchat_lines` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `author` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `ts` (`ts`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `webchat_users`
--
 DROP `webchat_users` if Exists;
CREATE TABLE `webchat_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(16) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `last_activity` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
