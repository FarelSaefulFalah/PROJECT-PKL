<!-- Recent Articles Start -->
<div class="recent-articles">
    <div class="container">
        <div class="recent-wrapper">
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Recent Articles</h3>
                    </div>
                </div>
            </div>
            @php
                $berita = \DB::table('beritas as a')
                    ->join('kategoris as k', 'k.id', '=', 'a.id_kategori')
                    ->select('a.judul', 'a.isi', 'a.cover', 'a.created_at', 'k.nama as kategori', 'a.id')
                    ->orderby('created_at', 'asc')
                    ->take(4) // mengambil 4 data terbaru
                    ->get();
            @endphp
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex">
                        @foreach ($berita as $data)
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ asset('/img/berita/' . $data->cover) }}" height="200px" width="200px">
                                </div>
                                <div class="what-cap">
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
</div>
<!-- Recent Articles End -->
