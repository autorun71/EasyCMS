@extends('admin::layouts.admin.easy')

@section('meta')
@stop
@section('css')
@stop

@section('js')
@stop
@section('page_title')
    Учетные записи
@stop
@section('page_name')
    Учетные записи
@stop
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-action">
                <a href="{{ route('admin.settings.user.create') }}" class="btn btn-lg btn-primary">
                    {{ __('admin::app.form.create') }}
                </a>
            </div>
        </div>

        <div class="page-content">

            @inject('user','Pkg\EasyCms\Admin\Main\DataGrids\User\UserDataGrid')

            {!! $user->render() !!}
            {{-- <datetime></datetime> --}}
        </div>
    </div>

@stop

@push('scripts')

@endpush
