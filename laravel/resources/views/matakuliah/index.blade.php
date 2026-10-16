<h1>Data Mahasiswa</h1>

@if(session('success'))
    <p style="color:green">
        {{ session('success') }}
    </p>
@endif

<a href="/admin/mahasiswa/create">
    Tambah Mahasiswa
</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswas as $m)
    <tr>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->jurusan }}</td>
        <td>

            <a href="/admin/mahasiswa/{{ $m->id }}">
                Detail
            </a>

            |

            <a href="/admin/mahasiswa/{{ $m->id }}/edit">
                Edit
            </a>

            |

            <form action="/admin/mahasiswa/{{ $m->id }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </button>

            </form>

        </td>
    </tr>
    @endforeach
</table>