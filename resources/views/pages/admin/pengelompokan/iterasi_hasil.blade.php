@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    {{ DB::table('hasil_klaster')->truncate() }}
    {{-- DB::table('hasil_iterasi')->truncate() --}}
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hasil Pengelompokan Data</h1>
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

    <div class="widget-box">
        <div class="widget-content nopadding">
            <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
            {{-- <h5>Centroid Non-Medoids</h5> --}}
          </div>
          <?php $keyed = [];$line = []; $value = []; ?>
            <?php foreach ($centroid_temp_by_c as $val) { ?>
                  <?php $c[] = $val->c; ?>
              <?php } ?>
              <?php foreach ($centroid_temp_by_iterasi as $key) { ?>
                <?php $q = DB::table('centroid_temp')->where('iterasi',$key->iterasi);
                   $q = $q->get()
                   ?>
                  <?php $no = 1; ?>
                  <!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> -->
                  {{-- <center><b style="font-size: 20px">Iterasi ke-<?php echo $key->iterasi ?></b></center>
                  <div style="overflow-x: auto;"> --}}
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  {{-- <th><center>No.</center></th>
                                  <th><center>Jenis</center></th> --}}
                                  <?php for ($i=0; $i < count($c); $i++) { ?>
                                      {{-- <th><center><?php echo strtoupper($c[$i]); ?></center></th> --}}
                                      <?php $line[$c[$i]] = 0; ?>
                                  <?php } ?>
                              </tr>
                          </thead>
                          <tbody>
                                  {{-- <?php foreach($q as $tq) { ?>
                                    <tr align="center">
                                        <td><?php echo $no ?></td>
                                        <td><?php if ($tq->jenis == "M") {
                                            echo "Medoids";
                                        }
                                        else{
                                            echo "Non-Medoids";
                                        } ?></td>
                                        <?php for ($j=0; $j < COUNT($c); $j++) {
                                            if ($tq->c == $c[$j])
                                             { ?>
                                                <td bgcolor='#FFFF00'>1</td>
                                            <?php }
                                            else{
                                                echo "<td>0</td>";
                                            }
                                        } ?>
                                    </tr>
                                  <?php $no++ ?>
                                <?php } ?> --}}
                          </tbody>
                      </table>
                  </div>
                  <!-- </div> -->
              <?php } ?>
        </div>
      </div>

      {{-- <div class="widget-box">
        <div class="widget-content nopadding">
            <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
            <h5>Hasil Pengelompokan</h5> --}}
            <?php foreach ($centroid_temp_by_iterasi as $key) {
                  if ($key->iterasi == 1) {
                      $it = $key->iterasi;
                  }
                  else{
                      $it = $key->iterasi-1;
                  }
              } ?>
              <?php $q2 = DB::table('centroid_temp')->where('iterasi',$it); 
              $q2 = $q2->get() ?>
              <?php foreach ($q2 as $vil) {
                 $hc[] = $vil->c;
                // $de = $vil->medoid;
                //$hc[] = $vil;
              } ?>
              <?php $no = 0 ?>
          </div>
          {{-- <div class="table-pk">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="bg-info"><center>medoid</center></th>
                    
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>--}}
          <div style="overflow-x: auto;">
            <div class="table-pk">
              <table class="table table-bordered table-striped">
                  <thead>
                      <th class="bg-info"><center>No.</center></th>
                      <th class="bg-info"><center>Wilayah</center></th>
                              <th rowspan="2" class="bg-info"><center>A</center></th>
                              <th rowspan="2" class="bg-info"><center>B</center></th>
                              <th rowspan="2" class="bg-info"><center>C</center></th>
                              <th rowspan="2" class="bg-info"><center>D</center> </th>
                              <th rowspan="2" class="bg-info"><center>E</center></th>
                              <th rowspan="2" class="bg-info"><center>F</center></th>
                              <th rowspan="2" class="bg-info"><center>G</center></th>
                              <th rowspan="2" class="bg-info"><center>H</center></th>
                              {{-- <th rowspan="2" class="bg-info"><center>Medoid 1</center></th>
                              <th rowspan="2" class="bg-info"><center>Medoid 2</center></th> --}}
                      <?php for ($i=0; $i < count($c); $i++) { ?>
                          <th class="bg-info"><center><?php echo strtoupper($c[$i]); ?></center></th>
                          <?php $keyed[] = strtoupper($c[$i]); ?>
                      <?php } ?>
                  </thead>
                  <tbody>
                      <?php foreach ($data as $key) { ?>
                          <tr align="center">
                              <td><?php echo $no+1 ?></td>
                              <td><?php echo $key->kode_wilayah ?></td>
                                  <td><?php echo $key->A ?></td>
                                  <td><?php echo $key->B ?></td>
                                  <td><?php echo $key->C ?></td>
                                  <td><?php echo $key->D ?></td>
                                  <td><?php echo $key->E ?></td>
                                  <td><?php echo $key->F ?></td>
                                  <td><?php echo $key->G ?></td>
                                  <td><?php echo $key->H ?></td>
                                  {{-- <td></td>
                                  <td></td> --}}
                              <?php for ($k=0; $k < count($c); $k++) { ?>
                                  <?php if ($hc[$no] == $c[$k]){ ?>
                                  <?php
                                      $line[$c[$k]]++;
                                  ?>
                                      <td>1</td>
                                      <?php $kk = $k+1; ?>
                                      <?php 
                                       $q3 = DB::insert("insert into hasil_klaster(fk_trf,kode_wilayah,A,B,C,D,E,F,G,H,centroid) values(?,?,?,?,?,?,?,?,?,?,?)",[
                                            "$key->id","$key->kode_wilayah","$key->A","$key->B","$key->C","$key->D","$key->E","$key->F","$key->G","$key->H","c$kk"
                                            ]);
                                    //    $q3 = $q3->get()
                                       ?>
                                  <?php }
                                  else{
                                      echo "<td>0</td>";
                                  } ?>
                              <?php } ?>
                          </tr>
                          <?php $no++ ?>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
         
      </div>
      

   

</div>



<!-- /.container-fluid -->
@endsection