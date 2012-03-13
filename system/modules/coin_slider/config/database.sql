-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_coinSlider`
-- 
CREATE TABLE `tl_coinSlider` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(128) NOT NULL default '',
  `width` int(10) unsigned NOT NULL default '0',
  `height` int(10) unsigned NOT NULL default '0',
  `spw` int(10) unsigned NOT NULL default '0',
  `sph` int(10) unsigned NOT NULL default '0',
  `delay` int(10) unsigned NOT NULL default '0',
  `sDelay` int(10) unsigned NOT NULL default '0',
  `opacity` float unsigned NOT NULL default '0',
  `titleSpeed` int(10) unsigned NOT NULL default '0',
  `effect` varchar(64) NOT NULL default '',
  `navigation` char(1) NOT NULL default '',
  `links` char(1) NOT NULL default '',
  `hoverPause` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table `tl_coinPictures`
--
CREATE TABLE `tl_coinPictures` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `description` text NULL,
  `singleSRC` varchar(255) NOT NULL default '',
  `alt` varchar(255) NOT NULL default '',
  `imageUrl` varchar(255) NOT NULL default '',
  `size` varchar(64) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_module`
--

CREATE TABLE `tl_module` (
  `select_coinSlider` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_content`
--

CREATE TABLE `tl_content` (
  `select_coinSlider` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;