<?php

namespace App\Repositories;

use App\Core\App;
use Carbon\Carbon;

class SaleRepository
{
    public function between(Carbon $begin, Carbon $end)
    {
        return App::get('database')->allRowsCountFrom('users');
    }
}