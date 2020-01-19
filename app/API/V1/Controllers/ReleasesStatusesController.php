<?php
namespace App\API\V1\Controllers;
use App\Models\ReleasesStatus;

/**
 * Releases statuses API controller
 * @package App\API\V1\Controllers
 *
 * @Resource("ReleasesStatuses", uri="/api")
 */
class ReleasesStatusesController extends BaseController {
	/**
	 * Get all ReleasesStatuses
	 *
	 * Statuses list for the project releases (currently, all statuses are global)
	 *
	 * @Get("/projects/{project_id}/releases/statuses")
	 * @Versions({"v1"})
	 * @Response(200, body={{"id":4,"status":"Planned","is_closed":0,"created_at":"2020-01-17 10:14:02","updated_at":"2020-01-17 10:14:02"}})
	 */
	public function getReleasesStatusesForProject() {
		return ReleasesStatus::all();
	}

}