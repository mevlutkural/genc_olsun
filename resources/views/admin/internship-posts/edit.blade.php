@extends('admin.layout.master')
@section('title', 'Kullanıcı Düzenle')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="text-dark fs-4">
                                    Kullanıcılar > Kullanıcı Düzenle
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <span class="fs-4">{{ '>' }}</span>
                            </li>
                            <li class="nav-item ms-1 text-primary">
                                <span class="fs-4"> Kullanıcı Ekle</span>
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
                <form id="userForm" action="{{ route('users.update', $user->user_id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <x-input field="name_surname" label="İsim Soyisim" :class="$errors->has('name_surname') ? 'is-invalid' : ''" :value="old('name_surname', $user->name_surname)" />
                        </div>
                        <div class="col-sm-12 mb-3">
                            <x-input field="email" label="E-Posta" type="email" :class="$errors->has('email') ? 'is-invalid' : ''" :value="$user->email" />
                        </div>
                        <div class="col-sm-12 mb-4">
                            <input id="is_active" type="checkbox" name="is_active" class="form-check-input"
                                {{ $user->is_active ? 'checked' : '' }} value="1">
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
