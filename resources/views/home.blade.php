@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                     @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>
  <div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>
  <div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>

<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-outline-primary">Primary</button>
@endsection
