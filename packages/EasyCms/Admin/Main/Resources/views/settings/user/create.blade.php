@extends('admin::layouts.admin.easy')

@section('meta')
@stop
@section('css')
@stop

@section('js')

@stop
@section('page_title')
    Создание нового пользователя
@stop
@section('page_name')
    <i class="icon angle-left-icon back-link"
       onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.settings.user') }}';"></i> Создание нового пользователя
@stop
@section('content')

    <div class="content">
        <form method="POST" action="{{ route('admin.settings.user.store') }}">
            <div class="page-header">


                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.form.save') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()
                    {{ $errors }}
                    <div slot="body">
                        <div class="control-group">
                            <label for="name" class="required">{{ __('admin::app.tables.users.name') }}</label>
                            <input type="text" class="control" id="name" name="name"
                                   value="{{ old('name') }}"/>

                            @if($errors->has('name'))
                                <span class="control-error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="control-group">
                            <label for="email" class="required">{{ __('admin::app.datagrid.email') }}</label>
                            <input type="text" class="control" id="email" name="email"
                                   value="{{ old('email') }}"/>
                            @if($errors->has('email'))
                                <span class="control-error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div slot="body">
                        <div class="control-group">
                            <label for="password">{{ __('admin::app.datagrid.password') }}</label>
                            <input type="password" class="control" id="password"
                                   name="password" ref="password"/>
                            @if($errors->has('password'))
                                <span class="control-error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="control-group">
                            <label
                                for="password_confirmation">{{ __('admin::app.datagrid.confirm-password') }}</label>
                            <input type="password" class="control"
                                   id="password_confirmation" name="password_confirmation"/>
                            @if($errors->has('password_confirmation'))
                                <span class="control-error">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>

                    <div slot="body">
                        <div class="control-group">
                            <label for="role" class="required">{{ __('admin::app.datagrid.role') }}</label>
                            <select class="control" name="role_id">
                                @foreach ($roles as $role)
                                    <option
                                        value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('role_id'))
                                <span class="control-error">{{ $errors->first('role_id') }}</span>
                            @endif
                        </div>

                        <div class="control-group">
                            <label for="status">{{ __('admin::app.datagrid.status') }}</label>
                            <label class="switch">
                                <input type="checkbox" id="status" name="status"
                                       value="1" {{ old('status') ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop

@push('scripts')
    <script>
        document.addEventListener('click', function (e) {
            switch (e.target.id) {
                case 'status':
                    const checbox = e.target;
                    console.log(checbox.checked)
                    if (checbox.checked){
                        checbox.setAttribute('value', '1')
                        break;
                    }
                    checbox.setAttribute('value', '0')

                    break;
            }
        })
    </script>
@endpush
