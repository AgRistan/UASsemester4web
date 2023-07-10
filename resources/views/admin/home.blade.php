@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Selamat Datang di menu utama admin</h5>
            </div>
            <div class="card-body">
                <p>
                    Ini adalah menu perhitungan algoritma waspas
                </p>
            </div>
        </div>

     </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Laporan</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>WSM</th>
                    <th>WPM</th>
                    <th>Qi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                <tbody>
                    <tr>
                        <td>{{$item->nama}}</td>
                            {{-- WSM --}}
                            <td>
                                {{(($item->C1 / $C1max['laporans'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['laporans'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['laporans'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['laporans'])*$widget4['kriterias'])}}
                            </td>
                            {{-- WPM --}}
                            <td>
                                {{(($item->C1 / $C1max['laporans'])**$widget1['kriterias'])*
                                (($item->C2 / $C2max['laporans'])**$widget2['kriterias'])*
                                (($item->C3 / $C3max['laporans'])**$widget3['kriterias'])*
                                (($item->C4 / $C4max['laporans'])**$widget4['kriterias'])}}
                            </td>
                            {{-- Qi --}}
                            <td>
                                {{
                                (((($item->C1 / $C1max['laporans'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['laporans'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['laporans'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['laporans'])*$widget4['kriterias']))*0.5)
                                    +
                                ((($item->C1 / $C1max['laporans'])**$widget1['kriterias'])*
                                (($item->C2 / $C2max['laporans'])**$widget2['kriterias'])*
                                (($item->C3 / $C3max['laporans'])**$widget3['kriterias'])*
                                (($item->C4 / $C4max['laporans'])**$widget4['kriterias'])*0.5)
                                }}
                            </td>
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection