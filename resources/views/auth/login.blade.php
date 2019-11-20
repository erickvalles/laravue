@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">

        <b-col cols="8">
            <b-card>
                <b-card-header>{{ __('Login') }}</b-card-header>

                <b-card-body>
                    <b-alert show>
                        Alerta sdssd
                    </b-alert>
                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf

                        <b-form-group label="Correo electrónico"
                        label-for="email"
                        description="dsssdds">
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
                        description="?dssdds">
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
