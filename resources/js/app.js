require('./bootstrap');

const offset = 150;
const duration = 2000;
const timelineOffset = '-=1800';
let mousePos = 0;
let currentPos = 0;
let position = 0;
let draggable = false;
let blockAnime;

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


function centerDice() {
    draggable = false;
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
            }
        }, timelineOffset);
}


function roll() {
    return d20() + d20();
}

function d20() {
    return Math.floor(Math.random() * 20) + 1;
}
