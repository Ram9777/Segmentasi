@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    {{ DB::table('centroid_temp')->truncate() }}
    {{ DB::table('hasil_iterasi')->truncate() }}
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengelompokan Data</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-content nopadding">
                <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                <!-- Tabel Centroid Medoid -->
                <h5>Medoids</h5>
              </div>
              <table class="table table-bordered" width="100%" cellspasing="0">
                <thead>
                    <tr>
                        <th>Wilayah</th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>E</th>
                        <th>F</th>
                        <th>G</th>
                        <th>H</th>
                        <th>Medoid 1</th>
                        <th>Medoid 2</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                   @forelse ($items as $item)
                   <tr>
                    <td>{{ $item->kode_wilayah }}</td>
                    <td>{{ $item->A }}</td>
                    <td>{{ $item->B }}</td>
                    <td>{{ $item->C }}</td>
                    <td>{{ $item->D }}</td>
                    <td>{{ $item->E }}</td>
                    <td>{{ $item->F }}</td>
                    <td>{{ $item->G }}</td>
                    <td>{{ $item->H }}</td>
                    <td></td>
                    <td></td>
                    {{-- <td>
                        <a href="{{ route('transformasi.edit', $item->id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('transformasi.destroy', $item->id) }}" method="post"
                        class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    </td> --}}
                </tr>
                   @empty
                       <tr>
                           <td colspan="8" class="text-center">Data Kosong</td>
                       </tr>
                   @endforelse
                </tbody>
            </table>
                {{-- <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Medoids ke-</th>
                      <th>Lokasi</th>
                      <th>Kotor</th>
                      <th>Berbau</th>
                      <th>Kecil</th>
                      <th>Tidak Mengalir</th>
                      <th>Bocor Pipa</th>
                      <th>Kotor dan Kecil</th>
                      <th>Kotor dan Berbau</th> 
                      <th>Tahun</th>
                    </tr>
                  </thead>
                  <tbody>
                  <!-- Acak Tentukan K -->
                      <?php $no = 1 ?>
                          <?php foreach ($items as $item) { ?>
                              <tr>
                                  <td><?php echo $no ?></td>
                                  <td><?php echo $item->kode_wilayah ?></td>
                                  <td><?php echo $item->A ?></td>
                                  <td><?php echo $item->B ?></td>
                                  <td><?php echo $item->C ?></td>
                                  <td><?php echo $item->D ?></td>
                                  <td><?php echo $item->E ?></td>
                                  <td><?php echo $item->F ?></td>
                                  <td><?php echo $item->G ?></td>
                                  <td><?php echo $item->H ?></td>
                                  <?php $no++ ?>
                              </tr>
                          <?php } ?>
                  </tbody>
                </table> --}}
            </div>
          </div>
  
          {{-- <div class="widget-box">
            <div class="widget-content nopadding">
                <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                <!-- Tabel Iterasi Medoids / pengulangan -->
                <h5>Iterasi Medoids</h5>
              </div>
                <div style="overflow-x:auto;">
                    <table class="table table-bordered data-table">
                      <thead>
                              <tr>
                                  <th rowspan="2">No.</th>
                                  <th rowspan="2">Lokasi</th>
                                  <th rowspan="2">Kotor</th>
                                  <th rowspan="2">Berbau</th>
                                  <th rowspan="2">Kecil</th>
                                  <th rowspan="2">Tidak Mengalir</th>
                                  <th rowspan="2">Bocor Pipa</th>
                                  <th rowspan="2">Kotor dan Kecil</th>
                                  <th rowspan="2">Kotor dan Berbau</th>
                                  <th rowspan="2">Tahun</th>
                                  <?php $c = 1 ?>
                                  <?php foreach ($keluhan_rand as $m) { ?>
                                      <!-- 7 kolom  -->
                                      <th colspan="7">Medoids <?php echo $c; $c++ ?></th>
                                  <?php } ?>
                                  <?php $d = 1 ?>
                                  <?php foreach ($keluhan_rand as $m) { ?>
                                      <!-- 2 baris -->
                                      <th rowspan="2">C<?php echo $d; $d++ ?></th>
                                  <?php } ?>
                              </tr>
                              <tr>
                                  <?php foreach ($keluhan_rand as $m1) { ?>
                                      <th><?php $c_kotor[] = $m1->A; echo $m1->A ?></th>
                                      <th><?php $c_berbau[] = $m1->B; echo $m1->B ?></th>
                                      <th><?php $c_kecil[] = $m1->C; echo $m1->C ?></th>
                                      <th><?php $c_tidak_mengalir[] = $m1->D; echo $m1->D ?></th>
                                      <th><?php $c_bocor_pipa[] = $m1->E; echo $m1->E ?></th>
                                      <th><?php $c_kotor_kecil[] = $m1->F; echo $m1->F ?></th>
                                      <th><?php $c_kotor_berbau[] = $m1->G; echo $m1->G ?></th>
                                  <?php } ?>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $no = 1;
                              $tc0 = 0;
                              $tc = 0 ?>
                              <?php foreach ($keluhan as $key) { ?>
                                  <tr>
                                      <td><?php echo $no ?></td>
                                      <td><?php echo $key->kode_wilayah ?></td>
                                      <td><?php echo $key->A ?></td>
                                      <td><?php echo $key->B ?></td>
                                      <td><?php echo $key->C ?></td>
                                      <td><?php echo $key->D ?></td>
                                      <td><?php echo $key->E ?></td>
                                      <td><?php echo $key->F ?></td>
                                      <td><?php echo $key->G ?></td>
                                      <td><?php echo $key->H ?></td>
                                      <?php $no++ ?>
                                      <!-- Euclidian distance -->
                                      <?php $e = 0;
                                      $tc = array(); ?>
                                      <?php foreach ($keluhan_rand as $k) { ?>
                                          <td colspan="7"><?php $hm[$e] = sqrt(pow(($key->A-$c_kotor[$e]),2)+pow(($key->B-$c_berbau[$e]),2)+pow(($key->C-$c_kecil[$e]),2)+pow(($key->D-$c_tidak_mengalir[$e]),2)+pow(($key->E-$c_bocor_pipa[$e]),2)+pow(($key->F-$c_kotor_kecil[$e]),2)+pow(($key->G-$c_kotor_berbau[$e]),2));
                                          echo $hm[$e];// Hasil dari Euclidian distance
                                          $hc[$e] = $hm[$e];
                                          ?>
                                          </td>
                                          <?php $e++ ?>
                                      <?php } ?>
                                      <!-- min max jika hasil yang paling kecil 1-->
                                      <?php for ($i=0; $i < COUNT($hc); $i++) { ?>
                                          <?php if ($hc[$i] == MIN($hc)) {
                                              echo "<td bgcolor='#FFFF00'>1</td>";//kuning
                                              $cm = $i+1;
                                              $q = "insert into centroid_temp(jenis,iterasi,c) values('M',1,'c".$cm."')";
                                                $this->db->query($q);
                                          }
                                          else{
                                              echo "<td>0</td>";
                                          }
                                          ?>
                                      <?php } ?>
                                      <!-- Total Iterasi Medoids -->
                                      <?php 
                                          for ($j=0; $j < COUNT($hc); $j++) { 
                                                  $tc0 = $tc0 + $hc[$j];
                                                  $ttc[] = $tc0;
                                          }
                                      ?>
                                  </tr>
                              <?php } ?>
                              <tr align="center">
                                  <!-- Total Iterasi Medoids -->
                                  <td colspan="6"><b>TOTAL</b></td>
                                  <td colspan="12"><b><?php echo $tc0 ?></b></td>
                              </tr>
                          </tbody>
                    </table>
                </div>
            </div>
          </div> --}}
  
          {{-- <div class="widget-box">
            <div class="widget-content nopadding">
                <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                <h5>Non Medoids</h5>
              </div>
              <div style="overflow-x: auto;">
                  <table class="table table-bordered">
                      <thead>
                              <tr>
                                  <th>Medoids ke-</th>
                                  <th>Lokasi</th>
                                  <th>Kotor</th>
                                  <th>Berbau</th>
                                  <th>Kecil</th>
                                  <th>Tidak Mengalir</th>
                                  <th>Bocor Pipa</th>
                                  <th>Kotor dan Kecil</th>
                                  <th>Kotor dan Berbau</th>
                                  <th>Tahun</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $nom = 1 ?>
                              <?php foreach ($keluhan_rand2 as $nm1) { ?>
                                  <tr>
                                      <td><?php echo $nom ?></td>
                                      <td><?php echo $nm1->nama_lokasi ?></td>
                                      <td><?php echo $nm1->kotor ?></td>
                                      <td><?php echo $nm1->berbau ?></td>
                                      <td><?php echo $nm1->kecil ?></td>
                                      <td><?php echo $nm1->tidak_mengalir ?></td>
                                      <td><?php echo $nm1->bocor_pipa ?></td>
                                      <td><?php echo $nm1->kotor_kecil ?></td>
                                      <td><?php echo $nm1->kotor_berbau ?></td>
                                      <td><?php echo $nm1->tahun ?></td>
                                      <?php $nom++ ?>
                                  </tr>
                              <?php } ?>
                          </tbody>
                    </table>
              </div>
            </div>
          </div>
  
          <div class="widget-box">
            <div class="widget-content nopadding">
                <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                <h5>Iterasi Non Medoids</h5>
              </div>
              <div style="overflow-x: auto;">
                  <table class="table table-bordered">
                      <thead>
                              <tr>
                                  <th rowspan="2">No.</th>
                                  <th rowspan="2">Lokasi</th>
                                  <th rowspan="2">Kotor</th>
                                  <th rowspan="2">Berbau</th>
                                  <th rowspan="2">Kecil</th>
                                  <th rowspan="2">Tidak Mengalir</th>
                                  <th rowspan="2">Bocor Pipa</th>
                                  <th rowspan="2">Kotor dan Kecil</th>
                                  <th rowspan="2">Kotor dan Berbau</th>
                                  <th rowspan="2">Tahun</th>
                                  <?php $f = 1 ?>
                                  <?php foreach ($keluhan_rand2 as $m) { ?>
                                      <th colspan="7">Medoids <?php echo $f; $f++ ?></th>
                                  <?php } ?>
                                  <?php $g = 1 ?>
                                  <?php foreach ($keluhan_rand2 as $m) { ?>
                                      <th rowspan="2">C<?php echo $g; $g++ ?></th>
                                  <?php } ?>
                              </tr>
                              <tr>
                                  <?php foreach ($keluhan_rand2 as $nm1) { ?>
                                      <th><?php $cn_kotor[] = $nm1->kotor; echo $nm1->kotor ?></th>
                                      <th><?php $cn_berbau[] = $nm1->berbau; echo $nm1->berbau ?></th>
                                      <th><?php $cn_kecil[] = $nm1->kecil; echo $nm1->kecil ?></th>
                                      <th><?php $cn_tidak_mengalir[] = $nm1->tidak_mengalir; echo $nm1->tidak_mengalir ?></th>
                                      <th><?php $cn_bocor_pipa[] = $nm1->bocor_pipa; echo $nm1->bocor_pipa ?></th>
                                      <th><?php $cn_kotor_kecil[] = $nm1->kotor_kecil; echo $nm1->kotor_kecil ?></th>
                                      <th><?php $cn_kotor_berbau[] = $nm1->kotor_berbau; echo $nm1->kotor_berbau ?></th>
                                  <?php } ?>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $no = 1;
                              $tcnm0 = 0;
                              $tcnm = 0 ?>
                              <?php foreach ($keluhan as $key) { ?>
                                  <tr>
                                      <td><?php echo $no ?></td>
                                      <td><?php echo $key->nama_lokasi ?></td>
                                      <td><?php echo $key->kotor ?></td>
                                      <td><?php echo $key->berbau ?></td>
                                      <td><?php echo $key->kecil ?></td>
                                      <td><?php echo $key->tidak_mengalir ?></td>
                                      <td><?php echo $key->bocor_pipa ?></td>
                                      <td><?php echo $key->kotor_kecil ?></td>
                                      <td><?php echo $key->kotor_berbau ?></td>
                                      <td><?php echo $key->tahun ?></td>
                                      <?php $no++ ?>
                                      <!-- Euclidian Distance  -->
                                      <?php $l = 0;
                                      $tcnm = array(); ?>
                                      <?php foreach ($keluhan_rand2 as $k) { ?>
                                          <td colspan="7"><?php $hnm[$l] = sqrt(pow(($key->kotor-$cn_kotor[$l]),2)+pow(($key->berbau-$cn_berbau[$l]),2)+pow(($key->kecil-$cn_kecil[$l]),2)+pow(($key->tidak_mengalir-$cn_tidak_mengalir[$l]),2)+pow(($key->bocor_pipa-$cn_bocor_pipa[$l]),2)+pow(($key->kotor_kecil-$cn_kotor_kecil[$l]),2)+pow(($key->kotor_berbau-$cn_kotor_berbau[$l]),2));
                                          echo $hnm[$l];
                                          $hcnm[$l] = $hnm[$l];
                                          
                                          ?>
                                          </td>
                                          <?php $l++ ?>
                                      <!-- Perbandingan klaster paling kecil -->
                                      <?php } ?>
                                      <?php for ($i=0; $i < COUNT($hcnm); $i++) { ?>
                                          <?php if ($hcnm[$i] == MIN($hcnm)) {
                                              echo "<td bgcolor='#FFFF00'>1</td>";//kuning
                                              $cnm = $i+1;
                                              $q = "insert into centroid_temp(jenis,iterasi,c) values('NM',1,'c".$cnm."')";
                                                $this->db->query($q);
                                          }
                                          else{
                                              echo "<td>0</td>";
                                          }
                                          ?>
                                      <?php } ?>
                                      <!-- Total Non-medoids -->
                                      <?php 
                                          for ($j=0; $j < COUNT($hcnm); $j++) {
                                              // if ($j == 0) {
                                                  $tcnm0 = $tcnm0 + $hcnm[$j];
                                                  $ttcnm[] = $tcnm0;
                                              // }
                                              // else{
                                                  
                                              // }
                                          }
                                          // echo "<td>".$tc0."</td>";
                                      ?>
                                  </tr>
                              <?php } ?>
                              <!-- Total Non-medoids -->
                              <tr align="center">
                                  <td colspan="6"><b>TOTAL</b></td>
                                  <td colspan="12"><b><?php echo $tcnm0 ?></b></td>
                              </tr>
                          </tbody>
                    </table>
              </div>
            </div>
          </div>
  
          <div class="widget-box">
            <div class="widget-content nopadding">
                <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                <h5>Selisih antara Non-Medoids dengan Medoids</h5>
              </div>
                <div class="jumbotron">
                      <div class="container">
                          <h4>
                          <!-- tc0 = total medoids dan tcnm0 = total non-medoids -->
                          Total Medoids : <?php echo $tc0 ?><br><br>
                          Total Non Medoids : <?php echo $tcnm0 ?><br><br>
                          <!-- selisih = total non-medoids dikurangi total medoids -->
                          Selisih : <?php echo $selisih = $tcnm0 - $tc0 ?><br><br>
                          <?php $n = "insert into hasil_iterasi(iterasi,total_medoids,total_non_medoids,selisih) values('1','".$tc0."','".$tcnm0."','".$selisih."')";
                                            $this->db->query($n); ?>
                          </h4>
                      </div>
                  </div>
            </div>
          </div> --}}


</div>


<!-- /.container-fluid -->
@endsection