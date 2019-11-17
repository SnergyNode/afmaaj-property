<div class="card-body">
    <div class="row">
        @forelse($images as $image)
            <div class="col-sm-6 col-md-3 p-relative">
                <div class="squared ">
                    <div class="img-wrapper" >
                        <img src="{{ $image->pic() }}" alt="" >
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center m-5">No Image Found</h3>
            </div>
        @endforelse
    </div>
</div>

<div class="card-footer">
    <button class="btn btn-primary btn-sm">MORE</button>
</div>