<?php

namespace App\Http\Resources\Supervisor;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'existencias' => $this->existencias,
            'description' => $this->description,
            'usuario_id' => $this->usuario_id,
            'consignacion_id' => $this->consignacion_id,
            'eliminado' => $this->deleted_at,
        ];
    }
}
