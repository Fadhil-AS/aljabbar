function hapusArmada() {
    Swal.fire({
        title: 'Konfirmasi hapus armada',
        text: 'Apakah Anda yakin ingin menghapus armada?',
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