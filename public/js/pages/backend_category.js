$(document).ready(function(){
    $.ajax({
        type:'GET',
        url:url,
        success:function(response){
            //Handle the successful response here 
            console.log('GET Request Successful:',response);
        },
        error:function(error){
            //handle errors here
            console.log('Error in GET Request:',response);
        }
    });
    });