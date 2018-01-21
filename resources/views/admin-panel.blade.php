@extends('layouts.page-admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-panel.css') }}">
@endsection

@section('caravanas')
    <div class="logout">
        <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>


    {{-----------------Create Caravan for selling---------------}}
    <section class="caravan-selling">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 caravan-add">
                    <h2>Add Caravana</h2>
                    <form action="" class="caravan-add-form" data-url="{{ route('add.caravana') }}">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="feedback-group">
                                    <input type="text" data-pattern="^[a-zA-Z ]+$" name="name" placeholder="Nombre" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Please write your name correct</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="^[a-zA-Z ]+$" name="type" placeholder="Type Caravana" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Please write your name correct</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="^\d{4,6}$" name="price" placeholder="Price" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Please write your name correct</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="[A-Za-z0-9]{6,}" name="model" placeholder="Model caravana" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Please write your name correct</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="^\d{1,6}$" name="year" placeholder="Year" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Please write your name correct</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="^\d{1,20}$" name="length" placeholder="Length caravana" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Please write your name correct</p>
                                </div>

                                <div class="feedback-group">
                                    <textarea name="description" class="feedback-group__textarea" placeholder="Description" cols="30" rows="10"></textarea>
                                    <p class="feedback-group__error feedback-group__none">Description is empty</p>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <ul class="caravan-add-ul">
                                    <li class="caravan-add-item">Photo<span class="caravan-add__delete"><i class="fa fa-trash" aria-hidden="true"></i></span></li>
                                </ul>

                                <div class="caravan-add-img">
                                    <input type="file" class="caravan-add__input" multiple>
                                </div>

                                <div class="caravan-add__error">
                                    Only type JPEG, JPG.
                                </div>

                                <div class="caravan-add__error-need">
                                    Need one image
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="feedback-group feedback-btn">
                                    <input type="submit" value="ADD CARAVAN" class="feedback-group__btn">
                                </div>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="caravan-delete">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caraval-delete__h2">
                    <h2>Delete Caravana</h2>
                </div>

                @if(session()->has('goodDelete'))
                    <p class="caravan-delete__complete">{{ session()->get('goodDelete') }}</p>
                @endif

                @foreach($caravanas as $caravana)

                <div class="col-md-12 caravan-delete-info">
                    <div class="row">
                        <div class="col-md-3 caravan-delete-info__avatar">
                            <img src="storage/{{ $caravana->avatar }}" alt="Caravan avatar">
                        </div>
                        <div class="col-md-4 caravan-delete-info-details">
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">TIPO DE VEHÍCULO:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">Auto</div>
                                </div>
                            </div>
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">MARCA:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">nissan250</div>
                                </div>
                            </div>
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">AÑO DE FABRICACIÓN:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">1995</div>
                                </div>
                            </div>
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">LONGITUD:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">7 M</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-3 col-md-2">
                            <a href="{{ route('delete.caravana', ['id' => $caravana->id]) }}" class="caravan-delete__btn">Delete</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/add-caravan.js') }}"></script>
    <script src="{{ asset('assets/js/delete-caravan.js') }}"></script>
@endsection