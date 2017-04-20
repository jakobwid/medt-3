/**
 * Created by jwidh on 20.04.2017.
 */
$("#add").click(function(){
    $("#tab").append("<tr><td>Hello</td><td>World</td></tr>");
});

$("#delete").click(function(){
    $("#tab tr:last-child").remove();
});