<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicos extends Model
{
	protected $fillable = [
        'name', 'fornecedor', 'description', 'destino' , 'cheque', 'valor'
    ];

 protected $table = 'servicos';

}
