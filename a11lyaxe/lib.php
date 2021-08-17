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
 * Atto text editor integration version file.
 *
 * @package    atto_a11lyaxe
 * @copyright  2014 Damyon Wiese  <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Initialise this plugin
 * @param string $elementid
 */
function atto_a11lyaxe_strings_for_js() {
    global $PAGE;

    $PAGE->requires->strings_for_js(array('nowarnings',
                                    'report',
                                    'imagesmissingalt',
                                    'needsmorecontrast',
                                    'needsmoreheadings',
                                    'tableswithmergedcells',
                                    'tablesmissingcaption',
                                    'emptytext',
                                    'entiredocument',
                                    'tablesmissingheaders'),
                                    'atto_a11lyaxe');
}

//function atto_a11lyaxe_before_http_headers() {
//    global $PAGE;
//    $PAGE->requires->css('/lib/editor/atto/plugins/a11lyaxe/jquery-ui.css');
//}

//doesnt work - i have told nadav
//function atto_a11lyaxe_before_headers() {
//    global $PAGE;
//    $PAGE->requires->css('/lib/editor/atto/plugins/a11lyaxe/jquery-ui.css');
//}

//crushes - Coding error detected, it must be fixed by a programmer: Cannot require a CSS file after <head> has been printed.
//function atto_a11lyaxe_before_footer() {
//    global $PAGE;
//    $PAGE->requires->css('/lib/editor/atto/plugins/a11lyaxe/jquery-ui.css');
//}



