<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- General CSS Files -->
    @include('includes.admin.style')
</head>
<body>
   <!-- Main Content -->
   <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Article</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Article</div>
        </div>
      </div>

      <div class="section-body">

        <h2 class="section-title">Article Style B</h2>
        <div class="row" style="padding: 64px">
          @foreach($artikels as $artikel)
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" >
                  <img style="width: 100%" src="{{ url('/images/'.$artikel->file) }}">
                </div>
                {{-- <div class="article-badge">
                  <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                </div> --}}
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2>
                    <a href="#">{{ $artikel->judul }}</a>
                  </h2>
                </div>
                <p>{!! \Illuminate\Support\Str::limit($artikel->keterangan, 110, '...')  !!}</p>
                <div class="article-cta">
                  <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          @endforeach
         
        </div>
        
      </div>
    </section>
  </div>
</body>
</html>