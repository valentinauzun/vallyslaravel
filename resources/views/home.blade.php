@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{ Auth::user()->name }}, you are logged in!</br>
                        {{--It's my first time when I made task so quickly.</br>--}}
                        {{--Before that I just read about Laravel but didn't use it .</br>--}}
                        {{--And now I can say that I'm in love with this FrameWork and i want to work on it .</br>--}}
                        {{--Sincerely I  just  run two commands</br>--}}

                        {{---php artisan make:auth</br>--}}
                        {{--(created DB )</br>--}}
                        {{---php artisan migrate</br>--}}
                        {{----}}
                     {{--And it works!!!! --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
