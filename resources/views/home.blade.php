@extends('layouts.app')

@section('content')
<div class="container">
@if (session()->has('success'))
            <h6 class="alert alert-success mt-5">{{ session('success') }}</h6>
         @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center;font-size:28px;font-family:Bradley Hand, cursive; color:#b30000;"><b>Dashboard</b></div>
<br>
                <div class="card-body" style="font-size: 18px;text-align:center;"><i>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are now logged in!
                </i></div>
				<br>
				<br>
            </div>
        </div>
    </div>
</div>
@endsection
