<?php

namespace App\Features\User\Controllers;

use App\Features\User\Actions\AddUserAction;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class AddUserController
{
    public function __invoke(Request $request)
    {
        try {
            $action = new AddUserAction();
            $record = $action->execute($request);

            return response()->json(
                $record->toArray(),
                HttpResponse::HTTP_CREATED
            );
        } catch (\Exception $exception) {
            return response()->json(
                ["errors" => $exception->getMessage()],
                HttpResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
