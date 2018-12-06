--
-- Table structure for table `webchat_lines`
--
CREATE DATABASE IF NOT EXISTS db_webchat;
use db_webchat;


CREATE TABLE if not exists `webchat_lines` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `author` varchar(16) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `ts` (`ts`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


-- --------------------------------------------------------


--
-- Table structure for table `webchat_users`
--

CREATE TABLE if not exists `webchat_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(16) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `email` varchar(32) NOT NULL,
  `user_state` varchar(32) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `last_activity` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
