@extends('layouts.index')
@section('content')

<div class="section">
    <div class="card-panel purple darken-3 white-text">Registration</div>
</div>

<div class="section">
  <form action="{{ url('adduser') }}" method="POST">
  {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s6">
            <input type="text" class="validate" name="name">
            <label for="name">Name</label>
          </div>
    </div>
    
    <div class="row">
        <div class="input-field col s6">
            <input type="email" name="email">
            <label for="email">Email</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <select name="level">
                <option value="" disabled selected>Role</option>
                <option value="1">Admin</option>
                <option value="2">Member</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input type="password" name="password">
            <label for="password">Password</label>
        </div>
    </div>
    <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection