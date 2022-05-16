<?php

namespace App\Http\Resources\Contador;

use Illuminate\Http\Resources\Json\JsonResource;

class CompraResource extends JsonResource
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
            'numero de tarjeta' => $this->cardNumber,
            'calificacion' => $this->calificacion,
            'pago pendiente' => $this->a_pagar,
            'compra pagada' => $this->pagado,
            'compra valida' => $this->valida,
            'eliminado' => $this->deleted_at,
        ];
    }
}
