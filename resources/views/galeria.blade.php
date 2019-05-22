

<h1>fotos</h1>

@foreach($foto as $fotos)

<img src="{{ Voyager::image($fotos->archivo)}}" alt="image" >  
@endforeach


