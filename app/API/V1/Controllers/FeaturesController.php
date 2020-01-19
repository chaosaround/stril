<?php
namespace App\API\V1\Controllers;
use App\Models\Feature;
use App\Models\Project;
use Illuminate\Http\Request;

class FeaturesController extends BaseController {

	//get('projects/{project}/features
	/**
	 * @param int $id
	 */
	public function getAllFeaturesForProject(int $id) {
		//paginate ??
		//type = linear, tree
	}

	//post('projects/{project}/features'
	public function createFeatureForProject(Request $request) {

	}

	//get('projects/{project}/features/{feature}'
	public function getFeature(Feature $feature) {

	}

	//put('projects/{project}/features/{feature}

	/**
	 * @param Request $request
	 * @param int $id
	 */
	public function updateFeature(Request $request, int $id) {

	}

	//delete('projects/{project}/features/{feature}
	public function deleteFeature(Feature $feature) {

	}

	//put('projects/{project}/features/{feature}/move
	public function moveFeature(Request $request, Feature $feature) {

	}

	//put('projects/{project}/features/{feature}/increment-priority'
	public function incrementFeaturePriority(Feature $feature) {

	}

	//put('projects/{project}/features/{feature}/decrement-priority'
	public function decrementFeaturePriority(Feature $feature) {

	}

}