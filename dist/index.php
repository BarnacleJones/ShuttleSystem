<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben's Shuttle Service</title>   
    
</head>
<body class="page">

  <header>
      <img src="../src/logo.svg" alt="Ben's Shuttle Logo" srcset="" width="20%">
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
            <button id='removeButton' onclick='removeInstance($key->Name)'>Remove</button>             
            <br>
            ";
            }  
        }
        
    }    
  ?> 
     <main class="bookingSection">

        <div id="greeting">
            <h1>Airport Shuttles and City Transfers</h1>
            <p>Delivering you safely and professionally, anywhere you need to be.</p>
            <button class="toggleButton">BOOK A SHUTTLE</button>
        </div>

    <div id="formSection">
         <!-- Form for getting shuttle information into JSON -->
        <form method="post" action="./script.php" class="formy" id="formID">
                    <h3 id="heading">Book Shuttle</h3>
                    <div id="input_name" class="input">
                        <label for="name">Booking Name:</label>
                        <input id="name" type="text" 
                            Placeholder="Name (First,Last)" name="name" 
                            required>
                    </div><br>
                    <div id="input_day" class="input">
                        <label for="dayPick">Date of Travel:</label>
                        <input type="date" name="dayPick" required>
                    </div> <br>
                    <div id="input_time" class="input">
                        <label for="time">Time:</label>
                        <input id="time" type="time" 
                        name="timePick" 
                        required>
                    </div><br>
    
                    <div class="id input">
                        <input id="submit" type="submit" 
                            name="submit" value="SUBMIT"                            
                            >
                    </div>  <br>              
                            
        </form> 
        <button class="toggleButton">VIEW BOOKINGS</button>
    </div>

<div id="bookingArea">
    <?php
    displayJson(); 
    ?>
    <button class="toggleButton">HOME</button>
</div>

    </main>

    



    </main>
    
    <br><br>
    
    
    
    
    <footer class="timeArea">
        <p><span id="dateDisplay"> </span></p>
        <p><span id="timeDisplay"></span></p>
    </footer>

   
    <script src="main.js" ></script>
</body>
</html>