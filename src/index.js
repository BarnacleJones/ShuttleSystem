import {displayDate} from "./dateFns";
import './style.css';
require('normalize.css');


//when working
setInterval(displayDate, 1000);
let SeeBookingArea = document.getElementById('bookingArea');
let bookbutton = document.getElementById('toggleButton');

bookbutton.addEventListener("click", showBookings);
SeeBookingArea.style.display = "none";
let MakeBookingArea = document.getElementById('formID');

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