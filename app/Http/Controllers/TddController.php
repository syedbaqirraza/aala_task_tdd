<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TddController extends Controller
{
    public function isEven($value)
    {
        $checkType = gettype($value);
        if ($checkType == 'string') {
            return "This Function Expecting Number Value Given Is String ". $checkType;
        }
        else if($checkType == 'NULL')
        {
            return "This Function Expecting Number Value Given Is NULL ". $checkType;
        }
        else if($checkType == 'array')
        {
            return "This Function Expecting Number Value Given Is Array ". $checkType;
        }
        else if($checkType == 'double')
        {
            return "This Function Expecting Number Value Given Is Double ". $checkType;
        }
        else if($checkType == 'boolean')
        {
            return "This Function Expecting Number Value Given Is Boolean ". $checkType;
        }
        else {
            $isEven = $value % 2 == 0;
            if ($isEven == 1) {
                return 1;
            } else if ($isEven == 0) {
                return 0;
            }
        }
    }
}
