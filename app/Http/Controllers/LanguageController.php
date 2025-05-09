<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        // Validation
        $request->validate([
            'locale' => 'required|string|in:en,fr', // Ajoutez d'autres langues au besoin
        ]);

        // Changer la langue
        app()->setLocale($request->locale);

        // Rediriger
        return back();
    }
}
