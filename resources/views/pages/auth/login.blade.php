@extends('layouts.auth')

@section('content')
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="card my-5">
                    <div class="card-body">
                        @include('layouts.auth.logo')

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email"
                                           name="email"
                                           class="form-control form-control-solid rounded-xl @error('email') is-invalid @enderror"
                                           placeholder="Email address"
                                           id="email"
                                           required/>
                                    <label for="email">{{ __('Email address') }} <sup
                                            class="text-danger">*</sup></label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password"
                                           name="password"
                                           class="form-control form-control-solid rounded-xl @error('email') is-invalid @enderror"
                                           placeholder="Password"
                                           id="password"
                                           required/>
                                    <label for="password">{{ __('Password') }} <sup class="text-danger">*</sup></label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox"
                                           name="remember"
                                           id="remember"
                                           class="form-check-input"/>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember password') }}
                                    </label>
                                </div>
                                @if(Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                            <button type="submit" class="w-100 btn btn-dark">
                                {{ __('Login') }}
                            </button>
                        </form>
                    </div>

                    @if(Route::has('register'))
                        <hr class="my-0"/>

                        <div class="card-footer text-center">
                            <div class="small">
                                <a href="{{ route('register') }}">
                                    {{ __('Need an account? Sign up!') }}
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
