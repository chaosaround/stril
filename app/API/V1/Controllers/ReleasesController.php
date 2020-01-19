<?php
namespace App\API\V1\Controllers;
use App\Models\Project;
use App\Models\Release;
use Illuminate\Http\Request;


class ReleasesController extends BaseController {

	// get /projects/{id}/releases
	public function getAllReleasesForProject(Project $project) {
		return [5421];
	}

	// post /projects/{id}/releases
	public function createReleaseForProject(Request $request, Project $project) {

	}

	// get /projects/{id}/releases/{id}
	public function getRelease(Request $request, Release $release) {

	}

	// put /projects/{id}/releases/{id}
	public function updateRelease(Request $request, Release $release) {

	}

	// delete /projects/{id}/releases/{id}
	public function deleteRelease(Release $release) {

	}

}