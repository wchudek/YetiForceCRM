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

namespace Config\Components;

/**
 * Configuration file: Config\Components\Pbx.
 */
class Pbx
{
	/** Map of modules and fields to search for relations by telephone number, for call history. */
	public static $phoneSearchField = [
		'Contacts' => ['phone', 'mobile'],
		'Accounts' => ['phone', 'otherphone'],
		'Leads' => ['phone', 'mobile', 'fax'],
	];
}
