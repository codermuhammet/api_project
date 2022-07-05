<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $eposta
 * @property string $sifre
 * @property string $ad_soyad
 * @property string $telefon
 * @property int $il
 * @property int $ilce
 * @property int $tarih
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdSoyad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEposta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIlce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSifre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTarih($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelefon($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table="kullanicilar";

    public $timestamps=false;

    protected $fillable = [
        'ad_soyad',
        'eposta',
        'sifre',
        'telefon',
        'il',
        'ilce',
        'tarih'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city(){
        return $this->hasOne(City::class,'id','il');
    }

    public function district(){
        return $this->hasOne(District::class,'id','ilce');
    }
}
