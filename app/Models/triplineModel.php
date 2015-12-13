<?php

namespace App\Models;

use App\Models\apiBaseModel;
use App\Models\commonFunctionModel;
use DB;

class triplineModel extends apiBaseModel
{
    protected $baseTableName = 'triplines';

    protected $table;

    public function __construct($id=0) {
        /**
         * The database table used by the model.
         *
         * @var string
         */
        $commonFunctionModel = new commonFunctionModel();
        $this->table = $commonFunctionModel->get_hash_table($this->baseTableName, $id);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tlname', 'tlname_en', 'categoryid', 'synopsis', 'itinerary', 'price', 'priceexplan'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function queryTriplineById($id) {
        //$tripline = DB::table($this->table)->where('id', '=', 1)->first();
        $res = DB::table($this->table)->find($id);
        return $res;
    }
}
