<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="http://code.jquery.com/jquery-latest.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
    *{transition:300ms all;}
    a:link{
        text-decoration: none;
    }
    section {
        float:left;
        width: 100%;
        min-height: 400px;
        position: relative;
        z-index: 50;
        padding:50px 0px 150px 0px;
    }
    .section-1 {
        background: rgba(179,220,237,1);background: rgba(41,128,185,1);
        background: -moz-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(41,128,185,1)), color-stop(27%, rgba(41,128,185,1)), color-stop(100%, rgba(52,152,219,1)));
        background: -webkit-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: -o-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: -ms-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: linear-gradient(to bottom, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2980b9', endColorstr='#3498db', GradientType=0 );
    }
    .section-2 {
        background-color: #34495e;color:white;font-size: 17px;
    }
    .section-3 {
        background-color: #3498db; font-size: 17px;
    }
    .logo-a {
        position:absolute;
        margin-left:48%;
        background: none;
        margin-top: 45px;
        z-index:99999;
        width:50px;
    }
    .logo-b {
        position:fixed;
        margin-left:48.3%;
        background: none;
        margin-top: 8px;
        width:40px;
        height:40px;
    }
    .options-a {
        float:right;
        margin-right: 1%;
    }
    .button-a {
        margin-right:10px;
        border:none;
        background: none; 
        height:50px;
        transition: 10ms;
        text-decoration: none;
    }
    .button-a:hover {
        border-bottom:5px solid #00ffea;
        text-decoration: none;
    }
    .presentacion-a {
        color:white;
        width:100%;
        height:500px;
        float: left;
        background: #3498db;
        background: rgba(179,220,237,1);background: rgba(41,128,185,1);
        background: -moz-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(41,128,185,1)), color-stop(27%, rgba(41,128,185,1)), color-stop(100%, rgba(52,152,219,1)));
        background: -webkit-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: -o-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: -ms-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        background: linear-gradient(to bottom, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2980b9', endColorstr='#3498db', GradientType=0 );
    }
    .title-presentacion-a{
        font-size: 58px;
        margin-top: 100px;
    }
    .text-presentacion {
        font-size: 20px;
    }
    footer {
        width:100%;
        height:350px;
        float: left;
        background: #2c3e50;
        padding-top:10px;
        color: #ffffff;
    }
    .link-footer {
        margin-left:20px;float:left;border-right:0.8px solid white;padding-right:20px;
    }
    .link-footer:hover {
        text-decoration: underline;
    }
    .cc-a {
        width:300px;
        float:left;
        margin-top:50px;
        margin-left: 7%;
        border-radius:3px;
        background: #34495e;
        padding:25px 25px 25px 25px;
        color: white;
    }
    .cc-b {
        width:40%;
        padding:20px;
        background: #1BB9E0;
        margin:50px;
        float: right;
        position: static;
        color:#2f4f4f;
        border-radius:5px;
    }
    .button-b {
        padding:4px;
        border-radius: 5px;
        float:right;
        border:0.5px solid #2c3e50;
        background: #7f8c8d;
        color:black;
        padding-left:8px;
        padding-right:8px;
    }
    .registro-b {
        border-radius:5px;
        background: #3DB67E;
        max-width: 40%;
        padding:25px;
        margin-left: 29%;
        overflow: hidden;
        position: fixed;
        margin-top: -100%;
    }
    .btn-registro-b{
        float:left;
        margin:50px;
        font-size: 25px;
        background: #1BB9E0;
        border:0.5px solid #3CC990;
        color:white;
        padding:5px;
        border-radius:3px;
    }
    .btn-registro-b:focus ~ .registro-b {
        margin-top: -15%;
    }
    input, textarea {
        padding:3px;
        border-radius:3px;
        border:none;
        margin:5px;
        color: #000;
        width:100%;
        font-size: 20px;
    }
    input:focus {-webkit-box-shadow: inset 0px 0px 5px 1px rgba(80,100,199,1);
        -moz-box-shadow: inset 0px 0px 5px 1px rgba(80,100,199,1);
        box-shadow: inset 0px 0px 5px 1px rgba(80,100,199,1);
    }
    select {
        padding:3px;
        border-radius:3px;
        border:none;
        float:left;
        margin:5px;
    }
    select:focus {
        -webkit-box-shadow: inset 1px 0px 18px -1px rgba(33,135,224,1);
        -moz-box-shadow: inset 1px 0px 18px -1px rgba(33,135,224,1);
        box-shadow: inset 1px 0px 18px -1px rgba(33,135,224,1);
    }
    .cc-c {
        width:350px;
        height:350px;
        margin-top: 50px;
        background: lightblue;
        margin-left:50px;
        float: left;
        padding:10px;
        border-radius:200PX;
        -webkit-box-shadow: 1px 0px 82px -27px rgba(0,0,0,1);
        -moz-box-shadow: 1px 0px 82px -27px rgba(0,0,0,1);
        box-shadow: 1px 0px 82px -27px rgba(0,0,0,1);
    }
    .buttoncc-c {
        border:none;
        border-radius: 0px 0px 110% 110%;
        padding:15px;
        font-size: 25px;
        background-color: #3FD534;
        color: #ffffff;
        opacity: 0.5;
    }
    .buttoncc-c:hover {
        -webkit-box-shadow: 1px 0px 82px -20px rgba(0,0,0,1);
        -moz-box-shadow: 1px 0px 82px -20px rgba(0,0,0,1);
        box-shadow: 1px 0px 82px -20px rgba(0,0,0,1);
        opacity: 1;
    }
    .cc-d {
        width:45%;
        margin:50px;
        float:left;
        padding:8px;
        font-size: 20px;
        min-width: 300px;
    }
    .cc-da {
        width: 40%;
        margin-top:70px;
        float: left;
        border-left:3px solid white;
        border-radius: 0px 7px 7px 0px;
        background: #2C4655;
        color: white;
        padding:8px;
        min-width: 300px;
    }
    .imgcc-d {
        width:60%;
        float: left;
        margin-left: 20%;
        border-radius:20px;
        height:300px;
        overflow: hidden;
        position: absolute;
        margin-top: 200px;
        z-index: 5;
        opacity:0.5;
        min-width: 300px;
    }
    .cc-e {
        width:45%;
        height:300px;
        margin:50px;
        min-width: 300px;
    }
    .contacto {
        width:38%;
        height:90px;
        margin:10px;
        float: left;
        margin-left:30%;
        min-width: 300px;
    }
    .contacto-b {
        width:53%;
        margin:50px 0px 0px 50px;
        float: left;
        font-size: 20px;
        min-width: 200px;
    }
    .foto-contacto {
        width:190px;
        height:190px;
        border-radius:100px;
        background: #ffffff;
        float: left;
        padding:10px;
        overflow: hidden;
        min-width: 20px;
        min-height: 20px;
    }
    .info-contacto {
        width:60%;
        float: left;
        padding:10px;
        margin-left:5%;
        margin-top:30px;
        min-width: 300px;
    }
    .ingreso {
        width:300px;
        margin-left:38%;
        margin-top: 60px;
    }
    .registro {
        width:500px;
        margin-left:30%;
        margin-top: 60px;
    }
    .ingresar-nav {
        margin-right:10px;
        border:none;
        background: none;
        height:50px;
        transition: 10ms;
        text-decoration: none;
    }
    .ingresar-nav:hover {
        border-bottom:5px solid #00ffea;
        text-decoration: none;
    }
    .ingreso-a {
        height:0px;
        position: absolute;
        overflow: hidden;
        padding:0px;
        border-radius:5px;
        background: lightblue;
        -webkit-box-shadow: 1px 3px 25px -7px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px 3px 25px -7px rgba(0,0,0,0.75);
        box-shadow: 1px 3px 25px -7px rgba(0,0,0,0.75);
    }
    .ingresar-nav:focus ~ .ingreso-a{
        height: auto;
        padding:5px;
    }
    .ingreso-a:hover {
        height: auto;
        padding:5px;
    }
    /* Remove margins and padding from the list, and add a black background color */
    ul.topnav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: none;
        position: fixed;
        width:100%;
        z-index: 999;
    }
    ul.topnav-b {
        background: #4682B4;
    }

    /* Float the list items side by side */
    ul.topnav li {float: right;}

    /* Style the links inside the list items */
 
    ul.topnav li a {
        display: inline-block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        transition: 0.3s;
        font-size: 17px;
        overflow: none;
    }

    /* Hide the list item that contains the link that should open and close the topnav on small screens */
    ul.topnav li.icon {display: none;}
    /* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
    @media screen and (max-width:680px) {
        ul.topnav li:not(:first-child) {display: none;}
        ul.topnav li.icon {
            float: right;
            display: inline-block;
        }
    }

    /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
    @media screen and (max-width:680px) {
        ul.topnav.responsive {position: fixed;background: black;}
        ul.topnav.responsive li.icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        ul.topnav.responsive li {
            float: none;
            display: inline;
        }
        ul.topnav.responsive li a {
            display: block;
            text-align: left;
        }
    }
    .mv {
        width:70%;
        margin-left:18%;
        margin-top:40px;
    }
    .m {
        width:100%;
        float: left;
    }
    .mvb {
        width:30%;
        height:100%;
        float: left;
        min-width: 300px;
    }
    .arriba-volver {
        width:75px;
        height:75px;
        position: fixed;
        -webkit-border-radius:100%;
        -moz-border-radius:100%;
        border-radius:100%;
        -webkit-box-shadow: 0px 0px 82px -19px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 82px -19px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 82px -19px rgba(0,0,0,0.75);
        margin-top: 655px;
        z-index:9999;
        background: orangered;
        padding:10px;color:white;
        margin-left: 90%;
        display: none;
        transition: 300ms;
    }
    .arriba-volver-b {
        width:75px;
        height:75px;
        position: fixed;
        -webkit-border-radius:100%;
        -moz-border-radius:100%;
        border-radius:100%;
        -webkit-box-shadow: 0px 0px 82px -19px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 82px -19px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 82px -19px rgba(0,0,0,0.75);
        margin-top: 555px;
        z-index:9999;
        background: orangered;
        padding:10px;color:white;
        margin-left: 90%;
        display: block;
        transition: 300ms;
    }
    .redes a {
        color: white;
        text-decoration: none;
    }
</style>