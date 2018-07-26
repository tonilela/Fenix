@extends('profile.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Uredi Profil


                        <br>
                        <img src="{{url('../')}}/public/img/{{Auth::user()->picture}}" width="80px" height="80px">
                        <br>
                        <span><a href="{{url('/')}}/changePicture">Change picture</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
