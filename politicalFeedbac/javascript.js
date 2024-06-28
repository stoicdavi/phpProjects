function validateForm() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let feedback = document.getElementById('feedback').value;
    let rate = document.getElementById('rate').value;
    let valid = true;

    if (name === ''){
        document.getElementById('nameError').innerHTML = 'Name is required';
        valid = false;
    }
    else{
        document.getElementById('nameError').innerHTML = '';
    }
    if (email === ''){
        document.getElementById('emailError').innerHTML = 'Email is required';
        valid = false;
    }
    else{
        document.getElementById('emailError').innerHTML = '';
    }
    if (feedback === ''){
        document.getElementById('feedbackError').innerHTML = 'Feedback is required';
        valid = false;
    }
    else{
        document.getElementById('feedbackError').innerHTML = '';
    }
    if (rate === ''){
        document.getElementById('rateError').innerHTML = 'Rate is required';
        valid = false;
    }
    else if(isNaN(rate) || parseInt(rate) < 1 || parseInt(rate) > 10) {
        document.getElementById('rateError').innerHTML = 'Rate must be a number between 1 and 10';
        valid = false;

    }
    else{
        document.getElementById('rateError').innerHTML = '';
    }
    return valid;

}