<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/

This file is part of Commentics.

Commentics is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Commentics is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Commentics. If not, see <http://www.gnu.org/licenses/>.

Text to help preserve UTF-8 file encoding: 汉语漢語.
*/

if (!isset($cmtx_path)) { die('Access Denied.'); }

cmtx_db_query("ALTER TABLE `".$cmtx_mysql_table_prefix."comments` ADD is_sticky tinyint(1) unsigned NOT NULL default '0'");

cmtx_db_query("ALTER TABLE `".$cmtx_mysql_table_prefix."comments` ADD is_locked tinyint(1) unsigned NOT NULL default '0'");

cmtx_db_query("RENAME TABLE `".$cmtx_mysql_table_prefix."banned` TO `".$cmtx_mysql_table_prefix."bans`;");
cmtx_db_query("RENAME TABLE `".$cmtx_mysql_table_prefix."last_login` TO `".$cmtx_mysql_table_prefix."logins`;");

cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by_1','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by_2','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by_3','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by_4','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by_5','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_sort_by_6','1');");

cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('processor','akismet_enabled','0');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('processor','akismet_key','');");

cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','enabled_gravatar','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','gravatar_default','mm');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('comments','gravatar_rating','g');");

cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('form','enabled_bb_code_video','1');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('processor','approve_videos','1');");

cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('order','sort_order_parts','1,2');");

cmtx_db_query("DELETE FROM `".$cmtx_mysql_table_prefix."settings` WHERE title = 'js_vote_bad'");

cmtx_db_query("DELETE FROM `".$cmtx_mysql_table_prefix."settings` WHERE title = 'check_trap'");
cmtx_db_query("DELETE FROM `".$cmtx_mysql_table_prefix."settings` WHERE title = 'hide_trap_bans'");

cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('system','limit_comments','50');");
cmtx_db_query("INSERT INTO `".$cmtx_mysql_table_prefix."settings` (category, title, value) VALUES ('notice','notice_limit_comments','1');");

?>