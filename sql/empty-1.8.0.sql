DROP TABLE IF EXISTS `glpi_plugin_addressing_addressing`;
CREATE TABLE `glpi_plugin_addressing_addressing` (
	`id` int(11) NOT NULL auto_increment,
	`entities_id` int(11) NOT NULL default '0',
	`name` varchar(255) collate utf8_unicode_ci default NULL,
	`networks_id` int(11) NOT NULL default '0' COMMENT 'RELATION to glpi_networks (id)',
	`begin_ip` varchar(255) collate utf8_unicode_ci default NULL,
	`end_ip` varchar(255) collate utf8_unicode_ci default NULL,
	`alloted_ip` tinyint(1) NOT NULL default '0',
	`double_ip` tinyint(1) NOT NULL default '0',
	`free_ip` tinyint(1) NOT NULL default '0',
	`reserved_ip` tinyint(1) NOT NULL default '0',
	`use_ping` tinyint(1) NOT NULL default '0',
	`generation_link` tinyint(1) NOT NULL default '0',
	`comment` text collate utf8_unicode_ci,
	`is_deleted` tinyint(1) NOT NULL default '0',
	PRIMARY KEY  (`id`),
	KEY `name` (`name`),
	KEY `entities_id` (`entities_id`),
	KEY `networks_id` (`networks_id`),
	KEY `is_deleted` (`is_deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `glpi_plugin_addressing_configs`;
CREATE TABLE `glpi_plugin_addressing_configs` (
	`id` int(11) NOT NULL auto_increment,
	`alloted_ip` tinyint(1) NOT NULL default '0',
	`double_ip` tinyint(1) NOT NULL default '0',
	`free_ip` tinyint(1) NOT NULL default '0',
	`reserved_ip` tinyint(1) NOT NULL default '0',
	`use_ping` tinyint(1) NOT NULL default '0',
	`used_system` tinyint(1) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `glpi_plugin_addressing_configs` VALUES ('1','1','1','1','1','0','0');

DROP TABLE IF EXISTS `glpi_plugin_addressing_profiles`;
CREATE TABLE `glpi_plugin_addressing_profiles` (
	`id` int(11) NOT NULL auto_increment,
	`name` varchar(255) collate utf8_unicode_ci default NULL,
	`addressing` char(1) collate utf8_unicode_ci default NULL,
	PRIMARY KEY  (`id`),
	KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `glpi_displayprefs` VALUES (NULL,5000,2,2,0);
INSERT INTO `glpi_displayprefs` VALUES (NULL,5000,3,6,0);
INSERT INTO `glpi_displayprefs` VALUES (NULL,5000,4,5,0);
INSERT INTO `glpi_displayprefs` VALUES (NULL,5000,5,7,0);
INSERT INTO `glpi_displayprefs` VALUES (NULL,5000,1000,3,0);
INSERT INTO `glpi_displayprefs` VALUES (NULL,5000,1001,4,0);