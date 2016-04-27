<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use org\bovigo\vfs\vfsStream;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class DummyController extends Controller
{

    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function customMethod(MyLibrary $myLib){
        // some code here
        // returns a json
        if($this->request->input('customcode') == 'ABCD' && $myLib->checkData() ){
            return response()->json(['message' => 'valid','status' => 'OK']);
        }else{
            return response()->json(['message' => 'invalid','status' => 'ERROR']);
        }
    }

    /**
     * Creating an asset , route to match /api/asset with POST
     */
    public function create()
    {
        try {
            dd(Input::file('files'));
            foreach(Input::file('files') as $file) {
                $file_path = '/tmp/' . $file->getClientOriginalName();
                $file->move($file_path);
                $data = [
                    'filename' => $file->getClientOriginalName(),
                    'type_id' => Input::get('type_id'),
                    'mimeType' => $file->getMimeType(),
                    'absolute_file_path' => $file_path,
                ];
                dd($data);
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
