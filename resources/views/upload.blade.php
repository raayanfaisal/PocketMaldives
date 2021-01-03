@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box-bd">
        <h5 class="pvt-heading-001">Upload the article</h5>
        <form>

        {{ csrf_token() }}

            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Heading</label>
                <input type="text" id="form4Example1" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example2">Author:</label>
                <input type="email" id="form4Example2" class="form-control" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example3">Message</label>
                <textarea class="form-control" id="form4Example3" rows="10"></textarea>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Upload</button>
        </form>
    </div>
</div>
@endsection