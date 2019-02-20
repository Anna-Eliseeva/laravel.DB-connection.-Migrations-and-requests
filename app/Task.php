<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Выводим значения из таблицы tasks где completad равен 0
 * Class Task
 * @package App
 */
class Task extends Model
{
    public static function incomplete() {
        return static::where('completad',0)->get();
    }
}
