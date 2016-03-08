@extends('layout.master')

@section('title', 'Corozal Classifieds')

@section('url', url()->current())

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Corozal Classifieds</h1>
                <h3>a Belizean online classifieds community.</h3>
                <br><br>
                <a href="/request" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
@endsection

