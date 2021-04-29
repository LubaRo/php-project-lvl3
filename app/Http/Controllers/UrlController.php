<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request)
    {
        $urlData = $request->input('url');

        $url = new Url();
        $url->name = $urlData['name'];
        $url->save();

        return redirect()->route('urlsList', ['url' => $url->id]);
    }
}
