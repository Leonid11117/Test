<?php

namespace App\Http\Controllers\RandomNumber;

use App\Models\RandomNumber;
use App\Http\Controllers\Controller;
use App\Http\Resources\RandomNumberResource;

final class RandomNumberController extends Controller
{
    /**
     * @throws \Exception
     * @throws \Throwable
     */
    public function generate(): RandomNumberResource
    {
        $randomNumber = new RandomNumber();

        $randomNumber->fill([
            'value' => random_int(1, 1000),
        ]);

        $randomNumber->saveOrFail();

        return RandomNumberResource::make($randomNumber);
    }

    /**
     * @param int $id
     *
     * @return RandomNumberResource
     */
    public function retrieve(int $id): RandomNumberResource
    {
        $randomNumber = RandomNumber::query()->where('id', '=', $id)->firstOrFail();

        return RandomNumberResource::make($randomNumber);
    }
}
