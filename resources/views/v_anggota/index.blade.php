<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> {{$judul}} </h3>
    <a href="{{ route('anggota.create') }}">
    <button type="button">Tambah</button>
    </a>
    <table border="1" width="60%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>HP</th>
            <th>Aksi</th>
        </tr>
        @foreach ($index as $row)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{$row->nama}} </td>
            <td> {{$row->hp}} </td>
            <td>
                <a href="{{ route('anggota.edit', $row->id) }}">
                    <button type="button">Ubah</button>
                </a>
                <form action="{{ route('anggota.destroy', $row->id) }}" method="POST" class="inline-block">
                @method('delete')
                @csrf
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
