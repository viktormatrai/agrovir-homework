<h1>Új partner hozzáadása</h1>
<form method='post' action='Partners/create'>
    <div class="form-group w-50">
        <label for="title">Cég neve</label>
        <input type="text"
               class="form-control"
               id="companyName"
               placeholder="Cég név"
               name="companyName"
               required>
    </div>

    <div class="form-group w-50">
        <label for="companyType">Cégforma</label>
        <select name="companyType">
           <?php
            foreach ($company_types as $company_type)
            echo "<option value='$company_type'>". $company_type["company_type"] ."</option>"
            ?>
        </select>
    </div>
    <div class="form-group w-25">
        <label for="title">Adószám</label>
        <input type="text"
               class="form-control"
               id="taxNumber"
               placeholder="Adószám"
               name="taxNumber"
               required>
    </div>

    <div class="form-group w-25">
        <label for="title">Cégjegyzékszám</label>
        <input type="text"
               class="form-control"
               id="companyRegistrationNumber"
               placeholder="Cégjegyzésszám"
               name="companyRegistrationNumber"
               required>
    </div>

    <div class="form-group w-75">
        <label for="title">Cím</label>
        <input type="text"
               class="form-control"
               id="address"
               placeholder="Cím"
               name="address"
               required>
    </div>

    <div class="form-group w-50">
        <label for="title">Bankszámla szám</label>
        <input type="text"
               class="form-control"
               id="bankAccount"
               placeholder="Bankszámla szám"
               name="bankAccount"
               required>
    </div>

    <div class="form-group w-25">
        <label for="title">Telefonszám</label>
        <input type="text"
               class="form-control"
               id="phone"
               placeholder="Telefonszám"
               name="phone"
               required>
    </div>

    <div class="form-group w-75">
        <label for="title">Megjegyzés</label>
        <textarea type="text"
                  class="form-control"
                  id="note"
                  placeholder="Megjegyzés" name="note">
        </textarea>
    </div>

    <div class="form-group">
        <label for="location">Város</label>
        <select name="location">
            <?php
            foreach ($locations as $location)
                echo "<option value='$location'>". $location["location"] ."</option>"
            ?>
        </select>

        <label for="locationNew"
        <input type="text" class="form-control" id="locationNew" placeholder="Város" name="location">
    </div>

    <button type="submit" class="btn btn-primary">Mentés</button>
</form>