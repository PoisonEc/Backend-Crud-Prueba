<?php

namespace App\Features\User\Controllers;

use App\Features\User\Actions\GetByIdUserAction;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class GetByIdUserController
{
    public function __invoke($id)
    {
        try {
            $action = new GetByIdUserAction();
            $record = $action->execute($id);

            return response()->json(
                $record->toArray(),
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
