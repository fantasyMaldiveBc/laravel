<?php

namespace App\Http\Controllers\api\tripline;

use App\Http\ApiControllers\apiController;
use App\Models\triplineModel;

class queryTriplineController extends apiController
{
    public $parameterIn;

    public $parameterOut;

    public function __construct() {
        $this->beforeFilter('tripline', array('on' => 'get|post'));
        $className = __CLASS__;
        parent::__construct($className);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function queryTriplineById($id)
    {
        $triplineModel = new triplineModel($id);
        $res = $triplineModel->queryTriplineById($id);
        $this->parameterOut = $res;
    }
}
