<?php

namespace App\Controllers;

class Faskes extends BaseController
{
    public function faskes(): string
    {
        return view('faskes/faskes');
    }

    public function form_faskes(): string
    {
        return view('faskes/form_faskes');
    }

    public function faskes_pkm(): string
    {
        return view('faskes/faskes_pkm');
    }
}