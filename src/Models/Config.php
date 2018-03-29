<?php

namespace Acr\Acr_tasarla\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Config extends Model

{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $options;
    protected $table = 'Acr_tasarla_config';

}
