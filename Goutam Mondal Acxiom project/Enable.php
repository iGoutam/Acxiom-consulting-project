<fieldset>
    <br />
   Select Date:-<input type="date" id="notifydate" />
    <br />
    <legend>Enable Reminder</legend>
    Select Subject:-<select name="Subject " id="Subject ">
        <option value="select">select</option>
    Add description:-<textarea id="txtNotifyMsg" placeholder="Add Desription" ></textarea>
    <br>
    Recur for next:-<br>
    <input type="checkbox" id="op1" name="op1" value="7days">
<label for="op1"> 7 days</label>
<input type="checkbox" id="op2" name="op2" value="5days">
<label for="op2"> 5 days</label>
<input type="checkbox" id="op3" name="op3" value="3days">
<label for="op3"> 3 days</label>
<input type="checkbox" id="op4" name="op4" value="2days">
<label for="op4"> 2 days</label><br>
    <button><a href="homepage.php">Back</a></button>                    
   <br>
    <button id="btnAddNotification">Confirm</button>
    <link rel="stylesheet" href="set remainder.css">
    <link rel="stylesheet" href="set remainder.js">
</fieldset>
<ul id="ulAllNotifications"></ul>

<div id="divNotificationArea" onclick="document.body.className=''">
  <ul id="ulNotifications"></ul>
</div>
</div>