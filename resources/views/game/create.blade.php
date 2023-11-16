<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h1 class="text-center">Game creation</h1>
        </div>

@if(session()->has('success'))
  <div class="col-12 alert alert-success">
    <p>{{session("success")}}</p>
  </div>
  @endif
    <div class="col-12">
       @dump($categories)
        <form method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"> 
              @error('title') <p class="text-danger">{{$message}}</p> @enderror 
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
              @error('description') <p class="text-danger">{{$message}}</p> @enderror 
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}"> 
                @error('price') <p class="text-danger">{{$message}}</p> @enderror  
              </div>

              <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category">
                  <option selected>Select category</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select> 
              </div>
              
              <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control" id="img" name="img">  
                @error('img') <p class="text-danger">{{$message}}</p> @enderror 
              </div>

              <div class="mt-5 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary w-25">Submit</button>
            </div>
            
                    </form>

        
        
         </div>
    </div>
</div>


</x-layout>