<?php

namespace App\Features\Department\Controllers;

use App\Features\Department\Actions\GetDepartmentsAction;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class GetDepartmentsController
{
    public function __invoke()
    {
        try {
            $action = new GetDepartmentsAction();
            $records = $action->execute();

            return response()->json(
                $records->toArray(),
                HttpResponse::HTTP_OK
            );
        } catch (\Exception $exception) {
            return response()->json(
                ["errors" => $exception->getMessage()],
                HttpResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
