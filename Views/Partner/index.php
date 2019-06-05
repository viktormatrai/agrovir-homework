
<h1>Partners</h1>
<div class="row col-md-12 centered">
    <table class="table table-hover">
        <thead>
        <!--<a href="/agrovir-homework/partners/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>-->
        <tr>
            <th>Cégnév</th>
            <th>Cégforma</th>
            <th>Adószám</th>
            <th>Cégjegyzékszám</th>
            <th>Cím</th>
            <th>Település</th>
            <th>Bankszámlaszám</th>
            <th>Telefonszám</th>
            <th>Megjegyzés</th>
        </tr>
        </thead>
        <?php
        foreach ($partners as $partner)
        {
            echo '<tr>';
            echo "<td>" . $partner['company_name'] . "</td>";
            echo "<td>" . $partner['company_type'] . "</td>";
            echo "<td>" . $partner['tax_number'] . "</td>";
            echo "<td>" . $partner['company_registration_number'] . "</td>";
            echo "<td>" . $partner['address'] . "</td>";
            echo "<td>" . $partner['location'] . "</td>";
            echo "<td>" . $partner['bank_account_number'] . "</td>";
            echo "<td>" . $partner['phone_number'] . "</td>";
            echo "<td>" . $partner['note'] . "</td>";
            echo "<td><a href='#editModal'
                         data-target='#editModal'
                         style='text-decoration: none' 
                         data-toggle='modal' 
                         class='btn btn-primary'>Edit</a>
                 </td>";

            echo "<div class='modal fade' id='editModal' tabindex='-1' role='dialog' aria-labelledby='Edit partner'
                        aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header text-center'>
                                <h4 class='modal-title w-100 font-weight-bold'>Partner szerkesztése</h4>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body mx-3'>
                                <form method='post' action= ''>
                                <div class='md-form mb-5'>
                                    <i class='fas fa-user prefix grey-text'></i>
                                    <input type='text' id='orangeForm-name' class='form-control validate' required 
                                    value=$partner[company_name]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-name'>Cégnév</label>
                                </div>
                                <div class='md-form mb-5'>
                                    <i class='fas fa-envelope prefix grey-text'></i>
                                    <select class='form-control' required>
                                        <option value='Nyrt.'>Nyrt.</option>
                                        <option value='Zrt.'>Zrt.</option>
                                        <option value='Kft.'>Kft.</option>
                                        <option value='Bt.'> Bt.</option>
                                        <option value='EV'>Egyéni vállalkozó</option>
                                    </select>
                                    <label data-error='wrong' data-success='right' for='orangeForm-email'></label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <input type='text' id='orangeForm-pass' class=\"form-control validate\" required
                                    value=$partner[tax_number]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Adószám</label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <input type='text' id='orangeForm-pass' class='form-control validate' required 
                                    value=$partner[company_registration_number]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Cégjegyzék szám</label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <input type='text' id='orangeForm-pass' class='form-control validate' required
                                    value=$partner[location]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Város</label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <input type='text' id='orangeForm-pass' class='form-control validate' required
                                    value=$partner[address]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Cím</label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <input type='text' id='orangeForm-pass' class='form-control validate' required
                                    value=$partner[bank_account_number]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Bankszámla szám</label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <input type='text' id='orangeForm-pass' class='form-control validate' required
                                    value=$partner[phone_number]>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Telefonszám</label>
                                </div>
            
                                <div class='md-form mb-4'>
                                    <i class='fas fa-lock prefix grey-text'></i>
                                    <textarea type='text' id='orangeForm-pass' class='form-control validate'
                                     >$partner[note]</textarea>
                                    <label data-error='wrong' data-success='right' for='orangeForm-pass'>Megjegyzés</label>
                                </div>
                            </div>
                            <div class='modal-footer d-flex justify-content-center'>
                                <button type='submit' class='btn btn-success'>Mentés</button>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>";
            echo "<td><a href='#deleteModal' 
                            data-target = '#deleteModal'
                            class='btn btn-danger' 
                            style='text-decoration: none' 
                            data-toggle='modal'>Delete</a>
                    </td>";
            echo "<div id= 'deleteModal' class='modal fade'>
                    <div class= 'modal-dialog modal-confirm'>
                        <div class='modal-content'>
                            <div class='modal-header'>				
                                <h4 class='modal-title'>Biztos törölni szeretné a partnert?</h4>	
                            </div>
                            <div class='modal-body'>
                                <p>  $partner[company_name] $partner[company_type] </p>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-info' data-dismiss='modal'>Mégse</button>
                                <button type= submit' class='btn btn-danger'>Törlés</button>
                            </div>
                        </div>
                    </div>
                </div>";

            echo "</tr>";
        }
        ?>
    </table>
</div>