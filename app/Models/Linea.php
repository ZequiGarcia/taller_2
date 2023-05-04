<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class LineasVentum
 * 
 * @property int $id_venta
 * @property string $codigo_producto
 * @property int $cantidad
 * @property float $precio_unitario
 * 
 * @property Venta $venta
 * @property Producto $producto
 *
 * @package App\Models
 */
class Linea extends Model
{
	protected $table = 'lineas_venta';
	protected $primaryKey = 'id_venta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_venta' => 'int',
		'cantidad' => 'int',
		'precio_unitario' => 'float'
	];

	protected $fillable = [
		'cantidad',
		'precio_unitario'
	];

	public function venta(): BelongsTo
	{
		return $this->belongsTo(Venta::class, 'id_venta');
	}

	public function producto(): BelongsTo
	{
		return $this->belongsTo(Producto::class, 'codigo_producto');
	}
}
