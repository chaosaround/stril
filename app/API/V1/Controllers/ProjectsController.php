<?php
namespace App\API\V1\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Dingo\Api\Exception\DeleteResourceFailedException;

/**
 * Projects API controller
 * @package App\API\V1\Controllers
 *
 * @Resource("Projects", uri="/api")
 */
class ProjectsController extends BaseController {

	/**
	 * Get all Projects
	 *
	 * Full projects list
	 *
	 * @Get("/projects")
	 * @Versions({"v1"})
	 * @Response(200, body={{"id":2,"name":"Some name","is_public":0,"created_at":"2020-01-19 13:21:04","updated_at":"2020-01-19 13:21:04"}})
	 *
	 * @return Project[]
	 */
	public function getAllProjects() {
		return Project::all();
	}

	/**
	 * Create Project
	 *
	 * Creates new project with the name
	 *
	 * @Post("/projects")
	 * @Versions({"v1"})
	 * @Transaction({
	 *     @Request({"name": "Some name", "is_public": false}),
	 *     @Response(200, body={"name":"Some name","is_public":false,"updated_at":"2020-01-19 13:21:04","created_at":"2020-01-19 13:21:04","id":2}),
	 *     @Response(422, body={"message":"Could not create new project.","errors":{"name":{"The name field is required."},"is_public":{"The is public field is required."}},"status_code":422}),
	 *     @Response(422, body={"message":"Could not create new project.","errors":{"is_public":{"The is public field must be true or false."}},"status_code":422}),
	 *     @Response(422, body={"message":"Could not create new project.","errors":{"name":{"The name may not be greater than 255 characters."}},"status_code":422})
	 * })
	 *
	 * @param Request $request
	 * @return Project
	 */
	public function createProject(Request $request) {
		$validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'is_public' => 'required|boolean'
		]);

		if ($validator->fails()) {
			throw new StoreResourceFailedException('Could not create new project.', $validator->errors());
		}

		$project = Project::create([
			'name' => $request->name,
			'is_public' => $request->is_public
		]);

		return $project;
	}

	/**
	 * Get certain Project
	 *
	 * Get certain Project by id
	 *
	 * @Post("/projects/{project_id}")
	 * @Versions({"v1"})
	 * @Transaction({
	 *     @Response(200, body={"name":"Some name","is_public":false,"updated_at":"2020-01-19 13:21:04","created_at":"2020-01-19 13:21:04","id":2}),
	 *     @Response(404, body={"message":"The project with the specified ID was not found","status_code":404})
	 * })
	 *
	 * @param int $id
	 * @return Project
	 */
	public function getProject(int $id) {
		$project = Project::find($id);
		if (!$project) {
			throw new NotFoundHttpException('The project with the specified ID was not found');
		}
		return $project;
	}

	/**
	 * Update Project data
	 *
	 * Find certain Project by ID and update its data.
	 * Partial fields set is allowed.
	 *
	 * @Put("/projects/{project_id}")
	 * @Versions({"v1"})
	 * @Transaction({
	 *     @Request({"name": "Some name 2", "is_public": false}),
	 *     @Response(200, body={"name":"Some name 2","is_public":false,"updated_at":"2020-01-19 13:25:04","created_at":"2020-01-19 13:21:04","id":2}),
	 *     @Response(404, body={"message":"The project with the specified ID was not found","status_code":404}),
	 *     @Response(400, body={"message":"No data to update specified!","status_code":400}),
	 *     @Response(422, body={"message":"Could not create new project.","errors":{"is_public":{"The is public field must be true or false."}},"status_code":422}),
	 *     @Response(422, body={"message":"Could not create new project.","errors":{"name":{"The name may not be greater than 255 characters."}},"status_code":422})
	 * })
	 *
	 * @param int $id
	 * @param Request $request
	 * @return Project
	 */
	public function updateProject(Request $request, int $id) {
		$project = Project::find( $id );
		if ( ! $project ) {
			throw new NotFoundHttpException( 'The project with the specified ID was not found' );
		}
		if ($request->hasAny(['name', 'email'])) {
			$validator = Validator::make( $request->all(), [
				'name'      => 'max:255',
				'is_public' => 'boolean'
			] );
			if ( $validator->fails() ) {
				throw new UpdateResourceFailedException( 'Could not update project!', $validator->errors() );
			}

			if ( $request->has( 'name' ) ) {
				$project->name = $request->name;
			}
			if ( $request->has( 'is_public' ) ) {
				$project->is_public = $request->is_public;
			}
			$project->save();
			return $project;
		}
		else {
			throw new BadRequestHttpException('No data to update specified!');
		}
	}

	/**
	 * Delete Project
	 *
	 * Find certain Project by ID and delete it.
	 *
	 * @Delete("/projects/{project_id}")
	 * @Versions({"v1"})
	 * @Transaction({
	 *     @Request({"name": "Some name 2", "is_public": false}),
	 *     @Response(204),
	 *     @Response(404, body={"message":"The project with the specified ID was not found","status_code":404})
	 * })
	 *
	 * @param int $id
	 * @return Response
	 */
	public function deleteProject(int $id) {
		$project = Project::find( $id );
		if ( ! $project ) {
			throw new NotFoundHttpException( 'The project with the specified ID was not found' );
		}
		try {
			$project->delete();
			return $this->response->noContent();
		}
		catch (\Exception $e) {
			throw new DeleteResourceFailedException('Could not delete project!', [$e->getMessage()]);
		}
	}

}