@php
    
    $users = [
        [
            'nama' => 'brian',
            'foto' => 'https://source.unsplash.com/250x250?brian',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Gg H Ilyas 63, Dki Jakarta',
            'role' => 'admin',
        ],
        [
            'nama' => 'ani',
            'foto' => 'https://source.unsplash.com/250x250?person',
            'bio' => 'lorem ipsum',
            'active' => 'false',
            'alamat' => 'Gg H Ilyas 63, Dki Jakarta',
            'role' => 'admin',
        ],
        [
            'nama' => 'ane',
            'foto' => 'https://source.unsplash.com/250x250?women',
            'bio' => 'lorem ipsum',
            'active' => 'false',
            'alamat' => 'JL Cisirung No. 15 RT 01/03, Bandung Kidul',
            'role' => 'user',
        ],
        [
            'nama' => 'nahnu',
            'foto' => 'https://source.unsplash.com/250x250?man',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl Puri Anjasmoro Bl EE II/24, Jawa Tengah',
            'role' => 'admin',
        ],
        [
            'nama' => 'bob',
            'foto' => 'https://source.unsplash.com/250x250?boy',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl Caringin 107, Jawa Barat',
            'role' => 'user',
        ],
        [
            'nama' => 'Sam',
            'foto' => 'https://source.unsplash.com/250x250?boy',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl Pattimura 20, Dki Jakarta',
            'role' => 'admin',
        ],
        [
            'nama' => 'shandy',
            'foto' => 'https://source.unsplash.com/250x250?girl',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl Abdul Majid RT 008/09, Dki Jakarta',
            'role' => 'admin',
        ],
        [
            'nama' => 'Deby',
            'foto' => 'https://source.unsplash.com/250x250?child',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl Ampel 125, Sumatera Utara',
            'role' => 'admin',
        ],
        [
            'nama' => 'John',
            'foto' => 'https://source.unsplash.com/250x250?john',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl Gajah Mada 19-26 Gajah Mada Plaza 93-94, Dki Jakarta',
            'role' => 'admin',
        ],
        [
            'nama' => 'Steve',
            'foto' => 'https://source.unsplash.com/250x250?steve',
            'bio' => 'lorem ipsum',
            'active' => 'true',
            'alamat' => 'Jl RS Fatmawati 39 Bl D-1/30, Dki Jakarta',
            'role' => 'admin',
        ],
    ];
    if (isset($_GET['active'])) {
        $active = $_GET['active'];
    } else {
        $active = 'true';
    }
    if (isset($_GET['role'])) {
        $role = $_GET['role'];
    } else {
        $role = 'admin';
    }
    
    $filter = [
        'active' => $active,
        'role' => $role,
    ];
    
@endphp
@extends('parent')
{{-- merubah judul --}}
@section('title', 'tugas laravel')
{{-- merubah icon --}}
@section('icon', 'img/man.png')

@section('konten')
    <div class="d-flex justify-content-center">
        <h1>U can choose here</h1>
    </div>
    <div class="d-flex justify-content-center">

        <div class="col-3 mb-4">
            <form action="/child" method="get">
                <label for="role">Role</label>
                <select name="role" class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                    <option selected value="{{ $role }}">{{ $role }}</option>
                    @if ($role == 'admin')
                        <option value="user">user</option>
                    @else
                        <option value="admin">admin</option>
                    @endif
                </select>
                <label for="active">Aktif</label>
                <select name="active" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="{{ $active }}">{{ $active }}</option>
                    @if ($active == 'true')
                        <option value='false'>false</option>
                    @else
                        <option value='true'>true</option>
                    @endif
                </select>
                <br>
                <button type="submit" class="btn btn-primary">find</button>
            </form>

        </div>


    </div>
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
            @foreach ($users as $u)
                @if ($u['active'] == $filter['active'] && $u['role'] == $filter['role'])
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="{{ $u['foto'] }}">
                            <br>
                            <br>
                            <h5 class="card-title">Nama : {{ $u['nama'] }}</h5>
                            <h5 class="card-title">Bio : {{ $u['bio'] }}</h5>
                            <h5 class="card-title">Alamat : {{ $u['alamat'] }}</h5>
                            <h5 class="card-title">Role : {{ $u['role'] }}</h5>
                            <h5 class="card-title">Active : {{ $u['active'] }}</h5>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


@endsection
