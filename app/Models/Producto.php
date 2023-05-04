<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Producto
 * 
 * @property string $codigo
 * @property string $nombre
 * @property string $descripcion
 * @property string|null $imagen
 * @property int $categoria
 * @property float $precio
 * @property int $existencias
 * 
 * @property Collection|LineasVentum[] $lineas_venta
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'categoria' => 'int',
		'precio' => 'float',
		'existencias' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'imagen',
		'categoria',
		'precio',
		'existencias'
	];

	public function categoria(): BelongsTo
	{
		return $this->belongsTo(Categoria::class, 'categoria');
	}

	public function lineas_venta():HasMany
	{
		return $this->hasMany(LineasVentum::class, 'codigo_producto');
	}
}
