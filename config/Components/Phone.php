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
 * Configuration file: Config\Components\Phone.
 */
class Phone
{
	/** Determines the way the default country in the phone field is downloaded. True retrieves the value from the countries panel, false retrieves the country from the users default language. */
	public static $defaultPhoneCountry = true;

	/** Enable advanced phone number validation. Enabling it will block saving invalid phone number. */
	public static $advancedVerification = true;

	/**
	 * Phone number display format. Values:
	 * false - formatting is disabled
	 * \libphonenumber\PhoneNumberFormat::E164 (0) - `+48446681800`, `+48884998123`
	 * \libphonenumber\PhoneNumberFormat::INTERNATIONAL (1) - `+48 44 668 18 00`, `+48 884 998 123`
	 * \libphonenumber\PhoneNumberFormat::NATIONAL (2) - `44 668 18 00`, `884 998 123`
	 * \libphonenumber\PhoneNumberFormat::RFC3966 (3) - `tel:+48-44-668-18-00`, `tel:+48-884-998-123`.
	 */
	public static $advancedFormat = \libphonenumber\PhoneNumberFormat::INTERNATIONAL;
}
