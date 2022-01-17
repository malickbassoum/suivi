@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Materiels</h2>
            </div>
            <div class="pull-right">
                @can('material-create')
                <a class="btn btn-success" href="{{ route('materials.create') }}"> Enregistrer un materiel</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Type</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Num Serie</th>
            <th>Priprietaire</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($materials as $material)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $material->material_type }}</td>
	        <td>{{ $material->material_name }}</td>
	        <td>{{ $material->material_brand }}</td>
	        <td>{{ $material->material_serial }}</td>
	        <td>{{ $material->material_owner }}</td>
	        
	        <td>
                <form action="{{ route('materials.destroy',$material->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('materials.show',$material->id) }}">Show</a>
                    @can('material-edit')
                    <a class="btn btn-primary" href="{{ route('materials.edit',$material->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('material-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $materials->links() !!}



@endsection