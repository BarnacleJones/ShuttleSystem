import {displayDate} from "./dateFns";
import './style.css';
require('normalize.css');


//Time display
setInterval(displayDate, 1000);

//Global values for toggling visibility
let SeeBookingArea = document.getElementById('bookingArea');
let bookbutton = document.getElementsByClassName('toggleButton');
let MakeBookingArea = document.getElementById('formSection');
let greetingArea = document.getElementById('greeting');
let removeButton = document.getElementsByClassName('removeButton')

//Event listener on each page nav button
for (let index = 0; index < bookbutton.length; index++) {
    const element = bookbutton[index];
    element.addEventListener("click", showBookings);
}
console.log("test")
//Event listener for each remove booking button
for (let index = 0; index < removeButton.length; index++) {
    const element = removeButton[index];
    let name = element.id;
    // element.addEventListener("click", removeInstance(name)); //removed this one as it made event fire on page load
    element.onclick= () => removeInstance(name);
}

console.log("hi")
//Initially set display to none for json list
SeeBookingArea.style.display = "none";
MakeBookingArea.style.display = "none";


//Function to toggle views
function showBookings()
{  
    this.parentElement.style.display = "none";
   //if this is welcome screen
   if (this.parentElement == greetingArea) {
    //go from welcome screen to booking area
    MakeBookingArea.style.display = "flex";
   }
   //if this is make booking screen
   else if (this.parentElement == MakeBookingArea) {
        SeeBookingArea.style.display = "flex";        
   }
   else if (this.parentElement == SeeBookingArea) {
    greetingArea.style.display = 'flex'
   }
}


function removeInstance(name)
{
    
    let jsonData = '../dist/BookShuttle.json';
    fetch(jsonData).then(response=>response.json())
    .then(json => {
            json.forEach(element => {            
                if(element[0].Name == name)
                {
                    console.log(element[0]);
                    //if the element chosen is that of the name
                    //want to remove that and update the json file.....
                    //no idea how
                    // newArray = json.splice(element[1], json.length-1)
                };

            })
            
        
        
    })   
    
    // console.log(jsonData);
}



/************************ 
 * 
 * REMEMBER TO NPM RUN BUILD
 * AND ALSO TO REUPLOAD MAIN.JS TO SERVER
 * OTHERWISE NO CHANGES WILL BE SEEN
 * 
 * 
 */