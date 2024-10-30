<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 'active';
    const STATUS_NOACTIVE = 'noactive';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_lote',
        'code',
        'name',
        'avatar',
        'brand_id', // marca
        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'video_path1',
        'container_id', //envase
        'details1',
        'details2',        
        'description',
        'price1',
        'price2',
        'price', //precio al detal
        'profit_price', // porcentaje de ganancia
        'price_mayor', //precio al mayor
        'profit_mayor', // porcentaje de ganancia
        'price_offer', //precio de oferta
        'profit_offer', // porcentaje de ganancia
        'price_divisa', //precio del dolar cuando se adquirió
        'delivery', // Si o No
        'shipping_cost', // costo de envio
        'stock_min',
        'stock_max',
        'stock', // cant en almacen
        'user_id',
        'comercio_id',
        'category_id',
        'subcategory_id',
        'subcategory_id',
        'supplier_id', //proveedor
        'afiliado_id',
        'pack_products_id',
        'pack_price',
        'tx_peso',
        'tx_tamanio',
        'tx_presentacion',
        'tx_tamanio_carga',
        'tx_tamanio_venta',
        'tx_contornos',
        'tx_contiene',
        'fe_vencimiento',
        'fe_expedicion',
        'in_pedido',
        'tx_adicionales',
        'tx_alergenos',
        'in_envio_gratis',
        'in_oferta',
        'tx_datos_vencimiento',
        'tx_valores_nutricionales',
        'tx_conservacion',
        'tx_recomendacion_consumo',
        'tx_envase_enbalaje',
        'in_fragil',
        'in_por_encargo',
        'in_olor_fuerte',
        'ca_valoracion',
        'tx_vencimiento',
        'in_valido'
    ];

    protected $appends = [
        'avatar_url',
    ];

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && Storage::disk('avatarsproducts')->exists($this->avatar)) {   
            return Storage::disk('avatarsproducts')->url($this->avatar);
        }
        return asset('noimage.png');
    }
}
