function shwimg(){
    // get the image to show selected image
    var i = document.getElementById('imgInp');

    //
    var filetoload = $("#imgInp")[0];

    // initiate the file reader object
    var reader = new FileReader();
    // read the contents of image file
    reader.readAsDataURL(filetoload.files[0]);
    reader.onload = function(e){
        // set the image source
        let srcs = e.target.result;

        jQuery('#imgtoshow').attr('src', srcs);

        // try to add result to another input
        // jQuery('#imgurl').val(e.target.result);
    }
    // another way to get the source of a file
    //=======================================//
    //display selected image into the image tag
    //document.getElementById('thepicture').src = window.URL.createObjectURL(i.files[0]);
}

function loadMoreImage(val) {
    let dom = $('.'+val);
    let kids = dom.children();
    if(kids.length > 0){
        let lastID = kids.last().attr('data-id');
        // console.log('kids length = '+kids.length+ ' and last child data-id =  '  + lastID);
        // console.log(window.location.origin);
        let root = window.location.origin;
        $.get(root+"/cms-admin/from_gallery/images/fetch_more/"+lastID, function(data, status){
            // console.log("Data: " + data + "\nStatus: " + status);
            // console.log(data);
            if(data.message==='success'){
                data.data.forEach(function (a, b) {
                    //a = data, b = position
                    template(a, dom, root)
                });
                console.log('images added');
            }else{
                console.log(data.message);
            }

        });
    }
}

function template(val, parent, root) {
    root = root+'/';
    let template = "<div class='col-sm-6 col-md-3 p-relative image-list-item' data-id='"+val.id+"'>" +
        "<div class='squared'><div class='img-wrapper'>" +
        "<img src='"+root+val.url+"' alt='' class='loadintoid' data-target='img_id' data-id='"+val.id+"'></div></div></div>";
    parent.append(template);
}


$(document).on('click', '.loadintoid', function () {
    let input = $('#'+$(this).attr('data-target'));
    input.val($(this).attr('data-id'))

    $('.close-modal').click();
});