<form action="{{ url('query') }}" method="GET">
    <div class="row">
        <div class="input-field s2">
            <input type="text" class="validate" name="q">
            <label for="title">Cari</label>
        </div>
        <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Cari <i class="material-icons right">search</i></button>
    </div>
</form>