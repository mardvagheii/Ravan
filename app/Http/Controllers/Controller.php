<?php

namespace App\Http\Controllers;

use App\lib\Messages\FlashMessage;
use App\Models\Transaction;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Larabookir\Gateway\Exceptions\RetryException;
use Larabookir\Gateway\Gateway;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function Logout(Request $request)
    {
        $request->session()->flush();

        return redirect(route('Web.index'));
    }

    public function CKEDITOR(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = rand(100000, 999999) . '_' . time() . '.' . $extension;
            $request->file('upload')->move('uploads/ckeditor/', $fileName);
            $url = asset('/uploads/ckeditor') . '/' . $fileName;
            $response = [
                'uploaded' => 1,
                'filename' => $fileName,
                'url' => $url,
                'error' => ''
            ];
            @header('Content-type: text/html; charset=utf-8');
            return $response;
        }


    }
    function put_permanent_env($key, $value)
    {
        $path = app()->environmentFilePath();

        $escaped = preg_quote('=' . env($key), '/');

        file_put_contents($path, preg_replace(
            "/^{$key}{$escaped}/m",
            "{$key}={$value}",
            file_get_contents($path)
        ));
    }
}
