$(document).ready(function(){


    $('#alert').hide()

    $('#showMore').click(
        function(){
            //$('#alert').show()// только показывает что под кнопкой
            $('#alert').toggle()//показывает и снова скрывает что под кнопкой
        }
    )






    //jquery uses css selectors
    $('.tab-container .btn').click(
        function(){
            let txt = $(this).html()

            if(txt == 'HTML'){
                $('#out').html(`<img width = "200" height="250" src ="Images/HTML5.jpg">`)
            } else if(txt == 'CSS'){
                $('#out').html(`<img width="200" height="250" src ="Images/CSS.png">`)
            } else if(txt == 'JS'){
                $('#out').html(`<img width="200" height="250" src ="Images/JS.jpg">`)
            }
        }
    )
})