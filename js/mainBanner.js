let images = ['img/Car1.jpg', 'img/Car_audi.jpg', 'img/Car_tesla.jpg', 'img/Car_RAV4.jpg', 'img/Car_RangeRover.jpg']
let i = 0

function next(){
    //alert('next')

    let img = document.getElementById('slide-image')
    i = i + 1;//i++
    if(i>= images.length){
        i=0
    }
    img.src = images[i]
}

//next()every 3 sec - 3000, 2sec - 2000
setInterval(function(){
    next()
}, 3000)