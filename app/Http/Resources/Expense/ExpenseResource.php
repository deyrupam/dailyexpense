<?php

namespace App\Http\Resources\Expense;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);
      return [
        'transaction'=>$this->transaction,
        'price'=>$this->price,
        'date_purchase'=>$this->date_purchase,
        'note'=>$this->note,
        'user_id'=>$this->user_id

    ];
    }
}
