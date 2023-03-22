<div>
    <div>

        {{-- The best athlete wants his opponent at his best. --}}
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4>Sub Categories</h4>
                                    <a role="button" class="btn btn-primary"
                                        href="{{ route('sub-category.create') }}">Create SubCategory</a>
                                </div>

                            </div>
                            <div class="card-body">
                                <br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">

                                                <th>Name </th>

                                                <th>Category</th>
                                                {{-- <th class="text-center">Payment Method</th> --}}
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subcategories as $subcategory)
                                                <tr class="align-middle">

                                                    <td>
                                                        <div>{{ $subcategory->name }}</div>

                                                    </td>

                                                    <td>
                                                        <div>
                                                            {{ $subcategory->category->name }}
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
                                                                class="dropdown-item"  href="{{ route('sub-category.edit',['id'=> $subcategory->id]) }}">Edit</a>



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
                                    {{ $subcategories->links() }}
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
      {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
