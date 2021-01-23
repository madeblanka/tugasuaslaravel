@extends('barang.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Belajar CRUD di Laravel 7</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Data</a>
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
            <th>ID</th>
            <th>Nama</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barang ?? '' as $barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama }}</td>
            <td>
                <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('barang.show',$barang->id) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    <!-- {!! $barang ?? ''->links() !!}
       -->
@endsection