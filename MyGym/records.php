<!DOCTYPE html>
<html>
<head>
  <title>Gym Task Tracker</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h2 {
      color: #333;
      text-align: center;
      margin-top: 20px;
    }

    form {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="date"],
    input[type="time"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 14px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    #caloriesDisplay {
      display: none;
      margin-top: 20px;
    }

    #caloriesValue {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h2>Gym Task Tracker</h2>
  <form id="gymForm" action="submit.php" method="POST">

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
    
    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required>

    <input type="text" id="calorie1" name="calories" value="" >
    
    <label for="task">Task:</label>
    <select id="task" name="task" required>
      <option value="">Select an option</option>
      <option value="Chest + Biceps Day" data-calories="400">Chest + Biceps Day</option>
      <option value="Back + Triceps Day" data-calories="450">Back + Triceps Day</option>
      <option value="Leg Day" data-calories="350">Leg Day</option>
      <option value="Shoulders + Abs Day" data-calories="300">Shoulders + Abs Day</option>
      <!-- Add more options as needed -->
    </select>
    
    <input type="submit" value="Submit">
  </form>
  
  <div id="caloriesDisplay" style="display: none;">
    <h3>Calories Burnt:</h3>
    <p id="caloriesValue"></p>
  </div>
  
  <script>
    document.getElementById('gymForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
      
      // Get form values
      var date = document.getElementById('date').value;
      var time = document.getElementById('time').value;
      var task = document.getElementById('task').value;
      var caloriess = document.getElementById('task').options[document.getElementById('task').selectedIndex].dataset.calories;


      var calorieInput = document.getElementById("calorie1");
      console.log(calorieInput);
      console.log(calorieInput.value);
      calorieInput.value = caloriess;

      // Display submitted data
      console.log('Date:', date);
      console.log('Time:', time);
      console.log('Task:', task);
      console.log('Calories:', caloriess);
      
      // Display calories burnt
      document.getElementById('caloriesValue').textContent = caloriess + ' calories';
      document.getElementById('caloriesDisplay').style.display = 'block';
      
      // You can perform further processing with the submitted data here
      
      document.getElementById('gymForm').submit();
      // Reset form fields
    //   window.location.href = "submit.php";

    });
  </script>
</body>
</html>
