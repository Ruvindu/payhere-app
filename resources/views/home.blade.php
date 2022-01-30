@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                @if (Session::has('payment_status'))
                    @if (strcmp(Session::get('payment_status'), 'success') == 0)
                        <div class="alert alert-success" role="alert">
                            Your payment success!
                        </div>
                    @endif


                    @if (strcmp(Session::get('payment_status'), 'failed') == 0)
                        <div class="alert alert-danger" role="alert">
                            Your payment failed!
                        </div>
                    @endif
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Available qty</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $p)
                            <tr>
                                <th scope="row">{{ $p->id }}</th>
                                <td>{{ $p->p_name }}</td>
                                <td>{{ $p->p_qty }}</td>
                                <td>{{ $p->p_price }}</td>
                                <td><a class="btn btn-primary" href="{{ route('checkout', $p) }}">buy now</a></td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
