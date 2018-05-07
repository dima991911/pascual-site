@extends('layouts.page-admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-panel.css') }}">
    <link rel="icon" type="image/png" href="favicon.png" />
@endsection

@section('caravanas')

    {{-----------------Create Caravan for selling---------------}}
    <section class="caravan-selling">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 caravan-add">
                    <h2>ДОДАТИ ТРАНСПОРТ НА ПРОДАЖ</h2>
                    <form action="" class="caravan-add-form" data-url="{{ route('add.caravana') }}">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="feedback-group">
                                    <input type="text" data-pattern="([A-Za-z0-9\-\_]+)" name="name" placeholder="Марка " class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Марка</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="([A-Za-z0-9\-\_]+)" name="model" placeholder="Модель " class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Mодель</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="^\d{4,4}$" name="year" placeholder="Рік" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Рік(4 символи)</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="([A-Za-z0-9\-\_]+)" name="length" placeholder="Розмір " class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Розмір</p>
                                </div>

                                <div class="feedback-group">
                                    <input type="text" data-pattern="([A-Za-z0-9\-\_]+)" name="price" placeholder="Ціна" class="feedback-group__input">
                                    <p class="feedback-group__error feedback-group__none">Ціна</p>
                                </div>

                                <div class="feedback-group">
                                    <textarea name="description" class="feedback-group__textarea" placeholder="Опис" cols="30" rows="10"></textarea>
                                    <p class="feedback-group__error feedback-group__none">Опис</p>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <ul class="caravan-add-ul">

                                </ul>

                                <div class="caravan-add-img">
                                    <input type="file" class="caravan-add__input" multiple>
                                </div>

                                <div class="caravan-add__error">
                                    Only type JPEG, JPG.
                                </div>

                                <div class="caravan-add__error-need">
                                    немає фото
                                </div>

                            </div>
                            <div class="col-md-offset-9 col-md-3">
                                <div class="feedback-group feedback-btn">
                                    <img src="{{ asset('assets/img/load-caravan.gif') }}" alt="load" class="caravan-add__load">
                                    <input type="submit" value="Добавити Транспорт" class="feedback-group__btn">
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
                    <h2>Видалити транспорт</h2>
                </div>

                @if(session()->has('goodDelete'))
                    <p class="caravan-delete__complete">{{ session()->get('goodDelete') }}</p>
                @endif

                @foreach($caravanas as $caravana)

                <div class="col-md-12 caravan-delete-info">
                    <div class="row">
                        <div class="col-md-3 caravan-delete-info__avatar">
                            <img src="{{ asset('storage/' . $caravana->avatar) }}" alt="Caravan avatar">
                        </div>
                        <div class="col-md-4 caravan-delete-info-details">
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">Тип Транспортного засобу:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">Караван</div>
                                </div>
                            </div>
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">Марка:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">nissan250</div>
                                </div>
                            </div>
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">Рік випуску:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">1995</div>
                                </div>
                            </div>
                            <div class="caravan-delete-info-details__item">
                                <div class="row">
                                    <div class="col-xs-6 caravan-delete-info-details__key">Розмір:</div>
                                    <div class="col-xs-6 caravan-delete-info-details__value">7 M</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="caravan-delete-item">
                                <a href="{{ route('delete.caravana', ['id' => $caravana->id]) }}" class="caravan-delete__btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
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