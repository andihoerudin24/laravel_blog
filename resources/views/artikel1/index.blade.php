@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
@section('title','Dahboard')
@section('page-title','Artikel')
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Artikel</h3>
        <div class="pull-right">
            <a href="{{ route('artikel.create') }}" class="btn btn-info">Tambah Data</a>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Nama Kategori</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikel as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->judul}}</td>
                    @if($item->gambar==null)
                    <td>Gambar Tidak Ada</td>
                    @else
                    <td><img src="{{ asset('uploads/'.$item->gambar) }}" width="50px" height="50px"></td>
                     @endif
                    <td>{{$item->Kategori->nama_kategori}}</td>
                    <td>
                        <a href="{{ route('artikel.edit',$item->id) }}" class="btn btn-info">Edit</a>

                        <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger">
                            <span class="fa fa-trash"></span>
                            <form action="{{ route('artikel.destroy',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@push('datatables')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/datatables.bootstrap.min.js') }}"></script>
@endpush
@push('customdatatables')
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

</script>
@endpush
@endsection
