@extends('layouts.app')

@section('content')
    <b-container>
        <b-row align-h="center">

            <b-col cols="8">
                <b-card class="my-3">
                <div class="card-header">{{ __('Register') }}</div>


                    <b-card-body>
                        <b-alert show>
                            Alerta sdssd
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
                        <b-form method="POST" action="{{ route('register') }}">
                            @csrf

                            <b-form-group label="Nombre"
                                          label-for="name"
                                          description="dsssdds">
                                <b-form-input type="text"
                                              id="name"
                                              name="name"
                                              placeholder="tu nombre"
                                              value="{{ old('name') }}"
                                              required
                                              autocomplete="name"
                                              autofocus></b-form-input>

                            </b-form-group>

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
                            <b-form-group
                                label="Confirma tu contraseña"
                                label-for="password_confirmation"
                                description="?dssdds">
                                <b-form-input type="password"
                                              id="password_confirmation"
                                              name="password_confirmation"
                                              required autocomplete="current-password"></b-form-input>
                            </b-form-group>




                            <b-button type="submit" variant="primary">Registrarme</b-button>
                            <b-button type="submit" variant="link" href="{{route('login')}}">¿ya estás registrado? Inicia sesión</b-button>




                        </b-form>
                    </b-card-body>

                </b-card>
            </b-col>

        </b-row>
    </b-container>
@endsection
