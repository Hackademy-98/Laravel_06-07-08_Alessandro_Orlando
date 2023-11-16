<x-layout>
    
    <div class="container">
        <div class="row">
            
            <div class="col-12 my-5">
                <h1 class="text-center">{{ $category->name }}</h1>
            </div>
            
            @foreach($category->games as $game)
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="{{Storage::url($game->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->price}}</p>
                        <a href="{{ route('game.filterByCategory', ['category' => $game->category]) }}" 
                            class="text-end d-block text-decoration-none mb-5">{{ $game->category->name }}</a>
                            
                            <div class="d-flex justify-content-around">
                                <a href="{{ route('game.show', compact('game')) }}" class="btn btn-primary">show more</a>
                                <a href="{{ route('game.edit', compact('game')) }}" class="btn btn-warning">edit</a>
                                <form action="{{ route('game.destroy', compact('game'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        
        
    </x-layout>