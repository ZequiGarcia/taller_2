<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property string $email
 * @property string $password
 * 
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nombre',
		'email',
		'password'
	];

	public function ventas():HasMany
	{
		return $this->hasMany(Venta::class, 'cliente');
	}
}
