<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
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
        'user_id',
        'comercio_id',
        'area_id',
        'category_id',
        'subcategory_id',
        'subcategories',
        'supplier_id', //proveedor

        'code_lote',
        'code',
        'name',
        'manufacturer_id', //Fabricante
        'brand_id',
        'model_id',
        'motor_id',
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
        'madein',
        'in_pedido',
        'tx_adicionales',
        'tx_alergenos',
        'in_envio_gratis',
        'in_offer',
        'tx_datos_vencimiento',
        'tx_valores_nutricionales',
        'tx_conservacion',
        'tx_recomendacion_consumo',
        'tx_envase_embalaje',
        'in_fragil',
        'in_por_encargo',
        'in_olor_fuerte',
        'ca_valoracion',
        'tx_vencimiento',
        'in_valido',
        'in_combo',
        'userCreated_at',
        'userUpdated_at',
    ];

    protected $appends = [
        'avatar_url',
        'image1_url',
        'image2_url',
        'image3_url',
        'image4_url',
    ];

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && Storage::disk('avatarsproducts')->exists($this->avatar)) {   
            return Storage::disk('avatarsproducts')->url($this->avatar);
        }
        return asset('noimage.png');
    }

    public function getImage1UrlAttribute()
    {
        if ($this->image_path1 && Storage::disk('avatarsproducts')->exists($this->image_path1)) {   
            return Storage::disk('avatarsproducts')->url($this->image_path1);
        }
        return asset('noimage.png');
    }

    public function getImage2UrlAttribute()
    {
        if ($this->image_path2 && Storage::disk('avatarsproducts')->exists($this->image_path2)) {   
            return Storage::disk('avatarsproducts')->url($this->image_path2);
        }
        return asset('noimage.png');
    }

    public function getImage3UrlAttribute()
    {
        if ($this->image_path3 && Storage::disk('avatarsproducts')->exists($this->image_path3)) {   
            return Storage::disk('avatarsproducts')->url($this->image_path3);
        }
        return asset('noimage.png');
    }

    public function getImage4UrlAttribute()
    {
        if ($this->image_path4 && Storage::disk('avatarsproducts')->exists($this->image_path4)) {   
            return Storage::disk('avatarsproducts')->url($this->image_path4);
        }
        return asset('noimage.png');
    }

    public function getPrice1()
    {
        $settings = Setting::where('user_id', $this->user_id)->first();

        $tasaValues = Tasa::where('user_id', $this->user_id)->first();

        if(!$tasaValues){
            $tasa = 1;
        }else{
            $tasa = $tasaValues->tasa;
        }

        switch ($settings->currency) {
            case 'Bs':
                return round($tasa * $this->price1, 2);
                break;            
            case '$':
                return round($this->price1, 2);
                break;
            case '€':
                return 0;
                break;
        }
    }

    public function getPrice_offer()
    {
        $settings = Setting::where('user_id', $this->user_id)->first();

        $tasaValues = Tasa::where('user_id', $this->user_id)->first();

        if(!$tasaValues){
            $tasa = 1;
        }else{
            $tasa = $tasaValues->tasa;
        }

        switch ($settings->currency) {
            case 'Bs':
                return round($tasa * $this->price_offer, 2);
                break;            
            case '$':
                return round($this->price_offer, 2);
                break;
            case '€':
                return 0;
                break;
        }
    }

    public function comercio()
    {
        return $this->hasOne(Comercio::class, 'id', 'comercio_id');
    }

    public function showSubcategories()
    {
        $categorias = CategoriesProduct::where('product_id', $this->id)->where('comercio_id', $this->comercio_id)->get();
        return $categorias;
        
    }

    public function showProducts()
    {
        $products = ProductsCombo::where('product_id', $this->id)->where('comercio_id', $this->comercio_id)->get();
        return $products;
        
    }

    public function valoracionProduct()
    {
        return $this->hasOne(ValoracionProduct::class, 'product_id', 'id')->withDefault([
            'ca_valoracion' => '0',
            'class' => 'star',
            'comment' => '',
        ]);
    }

    public function manufacturer()
    {
        return $this->hasOne(Manufacturer::class, 'manufacturer_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'subcategory_id', 'id');
    }
}
