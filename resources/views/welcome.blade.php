@extends('layouts.app')

@section('content')
    <div id="parallax">
        <!--
        <div class="hexbtn">
            <div class="hex">
            <div></div>
            <div></div>
            <div></div>
            </div>
            <div class="hex">
            <div></div>
            <div></div>
            <div></div>
            </div>
        </div>-->
        @include('partials/hex')
        
        <div data-depth="0.3" class="layer">
        <div class="some-space">
            <canvas id="scene" style="z-index: 4;"></canvas>
        </div>
        </div>
        <div data-depth="0" class="layer">
            <div id="particles-js"></div>
        </div>
    </div>
@endsection

