$(function(){
    $("#sss").click(function(){
        
          var  Search = $('#Search').val()
        
        $.ajax({
            url:'progres.php',
            type:'post',
            data:$("#form1").serialize(),
            
            success: function(r){

console.log(r);

           $('.tab-content').html(r)
            },
            error: function (data) {
                // var r = jQuery.parseJSON(data.responseText);
                console.log(data)
         }
        })
        return false;
    })
})
$("#sss").click(function(){
    $("#nav-tabContent").show();
})