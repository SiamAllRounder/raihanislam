<!-- LARGE MODAL -->
<div id="HomePageBrandImageManagerModal4" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Home Page Brand Images Section</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <h4 class=" lh-3 mg-b-20"><a href="{{ route('home') }}" class="tx-inverse hover-primary">Upload Brand
                        Image</a></h4>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">N</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img width="95vw" src="{{ asset('assets/images/brand-image').'/'.$latestImageName->name }}">
                    {{-- <img src="brand-image/{{ \Session::get('image') }}"> --}}
                @endif
                <form action="{{ route('upload-brand-image') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Image:</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal-body -->
        <div class="modal-footer">
            {{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
<!-- modal-dialog -->
</div>
<!-- modal -->
