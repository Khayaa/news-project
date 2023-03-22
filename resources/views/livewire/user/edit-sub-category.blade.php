<div>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Edit Sub Categories</strong><span class="small ms-1"></span>
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
                                        <form wire:submit.prevent='update'>
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" wire:change='Changeslug' wire:model='subcategory.name'
                                                    class="form-control @error('subcategory.name') is-invalid @enderror"
                                                    id="name" placeholder="name">
                                                <x-input-error for="subcategory.name"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label for="subcategory.slug" class="form-label">Slug</label>
                                                <input type="text" wire:model='subcategory.slug'
                                                    class="form-control @error('subcategory.slug') is-invalid @enderror"
                                                    id="subcategory.slug" disabled placeholder="">
                                                <x-input-error for="subcategory.slug"></x-input-error>
                                            </div>

                                            <div class="mb-3">
                                                <x-label value="{{ __('Category') }}" />
                                                <select name="category_id" wire:model='subcategory.category_id'
                                                    class="form-control {{ $errors->has('subcategory.category_id') ? 'is-invalid' : '' }}"
                                                    name="subcategory.category_id" id="">
                                                    <option value="">---- Category----</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <x-input-error for="subcategory.category_id"></x-input-error>
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
