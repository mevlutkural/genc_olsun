@extends('admin.layout.master')
@section('title', 'Kullanıcı Oluştur')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="text-dark fs-4">Kullanıcılar</a>
                            </li>
                            <li class="nav-item ms-1">
                                <span class="fs-4">{{ '>' }}</span>
                            </li>
                            <li class="nav-item ms-1 text-primary">
                                <span class="fs-4"> Kullanıcı Oluştur</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-danger">
                            <i class="fa-solid fa-circle-left"></i> <span class="ms-1">Geri Dön</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="userForm" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <label for="name_surname">İsim Soyisim</label>
                            <input id="name_surname" type="text" name="name_surname"
                                class="form-control{{ $errors->has('name_surname') ? ' is-invalid' : '' }}"
                                value="{{ old('name_surname') }}">
                            @error('name_surname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="email">E-Posta</label>
                            <input id="email" type="email" name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="password">Şifre</label>
                            <input id="password" type="password" name="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="password_confirmation">Şifre Doğrulama</label>
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-4">
                            <input id="is_active" type="checkbox" name="is_active" class="form-check-input" checked
                                value="1">
                            <label for="is_active">Aktif</label>
                        </div>
                        <div>
                            <button class="btn btn-success">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const form = document.getElementById('userForm');

        const inputEls = form.querySelectorAll('input');

        const events = ['change', 'keypress', 'keyup'];

        inputEls.forEach(element => {

            events.forEach(event => {

                element.addEventListener(event, () => {

                    if (element.classList.contains('is-invalid')) {

                        element.classList.remove('is-invalid');

                    }

                    for (child of element.parentNode.children) {
                        if (child.tagName == 'SMALL') {
                            child.remove();
                        }
                    }

                });

            });

        });
    </script>
@endpush
