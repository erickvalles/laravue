@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">

        <b-col cols="8">
            <b-card class="my-3">
                <b-card-header>{{ __('Login') }}</b-card-header>

                <b-card-body>
                    <b-alert show>
                        Ingrese sus datos
                    </b-alert>
                    @if($errors->any())
                    <b-alert show variant="danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                        </ul>
                    </b-alert>
                    @endif
                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf

                        <b-form-group label="Correo electrónico"
                        label-for="email"
                        >
                            <b-form-input type="email"
                                          id="email"
                                          name="email"
                                          placeholder="correo@ejemplo.com"
                                          value="{{ old('email') }}"
                                          required
                                          autocomplete="email"
                                          autofocus></b-form-input>

                        </b-form-group>

                        <b-form-group
                        label="Contraseña"
                        label-for="password"
                        >
                            <b-form-input type="password"
                            id="password"
                            name="password"
                            required autocomplete="current-password"></b-form-input>
                        </b-form-group>

                        <b-form-group>
                            <b-form-checkbox name="remember"
                                {{ old('remember') ? 'checked="true"' : '' }}>Recordar mis datos</b-form-checkbox>

                        </b-form-group>


                            <b-button type="submit" variant="primary">Ingresar</b-button>
                            <b-button type="submit" variant="link">¿Olvidaste tu pw?</b-button>



                    </b-form>
                </b-card-body>
            </b-card>
        </b-col>

    </b-row>
</b-container>
@endsection
