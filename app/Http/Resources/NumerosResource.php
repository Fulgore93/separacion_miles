<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NumerosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'numero_string1'    => $this->numero_string1,
            'numero_string2'    => $this->numero_string2,
            'numero_float1'     => $this->numero_float1,
            'numero_float2'     => $this->numero_float2,
            'numero_int1'       => $this->numero_int1,
            'numero_int2'       => $this->numero_int1,
            'numero_double1'    => $this->numero_double1,
            'numero_double2'    => $this->numero_double2,
        ];
    }
}
