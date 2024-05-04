@extends('layouts.base')
@section('title', 'PhotoDetail')

@section('content')
<h1 style="font-size:40px; padding:50px 0 0.5em 0; border-bottom: 2px solid #dee7ec;">みんなでフォトアル！</h1>
  {{-- @if (empty($photo))
  <div class="col mt-3 mb-5">
    <span>写真が見つかりませんでした</span><br>
    <a href="{{ route('photos.index') }}" type="button" class="btn btn-link">アルバムに戻る</a>
  </div>
  @else --}}
  <div>
    <div style="margin-top:2em;">
        {{-- <img src="{{ asset('storage/avatar/'.$photo->filename) }}" width="40%"> --}}
        <p>photosample</p>
    </div>
    <div style="font-size:18px; padding-top:20px">
         {{-- <p>photo by：{!! nl2br(e($photo->photoby)) !!}</p> --}}
         <p>photo by：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>date：{!! nl2br(e($photo->date)) !!}</p> --}}
        <p>date：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>location：{!! nl2br(e($photo->location)) !!}</p> --}}
        <p>location：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>gear：{!! nl2br(e($photo->gear)) !!}</p> --}}
        <p>gear：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>lens：{!! nl2br(e($photo->lens)) !!}</p> --}}
        <p>len：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>SS：{!! nl2br(e($photo->SS)) !!}</p> --}}
        <p>SS：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>F-number：{!! nl2br(e($photo->Fnumber)) !!}</p> --}}
        <p>F-number：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>ISO：{!! nl2br(e($photo->ISO)) !!}</p> --}}
        <p>ISO：</p>
    </div>
    <div style="font-size:18px;">
        {{-- <p>edit：{!! nl2br(e($photo->edit)) !!}</p> --}}
        <p>edit：</p>
    </div>
    <div class="mt-3 mb-5 text-center">
        {{-- <a href="{{ route('photos.index') }}" type="button" class="btn btn-link">アルバムに戻る</a> --}}
        <a href="./" type="button" class="btn btn-link">アルバムに戻る</a>
    </div>
  </div>
  {{-- @endif --}}
@endsection
