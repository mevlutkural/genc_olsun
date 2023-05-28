@extends('admin.layout.master')
@section('title', 'Öğrenci Kulüpleri')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Öğrenci Kulüpleri</h2>
                    </div>
                    <div>
                        <a href="{{ route('student-clubs.create') }}" class="btn btn-outline-primary">
                            <i class="fa-solid fa-plus"></i> Ekle
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="jobsTable" class="table">
                        <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Başlık</th>
                                <th>İşlemler</th>
                                <th>Durum</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>Sosyal Medya Linkleri</th>
                                <th>Açıklama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($studentClubs->count() > 0)
                                @foreach ($studentClubs as $post)
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="{{ $post->image_url }}" style="max-width:70px; max-height:50px;">
                                            </div>
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            <ul class="nav">
                                                <li class="nav-item ms-2">
                                                    <button class="btn btn-danger"
                                                        data-target="{{ route('student-clubs.destroy', $post->student_club_id) }}"
                                                        class="list-delete-item" onclick="deleteItem(this)">
                                                        <i class="fa-solid fa-trash"></i>
                                                        <span class="ms-2">Sil</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            @if ($post->is_active)
                                                <div class="badge bg-success">Aktif</div>
                                            @else
                                                <div class="badge bg-danger">Pasif</div>
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->format('Y-d-m H:i:s') }}</td>
                                        <td>
                                            <ul>
                                                @if ($post->facebook)
                                                    <li>facebook :{{ $post->facebook }}</li>
                                                @endif
                                                @if ($post->instagram)
                                                    <li>instagram :{{ $post->instagram }}</li>
                                                @endif
                                                @if ($post->discord)
                                                    <li>discord :{{ $post->discord }}</li>
                                                @endif
                                                @if ($post->linkedin)
                                                    <li>linkedin :{{ $post->linkedin }}</li>
                                                @endif
                                                @if ($post->youtube)
                                                    <li>youtube :{{ $post->youtube }}</li>
                                                @endif
                                                @if ($post->whatsapp)
                                                    <li>whatsapp :{{ $post->whatsapp }}</li>
                                                @endif
                                                @if ($post->telegram)
                                                    <li>telegram :{{ $post->telegram }}</li>
                                                @endif
                                                @if ($post->web_site)
                                                    <li>web_site :{{ $post->web_site }}</li>
                                                @endif
                                            </ul>
                                        </td>
                                        <td>{{ $post->description }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center">Henüz iş ilanı eklemediniz.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
