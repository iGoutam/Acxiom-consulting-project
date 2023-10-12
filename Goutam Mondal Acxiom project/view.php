
<fieldset>
    <br />
    Select from Date:-<input type="date" id="notifydate" />
    <br />
    Select to Date:-<input type="date" id="notifydate" />
    <br />
    <legend>View your Reminders</legend>
    Select Subject:-<select name="Subject " id="Subject ">
        <option value="select">select</option>
    <br />
    Add description:-<textarea id="txtNotifyMsg" placeholder="Add Desription" ></textarea>
    <br>
    Email:-<input type="email" name="email" placeholder="Enter your email" required>
    <br>
    Recur for next:- <select name="Recur for next: " id="Recur for next: ">
                            <option value="select">select</option>
                            <option value="7 days">7 days</option>
                            <option value="5 days">5 days</option>
                            <option value="3 days">3 days</option>
                            <option value="2 days">2 days</option>
                        </select>
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