<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Venta
 * 
 * @property int $id
 * @property Carbon $fecha
 * @property float $total
 * @property int $cliente
 * 
 * @property Collection|LineasVentum[] $lineas_venta
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'total' => 'float',
		'cliente' => 'int'
	];

	protected $fillable = [
		'fecha',
		'total',
		'cliente'
	];

	public function cliente(): BelongsTo
	{
		return $this->belongsTo(Cliente::class, 'cliente');
	}

	public function lineas_venta():HasMany
	{
		return $this->hasMany(LineasVentum::class, 'id_venta');
	}
}
