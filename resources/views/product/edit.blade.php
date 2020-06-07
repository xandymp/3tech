<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $product->id }}"><i class="fa fa-undo"></i></span>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input
                    type="text"
                    name="name"
                    value="{{ $product->name }}"
                    class="form-control"
                    placeholder="Name"
                    maxlength="150"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input
                    type="text"
                    name="description"
                    value="{{ $product->description }}"
                    class="form-control"
                    placeholder="Description"
                    maxlength="500"
                    required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Original Price:</strong>
                <input
                    type="number"
                    step="0.01"
                    name="original_price"
                    value="{{ $product->original_price }}"
                    class="form-control"
                    placeholder="Original Price"
                    required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Promotional Price:</strong>
                <input
                    type="number"
                    step="0.01"
                    name="promotional_price"
                    value="{{ $product->promotional_price }}"
                    class="form-control"
                    placeholder="Promotional Price">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Stock:</strong>
                <input
                    type="number"
                    step="0.01"
                    name="stock"
                    value="{{ $product->stock }}"
                    class="form-control"
                    placeholder="Stock"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
