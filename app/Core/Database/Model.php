<?php

namespace App\Core\Database;


class Model
{
    protected $table = null;

    protected $primaryKey;

    public function __construct()
    {
        if (is_null($this->table)) {
            $this->table = strtolower(get_class($this) . 's');
        }
    }
}