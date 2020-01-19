<?php

use Illuminate\Http\Request;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	// Projects CRUD
	$api->get('projects', 'App\API\V1\Controllers\ProjectsController@getAllProjects');
	$api->post('projects', 'App\API\V1\Controllers\ProjectsController@createProject');
	$api->get('projects/{project_id}', 'App\API\V1\Controllers\ProjectsController@getProject');
	$api->put('projects/{project_id}', 'App\API\V1\Controllers\ProjectsController@updateProject');
	$api->delete('projects/{project_id}', 'App\API\V1\Controllers\ProjectsController@deleteProject');

	// Project releases CRUD
	$api->get('projects/{project_id}/releases', 'App\API\V1\Controllers\ReleasesController@getAllReleasesForProject');
	$api->post('projects/{project_id}/releases', 'App\API\V1\Controllers\ReleasesController@createReleaseForProject');
	$api->group(['middleware' => 'belongsToProject'], function ($api) {
		// Project releases statuses
		$api->get('projects/{project_id}/releases/statuses', 'App\API\V1\Controllers\ReleasesStatusesController@getReleasesStatusesForProject');

		$api->get('projects/{project_id}/releases/{release_id}', 'App\API\V1\Controllers\ReleasesController@getRelease');
		$api->put('projects/{project_id}/releases/{release_id}', 'App\API\V1\Controllers\ReleasesController@updateRelease');
		$api->delete('projects/{project_id}/releases/{release_id}', 'App\API\V1\Controllers\ReleasesController@deleteRelease');
	});

	// Features CRUD
	$api->get('projects/{project_id}/features', 'App\API\V1\Controllers\FeaturesController@getAllFeaturesForProject');
	$api->post('projects/{project_id}/features', 'App\API\V1\Controllers\FeaturesController@createFeatureForProject');
	$api->group(['middleware' => 'belongsToProject'], function ($api) {
		// Features statuses
		$api->get('projects/{project_id}/features/statuses', 'App\API\V1\Controllers\FeaturesStatusesController@getFeaturesStatusesForProject');

		$api->get('projects/{project_id}/features/{feature_id}', 'App\API\V1\Controllers\FeaturesController@getFeature');
		$api->put('projects/{project_id}/features/{feature_id}', 'App\API\V1\Controllers\FeaturesController@updateFeature');
		$api->delete('projects/{project_id}/features/{feature_id}', 'App\API\V1\Controllers\FeaturesController@deleteFeature');
		// Move feature to new position/parent
		$api->put('projects/{project_id}/features/{feature_id}/move', 'App\API\V1\Controllers\FeaturesController@moveFeature');
		// Increment feature priority
		$api->put('projects/{project_id}/features/{feature_id}/increment-priority', 'App\API\V1\Controllers\FeaturesController@incrementFeaturePriority');
		// Decrement feature priority
		$api->put('projects/{project_id}/features/{feature_id}/decrement-priority', 'App\API\V1\Controllers\FeaturesController@decrementFeaturePriority');
	});
});