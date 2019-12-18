@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
  'type' => 'card',
  // 'wrapperClass' => 'col-sm-6 col-md-4', // optional
  // 'class' => 'card bg-dark text-white', // optional
  'content' => [
      'header' => 'Total Category', // optional
      'body' => \App\Models\Category::count(),
  ]
    ];
@endphp

@section('content')
@endsection