<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2015 Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage module-schoolinfo
 * @author     Kevin Rickis (rdx565)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2015 EdICT Training Ltd, Scotland
 *
 */

define('INTERNAL', 1);
define('SECTION_PLUGINTYPE', 'module');
define('SECTION_PLUGINNAME', 'schoolinfo');
define('SECTION_PAGE', 'index');

require('../../init.php');
require_once(dirname(dirname(dirname(__FILE__))) . '/module/schoolinfo/lib.php');

//usage examples
$example1 = PluginModuleSchoolInfo::get_school_session(); //The session current date
$example2 = PluginModuleSchoolInfo::get_school_session('2013-01-01'); //The session for the given date
$example3 = PluginModuleSchoolInfo::get_school_session('', 'y'); //Session for the current date returning short form year.
$example4 = PluginModuleSchoolInfo::get_school_term(); //Term that the current date is in

$smarty = smarty();
$smarty->assign('example1', $example1);
$smarty->assign('example2', $example2);
$smarty->assign('example3', $example3);
$smarty->assign('example4', $example4);

$smarty->display('module:schoolinfo:index.tpl');
