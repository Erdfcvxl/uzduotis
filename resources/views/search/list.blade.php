@extends('..layouts.main')

@section('title', '')

@include('search._sidebar')

@section('content')
    <div id="filters-top" class="row">
        <div class="col-xs-12 panel">
            <h1 class="text-uppercase text-center">Sukneles</h1>

            <div class="row">
                <div class="col-md-5ths">
                    <a>Visos</a>
                    <a>Visos</a>
                    <a>Visos</a>
                </div>
                <div class="col-md-5ths">
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                </div>
                <div class="col-md-5ths">
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                </div>
                <div class="col-md-5ths">
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                </div>
                <div class="col-md-5ths">
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                    <a>Ilgos</a>
                </div>
            </div>
        </div>
    </div>

    <div id="results" class="row">
        @include('search._result', ['items' => $items])
    </div>

@endsection