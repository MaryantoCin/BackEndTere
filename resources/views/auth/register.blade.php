@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <label>leader_name</label>
                        <input type="text" name="leader_name"><br>

                        <label>leader_address</label>
                        <input type="text" name="leader_address"><br>

                        <label>leader_email</label>
                        <input type="email" name="leader_email"><br>

                        <label>leader_birthplace</label>
                        <input type="text" name="leader_birthplace"><br>

                        <label>leader_birthdate</label>
                        <input type="date" name="leader_birthdate"><br>

                        <label>leader_number</label>
                        <input type="tel" name="leader_number"><br>

                        <label>leader_line</label>
                        <input type="text" name="leader_line"><br>

                        <label>leader_github</label>
                        <input type="text" name="leader_github"><br>

                        <label>leader_cv</label>
                        <input type="file" name="leader_cv"><br>

                        <label>leader_project</label>
                        <input type="file" name="leader_project"><br>

                        <label>member1_name</label>
                        <input type="text" name="member1_name" id=""><br>

                        <label>member1_address</label>
                        <input type="text" name="member1_address"><br>

                        <label>member1_email</label>
                        <input type="email" name="member1_email"><br>

                        <label>member1_birthplace</label>
                        <input type="text" name="member1_birthplace"><br>

                        <label>member1_birthdate</label>
                        <input type="date" name="member1_birthdate"><br>

                        <label>member1_number</label>
                        <input type="tel" name="member1_number"><br>

                        <label>member1_line</label>
                        <input type="text" name="member1_line"><br>

                        <label>member1_github</label>
                        <input type="text" name="member1_github"><br>

                        <label>member1_cv</label>
                        <input type="file" name="member1_cv"><br>

                        <label>member1_project</label>
                        <input type="file" name="member1_project"><br>

                        <label>member2_name</label>
                        <input type="text" name="member2_name" id=""><br>

                        <label>member2_address</label>
                        <input type="text" name="member2_address"><br>

                        <label>member2_email</label>
                        <input type="email" name="member2_email"><br>

                        <label>member2_birthplace</label>
                        <input type="text" name="member2_birthplace"><br>

                        <label>member2_birthdate</label>
                        <input type="date" name="member2_birthdate"><br>

                        <label>member2_number</label>
                        <input type="tel" name="member2_number"><br>

                        <label>member2_line</label>
                        <input type="text" name="member2_line"><br>

                        <label>member2_github</label>
                        <input type="text" name="member2_github"><br>

                        <label>member2_cv</label>
                        <input type="file" name="member2_cv"><br>

                        <label>member2_project</label>
                        <input type="file" name="member2_project"><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
