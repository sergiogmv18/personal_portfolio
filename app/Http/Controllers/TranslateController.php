<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TranslateController extends Controller
{
   /*
    * Change translate 
    * @author SGV
    * @version 1.0 - 20230215 - initial release
    * @param <String> locale - code iso of language selected
    * @return <void>
    **/
    public function changeLanguage($request){
        $language = $request;
        $stringSuportLanguage = str_replace(["[", "]", "'"], "", env('SUPPORT_LANGUAGE'));
        $suportLanguage = explode(", ", $stringSuportLanguage);
        if($language != null && (in_array($language,$suportLanguage))){
            Session::put('locale', $language);
        }
        return redirect()->back();
    }
}
