<h2>Tambah Toko</h2>

<form action="{{ route('admin.toko.store') }}" method="POST">
    @csrf

    <label>Nama Toko</label>
    <input type="text" name="nama_toko">

    <label>Pemilik</label>
    <input type="text" name="pemilik">

    <label>Kontak</label>
    <input type="text" name="kontak">

    <button type="submit">Simpan</button>
</form>
