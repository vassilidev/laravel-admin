@extends('layouts.auth')

@section('content')
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="card my-5">
                    <div class="card-body text-center">
                        @include('layouts.auth.logo')

                        <p>{{ __('Enter your email address and we will send you a link to reset your password.') }}</p>

                        <form action="{{ route('password.request') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email"
                                           name="email"
                                           class="form-control form-control-solid rounded-xl @error('email') is-invalid @enderror"
                                           placeholder="Email address"
                                           id="email"
                                           required/>
                                    <label for="email">Email address</label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a class="small" href="{{ route('login') }}">
                                    {{ __('Return to login') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small">
                            <a href="{{ route('register') }}">
                                {{ __('Need an account? Sign up!') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
