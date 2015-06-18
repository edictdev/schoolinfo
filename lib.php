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

/**
 * Class PluginModuleSchoolInfo
 */
class PluginModuleSchoolInfo extends PluginModule {
  /**
   * @param $prevversion
   */
  public static function postinst($prevversion) {
    if ($prevversion == 0) {
      set_config_plugin('module', 'schoolinfo', 'endmonth', '1');
      log_info('Set end month: ' . get_config_plugin('module', 'schoolinfo', 'endmonth'));
    }
  }


  /**
   * @return bool
   */
  public static function has_config() {
    return TRUE;
  }

  /**
   * Config options.
   * In this case the month in which the school session ends and checkboxes to select the months of the terms.
   * @return array
   */
  public static function get_config_options() {
    $term1defaults = explode(',',get_config_plugin('module', 'schoolinfo', 'term1'));
    $term2defaults = explode(',',get_config_plugin('module', 'schoolinfo', 'term2'));
    $term3defaults = explode(',',get_config_plugin('module', 'schoolinfo', 'term3'));
    return array(
      'elements' => array(
        'endmonth' => array(
          'title' => get_string('schoolinfoselecttitle', 'module.schoolinfo'),
          'description' => get_string('schoolinfoselectdesc', 'module.schoolinfo'),
          'type' => 'select',
          'options' => array(
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
          ),
          'defaultvalue' => get_config_plugin('module', 'schoolinfo', 'endmonth'),
        ),
        'term1' => array(
          'type' => 'checkboxes',
          'title' => get_string('term1', 'module.schoolinfo'),
          'description' => get_string('term1desc', 'module.schoolinfo'),
          'labelwidth' => 0,
          'elements' => array(
            'januaryt1' => array(
              'title' => get_string('january', 'module.schoolinfo'),
              'value' => 'jan',
              'defaultvalue' => (in_array('jan', $term1defaults, true) ? 1 : 0),
            ),
            'febuaryt1' => array(
              'title' => get_string('february', 'module.schoolinfo'),
              'value' => 'feb',
              'defaultvalue' => (in_array('feb', $term1defaults, true) ? 1 : 0),
            ),
            'marcht1' => array(
              'title' => get_string('march', 'module.schoolinfo'),
              'value' => 'mar',
              'defaultvalue' => (in_array('mar', $term1defaults, true) ? 1 : 0),
            ),
            'aprilt1' => array(
              'title' => get_string('april', 'module.schoolinfo'),
              'value' => 'apr',
              'defaultvalue' => (in_array('apr', $term1defaults, true) ? 1 : 0),
            ),
            'mayt1' => array(
              'title' => get_string('may', 'module.schoolinfo'),
              'value' => 'may',
              'defaultvalue' => (in_array('may', $term1defaults, true) ? 1 : 0),
            ),
            'junet1' => array(
              'title' => get_string('june', 'module.schoolinfo'),
              'value' => 'jun',
              'defaultvalue' => (in_array('jun', $term1defaults, true) ? 1 : 0),
            ),
            'julyt1' => array(
              'title' => get_string('july', 'module.schoolinfo'),
              'value' => 'jul',
              'defaultvalue' => (in_array('jul', $term1defaults, true) ? 1 : 0),
            ),
            'augustt1' => array(
              'title' => get_string('august', 'module.schoolinfo'),
              'value' => 'aug',
              'defaultvalue' => (in_array('aug', $term1defaults, true) ? 1 : 0),
            ),
            'septembert1' => array(
              'title' => get_string('september', 'module.schoolinfo'),
              'value' => 'sep',
              'defaultvalue' => (in_array('sep', $term1defaults, true) ? 1 : 0),
            ),
            'octobert1' => array(
              'title' => get_string('october', 'module.schoolinfo'),
              'value' => 'oct',
              'defaultvalue' => (in_array('oct', $term1defaults, true) ? 1 : 0),
            ),
            'novembert1' => array(
              'title' => get_string('november', 'module.schoolinfo'),
              'value' => 'nov',
              'defaultvalue' => (in_array('nov', $term1defaults, true) ? 1 : 0),
            ),
            'decembert1' => array(
              'title' => get_string('december', 'module.schoolinfo'),
              'value' => 'dec',
              'defaultvalue' => (in_array('dec', $term1defaults, true) ? 1 : 0),
            ),
          ),
        ),
        'term2' => array(
          'type' => 'checkboxes',
          'title' => get_string('term2', 'module.schoolinfo'),
          'description' => get_string('term2desc', 'module.schoolinfo'),
          'labelwidth' => 0,
          'elements' => array(
            'januaryt2' => array(
              'title' => get_string('january', 'module.schoolinfo'),
              'value' => 'jan',
              'defaultvalue' => (in_array('jan', $term2defaults, true) ? 1 : 0),
            ),
            'febuaryt2' => array(
              'title' => get_string('february', 'module.schoolinfo'),
              'value' => 'feb',
              'defaultvalue' => (in_array('feb', $term2defaults, true) ? 1 : 0),
            ),
            'marcht2' => array(
              'title' => get_string('march', 'module.schoolinfo'),
              'value' => 'mar',
              'defaultvalue' => (in_array('mar', $term2defaults, true) ? 1 : 0),
            ),
            'aprilt2' => array(
              'title' => get_string('april', 'module.schoolinfo'),
              'value' => 'apr',
              'defaultvalue' => (in_array('apr', $term2defaults, true) ? 1 : 0),
            ),
            'mayt2' => array(
              'title' => get_string('may', 'module.schoolinfo'),
              'value' => 'may',
              'defaultvalue' => (in_array('may', $term2defaults, true) ? 1 : 0),
            ),
            'junet2' => array(
              'title' => get_string('june', 'module.schoolinfo'),
              'value' => 'jun',
              'defaultvalue' => (in_array('jun', $term2defaults, true) ? 1 : 0),
            ),
            'julyt2' => array(
              'title' => get_string('july', 'module.schoolinfo'),
              'value' => 'jul',
              'defaultvalue' => (in_array('jul', $term2defaults, true) ? 1 : 0),
            ),
            'augustt2' => array(
              'title' => get_string('august', 'module.schoolinfo'),
              'value' => 'aug',
              'defaultvalue' => (in_array('aug', $term2defaults, true) ? 1 : 0),
            ),
            'septembert2' => array(
              'title' => get_string('september', 'module.schoolinfo'),
              'value' => 'sep',
              'defaultvalue' => (in_array('sep', $term2defaults, true) ? 1 : 0),
            ),
            'octobert2' => array(
              'title' => get_string('october', 'module.schoolinfo'),
              'value' => 'oct',
              'defaultvalue' => (in_array('oct', $term2defaults, true) ? 1 : 0),
            ),
            'novembert2' => array(
              'title' => get_string('november', 'module.schoolinfo'),
              'value' => 'nov',
              'defaultvalue' => (in_array('nov', $term2defaults, true) ? 1 : 0),
            ),
            'decembert2' => array(
              'title' => get_string('december', 'module.schoolinfo'),
              'value' => 'dec',
              'defaultvalue' => (in_array('dec', $term2defaults, true) ? 1 : 0),
            ),
          ),
        ),
        'term3' => array(
          'type' => 'checkboxes',
          'title' => get_string('term3', 'module.schoolinfo'),
          'description' => get_string('term3desc', 'module.schoolinfo'),
          'labelwidth' => 0,
          'elements' => array(
            'januaryt3' => array(
              'title' => get_string('january', 'module.schoolinfo'),
              'value' => 'jan',
              'defaultvalue' => (in_array('jan', $term3defaults, true) ? 1 : 0),
            ),
            'febuaryt3' => array(
              'title' => get_string('february', 'module.schoolinfo'),
              'value' => 'feb',
              'defaultvalue' => (in_array('feb', $term3defaults, true) ? 1 : 0),
            ),
            'marcht3' => array(
              'title' => get_string('march', 'module.schoolinfo'),
              'value' => 'mar',
              'defaultvalue' => (in_array('mar', $term3defaults, true) ? 1 : 0),
            ),
            'aprilt3' => array(
              'title' => get_string('april', 'module.schoolinfo'),
              'value' => 'apr',
              'defaultvalue' => (in_array('apr', $term3defaults, true) ? 1 : 0),
            ),
            'mayt3' => array(
              'title' => get_string('may', 'module.schoolinfo'),
              'value' => 'may',
              'defaultvalue' => (in_array('may', $term3defaults, true) ? 1 : 0),
            ),
            'junet3' => array(
              'title' => get_string('june', 'module.schoolinfo'),
              'value' => 'jun',
              'defaultvalue' => (in_array('jun', $term3defaults, true) ? 1 : 0),
            ),
            'julyt3' => array(
              'title' => get_string('july', 'module.schoolinfo'),
              'value' => 'jul',
              'defaultvalue' => (in_array('jul', $term3defaults, true) ? 1 : 0),
            ),
            'augustt3' => array(
              'title' => get_string('august', 'module.schoolinfo'),
              'value' => 'aug',
              'defaultvalue' => (in_array('aug', $term3defaults, true) ? 1 : 0),
            ),
            'septembert3' => array(
              'title' => get_string('september', 'module.schoolinfo'),
              'value' => 'sep',
              'defaultvalue' => (in_array('sep', $term3defaults, true) ? 1 : 0),
            ),
            'octobert3' => array(
              'title' => get_string('october', 'module.schoolinfo'),
              'value' => 'oct',
              'defaultvalue' => (in_array('oct', $term3defaults, true) ? 1 : 0),
            ),
            'novembert3' => array(
              'title' => get_string('november', 'module.schoolinfo'),
              'value' => 'nov',
              'defaultvalue' => (in_array('nov', $term3defaults, true) ? 1 : 0),
            ),
            'decembert3' => array(
              'title' => get_string('december', 'module.schoolinfo'),
              'value' => 'dec',
              'defaultvalue' => (in_array('dec', $term3defaults, true) ? 1 : 0),
            ),

          ),
        ),
      )
    );
  }

