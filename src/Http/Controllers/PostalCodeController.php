<?php

namespace App\Http\Controllers;

class BuildingController extends Controller
{
    public function search(Request $request): array
    {
        return [
            'prefecture' => 'prefecture',
            'city' => 'city',
            'address' => 'address',
        ];
    }
}