@extends('admin.layout.master')
@section('title', 'Yetenek Programları')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Yetenek Programları</h2>
                    </div>
                    <div>
                        <a href="{{ route('talent-programs.create') }}" class="btn btn-outline-primary">
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
                            @foreach ($talentPrograms as $program)
                                <tr>
                                    <td>
                                        <div>
                                            <img src="{{ $program->image_url }}" style="max-width:70px; max-height:50px;">
                                        </div>
                                    </td>
                                    <td>{{ $program->title }}</td>
                                    <td>
                                        <ul class="nav">
                                            <li class="nav-item ms-2">
                                                <button class="btn btn-danger"
                                                    data-target="{{ route('talent-programs.destroy', $program->talent_program_id) }}"
                                                    class="list-delete-item" onclick="deleteItem(this)">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span class="ms-2">Sil</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        @if ($program->is_active)
                                            <div class="badge bg-success">Aktif</div>
                                        @else
                                            <div class="badge bg-danger">Pasif</div>
                                        @endif
                                    </td>
                                    <td>{{ $program->created_at->format('Y-d-m H:i:s') }}</td>
                                    <td>{{ $program->short_description }}</td>
                                    <td>{{ $program->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
