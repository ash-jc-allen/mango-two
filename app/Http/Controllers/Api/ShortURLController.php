<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShortURLResource;
use AshAllenDesign\ShortURL\Facades\ShortURL;
use Illuminate\Http\Request;

class ShortURLController extends Controller
{
    /**
     * Generate a short URL and then return its details.
     *
     * @param \Illuminate\Http\Request $request
     * @return ShortURLResource
     */
    public function __invoke(Request $request): ShortURLResource
    {
        $request->validate([
            'destination_url' => 'url|required',
        ]);

        ShortURLResource::withoutWrapping();

        return new ShortURLResource(
            ShortURL::destinationUrl($request->destination_url)->make()
        );
    }
}
