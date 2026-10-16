<h1>Edit Mata Kuliah</h1>

<form action="/admin/mata-kuliah/{{ $mata_kuliah->id }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        Kode <br>
        <input
            type="text"
            name="kode"
            value="{{ $mata_kuliah->kode }}">
    </p>

    <p>
        Nama Mata Kuliah <br>
        <input
            type="text"
            name="nama_mk"
            value="{{ $mata_kuliah->nama_mk }}">
    </p>

    <p>
        SKS <br>
        <input
            type="number"
            name="sks"
            value="{{ $mata_kuliah->sks }}">
    </p>

    <button type="submit">
        Update
    </button>
</form>

<br>

<a href="/admin/mata-kuliah">
    Kembali
</a>