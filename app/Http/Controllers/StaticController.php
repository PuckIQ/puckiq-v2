<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function getHome() {
        return view('static.home');
    }

    public function getAbout() {
        return view('static.about');
    }

    public function getGlossary() {
        return view('static.glossary');
    }
}
