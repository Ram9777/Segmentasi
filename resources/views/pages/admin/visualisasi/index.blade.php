@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Visualisasi Pemetaan</h1>
         {{-- <a href="{{ route('transformasi.iterasi') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas  fa-sm text-white-50"></i>Kelompokkan Data
            </a> --}}
    </div>
    
    <div class="panel">
        <div id="chartnilai2"></div>
    </div>
    <table class="table table-bordered table-striped" width="100%" cellspasing="0">
        <thead>
            <tr>
                <th>Klaster</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>G</th>
                <th>H</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <th>{{ $total_A }}</th>
                <th>{{ $total_B }}</th>
                <th>{{ $total_C }}</th>
                <th>{{ $total_D }}</th>
                <th>{{ $total_E }}</th>
                <th>{{ $total_F }}</th>
                <th>{{ $total_G }}</th>
                <th>{{ $total_H }}</th>
            </tr>
            <tr>
                <th>2</th>
                <th>{{ $total_A2 }}</th>
                <th>{{ $total_B2 }}</th>
                <th>{{ $total_C2 }}</th>
                <th>{{ $total_D2 }}</th>
                <th>{{ $total_E2 }}</th>
                <th>{{ $total_F2 }}</th>
                <th>{{ $total_G2 }}</th>
                <th>{{ $total_H2 }}</th>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="9">Keterangan</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>C1</td>
                <td colspan="8">Terdapat {{ $totalc1 }} data pada klaster 1. Dengan detail <b><?php echo number_format($vA,2); ?>%</b> berjenis keluhan A,  <b><?php echo number_format($vB,2); ?>%</b> berjenis keluhan B, 
                    <b><?php echo number_format($vC,2); ?>%</b> berjenis keluhan C,  <b><?php echo number_format($vD,2); ?>%</b> berjenis keluhan D,  <b><?php echo number_format($vE,2); ?>%</b> berjenis keluhan E, 
                    <b><?php echo number_format($vF,2); ?>%</b> berjenis keluhan F,  <b><?php echo number_format($vG,2); ?>%</b> berjenis keluhan G, dan  <b><?php echo number_format($vH,2); ?>%</b> berjenis keluhan H</td>
            </tr>
            <tr>
                <td>C2</td>
                <td colspan="8">Terdapat {{ $totalc2 }} data pada klaster 2. Dengan detail <b><?php echo number_format($vA2,2); ?>%</b> berjenis keluhan A,  <b><?php echo number_format($vB2,2); ?>%</b> berjenis keluhan B, 
                    <b><?php echo number_format($vC2,2); ?>%</b> berjenis keluhan C,  <b><?php echo number_format($vD2,2); ?>%</b> berjenis keluhan D,  <b><?php echo number_format($vE2,2); ?>%</b> berjenis keluhan E, 
                    <b><?php echo number_format($vF2,2); ?>%</b> berjenis keluhan F,  <b><?php echo number_format($vG2,2); ?>%</b> berjenis keluhan G, dan  <b><?php echo number_format($vH2,2); ?>%</b> berjenis keluhan H</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered table-striped" width="100%" cellspasing="0">
        <thead>
            <tr>
                <?php if($totalc1 > $totalc2){
                    echo "<td><p><b>Jadi, dari nilai diatas kita dapat mengetahui bahwa karakteristik dari klaster 1 adalah desa yang memiliki
                    jumlah keluhan yang tergolong tinggi, sedangkan karakteristik dari klaster 2 adalah desa yang memiliki jumlah keluhan
                    yang tergolong rendah</b></p></td>";
                }else{
                    echo "<td><p><b>Jadi, dari nilai diatas kita dapat mengetahui bahwa karakteristik dari klaster 1 adalah desa yang memiliki
                    jumlah keluhan yang tergolong rendah, sedangkan karakteristik dari klaster 2 adalah desa yang memiliki jumlah keluhan
                    yang tergolong tinggi</b></p></td>";
                } ?>   
            </tr>
        </thead>
    </table>
  
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <?php $no = 0 ?>
                Klaster 1
                <table class="table table-bordered table-striped" width="100%" cellspasing="0">
                    <thead>
                        <tr>
                            <th colspan="2">Berikut adalah sebaran wilayah yang berada pada klaster 1</th>
                        </tr>
                        <tr>
                            <th class="bg-info">No</th>
                            <th class="bg-info">Wilayah</th>
                            {{-- <th class="bg-info">A</th>
                            <th class="bg-info">B</th>
                            <th class="bg-info">C</th>
                            <th class="bg-info">D</th>
                            <th class="bg-info">E</th>
                            <th class="bg-info">F</th>
                            <th class="bg-info">G</th>
                            <th class="bg-info">H</th> --}}
                            {{-- <th class="bg-info">klaster</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                    <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{ $item->kode_wilayah }}</td>
                            {{-- <td>{{ $item->A }}</td>
                            <td>{{ $item->B }}</td>
                            <td>{{ $item->C }}</td>
                            <td>{{ $item->D }}</td>
                            <td>{{ $item->E }}</td>
                            <td>{{ $item->F }}</td>
                            <td>{{ $item->G }}</td>
                            <td>{{ $item->H }}</td> --}}
                        {{-- <td>{{ $item->centroid }}</td> --}}
                       
                    </tr>
                    <?php $no++ ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   

  

    
    {{-- <div class="panel">
        <div id="chartnilai2"></div>
    </div> --}}
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <?php $no = 0 ?>
                Klaster 2
                <table class="table table-bordered table-striped" width="100%" cellspasing="0">
                    <thead>
                        <tr>
                            <th colspan="2">Berikut adalah sebaran wilayah yang berada pada klaster 2</th>
                        </tr>
                        <tr>
                            <th class="bg-info">No</th>
                            <th class="bg-info">Wilayah</th>
                            {{-- <th class="bg-info">A</th>
                            <th class="bg-info">B</th>
                            <th class="bg-info">C</th>
                            <th class="bg-info">D</th>
                            <th class="bg-info">E</th>
                            <th class="bg-info">F</th>
                            <th class="bg-info">G</th>
                            <th class="bg-info">H</th> --}}
                            {{-- <th class="bg-info">klaster</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $item2)
                    <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{ $item2->kode_wilayah }}</td>
                            {{-- <td>{{ $item2->A }}</td>
                            <td>{{ $item2->B }}</td>
                            <td>{{ $item2->C }}</td>
                            <td>{{ $item2->D }}</td>
                            <td>{{ $item2->E }}</td>
                            <td>{{ $item2->F }}</td>
                            <td>{{ $item2->G }}</td>
                            <td>{{ $item2->H }}</td> --}}
                        {{-- <td>{{ $item2->centroid }}</td> --}}
                       
                    </tr>
                    <?php $no++ ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


{{-- <canvas id="chart"></canvas> --}}
</div>
@endsection

@section('coba')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
   Highcharts.chart('chartnilai', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Hasil Pengelompokan'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'A',
            y: {!!json_encode($vA) !!},
            sliced: true,
            selected: true
        }, {
            name: 'B',
            y: {!!json_encode($vB) !!}
        }, {
            name: 'C',
            y: {!!json_encode($vC) !!}
        }, {
            name: 'D',
            y: {!!json_encode($vD) !!}
        }, {
            name: 'E',
            y: {!!json_encode($vE) !!}
        }, {
            name: 'F',
            y: {!!json_encode($vF) !!}
        }, {
            name: 'G',
            y: {!!json_encode($vG) !!}
        }, {
            name: 'H',
            y: {!!json_encode($vH) !!}
        }]
    }]
});
</script>

