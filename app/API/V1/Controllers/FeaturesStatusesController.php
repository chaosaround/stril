<?php
namespace App\API\V1\Controllers;

use App\Models\FeaturesStatus;

/**
 * Features statuses API controller
 * @package App\API\V1\Controllers
 *
 * @Resource("FeaturesStatus", uri="/api")
 */
class FeaturesStatusesController extends BaseController {
	/**
	 * Get all FeaturesStatus
	 *
	 * Statuses list for the project features (currently, all statuses are global)
	 *
	 * @Get("/projects/{project_id}/features/statuses")
	 * @Versions({"v1"})
	 * @Response(200, body={{"id":4,"status":"Planned","is_closed":0,"created_at":"2020-01-17 10:14:02","updated_at":"2020-01-17 10:14:02"}})
	 */
	public function getFeaturesStatusesForProject() {
		return FeaturesStatus::all();
	}

}