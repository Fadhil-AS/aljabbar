function hapusHelper() {
    Swal.fire({
        title: 'Konfirmasi hapus helper',
        text: 'Apakah Anda yakin ingin menghapus helper tersebut?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
        //   action sesudah menghapus
            Swal.fire('Berhasil', 'Data berhasil dihapus!', 'success');
        }
    });
}
