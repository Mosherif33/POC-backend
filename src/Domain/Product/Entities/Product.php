<?php

namespace Src\Domain\Product\Entities;

use Src\Infrastructure\AbstractModels\BaseModel as Model;
use Src\Domain\Product\Entities\Traits\Relations\ProductRelations;
use Src\Domain\Product\Entities\Traits\CustomAttributes\ProductAttributes;
use Src\Domain\Product\Repositories\Contracts\ProductRepository;

class Product extends Model
{
    use ProductRelations, ProductAttributes;

    /**
     * @var array
     */
    public static $logAttributes = ["*"];

    /**
     * The attributes that are going to be logged.
     *
     * @var array
     */
    protected static $logName = 'Product';

    /**
     * define belongsTo relations.
     *
     * @var array
     */
    private $belongsTo = [];

    /**
     * define hasMany relations.
     *
     * @var array
     */
    private $hasMany = [];

    /**
     * define belongsToMany relations.
     *
     * @var array
     */
    private $belongsToMany = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The table name.
     *
     * @var array
     */
    protected $table = "products";

    /**
     * Holds Repository Related to current Model.
     *
     * @var array
     */
    protected $routeRepoBinding = ProductRepository::class;
}
