@extends('layouts.admin_layout')

@section('name', 'Аналог Trello')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="content">
                <div id="app">
                    <example-component></example-component>
                </div>
            </section>
        </div>
    </div>
</section>
<script src="{{ mix('js/app.js') }}" defer></script>
@endsection