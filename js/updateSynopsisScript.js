var buttonsIDArray = { 'buttonACT': 'synopsisACT', 'buttonRMC': 'synopsisRMC', 'buttonANM': 'synopsisANM', 'buttonAHF': 'synopsisAHF' };
//Update synopsis
function displaySynopsis() {
    var buttonID = event.currentTarget.id;
    var synopsisID = buttonsIDArray[buttonID];

    if (document.getElementById(synopsisID).style.display == 'inline-block') {
        document.getElementById(synopsisID).style.display = 'none';
    } else {
        document.getElementById(synopsisID).style.display = 'inline-block';
        window.location.href = "#" + synopsisID + "-anchor";
    }
}

function displaySynopsisState(synopsisID) {

    document.getElementById(synopsisID).style.display = 'inline-block';
}
