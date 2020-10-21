<div class='regbg'></div>
<div class='blurback'>
    <div class='reghold'>
        <h2>Register for the Event</h2>
        <form class='formblock' action='index.php?req=editreg' method='POST'>
            <div class='form-group'>
                <label for='exampleFormControlInput1'>Name</label>
                <?php $nameR = $regData['name']; echo "<input type='text' class='form-control' required name='name' value='$nameR' />" ?>
            </div>
            <div class='form-group'>
                <label for='exampleFormControlInput1'>Email address</label> 
                <?php $emailR = $regData['email']; echo "<input type='email' required class='form-control' value='$emailR' name='email'/>" ?>
            </div>
            <div class='form-group'>
                <label for='exampleFormControlSelect1'>No of Seats</label>  
                <?php $seatsR = $regData['seats']; echo "<select class='form-control' name='seats' value='$seatsR'>    <option value='1'>1</option>    <option value='2'>2</option>    <option value='3'>3</option>   <option value='4'>4</option>    <option value='5'>5</option>  </select>" ?>
            </div>
            <div class='form-group'>  
                <label for='exampleFormControlTextarea1'    >Reason behind attending the event</label  >
                <?php $reasonR = $regData['reason']; echo "<textarea required class='form-control' name='reason' rows='3'>$reasonR</textarea>" ?>
            </div>
            <div class='form-group d-none'>  
                <label for='exampleFormControlTextarea1'    >Registration Id</label  >
                <?php $idR = $regData['id']; echo "<input type='text' required class='form-control' value='$idR' name='id'/>" ?>
            </div>
            <div class='form-check'>  
                <input required class='form-check-input' checked type='checkbox'    id='defaultCheck1'  />  
                <label class='form-check-label' for='defaultCheck1'>    Agree our terms and conditions  </label>
            </div>
            <div class="text-center"> 
                <button id='formsub' class='btn btn-outline-light ml-4 mt-4' type='submit'>Register</button>
            </div>
        </form>
    </div>
</div>