<?php

namespace App\Features\User\Controllers;

use App\Features\User\Actions\GetUsersAction;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class GetUsersController
{
    public function __invoke()
    {
        try {
            $action = new GetUsersAction();
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
