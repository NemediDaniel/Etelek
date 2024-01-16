<h1></h1>

<form action="{{route('letrehozas')}}">
    @csrf
    <fieldset>
        <label for="name">Kategória név</label>
        <input type="text" name="" id="name">
    </fieldset>
    <button type="submit">Mentés</button>
</form>