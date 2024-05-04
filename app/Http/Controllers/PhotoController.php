<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('photos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 入力内容のチェック
        // ルールに一致しない入力の場合は、自動的に入力画面を表示させる
        $validatedData = $request->validate([
            'photo' => 'required|file|max:100000|mimes:jpg,jpeg,bmp,png',
            'photoby' => 'required|max:255',
            'date' => 'max:255',
            'location' => 'max:255',
            'gear' => 'max:255',
            'lens' => 'max:255',
            'SS' => 'max:255',
            'F-number' => 'max:255',
            'ISO' => 'max:255',
            'edit' => 'max:255',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('photos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
