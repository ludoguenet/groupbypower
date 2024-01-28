<?php

use App\Models\Donation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    dd(
//        DB::select("
//            SELECT AVG(total_amount)
//            FROM (
//                SELECT SUM(amount) as total_amount
//                FROM donations
//                GROUP BY user_id
//            )
//        ")
//    );


//    dd(
//        Donation::query()
//            ->selectRaw('SUM(amount) as total_amount')
//            ->groupBy('user_id')
//        ->get()
//        ->pluck('total_amount')
//    );

    return DB::table(function ($query) {
        $query->selectRaw('sum(amount) as total')
            ->from('donations')
            ->groupBy('user_id');
    }, 'donations')->avg('total');
});
