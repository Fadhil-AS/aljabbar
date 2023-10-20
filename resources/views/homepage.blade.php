@extends('layouts.main')
{{-- css --}}
<link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
@section('container')

    {{-- slide image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner crsl">
          <div class="carousel-item active crslItem ">
            <img src="https://images.unsplash.com/photo-1559762740-77e772d4d6d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1871&q=80" class="d-block w-100 crsl1" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Transport Berkah Armada</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eos laboriosam totam vero, perferendis asperiores, nam nisi quibusdam cum incidunt nostrum? At error consequuntur, voluptas nobis quia iusto adipisci porro.</p>
            </div>
          </div>
          <div class="carousel-item crslItem ">
            <img src="https://images.unsplash.com/photo-1597920467799-ec8bee99f6eb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1880&q=80" class="d-block w-100 crsl2" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Transport Berkah Armada</h5>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto accusamus cupiditate id eligendi voluptas nesciunt soluta aliquid dignissimos tempore. Obcaecati modi deleniti fuga. Earum, ut! Nisi iure totam quo minima.</p>
            </div>
          </div>
          <div class="carousel-item crslItem">
            <img src="https://images.unsplash.com/photo-1590922144791-347af7dd9dd1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2013&q=80" class="d-block w-100 crsl3" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Transport Berkah Armada</h5>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique veritatis maxime placeat iste temporibus natus porro est possimus nesciunt, corrupti iusto facere illo cupiditate aliquid sequi tempora, minus laudantium pariatur.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- about --}}
    <div class="about">
        <h1 class="judulAbt">
            We are Transport Berkah Armada,<br>
            Transportation for the future of the nation
        </h1>
        <button class="btn btn-success btnBergabung" type="button">Bergabung dengan kami!</button>
        <div class="cardGroup d-flex cardAbout">
            <div class="card" style="width: 18rem;">
                <img src="https://plus.unsplash.com/premium_photo-1683120782235-f3082b60c34f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ipsa ipsam dolorem quo porro exercitationem aliquid laudantium, quae voluptatibus animi possimus repellat neque doloribus quia cupiditate optio voluptas iste ratione?.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="https://images.unsplash.com/photo-1604380441509-0ceda4aff0a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ipsa ipsam dolorem quo porro exercitationem aliquid laudantium, quae voluptatibus animi possimus repellat neque doloribus quia cupiditate optio voluptas iste ratione?.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1583508805133-8fd03a9916d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ipsa ipsam dolorem quo porro exercitationem aliquid laudantium, quae voluptatibus animi possimus repellat neque doloribus quia cupiditate optio voluptas iste ratione?.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1628915510587-7715c2a8ebc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ipsa ipsam dolorem quo porro exercitationem aliquid laudantium, quae voluptatibus animi possimus repellat neque doloribus quia cupiditate optio voluptas iste ratione?.</p>
                </div>
            </div>
        </div>

    </div>

    {{-- testimoni --}}
    <div class="testimoni">
        <h1 class="judulTesti">Yang Dirasakan Oleh Pelanggan</h1>
        <div class="cardGroup d-flex cardTesti">
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1689982920184-2c3ddcf81160?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1770" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Asep</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius quam dolorum repudiandae accusantium earum assumenda dignissimos iure praesentium saepe. Laudantium esse placeat dolorum, odit ratione nostrum aspernatur quae consequatur!.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="https://images.unsplash.com/photo-1696908983765-5ae4722819f2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Lilis</h3>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad accusamus expedita quos rem deserunt quam dignissimos aperiam, quae nam laudantium voluptas numquam, ipsum nemo, assumenda voluptatum explicabo iusto error perferendis?</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1695753640148-0c7b3bcd3b2b?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1770" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Salwa</h3>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1695757002354-8bca71d087c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Ayu</h3>
                    <p class="card-text">but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- map keberangkatan --}}
    <div class="map">
        <h1 class="judulMap">Map Keberangkatan</h1>
        <div class="row w-100">
            <div class="col-lg-6 my-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.307499364223!2d107.62910511023743!3d-6.973001668248973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1697050539864!5m2!1sid!2sid" class="w-100"  height="400" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-6 my-6 d-flex align-items-center">
              <div>
                <table id="paginationNumbers" class="table" width="100%">
                    <thead>
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
                  </table>
              </div>
            </div>
        </div>
    </div>

@endsection
