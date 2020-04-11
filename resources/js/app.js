require('./bootstrap');

const offset = 150;
const duration = 2000;
const timelineOffset = '-=1800';
let mousePos = 0;
let currentPos = 0;
let position = 0;
let draggable = false;
let blockAnime;

const forfeitAnim = {
    targets: '.forfeit',
    opacity: [0, 1],
    left: [0, 25],
    direction: 'normal'
};

const forfeitAnimReverse = {
    targets: '.forfeit',
    opacity: [0, 1],
    left: [0, 25],
    direction: 'reverse'
};

$('form input').keydown(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});

$(document).on('mousedown', '.stepper', function () {
    currentPos = mousePos;

    draggable = true;

    if (blockAnime) {
        blockAnime.pause();
    }
});

$(document).on("mousemove", function (event) {
    mousePos = event.pageY;

    if (draggable) {
        position = mousePos - currentPos;
        $('.stepper').css('transform', 'translateY(' + position / 2 + 'px)');
    }

    if (position <= (offset * -1) && draggable) {
        plus();
    }

    if (position >= offset && draggable) {
        minus();
    }
});

$(document).on("mouseup", function (event) {
    if (draggable) {
        centerDice();
    }
});

$('.arrow-top').click(function (event) {
    plus();
});

$('.arrow-bottom').click("press", function (event) {
    minus();
});

function centerDice() {
    draggable = false;
    anime(forfeitAnimReverse);

    blockAnime = anime({
        targets: '.stepper',
        duration: duration,
        translateY: 0,
    });
}

function cycle(sign) {
    return {
        targets: '.next',
        translateY: [sign * 100, -sign * 100],
        duration: duration * 1.1,
        begin: function () {
            $('.next').text(roll());
        }
    };
}

const cycleDown = cycle(-1);
const cycleUp = cycle(1);

function plus() {
    centerDice();
    const finalRoll = roll();

    return anime.timeline({duration})
        .add({
            targets: '.active',
            translateY: [0, 100],
        })
        .add(cycleDown, timelineOffset)
        .add(cycleDown, timelineOffset)
        .add({
            targets: '.active',
            translateY: [-100, 0],
            begin: function () {
                $('.active').text(finalRoll);
            },
            complete: function () {
                fetchForfeit(finalRoll);
            }
        }, timelineOffset);
}

function minus() {
    centerDice();
    const finalRoll = roll();

    return anime.timeline({duration})
        .add({
            targets: '.active',
            translateY: [0, -100],
        })
        .add(cycleUp, timelineOffset)
        .add(cycleUp, timelineOffset)
        .add({
            targets: '.active',
            translateY: [100, 0],
            begin: function () {
                $('.active').text(finalRoll);
            },
            complete: function () {
                fetchForfeit(finalRoll);
            }
        }, timelineOffset);
}


function roll() {
    // return d20() + d20();
    return d40();
}

function d20() {
    return Math.floor(Math.random() * 20) + 1;
}

function d40() {
    return Math.floor(Math.random() * 40) + 1;
}

function drawLogo() {
    anime.timeline()
        .add({
            targets: '.solonia-path',
            strokeDashoffset: [anime.setDashoffset, 0],
            duration: 4000,
            easing: 'easeInOutQuint',
            direction: 'alternate',
            fillOpacity: [0, 1],
            loop: false
        })
        .add(forfeitAnim, '-=2000');
}

function animateArrows() {
    anime({
        targets: '.arrow-top',
        loop: true,
        opacity: [1, 0],
        duration: 1000,
        easing: 'easeInOutQuint',
        top: [-120, -130],
        direction: 'alternate'
    });

    anime({
        targets: '.arrow-bottom',
        loop: true,
        opacity: [1, 0],
        duration: 1000,
        easing: 'easeInOutQuint',
        bottom: [-57, -67],
        direction: 'alternate'
    });
}

function fetchForfeit(roll) {
    $.get("/api/forfeits/" + roll)
        .done(function (data) {
            showforfeit(data.data.description_fr);
        })
        .fail(function (data) {
            showforfeit('Relance !');
        });
}

function showforfeit(text = null) {
    if (text) {
        $('.forfeit').html(text);
    }

    anime(forfeitAnim);
}

drawLogo();
animateArrows()
