@extends('flex.flex')

@section('nav_bar')
    @include('flex.nav')
    @endsection

@section('title')
    Flex Section
    @endsection

@section('content')
<div class="main-content">
        <div class="for-input-design">
            <input type="text">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <div class="card-boxes">

            <div class="card-custom">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="card-custom">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="card-custom">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>

            <div class="card-custom">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="card-custom">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    @endsection