@extends('layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>BTS MART</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('barang.create') }}"> Create New Barang</a>

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

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($barang as $barang)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $barang->nama }}</td>

            <td>{{ $barang->harga }}</td>

            <td>

                <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('barang.show',$barang->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  



      

@endsection