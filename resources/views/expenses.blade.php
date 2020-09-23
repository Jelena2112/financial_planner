<form action="{{ route('save_expenses') }}" method="POST" class="col-12 col-md-6 col-lg-8 p-2">
    @csrf
    <div class="form-control">
        <input type="number" name="travel" class="form-control mt-3 rounded-0" placeholder="Unesite troskove putovanja">
    </div>

    <div class="form-control">
        <input type="number" name="clothes" class="form-control mt-3 rounded-0" placeholder="Unesite troskove odece">
    </div>

    <div class="form-control">
        <input type="number" name="bills" class="form-control mt-3 rounded-0" placeholder="Unesite troskove racuna">
    </div>

    <div class="form-control">
        <input type="number" name="other" class="form-control mt-3 rounded-0" placeholder="Unesite ostale troskove">
    </div>

    <div>
        <input type="submit" value="Memorisi" >
    </div>

</form>
