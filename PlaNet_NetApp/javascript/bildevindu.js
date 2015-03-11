
   function popuponclick()
   {
      my_window = window.open("",
       "mywindow","status=1,width=350,height=150");
 
      my_window.document.write('<h1>The Popup Window</h1>');
   }
 
   function closepopup()
   {
      if(false == my_window.closed)
      {
         my_window.close ();
      }
      else
      {
         alert('Window already closed!');
      }
   }
