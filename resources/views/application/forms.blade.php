{{-- MODAL ADD --}}
<div class="modal fade text-left" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Add application</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.application') }}" method="POST" class="needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    <label>Application Name : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                            value="{{ old('name') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    <label>Application Image : </label>
                    <div class="form-group">
                        <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image"
                            value="{{ old('image') }}" type="file" accept="image/*" id="imgInp">
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    </div>
                    <div class="row">
                        <img id="blah" src=" " style="object-fit: cover;" class="mb-1" />
                    </div>
                    <label>App Url : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Application Url"
                            class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" name="url"
                            value="{{ old('url') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('url') }}
                        </div>
                    </div>

                    <label>App Description : </label>
                    <div class="form-group">
                        <textarea name="description" id="" cols="10" rows="5" class="form-control"
                            placeholder="Application Description"></textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    </div>

                    <label>Application Category : </label>
                    <div class="form-group">
                        <select name="category_id" class="form-select">
                            <option value="" disabled selected>-- Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    </div>

                    <label>Application Type : </label>
                    <div class="form-group">
                        <select name="type" class="form-select">
                            <option value="" disabled selected>-- Type --</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Web">Web</option>
                            <option value="Desktop">Desktop</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    </div>

                    <label>Year's Made : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Year's Made"
                            class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" name="year"
                            value="{{ old('year') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('year') }}
                        </div>
                    </div>

                    <label>Created By : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Year's Made"
                            class="form-control {{ $errors->has('created_by') ? 'is-invalid' : '' }}" name="created_by"
                            value="{{ old('created_by') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('created_by') }}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" class="btn btn-primary ml-1">
                    <span class="d-none d-sm-block">Add</span>
                </button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- MODAL EDIT --}}
@foreach ($applications as $application)
    <div class="modal fade text-left" id="edit{{ $application->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit application</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('edit.application', $application->id) }}" method="POST"
                        class="needs-validation"  enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <label>Application Name : </label>
                        <div class="form-group">
                            <input type="text" placeholder="Name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                value="{{ $application->name }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>

                        <label>Application Image : </label>
                        <div class="form-group">
                            <input class="form-control imgInps {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                name="image" type="file" accept="image/*">
                            <div class="invalid-feedback">
                                {{ $errors->first('image') }}
                            </div>
                        </div>

                        <div class="row">
                            <img src="{{ asset('storage/' . $application->image) }}"
                                style="object-fit: cover; height: 150px; width: 370px;" class="mb-1 blahs" />
                        </div>


                        <label>App Url : </label>
                        <div class="form-group">
                            <input type="text" placeholder="Application Url"
                                class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" name="url"
                                value="{{ $application->url }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('url') }}
                            </div>
                        </div>

                        <label>App Description : </label>
                        <div class="form-group">
                            <textarea name="description" cols="10" rows="5" class="form-control"
                                placeholder="Application Description">{{ $application->description }}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('category_id') }}
                            </div>
                        </div>

                        <label>Application Category : </label>
                        <div class="form-group">
                            <select name="category_id" class="form-select">
                                <option value="{{ $application->category_id }}" selected>
                                    {{ $application->category->name }}
                                </option>
                                @foreach ($categories as $category)
                                    @if ($application->category_id != $category->id)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('category_id') }}
                            </div>
                        </div>

                        <label>Application Type : </label>
                        <div class="form-group">
                            <select name="type" class="form-select">
                                <option value="{{ $application->type }}" selected>{{ $application->type }}</option>

                                @if ($application->type == 'Mobile')
                                    <option value="Web">Web</option>
                                    <option value="Desktop">Desktop</option>
                                @endif

                                @if ($application->type == 'Web')
                                    <option value="Mobile">Mobile</option>
                                    <option value="Desktop">Desktop</option>
                                @endif

                                @if ($application->type == 'Desktop')
                                    <option value="Mobile">Mobile</option>
                                    <option value="Web">Web</option>
                                @endif

                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('category_id') }}
                            </div>
                        </div>

                        <label>Year's Made : </label>
                        <div class="form-group">
                            <input type="text" placeholder="Year's Made"
                                class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" name="year"
                                value="{{ $application->year }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('year') }}
                            </div>
                        </div>

                        <label>Created By : </label>
                        <div class="form-group">
                            <input type="text" placeholder="Year's Made"
                                class="form-control {{ $errors->has('created_by') ? 'is-invalid' : '' }}"
                                name="created_by" value="{{ $application->created_by }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('created_by') }}
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <span class="d-none d-sm-block">Update</span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    var image = document.getElementById('blah')
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
            image.style.height = '150px'
            image.style.width = '370px'
        }
    }

    // var image2 = document.getElementById('blah2')
    // imgInp2.onchange = evt => {
    //     const [file] = imgInp2.files
    //     if (file) {
    //         blah2.src = URL.createObjectURL(file)
    //     }
    // }

    let imgInps = document.getElementsByClassName('imgInps')
    Array.from(imgInps).forEach(function(imgInp2) {
        imgInp2.onchange = evt => {
            const [file] = imgInp2.files
            if (file) {
                let blahs = document.getElementsByClassName('blahs')

                Array.from(blahs).forEach(function(blah2) {
                    blah2.src = URL.createObjectURL(file)
                });
            }
        }
    });
</script>
