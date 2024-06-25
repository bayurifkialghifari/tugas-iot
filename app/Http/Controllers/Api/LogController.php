<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LogRequest;
use App\Models\LogKebocoran;

class LogController extends Controller
{
    public function __invoke(LogRequest $request) {
        $data = $request->validated();

        $log = LogKebocoran::create($data);

        return $this->respondWithSuccess($log);
    }
}
