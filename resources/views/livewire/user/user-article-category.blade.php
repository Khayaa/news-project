<div>

    {{-- The best athlete wants his opponent at his best. --}}
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4>Categories</h4>
                                <a role="button" class="btn btn-primary"
                                    href="{{ route('category.create') }}">Create New Category</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <br>
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">

                                            <th>Name </th>

                                            <th>Slug</th>
                                            {{-- <th class="text-center">Payment Method</th> --}}
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr class="align-middle">

                                                <td>
                                                    <div>{{ $category->name }}</div>

                                                </td>

                                                <td>
                                                    <div>
                                                        {{ $category->slug }}
                                                    </div>
                                                    {{-- <div class="small text-medium-emphasis"><span>New</span> | Registered:
                                                    Jan 1, 2020</div> --}}
                                                </td>

                                                {{-- <td>
                                                <div class="small text-medium-emphasis">Last login</div>
                                                <div class="fw-semibold">10 sec ago</div>
                                            </td> --}}
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-options') }}">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a
                                                            class="dropdown-item" target="_blank" href="{{ route('category.edit',['id'=> $category->id]) }}">Edit</a>



                                                            {{-- <a
                                                                class="dropdown-item" href="{{ route('article.edit', ['id' => $article->id]) }}">Edit</a><a --}}
                                                                {{-- class="dropdown-item text-danger"
                                                                wire:click='delete({{ articles->id }})'>Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                                <hr>
                                    {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>
</div>
