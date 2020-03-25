@extends('layouts.master')

@section('content')
		
    </head>
    <body>
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
            <h1>Contatos</h1>
            <table>
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Name</th>
                <th>Empresa</th>
                <th>Telefone</th>
            </tr>
            </thead>

            <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>
                    <a href="{{ route('contact_edit', ['id' => $contact->id]) }}"><i class="material-icons">edit</i></a>
                    <a href="{{ route('contact_delete', ['id' => $contact->id]) }}"><i class="material-icons">delete</i></a>
                </td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->empresa_id }}</td>
                <td>{{ $contact->telefones }}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
            
            <div class="fixed-action-btn">
            <a class="btn-floating btn-large red" href="{{ route('contact_edit') }}">
                <i class="large material-icons">add</i>
            </a>
            </div>
                
        </div>
    @stop