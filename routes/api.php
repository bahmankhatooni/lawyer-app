<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::post('/echo', function (Request $request) {
    $name = $request->input('name');
    return response()->json([
        'message' => "سلام، مقدار دریافتی: {$name}"
    ]);
});
//********************************** Clients Route **********************************
//ایجاد موکل
Route::post('/store-client',[ClientController::class,'store']);
// نمایش لیست موکلین
Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index']);
// ویرایش موکل
Route::put('/update-client/{id}', [ClientController::class, 'update']);
// حذف موکل
Route::delete('/delete-client/{id}', [ClientController::class, 'destroy']);




Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::get('/tasks', function () {
    return response()->json([
        ['id' => 1, 'title' => 'Finish report'],
        ['id' => 2, 'title' => 'Meeting with client'],
        ['id' => 3, 'title' => 'Review contracts'],
    ]);
});





Route::post('/tasks', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'message' => 'Task received successfully!',
        'data' => $request->all(),
    ]);
});


