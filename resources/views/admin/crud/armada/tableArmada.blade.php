<table id="dataArmada" class="display table" width="100%">
  <thead class="table-dark">
      <tr>
          <th>No</th>
          <th>No Body</th>
          <th>Plat Nomor</th>
          <th>Kursi</th>
          <th>Kelas</th>
          <th>KIR</th>
          <th>Julukan</th>
          <th>Status</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($dataArm as $num => $d)
      <tr>
          <td>{{ $num + 1 }}</td>
          <td>{{ $d->nomor_body }}</td>
          <td>{{ $d->plat_nomor }}</td>
          <td>{{ $d->kapasitas_kursi }}</td>
          <td>{{ $d->kelas }}</td>
          <td>{{ $d->tgl_kir }}</td>
          <td>{{ $d->julukan }}</td>
          <td>{{ $d->status }}</td>
          <td>
              <div class="dropdown">
                  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #47a992">
                    Details
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item detail" href="/admin/armada/{{$d->id_armada}}/detail"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                    <li><a class="dropdown-item" href="/admin/armada/{{$d->id_armada}}/edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                    <li>
                      <form action="/admin/armada/delete/{{ $d->id_armada }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="dropdown-item" type="submit" id="id_armada" onclick="hapusArmada()"><i class="fa-solid fa-trash"></i> Hapus</button>
                      </form>
                    </li>
                  </ul>
              </div>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>