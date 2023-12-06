<div>
    <form method="get" action="{{ url('/books') }}">
        <div class="d-flex">
            <div class="col-12 col-md-5" style="margin:0 auto">
                <div class="input-group w-100">
                    <input class="form-control" wire:model="searchBook" name="keyword" type="text"
                        placeholder="Search here...">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <ul class="list-goup">
                    @if ($books && $books->count() > 0)
                        @foreach ($books as $book)
                            <li class="list-group-item">
                                {{ $book->title }}
                            </li>
                        @endforeach
                    @else
                        {{-- <p class="text-secondary">
                        No Books found!!
                    </p> --}}
                    @endif

                </ul>
            </div>
        </div>
    </form>
</div>
