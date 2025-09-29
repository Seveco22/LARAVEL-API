<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Computer extends Model
{
    use HasFactory;

    protected $table = 'computers';
    protected $primaryKey = 'id_computer';
    public $timestamps = false; // Disable timestamps

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'computer_brand',
        'computer_model',
        'computer_price',
        'computer_ram_size',
        'computer_is_laptop',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'computer_price' => 'decimal:2',
        'computer_ram_size' => 'integer',
        'computer_is_laptop' => 'boolean',
    ];
}
