<div>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4>Articles</h4>
                                <a role="button" class="btn btn-primary" href="/"></a>
                            </div>

                        </div>
                        <div class="card-body">
                            <br>
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">

                                            <th>Name </th>

                                            <th>Status</th>
                                            {{-- <th class="text-center">Payment Method</th> --}}
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                            <tr class="align-middle">

                                                <td>
                                                    <div>{{ $article->title }}</div>
                                                    <div class="small text-medium-emphasis">
                                                        <span>{{ $article->user->name }}</span> | Created:
                                                        {{ $article->created_at }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        @if ($article->status == 'approved')
                                                            <span class="badge text-bg-success">Approved</span>
                                                        @else
                                                            <span class="badge text-bg-danger">Disapproved</span>
                                                        @endif
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
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" target="_blank"
                                                                href="{{ route('article.show', ['slug' => $article->slug]) }}">Open</a>
                                                                @if ($article->status == 'approved')
                                                                <a
                                                                class="dropdown-item"
                                                                wire:click.prevent='Disapprove({{ $article->id }})'>Disapprove</a>
                                                                @else
                                                                <a
                                                                class="dropdown-item"
                                                                wire:click.prevent='Approve({{ $article->id }})'>Approve</a>
                                                                @endif
                                                                <a class="dropdown-item text-danger"
                                                                wire:click.prevent='delete({{ $article->id }})'>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                                <hr>
                                {{ $articles->links() }}
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
