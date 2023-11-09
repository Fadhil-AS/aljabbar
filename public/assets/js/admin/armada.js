$(document).ready( function () {
    $('#dataArmada').DataTable();
    $('.detail').click(function() {
        var noBody = $(this).data('nobody');
        var nomor = $(this).data('nomor');
        var julukan = $(this).data('julukan');
        var kapasitas = $(this).data('kapasitas');
        var kelas = $(this).data('kelas');
        var kir = $(this).data('kir');
        var status = $(this).data('status');
        var driver1 = $(this).data('driver1');
        var driver2 = $(this).data('driver2');
        var helper = $(this).data('helper');
        var kotaawal = $(this).data('kotaawal');
        var kotatujuan = $(this).data('kotatujuan');
        var jamberangkat = $(this).data('jamberangkat');
        var tanggalberangkat = $(this).data('tanggalberangkat');

        // Mengirim data ke halaman kedua melalui URL
        window.location.href = 'armada/detail?noBody=' + noBody + '&nomor=' + nomor + '&julukan=' + julukan
        + '&kapasitas=' + kapasitas + '&kelas=' + kelas + '&kir=' + kir + '&status=' + status + '&driver1=' + driver1
        + '&driver2=' + driver2 + '&helper=' + helper + '&kotaawal' + kotaawal + '&kotatujuan' + kotatujuan
        + '&jamberangkat' + jamberangkat + '&tanggalberangkat' + tanggalberangkat ;
    });
} );
