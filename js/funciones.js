/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
      $( ".img_1" ).find("img:nth-child(2)").hide();
      $( ".img_1" ).hover(
                 function(e){
                    $(this).find("img:first-child").hide();
                    $(this).find("img:nth-child(2)").show();
                    $(this).find("a").show();
                 },
                
                 function(e){ 
                      $(this).find("img:first-child").show();
                      $(this).find("img:nth-child(2)").hide();
                      $(this).find("a").hide();
                 }  // out
               ) ;

      
});