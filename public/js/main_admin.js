$(document).ready(function(){
    $('.clone_item').on('click', ()=>{
        console.log('clone clicked')
        let clone = $('.clone_main').html();
        $('.clone_append').append(clone);
    })


    $(document).on('change', '.multi_img', (event)=>{

        console.log(event.currentTarget);

        let filetoload = event.currentTarget;
        // let imageTarget = $('.load_img');

        // console.log($(filetoload).parent().siblings('.clone_dom').children('div.mx-w-100').children('.load_img'))

        let imageTarget = $(filetoload).parent().siblings('.clone_dom').children('div.mx-w-100').children('.load_img');
        // console.log($("#imgInp")[0])
        //
        // var filetoload = $("#imgInp")[0];

        // initiate the file reader object
        var reader = new FileReader();
        // read the contents of image file
        reader.readAsDataURL(filetoload.files[0]);
        reader.onload = function(e){
            // set the image source
            let srcs = e.target.result;

            // jQuery('#imgtoshow').attr('src', srcs);
            imageTarget.attr('src', srcs);

            // try to add result to another input
            // jQuery('#imgurl').val(e.target.result);
        }
        // another way to get the source of a file
        //=======================================//
        //display selected image into the image tag
        //document.getElementById('thepicture').src = window.URL.createObjectURL(i.files[0]);

    })
});
