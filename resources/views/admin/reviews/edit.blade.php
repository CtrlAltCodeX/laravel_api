@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-6">
            <form action="{{ route('admin.reviews.update', $reviews->id) }}" method="post"> <!--begin::Body-->
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-control" name="user_id">
                            <option value="">--Select--</option>
                            @foreach($users as $user) 
                            <option value="{{$user->id}}" {{ $reviews->user_id == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" id="rating" value='{{ $reviews->rating}}' name="rating" value="{{ $reviews->rating }}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value='{{ $reviews->title}}' name="title" >
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea class="form-control" id="body" name="body">{{ $reviews->body}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="1" {{ $reviews->status == '1' ? 'selected' : '' }} >Active</option>
                            <option value="0" {{ $reviews->status == '0' ? 'selected' : '' }} >Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bookmarked" class="form-label">Bookmarked</label>
                        <select class="form-control" name="bookmarked">
                            <option value="1" {{ $reviews->bookmarked == '1' ? 'selected' : '' }} >True</option>
                            <option value="0" {{ $reviews->bookmarked == '0' ? 'selected' : ''  }} >False</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name='image' class="form-control" />
                    </div>
                    <img src="{{ $reviews->image }}" width="100" class="my-4" />
                </div>
                <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
            </form> <!--end::Form-->
        </div>
    </div>
</div>
@endsection