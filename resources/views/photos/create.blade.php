@extends('layouts.base')
@section('title', 'PhotoUpload')

@section('content')
    <h1 style="font-size:40px; padding:50px 0 0.5em 0; border-bottom: 2px solid #dee7ec;">みんなでフォトアル！</h1>
    <h1 style="font-size:30px; margin-top:30px;">写真のアップロード</h1>
    <br>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    {{-- <form method="post" action="{{ route('photos.index') }}" enctype="multipart/form-data"> --}}
    <form method="POST" action="">
        @csrf
        <h3 style="font-size:24px; margin-top:5px;">写真の選択</h3>
        <div class="form-group">
            <input type="file" name="photo">
        </div>
        <h3 style="font-size:24px; margin-top:20px;">撮影者：photo by</h3>
        <div class="form-group">
            <textarea name="photoby" class="form-control @error('photoby') is-invalid @enderror" id="questionTextarea" rows="1">{{ old('photoby') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">撮影日：date</h3>
        <div class="form-group">
            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
        </div>
        <h3 style="font-size:24px; margin-top:20px;">撮影場所：location</h3>
        <div class="form-group">
            <textarea name="location" class="form-control" id="questionTextarea" rows="1">{{ old('location') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">使用カメラ：gear</h3>
        <div class="form-group">
            <textarea name="gear" class="form-control" id="questionTextarea" rows="1">{{ old('gear') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">使用レンズ：lens</h3>
        <div class="form-group">
            <textarea name="lens" class="form-control" id="questionTextarea" rows="1">{{ old('lens') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">シャッタースピード：SS</h3>
        <div class="form-group">
            <textarea name="SS" class="form-control" id="questionTextarea" rows="1">{{ old('SS') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">F値：F-number</h3>
        <div class="form-group">
            <textarea name="F-number" class="form-control" id="questionTextarea" rows="1">{{ old('F-number') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">ISO</h3>
        <div class="form-group">
            <textarea name="ISO" class="form-control" id="questionTextarea" rows="1">{{ old('ISO') }}</textarea>
        </div>
        <h3 style="font-size:24px; margin-top:20px;">編集ツール：edit</h3>
        <div class="form-group">
            <textarea name="edit" class="form-control" id="questionTextarea" rows="1">{{ old('edit') }}</textarea>
        </div>
        <div class="mt-3 mb-5">
            <button type="submit" class="btn btn-primary">アップロード</button>
            {{-- <a href="{{ route('photos.index') }}" type="button" class="btn btn-link">戻る</a> --}}
            <a href="./" type="button" class="btn btn-link">戻る</a>
        </div>
    </form>

@endsection
