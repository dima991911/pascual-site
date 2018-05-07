@extends('layouts.page-admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-panel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="favicon.png" />
@endsection

@section('caravanas')
    <section class="orders">
        <div class="container">
            <h2 class="orders__h2">Замовлення</h2>
            <table class="table table-hover">
                <thead>
                    <th>Імя</th>
                    <th>Телефон</th>
                    <th>Email адреса</th>
                    <th>Послуга</th>
                    <th>Коментар</th>
                    <th>Виконано/Невиконано</th>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->email ? $message->email : 'Немає' }}</td>
                            <td>{{ $message->service ? $message->service : 'Немає' }}</td>
                            <td>{{ $message->message ? $message->message : 'Немає' }}</td>
                            <td>
                                @if($message->state)
                                    <input type="checkbox" class="form-control change-state" data-url="{{ route('change.state', ['id' => $message->id]) }}" checked>
                                @else
                                    <input type="checkbox" class="form-control change-state" data-url="{{ route('change.state', ['id' => $message->id]) }}">
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/add-caravan.js') }}"></script>
    <script src="{{ asset('assets/js/delete-caravan.js') }}"></script>
@endsection