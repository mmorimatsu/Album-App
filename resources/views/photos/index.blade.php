@extends('layouts.base')
@section('title', 'PhotoAlbum')

@section('content')
  <h1 style="font-size:40px; padding:50px 0 0.5em 0; border-bottom: 2px solid #dee7ec;">みんなでフォトアル！</h1>
  <div class="row mt-5 mb-3">
    <div class="col text-right">
      {{-- <a href="{{ route('photos.create') }}" type="button" class="btn btn-primary">アップロード</a> --}}
      <a href="{{ route('photos.create') }}" type="button" class="btn btn-primary">アップロード</a>
    </div>
  </div>
  <div class="row my-3">
    <table class="table" id="photos-table">
        <thead class="thead-light">
          <tr>
            {{-- <th scope="col" style="width:10%">#</th> --}}
            <th scope="col" width="40%">photo</th>
            <th scope="col">photo by</th>
            <th scope="col">date</th>
            <th scope="col">location</th>
          </tr>
        </thead>
        <tbody>
            {{-- @foreach($photos as $photo) --}}
            <tr>
                {{-- <!-- <td><a href="{{ route('photos.show', $photo->id)}}"><img src="{{ asset('storage/avatar/'.$photo->filename) }}" width="60%"></a></td>
                <td>{{ $photo->photoby }}</td>
                <td>{{ $photo->date }}</td>
                <td>{{ $photo->location }}</td> --> --}}
                <td><a href="{{ route('photos.show', 1)}}">写真1</td>
                <td>hogehoge</td>
                <td>9999-99-99</td>
                <td>hoge</td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
  </div>
@endsection
