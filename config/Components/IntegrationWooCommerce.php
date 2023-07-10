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
 * Configuration file: Config\Components\IntegrationWooCommerce.
 */
class IntegrationWooCommerce
{
	/**
	 * Log all events (errors + info), when turned on creates a lot of logs.
	 *
	 * @var bool
	 */
	public static $logAll = false;

	/**
	 * Product attributes map
	 * [WooCommerceAttrName => CrmFieldName]
	 *
	 * @see App\Integrations\WooCommerce\Synchronizer\ProductAttributes
	 *
	 * @var array
	 */
	public static $attributes = [];

	/**
	 * Custom product attributes map
	 * [WooCommerceCustomName => CrmFieldName]
	 * Allowed field types depending on the values entered `Text area`
	 *
	 * @see App\Integrations\WooCommerce\Synchronizer\ProductAttributes
	 *
	 * @var array
	 */
	public static $customAttributes = [];
}
