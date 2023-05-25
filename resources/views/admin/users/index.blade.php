@extends('admin.layout.master')
@section('title', 'Kullanıcılar')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Kullanıcılar</h2>
                    </div>
                    <div>
                        <a href="{{ route('users.create') }}" class="btn btn-outline-primary">
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
                                <th>İsim Soyisim</th>
                                <th>E-Posta</th>
                                <th>Durum</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name_surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->is_active)
                                            <div class="badge bg-success">Aktif</div>
                                        @else
                                            <div class="badge bg-danger">Pasif</div>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at->format('Y-d-m H:i:s') }}</td>
                                    <td>
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a href="{{ route('users.edit', $user->user_id) }}" class="btn btn-warning">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    <span class="ms-2">Düzenle</span>
                                                </a>
                                            </li>
                                            <li class="nav-item ms-2">
                                                <a href="{{ route('users.change-password', $user->user_id) }}"
                                                    class="btn btn-info">
                                                    <i class="fa-solid fa-lock"></i>
                                                    <span class="ms-2">Şifre Değiştir</span>
                                                </a>
                                            </li>
                                            <li class="nav-item ms-2">
                                                <button class="btn btn-danger"
                                                    data-target="{{ route('users.destroy', $user->user_id) }}"
                                                    class="list-delete-item" onclick="deleteItem(this)">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span class="ms-2">Sil</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
