(function(){
    var key= 'AIzaSyCDVP9vWyKfgVzukW8FS7X2biSMW55aC3E';
    
    var getInsights = function(url,key){
        $.ajax({
            url:"https://www.googleapis.com/pagespeedonline/v2/runPagespeed",
            data:{"url": url,"strategy":"mobile"},
            type:'get'
  }).done(function(data){
            console.log(data);
        })
    };
    
    $("#run").click(function(){
        var u = $("#urli").val();
        alert("Your URL is "+u);
       getInsights(u,key); 
    })
    
}());


