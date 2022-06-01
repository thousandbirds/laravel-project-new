
const time = 4000; //ms
const step = 50; 

function outNum(num, elem) {
    let l = document.querySelector('#' + elem);
    n = 0;
    let t = Math.round(time / num);
    let interval = setInterval(() => {
        n = n + step;
        if (n == num){
            clearInterval(interval);
        }
        l.innerHTML = n;
    },
        t);
}

outNum(20000, 'out-1')


const time2 = 8000; //ms
const step2 = 50; 

function outNum2(num2, elem2) {
    let l2 = document.querySelector('#' + elem2);
    n2 = 0;
    let t2 = Math.round(time2 / num2);
    let interval = setInterval(() => {
        n2 = n2 + step2;
        if (n2 == num2){
            clearInterval(interval);
        }
        l2.innerHTML = n2;
    },
        t2);
}

outNum2(10000, 'out-2')

/*
var time = 2;
$('#counter').each(function() {
    $('div').each(function() {
        var 
        i = 1,
        num = $(this).data('num'),
        step = 1000 * time / num,
        that = $(this),
        int = setInterval(function() {
            if (i <= num) {
                that.html(i);
            }
            else {
                clearInterval(int);
            }
            i++;
        },step);
    });
});
*/ 

$(document).ready(function () {
    $('.profile').click(function () {
      console.log(1);
      var toggleMenu = document.querySelector('.menu');
      toggleMenu.classList.toggle('active');
    });
      
});