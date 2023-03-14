<div>
    <header class="masthead" style="background-image: url({{ $article->article_image }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{ $article->title }}</h1>
                        <h2 class="subheading">{{ \Illuminate\Support\Str::limit($article->content, 100, $end = '...') }}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!"> {{ $article->user->name }} </a> |
                           {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('Y-m-d'); }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                   <p>
                    {{ $article->content }}
                   </p>
                        Placeholder text by
                        <a href="http://spaceipsum.com/">Space Ipsum</a>
                        &middot; Images by
                        <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
