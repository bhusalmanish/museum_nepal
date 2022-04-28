
    <div class="center-2"  id='tp'>
        <div class="paymentmethod" id="details">
            <label for="show" class="close-btn" onclick="detailsclose()"><i class="fa fa-times" aria-hidden="true"></i></label>
            <div class="text">Ticket Details</div>
            <label for="museum">Museum Name:</label>
            <span>Narayanhiti</span>
            <br>
            <label for="date">Date:</label>
            <span>2055-5-6</span>
            <br>
            <label for="person">No of Person:</label>
            <div class="line1"></div>
            <div class="list">
                <label for="stu">Nepali Student:</label>
                <span>2</span><br>
                <label for="ctz">Nepali Citizen:</label>
                <span>1</span><br>
                <label for="ctz">Foreign Citizen:</label>
                <span>5</span><br>
                <label for="ctz">Senior Citizen:</label>
                <span>0</span><br>
                <label for="ctz">Specially Abled:</label>
                <span>0</span><br>
            </div>
            <label for="payment">Payment:</label>
            <div class="line2"></div>
            <div class="list">
                <input name="payment" type="radio">
                <label for="esewa">Esewa</label><br>
                <input name="payment" type="radio">
                <label for="khalti">Khalti</label><br>
                <input name="payment" type="radio">
                <label for="cash">Cash</label>
            </div>
            <div class="btn3">
                <button type="submit"  onclick="toggleTF()" >Confirm</button>
                <button type="button" onclick="cancel()">Cancel</button>
            </div>
        </div>
    </div>


