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
                {{ Form::open(array('url' => '/companies/create')) }}

                <div class="input-field col s8">
                {{ Form::label('name') }}
                {{ Form::text('name', $company->name ?? '') }}
                </div>
                
                <div class="input-field col s4">
                {{ Form::label('document') }}
                {{ Form::text('document', $company->document ?? '') }}
                </div>

                <div class="input-field col s6 pf">
                {{ Form::label('rg') }}
                {{ Form::text('rg', $company->rg ?? '') }}
                </div>

                <div class="input-field col s6 pf">
                {{ Form::label('data_nascimento') }}
                {{ Form::text('data_nascimento', $company->data_nascimento ?? '') }}
                </div>

                <div class="input-field col s8 pj">
                {{ Form::label('nome_fantasia') }}
                {{ Form::text('nome_fantasia', $company->nome_fantasia ?? '') }}
                </div>

                <div class="input-field col s4">
                {{ Form::select('role', ['' => 'Selecione um tipo', 'Empresa' => 'Empresa', 'Pessoa Fisica' => 'Pessoa Fisica'], '', ['id' => 'role']) }}
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
