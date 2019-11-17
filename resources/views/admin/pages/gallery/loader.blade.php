<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Image Select </h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="row list-parent">
            @forelse($images as $image)
                <div class="col-sm-6 col-md-3 p-relative image-list-item" data-id="{{ $image->id }}">
                    <div class="squared ">
                        <div class="img-wrapper" >
                            <img src="{{ $image->pic() }}" alt="" class="loadintoid" data-target="img_id" data-id="{{ $image->id }}">
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
        <button class="btn btn-primary btn-sm getmoreimage" onclick="loadMoreImage('list-parent')">MORE</button>
    </div>
</div>