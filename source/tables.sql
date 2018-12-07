
use `db_webchat`;
--
-- Table structure for table `webchat_lines`
DROP TABLE IF EXISTS `webchat_lines`;

CREATE TABLE `webchat_lines`(
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

DROP TABLE IF EXISTS `webchat_users`;
CREATE TABLE `webchat_users`(
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_state` varchar(12) NOT NULL,
  `last_activity` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
