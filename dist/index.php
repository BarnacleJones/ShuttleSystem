<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben's Shuttle Service</title>   
    
</head>
<body>
<div class="page">
  <header>
    <h1>Ben's Shuttle Booking Service</h1>
  </header> 
  <?php
  function displayJson()
    {
        //decode json file and put it in cars variable
        $files = json_decode(file_get_contents("BookShuttle.json"));
        //loop through all the variables and display in html
        
        foreach($files as $display)
        {    
            //nested loop. This is to access the values of the json as they are 
            //all in arrays...not sure how to get around that besides this
            foreach ($display as $key) 
            {
            echo "                        
            <h2>Name: $key->Name</h2>  
            <p>Day: $key->Day</p>            
            <p>Time: $key->Time</p>               
            <br>
            ";
            }  
        }
    }    
  ?>
     <main class="bookingSection">
         <!-- Form for getting shuttle information into JSON -->
        <form method="post" action="./script.php" class="formy" id="formID">
                    <h3 id="heading">Book Shuttle</h3>
                    <div id="input_name" class="input">
                        <label for="name">Booking Name:</label>
                        <input id="name" type="text" 
                            Placeholder="Name (First,Last)" name="name" 
                            required>
                    </div>
                    <div id="input_day" class="input">
                        <label for="dayPick">Date of Travel:</label>
                        <input type="date" name="dayPick" required>
                    </div>
                    <div id="input_time" class="input">
                        <label for="time">Time:</label>
                        <input id="time" type="time" 
                        name="timePick" 
                        required>
                    </div>
    
                    <div class="id input">
                        <input id="submit" type="submit" 
                            name="submit" value="submit"                            
                            >
                    </div>                
        </form>
        </main>
    <button id="toggleButton">Toggle Bookings/Book</button>
    <br><br>
    <div id="bookingArea">
        <?php
        displayJson(); 
        ?>
    </div>
    <footer class="timeArea">
    <p>Today's date is: <span id="dateDisplay"> </span></p>
    <p>The time is: <span id="timeDisplay"></span></p>
    </footer>

  </div>  
    <script src="main.js" ></script>
</body>
</html>