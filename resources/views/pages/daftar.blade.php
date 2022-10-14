@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Mahasiswa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('daftar') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">NIM</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" required autofocus>

                                @if ($errors->has('nim'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control{{ $errors->has('jurusan') ? ' is-invalid' : '' }}" name="jurusan" value="{{ old('jurusan') }}" required>

                                @if ($errors->has('jurusan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fakultas" class="col-md-4 col-form-label text-md-right">Fakultas</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="text" class="form-control{{ $errors->has('fakultas') ? ' is-invalid' : '' }}" name="fakultas" required>

                                @if ($errors->has('fakultas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fakultas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
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
