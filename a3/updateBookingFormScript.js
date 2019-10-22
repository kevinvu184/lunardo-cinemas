var pricesDiscount = {
    STA_DISCOUNT: 14.00,
    STP_DISCOUNT: 12.50,
    STC_DISCOUNT: 11.00,
    FCA_DISCOUNT: 24.00,
    FCP_DISCOUNT: 22.50,
    FCC_DISCOUNT: 21.0
}

var pricesNormal = {
    STA_NORMAL: 19.80,
    STP_NORMAL: 17.50,
    STC_NORMAL: 15.30,
    FCA_NORMAL: 30.00,
    FCP_NORMAL: 27.00,
    FCC_NORMAL: 24.00
};

var titlesArray = {
    'datetimeACT': 'Avengers:Endgame',
    'datetimeRMC': 'Top End Wedding',
    'datetimeANM': 'Dumbo',
    'datetimeAHF': 'The Happy Prince'
};

function moveToBooking() {
    window.location.href = "#booking-anchor";
}

function updateBookingForm() {
    var title = event.currentTarget.parentElement.id;

    var content = event.currentTarget.textContent;

    var updatedHeading = document.getElementById('bookingFormHeading');

    let contentToBeUpdated = titlesArray[title] + ' - ' + content.substring(0, 3) + ' - ' + content.substring(3);
    updatedHeading.innerHTML = contentToBeUpdated;
    seedSeatData();
    displayBookingForm();
    calcPrice();
}
var daysArray = {
    'MON': 'Mon',
    'TUE': 'Tue',
    'WED': 'Wed',
    'THU': 'Thu',
    'FRI': 'Fri',
    'SAT': 'Sat',
    'SUN': 'Sun'
}

var timesArray = {
    'T12': '12:00PM',
    'T15': '03:00PM',
    'T18': '06:00PM',
    'T21': '09:00PM'
}
function updateBookingFormState(title, day, time) {
    var updatedHeading = document.getElementById('bookingFormHeading');

    let contentToBeUpdated = titlesArray[title] + ' - ' + daysArray[day] + ' - ' + timesArray[time];
    updatedHeading.innerHTML = contentToBeUpdated;
    seedSeatData();
    displayBookingForm();
    calcPrice();
}



function displayBookingForm() {
    document.getElementById('bookingForm').style.display = 'block';
}


//this function is used to seat initial data for seats from 1-10
var firstTimeRendering = 0;
var seatCodes = ['STA', 'STP', 'STC', 'FCP', 'FCC', 'FCA'];
function seedSeatData() {
    if (firstTimeRendering == 0) {
        for (let j = 0; j < seatCodes.length; ++j) {
            let options = '<option value=""> Please Select</option>';
            for (let i = 1; i <= 10; ++i) {
                options += '<option value="' + i + '">' + i + '</option>';
            }
            document.getElementById("seats-" + seatCodes[j]).innerHTML = options;
        }
    }
    ++firstTimeRendering;
}




function calcPrice() {
    var day = document.getElementById('bookingFormHeading').textContent.split(' - ')[1];
    var time = document.getElementById('bookingFormHeading').textContent.split(' - ')[2];
    var testFinalPrice = 0;

    //this is discount price
    if ((day == 'Mon') || (day == 'Wed') || ((day == 'Tue') && (time == '12:00PM')) || ((day == 'Wed') && (time == '12:00PM')) ||
        ((day == 'Thu') && (time == '12:00PM')) || ((day == 'Fri') && (time == '12:00PM'))) {
        for (seatID in pricesDiscount) {
            if (!isNaN(document.getElementById('seats-' + seatID.substring(0, 3)).value)) {
                testFinalPrice += pricesDiscount[seatID] * document.getElementById('seats-' + seatID.substring(0, 3)).value;
            }
        }
    } else {
        for (seatID in pricesNormal) {
            if (!isNaN(document.getElementById('seats-' + seatID.substring(0, 3)).value)) {
                testFinalPrice += pricesNormal[seatID] * document.getElementById('seats-' + seatID.substring(0, 3)).value;
            }
        }
    }

    document.getElementById('finalPrice').textContent = testFinalPrice.toFixed(2) + ' $';

}
