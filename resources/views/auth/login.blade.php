@extends('layouts.app')

@section('content')
<main>
    <div class="valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col m8 offset-m2 s12">
                    <div class="card-panel">
                <h5 class="orange-text center">Login</h5>
                {{ Form::open(['route' => 'login', 'method' => 'post']) }}
                    <div class="input-field">
                        {{ Form::label('email', 'Correo Electrónico') }}
                        {{ Form::email('email', null) }}
                        @error ('email')
                            <span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-field">
                        {{ Form::label('password', 'Contraseña') }}
                        {{ Form::password('password', null) }}
                        @error ('password')
                            <span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <p>
                            <label>
                                {{ Form::checkbox('remember', null) }}
                                <span>Recordar</span>
                            </label>
                        </p>
                    </div>

                    <div class="input-field">
                        {{ Form::submit('Login', ['class' => 'btn btn-block blue']) }}
                    </div>
                {{ Form::close() }}
            </div>
                </div>
            </div>
            
        </div>
    </div>
</main>
@endsection
