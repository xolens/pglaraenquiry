<?php

namespace Xolens\PgLaraenquery\App\Model;
use Illuminate\Database\Eloquent\Model;

use PgLaraenqueryCreateTableForm;


class Form extends Model
{

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description', 
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;
    
    function __construct(array $attributes = []) {
        $this->table = PgLaraenqueryCreateTableForm::table();
        parent::__construct($attributes);
    }
}