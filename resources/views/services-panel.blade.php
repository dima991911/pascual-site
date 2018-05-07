@extends('layouts.page-admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-panel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="favicon.png" />
@endsection

@section('caravanas')
    <section class="add-service">
        <div class="container">
            <h2 class="add-service__h2">ДОДАТИ ПОСЛУГУ</h2>
            <form action="{{ route('add.service') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    Назвіть послугу
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    Опишіть послугу
                    <textarea class="form-control" name="description" cols="30" rows="10">

                    </textarea>
                </div>
                <div class="form-group">
                    Виберіть фотографію
                    <input type="file" name="avatar" class="form-control">
                </div>
                <input type="submit" class="btn btn-success">
                {{ csrf_field() }}
            </form>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail services-thumbnail">
                            <img src="{{ $service->avatar }}" alt="...">
                            <div class="caption">
                                <h3 class="services-thumbnail__h3">{{ $service->title }}</h3>
                                <p class="services-thumbnail__p">
                                    {{ $service->description }}
                                </p>
                                <button data-value="{{ $service->title }}" class="services-btn"><a href="{{ route('delete.service', ['id' => $service->id]) }}">ВИДАЛИТИ</a></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection