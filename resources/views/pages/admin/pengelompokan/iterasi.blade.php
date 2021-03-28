@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    {{  DB::table('centroid_temp')->truncate() }}
    {{-- DB::table('hasil_iterasi')->truncate() --}}
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

    <?php $it = $iterasi+1 ?>
    {{-- <a style="align-content: right" class="btn btn-default" 
    href="{{ ('show'.$it) }}">Lanjutkan Iterasi</a> --}}
    <div class="widget-box">
        <div class="widget-content nopadding">
            <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
            <h5>Hasil Medoids</h5>
          </div>
            <div class="jumbotron">
                  <div class="container">
                     <h4> <p>Dikarenakan hasil selisih antara Medoid dengan kandidat Medoid baru di bawah 0, maka hasil dari kandidat medoid baru dijadikan sebagai Medoids. Dan dibentuk perhitungan untuk kandidat medoid baru.</p>
                      
                          <?php foreach ($hasil_iterasi as $dat) {
                              //echo $medoids = round ($key->total_non_medoids,4);
                               $medoids = $dat->total_non_medoids;
                          } ?>
                      </h4>
                  </div>
              </div>
        </div>
      </div>
      <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-content nopadding">
                <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                <!-- Tabel Centroid Medoid -->
                <h5>Kandidat Medoid Baru</h5>
              </div>
              <table class="table table-bordered" width="100%" cellspasing="0">
                <thead>
                    <tr>
                        <th class="bg-info">Wilayah</th>
                        <th class="bg-info">A</th>
                        <th class="bg-info">B</th>
                        <th class="bg-info">C</th>
                        <th class="bg-info">D</th>
                        <th class="bg-info">E</th>
                        <th class="bg-info">F</th>
                        <th class="bg-info">G</th>
                        <th class="bg-info">H</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                   @forelse ($rands as $rand)
                   <tr>
                    <td>{{ $rand->kode_wilayah }}</td>
                    <td>{{ $rand->A }}</td>
                    <td>{{ $rand->B }}</td>
                    <td>{{ $rand->C }}</td>
                    <td>{{ $rand->D }}</td>
                    <td>{{ $rand->E }}</td>
                    <td>{{ $rand->F }}</td>
                    <td>{{ $rand->G }}</td>
                    <td>{{ $rand->H }}</td>
                  
                </tr>
                   @empty
                       <tr>
                           <td colspan="8" class="text-center">Data Kosong</td>
                       </tr>
                   @endforelse
                </tbody>
            </table>
            <div class="table-pk">
            <table class="table table-bordered table-striped" width="100%" cellspasing="0">
                <thead>
                    <tr>
                        <th rowspan="2" class="bg-info"><font size='1'>Wilayah</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>A</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>B</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>C</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>D</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>E</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>F</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>G</font></th>
                        <th rowspan="2" class="bg-info"><font size='1'>H</font></th>
                        <?php $c = 1 ?>
								<?php foreach ($rands as $m) { ?>
									<!-- 7 kolom  -->
									<th colspan="8" class="bg-info"><font size='1'>Medoid <?php echo $c; $c++ ?></font></th>
								<?php } ?>
								<?php $d = 1 ?>
								<?php foreach ($rands as $m) { ?>
									<!-- 2 baris -->
									<th rowspan="2" class="bg-info"><font size='1'>C<?php echo $d; $d++ ?></font></th>
								<?php } ?>
                        {{-- <th>Medoid 2</th> --}}
                        {{-- <th>Action</th> --}}
                    </tr>
                    <tr>
                        <?php foreach ($rands as $rand) { ?>
                            <th class="bg-info"><font size='1'><?php $c_A[] = $rand->A; echo $rand->A ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_B[] = $rand->B; echo $rand->B ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_C[] = $rand->C; echo $rand->C ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_D[] = $rand->D; echo $rand->D ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_E[] = $rand->E; echo $rand->E ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_F[] = $rand->F; echo $rand->F ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_G[] = $rand->G; echo $rand->G ?></font></th>
                            <th class="bg-info"><font size='1'><?php $c_H[] = $rand->H; echo $rand->H ?></font></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $tc0 = 0;
							$tc = 0 ?>
                   <?php foreach ($data as $dat) { ?>
                   <tr>
                    <td><font size='1'>{{ $dat->kode_wilayah }}</font></td>
                    <td><font size='1'>{{ $dat->A }}</font></td>
                    <td><font size='1'>{{ $dat->B }}</font></td>
                    <td><font size='1'>{{ $dat->C }}</font></td>
                    <td><font size='1'>{{ $dat->D }}</font></td>
                    <td><font size='1'>{{ $dat->E }}</font></td>
                    <td><font size='1'>{{ $dat->F }}</font></td>
                    <td><font size='1'>{{ $dat->G }}</font></td>
                    <td><font size='1'>{{ $dat->H }}</font></td>
                    <?php $e= 0; 
                    $tc = array(); ?>
									<?php foreach ($rands as $k) { ?>
                                      <td colspan="8">  <font size='1'> <?php $hm[$e] = sqrt(pow(($dat->A-$c_A[$e]),2)+pow(($dat->B-$c_B[$e]),2)
                                        +pow(($dat->C-$c_C[$e]),2)+pow(($dat->D-$c_D[$e]),2)
                                        +pow(($dat->E-$c_E[$e]),2)+pow(($dat->F-$c_F[$e]),2)
                                        +pow(($dat->G-$c_G[$e]),2)+pow(($dat->H-$c_H[$e]),2));
										echo $hm[$e];// Hasil dari Euclidian distance
										$hc[$e] = $hm[$e];
                                        ?>
                                        </font></td>
                                        <?php $e++ ?>
									<?php } ?>
                                        <!-- min max jika hasil yang paling kecil 1-->
									{{-- <?php for ($i=0; $i < COUNT($hc); $i++) { ?>
										<?php if ($hc[$i] == MIN($hc)) {
											echo "<td><font size='1'>1</font></td>";//kuning
											$cm = $i+1;
											DB::insert("insert into centroid_temp(jenis,iterasi,c) values(?,?,?)",[
                                            'NM',1,"c$cm"
                                        ]);
	              							
										}
										else{
											echo "<td><font size='1'>0</font></td>";
										}
										?>
                                    <?php } ?> --}}
                                    <?php for ($i=0; $i < COUNT($hc); $i++) { ?>
                                        {{-- <?php for ($a=0; $a < COUNT($hc); $a++) { ?> --}}
                                        <?php if ($hc[$i] == MIN($hc)) {
                                            echo "<td><font size='1'>1</font></td>";//kuning
                                            $cm = $i+1;
                                            DB::insert("insert into centroid_temp(jenis,iterasi,c) values(?,?,?)",[
                                            'NM',1,"c$cm"
                                        ]);
                                              // $this->db->query($q);
                                        }
                                        else{
                                            echo "<td><font size='1'>0</font></td>";
                                        }
                                        ?>
                                    <?php } ?>
									<!-- Total Iterasi Medoids -->
									<?php 
										for ($j=0; $j < COUNT($hc); $j++) { ?>
                                            <?php if ($hc[$j] == MIN($hc)) {
												$tc0 = $tc0 + $hc[$j];
												$ttc[] = $tc0;
                                        }
                                    }
									?>
								</tr>
							 <?php } ?>
							<tr align="center">
								<!-- Total Iterasi Medoids -->
								<td colspan="6"><b>TOTAL KEDEKATAN</b></td>
								<td colspan="12"><b><?php echo $tc0 ?></b></td>
							</tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
    </div>
    <div class="widget-box">
        <div class="widget-content nopadding">
            <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
            <h5>SELISIH TOTAL KEDEKATAN ANTARA KANDIDAT MEDOID LAMA DAN KANDIDAT MEDOID BARU</h5>
          </div>
            <div class="jumbotron">
                  <div class="container">
                  <!-- hasil dari medoids baru -->
                      <h4>
                      Total Distance Lama : <?php echo $medoids ?><br><br>
                      Total Distance Baru : <?php echo $ttc[88] ?><br><br>
                      Selisih : <?php echo $selisih = $ttc[88] - $medoids ?><br><br>
                      <?php DB::insert("insert into hasil_iterasi(iterasi,total_medoids,total_non_medoids,selisih) 
                      values(?,?,?,?)",[
                        "$it","$medoids","$ttc[88]","$selisih"
                      ]); ?>
                      </h4>
                  </div>
              </div>
              <a style="align-content: right" class="btn btn-default" 
    href="{{ ('show'.$it) }}">Lanjutkan Iterasi</a>
        </div>
      </div>
</div>



<!-- /.container-fluid -->
@endsection