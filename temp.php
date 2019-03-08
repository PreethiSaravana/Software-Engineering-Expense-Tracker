<head>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
</head>

<h1>Simple expense manager project</h1>
<h2>Add a new item:</h2>

<div id="form-box">
<form>
  <div>
    <span>Type:</span> 
      <select name="type">
          <option value="card">Card</option>
          <option value="cash">Cash</option>
          <option value="cryptocoin">Cryptocoin</option>
          <option value="other">Other</option>
      </select>
  </div>
  
  <div>
    <span>Name:</span> <input type="text" name="item-name" placeholder="What did you spend on?">
  </div>
  
  <div>
    <span>Date:</span> <input type="date" name="date">
  </div>
  
  <div>
    <span>Amount:</span> <input type="number" name="amount" placeholder="How much?">
  </div>
  
</form>
</div>

<div id="button"><span>Add a new expense</span></div>

<table>
  <tr>
    <th id="type" class="center">type</th>
    <th>name</th>
    <th id="date">date</th>
    <th style="text-align: right" id="amount">amount</th>
  </tr>
  <tr id="if-empty">
    <td colspan="4"><span>Your added items will show up here!</span></td>
  </tr>

</table>

