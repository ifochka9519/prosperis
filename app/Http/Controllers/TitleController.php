<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function saveTitle(Request $request)
    {
        $title = Title::find($request['id']);

        $title->text = $request['text'];
        $title->description = $request['description'];

        $title->save();
    }
}
