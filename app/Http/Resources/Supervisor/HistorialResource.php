<?php

namespace App\Http\Resources\Supervisor;

use Illuminate\Http\Resources\Json\JsonResource;

class HistorialResource extends JsonResource
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
            'email' => $this->email,
            'rol' => $this->roles,
            'compras' => $this->compras_count,
            'ventas' => $this->ventas_count,
            'productos consignados' => $this->productos_consignados_count,
            'productos comprados' => $this->productos_comprados_count,
            'productos existentes' => $this->productos_existentes_count,
        ];
    }
}
