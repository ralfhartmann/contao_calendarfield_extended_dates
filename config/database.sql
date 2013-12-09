-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_form_field`
--

CREATE TABLE `tl_form_field` (
  `calendarfield_extended_dates_enable` char(1) NOT NULL default '',
  `calendarfield_extended_dates_from` varchar(250) NOT NULL default '',
  `calendarfield_extended_dates_to` varchar(250) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
