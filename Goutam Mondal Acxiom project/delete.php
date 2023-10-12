
<fieldset>
    <br />
   Select Date:-<input type="date" id="notifydate" />
    <br />
    <legend>Delete Reminder</legend>
    Select Subject:-<select name="Subject " id="Subject ">
        <option value="select">select</option>
    <br />
    Reminder:<select name="Recur for next: " id="Recur for next: ">
    <option value="select">select</option>
    Add description:-<textarea id="txtNotifyMsg" placeholder="Add Desription" ></textarea>
    <br>
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