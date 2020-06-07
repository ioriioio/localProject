var data = [];
            $('.reserve').on('click',function(){
                $('#modal').addClass("output");

                var value  = $(this).val();
                data = {
                    idEat: value,
                    name: $('h2').text()
                }
                console.log(data);


                //ajax
                $.ajax({
                    type: 'get',
                    datatype: 'json',
                    url: './getReserve',
                    data: value
                })
                .done(function(msg,status,xhr){
                    console.log("success");
                    console.log("msg=" + msg);
                    console.log("status=" + status);
                    console.log("xhr=" + xhr);
                    console.log()
                    //ajax送信

                    //window.location.href = "./";
                })
                .fail(function(xhr,status,error){
                    console.log("error=" + error);
                })
                .always(function(xhr,status,error){
                    console.log("fin");
                })
            });