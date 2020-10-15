@extends('tmpl::layouts.site.easy')
@section('meta')
    <meta name="test" content="test_content">
@endsection
@section('css')
    <style>
        .example {
            color: green;
            font-size: 32px;
        }
    </style>
@endsection
@section('js')
    <script>
        console.log('ExamplePage::run()')
    </script>
@endsection


@section('content')
    <div class="example">Hello, I'm Example Page!</div>
@endsection
