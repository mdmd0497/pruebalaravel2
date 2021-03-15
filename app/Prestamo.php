<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Prestamo extends Model
{
    protected $primaryKey = 'id_prestamo';
    protected $fillable = ['id_prestamo','casado','dependientes','educacion','independiente','i_d','i_c','c_p','p_p','historia_credito','tipo_propiedad'];
}


