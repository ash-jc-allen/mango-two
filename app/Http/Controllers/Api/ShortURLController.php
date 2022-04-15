<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreShortUrlRequest;
use App\Http\Resources\ShortURLResource;
use AshAllenDesign\ShortURL\Classes\Builder;
use AshAllenDesign\ShortURL\Exceptions\ShortURLException;

class ShortURLController extends Controller
{
    /**
     * Generate a short URL and then return its details.
     *
     * @param StoreShortUrlRequest $request
     * @return ShortURLResource
     * @throws ShortURLException
     */
    public function __invoke(StoreShortUrlRequest $request): ShortURLResource
    {
        ShortURLResource::withoutWrapping();

        return new ShortURLResource(
            app(Builder::class)->destinationUrl($request->destination_url)->make()
        );
    }
}
