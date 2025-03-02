@extends('layouts.main')
@section('content')
    <div>
        <br><form action="{{ route('cars.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="model">Model</label>
                <input value="{{old('model')}}" type="text"  name="model" class="form-control" id="model" placeholder="Model">

                @error('model')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input value="{{old('company')}}" type="text" name="company" class="form-control" id="company" placeholder="Company">
                @error('company')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input value="{{old('weight')}}" type="number" name="weight" class="form-control" id="weight" placeholder="Weight">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
