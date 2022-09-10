@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="card my-5">
                    <div class="card-body">
                        @include('layouts.auth.logo')

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text"
                                           name="name"
                                           class="form-control form-control-solid rounded-xl @error('name') is-invalid @enderror"
                                           placeholder="Name"
                                           id="name"
                                           required/>
                                    <label for="name">{{ __('Name') }} <sup class="text-danger">*</sup></label>
                                </div>
                            </div>

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
                                           class="form-control form-control-solid rounded-xl @error('password') is-invalid @enderror"
                                           placeholder="Password"
                                           id="password"
                                           required/>
                                    <label for="password">{{ __('Password') }} <sup class="text-danger">*</sup></label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password"
                                           name="password_confirmation"
                                           class="form-control form-control-solid rounded-xl @error('password_confirmation') is-invalid @enderror"
                                           placeholder="Password"
                                           id="password_confirmation"
                                           required/>
                                    <label for="password_confirmation">
                                        {{ __('Password (Confirmation)') }} <sup class="text-danger">*</sup>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="w-100 btn btn-dark">
                                {{ __('Register') }}
                            </button>
                        </form>
                    </div>

                    <div class="card-footer">
                        <div class="small text-center">
                            <a href="{{ route('login') }}">
                                {{ __('Have an account? Go to login') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
