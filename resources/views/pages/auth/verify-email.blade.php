@extends('layouts.auth')

@section('content')
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="card my-5">
                    <div class="card-body text-center">
                        @include('layouts.auth.logo')

                        <p>{{ __('An email has been sent to you to verify your email address.') }}</p>

                        <form action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                {{ __('Resend an email') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
