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
$(document).ready(function (){
    $('#brand-form').on('submit', function(event){
        event.preventDefault();
        var brandName =$('#brand-name').val();
        $.ajax (
            {
                url :'brands-store',
                method:'POST',
                data:{
                    _token:$('meta[name="csrf-token"]').attr('content'),
                    name:brandName,
                },
                success:function(data){

                    console.log("brand created successful");
                    location.reload();

                },
                error:function(error){
                    console.error(error.reponseText);
                },
            });
    });
});