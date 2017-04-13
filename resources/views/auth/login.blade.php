@extends('layouts.index')
@section('content')

<div class="section">
  <form action="{{ route('login') }}" method="POST">
  {!! csrf_field() !!}
    
    <div class="row">
        <div class="input-field col s6">
            <input type="email" name="email">
            <label for="email">Email</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input type="password" name="password">
            <label for="password">Password</label>
        </div>
    </div>
    <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Login <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection