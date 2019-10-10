@extends('layouts.app')

@section('content')
{{-- <link  rel="stylesheet" href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" > --}}
<div class="container" style="width:100%">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Data Biodata</h3></div>
                <div align="right">
                    <a href="{{Route('biodata.create')}}" class="btn btn-info">Tambah [+]</a>
                </div>
                <form method="POST" action="{{Route('biodata.cari')}}">   
                    {{csrf_field()}}  

                    <div >
                        <input type="text" class="form-control" name="cari" placeholder="Masukan data yang ingin dicari ...">
                    </div>
                    <input type="submit" name="" class="btn btn-warning form-control" value="Cari">  
                </form>
                
                @if(session('pesan'))
                    <div class='alert alert-info'>
                        <b>Berhasil : {{session('pesan')}}</b>
                    </div>
                @endif
                
                <div class="panel-body">
                   <table class="table table-striped">
                       <tr>
                            <td>No</td>
                           <td>Nama</td>
                           <td>Alamat</td>
                           <td>Pekerjaan</td>
                           <td>Action</td>
                       </tr>
                        <?php $no=1 ?>
                       @foreach($biodata as $item)
                           <tr>
                                <td>{{$no}}</td>
                               <td>{{$item->nama}}</td>
                               <td>{{$item->alamat}}</td>
                               <td>{{$item->pekerjaan}}</td>
                               <td>
                                   <a href="{{Route('biodata.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                    <form method="POST" action="{{ route('biodata.destroy',$item->id) }}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-danger" name="" value="Delete">
                                    </form>
                               </td>
                           </tr>
                           <?php $no++ ?>
                        @endforeach
                       
                   </table>
                </div>
            </div>
            {{$biodata->links()}}
        </div>
    </div>
</div>

{{-- <script src="{{asset('assets/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}
@endsection
