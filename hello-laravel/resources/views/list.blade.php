@extends('templates.home')

@section('title','Listagem de usuários')

@section('content')
    <table>
        <thead>
            <th>Nome do usuário</th>
            <th>Email do usuário</th>
            <th>Data de nascimento do usuário</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['birthday']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
