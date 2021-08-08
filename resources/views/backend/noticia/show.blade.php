@section('content')
<h1>{{ $noticia->titulo }}</h1>
<p>{{ $noticia->cuerpo }}</p>
<img src="{{ asset('storage/' . $noticia->adjunto) }}" alt="No hay imagen disponible" />