$(document).ready(function()
{
 

    Beolvas();
    $("#tartalom").delegate(".gomb","click",kivalaszt);
    $("#kuld").on("click",adatokatMent);
    
});



var feladatok=[];

function adatokatMent()
{
    var tevekenyseg=
           {
               tevekenyseg:$("#tevekenyseg").val(),
               datum:$("#datum").val()
               
           };
           console.log(tevekenyseg);
           
    $.ajax
    (
           
        {
            type:"POST",
            url: "beir.php",
            data:tevekenyseg,  
   success:function(ujtevekenyseg)
   {
       console.log(ujtevekenyseg);
       feladatok.push(JSON.parse(ujtevekenyseg));
       
    
       Beolvas();
 
      
        
       
   },
   
   
    error:function()
    {
        
           alert("hiba az adatok mentésekor");
    
    }
           
        
   });
           
}
function kivalaszt()
{
       var id=$(this).attr("id");
     
       var Tevekenyseg=$(this).attr("Tevekenyseg");
       
       var elem="<div class='Tevekenyseg'>"+"kiirt tevekenyseg:  "+Tevekenyseg+"</div>";
       $("#idopontadatok").append(elem);


}


function Beolvas()
{
    console.log(feladatok);
    $.ajax(
            {
               
                type: 'GET',
                url:"feldolgoz.php",
                success:function(result)
                {
                    feladatok=JSON.parse(result);
                    kiir();
                    
                },
                error:function()
                {
                    alert("hiba");
                    
                }
                
        
            });
 
   
    
}


function kiir()
{
    console.log(feladatok);
   
    
    var elem="<div class='elem'>";
    for (var i = 0; i <feladatok.length; i++)
    {
        elem+="<button class='gomb' Tevekenyseg="+feladatok[i].Tevekenyseg+"  id="+feladatok[i].id+">Kivalaszt</button>"+"&nbsp;"+feladatok[i].Tevekenyseg+"&nbsp;";
        if (i%5!==0)
        {
            elem+="&nbsp;"+i+"&nbsp;\n";
            
        }
        
        
        
    }
    elem+="</div>";
    $("#tartalom").append(elem);
}
