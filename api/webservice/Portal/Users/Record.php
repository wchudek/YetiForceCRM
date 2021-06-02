<?php
/**
 * Portal container - Get user record detail file.
 *
 * @package API
 *
 * @copyright YetiForce Sp. z o.o
 * @license	YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author	Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace Api\Portal\Users;

use OpenApi\Annotations as OA;

/**
 * Portal container - Get user record detail class.
 */
class Record extends \Api\RestApi\Users\Record
{
	/**
	 * Get user detail.
	 *
	 * @return array
	 *
	 * @OA\Get(
	 *		path="/webservice/Portal/Users/Record/{userId}",
	 *		description="Gets details about the user",
	 *		summary="Data for the user",
	 *		tags={"Users"},
	 *		security={
	 *			{"basicAuth" : {}, "ApiKeyAuth" : {}, "token" : {}}
	 *		},
	 *		@OA\Parameter(
	 *			name="userId",
	 *			description="User id",
	 *			@OA\Schema(type="integer"),
	 *			in="path",
	 *			example=116,
	 *			required=true
	 *		),
	 *		@OA\Parameter(
	 *			name="X-ENCRYPTED",
	 *			in="header",
	 *			required=true,
	 *			@OA\Schema(ref="#/components/schemas/Header-Encrypted")
	 *		),
	 *		@OA\Parameter(
	 *			name="x-raw-data",
	 *			description="Gets raw data",
	 *			@OA\Schema(type="integer", enum={0, 1}),
	 *			in="header",
	 *			example=1,
	 *			required=false
	 *		),
	 *		@OA\Response(
	 *			response=200,
	 *			description="Gets data for the user",
	 *			@OA\JsonContent(ref="#/components/schemas/Users_Get_Record_Response"),
	 *			@OA\XmlContent(ref="#/components/schemas/Users_Get_Record_Response"),
	 *		),
	 *		@OA\Response(
	 *			response=403,
	 *			description="Access denied, access for administrators only",
	 *			@OA\JsonContent(ref="#/components/schemas/Exception"),
	 *			@OA\XmlContent(ref="#/components/schemas/Exception"),
	 *		),
	 *		@OA\Response(
	 *			response=404,
	 *			description="User doesn't exist",
	 *			@OA\JsonContent(ref="#/components/schemas/Exception"),
	 *			@OA\XmlContent(ref="#/components/schemas/Exception"),
	 *		),
	 * ),
	 * @OA\Schema(
	 *		schema="Users_Get_Record_Response",
	 *		title="Users module - Response body for user",
	 *		type="object",
	 *		@OA\Property(
	 *			property="status",
	 *			description="A numeric value of 0 or 1 that indicates whether the communication is valid. 1 - success , 0 - error",
	 *			enum={0, 1},
	 *			type="integer",
	 *        	example=1
	 *		),
	 *		@OA\Property(
	 *			property="result",
	 *			description="User data",
	 *			type="object",
	 *			@OA\Property(property="name", description="User label", type="string", example="System Admin"),
	 *			@OA\Property(property="id", description="User Id", type="integer", example=1),
	 *			@OA\Property(
	 * 				property="fields",
	 *				description="Field name items",
	 *				type="object",
	 *			),
	 *			@OA\Property(
	 *				property="data",
	 *				description="User data",
	 *				type="object",
	 *			),
	 *			@OA\Property(
	 *				property="privileges",
	 *				description="Parameters determining checking of editing rights and moving to the trash",
	 * 				type="object",
	 *				@OA\Property(property="isEditable", description="Check if user is editable", type="boolean", example=true),
	 *				@OA\Property(property="moveToTrash", description="Permission to delete", type="boolean", example=false),
	 *			),
	 *			@OA\Property(property="rawData", description="Raw user data", type="object"),
	 *		),
	 * ),
	 */
	public function get(): array
	{
		return parent::get();
	}
}