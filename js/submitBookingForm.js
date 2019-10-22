var nameRegex = /^[A-Za-z .\-']{1,50}$/;
var phoneRegex = /^(\(04\)|04|\+614)( ?\d){8}$/;
var creditCardRegex = /^(?! )^( ?\d){14,19}(?<! )$/; //lookarounds for trailing space
var mailRegex = /^(?!\s*$).+/;


function checkMail() {
    if (mailRegex.test(document.getElementById('cust-email').value)) {
        document.getElementById('cust-email').style.borderLeft = 'palegreen 10px solid';
        return true;
    } else {
        document.getElementById('emailError').innerHTML = '<div class="form-error">Please enter valid mail</div>';
        document.getElementById('cust-email').style.borderLeft = 'salmon 10px solid';
        return false;
    }
}

function checkName() {
    if (nameRegex.test(document.getElementById('cust-name').value)) {
        document.getElementById('cust-name').style.borderLeft = 'palegreen 10px solid';
        return true;
    } else {
        document.getElementById('nameError').innerHTML = '<div class="form-error">Please enter valid name</div>';
        document.getElementById('cust-name').style.borderLeft = 'salmon 10px solid';
        return false;
    }
}

function checkPhoneNumber() {
    if (phoneRegex.test(document.getElementById('cust-mobile').value)) {
        document.getElementById('cust-mobile').style.borderLeft = 'palegreen 10px solid';
        return true;
    } else {
        document.getElementById('mobileError').innerHTML = '<div class="form-error">Please enter valid mobile phone</div>';
        document.getElementById('cust-mobile').style.borderLeft = 'salmon 10px solid';
        return false;
    }
}

function checkCreditCardNumber() {
    if (creditCardRegex.test(document.getElementById('cust-card').value)) {
        document.getElementById('cust-card').style.borderLeft = 'palegreen 10px solid';
        return true;
    } else {
        document.getElementById('cardError').innerHTML = '<div class="form-error">Please enter valid credit card</div>';
        document.getElementById('cust-card').style.borderLeft = 'salmon 10px solid';
        return false;
    }
}

function checkExpirySelection() {
    if (isNaN(document.getElementById('cust-expiryMonth').value) || isNaN(document.getElementById('cust-expiryYear').value)) {
        document.getElementById('expiryError').innerHTML = '<div class="form-error">Please select expiry date for your card</div>';
        return false;
    } else {
        return true;
    }
}

function checkSelectSeat() {
    if (document.getElementById('finalPrice').textContent == '0.00 $') {
        document.getElementById('seatError').innerHTML = '<div class="form-error">Please choose seat before submit</div>';
        return false;
    } else {
        return true;
    }
}

function clearErrors() {

    var allErrors = document.getElementsByClassName('errors');
    for (let i = 0; i < allErrors.length; i++) {
        allErrors[i].innerHTML = "";
    }

    var allInputs = document.getElementsByTagName('input');

    for (let t = 0; t < allInputs.length; ++t) {
        allInputs[t].style.removeProperty("background-color");
    }
}

function formValidate() {
    setValueForServer();
    return true;
}

var movieNameToIDArray = {
    'Avengers:Endgame': 'ACT',
    'Top End Wedding': 'RMC',
    'Dumbo': 'ANM',
    'The Happy Prince': 'AHF'
};
var dayToDayCodeArray = {
    'Mon': 'MON',
    'Tue': 'TUE',
    'Wed': 'WED',
    'Thu': 'THU',
    'Fri': 'FRI',
    'Sat': 'SAT',
    'Sun': 'SUN'
};
var timeToTimeCodeArray = {
    '06:00PM': 'T18',
    '12:00PM': 'T12',
    '09:00PM': 'T21',
    '03:00PM': 'T15'
};

function setValueForServer() {
    let formHeading = document.getElementById('bookingFormHeading').textContent;
    let movieID = formHeading.split(' - ')[0];
    movieID = movieNameToIDArray[movieID];
    let day = formHeading.split(' - ')[1];
    day = dayToDayCodeArray[day];
    let time = formHeading.split(' - ')[2];
    time = timeToTimeCodeArray[time];
    document.getElementById('movie-id').value = movieID;
    document.getElementById('movie-day').value = day;
    document.getElementById('movie-hour').value = time;
}

var countRenderMonth = 0;
const MAXIMUM_MONTH = 12;
//this function sets initial value for month in drop down menu when clicking button on synopsis
//countRenderMonth will detect if is it the first time rendering
function setValueForMonth() {

    let monthInitial = "";

    if (countRenderMonth == 0) {
        monthInitial += '<option value="MM">MM</option>';
        for (let j = 1; j <= MAXIMUM_MONTH; ++j) {
            monthInitial += '<option value="' + j + '">' + j + '</option>';
        }
        document.getElementById("cust-expiryMonth").innerHTML = monthInitial;
        ++countRenderMonth;
    }
}

const MAXIMUM_YEAR_SPAN = 10;

var countRenderYear = 0;
//this function sets initial value for year in drop down menu when clicking button on synopsis
//countRenderYear will detect is it the first time rendering
function setValueForYear() {
    let currentYear = new Date().getFullYear();
    let maximumYear = currentYear + MAXIMUM_YEAR_SPAN;
    let yearInitial = "";
    if (countRenderYear == 0) {
        yearInitial += '<option value="YYYY">YYYY</option>';
        for (let j = currentYear; j <= maximumYear; ++j) {
            yearInitial += '<option value="' + j + '">' + j + '</option>';
        }
        document.getElementById("cust-expiryYear").innerHTML = yearInitial;
        countRenderYear++;
    }
}




//limit date and month in the future here
function limitMonth() {
    let yearAtTheMoment = new Date().getFullYear();
    let yearSelected = event.currentTarget.value;
    let monthResult = "";
    let monthSelectedLimit = document.getElementById("cust-expiryMonth").value;

    //check if year selected is the current year to limit 
    //more enhancement on the logic here check for year already selected or not before actually do the 
    //future year check
    if (yearSelected == yearAtTheMoment) {
        if (isNaN(monthSelectedLimit)) {
            monthResult += '<option value="MM">MM</option>';
            for (let j = new Date().getMonth() + 1; j <= MAXIMUM_MONTH; ++j) {
                monthResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryMonth").innerHTML = monthResult;
        } else {
            monthResult += '<option value="MM">MM</option>';
            for (let j = new Date().getMonth() + 1; j <= MAXIMUM_MONTH; ++j) {
                monthResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryMonth").innerHTML = monthResult;
            let indexOfMonthSelected = monthSelectedLimit - (new Date().getMonth() + 1) + 1;
            document.getElementById("cust-expiryMonth").options[indexOfMonthSelected].selected = true;
        }
    } else {
        if (isNaN(monthSelectedLimit)) {

            monthResult += '<option value="MM">MM</option>';
            for (let j = 1; j <= MAXIMUM_MONTH; ++j) {
                monthResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryMonth").innerHTML = monthResult;
        } else {
            monthResult += '<option value="MM">MM</option>';
            for (let j = 1; j <= MAXIMUM_MONTH; ++j) {
                monthResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryMonth").innerHTML = monthResult;
            document.getElementById("cust-expiryMonth").options[monthSelectedLimit].selected = true;
        }
    }

}

function limitYear() {
    let monthAtTheMoment = new Date().getMonth() + 1;
    let monthSelected = event.currentTarget.value;
    let yearResult = "";
    let yearSelectedLimit = document.getElementById('cust-expiryYear').value;


    if (monthSelected < monthAtTheMoment) {
        if (isNaN(yearSelectedLimit)) {

            yearResult += '<option value="YYYY">YYYY</option>';
            for (let j = new Date().getFullYear() + 1; j <= new Date().getFullYear() + MAXIMUM_YEAR_SPAN; ++j) {
                yearResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryYear").innerHTML = yearResult;
        } else {
            yearResult += '<option value="YYYY">YYYY</option>';
            let indexOfYearSelected = yearSelectedLimit - (new Date().getFullYear());
            for (let j = new Date().getFullYear() + 1; j <= new Date().getFullYear() + MAXIMUM_YEAR_SPAN; ++j) {
                yearResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryYear").innerHTML = yearResult;
            document.getElementById("cust-expiryYear").options[indexOfYearSelected].selected = true;
        }
    } else {
        if (isNaN(yearSelectedLimit)) {
            yearResult += '<option value="YYYY">YYYY</option>';
            document.getElementById("cust-expiryYear").innerHTML = yearResult;
            for (let j = new Date().getFullYear(); j <= new Date().getFullYear() + MAXIMUM_YEAR_SPAN; ++j) {
                yearResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryYear").innerHTML = yearResult;
        } else {
            yearResult += '<option value="YYYY">YYYY</option>';
            let indexOfYearSelected = yearSelectedLimit - (new Date().getFullYear()) + 1;
            for (let j = new Date().getFullYear(); j <= new Date().getFullYear() + MAXIMUM_YEAR_SPAN; ++j) {
                yearResult += '<option value="' + j + '">' + j + '</option>';
            }
            document.getElementById("cust-expiryYear").innerHTML = yearResult;
            document.getElementById("cust-expiryYear").options[indexOfYearSelected].selected = true;
        }
    }


}
