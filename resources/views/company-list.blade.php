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
            <h1>Clientes</h1>
            <table>
            <thead>
            <tr>
                <th>&nbpsp;</th>
                <th>Name</th>
                <th>Type</th>
                <th>Document</th>
            </tr>
            </thead>

            <tbody>
            @foreach($companies as $company)
            <tr>
                <td>
                    <a href="{{ route('company_edit', ['id' => $company->id]) }}"><i class="material-icons">edit</i></a>
                    <a href="{{ route('company_delete', ['id' => $company->id]) }}"><i class="material-icons">delete</i></a>
                </td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->role }}</td>
                <td>{{ $company->document }}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    @stop