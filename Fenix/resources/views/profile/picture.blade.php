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

                   ćao dobrodošli na profil :))
                        <br>
                        <img src="{{url('../')}}/public/img/{{Auth::user()->picture}}" width="80px" height="80px">
                        <br>

                       <form action="{{URL::to('/uploadPicture')}}" method="post" enctype="multipart/form-data">

                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <input type="file" name="picture" class="form-control">

                           <input type="submit" class="btn btn-success" name="btn"/>
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
