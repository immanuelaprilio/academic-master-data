<h1>Tambah Mata Kuliah</h1>

<form action="/admin/mata-kuliah" method="POST">
    @csrf

    <p>
        Kode <br>
        <input type="text" name="kode">
    </p>

    <p>
        Nama Mata Kuliah <br>
        <input type="text" name="nama_mk">
    </p>

    <p>
        SKS <br>
        <input type="number" name="sks">
    </p>

    <button type="submit">
        Simpan
    </button>
</form>

<br>

<a href="/admin/mata-kuliah">
    Kembali
</a>