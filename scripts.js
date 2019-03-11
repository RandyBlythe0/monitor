
$('#info-loader').show();
$('#disk-loader').show();
$('#ram-loader').show();
$('#load-loader').show();

var ping_data 
var info_data 
var ram_data
var load_data 
$.ajax({
    url: 'script.php',
    type: 'POST',
    data: {},
    dataType: 'html',
    success: function(data) {
        //var rdata = data;
        var objects = jQuery.parseJSON(data);
        for(var i=0; i<objects.length;i++){
                if(objects[i].id == "1") {$('#ping-update').html(objects[i].data);$('#ping-loader').hide();}
                if(objects[i].id == "2") {$('#info-update').html(objects[i].data);$('#info-loader').hide();}
                if(objects[i].id == "3") {$('#disk-update').html(objects[i].data);$('#disk-loader').hide();}
                if(objects[i].id == "4") {$('#ram-update').html(objects[i].data);$('#ram-loader').hide();}
                if(objects[i].id == "5") {$('#load-update').html(objects[i].data);$('#load-loader').hide();}
            
            }
//Moved the hide event so it waits to run until the prior event completes
//It hide the spinner immediately, without waiting, until I moved it here
        
    },
    error: function() {
        $('.ping-update').html("Something Went Wrong!!");
        $('#ping-loader').hide();   
    }

});