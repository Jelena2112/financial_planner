<form action="{{ route('save_paycheck') }}" method="POST" class="col-12 col-md-6 col-lg-8 p-2">
    @csrf
    <div class="form-control">
        <input type="number" name="paycheck" class="form-control mt-3 rounded-0" placeholder="Unesite vasa primanja">
    </div>

    <div class="form-control">
        <select type="text" name="currency" class="form-control mt-3 rounded-0">
            <option value="eur">eur</option>
            <option value="usd">usd</option>
            <option value="rsd">rsd</option>
        </select>
    </div>

    <div>
        <input type="submit" value="Memorisi" >
    </div>

</form>

