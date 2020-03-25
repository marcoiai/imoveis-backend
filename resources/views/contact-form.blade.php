@extends('layouts.master')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <div class="row">
            <div class="col s12">
            <h1>Contato</h1>

            @if (count($errors) > 0)
                <div class="card-panel red lighten-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                {{ Form::open(array('url' => "/contacts/create/$id")) }}
                {!! csrf_field() !!}
                {{ Form::hidden('id', $id) }}

                <div class="input-field col s8">
                {{ Form::label('name') }}
                {{ Form::text('name', $contact->name ?? '') }}
                </div>

                <div class="input-field col s8">
                {{ Form::label('Telefone') }}
                {{ Form::text('telefones', $contact->telefones ?? '') }}
                </div>

                <div class="input-field col s4">
                {{ Form::select('empresa_id', $companies, $contact->empresa_id ?? null, ['placeholder' => 'Selecione uma Empresa']) }}
                </div>

                <input type="submit" class="btn" value="Salvar" />

                {{ Form::close() }}
                </div>
                </div>
                </div>
            </div>
        </div>
    @stop

    <script>
        // inicia os selects do Materialize
        window.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, []);
        });
        
        document.querySelector('#role').addEventListener('change', function () {
            if (this.value === 'Empresa')
            {
                document.querySelectorAll('.pf').forEach(function (el) {
                    el.style.display = 'none'
                })

                document.querySelectorAll('.pj').forEach(function (el) {
                    el.style.display = 'block'
                })
            } else {
                document.querySelectorAll('.pj').forEach(function (el) {
                    el.style.display = 'none'
                })

                document.querySelectorAll('.pf').forEach(function (el) {
                    el.style.display = 'block'
                })
            }
        })
    </script>
</html>
