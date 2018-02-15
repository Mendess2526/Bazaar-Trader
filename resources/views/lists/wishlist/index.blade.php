@extends('layouts.app')


@section('content')
<body background="/img/wishback.jpg"/>



<div class="panel-body">
    <form class="form-horizontal" method="POST" action="{{ route('wishlist.add_wish_card') }}">
        {{ csrf_field() }}
        <div id="card" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Card</label>
                
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
    
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
        </div>   
        <div id="number" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Number of Copies</label>

            <div class="col-md-6">
                <input id="copies" type="number" min="1" class="form-control" name="copies" value="{{ old('copies') }}" required> <!--ITS GOING DOWN -->

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('copies') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Add Card
                </button>
                @if (isset($message))
                    <p>{{ $message }}</p>
                @endif
            </div>
        </div>
    </form>
</div>

<div class="container">
@foreach ($cards as $card)
    @include('includes.card', ['uri' => 'lists.wishlist.index','button' => 'True'])
@endforeach
</div>



@endsection