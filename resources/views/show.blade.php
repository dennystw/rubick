@extends('layouts.index')
@section('content')

<div class="section">
    <div class="row">
        <div class="slider col s11">
            <ul class="slides">
              <li>
                <img src="http://lorempixel.com/800/400/food/3"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="{{ asset('/images/stand.jpg') }}"> <!-- random image -->
                <div class="caption left-align">
                  <h3>Left Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="https://farm1.staticflickr.com/713/32530514683_97ca99d21d_b.jpg"> <!-- random image -->
                <div class="caption right-align">
                  <h3>Right Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
        </div>

        <!--
        <div class="carousel carousel-slider col s11">
            <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
            <a class="carousel-item" href="#other"><img src="{{ asset('/images/stand.jpg') }}"></a>
            <a class="carousel-item" href="#two!"><img src="https://farm1.staticflickr.com/713/32530514683_97ca99d21d_b.jpg"></a>          
        </div>
        -->
    </div>
</div>

<div class="section">
    <h5>Latest post</h5>
</div>

<div class="section">

	@foreach($datas as $data)

    <div class="row">
        <div class="col s11 card-panel hoverable">
            <h5>{{ $data->judul }}</h5>

            <div class="divider"></div>
            <p>{!!substr($data->isi,0,200)!!}...</p>

            <a href="{{ url('read', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Readmore <i class="material-icons right">send</i></a>

            <!-- Disable dulu fungsinya
            <a href="{{ url('edit', $data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a href="{{ url('delete', $data->id) }}" onclick="return confirm('Yakin mau hapus data ini bro?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
            -->
        </div>
    </div>

    @endforeach 
</div>

<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="{{ url('add') }}" class="btn-floating btn-large red">
        <i class="large material-icons">add</i>
    </a>
</div>

{{ $datas->render() }}
@endsection