<?php


trait Helper
{
    public $model = '';

    public function returnData($state = 2000, $result = null, $message = null){
        $data = [];

        if($state){
            $data['status'] = $state;
        }
        if($result){
            $data['result'] = $result;
        }
        if($message){
            $data['message'] = $message;
        }

        return response()->json($data);
    }
}