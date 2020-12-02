<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	$postdata = array(
    'callerKey' => 'PGAC0000000000000005',
    'callKey' => 'f32329ae5e1641baa78cddf357370b35dd361adb3d840b9b19495f751ffc3a1e',
    'callerReference' => '123456789',
    'walletNo' => '019266729007',
    'transactionId' => '4018092700001848'
    );

    $data = json_encode($postdata);



    return view('welcome', ['data'=>$data]);
});
