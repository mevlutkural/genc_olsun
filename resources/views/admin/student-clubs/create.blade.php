@extends('admin.layout.master')
@section('title', 'Öğrenci Kulübü Oluştur')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="{{ route('student-clubs.index') }}" class="text-dark fs-4">Öğrenci Kulüpleri</a>
                            </li>
                            <li class="nav-item ms-1">
                                <span class="fs-4">{{ '>' }}</span>
                            </li>
                            <li class="nav-item ms-1 text-primary">
                                <span class="fs-4"> Öğrenci Kulübü Oluştur</span>
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
                <form id="internshipPostForm" action="{{ route('scholarship-posts.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <label for="title">Başlık</label>
                            <input id="title" type="text" name="title"
                                class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                value="{{ old('title') }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" cols="30" rows="4"
                                class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="facebook">Facebook</label>
                            <input id="facebook" type="text" name="facebook" class="form-control"
                                value="{{ old('facebook') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="instagram">İnstagram</label>
                            <input id="instagram" type="text" name="instagram" class="form-control"
                                value="{{ old('instagram') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="linkedin">Linkedin</label>
                            <input id="linkedin" type="text" name="linkedin" class="form-control"
                                value="{{ old('linkedin') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="youtube">Youtube</label>
                            <input id="youtube" type="text" name="youtube" class="form-control"
                                value="{{ old('youtube') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="whatsapp">Whatsapp</label>
                            <input id="whatsapp" type="text" name="whatsapp" class="form-control"
                                value="{{ old('whatsapp') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="telegram">Telegram</label>
                            <input id="telegram" type="text" name="telegram" class="form-control"
                                value="{{ old('telegram') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="web_site">Web Sitesi</label>
                            <input id="web_site" type="text" name="web_site" class="form-control"
                                value="{{ old('web_site') }}">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="image">Fotoğraf</label>
                            <input id="image" type="file" name="image"
                                class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                value="{{ old('image') }}">
                            @error('image')
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
        const form = document.getElementById('internshipPostForm');

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
