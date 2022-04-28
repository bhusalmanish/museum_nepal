// sticky navigation bar


const navbar = document.querySelector('.nav-bar');
window.onscroll = () => {
    this.scrollY > 20 ? navbar.classList.add('sticky') : navbar.classList.remove('sticky');
}

// // login form link

// function myFunction() {
//     const x = document.getElementById('container1');
//     x.style.display = 'block';
// }

// //login cross icon close

// function cut() {
//     const y = document.getElementById('container1');
//     y.style.display = 'none';
// }

//jump to signup from login

function link() {
    const x = document.getElementById('container2');
    x.style.display = 'block';
}

//register form link

function myFunction1() {
    const y = document.getElementById('container2');
    y.style.display = 'block';
}

// register cross icon close

function cut1() {
    const x = document.getElementById('container2');
    x.style.display = 'none';
}

//jump to login from signup

function link1() {
    const x = document.getElementById('container1');
    x.style.display = 'block';
}

//ticket link

function ticketlink() {
    const x = document.getElementById('ticket');
    x.style.display = 'block';
}

//ticket icon close

function ticketclose() {
    const y = document.getElementById('ticket');
    y.style.display = 'none';
}

// ticket details close

function detailsclose() {
    const x = document.getElementById('details');
    x.style.display = 'none';
}

//ticket confirmation link

function linkit() {
    const y = document.getElementById('details');
    y.style.display = 'block';
}

//ticket confirmation page cancel

function cancel() {
    const x = document.getElementById('ticket');
    x.style.display = 'block';
}

//get back to homepage after canceling registration form

function cancelit() {
    const y = document.getElementById('home');
    y.style.display = 'block';
}

//notice link

function noticelink() {
    const y = document.getElementById('notice-close');
    y.style.display = 'block';
}

//notice close

function noticeclose() {
    const x = document.getElementById('notice-close');
    x.style.display = 'none';
}

//login linked with blur

function toggleL() {
    var home = document.getElementById('home');
    home.classList.toggle('active');
    var container1 = document.getElementById('container1');
    container1.classList.toggle('active');
}

// register linked with blur

function toggleR() {
    var home = document.getElementById('home');
    home.classList.toggle('active');
    var container2 = document.getElementById('container2');
    container2.classList.toggle('active');
}




//ticket linked with blur
function toggleTB() {
    var home = document.getElementById('home');
    home.classList.toggle('active');
    var ticket = document.getElementById('ticket');
    ticket.classList.toggle('active');
}

// ticket details linked with blur
function toggleTD() {
    // ticket.classList.toggle('hide');
    var home = document.getElementById('home');
    home.classList.toggle('active');
    var details = document.getElementById('details');
    details.classList.toggle('active');
}

function toggleTF() {
    var home = document.getElementById('home');
    home.classList.toggle('active');
    var tf = document.getElementById('tf');
    tf.classList.toggle('active');
}


// function toggleN() {
//     var home = document.getElementById('home');
//     home.classList.toggle('active');
//     var notice = document.getElementById('notice');
//     notice.classList.toggle('notice');
// }