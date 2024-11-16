<?php

namespace App\Features\JobTitle\Controllers;

use App\Features\JobTitle\Actions\GetJobTitleAction;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class GetJobTitleController
{
    public function __invoke()
    {
        try {
            $action = new GetJobTitleAction();
            $records = $action->execute();

            return response()->json(
                $records,
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
