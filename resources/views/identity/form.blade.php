{{-- ADD MODAL --}}
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
                <form action="{{ route('add.identity') }}" method="POST" class="needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    <label>Company Name : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                            value="{{ old('name') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    <label>Company Logo : </label>
                    <div class="form-group">
                        <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image"
                            value="{{ old('image') }}" type="file" accept="image/*" id="imgInp">
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    </div>

                    <label>Address : </label>
                    <div class="form-group">
                        <textarea name="address" cols="10" rows="5" class="form-control"
                                placeholder="Company Address">{{ $identity->address }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    </div>

                    <label>Email : </label>
                    <div class="form-group">
                        <input type="email" placeholder="Email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    </div>

                    <label>Phone : </label>
                    <div class="form-group">
                        <input type="phone" placeholder="phone"
                            class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                            value="{{ old('phone') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    </div>
                    
                    <label>Instagram Account : </label>
                    <div class="form-group">
                        <input type="instagram" placeholder="instagram"
                            class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" name="instagram"
                            value="{{ old('instagram') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('instagram') }}
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
{{-- ADD MODAL --}}
