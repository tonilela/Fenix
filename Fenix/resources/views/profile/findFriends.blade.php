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

                       <h3 align="center">Prijatelji</h3>
                        <div class="col-md-10">
                        @foreach($allUsers as $user)
                        <div class="thumbnail" style="margin-bottom: 15px">
                            <div class="caption">
                            <img src="{{url('../')}}/public/img/{{$user->picture}}" width="120px" height="120px">
                                <h4>{{$user->name}}</h4>
                                <?php
                                $provjera=\Illuminate\Support\Facades\DB::table('friends')->where('send',Auth::user()->id)->where('accept',$user->id)->first();


                                if($provjera==NULL)
                                    {
                                ?>
                                <a href="{{url('/')}}/addFriend/{{$user->id}}" class="btn btn-primary" role="button">Dodaj</a>
                                <?php
                                    }
                                else{
                                ?>
                                <a href="#" class="btn btn-dark" role="button" disabled>Dodan</a>

                            <?php
                                }
                                ?>
                                </div>
                        </div>
                        @endforeach
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
