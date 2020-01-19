FORMAT: 1A

# Stril API

# Projects [/api]
Projects API controller

## Get all Projects [GET /api/projects]
Full projects list

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": 2,
                    "name": "Some name",
                    "is_public": 0,
                    "created_at": "2020-01-19 13:21:04",
                    "updated_at": "2020-01-19 13:21:04"
                }
            ]

## Create Project [POST /api/projects]
Creates new project with the name

+ Request (application/json)
    + Body

            {
                "name": "Some name",
                "is_public": false
            }

+ Response 200 (application/json)
    + Body

            {
                "name": "Some name",
                "is_public": false,
                "updated_at": "2020-01-19 13:21:04",
                "created_at": "2020-01-19 13:21:04",
                "id": 2
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Could not create new project.",
                "errors": {
                    "name": [
                        "The name field is required."
                    ],
                    "is_public": [
                        "The is public field is required."
                    ]
                },
                "status_code": 422
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Could not create new project.",
                "errors": {
                    "is_public": [
                        "The is public field must be true or false."
                    ]
                },
                "status_code": 422
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Could not create new project.",
                "errors": {
                    "name": [
                        "The name may not be greater than 255 characters."
                    ]
                },
                "status_code": 422
            }

## Get certain Project [POST /api/projects/{project_id}]
Get certain Project by id

+ Response 200 (application/json)
    + Body

            {
                "name": "Some name",
                "is_public": false,
                "updated_at": "2020-01-19 13:21:04",
                "created_at": "2020-01-19 13:21:04",
                "id": 2
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "The project with the specified ID was not found",
                "status_code": 404
            }

## Update Project data [PUT /api/projects/{project_id}]
Find certain Project by ID and update its data.
Partial fields set is allowed.

+ Request (application/json)
    + Body

            {
                "name": "Some name 2",
                "is_public": false
            }

+ Response 200 (application/json)
    + Body

            {
                "name": "Some name 2",
                "is_public": false,
                "updated_at": "2020-01-19 13:25:04",
                "created_at": "2020-01-19 13:21:04",
                "id": 2
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "The project with the specified ID was not found",
                "status_code": 404
            }

+ Response 400 (application/json)
    + Body

            {
                "message": "No data to update specified!",
                "status_code": 400
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Could not create new project.",
                "errors": {
                    "is_public": [
                        "The is public field must be true or false."
                    ]
                },
                "status_code": 422
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Could not create new project.",
                "errors": {
                    "name": [
                        "The name may not be greater than 255 characters."
                    ]
                },
                "status_code": 422
            }

## Delete Project [DELETE /api/projects/{project_id}]
Find certain Project by ID and delete it.

+ Request (application/json)
    + Body

            {
                "name": "Some name 2",
                "is_public": false
            }

+ Response 204 (application/json)

+ Response 404 (application/json)
    + Body

            {
                "message": "The project with the specified ID was not found",
                "status_code": 404
            }

# ReleasesStatuses [/api]
Releases statuses API controller

## Get all ReleasesStatuses [GET /api/projects/{project_id}/releases/statuses]
Statuses list for the project releases (currently, all statuses are global)

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": 4,
                    "status": "Planned",
                    "is_closed": 0,
                    "created_at": "2020-01-17 10:14:02",
                    "updated_at": "2020-01-17 10:14:02"
                }
            ]

# FeaturesStatus [/api]
Features statuses API controller

## Get all FeaturesStatus [GET /api/projects/{project_id}/features/statuses]
Statuses list for the project features (currently, all statuses are global)

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": 4,
                    "status": "Planned",
                    "is_closed": 0,
                    "created_at": "2020-01-17 10:14:02",
                    "updated_at": "2020-01-17 10:14:02"
                }
            ]