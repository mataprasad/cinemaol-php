<?php

function partial_render_movie_history($data) { ?>
    <table cellspacing="0" cellpadding="3" rules="all" border="1"
           style="width: 100%; background-color: White; border-color: #000000; border-width: 1px; border-style: solid; font-size: Small; border-collapse: collapse;">
        <tr style="color: White; background-color: #006699; font-weight: bold;">
            <th scope="col">Booking Date</th>
            <th scope="col">Show Date</th>
            <th scope="col">Show Time</th>
            <th scope="col">Movie Name</th>
            <th scope="col">OL Ticket Number</th>
            <th scope="col">View Detail</th>

        </tr>
        <?php for ($index = 0; $index < count($data); $index++) { ?>
            <tr style="color: #000066;">
                <td><?php echo $data[$index]->Booking_Date; ?></td>
                <td><?php echo $data[$index]->Show_Date; ?></td>
                <td><?php echo $data[$index]->Show_Time; ?></td>
                <td style="width: 150px;"><?php echo $data[$index]->Movie_Name; ?></td>
                <td style="width: 50px;"><?php echo $data[$index]->Ticket_No; ?></td>
                <td><a
                        href='javascript:mypopup("<?php HREF("/user/booking-details.php?id=" . $data[$index]->Ticket_Id); ?>","400","450");'
                        style="color: #0000CC; text-decoration: underline;">View</a></td>
            </tr> 
        <?php } ?>
    </table>
<?php } ?>