import {displayDate} from "./dateFns";
import './style.css';
require('normalize.css');


//Time display
setInterval(displayDate, 1000);

//Global values for toggling visibility
let SeeBookingArea = document.getElementById('bookingArea');
let bookbutton = document.getElementById('toggleButton');
let MakeBookingArea = document.getElementById('formID');

//Event listener
bookbutton.addEventListener("click", showBookings);

//Initially set display to none for json list
SeeBookingArea.style.display = "none";


//Function to toggle views
function showBookings()
{    
    if (MakeBookingArea.style.display == "none") {
        SeeBookingArea.style.display = "none";
        MakeBookingArea.style.display = "flex";
        MakeBookingArea.style.flexDirection = "column";
    }
    else {
        SeeBookingArea.style.display = "flex";
        SeeBookingArea.style.flexDirection = "column";
        MakeBookingArea.style.display = "none";
    }
}




/************************ 
 * 
 * REMEMBER TO NPM RUN BUILD
 * AND ALSO TO REUPLOAD MAIN.JS TO SERVER
 * OTHERWISE NO CHANGES WILL BE SEEN
 * 
 * 
 */