@extends('admin::layouts.admin.easy')

@section('meta')
@stop
@section('css')
@stop

@section('js')
@stop
@section('page_title')
    Управление доступом
@stop
@section('page_name')
    Управление доступом
@stop
@section('content')

    @inject('role','Pkg\EasyCms\Admin\Main\DataGrids\User\RolesDataGrid')

    {!! $role->render() !!}
@stop

@push('scripts')

@endpush
