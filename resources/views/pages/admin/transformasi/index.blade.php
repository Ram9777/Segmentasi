@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dataset</h1>
         {{-- <a href="{{ route('transformasi.iterasi') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas  fa-sm text-white-50"></i>Kelompokkan Data
            </a> --}}
    </div>

    <table class="table table-bordered table-striped" width="100%" cellspasing="0">
        <thead>
            <tr>
                <th colspan="4">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A : Pipa Distribusi</td>
                <td>B : Pipa Dinas & Asesoris</td>
                <td>C : Meter Air</td>
                <td>D : Kontinuitas Pengaliran</td>
            </tr>
            <tr>
                <td>E : Kualitas Air</td>
                <td>F : Persil Bocor</td>
                <td>G : Kesalahan Rekening</td>
                <td>H : lain-lain</td>
                </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" width="100%" cellspasing="0">
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
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Cigugur Girang</td>
                        <td>{{ $cga }}</td>
                        <td>{{ $cgb }}</td>
                        <td>{{ $cgc }}</td>
                        <td>{{ $cgd }}</td>
                        <td>{{ $cge }}</td>
                        <td>{{ $cgf }}</td>
                        <td>{{ $cgg }}</td>
                        <td>{{ $cgh }}</td>
                    </tr>
                    <tr>
                        <td>Cihanjuang Rahayu</td>
                        <td>{{ $cra }}</td>
                        <td>{{ $crb }}</td>
                        <td>{{ $crc }}</td>
                        <td>{{ $crd }}</td>
                        <td>{{ $cre }}</td>
                        <td>{{ $crf }}</td>
                        <td>{{ $crg }}</td>
                        <td>{{ $crh }}</td>
                    </tr>
                    <tr>
                        <td>Cihanjuang</td>
                        <td>{{ $cha }}</td>
                        <td>{{ $chb }}</td>
                        <td>{{ $chc }}</td>
                        <td>{{ $chd }}</td>
                        <td>{{ $che }}</td>
                        <td>{{ $chf }}</td>
                        <td>{{ $chg }}</td>
                        <td>{{ $chh }}</td>
                    </tr>
                    <tr>
                        <td>Cihideung</td>
                        <td>{{ $cna }}</td>
                        <td>{{ $cnb }}</td>
                        <td>{{ $cnc }}</td>
                        <td>{{ $cnd }}</td>
                        <td>{{ $cne }}</td>
                        <td>{{ $cnf }}</td>
                        <td>{{ $cng }}</td>
                        <td>{{ $cnh }}</td>
                    </tr>
                    <tr>
                        <td>Ciwaruga</td>
                        <td>{{ $cwa }}</td>
                        <td>{{ $cwb }}</td>
                        <td>{{ $cwc }}</td>
                        <td>{{ $cwd }}</td>
                        <td>{{ $cwe }}</td>
                        <td>{{ $cwf }}</td>
                        <td>{{ $cwg }}</td>
                        <td>{{ $cwh }}</td>
                    </tr>
                    <tr>
                        <td>Karyawangi</td>
                        <td>{{ $kwa }}</td>
                        <td>{{ $kwb }}</td>
                        <td>{{ $kwc }}</td>
                        <td>{{ $kwd }}</td>
                        <td>{{ $kwe }}</td>
                        <td>{{ $kwf }}</td>
                        <td>{{ $kwg }}</td>
                        <td>{{ $kwh }}</td>
                    </tr>
                    <tr>
                        <td>Sariwangi</td>
                        <td>{{ $swa }}</td>
                        <td>{{ $swb }}</td>
                        <td>{{ $swc }}</td>
                        <td>{{ $swd }}</td>
                        <td>{{ $swe }}</td>
                        <td>{{ $swf }}</td>
                        <td>{{ $swg }}</td>
                        <td>{{ $swh }}</td>
                    </tr>
                    <tr>
                        <td>Cikalong</td>
                        <td>{{ $cwcka }}</td>
                        <td>{{ $cwckb }}</td>
                        <td>{{ $cwckc }}</td>
                        <td>{{ $cwckd }}</td>
                        <td>{{ $cwcke }}</td>
                        <td>{{ $cwckf }}</td>
                        <td>{{ $cwckg }}</td>
                        <td>{{ $cwckh }}</td>
                    </tr>
                    <tr>
                        <td>Cipada</td>
                        <td>{{ $cwcpa }}</td>
                        <td>{{ $cwcpb }}</td>
                        <td>{{ $cwcpc }}</td>
                        <td>{{ $cwcpd }}</td>
                        <td>{{ $cwcpe }}</td>
                        <td>{{ $cwcpf }}</td>
                        <td>{{ $cwcpg }}</td>
                        <td>{{ $cwcph }}</td>
                    </tr>
                    <tr>
                        <td>Ciptagumati</td>
                        <td>{{ $cwcta }}</td>
                        <td>{{ $cwctb }}</td>
                        <td>{{ $cwctc }}</td>
                        <td>{{ $cwctd }}</td>
                        <td>{{ $cwcte }}</td>
                        <td>{{ $cwctf }}</td>
                        <td>{{ $cwctg }}</td>
                        <td>{{ $cwcth }}</td>
                    </tr>
                    <tr>
                        <td>Cisomang</td>
                        <td>{{ $cwcsa }}</td>
                        <td>{{ $cwcsb }}</td>
                        <td>{{ $cwcsc }}</td>
                        <td>{{ $cwcsd }}</td>
                        <td>{{ $cwcse }}</td>
                        <td>{{ $cwcsf }}</td>
                        <td>{{ $cwcsg }}</td>
                        <td>{{ $cwcsh }}</td>
                    </tr>
                    <tr>
                        <td>Ganjarsari</td>
                        <td>{{ $cwgja }}</td>
                        <td>{{ $cwgjb }}</td>
                        <td>{{ $cwgjc }}</td>
                        <td>{{ $cwgjd }}</td>
                        <td>{{ $cwgje }}</td>
                        <td>{{ $cwgjf }}</td>
                        <td>{{ $cwgjg }}</td>
                        <td>{{ $cwgjh }}</td>
                    </tr>
                    <tr>
                        <td>Kenangasari</td>
                        <td>{{ $cwksa }}</td>
                        <td>{{ $cwksb }}</td>
                        <td>{{ $cwksc }}</td>
                        <td>{{ $cwksd }}</td>
                        <td>{{ $cwkse }}</td>
                        <td>{{ $cwksf }}</td>
                        <td>{{ $cwksg }}</td>
                        <td>{{ $cwksh }}</td>
                    </tr>
                    <tr>
                        <td>Mandalamukti</td>
                        <td>{{ $cwmna }}</td>
                        <td>{{ $cwmnb }}</td>
                        <td>{{ $cwmnc }}</td>
                        <td>{{ $cwmnd }}</td>
                        <td>{{ $cwmne }}</td>
                        <td>{{ $cwmnf }}</td>
                        <td>{{ $cwmng }}</td>
                        <td>{{ $cwmnh }}</td>
                    </tr>
                    <tr>
                        <td>Mandalasari</td>
                        <td>{{ $cwmda }}</td>
                        <td>{{ $cwmdb }}</td>
                        <td>{{ $cwmdc }}</td>
                        <td>{{ $cwmdd }}</td>
                        <td>{{ $cwmde }}</td>
                        <td>{{ $cwmdf }}</td>
                        <td>{{ $cwmdg }}</td>
                        <td>{{ $cwmdh }}</td>
                    </tr>
                    <tr>
                        <td>Mekarjaya</td>
                        <td>{{ $cwmka }}</td>
                        <td>{{ $cwmkb }}</td>
                        <td>{{ $cwmkc }}</td>
                        <td>{{ $cwmkd }}</td>
                        <td>{{ $cwmke }}</td>
                        <td>{{ $cwmkf }}</td>
                        <td>{{ $cwmkg }}</td>
                        <td>{{ $cwmkh }}</td>
                    </tr>
                    <tr>
                        <td>Puteran</td>
                        <td>{{ $cwpta }}</td>
                        <td>{{ $cwptb }}</td>
                        <td>{{ $cwptc }}</td>
                        <td>{{ $cwptd }}</td>
                        <td>{{ $cwpte }}</td>
                        <td>{{ $cwptf }}</td>
                        <td>{{ $cwptg }}</td>
                        <td>{{ $cwpth }}</td>
                    </tr>
                    <tr>
                        <td>Rende</td>
                        <td>{{ $cwrea }}</td>
                        <td>{{ $cwreb }}</td>
                        <td>{{ $cwrec }}</td>
                        <td>{{ $cwred }}</td>
                        <td>{{ $cwree }}</td>
                        <td>{{ $cwref }}</td>
                        <td>{{ $cwreg }}</td>
                        <td>{{ $cwreh }}</td>
                    </tr>
                    <tr>
                        <td>Tenjolaut</td>
                        <td>{{ $cwtja }}</td>
                        <td>{{ $cwtjb }}</td>
                        <td>{{ $cwtjc }}</td>
                        <td>{{ $cwtjd }}</td>
                        <td>{{ $cwtje }}</td>
                        <td>{{ $cwtjf }}</td>
                        <td>{{ $cwtjg }}</td>
                        <td>{{ $cwtjh }}</td>
                    </tr>
                    <tr>
                        <td>Wangunjaya</td>
                        <td>{{ $cwwga }}</td>
                        <td>{{ $cwwgb }}</td>
                        <td>{{ $cwwgc }}</td>
                        <td>{{ $cwwgd }}</td>
                        <td>{{ $cwwge }}</td>
                        <td>{{ $cwwgf }}</td>
                        <td>{{ $cwwgg }}</td>
                        <td>{{ $cwwgh }}</td>
                    </tr>
                    <tr>
                        <td>Batujajar Timur</td>
                        <td>{{ $bjbta }}</td>
                        <td>{{ $bjbtb }}</td>
                        <td>{{ $bjbtc }}</td>
                        <td>{{ $bjbtd }}</td>
                        <td>{{ $bjbte }}</td>
                        <td>{{ $bjbtf }}</td>
                        <td>{{ $bjbtg }}</td>
                        <td>{{ $bjbth }}</td>
                    </tr>
                    <tr>
                        <td>Batujajar Barat</td>
                        <td>{{ $bjbba }}</td>
                        <td>{{ $bjbbb }}</td>
                        <td>{{ $bjbbc }}</td>
                        <td>{{ $bjbbd }}</td>
                        <td>{{ $bjbbe }}</td>
                        <td>{{ $bjbbf }}</td>
                        <td>{{ $bjbbg }}</td>
                        <td>{{ $bjbbh }}</td>
                    </tr>
                    <tr>
                        <td>Cangkorah</td>
                        <td>{{ $bjcga }}</td>
                        <td>{{ $bjcgb }}</td>
                        <td>{{ $bjcgc }}</td>
                        <td>{{ $bjcgd }}</td>
                        <td>{{ $bjcge }}</td>
                        <td>{{ $bjcgf }}</td>
                        <td>{{ $bjcgg }}</td>
                        <td>{{ $bjcgh }}</td>
                    </tr>
                    <tr>
                        <td>Galanggang</td>
                        <td>{{ $bjgla }}</td>
                        <td>{{ $bjglb }}</td>
                        <td>{{ $bjglc }}</td>
                        <td>{{ $bjgld }}</td>
                        <td>{{ $bjgle }}</td>
                        <td>{{ $bjglf }}</td>
                        <td>{{ $bjglg }}</td>
                        <td>{{ $bjglh }}</td>
                    </tr>
                    <tr>
                        <td>Giriasih</td>
                        <td>{{ $bjgra }}</td>
                        <td>{{ $bjgrb }}</td>
                        <td>{{ $bjgrc }}</td>
                        <td>{{ $bjgrd }}</td>
                        <td>{{ $bjgre }}</td>
                        <td>{{ $bjgrf }}</td>
                        <td>{{ $bjgrg }}</td>
                        <td>{{ $bjgrh }}</td>
                    </tr>
                    <tr>
                        <td>Pangauban</td>
                        <td>{{ $bjpga }}</td>
                        <td>{{ $bjpgb }}</td>
                        <td>{{ $bjpgc }}</td>
                        <td>{{ $bjpgd }}</td>
                        <td>{{ $bjpge }}</td>
                        <td>{{ $bjpgf }}</td>
                        <td>{{ $bjpgg }}</td>
                        <td>{{ $bjpgh }}</td>
                    </tr>
                    <tr>
                        <td>Selacau</td>
                        <td>{{ $bjsla }}</td>
                        <td>{{ $bjslb }}</td>
                        <td>{{ $bjslc }}</td>
                        <td>{{ $bjsld }}</td>
                        <td>{{ $bjsle }}</td>
                        <td>{{ $bjslf }}</td>
                        <td>{{ $bjslg }}</td>
                        <td>{{ $bjslh }}</td>
                    </tr>
                    <tr>
                        <td>Batulayang</td>
                        <td>{{ $clbta }}</td>
                        <td>{{ $clbtb }}</td>
                        <td>{{ $clbtc }}</td>
                        <td>{{ $clbtd }}</td>
                        <td>{{ $clbte }}</td>
                        <td>{{ $clbtf }}</td>
                        <td>{{ $clbtg }}</td>
                        <td>{{ $clbth }}</td>
                    </tr>
                    <tr>
                        <td>Bongas</td>
                        <td>{{ $clbga }}</td>
                        <td>{{ $clbgb }}</td>
                        <td>{{ $clbgc }}</td>
                        <td>{{ $clbgd }}</td>
                        <td>{{ $clbge }}</td>
                        <td>{{ $clbgf }}</td>
                        <td>{{ $clbgg }}</td>
                        <td>{{ $clbgh }}</td>
                    </tr>
                    <tr>
                        <td>Budiharja</td>
                        <td>{{ $clbda }}</td>
                        <td>{{ $clbdb }}</td>
                        <td>{{ $clbdc }}</td>
                        <td>{{ $clbdd }}</td>
                        <td>{{ $clbde }}</td>
                        <td>{{ $clbdf }}</td>
                        <td>{{ $clbdg }}</td>
                        <td>{{ $clbdh }}</td>
                    </tr>
                    <tr>
                        <td>Karanganyar</td>
                        <td>{{ $clkra }}</td>
                        <td>{{ $clkrb }}</td>
                        <td>{{ $clkrc }}</td>
                        <td>{{ $clkrd }}</td>
                        <td>{{ $clkre }}</td>
                        <td>{{ $clkrf }}</td>
                        <td>{{ $clkrg }}</td>
                        <td>{{ $clkrh }}</td>
                    </tr>
                    <tr>
                        <td>Karangtanjung</td>
                        <td>{{ $clkta }}</td>
                        <td>{{ $clktb }}</td>
                        <td>{{ $clktc }}</td>
                        <td>{{ $clktd }}</td>
                        <td>{{ $clkte }}</td>
                        <td>{{ $clktf }}</td>
                        <td>{{ $clktg }}</td>
                        <td>{{ $clkth }}</td>
                    </tr>
                    <tr>
                        <td>Karyamukti</td>
                        <td>{{ $clkya }}</td>
                        <td>{{ $clkyb }}</td>
                        <td>{{ $clkyc }}</td>
                        <td>{{ $clkyd }}</td>
                        <td>{{ $clkye }}</td>
                        <td>{{ $clkyf }}</td>
                        <td>{{ $clkyg }}</td>
                        <td>{{ $clkyh }}</td>
                    </tr>
                    <tr>
                        <td>Kidangpananjung</td>
                        <td>{{ $clkda }}</td>
                        <td>{{ $clkdb }}</td>
                        <td>{{ $clkdc }}</td>
                        <td>{{ $clkdd }}</td>
                        <td>{{ $clkde }}</td>
                        <td>{{ $clkdf }}</td>
                        <td>{{ $clkdg }}</td>
                        <td>{{ $clkdh }}</td>
                    </tr>
                    <tr>
                        <td>Mukapayung</td>
                        <td>{{ $clmka }}</td>
                        <td>{{ $clmkb }}</td>
                        <td>{{ $clmkc }}</td>
                        <td>{{ $clmkd }}</td>
                        <td>{{ $clmke }}</td>
                        <td>{{ $clmkf }}</td>
                        <td>{{ $clmkg }}</td>
                        <td>{{ $clmkh }}</td>
                    </tr>
                    <tr>
                        <td>Nanggerang</td>
                        <td>{{ $clnga }}</td>
                        <td>{{ $clngb }}</td>
                        <td>{{ $clngc }}</td>
                        <td>{{ $clngd }}</td>
                        <td>{{ $clnge }}</td>
                        <td>{{ $clngf }}</td>
                        <td>{{ $clngg }}</td>
                        <td>{{ $clngh }}</td>
                    </tr>
                    <tr>
                        <td>Rancapanggung</td>
                        <td>{{ $clrca }}</td>
                        <td>{{ $clrcb }}</td>
                        <td>{{ $clrcc }}</td>
                        <td>{{ $clrcd }}</td>
                        <td>{{ $clrce }}</td>
                        <td>{{ $clrcf }}</td>
                        <td>{{ $clrcg }}</td>
                        <td>{{ $clrch }}</td>
                    </tr>
                    <tr>
                        <td>Cipada</td>
                        <td>{{ $crcpa }}</td>
                        <td>{{ $crcpb }}</td>
                        <td>{{ $crcpc }}</td>
                        <td>{{ $crcpd }}</td>
                        <td>{{ $crcpe }}</td>
                        <td>{{ $crcpf }}</td>
                        <td>{{ $crcpg }}</td>
                        <td>{{ $crcph }}</td>
                    </tr>
                    <tr>
                        <td>jambudipa</td>
                        <td>{{ $crjba }}</td>
                        <td>{{ $crjbb }}</td>
                        <td>{{ $crjbc }}</td>
                        <td>{{ $crjbd }}</td>
                        <td>{{ $crjbe }}</td>
                        <td>{{ $crjbf }}</td>
                        <td>{{ $crjbg }}</td>
                        <td>{{ $crjbh }}</td>
                    </tr>
                    <tr>
                        <td>Kertawangi</td>
                        <td>{{ $crkta }}</td>
                        <td>{{ $crktb }}</td>
                        <td>{{ $crktc }}</td>
                        <td>{{ $crktd }}</td>
                        <td>{{ $crkte }}</td>
                        <td>{{ $crktf }}</td>
                        <td>{{ $crktg }}</td>
                        <td>{{ $crkth }}</td>
                    </tr>
                    <tr>
                        <td>Padaasih</td>
                        <td>{{ $crpda }}</td>
                        <td>{{ $crpdb }}</td>
                        <td>{{ $crpdc }}</td>
                        <td>{{ $crpdd }}</td>
                        <td>{{ $crpde }}</td>
                        <td>{{ $crpdf }}</td>
                        <td>{{ $crpdg }}</td>
                        <td>{{ $crpdh }}</td>
                    </tr>
                    <tr>
                        <td>Pasirhalang</td>
                        <td>{{ $crpha }}</td>
                        <td>{{ $crphb }}</td>
                        <td>{{ $crphc }}</td>
                        <td>{{ $crphd }}</td>
                        <td>{{ $crphe }}</td>
                        <td>{{ $crphf }}</td>
                        <td>{{ $crphg }}</td>
                        <td>{{ $crphh }}</td>
                    </tr>
                    <tr>
                        <td>Pasirlangu</td>
                        <td>{{ $crpga }}</td>
                        <td>{{ $crpgb }}</td>
                        <td>{{ $crpgc }}</td>
                        <td>{{ $crpgd }}</td>
                        <td>{{ $crpge }}</td>
                        <td>{{ $crpgf }}</td>
                        <td>{{ $crpgg }}</td>
                        <td>{{ $crpgh }}</td>
                    </tr>
                    <tr>
                        <td>Sadangmekar</td>
                        <td>{{ $crsma }}</td>
                        <td>{{ $crsmb }}</td>
                        <td>{{ $crsmc }}</td>
                        <td>{{ $crsmd }}</td>
                        <td>{{ $crsme }}</td>
                        <td>{{ $crsmf }}</td>
                        <td>{{ $crsmg }}</td>
                        <td>{{ $crsmh }}</td>
                    </tr>
                    <tr>
                        <td>Tugumukti</td>
                        <td>{{ $crtma }}</td>
                        <td>{{ $crtmb }}</td>
                        <td>{{ $crtmc }}</td>
                        <td>{{ $crtmd }}</td>
                        <td>{{ $crtme }}</td>
                        <td>{{ $crtmf }}</td>
                        <td>{{ $crtmg }}</td>
                        <td>{{ $crtmh }}</td>
                    </tr>
                    <tr>
                        <td>Cibodas</td>
                        <td>{{ $lbcda }}</td>
                        <td>{{ $lbcdb }}</td>
                        <td>{{ $lbcdc }}</td>
                        <td>{{ $lbcdd }}</td>
                        <td>{{ $lbcde }}</td>
                        <td>{{ $lbcdf }}</td>
                        <td>{{ $lbcdg }}</td>
                        <td>{{ $lbcdh }}</td>
                    </tr>
                    <tr>
                        <td>Cibogo</td>
                        <td>{{ $lbcga }}</td>
                        <td>{{ $lbcgb }}</td>
                        <td>{{ $lbcgc }}</td>
                        <td>{{ $lbcgd }}</td>
                        <td>{{ $lbcge }}</td>
                        <td>{{ $lbcgf }}</td>
                        <td>{{ $lbcgg }}</td>
                        <td>{{ $lbcgh }}</td>
                    </tr>
                    <tr>
                        <td>Cikahuripan</td>
                        <td>{{ $lbcha }}</td>
                        <td>{{ $lbchb }}</td>
                        <td>{{ $lbchc }}</td>
                        <td>{{ $lbchd }}</td>
                        <td>{{ $lbche }}</td>
                        <td>{{ $lbchf }}</td>
                        <td>{{ $lbchg }}</td>
                        <td>{{ $lbchh }}</td>
                    </tr>
                    <tr>
                        <td>Cikidang</td>
                        <td>{{ $lbcna }}</td>
                        <td>{{ $lbcnb }}</td>
                        <td>{{ $lbcnc }}</td>
                        <td>{{ $lbcnd }}</td>
                        <td>{{ $lbcne }}</td>
                        <td>{{ $lbcnf }}</td>
                        <td>{{ $lbcng }}</td>
                        <td>{{ $lbcnh }}</td>
                    </tr>
                    <tr>
                        <td>Cikole</td>
                        <td>{{ $lbcoa }}</td>
                        <td>{{ $lbcob }}</td>
                        <td>{{ $lbcoc }}</td>
                        <td>{{ $lbcod }}</td>
                        <td>{{ $lbcoe }}</td>
                        <td>{{ $lbcof }}</td>
                        <td>{{ $lbcog }}</td>
                        <td>{{ $lbcoh }}</td>
                    </tr>
                    <tr>
                        <td>Gudangkahuripan</td>
                        <td>{{ $lbgka }}</td>
                        <td>{{ $lbgkb }}</td>
                        <td>{{ $lbgkc }}</td>
                        <td>{{ $lbgkd }}</td>
                        <td>{{ $lbgke }}</td>
                        <td>{{ $lbgkf }}</td>
                        <td>{{ $lbgkg }}</td>
                        <td>{{ $lbgkh }}</td>
                    </tr>
                    <tr>
                        <td>Jayagiri</td>
                        <td>{{ $lbjya }}</td>
                        <td>{{ $lbjyb }}</td>
                        <td>{{ $lbjyc }}</td>
                        <td>{{ $lbjyd }}</td>
                        <td>{{ $lbjye }}</td>
                        <td>{{ $lbjyf }}</td>
                        <td>{{ $lbjyg }}</td>
                        <td>{{ $lbjyh }}</td>
                    </tr>
                    <tr>
                        <td>Kayuambon</td>
                        <td>{{ $lbkaa }}</td>
                        <td>{{ $lbkab }}</td>
                        <td>{{ $lbkac }}</td>
                        <td>{{ $lbkad }}</td>
                        <td>{{ $lbkae }}</td>
                        <td>{{ $lbkaf }}</td>
                        <td>{{ $lbkag }}</td>
                        <td>{{ $lbkah }}</td>
                    </tr>
                    <tr>
                        <td>Lengeunsari</td>
                        <td>{{ $lblsa }}</td>
                        <td>{{ $lblsb }}</td>
                        <td>{{ $lblsc }}</td>
                        <td>{{ $lblsd }}</td>
                        <td>{{ $lblse }}</td>
                        <td>{{ $lblsf }}</td>
                        <td>{{ $lblsg }}</td>
                        <td>{{ $lblsh }}</td>
                    </tr>
                    <tr>
                        <td>Mekarwangi</td>
                        <td>{{ $lbmwa }}</td>
                        <td>{{ $lbmwb }}</td>
                        <td>{{ $lbmwc }}</td>
                        <td>{{ $lbmwd }}</td>
                        <td>{{ $lbmwe }}</td>
                        <td>{{ $lbmwf }}</td>
                        <td>{{ $lbmwg }}</td>
                        <td>{{ $lbmwh }}</td>
                    </tr>
                    <tr>
                        <td>Pagerwangi</td>
                        <td>{{ $lbpwa }}</td>
                        <td>{{ $lbpwb }}</td>
                        <td>{{ $lbpwc }}</td>
                        <td>{{ $lbpwd }}</td>
                        <td>{{ $lbpwe }}</td>
                        <td>{{ $lbpwf }}</td>
                        <td>{{ $lbpwg }}</td>
                        <td>{{ $lbpwh }}</td>
                    </tr>
                    <tr>
                        <td>Sukajaya</td>
                        <td>{{ $lbsja }}</td>
                        <td>{{ $lbsjb }}</td>
                        <td>{{ $lbsjc }}</td>
                        <td>{{ $lbsjd }}</td>
                        <td>{{ $lbsje }}</td>
                        <td>{{ $lbsjf }}</td>
                        <td>{{ $lbsjg }}</td>
                        <td>{{ $lbsjh }}</td>
                    </tr>
                    <tr>
                        <td>Bojongkoneng</td>
                        <td>{{ $ngbga }}</td>
                        <td>{{ $ngbgb }}</td>
                        <td>{{ $ngbgc }}</td>
                        <td>{{ $ngbgd }}</td>
                        <td>{{ $ngbge }}</td>
                        <td>{{ $ngbgf }}</td>
                        <td>{{ $ngbgg }}</td>
                        <td>{{ $ngbgh }}</td>
                    </tr>
                    <tr>
                        <td>Cilame</td>
                        <td>{{ $ngcla }}</td>
                        <td>{{ $ngclb }}</td>
                        <td>{{ $ngclc }}</td>
                        <td>{{ $ngcld }}</td>
                        <td>{{ $ngcle }}</td>
                        <td>{{ $ngclf }}</td>
                        <td>{{ $ngclg }}</td>
                        <td>{{ $ngclh }}</td>
                    </tr>
                    <tr>
                        <td>Cimareme</td>
                        <td>{{ $ngcma }}</td>
                        <td>{{ $ngcmb }}</td>
                        <td>{{ $ngcmc }}</td>
                        <td>{{ $ngcmd }}</td>
                        <td>{{ $ngcme }}</td>
                        <td>{{ $ngcmf }}</td>
                        <td>{{ $ngcmg }}</td>
                        <td>{{ $ngcmh }}</td>
                    </tr>
                    <tr>
                        <td>Cimanggu</td>
                        <td>{{ $ngcga }}</td>
                        <td>{{ $ngcgb }}</td>
                        <td>{{ $ngcgc }}</td>
                        <td>{{ $ngcgd }}</td>
                        <td>{{ $ngcge }}</td>
                        <td>{{ $ngcgf }}</td>
                        <td>{{ $ngcgg }}</td>
                        <td>{{ $ngcgh }}</td>
                    </tr>
                    <tr>
                        <td>Gadobangkong</td>
                        <td>{{ $nggba }}</td>
                        <td>{{ $nggbb }}</td>
                        <td>{{ $nggbc }}</td>
                        <td>{{ $nggbd }}</td>
                        <td>{{ $nggbe }}</td>
                        <td>{{ $nggbf }}</td>
                        <td>{{ $nggbg }}</td>
                        <td>{{ $nggbh }}</td>
                    </tr>
                    <tr>
                        <td>Margajaya</td>
                        <td>{{ $ngmga }}</td>
                        <td>{{ $ngmgb }}</td>
                        <td>{{ $ngmgc }}</td>
                        <td>{{ $ngmgd }}</td>
                        <td>{{ $ngmge }}</td>
                        <td>{{ $ngmgf }}</td>
                        <td>{{ $ngmgg }}</td>
                        <td>{{ $ngmgh }}</td>
                    </tr>
                    <tr>
                        <td>Mekarsasi</td>
                        <td>{{ $ngmsa }}</td>
                        <td>{{ $ngmsb }}</td>
                        <td>{{ $ngmsc }}</td>
                        <td>{{ $ngmsd }}</td>
                        <td>{{ $ngmse }}</td>
                        <td>{{ $ngmsf }}</td>
                        <td>{{ $ngmsg }}</td>
                        <td>{{ $ngmsh }}</td>
                    </tr>
                    <tr>
                        <td>Pakuhaji</td>
                        <td>{{ $ngpha }}</td>
                        <td>{{ $ngphb }}</td>
                        <td>{{ $ngphc }}</td>
                        <td>{{ $ngphd }}</td>
                        <td>{{ $ngphe }}</td>
                        <td>{{ $ngphf }}</td>
                        <td>{{ $ngphg }}</td>
                        <td>{{ $ngphh }}</td>
                    </tr>
                    <tr>
                        <td>Sukatani</td>
                        <td>{{ $ngsta }}</td>
                        <td>{{ $ngstb }}</td>
                        <td>{{ $ngstc }}</td>
                        <td>{{ $ngstd }}</td>
                        <td>{{ $ngste }}</td>
                        <td>{{ $ngstf }}</td>
                        <td>{{ $ngstg }}</td>
                        <td>{{ $ngsth }}</td>
                    </tr>
                    <tr>
                        <td>Tanimulya</td>
                        <td>{{ $ngtma }}</td>
                        <td>{{ $ngtmb }}</td>
                        <td>{{ $ngtmc }}</td>
                        <td>{{ $ngtmd }}</td>
                        <td>{{ $ngtme }}</td>
                        <td>{{ $ngtmf }}</td>
                        <td>{{ $ngtmg }}</td>
                        <td>{{ $ngtmh }}</td>
                    </tr>
                    <tr>
                        <td>Cempaka Mekar</td>
                        <td>{{ $pdcma }}</td>
                        <td>{{ $ngstb }}</td>
                        <td>{{ $ngstc }}</td>
                        <td>{{ $ngstd }}</td>
                        <td>{{ $ngste }}</td>
                        <td>{{ $ngstf }}</td>
                        <td>{{ $ngstg }}</td>
                        <td>{{ $ngsth }}</td>
                    </tr>
                    <tr>
                        <td>Ciburuy</td>
                        <td>{{ $pdcba }}</td>
                        <td>{{ $pdcbb }}</td>
                        <td>{{ $pdcbc }}</td>
                        <td>{{ $pdcbd }}</td>
                        <td>{{ $pdcbe }}</td>
                        <td>{{ $pdcbf }}</td>
                        <td>{{ $pdcbg }}</td>
                        <td>{{ $pdcbh }}</td>
                    </tr>
                    <tr>
                        <td>Cimerang</td>
                        <td>{{ $pdcra }}</td>
                        <td>{{ $pdcrb }}</td>
                        <td>{{ $pdcrc }}</td>
                        <td>{{ $pdcrd }}</td>
                        <td>{{ $pdcre }}</td>
                        <td>{{ $pdcrf }}</td>
                        <td>{{ $pdcrg }}</td>
                        <td>{{ $pdcrh }}</td>
                    </tr>
                    <tr>
                        <td>Cipendeuy</td>
                        <td>{{ $pdcda }}</td>
                        <td>{{ $pdcdb }}</td>
                        <td>{{ $pdcdc }}</td>
                        <td>{{ $pdcdd }}</td>
                        <td>{{ $pdcde }}</td>
                        <td>{{ $pdcdf }}</td>
                        <td>{{ $pdcdg }}</td>
                        <td>{{ $pdcdh }}</td>
                    </tr>
                    <tr>
                        <td>Jayamekar</td>
                        <td>{{ $pdjma }}</td>
                        <td>{{ $pdjmb }}</td>
                        <td>{{ $pdjmc }}</td>
                        <td>{{ $pdjmd }}</td>
                        <td>{{ $pdjme }}</td>
                        <td>{{ $pdjmf }}</td>
                        <td>{{ $pdjmg }}</td>
                        <td>{{ $pdjmh }}</td>
                    </tr>
                    <tr>
                        <td>Kertajaya</td>
                        <td>{{ $pdkja }}</td>
                        <td>{{ $pdkjb }}</td>
                        <td>{{ $pdkjc }}</td>
                        <td>{{ $pdkjd }}</td>
                        <td>{{ $pdkje }}</td>
                        <td>{{ $pdkjf }}</td>
                        <td>{{ $pdkjg }}</td>
                        <td>{{ $pdkjh }}</td>
                    </tr>
                    <tr>
                        <td>Kertamulya</td>
                        <td>{{ $pdkma }}</td>
                        <td>{{ $pdkmb }}</td>
                        <td>{{ $pdkmc }}</td>
                        <td>{{ $pdkmd }}</td>
                        <td>{{ $pdkme }}</td>
                        <td>{{ $pdkmf }}</td>
                        <td>{{ $pdkmg }}</td>
                        <td>{{ $pdkmh }}</td>
                    </tr>
                    <tr>
                        <td>Laksanamekar</td>
                        <td>{{ $pdlma }}</td>
                        <td>{{ $pdlmb }}</td>
                        <td>{{ $pdlmc }}</td>
                        <td>{{ $pdlmd }}</td>
                        <td>{{ $pdlme }}</td>
                        <td>{{ $pdlmf }}</td>
                        <td>{{ $pdlmg }}</td>
                        <td>{{ $pdlmh }}</td>
                    </tr>
                    <tr>
                        <td>Cibeber</td>
                        <td>{{ $csbba }}</td>
                        <td>{{ $csbbb }}</td>
                        <td>{{ $csbbc }}</td>
                        <td>{{ $csbbd }}</td>
                        <td>{{ $csbbe }}</td>
                        <td>{{ $csbbf }}</td>
                        <td>{{ $csbbg }}</td>
                        <td>{{ $csbbh }}</td>
                    </tr>
                    <tr>
                        <td>Cibereum</td>
                        <td>{{ $cscba }}</td>
                        <td>{{ $cscbb }}</td>
                        <td>{{ $cscbc }}</td>
                        <td>{{ $cscbd }}</td>
                        <td>{{ $cscbe }}</td>
                        <td>{{ $cscbf }}</td>
                        <td>{{ $cscbg }}</td>
                        <td>{{ $cscbh }}</td>
                    </tr>
                    <tr>
                        <td>Leuwigajah</td>
                        <td>{{ $cslga }}</td>
                        <td>{{ $cslgb }}</td>
                        <td>{{ $cslgc }}</td>
                        <td>{{ $cslgd }}</td>
                        <td>{{ $cslge }}</td>
                        <td>{{ $cslgf }}</td>
                        <td>{{ $cslgg }}</td>
                        <td>{{ $cslgh }}</td>
                    </tr>
                    <tr>
                        <td>Melong</td>
                        <td>{{ $csmla }}</td>
                        <td>{{ $csmlb }}</td>
                        <td>{{ $csmlc }}</td>
                        <td>{{ $csmld }}</td>
                        <td>{{ $csmle }}</td>
                        <td>{{ $csmlf }}</td>
                        <td>{{ $csmlg }}</td>
                        <td>{{ $csmlh }}</td>
                    </tr>
                    <tr>
                        <td>Utama</td>
                        <td>{{ $csuta }}</td>
                        <td>{{ $csutb }}</td>
                        <td>{{ $csutc }}</td>
                        <td>{{ $csutd }}</td>
                        <td>{{ $csute }}</td>
                        <td>{{ $csutf }}</td>
                        <td>{{ $csutg }}</td>
                        <td>{{ $csuth }}</td>
                    </tr>
                    <tr>
                        <td>Baros</td>
                        <td>{{ $ctbra }}</td>
                        <td>{{ $ctbrb }}</td>
                        <td>{{ $ctbrc }}</td>
                        <td>{{ $ctbrd }}</td>
                        <td>{{ $ctbre }}</td>
                        <td>{{ $ctbrf }}</td>
                        <td>{{ $ctbrg }}</td>
                        <td>{{ $ctbrh }}</td>
                    </tr>
                    <tr>
                        <td>Cigugur Tengah</td>
                        <td>{{ $ctcta }}</td>
                        <td>{{ $ctctb }}</td>
                        <td>{{ $ctctc }}</td>
                        <td>{{ $ctctd }}</td>
                        <td>{{ $ctcte }}</td>
                        <td>{{ $ctctf }}</td>
                        <td>{{ $ctctg }}</td>
                        <td>{{ $ctcth }}</td>
                    </tr>
                    <tr>
                        <td>Karangmekar</td>
                        <td>{{ $ctkma }}</td>
                        <td>{{ $ctkmb }}</td>
                        <td>{{ $ctkmc }}</td>
                        <td>{{ $ctkmd }}</td>
                        <td>{{ $ctkme }}</td>
                        <td>{{ $ctkmf }}</td>
                        <td>{{ $ctkmg }}</td>
                        <td>{{ $ctkmh }}</td>
                    </tr>
                    <tr>
                        <td>Padasuka</td>
                        <td>{{ $ctpsa }}</td>
                        <td>{{ $ctpsb }}</td>
                        <td>{{ $ctpsc }}</td>
                        <td>{{ $ctpsd }}</td>
                        <td>{{ $ctpse }}</td>
                        <td>{{ $ctpsf }}</td>
                        <td>{{ $ctpsg }}</td>
                        <td>{{ $ctpsh }}</td>
                    </tr>
                    <tr>
                        <td>Setiamanah</td>
                        <td>{{ $ctsma }}</td>
                        <td>{{ $ctsmb }}</td>
                        <td>{{ $ctsmc }}</td>
                        <td>{{ $ctsmd }}</td>
                        <td>{{ $ctsme }}</td>
                        <td>{{ $ctsmf }}</td>
                        <td>{{ $ctsmg }}</td>
                        <td>{{ $ctsmh }}</td>
                    </tr>
                    <tr>
                        <td>Cibabat</td>
                        <td>{{ $cucba }}</td>
                        <td>{{ $cucbb }}</td>
                        <td>{{ $cucbc }}</td>
                        <td>{{ $cucbd }}</td>
                        <td>{{ $cucbe }}</td>
                        <td>{{ $cucbf }}</td>
                        <td>{{ $cucbg }}</td>
                        <td>{{ $cucbh }}</td>
                    </tr>
                    <tr>
                        <td>Cipageran</td>
                        <td>{{ $cucpa }}</td>
                        <td>{{ $cucpb }}</td>
                        <td>{{ $cucpc }}</td>
                        <td>{{ $cucpd }}</td>
                        <td>{{ $cucpe }}</td>
                        <td>{{ $cucpf }}</td>
                        <td>{{ $cucpg }}</td>
                        <td>{{ $cucph }}</td>
                    </tr>
                    <tr>
                        <td>Citereup</td>
                        <td>{{ $cucta }}</td>
                        <td>{{ $cuctb }}</td>
                        <td>{{ $cuctc }}</td>
                        <td>{{ $cuctd }}</td>
                        <td>{{ $cucte }}</td>
                        <td>{{ $cuctf }}</td>
                        <td>{{ $cuctg }}</td>
                        <td>{{ $cucth }}</td>
                    </tr>
                    <tr>
                        <td>Pasirkaliki</td>
                        <td>{{ $cupka }}</td>
                        <td>{{ $cupkb }}</td>
                        <td>{{ $cupkc }}</td>
                        <td>{{ $cupkd }}</td>
                        <td>{{ $cupke }}</td>
                        <td>{{ $cupkf }}</td>
                        <td>{{ $cupkg }}</td>
                        <td>{{ $cupkh }}</td>
                    </tr>
                    </tbody>
                </table>
                {{-- {{ $items->links() }} --}}
            </div>
        </div>
    </div>

    <hr>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Dataset</h1>
       <a href="{{ route('transformasi.create') }}" class="btn btn-sm btn-primary shadow-sm">
     <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Dataset
    </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
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
                            <th class="bg-info">Action</th>
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
                        <td>
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
                        </td>
                    </tr>
                       @empty
                           <tr>
                               <td colspan="8" class="text-center">Data Kosong</td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
               {{-- {{ $items->links() }} --}}
            </div>
        </div>
    </div>

    <!-- Content Row -->

   

    <!-- Content Row -->
    

</div>
<!-- /.container-fluid -->
@endsection