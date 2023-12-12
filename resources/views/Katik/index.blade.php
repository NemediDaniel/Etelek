<h1>Kati étterme!</h1>

@foreach($adatok as $i)
<p> {{$i->Ételneve}} | {{$i->Típusa}} | {{$i->Mennyiség}}db</p>
@endforeach