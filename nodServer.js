// var http = require('http');
// http.createServer(function (req, res) {
//     res.writeHead(200, { 'Content-Type': 'text/html' });
//     res.end('Hello World!');
// }).listen(8080);

// var express=require('express');
// var app=express();
// app.set('view emngine','jade');
// app.get('/',function(req,res)
// {
// });
// var server=app.listen(3000,function()
// {

// });

// var http = require('http')

// var server = http.createServer(
//     function (req, res) {
//         res.writeHead(200, {
//             "Content-Type": "text/plain"
//         })
//         res.end("Hello World \n")
//     }

// )
// server.listen(7000)

// var request = require("request");
// request("http://www.google.com",function(error,response,body)
// {
// console.log(body);
// });

var express=require('express');
var app=express();
app.route('/Node').get(function(req,res)
{
res.send("Tutorial on Node");
});
app.route('/Angular').get(function(req,res)
{
res.send("Tutorial on Angular");
});
app.get('/',function(req,res)
{
res.send('Welcome to Guru99 Tutorials');
});

var server=app.listen(3000,function()
{

});