<script>
    Highcharts.chart('chartnilai2', {
     chart: {
         plotBackgroundColor: null,
         plotBorderWidth: null,
         plotShadow: false,
         type: 'pie'
     },
     title: {
         text: 'Hasil Pengelompokan'
     },
     tooltip: {
         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
     },
     accessibility: {
         point: {
             valueSuffix: '%'
         }
     },
     plotOptions: {
         pie: {
             allowPointSelect: true,
             cursor: 'pointer',
             dataLabels: {
                 enabled: true,
                 format: '<b>{point.name}</b>: {point.percentage:.1f} %'
             }
         }
     },
     series: [{
         name: 'Brands',
         colorByPoint: true,
         data: [{
             name: 'Klaster 1',
             y: {!!json_encode($c1) !!},
             sliced: true,
             selected: true
         }, {
             name: 'Klaster 2',
             y: {!!json_encode($c2) !!}
         }]
     }]
 });
 </script>

@stop

{{-- <script src="{{ url('backend/vendor/chart.js/Chart.min.js') }}"></script>
<script> --}}
    {{-- window.onload=function(){
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $item->centroid; ?>],
            datasets: [{
                label:'Data Visualisasi ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $item->kode_wilayah; ?>]
            }]
        },
 
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    };
 </script> --}}


   


    

