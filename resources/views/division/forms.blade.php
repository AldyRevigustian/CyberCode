{{-- Modal Add --}}
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
                <form action="{{ route('add.member') }}" method="POST" class="needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    <label>Photo : </label>
                    <div class="form-group">
                        <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image"
                            value="{{ old('image') }}" type="file" accept="image/*" id="imgInp">
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    </div>

                    <label>Full Name : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name"
                            class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" name="full_name"
                            value="{{ old('full_name') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('full_name') }}
                        </div>
                    </div>

                    <label>Division : </label>
                    <div class="form-group">
                        <select name="division" class="form-select">
                            <option value="" disabled selected>-- Division --</option>\
                            <option value="Admin">Admin</option>
                            <option value="Android">Android</option>
                            <option value="Courses">Courses</option>
                            <option value="Content Creator">Content Creator</option>
                            <option value="Service">Service</option>
                            <option value="Website">Website</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('division') }}
                        </div>
                    </div>

                    <label>Address : </label>
                    <div class="form-group">
                        <textarea name="address" cols="10" rows="5" class="form-control" placeholder="Address"></textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    </div>

                    <label>Status : </label>
                    <div class="form-group">
                        <select name="status" class="form-select">
                            <option value="" disabled selected>-- Status --</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
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


{{-- Modal Edit --}}
@foreach ($members as $member)
    <div class="modal fade text-left" id="modalEdit{{ $member->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add application</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update.member', $member->id) }}" method="POST" class="needs-validation"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <label>Photo : </label>
                        <div class="form-group">
                            <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image"
                                value="{{ $member->photo }}" type="file" accept="image/*" id="imgInp">
                            <div class="invalid-feedback">
                                {{ $errors->first('image') }}
                            </div>
                        </div>

                        <label>Full Name : </label>
                        <div class="form-group">
                            <input type="text" placeholder="Name"
                                class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}"
                                name="full_name" value="{{ $member->full_name }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('full_name') }}
                            </div>
                        </div>

                        <label>Division : </label>
                        <div class="form-group">
                            <select name="division" class="form-select">
                                <option value="Admin" {{ $member->division == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="Android" {{ $member->division == 'Android' ? 'selected' : '' }}>Android
                                </option>
                                <option value="Courses" {{ $member->division == 'Courses' ? 'selected' : '' }}>Courses
                                </option>
                                <option value="Content Creator"
                                    {{ $member->division == 'Content Creator' ? 'selected' : '' }}>Content Creator
                                </option>
                                <option value="Service" {{ $member->division == 'Service' ? 'Service' : '' }}>Service
                                </option>
                                <option value="Website" {{ $member->division == 'Website' ? 'Website' : '' }}>Website
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('division') }}
                            </div>
                        </div>

                        <label>Address : </label>
                        <div class="form-group">
                            <textarea name="address" cols="10" rows="5" class="form-control" placeholder="Address">{{ $member->address }}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('address') }}
                            </div>
                        </div>

                        <label>Status : </label>
                        <div class="form-group">
                            <select name="status" class="form-select">
                                <option value="active"{{ $member->status == 'active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="inactive"{{ $member->status == 'inactive' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('status') }}
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
@endforeach
