<?php

namespace App\Features\User\Controllers;

use App\Features\User\Actions\DeleteUserAction;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class DeleteUserController
{
    public function __invoke($id)
    {
        try {
            $action = new DeleteUserAction();
            $action->execute($id);

            return response()->json(
                HttpResponse::HTTP_NO_CONTENT
            );
        } catch (\Exception $exception) {
            return response()->json(
                ["errors" => $exception->getMessage()],
                HttpResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
