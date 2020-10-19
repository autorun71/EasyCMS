@extends('admin::layouts.admin.easy')

@section('meta')
@stop
@section('css')
@stop

@section('js')
@stop
@section('page_title')
    Основные настройки
@stop
@section('page_name')
    Основные настройки
@stop
@section('content')

    @inject('settings','Pkg\EasyCms\Admin\Main\DataGrids\Settings\SettingsDataGrid')

    {!! $settings->render() !!}
@stop

@push('scripts')

@endpush
