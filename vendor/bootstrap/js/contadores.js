  function count(){
  var casos = { var: 0 };
  TweenMax.to(casos, 3, {
    var: 3792, 
    onUpdate: function () {
      var number = Math.ceil(casos.var);
      $('.casos').html(number);
      if(number === casos.var){ count.kill(); }
    },
    onComplete: function(){
      count();
    },    
    ease:Circ.easeOut
  });
}
count();




  function count2(){
  var muertes = { var: 0 };
  TweenMax.to(muertes, 5, {
    var: 179, 
    onUpdate: function () {
      var number = Math.ceil(muertes.var);
      $('.muertes').html(number);
      if(number === muertes.var){ count2.kill(); }
    },
    onComplete: function(){
      count2();
    },    
    ease:Circ.easeOut
  });
}
count2();



 function count3(){
  var nuevos = { var: 0 };
  TweenMax.to(nuevos, 3, {
    var: 701, 
    onUpdate: function () {
      var number = Math.ceil(nuevos.var);
      $('.nuevos').html(number);
      if(number === nuevos.var){ count3.kill(); }
    },
    onComplete: function(){
      count3();
    },    
    ease:Circ.easeOut
  });
}
count3();