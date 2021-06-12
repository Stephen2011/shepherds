

 function greet() {

  var todaydate = new Date();

  var timeis = todaydate.getTime();

  todaydate.setTime(timeis);

  var houris = todaydate.getHours();

  if (houris > 17) display = "Evening";

  else if (houris >12) display = "Afternoon";

  else display = "Morning";

  var title = document.title;

  var welcome = ("Good " + display + ". Welcome to " + title +".");

  document.write("<h1 style='color:purple'>"+welcome+"</h1>");

}
    greet();