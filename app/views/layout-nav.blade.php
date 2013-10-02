@extends('template')

@section('body')
    <div class="row">
        <div class="large-3 columns">
            <ul class="side-nav">
                @foreach($sidenav as $label => $values)
                    <li><a href="{{ $values['url'] }}">{{ $label }}</a></li>

                    <ul>
                        @foreach ($values['subnav'] as $label => $url)
                            <li><a href="{{ $url }}">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </div>

        <div class="large-9 columns content">
            @section('content')
                <h1>Hello</h1>
            @show
        </div>
    </div>
@stop