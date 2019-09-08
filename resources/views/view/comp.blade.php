@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
    @component('components.alert', [ 'type' => 'success' ])
        @slot('alert_title')
            はじめてのコンポーネント
        @endslot
        コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
    @endcomponent
@endsection

<!-- @include('components.alert', [
    'type' => 'success',
    'alert_title' => 'はじめてのコンポーネント',
    'slot' => 'コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！',
  ]) -->
