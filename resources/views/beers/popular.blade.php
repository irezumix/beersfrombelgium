<h1>Most popular beers</h1>
        <ul>
            @foreach ($popular_beers  as $item)
            <li><a href="#">{{$item->name}}</a></li>    
            @endforeach
            
        </ul>