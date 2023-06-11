<!DOCTYPE html>
<html>
    <head>
        <title>
            Booking Final
        </title>

        <link rel="stylesheet" href="./bookingFinal.css">

    </head>
        <h1>Proceed Your Payments</h1>

        <table>
            <thead class="payment">
                <tr>
                    <th>
                        <strong>No of Seats Booked</strong>
                    </th>
                    <th>
                        <strong>Amount</strong>
                    </th>
                </tr>
            </thead>

            <tr class="tdata">
                <td> 3 </td>
                <td> 1800/-</td>
            </tr>
            <tr class="tdata">
                <td>5</td>
                <td>3000/-</td>
            </tr>


            <tr class="tdata">
                <td>Total</td>
                <td>4800/-</td>
            </tr>


        </table>

        <br><br>
        <table>
            <thead class="payment">
                <tr>
                    <th>
                        <strong>Bank Details</strong>
                    </th>
                </tr>
            </thead>

            <tr class="tdata">
                <td> 
                    <ul>
                        <li>Bank: BOC Kandy Branch</li>
                        <li>A/C No: 201874657</li>
                        <li>Name: Easy Booking Travel Agency</li>
                    </ul>    
                </td>
        
            </tr>

        </table>

    </div>
    <br>

    <form>
        <fieldset>
            <legend>Booking Information</legend>
                <label>Cutomer Name: </label>
                <label id="cusName"> </label> <br>
                <label>Customer email: </label>
                <label id="cusMail"> </label> <br>
                <label>Travel Date: </label>
                <label id="cusTravelDate"> </label><br>
                <label>Travel Origin: </label>
                <label id="cusOrigin"> </label><br>
                <label>Travel Destination: </label>
                <label id="cusDesti"> </label><br>
                <label>Upload your payment proof: </label>
                <input type="file" id="slip" name="slip" required><br>
                <input type="submit" required>

        </fieldset>
    </form>

    <a href="seats.php"> <button>Go Back</button></a>
    <a href="success.php"> <button class="proceed" type="submit">Proceed</button></a>
        

    <body>



    </body>
</html>