  /**
   * @param $form
   * @param $values
   */
  public static function save_config_options($form, $values) {
    set_config_plugin('module', 'schoolinfo', 'endmonth', (int) $values['endmonth']);
    $term1 = $values['term1'];
    $term2 = array_diff($values['term2'], $term1);
    $term3 = array_diff($values['term3'], $term1, $term2);
    set_config_plugin('module', 'schoolinfo', 'term1', implode(",", $term1));
    set_config_plugin('module', 'schoolinfo', 'term2', implode(",", $term2));
    set_config_plugin('module', 'schoolinfo', 'term3', implode(",", $term3 ));
  }

  /**
   * @return bool
   */
  public static function can_be_disabled() {
    return TRUE;
  }

  /**
   * @return array
   */
  public static function menu_items() {
    return array();
  }


  /**
   * Calculate the current session from the given date
   * @param string $date the date for the session
   * @return string
   */
  public static function  get_school_session($date = '', $yearform = 'Y') {
    if (empty($date)) {
      $month = date('n');
      $year = date($yearform);
    }
    else {
      $month = date('n', strtotime($date));
      $year = date($yearform, strtotime($date));
    }

    $end_month = get_config_plugin('module', 'schoolinfo', 'endmonth');
    if ($month <= $end_month) {
      $session = ($year - 1) . '/' . $year;
    }
    else {
      $session = $year . '/' . ($year + 1);
    }
    return $session;
  }


  /**
   * Get the term from the given date
   * @param string $date
   * @return int
   */
  public static function  get_school_term($date = ''){
  $term1 = explode(',',get_config_plugin('module', 'schoolinfo', 'term1'));
  $term2 = explode(',',get_config_plugin('module', 'schoolinfo', 'term2'));
  $term3 = explode(',',get_config_plugin('module', 'schoolinfo', 'term3'));

  if (empty($date)) {
    $month = strtolower(date('M'));
  }
  else {
    $month = strtolower(date('M', strtotime($date)));
  }
  if(in_array($month,$term1)){
    return 1;
  }

  if(in_array($month,$term2)){
    return 2;
  }

  if(in_array($month,$term3)){
    return 3;
  }

}

}