@extends('layouts.main')
{{-- css --}}
<link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">

{{-- dataTable --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@section('container')

    {{-- background image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
            <div class="carousel-item active crslItem ">
              <img src="https://images.unsplash.com/photo-1559603108-081ff828517b?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid " style="width:100%; height: 85%; object-fit: cover; filter: brightness(50%)">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Transport Berkah Armada</h5>
                    <p>Satu platform dan seperangkat teknologi yang terintegrasi, mengelola dan mengembangkan
                      operasional transportasi dan logistik jadi lebih mudah</p>
                </div>
            </div>
        </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#navLand" tabindex="0" >
        {{-- Platform Al-Jabbar--}}
        <div class="container-fluid" style="margin-top: 150px; padding-top: 70px;" id="scrollspyPlatform">
            <div class="platform">
                <div class="container">
                    <div class="judul text-center">
                        <h4 class="text-center" style="color: #47a992" >Platform Al-Jabbar untuk Industri Ekonomi</h4>
                        <h2 class="text-center">Transportasi untuk masa depan bangsa</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://plus.unsplash.com/premium_photo-1683120782235-f3082b60c34f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Pantau dan Kendalikan Armada</h5>
                                    <p class="card-text text-secondary text-start">Mudah mengontrol sebaran armada secara real-time dengan solusi telematik yang terhubung dengan dasbor digital. Tingkatkan visibilitas untuk memacu pengambilan keputusan dalam bisnis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1604380441509-0ceda4aff0a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Optimasi Operasional Pengiriman</h5>
                                    <p class="card-text text-secondary text-start">Optimalkan setiap tahapan pengiriman mulai dari penjadwalan, pelacakan, bagi lokasi, hingga dokumentasi bukti pengiriman dalam satu platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1583508805133-8fd03a9916d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Efisiensi Rute dengan Perhitungan Cerdas</h5>
                                    <p class="card-text text-secondary text-start">Mudah merencanakan rute terbaik dan tercepat untuk pengiriman multi-drop. Tingkatkan efisiensi waktu dan bahan bakar, serta meminimalkan human error.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1628915510587-7715c2a8ebc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Alokasi Pengiriman Praktis ke Pengemudi</h5>
                                    <p class="card-text text-secondary text-start">Permudah alokasi pengiriman dan memperbaharui status serta bukti pengiriman melalui aplikasi mobile​.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- testimoni --}}
        <div class="container-fluid" style="margin-top: 150px; margin-bottom: 150px; padding-top: 70px;" id="scrollspyTesti">
            <div class="testimoni">
                <div class="container">
                    <div class="text-center">
                        <h2 class="judulTesti">Yang Dirasakan Oleh Pelanggan</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1689982920184-2c3ddcf81160?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1770" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5>Asep</h5>
                                    <p class="card-text text-secondary">Sangat senang menggunakan layanan web monitoring armada dari Transport Berkah Armada! Sistem mereka membantu kami dengan efisiensi dan akurasi dalam melacak keberadaan dan kinerja armada bus kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1696908983765-5ae4722819f2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5>Lilis</h5>
                                    <p class="card-text text-secondary">Web monitoring armada perusahaan bus Transport Berkah Armada benar-benar memberikan kemudahan dalam mengelola dan melacak keberadaan armada kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1695753640148-0c7b3bcd3b2b?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1770" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5>Salwa</h5>
                                    <p class="card-text text-secondary">Saya sangat terkesan dengan layanan web monitoring armada dari Transport Berkah Armada. Dengan bantuan platform ini, saya dapat dengan mudah melacak dan mengelola seluruh armada perusahaan bus kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow border-0" style="height: 500px; width: 18rem;">
                                <img src="https://images.unsplash.com/photo-1695757002354-8bca71d087c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5>Ayu</h5>
                                    <p class="card-text text-secondary">Saya sangat terkesan dengan layanan web monitoring armada dari Transport Berkah Armada. Dengan platform ini, saya dapat dengan mudah melacak dan memantau lokasi serta keberadaan armada perusahaan bus kami secara real-time.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- integrasi --}}
        <div class="container-fluid" style="margin-top: 150px; margin-bottom: 300px; padding-top: 150px;" id="scrollspyIntegrasi">
            <div class="container">
                <h3 class="text-center mt-5">Perusahaan Al-Jabbar yang telah terintegrasi dengan Transport Berkah Armada</h3>
                <div class="row" style="padding-top: 50px">
                    <div class="col-2">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-putra-rafflesia.jpg" alt="" class="imgIntegrasi">
                    </div>
                    <div class="col-2">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-rosalia-indah.jpg" alt="" class="imgIntegrasi">
                    </div>
                    <div class="col-2">
                        <img src="https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg" alt="" class="imgIntegrasi">
                    </div>
                    <div class="col-2">
                        <img src="https://assets.kompasiana.com/items/album/2016/06/20/transjakarta-new-logo-57681ea11293733e048b45a3.jpeg?t=o&v=1200" alt="" class="imgIntegrasi">
                    </div>
                    <div class="col-2">
                        <img src="https://awsimages.detik.net.id/content/2009/07/23/4/Garuda-Logo-Vertical-dalam.jpg" alt="" class="imgIntegrasi">
                    </div>
                    <div class="col-2">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/294/2023/10/03/Logo-Whoosh-1902335397.jpg" alt="" class="imgIntegrasi">
                    </div>
                </div>
            </div>
        </div>

        {{-- map keberangkatan --}}
        <div class="container-fluid" style="margin-top: 150px; margin-bottom: 150px; padding-top: 70px;" id="scrollspyMap">
            <h2 class="judulMap text-center">Map Keberangkatan</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.307454349522!2d107.6291051108848!3d-6.973006992998587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1699115503636!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6" style="padding: 50px">
                    <table id="dataJadwal" class="table" style="width:100%;">
                        <thead class="table-success">
                          <tr>
                            <th class="th-sm">No</th>
                            <th class="th-sm">Nama Kendaraan</th>
                            <th class="th-sm">Nama Daerah</th>
                            <th class="th-sm">Jam Keberangkatan</th>
                            <th class="th-sm">Kuota</th>
                            <th class="th-sm">Stasiun</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Tayo</td>
                            <td>Bojong San Tos</td>
                            <td>8:30-10:30</td>
                            <td>20</td>
                            <td>GKU Parking</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>MGI</td>
                            <td>Xi And Joer</td>
                            <td>10:30-12:00</td>
                            <td>100</td>
                            <td>Lee We Pan Xang</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- data Table --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataJadwal').DataTable();
        } );
    </script>
@endsection
