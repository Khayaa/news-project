<div>
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Articles By category</h1>
                        <h2 class="subheading">All Categories</h2>

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
                    @foreach ($categories as $category)
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            <h2 class="section-heading">{{ $category->name }}</h2>
                        </a>
                        @forelse ($category->subcategories as $subcategory)
                        <a href="{{ route('subcategories.show',['category_slug'=>$category->slug ,'subcategory_slug'=> $subcategory->slug ]) }}" class="list-group-item list-group-item-action">{{ $subcategory->name }}</a>
                        @empty
                        <p>No Sub Category</p>
                        @endforelse
                      </div>
                      @endforeach
                      <hr>
                    {{ $categories->links() }}

                </div>
            </div>
        </div>
    </article>
</div>
