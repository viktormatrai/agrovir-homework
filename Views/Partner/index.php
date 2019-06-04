
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