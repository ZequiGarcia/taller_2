<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Categoria
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function productos():HasMany
	{
		return $this->hasMany(Producto::class, 'categoria');
	}
}
