require('./bootstrap');

var $ = require('jquery');
var Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
    {
      url: 'http://localhost:8000/api/students',
      method: 'GET',
      success: function(dataresponse) {
        var studenti = dataresponse.studentsApi;
        console.log(dataresponse);
        console.log(studenti);

        var source = $('#student-template').html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < studenti.length; i++) {

          var html = template(studenti[i]);
          $('#student-list').append(html);
        }
      },
      error: function(){
        alert('error');
      }
    }
  );
});
