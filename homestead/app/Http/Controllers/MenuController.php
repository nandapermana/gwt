<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MenuController extends Controller
{
    public function index()
    {
    	return view('menu.index');
    }

    public function menu()
    {
    	return view('menu.menu');
    }

    public function about()
    {
    	return view('menu.about');
    }

    public function audit()
    {
    	return view('menu.audit');
    }

    public function organisasi()
    {
    	return view('menu.organisasi');
    }

    public function harga()
    {
    	return view('menu.harga');
    }

    public function client()
    {
    	return view('menu.client');
    }

    public function kontak()
    {
    	return view('menu.kontak');
    }

    public function post()
    {

    }
}
