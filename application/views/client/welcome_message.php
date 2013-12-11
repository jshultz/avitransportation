
<div id="bodycontent" class="row">
    <div class="row headline">
        <div class="twelve columns">
            <h1>Client Reporting Tool</h1>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            <p>This utility will search the database for contacts.</p>
        </div>
    </div>
    <div class="row">
        <div id="Results" class="twelve columns">
            <table id="myTable" class="stripeMe">
                <tbody>
                    <thead>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Street</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Message</th>
                    </thead>

                    <?php if (isset($results) && count($results)) : foreach ($results->result() as $row): ?>
                    <tr>
                        <td><?=$row->firstname?></td>
                        <td><?=$row->lastname?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->telephone?></td>
                        <td><?=$row->street?></td>
                        <td><?=$row->state?></td>
                        <td><?=$row->zip?></td>
                        <td><?=$row->message?></td>
                    </tr>

                        <?php endforeach; else:?>
                        <?php endif;?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            <p><?php
                echo form_open_multipart('/client/make_report_file');
                echo form_submit('submit', 'makefile');
                echo form_close();
                ?></p>
        </div>
    </div>
</div>
