<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RoadmapController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param User $user
     * @return JsonResource
     */
    public function __invoke(User $user): JsonResource
    {
        return new UserResource($user);
    }
}
