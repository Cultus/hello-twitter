@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Remintter</h1>
                <p class="lead">Remind you with Direct Message</p>
            </div>
        </div>
    </div>
    <div class="flex-center position-ref full-height">
        @if(empty($result))
            @component('jumbotron')
            @endcomponent
        @else
            <pre>
                {{ $result }}
            </pre>
        @endif
    </div>
</div>
@endsection

