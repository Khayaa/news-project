<div>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Create Question Paper</strong><span class="small ms-1"></span>
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
                                        <form wire:submit.prevent='create' enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title">
                                                <x-input-error for="title"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="email" class="form-control" id="slug" placeholder="">
                                              </div>
                                            <div class="mb-3">
                                                <x-label value="{{ __('Slug') }}" />

                                                <x-input class="" type="text" name="slug"
                                                    wire:model.defer='slug' disabled />

                                            </div>

                                            <div class="mb-3">
                                                <x-label value="{{ __('Module') }}" />
                                                <select name="sub_category" wire:model.defer='sub_category'
                                                    class="form-control {{ $errors->has('module_id') ? 'is-invalid' : '' }}"
                                                    name="sub_category" id="">
                                                    <option value="">----Select module----</option>
                                                    @foreach ($subcategories as $subcatyegory)
                                                        <option value="{{ $subcatyegory->id }}">{{ $subcatyegory->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <x-input-error for="module_id"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <x-label value="{{ __('Year') }}" />

                                                <x-input class="{{ $errors->has('year') ? 'is-invalid' : '' }}"
                                                    type="number" name="year" wire:model.defer='year' required />
                                                <x-input-error for="year"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="description">Description</label>
                                                <textarea name="description" wire:model.defer='description'
                                                    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                                <x-input-error for="description"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="file">File</label>
                                                <input wire:model='file'
                                                    class="form-control {{ $errors->has('file') ? 'is-invalid' : '' }}"
                                                    id="file" type="file">
                                                <x-input-error for="file"></x-input-error>
                                            </div>
                                            <div class="mb-3 text-center" wire:loading wire:target="file">
                                                <div class="spinner-border" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-secondary btn-rounded" type="submit">
                                                    Create
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
