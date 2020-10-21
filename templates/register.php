<div class='regbg'></div>
<div class='blurback'>
    <div class='reghold'>
        <h2>Register for the Event</h2>
        <form class='formblock' action='index.php?req=addreg' method='POST'>
            <div class='form-group'>
                <label for='exampleFormControlInput1'>Name</label>
                <input type='text' class='form-control' required name='name' />
            </div>
            <div class='form-group'>
                <label for='exampleFormControlInput1'>Email address</label> 
                <input type='email' required class='form-control' name='email' />
            </div>
            <div class='form-group'>
                <label for='exampleFormControlSelect1'>No of Seats</label>  
                <select class='form-control' name='seats'>    
                    <option value='1'>1</option>    
                    <option value='2'>2</option>    
                    <option value='3'>3</option>   
                    <option value='4'>4</option>    
                    <option value='5'>5</option>  
                </select>
            </div>
            <div class='form-group'>  
                <label for='exampleFormControlTextarea1'    >Reason behind attending the event</label  >
                <textarea required class='form-control' name='reason' rows='3'></textarea>
            </div>
            <div class='form-check'>  
                <input required class='form-check-input'    type='checkbox'    id='defaultCheck1'  />  
                <label class='form-check-label' for='defaultCheck1'>    Agree our terms and conditions  </label>
            </div>
            <div class="text-center"> 
                <button id='formsub' class='btn btn-outline-light ml-4 mt-4' type='submit'>Register</button>
            </div>
        </form>
    </div>
</div>