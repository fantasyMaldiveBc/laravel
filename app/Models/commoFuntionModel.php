<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commonFunctionModel extends Model
{
    /**
     * 获取hash表名方法
     *
     * @param string $baseTableName 基础表名称
     * @param string $id 改造表名称的主键id
     * @result string $res hash后的表名
     */
    public function get_hash_table($baseTableName, $id) {
        $str = crc32($id);
        if($str<0){
            $hash = "0".substr(abs($str), 0, 1);
        }else{
            $hash = substr($str, 0, 2);
        }
        return $baseTableName."_".$hash;
    }
}
