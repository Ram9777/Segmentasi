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
                <h5>Medoid</h5>
              </div>
              <table class="table table-bordered" width="100%" cellspasing="0">
                <thead>
                    <tr>
                        <th class="bg-info"><font size='2'>Wilayah</font></th>
                        <th class="bg-info"><font size='2'>A</font></th>
                        <th class="bg-info"><font size='2'>B</font></th>
                        <th class="bg-info"><font size='2'>C</font></th>
                        <th class="bg-info"><font size='2'>D</font></th>
                        <th class="bg-info"><font size='2'>E</font></th>
                        <th class="bg-info"><font size='2'>F</font></th>
                        <th class="bg-info"><font size='2'>G</font></th>
                        <th class="bg-info"><font size='2'>H</font></th>
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
                                      <td colspan="8"> <font size='1'>  <?php $hm[$e] = sqrt(pow(($dat->A-$c_A[$e]),2)+pow(($dat->B-$c_B[$e]),2)
                                        +pow(($dat->C-$c_C[$e]),2)+pow(($dat->D-$c_D[$e]),2)
                                        +pow(($dat->E-$c_E[$e]),2)+pow(($dat->F-$c_F[$e]),2)
                                        +pow(($dat->G-$c_G[$e]),2)+pow(($dat->H-$c_H[$e]),2));
										echo $hm[$e];// Hasil dari Euclidian distance
										$hc[$e] = $hm[$e];
                                        ?></font>
                                        </td>
                                        <?php $e++ ?>
									<?php } ?>
                                        <!-- min max jika hasil yang paling kecil 1-->
                                        <?php for ($i=0; $i < COUNT($hc); $i++) { ?>
                                            
                                            <?php if ($hc[$i] == MIN($hc)) {
                                                echo "<td><font size='1'>1</font></td>";//kuning
                                                $cm = $i+1;
                                                DB::insert("insert into centroid_temp(jenis,iterasi,c) values(?,?,?)",[
                                                'M',1,"c$cm"
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
										for ($j=0; $j < COUNT($hc); $j++) {  ?>
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

<hr height="2">

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
               @forelse ($rands2 as $rand2)
               <tr>
                <td>{{ $rand2->kode_wilayah }}</td>
                <td>{{ $rand2->A }}</td>
                <td>{{ $rand2->B }}</td>
                <td>{{ $rand2->C }}</td>
                <td>{{ $rand2->D }}</td>
                <td>{{ $rand2->E }}</td>
                <td>{{ $rand2->F }}</td>
                <td>{{ $rand2->G }}</td>
                <td>{{ $rand2->H }}</td>
              
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
                    <?php $f = 1 ?>
                            <?php foreach ($rands2 as $m) { ?>
                                <!-- 7 kolom  -->
                                <th colspan="8" class="bg-info"><font size='1'>Medoid <?php echo $f; $f++ ?></font></th>
                            <?php } ?>
                            <?php $g = 1 ?>
                            <?php foreach ($rands2 as $m) { ?>
                                <!-- 2 baris -->
                                <th rowspan="2" class="bg-info"><font size='1'>C<?php echo $g; $g++ ?></font></th>
                            <?php } ?>
                    {{-- <th>Medoid 2</th> --}}
                    {{-- <th>Action</th> --}}
                </tr>
                <tr>
                    <?php foreach ($rands2 as $rand2) { ?>
                        <th class="bg-info"><font size='1'><?php $cn_A[] = $rand2->A; echo $rand2->A ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_B[] = $rand2->B; echo $rand2->B ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_C[] = $rand2->C; echo $rand2->C ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_D[] = $rand2->D; echo $rand2->D ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_E[] = $rand2->E; echo $rand2->E ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_F[] = $rand2->F; echo $rand2->F ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_G[] = $rand2->G; echo $rand2->G ?></font></th>
                        <th class="bg-info"><font size='1'><?php $cn_H[] = $rand2->H; echo $rand2->H ?></font></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php $tcnm0 = 0;
                $tcnm1 = 0;
                        $tcnm = 0 ?>
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
                <?php $i= 0; 
                $tcnm = array(); ?>
                                <?php foreach ($rands2 as $k) { ?>
                                    <td colspan="8">  <font size='1'> <?php $hnm[$i] = sqrt(pow(($dat->A-$cn_A[$i]),2)+pow(($dat->B-$cn_B[$i]),2)
                                    +pow(($dat->C-$cn_C[$i]),2)+pow(($dat->D-$cn_D[$i]),2)
                                    +pow(($dat->i-$cn_E[$i]),2)+pow(($dat->F-$cn_F[$i]),2)
                                    +pow(($dat->G-$cn_G[$i]),2)+pow(($dat->H-$cn_H[$i]),2));
                                    echo $hnm[$i];// Hasil dari iuclidian distanci
                                    $hcnm[$i] = $hnm[$i];
                                    ?>
                                    </font></td>
                                    <?php $i++ ?>
                                <?php } ?>

                                {{-- <?php for ($i=0; $i < COUNT($hc); $i++) { ?>
                                    <?php for ($a=0; $a < COUNT($hc); $a++) { ?>
                                    <?php if ($hc[$i] == MIN($hc) && $hc[$a] == MAX($hc)) {
                                        echo "<td bgcolor='#FFFF00'><font size='1'>1</font></td>";//kuning
                                        $cm = $i+1;
                                        DB::insert("insert into centroid_temp(jenis,iterasi,c,medoid,medoidd) values(?,?,?,?,?)",[
                                        'M',1,"c$cm","$hc[$i]","$hc[$a]"
                                    ]);
                                          // $this->db->query($q);
                                    }
                                    else{
                                        echo "<td><font size='1'>0</font></td>";
                                    }
                                    ?>
                                <?php } } ?> --}}
                                    <!-- min max jika hasil yang paling kecil 1-->
                                {{-- <?php for ($i=0; $i < COUNT($hcnm); $i++) { ?>
                                    <?php if ($hcnm[$i] == MIN($hcnm)) {
                                        echo "<td><font size='1'>1</font></td>";//kuning
                                         $cnm = $i+1;
                                        DB::insert("insert into centroid_temp(jenis,iterasi,c,medoid) values(?,?,?,?)",[
                                            'NM',1,"c$cnm","$hcnm[$i]"
                                        ]);
                                          // $this->db->query($q);
                                    }
                                    else{
                                        echo "<td><font size='1'>0</font></td>";
                                    }
                                    ?>
                                <?php } ?> --}}
                                <?php for ($i=0; $i < COUNT($hcnm); $i++) { ?>
                                    {{-- <?php for ($a=0; $a < COUNT($hcnm); $a++) { ?> --}}
                                    <?php if ($hcnm[$i] == MIN($hcnm)) {
                                        echo "<td><font size='1'>1</font></td>";//kuning
                                        $cnm = $i+1;
                                        DB::insert("insert into centroid_temp(jenis,iterasi,c) values(?,?,?)",[
                                        'NM',1,"c$cnm"
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
                                    for ($j=0; $j < COUNT($hcnm); $j++) { ?>
                                        <?php if ($hcnm[$j] == MIN($hcnm)) {
                                            $tcnm0 = $tcnm0 + $hcnm[$j];
                                            $ttcnm[] = $tcnm0;
                                    }
                                }
                                ?>
                                <?php 
                                for ($j=0; $j < COUNT($hcnm); $j++) { ?>
                                    <?php if ($hcnm[$j] == MAX($hcnm)) {
                                        $tcnm1 = $tcnm1 + $hcnm[$j];
                                        $ttcnm1[] = $tcnm1;
                                }
                            }
                            ?>
                            </tr>
                         <?php } ?>
                        <tr align="center">
                            <!-- Total Iterasi Medoids -->
                            <td colspan="6"><b>TOTAL KEDEKATAN</b></td>
                            <td colspan="12"><b><?php echo $tcnm0 ?> {{--tes<?php echo $tcnm1 ?>--}}</b></td>
                        </tr>
            </tbody>
        </table>
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
                      <h4>
                      <!-- tc0 = total medoids dan tcnm0 = total non-medoids -->
                      Total Distance Lama : <?php echo $tc0 ?><br><br>
                      Total Distance Baru : <?php echo $tcnm0 ?><br><br>
                      <!-- selisih = total non-medoids dikurangi total medoids -->
                      Selisih : <?php echo $selisih = $tcnm0 - $tc0 ?><br><br>
                      <?php DB::insert("insert into hasil_iterasi(iterasi,total_medoids,total_non_medoids,selisih) values(?,?,?,?)",[
                                            '1',"$tc0","$tcnm0","$selisih"
                                        ]); ?>
                                        
                      </h4>
                  </div>
              </div>
              <h3>Pengelompokan Keluhan Iterasi Ke-1</h3>
      <a style="align-content: right" class="btn btn-default" 
      href=" {{  ('show') }}">Lanjutkan Iterasi</a>
        </div>


</div>



<!-- /.container-fluid -->
@endsection