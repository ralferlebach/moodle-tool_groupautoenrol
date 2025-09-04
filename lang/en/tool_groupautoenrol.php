<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * EN language file for tool_groupautoenrol
 *
 * @package    tool_groupautoenrol
 * @copyright  2016 Pascal
 * @author     Pascal M - https://github.com/pascal-my
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'Automatic enrolment in groups';
$string['coursemenu_item'] = 'Auto-enrol in groups';

// Buttons and links.
$string['menu_auto_groups'] = 'Auto-enrol in groups';

// Course settings form.
$string['auto_group_form_page_title'] = 'Auto-enrol settings';
$string['auto_group_form_enable_enrol'] = 'Enable automatic enrolment in groups for this course';
$string['auto_group_form_rand_method'] = 'Random enrolment';
$string['auto_group_form_usegroupslist'] = 'Enrol users in selected groups only :';
$string['auto_group_form_groupslist'] = 'Choose groups :';
$string['auto_group_form_rolelist'] = 'Select role(s) concerned';
$string['auto_group_enrol_form_no_group_found'] = 'Create groups first !';
$string['privacy:null_reason'] = 'No userdata collected by this plugin.';

$string['enrol_method'] = 'Enrol method';
$string['enrol_method:alpha'] = 'Populate largest group first';
$string['enrol_method:balanced'] = 'Balanced distribution';
$string['enrol_method:random'] = 'Pure random allocation';
$string['enrol_method:alpha_max_fillup'] = 'Fill group up to';
$string['enrol_method:alpha_max_fillup_hint'] = 'Fill the group with the largest number of members until the specified number of members has been reached. Then, fill the next largest group(s). If the specified number of members has been reached or exceeded in all groups, continue filling in balanced distribution mode.';
$string['enrol_method:alpha_max_fillup_not_zero'] = 'The number must be greater than zero.';