<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use AshAllenDesign\ShortURL\Facades\ShortURL;
use Illuminate\Http\Request;

class ShortURLController extends Controller
{
    /**
     * Generate a short URL and then return its details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // TODO Validate input.
        // TODO Return data in resource.

        $shortUrl = ShortURL::destinationUrl($request->destination_url)->make();
        dd($shortUrl);
    }
}
