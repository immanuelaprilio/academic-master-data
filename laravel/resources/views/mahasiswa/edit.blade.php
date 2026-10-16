<h1>Edit Mahasiswa</h1>

<form action="/admin/mahasiswa/{{ $mahasiswa->id }}"
      method="POST">

    @csrf
    @method('PUT')

    <p>
        NIM <br>
        <input type="text"
               name="nim"
               value="{{ $mahasiswa->nim }}">
    </p>

    <p>
        Nama <br>
        <input type="text"
               name="nama"
               value="{{ $mahasiswa->nama }}">
    </p>

    <p>
        Jurusan <br>
        <input type="text"
               name="jurusan"
               value="{{ $mahasiswa->jurusan }}">
    </p>

    <button type="submit">
        Update
    </button>

</form>

<br>

<a href="/admin/mahasiswa">
    Kembali
</a>