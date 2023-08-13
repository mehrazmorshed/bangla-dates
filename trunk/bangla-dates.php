<?php

/*
 * Plugin Name:       Bangla Dates
 * Plugin URI:        https://wordpress.org/plugins/bangla-dates/
 * Description:       Convert English months and weekdays into Bangla language.
 * Version:           1.0
 * Tested Up to:      6.2
 * Requires at least: 4.0
 * Requires PHP:      7.0
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bangla-dates
 * Domain Path:       /languages
 */

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

if( !defined( 'ABSPATH' ) ) {
    exit();
}

define( 'BANGLA_DATES_PLUGIN_VERSION', '1.0' );
define( 'BANGLA_DATES_PLUGIN_FILE', __FILE__ );
define( 'BANGLA_DATES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'BANGLA_DATES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BANGLA_DATES_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

add_action( 'init', 'bangla_dates_load_textdomain' );
function bangla_dates_load_textdomain() {
  load_plugin_textdomain( 'bangla-dates', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function bangla_dates_convert_days( $str ) {
  $day_en = array( 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'SATURDAY', 'SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday' );
  $day_hi = array( 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার' );
  return str_replace( $day_en, $day_hi, $str );
}

function bangla_dates_convert_days_shorten( $str ) {
  $days_en = array( 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'SAT', 'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri' );
  $days_hi = array( 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার' );
  return str_replace( $days_en, $days_hi, $str );
}

function bangla_dates_convert_months( $str ) {
  $month_en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december' );
  $month_hi = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
  return str_replace( $month_en, $month_hi, $str );
}

function bangla_dates_convert_months_shorten( $str ) {
  $months_en = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec' );
  $months_hi = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
  return str_replace( $months_en, $months_hi, $str );
}

function bangla_dates( $output ) {
  $output = bangla_dates_convert_days( $output );
  $output = bangla_dates_convert_days_shorten( $output );
  $output = bangla_dates_convert_months( $output );
  $output = bangla_dates_convert_months_shorten( $output );
  return $output;
}

add_action( 'init', 'apply_bangla_dates' );
function apply_bangla_dates() {
  add_filter( 'the_date', 'bangla_dates' );
  add_filter( 'get_the_date', 'bangla_dates' );
  add_filter( 'date_i18n', 'bangla_dates' );
  add_filter( 'get_comment_date', 'bangla_dates' );
  add_filter( 'widget_text', 'bangla_dates' );
  add_filter( 'get_calendar', 'bangla_dates' );
  add_filter( 'get_the_archive_title', 'bangla_dates' );
  add_filter( 'get_feed_build_date', 'bangla_dates' );
  add_filter( 'get_the_modified_date', 'bangla_dates' );
  add_filter( 'the_modified_date', 'bangla_dates' );
  add_filter( 'the_weekday_date', 'bangla_dates' );
  add_filter( 'wp_date', 'bangla_dates' );
  add_filter( 'the_weekday', 'bangla_dates' );
}

register_activation_hook( __FILE__, 'bangla_dates_notice_hook' );
function bangla_dates_notice_hook() {
    set_transient( 'bangla-dates-notification', true, 5 );
}

add_action( 'admin_notices', 'bangla_dates_activation_notification' ); 
function bangla_dates_activation_notification(){
    if( get_transient( 'bangla-dates-notification' ) ) {
        ?>
        <div class="updated notice is-dismissible">
            <p><?php esc_attr_e( 'Thank you for installing bangla Dates!', 'bangla-dates' ); ?></p>
        </div>
        <?php
        delete_transient( 'bangla-dates-notification' );
    }
}
