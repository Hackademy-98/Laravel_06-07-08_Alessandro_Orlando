<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="text-center">Games</h1>
            </div>
            
            @if (session()->has('success'))
            <div class="col-12 alert alert-succes">
                <p class="m-0">{{session('success')}}</p>
            </div>
            @endif

            @foreach ($games as $game)
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="{{Storage::url($game->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->price}}</p>
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