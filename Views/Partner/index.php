
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
            echo "<td><button class='btn btn-primary'>Edit</button></td>";
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
                                <div class='icon-box'>
                                    <i class='material-icons'>&#xE5CD;</i>
                                </div>				
                                <h4 class='modal-title'>Are you sure?</h4>	
                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                            </div>
                            <div class='modal-body'>
                                <p>Do you really want to delete this partner?</p>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-info' data-dismiss='modal'>Cancel</button>
                                <button type= button' class='btn btn-danger'> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>";

            echo "</tr>";
        }
        ?>
    </table>
</div>