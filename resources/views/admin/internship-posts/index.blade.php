@extends('admin.layout.master')
@section('title', 'Staj İlanları')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Staj İlanları</h2>
                    </div>
                    <div>
                        <a href="{{ route('internship-posts.create') }}" class="btn btn-outline-primary">
                            <i class="fa-solid fa-plus"></i> Ekle
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Başlık</th>
                                <th>İşlemler</th>
                                <th>Durum</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>Kısa Açıklama</th>
                                <th>Açıklama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($internshipPosts as $post)
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
                                                    data-target="{{ route('internship-posts.destroy', $post->internship_post_id) }}"
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
                                    <td>{{ $post->short_description }}</td>
                                    <td>{{ $post->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
