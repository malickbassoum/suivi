@extends('layouts.app')

@section('content')
    <div class="container-fluid">
                <h2 class="text-black-50">Gestion utilsateur</h2>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Ajouter un uitilsateur</a>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Numéro</th>
            <th scope="col">Nom</th>
            <th scope="col">Mail</th>
            <th scope="col">Roles</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                         <td>
                         @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                        </td>

                        <td>
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Afficher</a>
                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Modifier</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
        </tbody>
        </table>
        {!! $data->render() !!}
    </div>
@endsection
