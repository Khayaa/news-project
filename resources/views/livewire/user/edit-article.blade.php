<div>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Articles</strong><span class="small ms-1"></span>
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
                                                <label for="article.title" class="form-label">Title</label>
                                                <input type="text" wire:model='article.title' class="form-control @error('article.title') is-invalid @enderror" id="article.title" placeholder="article.title">
                                                <x-input-error for="article.title"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label for="article.slug" class="form-label">Slug</label>
                                                <input type="text" wire:model='article.slug' class="form-control @error('article.slug') is-invalid @enderror" id="article.slug" disabled placeholder="">
                                                <x-input-error for="article.slug"></x-input-error>
                                              </div>

                                            <div class="mb-3">
                                                <x-label value="{{ __('Sub Category') }}" />
                                                <select name="article.subcategory_id" wire:model.defer='article.subcategory_id'
                                                    class="form-control {{ $errors->has('article.subcategory_id') ? 'is-invalid' : '' }}"
                                                    name="article.subcategory_id" id="">
                                                    <option value="">----Sub Category----</option>
                                                    @foreach ($subcategories as $subcatyegory)
                                                        <option value="{{ $subcatyegory->id }}">{{ $subcatyegory->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <x-input-error for="article.subcategory_id"></x-input-error>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="content">Content</label>
                                                <textarea name="article.content" wire:model.defer='article.content'
                                                    class="form-control {{ $errors->has('article.content') ? 'is-invalid' : '' }}" id="article.content"
                                                    rows="3"></textarea>
                                                <x-input-error for="article.content"></x-input-error>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="article_image">Article Image</label>
                                                <input wire:model='article_image'
                                                    class="form-control {{ $errors->has('article_image') ? 'is-invalid' : '' }}"
                                                    id="article_image" type="file">
                                                <x-input-error for="article_image"></x-input-error>
                                            </div>
                                            <div class="mb-3 text-center" wire:loading wire:target="article_image">
                                                <div class="spinner-border" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
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
