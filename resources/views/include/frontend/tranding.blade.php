<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                    </div>
                </div>
            </div>
            @php
            $berita = \DB::table('beritas as a')
                        ->join('kategoris as k', 'k.id', '=', 'a.id_kategori')
                        ->select('a.judul', 'a.isi', 'a.cover', 'a.created_at', 'k.nama as kategori', 'a.id')
                        ->orderby('created_at', 'desc')->get();
            @endphp
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($berita as $index => $data)
                        @if ($index == 0)
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('/img/berita/' . $data->cover) }}" height="550px" >
                                    <div class="trend-top-cap">
                                        <span>{{ $data->kategori }}</span>
                                        <h2><a href="{{ url('/detail/' . $data->id) }}">{{ $data->judul }}</a></h2>
                                        <b style="color: white">{{ substr($data->isi, 0, 70) }} ...</b>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($berita->skip(1)->take(3) as $data)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('/img/berita/' . $data->cover) }}" height="180px" width="200px" >
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{ $data->kategori }}</span>
                                            <h4><a href="{{ url('/detail/' . $data->id) }}">{{ $data->judul }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    @foreach ($berita->skip(4)->take(5) as $data)
                    <div class="trand-right-single d-flex mb-3">
                        <div class="trand-right-img" style="flex: 1;">
                            <img src="{{ asset('/img/berita/' . $data->cover) }}" alt="" style="width: 100px; height: 100px; object-fit: cover;">
                        </div>
                        <div class="trand-right-cap" style="flex: 2;">
                            <span class="color1">{{ $data->kategori }}</span>
                            <h4><a href="{{ url('/detail/' . $data->id) }}">{{ $data->judul }}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
