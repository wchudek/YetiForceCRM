<?php

/**
 * Configuration file.
 * This file is auto-generated.
 *
 * @package Config
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

namespace Config;

/**
 * Configuration file: Config\Main.
 */
class Main
{
	/** Use rte */
	public static $USE_RTE = true;

	/** Url for customer portal (Example: https://portal.yetiforce.com/) */
	public static $PORTAL_URL = '';

	/** Help desk support email reply */
	public static $HELPDESK_SUPPORT_EMAIL_REPLY = '';

	/** Backslash is required at the end of URL */
	public static $site_URL = 'http://localhost/projekty/YetiForceCRM/';

	/** Cache directory path */
	public static $cache_dir = 'cache/';

	/** Maximum file size for uploaded files in bytes also used when uploading import files: upload_maxsize default value = 52428800 (50MB) */
	public static $upload_maxsize = 52428800;

	/** Flag to allow export functionality: "all" - to allow anyone to use exports, "admin" - to only allow admins to export, "none" -  to block exports completely */
	public static $allow_exports = 'all';

	/** Files with one of these extensions will have ".txt" appended to their filename on upload. */
	public static $upload_badext = [
		'php',
		'php3',
		'php4',
		'php5',
		'pl',
		'cgi',
		'py',
		'asp',
		'cfm',
		'js',
		'vbs',
		'html',
		'htm',
		'exe',
		'bin',
		'bat',
		'sh',
		'dll',
		'phps',
		'phtml',
		'xhtml',
		'rb',
		'msi',
		'jsp',
		'shtml',
		'sth',
		'shtm',
	];

	/** List max entries per page: default value = 20 */
	public static $list_max_entries_per_page = 20;

	/** Default module: default value = Home */
	public static $default_module = 'Home';

	/** Default charset:  default value = "UTF-8" */
	public static $default_charset = 'UTF-8';

	/** Default language: default value = en-US */
	public static $default_language = 'en-US';

	/** Unique Application Key */
	public static $application_unique_key = 'd416ab92b1ca46ca25c6060ea916706a0c70ca54';

	/** Trim descriptions, titles in listviews to this value */
	public static $listview_max_textlength = 40;

	/** Maximum time limit for PHP script execution (in seconds) */
	public static $php_max_execution_time = 0;

	/** Set the default timezone as per your preference */
	public static $default_timezone = 'Europe/London';

	/** Maximum length of characters for title */
	public static $title_max_length = 60;

	/** Maximum length for href tag */
	public static $href_max_length = 50;

	/** Minimum cron frequency [min] */
	public static $MINIMUM_CRON_FREQUENCY = 1;

	/** Update the current session id with a newly generated one after login */
	public static $davStorageDir = 'storage/Files';

	/** System mode. Available: prod, demo, test */
	public static $systemMode = 'prod';

	/** Maximum number of records in a mass edition */
	public static $listMaxEntriesMassEdit = 500;

	/** Enable closing of modal window by clicking on the background */
	public static $backgroundClosingModal = true;

	/** Is sending emails active? */
	public static $isActiveSendingMails = true;

	/** Activates / deactivates batch adding of records */
	public static $isActiveRecordTemplate = false;

	/** Should the task in cron be unblocked if the script execution time was exceeded? */
	public static $unblockedTimeoutCronTasks = true;

	/** The maximum time of executing a cron. Recommended the same as the max_exacution_time parameter value. */
	public static $maxExecutionCronTime = 3600;

	/** System's language selection in the login window (true/false). */
	public static $langInLoginView = false;

	/** System's layout selection in the login window (true/false) */
	public static $layoutInLoginView = false;

	/** Set the default layout */
	public static $defaultLayout = 'basic';

	/** Header alert message */
	public static $headerAlertMessage = '';

	/** Header alert type, ex. alert-primary, alert-danger, alert-warning, alert-info */
	public static $headerAlertType = '';

	/** Header alert icon, ex.  fas fa-exclamation-triangle, fas fa-exclamation-circle, fas fa-exclamation, far fa-question-circle, fas fa-info-circle */
	public static $headerAlertIcon = '';

	/** Login page alert message */
	public static $loginPageAlertMessage = '';

	/** Login page alert type, ex. alert-primary, alert-danger, alert-warning, alert-info */
	public static $loginPageAlertType = '';

	/** Login page alert icon, ex.  fas fa-exclamation-triangle, fas fa-exclamation-circle, fas fa-exclamation, far fa-question-circle, fas fa-info-circle */
	public static $loginPageAlertIcon = '';


	/**
	 * Default value prepended by cache_dir = images/
	 */
	public static function tmp_dir()
	{
		return self::$cache_dir . "images/";
	}
}
