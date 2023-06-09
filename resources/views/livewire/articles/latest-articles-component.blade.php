<div>
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>News Articles </h1>
                        <span class="subheading">Latest Articles</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               @foreach ($articles as $article)
                 <!-- Post preview-->
                 <div class="post-preview">
                    <a href="{{ route('article.show' ,['slug' => $article->slug]) }}">
                        <h2 class="post-title">{{ $article->title }}</h2>
                        <h3 class="post-subtitle">{{ \Illuminate\Support\Str::limit($article->content, 100, $end = '...') }}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">{{ $article->user->name }}</a> |
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('Y-m-d'); }}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
               @endforeach
               {{ $articles->links()  }}




                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
</div>
