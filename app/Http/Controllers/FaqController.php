<?php

namespace App\Http\Controllers;

use App\Models\Cennik;

class FaqController extends Controller
{
    public function showFaq()
    {
        // $files = scandir(public_path('/storage/cenniks'));
        // $files = array_diff($files, array('.', '..'));

        $codesCollection = Cennik::select('code')->whereNot('name', '=', 'default')->get();
        $codes = $codesCollection->pluck('code');

        return view('more.faq', compact('codes'));
    }

    // public function download(string $filename)
    // {
    //     $filePath = public_path('/storage/cenniks/' . $filename);

    //     if (file_exists($filePath)) {
    //         return response()->download($filePath);
    //     } else {
    //         abort(404);
    //     }
    // }
}
