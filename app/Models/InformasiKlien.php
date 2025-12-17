<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKlien extends Model
{
    use HasFactory;

    /**
     * Explicit table name to match migration.
     *
     * @var string
     */
    protected $table = 'informasi_klien';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'nomorWA',
        'jabatan',
        'industri',
        'kota',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            //
        ];
    }
}
