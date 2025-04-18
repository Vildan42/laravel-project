<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    @isset($method)
        @method($method)
    @endisset

    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" name="model" class="form-control" id="model" placeholder="Model" value="{{ old('model', $car->model ?? '') }}">
        @error('model')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" name="company" class="form-control" id="company" placeholder="Company" value="{{ old('company', $car->company ?? '') }}">
        @error('company')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="weight">Weight</label>
        <input type="number" name="weight" class="form-control" id="weight" placeholder="Weight" value="{{ old('weight', $car->weight ?? '') }}">
        @error('weight')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="imageInput">Image</label>
        <input type="file" class="form-control" id="imageInput">
    </div>

    <div class="form-group" id="previewContainer">
        <img id="previewImage" src="{{ $car->image->path ?? '' }}" style="max-width: 200px; {{ isset($car->image) ? '' : 'display: none;' }}">
    </div>

    <input type="hidden" name="image_id" class="js-image-field" value="{{ old('image_id', $car->image_id ?? '') }}">

    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</form>
