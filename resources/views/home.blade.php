@extends('layouts.app')

@section('content')
<b-container fluid>
    <b-row>
        <b-col cols="4">
            <b-form-input type="text"  class="text-center" placeholder="Buscar contacto"></b-form-input>

        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img blank rounded="circle" width="60" height="60" blank-color="#777" alt="img" class="m-1"></b-img>
            </b-col>
            <b-col cols="6" align-self="center" class="d-none d-md-block">
                <p class="mb-1">Nombre de la pipol</p>
                <p class="text-muted small mb-1">Último mensajisho</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block">
                <p class="text-muted small">2:35 p.m.</p>
            </b-col>

        </b-row>
        </b-col>



        <b-col cols="8">

        </b-col>
    </b-row>
</b-container>
@endsection
