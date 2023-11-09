function hapusDriver() {
    Swal.fire({
        title: 'Konfirmasi hapus driver',
        text: 'Apakah Anda yakin ingin menghapus driver tersebut?',
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
