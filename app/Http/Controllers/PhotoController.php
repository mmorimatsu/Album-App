<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('photos.index',[
            'photos' => Photo::all(),
        ]);
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

        // Modelを作成
        $Photo = new Photo;
        if (app()->isLocal()) {
            // ローカル環境
            $image_path = $validatedData['photo']->store('public/avatar/');
            $Photo ->filename = basename($image_path);
        } else {
            // 本番環境
            $image = $request->file('photo');
            $image_path = Storage::disk('s3')->putFile('/', $image, 'public');
            $Photo ->filename = $image_path;
        }
        $Photo ->photoby = $validatedData['photoby'];
        $Photo ->date = $validatedData['date'];
        $Photo ->location = $validatedData['location'];
        $Photo ->gear = $validatedData['gear'];
        $Photo ->lens = $validatedData['lens'];
        $Photo ->SS = $validatedData['SS'];
        $Photo ->Fnumber = $validatedData['F-number'];
        $Photo ->ISO = $validatedData['ISO'];
        $Photo ->edit = $validatedData['edit'];

        // ModelをDBに保存
        $Photo->save();

        // 一覧ページを表示
        // ※ リロードされたときに、もう一度データが保存されないようにリダイレクトさせる
        return redirect(route('photos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('photos.show', [
            'photo' => Photo::find($id)
        ]);
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
