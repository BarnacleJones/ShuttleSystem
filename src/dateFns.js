import { format} from 'date-fns';

function displayDate(){

let date = format(new Date(),"eeee, MMMM do, yyyy");
let time = format(new Date(),"HH:mm:ss");
let dateField = document.getElementById("dateDisplay");
let timeField = document.getElementById("timeDisplay");
dateField.innerText = date;
timeField.innerText = time;
}

export {displayDate}