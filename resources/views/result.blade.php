@extends('layouts.index')
@section('content')

<div class="section">
@if (count($hasil))
<div class="col s11">
    <div class="card-panel green white-text">Hasil pencarian : <b>{{$query}}</b></div>
        @foreach($hasil as $data)
        <div class="row">
    		<div class="col s11">
    			<h5>{{ $data->judul }}</h5>

                <div class="divider"></div>
                <p>{!!substr($data->isi,0,200)!!}...</p>
                    
                <a href="{{ url('read', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Readmore <i class="material-icons right">send</i></a>

                <!-- Disable fitur nya dulu
                <a href="{{ url('edit', $data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
                <a href="{{ url('delete', $data->id) }}" onclick="return confirm('Yakin mau hapus data ini bro?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
                -->
    		</div>
    	</div>
    	@endforeach
    </div>
</div>

{{ $hasil->render() }}
	
@else
<div class="section">
    <div class="row">
        <div class="col s11">
           <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
        </div>
    </div>
</div>
@endif
	



@endsection