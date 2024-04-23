<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/list_menu/{makanan}/{harga}', function ($makanan, $harga) {
    $menu = [
        [
            'makanan' => 'Bakso Solo',
            'harga' => 10000
        ],
        [
            'makanan' => 'Rawon Nguling',
            'harga' => 20000
        ],
        [
            'makanan' => 'Pecel Blitar',
            'harga' => 15000
        ]
    ];

    $foundMenu = collect($menu)->firstWhere('makanan', $makanan);
    if ($foundMenu && $foundMenu['harga'] == $harga) {
        return view('welcome',[
            
            'info' => 'data berhasil didapat',
            'makanan' => $foundMenu,
            'data' =>$menu
        ]);
    } else {
        return response()->json(['info' => 'Menu tidak ditemukan'], 404);
    }
});
