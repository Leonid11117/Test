<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\RandomNumber;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read RandomNumber $resource
 */
class RandomNumberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'value' => $this->resource->value
        ];
    }
}
