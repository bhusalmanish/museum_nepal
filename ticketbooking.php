
    <div class="ticket-form">
        <div class="ticket-container" id="ticket">
            <label for="show" class="close-btn" onclick="toggleTB()"><i class="fa fa-times" aria-hidden="true"></i></label>
            <div class="text">Booking Details</div>
            <form action="#">
                <div class="data2">
                    <label for="name">Museum Name</label>
                    <select>
                        <option value="">Select Name </option>
                        <option value="">Narayanhiti Durbar Museum</option>
                        <option value="">National Museum</option>
                    </select>
                </div>
                <div class="data2">
                    <label for="date">Date</label>
                    <input type="date">
                </div>
                <div class="data2">
                    <label for="ticket-type">Nepali Citizen</label>
                    <input type="number">
                </div>
                <div class="data2">
                    <label for="ticket-type">Foreign Citizen</label>
                    <input type="number">
                </div>
                <div class="data2">
                    <label for="ticket-type">Nepali Student</label>
                    <input type="number">
                </div>
                <div class="data2">
                    <label for="ticket-type">Senior Citizen</label>
                    <input type="number">
                </div>
                <div class="data2">
                    <label for="ticket-type">Specially Abled</label>
                    <input type="number">
                </div>
                <div class="btn2">
                    <button type="Confirm"  id='TB_confirm' onclick="toggleT()">Confirm</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>


    <!-- toggle in jquery -->
    <script>

        // $(document).ready(function(){
        //    $('#TB_confirm').click(function(){
        // /       alert(" please  login  to continue... ");
        //      $('#login').show();
        //    });
        // });

    </script>