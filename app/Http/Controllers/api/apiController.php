<?php

namespace App\Http\ApiControllers;

use App\Http\Controllers\Controller;
use App\models\parameterInModel;
use App\models\parameterOutModel;
use Illuminate\Support\Facades\Input;

abstract class apiController extends Controller
{
    public $parameterIn;

    public $parameterOut;

    private $parameterInModel;

    private $parameterOutModel;

    private $tableNameBenchmark = '';//表名基准数

    private function init() {
        $this->parameterInModel = new parameterInModel();
        $this->parameterOutModel = new parameterOutModel();
        $this->parameterIn = Input::get();
        $this->parameterOut = '';
        $this->tableNameBenchmark = 1;
    }

    private function done() {
        //log
        echo json_encode($this->parameterOut);
    }

    public function __construct($className) {
        $this->init();
    }

    public function __destruct() {
        $this->done();
    }
}
