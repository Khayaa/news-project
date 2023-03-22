<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Update Category</strong><span class="small ms-1"></span>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-719" role="tab">
                                            <svg class="icon me-2">
                                                <use
                                                    xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-media-play') }}">
                                                </use>
                                            </svg></a></li>

                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-719">
                                        <form wire:submit.prevent='update' enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name </label>
                                                <input type="text" wire:model='category.name' wire:change='Changeslug' class="form-control @error('category.name') is-invalid @enderror" id="category.name" placeholder="name">
                                                <x-input-error for="category.name"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label for="category.slug" class="form-label">Slug </label>
                                                <input type="text" wire:model='category.slug' class="form-control @error('category.slug') is-invalid @enderror" id="category.slug" disabled placeholder="">
                                                <x-input-error for="category.slug"></x-input-error>
                                              </div>


                                            <div class="mb-3">
                                                <button class="btn btn-secondary btn-rounded" type="submit">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
