@extends('layouts.base')
@section('title', 'PhotoDetail')

@section('content')
<h1 style="font-size:40px; padding:50px 0 0.5em 0; border-bottom: 2px solid #dee7ec;">みんなでフォトアル！</h1>
  @if (empty($photo))
  <div class="col mt-3 mb-5">
    <span>写真が見つかりませんでした</span><br>
    <a href="{{ route('photos.index') }}" type="button" class="btn btn-link">アルバムに戻る</a>
  </div>
  @else
  <div>
    <div style="margin-top:2em;">
        @if (App::environment('local'))
            {{-- ローカル環境 --}}
            <img src="{{ asset('storage/avatar/'.$photo->filename) }}" width="40%">
        @else
            {{-- 本番環境 --}}
            <td><a href="{{ route('photos.show', $photo->id)}}"><img src="https://バケット名.s3.ap-northeast-1.amazonaws.com/{{ $photo->filename }}" width="40%"></a></td>
        @endif
    </div>
    <div style="font-size:18px; padding-top:20px">
         <p>photo by：{!! nl2br(e($photo->photoby)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>date：{!! nl2br(e($photo->date)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>location：{!! nl2br(e($photo->location)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>gear：{!! nl2br(e($photo->gear)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>lens：{!! nl2br(e($photo->lens)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>SS：{!! nl2br(e($photo->SS)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>F-number：{!! nl2br(e($photo->Fnumber)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>ISO：{!! nl2br(e($photo->ISO)) !!}</p>
    </div>
    <div style="font-size:18px;">
        <p>edit：{!! nl2br(e($photo->edit)) !!}</p>
    </div>
    <div class="mt-3 mb-5 text-center">
        <a href="{{ route('photos.index') }}" type="button" class="btn btn-link">アルバムに戻る</a>
    </div>
  </div>
  @endif
@endsection
