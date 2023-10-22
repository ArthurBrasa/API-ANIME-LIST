<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Pagination\LengthAwarePaginator;

class Anime extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title', 
        'synopsis',
        'release_date',
        'image_url'
    ];

    public function toArray()
    {
        $data = parent::toArray();

        // Verifique se a resposta é uma instância de LengthAwarePaginator (paginação)
        if ($this instanceof LengthAwarePaginator) {
            unset($data['links']); // Remove a chave "links" da resposta de paginação
        }

        return $data;
    }


    
}
