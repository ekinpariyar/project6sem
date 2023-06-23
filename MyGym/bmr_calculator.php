<!DOCTYPE html>
<html>
<head>
<style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .gender-label {
            font-weight: normal;
            margin-bottom: 5px;
        }

        button {
            display: block;
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        #bmr-result,
        #calorie-intake-result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
    <title>BMR Calculator</title>
    <script>
        function calculateBMR() {
            var weight = parseFloat(document.getElementById("weight").value);
            var height = parseFloat(document.getElementById("height").value);
            var age = parseInt(document.getElementById("age").value);
            var gender = document.querySelector('input[name="gender"]:checked').value;
            var activityLevel = parseFloat(document.getElementById("activity-level").value);

            var bmr;

            if (gender === "male") {
                bmr = 66 + (6.23 * weight) + (12.7 * height) - (6.8 * age);
            } else if (gender === "female") {
                bmr = 655 + (4.35 * weight) + (4.7 * height) - (4.7 * age);
            } else {
                alert("Please select a gender.");
                return;
            }

            var dailyCalorieIntake = bmr * activityLevel;

            document.getElementById("bmr-result").innerHTML = "Your Basal Metabolic Rate (BMR) is: " + bmr.toFixed(2) + " calories per day.";
            document.getElementById("calorie-intake-result").innerHTML = "To maintain your weight, you should consume approximately " + dailyCalorieIntake.toFixed(2) + " calories per day.";
        }
    </script>
</head>
<body>
    <h1>BMR Calculator</h1>
    <form>
        <label for="weight">Weight (in kg):</label>
        <input type="text" id="weight"><br>

        <label for="height">Height (in cm):</label>
        <input type="text" id="height"><br>

        <label for="age">Age (in years):</label>
        <input type="text" id="age"><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>

        <label for="activity-level">Activity Level:</label>
        <select id="activity-level">
            <option value="1.2">Sedentary (little or no exercise)</option>
            <option value="1.375">Lightly active (light exercise/sports 1-3 days/week)</option>
            <option value="1.55">Moderately active (moderate exercise/sports 3-5 days/week)</option>
            <option value="1.725">Very active (hard exercise/sports 6-7 days/week)</option>
            <option value="1.9">Extra active (very hard exercise/sports & physical job or 2x training)</option>
        </select><br>

        <button type="button" onclick="calculateBMR()">Calculate</button>
    </form>

    <div id="bmr-result"></div>
    <div id="calorie-intake-result"></div>
</body>
</html>