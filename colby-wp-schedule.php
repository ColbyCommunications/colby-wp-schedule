<?php
/**
 * Plugin Name: Colby Schedules
 *
 * Description: Schedule table creator for Colby College.
 * Version: 0.0.1
 * Author: Iavor Dekov
 * Author Email: ivdekov@gmail.com
 * Text Domain: colby-schedule
 *
 * @package colby-wp-schedule
 */

/**
 * Main Plugin File
 */

require 'vendor/autoload.php';

new Colby\Schedules\EventMeta();
new Colby\Schedules\SchedulePost();
new Colby\Schedules\EventPost();
